package domain

import "time"

type Order struct {
	ID string `json:"id"`
	UserID string `json:"-"`
	Status string `json:"status"`
	SubtotalTiyn int64 `json:"subtotal_tiyn"`
	DeliveryTiyn int64 `json:"delivery_tiyn"`
	BonusSpentTiyn int64 `json:"bonus_spent_tiyn"`
	TotalTiyn int64 `json:"total_tiyn"`
	CreatedAt time.Time `json:"created_at"`
}
