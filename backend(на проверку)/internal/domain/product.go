package domain

type Product struct {
	ID string `json:"id"`
	Slug string `json:"slug"`
	Name string `json:"name"`
	Description string `json:"description,omitempty"`
	Brand string `json:"brand,omitempty"`
	PetKind string `json:"pet_kind"`
	IsHolistic bool `json:"is_holistic"`
}
type Variant struct {
	ID string `json:"id"`
	ProductID string `json:"product_id"`
	SKU string `json:"sku"`
	WeightGrams int `json:"weight_grams"`
	PriceTiyn int64 `json:"price_tiyn"`
	Stock int `json:"stock"`
}
