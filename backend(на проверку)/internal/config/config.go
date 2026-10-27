package config

import (
	"errors"
	"os"
	"strconv"
	"strings"
	"time"

	"github.com/jackc/pgx/v5"
)

type Config struct {
	AppEnv string
	HTTPAddr string
	DatabaseURL string
	AccessSecret string
	RefreshSecret string
	AccessTTL time.Duration
	RefreshTTL time.Duration
	AllowedOrigins []string
	RateLimitRPS int
}

func Load() (Config, error) {
	c := Config{
		AppEnv: env("APP_ENV", "development"),
		HTTPAddr: env("HTTP_ADDR", ":8080"),
		DatabaseURL: strings.TrimSpace(os.Getenv("DATABASE_URL")),
		AccessSecret: os.Getenv("JWT_ACCESS_SECRET"),
		RefreshSecret: os.Getenv("JWT_REFRESH_SECRET"),
		AllowedOrigins: split(os.Getenv("CORS_ALLOWED_ORIGINS")),
		RateLimitRPS: intEnv("RATE_LIMIT_RPS", 10),
	}
	var err error
	c.AccessTTL, err = time.ParseDuration(env("ACCESS_TOKEN_TTL", "15m")); if err != nil { return c, err }
	c.RefreshTTL, err = time.ParseDuration(env("REFRESH_TOKEN_TTL", "720h")); if err != nil { return c, err }
	if c.DatabaseURL == "" { return c, errors.New("DATABASE_URL is required") }
	if len(c.AccessSecret) < 32 || len(c.RefreshSecret) < 32 { return c, errors.New("JWT secrets must each be at least 32 characters") }
	if c.AccessSecret == c.RefreshSecret { return c, errors.New("access and refresh JWT secrets must differ") }
	if c.AccessTTL <= 0 || c.RefreshTTL <= 0 { return c, errors.New("token TTLs must be positive") }
	if c.RateLimitRPS < 1 { return c, errors.New("RATE_LIMIT_RPS must be positive") }
	return c, nil
}
func env(k, d string) string { if v := strings.TrimSpace(os.Getenv(k)); v != "" { return v }; return d }
func intEnv(k string, d int) int { v, err := strconv.Atoi(os.Getenv(k)); if err != nil { return d }; return v }
func split(s string) []string { var out []string; for _, v := range strings.Split(s, ",") { if v = strings.TrimSpace(v); v != "" { out = append(out, v) } }; return out }
func (c Config) PGXConfig() *pgx.ConnConfig { cfg, _ := pgx.ParseConfig(c.DatabaseURL); return cfg }
