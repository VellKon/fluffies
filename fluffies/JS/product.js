/**
 * ============================================================
 * ПУШИСТИКИ — Карточка товара: Grandorf 4 Meat Adult Medium
 * Интерактивный функционал страницы товара
 * ============================================================
 */

/** @type {number} Базовая стоимость выбранной фасовки (в тенге) */
let currentBasePrice = 42500;

/** @type {number} Старая стоимость до скидки (в тенге) */
let currentOldPrice = 47000;

/** @type {number} Бонусы за 1 шт. фасовки */
let currentBonus = 1275;

/** @type {number} Текущее количество товара */
let currentQuantity = 1;

/** @type {boolean} Флаг оформления регулярной автодоставки со скидкой 15% */
let isSubscription = false;

/** @type {string[]} Массив изображений галереи товара */
const galleryImages = [
  'https://lh3.googleusercontent.com/aida-public/AB6AXuDc640i_X8HL0T9ja0DYAoqDVUd1U4u5IqXyAmrXuABfVAsfO6ef-y_K_vwzNUehP99IOM8s2orOnZH5cI_x5BBWZzYIwnDdYgWKuQ72vEjWk7jVLgOhWZJ8EktUTPDE5U0Ez3eGm3HFacSV0jrao4pEfsuoU4SvmvTGmj84yWbpPOQEm_PWh4iBiIFia1o6yVofFjPZ3eBjhTIV50eg30-Izi8C058CvEw0jz5zL4xvVHhTkmg-oPf',
  'https://lh3.googleusercontent.com/aida-public/AB6AXuAW-aNiomXzWscnJkkJ5FAMD-YqtCE9aZdj_K1-bgThMshBKPBhIVaAaxkCPfv4c9T8uyGF4arFGZDF5xHKDslquI8hu_GhONDLmlZwyt0nkirOqwQckHl6fp8PL1bHlSTfpweT7snIA5Sm6O7GSpkg-rT4bWsj5RcU9PSclx_hcueLXcQ4ctPnhFuGFxJJe6wDnlEwvriiw9VZFM228r7JmwYuy_Gp7xgniar3Ng0q342ojXlgWUUg',
  'https://lh3.googleusercontent.com/aida-public/AB6AXuBVkVHUSKD2T2Yk2MKpa9yLycDOrX6kzCL911yWOPZ766XJUcgdIbaP5iXpuWEUeZ1eldaORIfmVfHM_vVAYywCboEVa0sE8lXP9c4BtXLui7MRTIEUCawK78nA3OGG67OOcxB-tk7HjlkqmFNqxHAZhYon4seb2_MCQfTFSxjf0qU12JinuDjC36WkerIX57jLNyy39UfDcMmgrBLwRi5Ip_NQOr-TYoPfRysranUMG5U29B6Qec_j',
  'https://lh3.googleusercontent.com/aida-public/AB6AXuCNvUeXefGCR0e_wVs_0NXRPC44TrBI4ETu93ms0QXfVhoVF7GTXDnrh2Btwzyw6XL5a88LR4x6wpz6CXJcw4VrDUGskxKWti9n5PoZwnT3qEx929hx45PkVA6rZ9FFTHbZgxuNawAUo-lqgSCQox40_wDDSxRRvbGx0Mysu-M6Q1AztjuD4aR3Zi-YXLX54ngY-fqgZd1aA4vEfSm1EP-yZ-AVJG6qxe4ur-EeVQBOekPXSPjBBZP9'
];

/**
 * Переключение активного изображения в галерее
 * @param {number} index Индекс миниатюры (0-3)
 */
function changeGallery(index) {
  const mainImg = document.getElementById('main-product-image');
  if (mainImg && galleryImages[index]) {
    mainImg.style.opacity = '0.4';
    setTimeout(() => {
      mainImg.src = galleryImages[index];
      mainImg.style.opacity = '1';
    }, 150);
  }

  const thumbs = document.querySelectorAll('.gallery-thumb');
  thumbs.forEach((thumb, i) => {
    if (i === index) {
      thumb.classList.add('gallery-thumb--active');
    } else {
      thumb.classList.remove('gallery-thumb--active');
    }
  });
}

