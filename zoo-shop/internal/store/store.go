package store

import (
	"errors"
	"sync"

	"shop/internal/products"
)

type Store struct {
	mu       sync.RWMutex
	products map[int]products.Product
	nextID   int
}

var (
	instance *Store
	once     sync.Once
)

func GetInstance() *Store {
	once.Do(func() {
		instance = &Store{
			products: make(map[int]products.Product),
			nextID:   1,
		}
	})

	return instance
}

func (s *Store) List() []products.Product {
	s.mu.RLock()
	defer s.mu.RUnlock()

	result := make([]products.Product, 0, len(s.products))
	for _, product := range s.products {
		result = append(result, product)
	}

	return result
}

func (s *Store) Get(id int) (products.Product, bool) {
	s.mu.RLock()
	defer s.mu.RUnlock()

	product, ok := s.products[id]
	return product, ok
}

func (s *Store) Create(product products.Product) products.Product {
	s.mu.Lock()
	defer s.mu.Unlock()

	product.ID = s.nextID
	s.nextID++

	s.products[product.ID] = product
	return product
}

func (s *Store) Sell(id, quantity int) error {
	s.mu.Lock()
	defer s.mu.Unlock()

	product, ok := s.products[id]
	if !ok {
		return errors.New("товар не найден")
	}

	if err := product.Sell(quantity); err != nil {
		return err
	}

	s.products[id] = product
	return nil
}

func (s *Store) ChangePrice(id int, price float64) error {
	s.mu.Lock()
	defer s.mu.Unlock()

	product, ok := s.products[id]
	if !ok {
		return errors.New("товар не найден")
	}

	if err := product.ChangePrice(price); err != nil {
		return err
	}

	s.products[id] = product
	return nil
}
