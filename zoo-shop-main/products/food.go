package products

import (
	"fmt"
)

type Food struct {
	Name     string
	Product  Product
	Category Category
}

func (f *Food) GetInfo() {
	fmt.Printf("Еда со спермай: %s, цена: %d, имеется в количестве: %d.\n", f.Name, f.Product.Price, f.Product.Stock)
}

func NewFood(name string, price int, stock int) *Food {
	return &Food{
		Name: name,
		Product: Product{
			Price: price,
			Stock: stock,
		},
		Category: Category{
			CategoryName: "Еда со спермай",
		},
	}
}

func (f *Food) Sell() {
	f.Product.Stock--
}
