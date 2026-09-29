package pets

import "fmt"

func (c *Cat) GetInfo() {
	fmt.Printf("Животное: %s, имя: %s, возраст: %s.\n", c.animalSpecies, c.Pet.name, c.Pet.health)
}

func (c *Cat) Sound() {
	fmt.Printf("Кот мяукает\n")
}
