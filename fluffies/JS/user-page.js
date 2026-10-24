/**
 * ============================================================
 * ПУШИСТИКИ — ЛИЧНЫЙ КАБИНЕТ ПОКУПАТЕЛЯ
 * Логика навигации по вкладкам профиля, фильтрация заказов,
 * управление видимостью пароля и повтор заказа
 * ============================================================
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  initSidebarTabs();
  initOrderStatusFilters();
  initOrderSearch();
  initPasswordToggles();
  initRepeatOrder();
});

/**
 * Инициализирует переключение вкладок левого сайдбара кабинета.
 */
function initSidebarTabs() {
  const navItems = document.querySelectorAll('.user-nav-item[data-tab]');

  navItems.forEach((btn) => {
    btn.addEventListener('click', () => {
      const tabId = btn.getAttribute('data-tab');

      navItems.forEach((b) => b.classList.remove('active'));
      btn.classList.add('active');

      // Плавная прокрутка к соответствующему разделу
      if (tabId === 'security') {
        const sec = document.getElementById('security-section');
        if (sec) sec.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else if (tabId === 'pets') {
        const petWidget = document.querySelector('.pet-widget-card');
        if (petWidget) petWidget.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else if (tabId === 'orders') {
        const ordersCard = document.querySelector('.orders-section-card');
        if (ordersCard) ordersCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
}

/**
 * Инициализирует фильтрацию карточек заказов по статусу (Все, В пути, Завершенные, Автодоставка).
 */
function initOrderStatusFilters() {
  const chips = document.querySelectorAll('.status-chip');
  const orderCards = document.querySelectorAll('.order-card');

  chips.forEach((chip) => {
    chip.addEventListener('click', () => {
      chips.forEach((c) => c.classList.remove('active'));
      chip.classList.add('active');

      const filter = chip.getAttribute('data-filter');

      orderCards.forEach((card) => {
        const cardStatus = card.getAttribute('data-order-status');

        if (filter === 'all' || cardStatus === filter) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/**
 * Инициализирует быстрый поиск по списку заказов.
 */
function initOrderSearch() {
  const searchInput = document.querySelector('.orders-search-input');
  const orderCards = document.querySelectorAll('.order-card');

  if (!searchInput) return;

  searchInput.addEventListener('input', () => {
    const q = searchInput.value.trim().toLowerCase();

    orderCards.forEach((card) => {
      const text = card.innerText.toLowerCase();
      if (!q || text.includes(q)) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  });
}

/**
 * Инициализирует переключение видимости пароля в блоке безопасности.
 */
function initPasswordToggles() {
  const toggles = document.querySelectorAll('.pwd-visibility-btn');

  toggles.forEach((btn) => {
    btn.addEventListener('click', () => {
      const wrap = btn.closest('.security-input-wrap');
      if (!wrap) return;

      const input = wrap.querySelector('input');
      const icon = btn.querySelector('.material-symbols-outlined');

      if (!input || !icon) return;

      if (input.type === 'password') {
        input.type = 'text';
        icon.textContent = 'visibility_off';
      } else {
        input.type = 'password';
        icon.textContent = 'visibility';
      }
    });
  });
}

/**
 * Инициализирует кнопку быстрого повтора заказа в 1 клик.
 */
function initRepeatOrder() {
  const repeatBtns = document.querySelectorAll('.btn-repeat-order');

  repeatBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      showUserToast('Товары из заказа успешно добавлены в корзину! Перенаправляем...');
      setTimeout(() => {
        window.location.href = 'fluffies_cart.php';
      }, 1500);
    });
  });
}

/**
 * Создает и показывает всплывающее уведомление (Toast).
 * @param {string} message - Текст уведомления
 */
function showUserToast(message) {
  let toast = document.querySelector('.user-toast-notification');

  if (!toast) {
    toast = document.createElement('div');
    toast.className = 'user-toast-notification';
    Object.assign(toast.style, {
      position: 'fixed',
      bottom: '24px',
      right: '24px',
      background: 'var(--color-primary-container)',
      color: 'var(--color-on-primary)',
      padding: '14px 20px',
      borderRadius: '14px',
      fontSize: '14px',
      fontWeight: '700',
      boxShadow: '0 8px 24px rgba(255,122,0,0.3)',
      zIndex: '9999',
      transition: 'opacity 0.3s, transform 0.3s',
      opacity: '0',
      transform: 'translateY(10px)',
      maxWidth: '360px',
      lineHeight: '1.4',
    });
    document.body.appendChild(toast);
  }

  toast.textContent = message;
  toast.style.opacity = '1';
  toast.style.transform = 'translateY(0)';

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(10px)';
  }, 3500);
}
