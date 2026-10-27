package httpapi

import (
	"encoding/json"
	"net/http"
	"strings"
)

type calcRequest struct {
	PetKind string `json:"pet_kind"`
	AgeGroup string `json:"age_group"`
	WeightKG float64 `json:"weight_kg"`
	Activity string `json:"activity"`
}
func (a *API) calculate(w http.ResponseWriter, r *http.Request) {
	r.Body = http.MaxBytesReader(w, r.Body, 1<<20)
	var in calcRequest
	dec := json.NewDecoder(r.Body); dec.DisallowUnknownFields()
	if err := dec.Decode(&in); err != nil { writeJSON(w,400,map[string]string{"error":"invalid_json"}); return }
	in.PetKind = strings.ToLower(strings.TrimSpace(in.PetKind))
	in.AgeGroup = strings.ToLower(strings.TrimSpace(in.AgeGroup))
	in.Activity = strings.ToLower(strings.TrimSpace(in.Activity))
	if in.PetKind != "dog" && in.PetKind != "cat" { writeJSON(w,400,map[string]string{"error":"unsupported_pet_kind"}); return }
	if in.AgeGroup != "puppy" && in.AgeGroup != "adult" && in.AgeGroup != "senior" { writeJSON(w,400,map[string]string{"error":"invalid_age_group"}); return }
	if in.Activity != "low" && in.Activity != "normal" && in.Activity != "high" { writeJSON(w,400,map[string]string{"error":"invalid_activity"}); return }
	if in.WeightKG <= 0 || in.WeightKG > 150 { writeJSON(w,400,map[string]string{"error":"invalid_weight"}); return }
	// Placeholder estimate only. Product-specific feeding charts and veterinary review are required before production use.
	factor := 1.0
	if in.Activity == "low" { factor = 0.85 }; if in.Activity == "high" { factor = 1.15 }
	if in.AgeGroup == "puppy" { factor *= 1.3 }; if in.AgeGroup == "senior" { factor *= 0.9 }
	grams := int(in.WeightKG * 15 * factor)
	writeJSON(w,200,map[string]any{"daily_grams_estimate":grams,"feedings_per_day":2,"disclaimer":"Предварительная оценка, не ветеринарное назначение. Для расчёта используйте таблицу кормления конкретного продукта."})
}
