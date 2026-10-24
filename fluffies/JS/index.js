/**
 * ============================================================
 * ПУШИСТИКИ — ZOO-ГИПЕРМАРКЕТ
 * Главный клиентский скрипт для code.html:
 * калькулятор рациона, добавление в корзину, переключение питомца
 * ============================================================
 */

'use strict';

/* ============================================================
   СОСТОЯНИЕ ПРИЛОЖЕНИЯ
   ============================================================ */

let currentPet = 'dog';
let currentAge = 'adult';

/* ============================================================
   КОРЗИНА — Добавление товаров в корзину
   ============================================================ */

/**
 * Временно показывает состояние успешного добавления на кнопке «В корзину»,
 * а затем возвращает исходный текст через 1800 мс.
 *
 * @param {HTMLButtonElement} btn - Нажатая кнопка добавления в корзину.
 */
function addToCart(btn) {
  const originalHTML = btn.innerHTML;

  btn.innerHTML =
    '<span class="material-symbols-outlined" style="font-size:18px">done</span>' +
    '<span>Добавлено!</span>';
  btn.classList.add('add-to-cart-btn--success');

  setTimeout(() => {
    btn.innerHTML = originalHTML;
    btn.classList.remove('add-to-cart-btn--success');
  }, 1800);
}

/* ============================================================
   КАЛЬКУЛЯТОР КОРМА — Выбор типа питомца (Собака / Кошка)
   ============================================================ */

/**
 * Переключает активный тип питомца (собака / кошка), обновляет стили кнопок,
 * корректирует диапазон ползунка веса и пересчитывает суточную норму.
 *
 * @param {'dog'|'cat'} type - Выбранный тип питомца.
 */
function selectPetType(type) {
  currentPet = type;

  const btnDog = document.getElementById('btn-pet-dog');
  const btnCat = document.getElementById('btn-pet-cat');
  const slider = document.getElementById('weight-slider');

  if (!btnDog || !btnCat || !slider) return;

  if (type === 'dog') {
    btnDog.className = 'pet-btn pet-btn--active-dog';
    btnCat.className = 'pet-btn pet-btn--inactive';
    slider.max = 60;
    if (Number(slider.value) > 60) slider.value = 20;
  } else {
    btnCat.className = 'pet-btn pet-btn--active-cat';
    btnDog.className = 'pet-btn pet-btn--inactive';
    slider.max = 12;
    if (Number(slider.value) > 12) slider.value = 5;
  }

  updateCalculation(slider.value);
}

/* ============================================================
   КАЛЬКУЛЯТОР КОРМА — Выбор возрастной группы
   ============================================================ */

/**
 * Переключает активную возрастную группу (щенок / взрослый / пожилой),
 * обновляет стили кнопок и пересчитывает суточную норму.
 *
 * @param {'puppy'|'adult'|'senior'} age - Выбранная возрастная категория.
 */
function selectAge(age) {
  currentAge = age;

  const ages = ['puppy', 'adult', 'senior'];

  ages.forEach((a) => {
    const el = document.getElementById('btn-age-' + a);
    if (!el) return;

    if (a === age) {
      el.className = 'age-btn age-btn--active';
    } else {
      el.className = 'age-btn age-btn--inactive';
    }
  });

  const slider = document.getElementById('weight-slider');
  if (slider) updateCalculation(slider.value);
}

/* ============================================================
   КАЛЬКУЛЯТОР КОРМА — Логика расчета суточной нормы
   ============================================================ */

/**
 * Рассчитывает рекомендуемую суточную порцию корма в граммах
 * на основе веса, типа питомца и возраста, затем обновляет панель в DOM.
 *
 * @param {number|string} weightVal - Текущее значение веса с ползунка (в кг).
 */
function updateCalculation(weightVal) {
  const weight = Number(weightVal);

  const weightDisplay  = document.getElementById('weight-display');
  const gramsEl        = document.getElementById('calculated-grams');
  const recNameEl      = document.getElementById('recommended-product-name');

  if (weightDisplay) weightDisplay.innerText = weight + '\u00a0кг';

  let dailyGrams = 0;

  if (currentPet === 'dog') {
    let base = weight * 15;
    if (currentAge === 'puppy')  base *= 1.4;
    if (currentAge === 'senior') base *= 0.85;
    dailyGrams = Math.round(base);

    if (recNameEl) recNameEl.innerText = 'Grandorf Adult 4 Meat (' + weight + '\u00a0кг)';
  } else {
    let base = weight * 12 + 15;
    if (currentAge === 'puppy')  base *= 1.3;
    if (currentAge === 'senior') base *= 0.9;
    dailyGrams = Math.round(base);

    if (recNameEl) recNameEl.innerText = 'Monge Cat Superpremium (' + weight + '\u00a0кг)';
  }

  if (gramsEl) gramsEl.innerText = dailyGrams;
}

/* ============================================================
   КАЛЬКУЛЯТОР КОРМА — Живое обновление ползунка
   ============================================================ */

/**
 * Подключает слушатель событий для ползунка веса, чтобы пересчет
 * происходил мгновенно при перемещении бегунка.
 */
function initWeightSlider() {
  const slider = document.getElementById('weight-slider');
  if (!slider) return;

  slider.addEventListener('input', () => {
    updateCalculation(slider.value);
  });
}

/* ============================================================
   ИНИЦИАЛИЗАЦИЯ ПРИ ЗАГРУЗКЕ СТРАНИЦЫ
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {
  initWeightSlider();

  // Выполняем начальный расчет для отображения значений по умолчанию
  const slider = document.getElementById('weight-slider');
  if (slider) updateCalculation(slider.value);
});
