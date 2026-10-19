package api

import (
	"encoding/json"
	"errors"
	"io"
	"net/http"
	"strconv"

	"shop/internal/products"
	"shop/internal/store"
)

type Handler struct {
	store *store.Store
}

func NewHandler(s *store.Store) *Handler {
	return &Handler{store: s}
}

func (h *Handler) RegisterRoutes(mux *http.ServeMux) {
	mux.HandleFunc("GET /products", h.getProducts)
	mux.HandleFunc("GET /products/{id}", h.getProduct)
	mux.HandleFunc("POST /products", h.createProduct)
	mux.HandleFunc("PATCH /products/{id}/price", h.changePrice)
	mux.HandleFunc("POST /products/{id}/sell", h.sellProduct)
}

func writeJSON(w http.ResponseWriter, status int, data any) {
	w.Header().Set("Content-Type", "application/json; charset=utf-8")
	w.WriteHeader(status)
	_ = json.NewEncoder(w).Encode(data)
}

func writeError(w http.ResponseWriter, status int, message string) {
	writeJSON(w, status, map[string]string{"error": message})
}

func parseID(r *http.Request) (int, error) {
	id, err := strconv.Atoi(r.PathValue("id"))
	if err != nil || id <= 0 {
		return 0, errors.New("некорректный ID")
	}
	return id, nil
}

func (h *Handler) getProducts(w http.ResponseWriter, r *http.Request) {
	writeJSON(w, http.StatusOK, h.store.List())
}

func (h *Handler) getProduct(w http.ResponseWriter, r *http.Request) {
	id, err := parseID(r)
	if err != nil {
		writeError(w, http.StatusBadRequest, err.Error())
		return
	}

	product, ok := h.store.Get(id)
	if !ok {
		writeError(w, http.StatusNotFound, "товар не найден")
		return
	}

	writeJSON(w, http.StatusOK, product)
}

type createProductRequest struct {
	Name     string            `json:"name"`
	Price    float64           `json:"price"`
	Stock    int               `json:"stock"`
	Category products.Category `json:"category"`
}

func (h *Handler) createProduct(w http.ResponseWriter, r *http.Request) {
	r.Body = http.MaxBytesReader(w, r.Body, 1<<20)

	var req createProductRequest

	decoder := json.NewDecoder(r.Body)
	decoder.DisallowUnknownFields()

	if err := decoder.Decode(&req); err != nil {
		writeError(w, http.StatusBadRequest, "некорректный JSON")
		return
	}

	var extra any
	if err := decoder.Decode(&extra); err != io.EOF {
		writeError(w, http.StatusBadRequest, "ожидается один JSON-объект")
		return
	}

	product, err := products.New(
		req.Name,
		req.Price,
		req.Stock,
		req.Category,
	)
	if err != nil {
		writeError(w, http.StatusBadRequest, err.Error())
		return
	}

	created := h.store.Create(*product)
	w.Header().Set("Location", "/products/"+strconv.Itoa(created.ID))
	writeJSON(w, http.StatusCreated, created)
}

func (h *Handler) changePrice(w http.ResponseWriter, r *http.Request) {
	id, err := parseID(r)
	if err != nil {
		writeError(w, http.StatusBadRequest, err.Error())
		return
	}

	var req struct {
		Price *float64 `json:"price"`
	}

	decoder := json.NewDecoder(r.Body)
	decoder.DisallowUnknownFields()

	if err := decoder.Decode(&req); err != nil {
		writeError(w, http.StatusBadRequest, "некорректный JSON")
		return
	}
	if req.Price == nil {
		writeError(w, http.StatusBadRequest, "поле price обязательно")
		return
	}

	if err := h.store.ChangePrice(id, *req.Price); err != nil {
		if err.Error() == "товар не найден" {
			writeError(w, http.StatusNotFound, err.Error())
		} else {
			writeError(w, http.StatusBadRequest, err.Error())
		}
		return
	}

	product, _ := h.store.Get(id)
	writeJSON(w, http.StatusOK, product)
}

func (h *Handler) sellProduct(w http.ResponseWriter, r *http.Request) {
	id, err := parseID(r)
	if err != nil {
		writeError(w, http.StatusBadRequest, err.Error())
		return
	}

	var req struct {
		Quantity int `json:"quantity"`
	}

	decoder := json.NewDecoder(r.Body)
	decoder.DisallowUnknownFields()

	if err := decoder.Decode(&req); err != nil {
		writeError(w, http.StatusBadRequest, "некорректный JSON")
		return
	}

	if err := h.store.Sell(id, req.Quantity); err != nil {
		if err.Error() == "товар не найден" {
			writeError(w, http.StatusNotFound, err.Error())
		} else {
			writeError(w, http.StatusBadRequest, err.Error())
		}
		return
	}

	product, _ := h.store.Get(id)
	writeJSON(w, http.StatusOK, product)
}
