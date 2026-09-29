package products

import (
	"fmt"
)

type Toy struct {
	Name     string
	Product  Product
	Category Category
}

func (t *Toy) GetInfo() {
	fmt.Printf("Игрушка 18+: %s, цена: %d, имеется в количестве: %d.\n", t.Name, t.Product.Price, t.Product.Stock)
}

func NewToy(name string, price int, stock int) *Toy {
	return &Toy{
		Name: name,
		Product: Product{
			Price: price,
			Stock: stock,
		},
		Category: Category{
			CategoryName: "Игрушки 18+",
		},
	}
}

func (t *Toy) Sell() {
	t.Product.Stock--
}

func (t *Toy) ChangePrice(newSum int) {
	t.Product.Price = newSum
}
