package pets

type Pet struct {
	health string
	name   string
}

type Cat struct {
	animalSpecies string
	Pet           Pet
}

func NewPet(healt, name, animalSpecies string) *Cat {
	return &Cat{
		animalSpecies: animalSpecies,
		Pet: Pet{
			health: healt,
			name:   name,
		},
	}
}
