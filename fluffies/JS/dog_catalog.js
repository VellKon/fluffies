/**
 * ============================================================
 * ПУШИСТИКИ — КАТАЛОГ ТОВАРОВ ДЛЯ СОБАК
 * Скрипт взаимодействия каталога: фильтрация, переключение веса,
 * добавление в корзину, избранное, сортировка и мобильный сайдбар
 * ============================================================
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  initFilterToggles();
  initResetFilters();
  initWeightSwitchers();
  initAddToCart();
  initFavorites();
  initSorting();
  initViewMode();
  initMobileFilters();
  initQuickChips();
  initCheckboxes();
});

/**
 * Инициализирует сворачивание и разворачивание секций фильтра (аккордеон).
 */
function initFilterToggles() {
  const headers = document.querySelectorAll('.filter-group-header');

  headers.forEach((header) => {
    header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      if (!content) return;

      header.classList.toggle('collapsed');
      content.classList.toggle('collapsed');
    });
  });
}

/**
 * Инициализирует интерактивность чекбоксов фильтра.
 */
function initCheckboxes() {
  const checkboxRows = document.querySelectorAll('.custom-checkbox-row');

  checkboxRows.forEach((row) => {
    row.addEventListener('click', (e) => {
      e.preventDefault();
      row.classList.toggle('checked');
      updateProductCountFeedback();
    });
  });

  const radioRows = document.querySelectorAll('.custom-radio-row');
  radioRows.forEach((row) => {
    row.addEventListener('click', () => {
      radioRows.forEach((r) => r.classList.remove('active'));
      row.classList.add('active');
      updateProductCountFeedback();
    });
  });

  const segmentBtns = document.querySelectorAll('.filter-segment-btn');
  segmentBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      segmentBtns.forEach((b) => b.classList.remove('active'));
      btn.classList.add('active');
      updateProductCountFeedback();
    });
  });

  const filterTags = document.querySelectorAll('.filter-tag');
  filterTags.forEach((tag) => {
    tag.addEventListener('click', () => {
      tag.classList.toggle('active');
      updateProductCountFeedback();
    });
  });
}

/**
 * Инициализирует сброс всех выбранных фильтров.
 */
function initResetFilters() {
  const resetBtn = document.querySelector('.filter-reset-btn');
  if (!resetBtn) return;

  resetBtn.addEventListener('click', () => {
    // Сброс чекбоксов
    document.querySelectorAll('.custom-checkbox-row').forEach((row) => {
      row.classList.remove('checked');
    });

    // Сброс радио
    const radios = document.querySelectorAll('.custom-radio-row');
    radios.forEach((r, idx) => {
      if (idx === 0) r.classList.add('active');
      else r.classList.remove('active');
    });

    // Сброс возраста
    const segments = document.querySelectorAll('.filter-segment-btn');
    segments.forEach((s, idx) => {
      if (idx === 1) s.classList.add('active');
      else s.classList.remove('active');
    });

    // Сброс тегов вкуса
    document.querySelectorAll('.filter-tag').forEach((t) => {
      t.classList.remove('active');
    });

    // Сброс активных чипсов
    document.querySelectorAll('.filter-chip').forEach((c, idx) => {
      if (idx === 0) c.classList.add('filter-chip--all');
      else c.classList.remove('filter-chip--active');
    });

    // Восстановление счетчика
    const counterPill = document.querySelector('.catalog-counter-pill');
    if (counterPill) {
      counterPill.innerHTML = '<span class="catalog-counter-dot"></span><span>Найдено 386 товаров</span>';
    }
  });
}

/**
 * Имитирует пересчет количества найденных товаров при изменении фильтров.
 */
function updateProductCountFeedback() {
  const counterPill = document.querySelector('.catalog-counter-pill');
  if (!counterPill) return;

  const randomCount = Math.floor(Math.random() * 80) + 120;
  counterPill.innerHTML = `<span class="catalog-counter-dot"></span><span>Найдено ${randomCount} товаров</span>`;
}

/**
 * Инициализирует переключатель веса/упаковки на карточках товаров.
 * При клике обновляет активную кнопку и пересчитывает цену.
 */