/**
 * Выбор фасовки товара (1 кг, 3 кг, 12 кг)
 * @param {string} size Название фасовки
 * @param {number} price Цена со скидкой
 * @param {number} oldPrice Базовая цена без скидки
 * @param {number} saving Сумма экономии
 * @param {number} bonus Начисляемые бонусы
 */
function selectPackage(size, price, oldPrice, saving, bonus) {
  currentBasePrice = price;
  currentOldPrice = oldPrice;
  currentBonus = bonus;

  const buttons = document.querySelectorAll('#pack-selector .pack-opt');
  buttons.forEach(btn => {
    btn.classList.remove('pack-opt--active');
  });

  const activeBtn = event ? event.currentTarget : null;
  if (activeBtn) {
    activeBtn.classList.add('pack-opt--active');
  }

  updatePriceDisplay();
}

/**
 * Переключение режима покупки: разовая покупка или регулярная автодоставка
 * @param {'once'|'subscribe'} mode Режим покупки
 */
function toggleOrderMode(mode) {
  isSubscription = (mode === 'subscribe');
  updatePriceDisplay();
}

/**
 * Пересчет и отображение цен, скидок, бонусов и экономии
 */
function updatePriceDisplay() {
  const finalPrice = isSubscription ? Math.round(currentBasePrice * 0.85) : currentBasePrice;
  const totalPrice = finalPrice * currentQuantity;
  const oldTotal = currentOldPrice * currentQuantity;

  const priceEl = document.getElementById('display-price');
  const oldPriceEl = document.getElementById('display-old-price');
  const bonusEl = document.getElementById('display-bonus');
  const savingEl = document.getElementById('display-saving');
  const discountBadge = document.getElementById('display-discount');

  if (priceEl) {
    priceEl.textContent = totalPrice.toLocaleString('ru-RU') + ' ₸';
  }
  if (oldPriceEl) {
    oldPriceEl.textContent = oldTotal.toLocaleString('ru-RU') + ' ₸';
  }
  if (bonusEl) {
    bonusEl.textContent = `+${(currentBonus * currentQuantity).toLocaleString('ru-RU')} бонусов на карту «Пушистики.Club»`;
  }

  const totalSaving = oldTotal - totalPrice;
  if (savingEl) {
    savingEl.textContent = totalSaving.toLocaleString('ru-RU') + ' ₸';
  }

  const discountPercent = Math.round((1 - totalPrice / oldTotal) * 100);
  if (discountBadge) {
    discountBadge.textContent = `-${discountPercent}%`;
  }

  const oncePriceEl = document.getElementById('price-once');
  const subPriceEl = document.getElementById('price-sub');
  if (oncePriceEl) {
    oncePriceEl.textContent = currentBasePrice.toLocaleString('ru-RU') + ' ₸';
  }
  if (subPriceEl) {
    subPriceEl.textContent = Math.round(currentBasePrice * 0.85).toLocaleString('ru-RU') + ' ₸';
  }
}

/**
 * Изменение количества единиц товара
 * @param {number} delta Шаг изменения (+1 или -1)
 */
function adjustQty(delta) {
  currentQuantity = Math.max(1, currentQuantity + delta);
  const input = document.getElementById('item-quantity');
  if (input) {
    input.value = currentQuantity;
  }
  updatePriceDisplay();
}

/**
 * Переключение информационных вкладок о товаре
 * @param {string} tabId Идентификатор вкладки ('tab-desc', 'tab-calc', 'tab-reviews', 'tab-vet')
 */
function switchTab(tabId) {
  const panels = document.querySelectorAll('.tab-panel');
  panels.forEach(panel => {
    panel.classList.remove('tab-panel--active');
  });

  const targetPanel = document.getElementById(tabId);
  if (targetPanel) {
    targetPanel.classList.add('tab-panel--active');
  }

  const buttons = document.querySelectorAll('.tab-button');
  buttons.forEach(btn => {
    btn.classList.remove('tab-button--active');
  });

  const activeBtn = document.getElementById('btn-' + tabId);
  if (activeBtn) {
    activeBtn.classList.add('tab-button--active');
  }
}

