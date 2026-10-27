package httpapi

import (
	"encoding/json"
	"log/slog"
	"net/http"
	"strings"
	"sync"
	"time"

	"github.com/go-chi/chi/v5"
	"github.com/go-chi/chi/v5/middleware"
	"github.com/jackc/pgx/v5/pgxpool"
	"petshop/backend/internal/config"
)

type API struct { cfg config.Config; db *pgxpool.Pool; log *slog.Logger; limiter *limiter }
func New(cfg config.Config, db *pgxpool.Pool, logger *slog.Logger) http.Handler {
	a := &API{cfg: cfg, db: db, log: logger, limiter: newLimiter(cfg.RateLimitRPS)}
	r := chi.NewRouter()
	r.Use(middleware.RequestID, middleware.RealIP, middleware.Recoverer, middleware.Timeout(20*time.Second))
	r.Use(a.logging, a.cors)
	r.Get("/healthz", a.health)
	r.Get("/readyz", a.ready)
	r.Route("/api/v1", func(r chi.Router) {
		r.Get("/catalog/categories", a.notImplemented)
		r.Get("/catalog/products", a.notImplemented)
		r.Get("/catalog/products/{slug}", a.notImplemented)
		r.Get("/catalog/bestsellers", a.notImplemented)
		r.Post("/calculator/calculate", a.calculate)
		r.With(a.rateLimitMiddleware).Post("/auth/register", a.notImplemented)
		r.With(a.rateLimitMiddleware).Post("/auth/login", a.notImplemented)
		r.With(a.rateLimitMiddleware).Post("/auth/refresh", a.notImplemented)
		r.Get("/users/me", a.notImplemented)
		r.Put("/users/me", a.notImplemented)
		r.Get("/users/me/pets", a.notImplemented)
		r.Post("/users/me/pets", a.notImplemented)
		r.Put("/users/me/pets/{id}", a.notImplemented)
		r.Get("/cart", a.notImplemented)
		r.Post("/cart/items", a.notImplemented)
		r.Put("/cart/items/{id}", a.notImplemented)
		r.Delete("/cart/items/{id}", a.notImplemented)
		r.Post("/cart/sync", a.notImplemented)
		r.Post("/orders/checkout", a.notImplemented)
		r.Post("/orders/{id}/kaspi-qr", a.notImplemented)
		r.Get("/orders/my", a.notImplemented)
		r.Post("/webhooks/kaspi", a.notImplemented)
		r.Get("/subscriptions", a.notImplemented)
		r.Post("/subscriptions", a.notImplemented)
		r.Patch("/subscriptions/{id}/pause", a.notImplemented)
		r.Patch("/subscriptions/{id}/resume", a.notImplemented)
		r.Delete("/subscriptions/{id}", a.notImplemented)
		r.Get("/faq", a.notImplemented)
	})
	return r
}
func (a *API) logging(next http.Handler) http.Handler {
	return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		start := time.Now()
		next.ServeHTTP(w, r)
		a.log.Info("http request", "method", r.Method, "path", r.URL.Path, "duration_ms", time.Since(start).Milliseconds(), "request_id", middleware.GetReqID(r.Context()))
	})
}
func (a *API) cors(next http.Handler) http.Handler {
	allowed := map[string]bool{}; for _, o := range a.cfg.AllowedOrigins { allowed[o] = true }
	return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		origin := r.Header.Get("Origin")
		if origin != "" && allowed[origin] {
			w.Header().Set("Access-Control-Allow-Origin", origin)
			w.Header().Set("Vary", "Origin")
			w.Header().Set("Access-Control-Allow-Methods", "GET, POST, PUT, PATCH, DELETE, OPTIONS")
			w.Header().Set("Access-Control-Allow-Headers", "Authorization, Content-Type, Idempotency-Key")
		}
		if r.Method == http.MethodOptions { w.WriteHeader(http.StatusNoContent); return }
		next.ServeHTTP(w, r)
	})
}
func (a *API) health(w http.ResponseWriter, r *http.Request) { writeJSON(w, 200, map[string]string{"status":"ok"}) }
func (a *API) ready(w http.ResponseWriter, r *http.Request) {
	if err := a.db.Ping(r.Context()); err != nil { writeJSON(w, 503, map[string]string{"status":"unavailable"}); return }
	writeJSON(w, 200, map[string]string{"status":"ready"})
}
func (a *API) notImplemented(w http.ResponseWriter, r *http.Request) {
	writeJSON(w, http.StatusNotImplemented, map[string]string{"error":"not_implemented","message":"endpoint is scaffolded but not implemented"})
}
func (a *API) rateLimitMiddleware(next http.Handler) http.Handler {
    return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
        if !a.limiter.allow(r.RemoteAddr) {
            writeJSON(w, http.StatusTooManyRequests, map[string]string{"error":"rate_limited"})
            return
        }
        next.ServeHTTP(w, r)
    })
}
func writeJSON(w http.ResponseWriter, status int, v any) { w.Header().Set("Content-Type","application/json; charset=utf-8"); w.WriteHeader(status); _ = json.NewEncoder(w).Encode(v) }

type limiter struct { mu sync.Mutex; counts map[string]bucket; max int }
type bucket struct { n int; reset time.Time }
func newLimiter(max int) *limiter { return &limiter{counts: map[string]bucket{}, max:max} }
func (l *limiter) allow(remote string) bool {
	host := remote
	if i := strings.LastIndex(remote, ":"); i > 0 { host = remote[:i] }
	now := time.Now(); l.mu.Lock(); defer l.mu.Unlock()
	b, ok := l.counts[host]; if !ok || now.After(b.reset) { l.counts[host] = bucket{n:1, reset:now.Add(time.Second)}; return true }
	if b.n >= l.max { return false }; b.n++; l.counts[host] = b; return true
}
