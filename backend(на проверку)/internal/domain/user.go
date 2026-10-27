package domain

import "time"

type User struct {
	ID string `json:"id"`
	Phone *string `json:"phone,omitempty"`
	Email *string `json:"email,omitempty"`
	FirstName string `json:"first_name"`
	LastName string `json:"last_name,omitempty"`
	BonusBalance int64 `json:"bonus_balance_tiyn"`
	CreatedAt time.Time `json:"created_at"`
}
type Pet struct {
	ID string `json:"id"`
	UserID string `json:"-"`
	Name string `json:"name"`
	Kind string `json:"kind"`
	Breed string `json:"breed,omitempty"`
	WeightGrams int `json:"weight_grams,omitempty"`
}
