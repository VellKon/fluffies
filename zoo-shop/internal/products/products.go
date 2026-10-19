package products

import (
	"errors"
	"fmt"
	"strings"
)

type Category string

const (
	CategoryFood Category = "food"
	CategoryToy  Category = "toy"
)

type Product struct {
	ID       int      `json:"id"`
	Name     string   `json:"name"`
	Price    float64  `json:"price"`
	Stock    int      `json:"stock"`
	Category Category `json:"category"`
}

func New(name string, price float64, stock int, category Category) (*Product, error) {
	name = strings.TrimSpace(name)

	if name == "" {
		return nil, errors.New("название товара обязательно")
	}
	if price < 0 {
		return nil, errors.New("цена не может быть отрицательной")
	}
	if stock < 0 {
		return nil, errors.New("количество не может быть отрицательным")
	}
	if category != CategoryFood && category != CategoryToy {
		return nil, errors.New("неизвестная категория товара")
	}

	return &Product{
		Name:     name,
		Price:    price,
		Stock:    stock,
		Category: category,
	}, nil
}

func (p *Product) GetInfo() string {
	return fmt.Sprintf(
		"Товар: %s, категория: %s, цена: %.2f, остаток: %d",
		p.Name, p.Category, p.Price, p.Stock,
	)
}

func (p *Product) Sell(quantity int) error {
	if quantity <= 0 {
		return errors.New("количество для продажи должно быть больше нуля")
	}
	if quantity > p.Stock {
		return errors.New("недостаточно товара на складе")
	}

	p.Stock -= quantity
	return nil
}

func (p *Product) ChangePrice(newPrice float64) error {
	if newPrice < 0 {
		return errors.New("цена не может быть отрицательной")
	}

	p.Price = newPrice
	return nil
}
