package pets

import "fmt"

type Pet struct {
	Name   string `json:"name"`
	Health string `json:"health"`
}

type Cat struct {
	AnimalSpecies string `json:"animalSpecies"`
	Pet           Pet    `json:"pet"`
}

func NewCat(name, health string) *Cat {
	return &Cat{
		AnimalSpecies: "Кошка",
		Pet: Pet{
			Name:   name,
			Health: health,
		},
	}
}

func (c *Cat) GetInfo() string {
	return fmt.Sprintf(
		"Животное: %s, имя: %s, состояние здоровья: %s",
		c.AnimalSpecies,
		c.Pet.Name,
		c.Pet.Health,
	)
}
