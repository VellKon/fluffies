package main

import (
	"log"
	"net/http"
	"time"

	"shop/internal/api"
	"shop/internal/store"
)

func main() {
	db := store.GetInstance()

	handler := api.NewHandler(db)

	mux := http.NewServeMux()
	handler.RegisterRoutes(mux)

	server := &http.Server{
		Addr:              ":8080",
		Handler:           mux,
		ReadHeaderTimeout: 5 * time.Second,
	}

	log.Println("http://localhost:8080")

	if err := server.ListenAndServe(); err != nil &&
		err != http.ErrServerClosed {
		log.Fatal(err)
	}
}
