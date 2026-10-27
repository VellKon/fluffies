package domain

type CartItem struct {
	ID string `json:"id"`
	VariantID string `json:"variant_id"`
	Quantity int `json:"quantity"`
	UnitPriceTiyn int64 `json:"unit_price_tiyn"`
}
