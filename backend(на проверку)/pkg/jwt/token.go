package jwt

import (
	"errors"
	"time"

	jwtv5 "github.com/golang-jwt/jwt/v5"
	"github.com/google/uuid"
)

type Claims struct {
	UserID string `json:"uid"`
	TokenType string `json:"typ"`
	jwtv5.RegisteredClaims
}
func Create(userID, tokenType, secret string, ttl time.Duration) (string, error) {
	now := time.Now()
	claims := Claims{UserID:userID, TokenType:tokenType, RegisteredClaims:jwtv5.RegisteredClaims{
		ID:uuid.NewString(), Subject:userID, IssuedAt:jwtv5.NewNumericDate(now), NotBefore:jwtv5.NewNumericDate(now), ExpiresAt:jwtv5.NewNumericDate(now.Add(ttl)),
	}}
	t := jwtv5.NewWithClaims(jwtv5.SigningMethodHS256, claims)
	return t.SignedString([]byte(secret))
}
func Verify(raw, expectedType, secret string) (*Claims, error) {
	t, err := jwtv5.ParseWithClaims(raw, &Claims{}, func(t *jwtv5.Token) (any,error) {
		if t.Method != jwtv5.SigningMethodHS256 { return nil, errors.New("unexpected signing method") }
		return []byte(secret),nil
	}, jwtv5.WithValidMethods([]string{"HS256"}), jwtv5.WithExpirationRequired())
	if err != nil { return nil, err }
	c, ok := t.Claims.(*Claims); if !ok || !t.Valid || c.TokenType != expectedType { return nil, errors.New("invalid token") }
	return c,nil
}
