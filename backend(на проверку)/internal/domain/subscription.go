package domain

import "time"

type Subscription struct {
	ID string `json:"id"`
	UserID string `json:"-"`
	VariantID string `json:"variant_id"`
	Quantity int `json:"quantity"`
	IntervalDays int `json:"interval_days"`
	Status string `json:"status"`
	NextDeliveryAt time.Time `json:"next_delivery_at"`
}