/**
 * Калькулятор суточной нормы кормления собаки
 */
function calculateFoodDose() {
  const weightInput = document.getElementById('calc-dog-weight');
  const activitySelect = document.getElementById('calc-dog-activity');
  const resultGrams = document.getElementById('calc-result-grams');
  const resultDays = document.getElementById('calc-result-days');

  const weight = parseFloat(weightInput ? weightInput.value : '18') || 18;
  const factor = parseFloat(activitySelect ? activitySelect.value : '1.0') || 1.0;

  // Формула суточной нормы корма Grandorf для взрослых средних собак: ~12.5г на 1 кг веса * фактор активности
  const dailyPortion = Math.round(weight * 12.5 * factor);
  const daysIn12kg = Math.round(12000 / dailyPortion);

  if (resultGrams) {
    resultGrams.textContent = `${dailyPortion} г / сутки`;
  }
  if (resultDays) {
    resultDays.textContent = `${daysIn12kg} дней`;
  }
}

/**
 * Визуальная индикация добавления товара в корзину
 */
function triggerAddToCart() {
  const btn = document.getElementById('add-to-cart-btn');
  const text = document.getElementById('cart-button-text');
  const icon = btn ? btn.querySelector('.material-symbols-outlined') : null;

  if (btn && text) {
    const origText = text.textContent;
    text.textContent = 'Добавлено в корзину ✓';
    if (icon) icon.textContent = 'check_circle';
    btn.classList.add('btn-add-cart--success');

    setTimeout(() => {
      text.textContent = origText;
      if (icon) icon.textContent = 'shopping_bag';
      btn.classList.remove('btn-add-cart--success');
    }, 1800);
  }
}

/**
 * Открытие модального окна быстрой оплаты через Kaspi QR
 */
function triggerKaspiModal() {
  const modal = document.getElementById('kaspi-modal');
  if (modal) {
    modal.classList.add('modal--open');
    document.body.style.overflow = 'hidden';
  } else {
    alert('Оформление через Kaspi QR: отсканируйте код в приложении Kaspi.kz для оплаты без комиссии или оформления в рассрочку 0-0-3');
  }
}

/**
 * Закрытие модального окна Kaspi QR
 */
function closeKaspiModal() {
  const modal = document.getElementById('kaspi-modal');
  if (modal) {
    modal.classList.remove('modal--open');
    document.body.style.overflow = '';
  }
}

/**
 * Быстрое добавление сопутствующего товара в корзину
 * @param {HTMLElement} button Кнопка добавления
 * @param {string} name Наименование сопутствующего товара
 */
function quickAddCompanion(button, name) {
  const icon = button.querySelector('.material-symbols-outlined');
  if (icon) {
    icon.textContent = 'done';
    button.classList.add('companion-btn--added');
    setTimeout(() => {
      icon.textContent = 'add';
      button.classList.remove('companion-btn--added');
    }, 1400);
  }
}

/**
 * Инициализация обработчиков при загрузке DOM
 */
document.addEventListener('DOMContentLoaded', () => {
  // Инициализация первой активной вкладки
  switchTab('tab-desc');

  // Закрытие модального окна по клику на оверлей или клавишу Escape
  const modal = document.getElementById('kaspi-modal');
  if (modal) {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        closeKaspiModal();
      }
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeKaspiModal();
    }
  });

  // Кнопка добавления в избранное
  const favBtn = document.getElementById('favorite-btn');
  if (favBtn) {
    favBtn.addEventListener('click', () => {
      favBtn.classList.toggle('fav-btn--active');
      const icon = favBtn.querySelector('.material-symbols-outlined');
      if (icon) {
        if (favBtn.classList.contains('fav-btn--active')) {
          icon.textContent = 'favorite';
          icon.style.color = 'var(--color-primary)';
        } else {
          icon.textContent = 'favorite_border';
          icon.style.color = '';
        }
      }
    });
  }
});
