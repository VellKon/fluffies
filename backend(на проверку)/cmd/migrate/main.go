package main

import (
	"fmt"
	"os"

	"github.com/golang-migrate/migrate/v4"
	_ "github.com/golang-migrate/migrate/v4/database/postgres"
	_ "github.com/golang-migrate/migrate/v4/source/file"

	"petshop/backend/internal/config"
)

func main() {
	if len(os.Args) != 2 ||
		(os.Args[1] != "up" && os.Args[1] != "down") {
		fmt.Fprintln(os.Stderr, "usage: go run ./cmd/migrate up|down")
		os.Exit(2)
	}

	cfg, err := config.Load()
	if err != nil {
		fatal(err)
	}

	m, err := migrate.New(
		"file://migrations",
		cfg.DatabaseURL,
	)
	if err != nil {
		fatal(err)
	}
	defer m.Close()

	switch os.Args[1] {
	case "up":
		err = m.Up()
	case "down":
		err = m.Down()
	}

	if err != nil && err != migrate.ErrNoChange {
		fatal(err)
	}

	fmt.Println("Migrations completed successfully")
}

func fatal(err error) {
	fmt.Fprintln(os.Stderr, err)
	os.Exit(1)
}
