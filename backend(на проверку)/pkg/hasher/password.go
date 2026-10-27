package hasher

import "golang.org/x/crypto/bcrypt"

const cost = 12

func HashPassword(password string) (string, error) {
	if len(password) < 12 { return "", ErrWeakPassword }
	if len(password) > 72 { return "", ErrPasswordTooLong }
	b, err := bcrypt.GenerateFromPassword([]byte(password), cost)
	return string(b), err
}
func ComparePassword(hash, password string) error { return bcrypt.CompareHashAndPassword([]byte(hash), []byte(password)) }

type passwordError string
func (e passwordError) Error() string { return string(e) }
const ErrWeakPassword passwordError = "password must contain at least 12 bytes"
const ErrPasswordTooLong passwordError = "bcrypt password must not exceed 72 bytes"