function initWeightSwitchers() {
  const cards = document.querySelectorAll('.product-card');

  cards.forEach((card) => {
    const weightButtons = card.querySelectorAll('.weight-btn');
    const priceMain = card.querySelector('.price-main');
    const priceOld = card.querySelector('.price-old');
    const priceUnit = card.querySelector('.price-unit');

    weightButtons.forEach((btn) => {
      btn.addEventListener('click', () => {
        // Убираем активность у соседних кнопок в этой карточке
        weightButtons.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');

        // Читаем параметры из data-атрибутов
        const newPrice = btn.getAttribute('data-price');
        const newOldPrice = btn.getAttribute('data-old-price');
        const newUnit = btn.getAttribute('data-unit-price');

        if (priceMain && newPrice) {
          priceMain.textContent = newPrice;
        }

        if (priceOld) {
          if (newOldPrice) {
            priceOld.textContent = newOldPrice;
            priceOld.style.display = 'inline';
          } else {
            priceOld.style.display = 'none';
          }
        }

        if (priceUnit && newUnit) {
          priceUnit.textContent = newUnit;
        }
      });
    });
  });
}

/**
 * Инициализирует интерактивность кнопки "Купить" / "В корзину".
 * Показывает визуальный фидбек, меняет текст и инкрементирует бейдж корзины.
 */
function initAddToCart() {
  const buyButtons = document.querySelectorAll('.buy-btn');
  const cartBadge = document.querySelector('.cart-counter');

  buyButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const originalHTML = btn.innerHTML;

      // Меняем состояние кнопки
      btn.innerHTML =
        '<span class="material-symbols-outlined" style="font-size:18px">done</span>' +
        '<span>В корзине ✓</span>';
      btn.classList.add('buy-btn--success');

      // Увеличиваем счетчик в шапке
      if (cartBadge) {
        const currentCount = parseInt(cartBadge.textContent, 10) || 0;
        cartBadge.textContent = currentCount + 1;
      }

      // Восстанавливаем состояние кнопки через 1.8 секунды
      setTimeout(() => {
        btn.innerHTML = originalHTML;
        btn.classList.remove('buy-btn--success');
      }, 1800);
    });
  });
}

/**
 * Инициализирует переключение кнопки добавления в избранное (сердечко).
 */
function initFavorites() {
  const favButtons = document.querySelectorAll('.product-fav-btn');
  const favCounter = document.querySelector('.fav-counter');

  favButtons.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isNowActive = btn.classList.toggle('active');

      if (favCounter) {
        let count = parseInt(favCounter.textContent, 10) || 0;
        count = isNowActive ? count + 1 : Math.max(0, count - 1);
        favCounter.textContent = count;
      }
    });
  });
}

/**
 * Инициализирует сортировку товаров (имитация обновления списка).
 */
function initSorting() {
  const sortSelect = document.querySelector('.sort-select');
  const grid = document.querySelector('.product-grid');

  if (!sortSelect || !grid) return;

  sortSelect.addEventListener('change', () => {
    grid.style.opacity = '0.4';
    grid.style.transition = 'opacity 0.2s';

    setTimeout(() => {
      grid.style.opacity = '1';
    }, 250);
  });
}

/**
 * Инициализирует переключатель отображения: сетка (grid) или список (list).
 */
function initViewMode() {
  const btnGrid = document.querySelector('[data-view="grid"]');
  const btnList = document.querySelector('[data-view="list"]');
  const grid = document.querySelector('.product-grid');

  if (!btnGrid || !btnList || !grid) return;

  btnGrid.addEventListener('click', () => {
    btnGrid.classList.add('active');
    btnList.classList.remove('active');
    grid.classList.remove('product-grid--list');
  });

  btnList.addEventListener('click', () => {
    btnList.classList.add('active');
    btnGrid.classList.remove('active');
    grid.classList.add('product-grid--list');
  });
}

/**
 * Инициализирует мобильную шторку фильтров (drawer).
 */
function initMobileFilters() {
  const openBtn = document.querySelector('.filter-chip--all');
  const sidebar = document.querySelector('.filter-sidebar');
  const backdrop = document.querySelector('.sidebar-backdrop');

  if (!openBtn || !sidebar) return;

  openBtn.addEventListener('click', () => {
    if (window.innerWidth < 1024) {
      sidebar.classList.add('open');
      if (backdrop) backdrop.classList.add('active');
    }
  });

  if (backdrop) {
    backdrop.addEventListener('click', () => {
      sidebar.classList.remove('open');
      backdrop.classList.remove('active');
    });
  }
}

/**
 * Инициализирует быстрые чипсы над каталогом.
 */
function initQuickChips() {
  const chips = document.querySelectorAll('.filter-chip:not(.filter-chip--all)');

  chips.forEach((chip) => {
    chip.addEventListener('click', () => {
      chip.classList.toggle('filter-chip--active');
      updateProductCountFeedback();
    });
  });
}
