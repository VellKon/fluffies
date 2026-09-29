package main

import (
	"main/pets"
	products "main/products"
)

func main() {
	toy := products.NewToy("Медведь", 500, 15)
	toy.Sell()
	toy.ChangePrice(750)
	toy.GetInfo()

	food := products.NewFood("Гамбургер", 1300, 10)
	food.Sell()
	food.GetInfo()

	animal := pets.NewPet("1 года 1 месяц", "Сэм", "Кот")
	animal.GetInfo()
	animal.Sound()
}
