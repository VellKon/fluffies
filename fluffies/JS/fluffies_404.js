/**
 * @fileoverview Логика взаимодействия для страницы ошибки 404 зоомагазина «Пушистики».
 * Включает обработку формы поиска, возврат на предыдущую страницу,
 * переключение избранного, добавление товаров в корзину и заказ обратного звонка.
 */

document.addEventListener('DOMContentLoaded', () => {
  // === ИНИЦИАЛИЗАЦИЯ ЭЛЕМЕНТОВ ИНТЕРФЕЙСА ===
  const heroSearchForm = document.getElementById('hero-404-search-form');
  const heroSearchInput = document.getElementById('hero-404-search-input');
  const headerSearchForm = document.getElementById('header-search-form');
  const btnBack = document.getElementById('btn-back');
  const favoriteButtons = document.querySelectorAll('.product-fav-btn');
  const cartButtons = document.querySelectorAll('.product-cart-btn');
  const btnCallback = document.getElementById('btn-request-callback');
  const toastElement = document.getElementById('toast-notification');
  const toastText = document.getElementById('toast-text');

  // Элементы счётчиков в шапке сайта
  const favoritesBadge = document.querySelector('.action-icons a[data-path="favorites"] .icon-badge');
  const cartBadge = document.querySelector('.cart-badge');
  const cartPriceElement = document.querySelector('.cart-price');

  let toastTimeout = null;

  /**
   * Отображает всплывающее уведомление (Toast) с заданным сообщением.
   * @param {string} message - Текст уведомления для пользователя.
   * @param {string} [icon='check_circle'] - Имя иконки Material Symbols.
   */
  function showToast(message, icon = 'check_circle') {
    if (!toastElement || !toastText) return;

    const iconElement = toastElement.querySelector('.material-symbols-outlined');
    if (iconElement) {
      iconElement.textContent = icon;
    }

    toastText.textContent = message;
    toastElement.classList.add('is-visible');

    if (toastTimeout) {
      clearTimeout(toastTimeout);
    }

    toastTimeout = setTimeout(() => {
      toastElement.classList.remove('is-visible');
    }, 3200);
  }

  // === ОБРАБОТКА КНОПКИ «ВЕРНУТЬСЯ НАЗАД» ===
  if (btnBack) {
    btnBack.addEventListener('click', (event) => {
      event.preventDefault();
      if (window.history.length > 1) {
        window.history.back();
      } else {
        // Если история пуста, перенаправляем на главную страницу
        window.location.href = 'index.php';
      }
    });
  }

  // === ОБРАБОТКА ПОИСКА В БЛОКЕ 404 ===
  if (heroSearchForm) {
    heroSearchForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const query = heroSearchInput ? heroSearchInput.value.trim() : '';
      if (query.length > 0) {
        showToast(`Ищем: «${query}»... Переходим в каталог`, 'search');
        setTimeout(() => {
          window.location.href = `fluffies_dog_catalog.php?search=${encodeURIComponent(query)}`;
        }, 1200);
      } else {
        showToast('Пожалуйста, введите название корма или товара для поиска', 'info');
        if (heroSearchInput) heroSearchInput.focus();
      }
    });
  }

  // === ОБРАБОТКА ПОИСКА В ШАПКЕ САЙТА ===
  if (headerSearchForm) {
    headerSearchForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const input = headerSearchForm.querySelector('.search-input');
      const query = input ? input.value.trim() : '';
      if (query.length > 0) {
        showToast(`Поиск по каталогу: «${query}»`, 'search');
        setTimeout(() => {
          window.location.href = `fluffies_dog_catalog.php?search=${encodeURIComponent(query)}`;
        }, 1200);
      } else {
        showToast('Введите поисковый запрос', 'info');
        if (input) input.focus();
      }
    });
  }

  // === ПЕРЕКЛЮЧЕНИЕ ТОВАРОВ В ИЗБРАННОЕ ===
  favoriteButtons.forEach((btn) => {
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      event.stopPropagation();

      const isActive = btn.classList.toggle('is-active');
      let currentFavCount = favoritesBadge ? parseInt(favoritesBadge.textContent, 10) || 0 : 0;

      if (isActive) {
        currentFavCount += 1;
        showToast('Товар успешно добавлен в избранное!', 'favorite');
      } else {
        currentFavCount = Math.max(0, currentFavCount - 1);
        showToast('Товар удален из избранного', 'heart_broken');
      }

      if (favoritesBadge) {
        favoritesBadge.textContent = currentFavCount;
        favoritesBadge.style.display = currentFavCount > 0 ? 'flex' : 'none';
      }
    });
  });

  // === ДОБАВЛЕНИЕ ТОВАРОВ В КОРЗИНУ ===
  cartButtons.forEach((btn) => {
    btn.addEventListener('click', (event) => {
      event.preventDefault();
      event.stopPropagation();

      // Получаем информацию о товаре из карточки
      const productCard = btn.closest('.product-card');
      const productTitle = productCard ? productCard.querySelector('.product-title')?.textContent.trim() : 'Товар';
      const priceText = productCard ? productCard.querySelector('.product-price')?.textContent.replace(/[^\d]/g, '') : '0';
      const productPrice = parseInt(priceText, 10) || 0;

      // Визуальный отклик на кнопке
      const originalHtml = btn.innerHTML;
      btn.classList.add('added');
      btn.innerHTML = '<span class="material-symbols-outlined" style="font-size:22px">done</span>';

      // Обновление бейджа корзины
      if (cartBadge) {
        const currentCount = parseInt(cartBadge.textContent, 10) || 0;
        cartBadge.textContent = currentCount + 1;
      }

      // Обновление суммы корзины
      if (cartPriceElement && productPrice > 0) {
        const currentSum = parseInt(cartPriceElement.textContent.replace(/[^\d]/g, ''), 10) || 0;
        const newSum = currentSum + productPrice;
        cartPriceElement.textContent = `${newSum.toLocaleString('ru-RU')} ₸`;
      }

      showToast(`«${productTitle}» добавлен в корзину!`, 'shopping_bag');

      setTimeout(() => {
        btn.classList.remove('added');
        btn.innerHTML = originalHtml;
      }, 1500);
    });
  });

  // === ЗАКАЗ ОБРАТНОГО ЗВОНКА ОТ ДЕЖУРНОГО ВЕТЕРИНАРА ===
  if (btnCallback) {
    btnCallback.addEventListener('click', (event) => {
      event.preventDefault();
      const userPhone = prompt('Укажите ваш номер телефона для оперативной связи:', '+7 (7');
      if (userPhone && userPhone.trim().length > 6) {
        showToast('Заявка принята! Дежурный специалист свяжется с вами в течение 5 минут.', 'support_agent');
      }
    });
  }
});
