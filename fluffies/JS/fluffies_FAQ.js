/**
 * ============================================================
 * ПУШИСТИКИ — БАЗА ЗНАНИЙ И ВОПРОСЫ-ОТВЕТЫ (FAQ)
 * Интерактивный поиск, переключение категорий, аккордеон,
 * быстрые подсказки и отправка формы вопроса специалисту
 * ============================================================
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  initFaqSearch();
  initCategoryTabs();
  initQuickChips();
  initQuickQuestionForm();
  initResetButton();
});

/**
 * Инициализирует поиск по вопросам и ответам в базе знаний.
 */
function initFaqSearch() {
  const searchInput = document.getElementById('faq-search-input');
  const searchBtn = document.getElementById('faq-search-btn');
  const clearBtn = document.getElementById('clear-search-btn');

  if (!searchInput) return;

  function performSearch() {
    const query = searchInput.value.trim().toLowerCase();

    // Переключение видимости кнопки очистки
    if (clearBtn) {
      if (query.length > 0) {
        clearBtn.classList.remove('hidden');
      } else {
        clearBtn.classList.add('hidden');
      }
    }

    filterFaqCards();
  }

  searchInput.addEventListener('input', performSearch);

  if (searchBtn) {
    searchBtn.addEventListener('click', performSearch);
  }

  if (clearBtn) {
    clearBtn.addEventListener('click', () => {
      searchInput.value = '';
      clearBtn.classList.add('hidden');
      filterFaqCards();
      searchInput.focus();
    });
  }
}

/**
 * Фильтрует карточки вопросов по активной категории и строке поиска.
 */
function filterFaqCards() {
  const searchInput = document.getElementById('faq-search-input');
  const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
  const activeTab = document.querySelector('.category-tab.active-tab');
  const currentCategory = activeTab ? activeTab.getAttribute('data-category') : 'all';
  const faqCards = document.querySelectorAll('.faq-card');
  const noResults = document.getElementById('no-faq-results');

  let visibleCount = 0;

  faqCards.forEach((card) => {
    const cardCat = card.getAttribute('data-category');
    const cardKeywords = (card.getAttribute('data-keywords') || '').toLowerCase();
    const cardText = card.innerText.toLowerCase();

    const matchesCategory = (currentCategory === 'all' || cardCat === currentCategory);
    const matchesQuery = (!query || cardKeywords.includes(query) || cardText.includes(query));

    if (matchesCategory && matchesQuery) {
      card.classList.remove('hidden');
      visibleCount++;

      // Если пользователь ввел конкретный поисковый запрос, автоматически раскрываем ответ
      if (query.length >= 2) {
        card.setAttribute('open', '');
      }
    } else {
      card.classList.add('hidden');
    }
  });

  // Отображение заглушки при отсутствии совпадений
  if (noResults) {
    if (visibleCount === 0) {
      noResults.classList.remove('hidden');
    } else {
      noResults.classList.add('hidden');
    }
  }
}

/**
 * Инициализирует переключение вкладок категорий вопросов.
 */
function initCategoryTabs() {
  const categoryTabs = document.querySelectorAll('.category-tab');

  categoryTabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      categoryTabs.forEach((t) => t.classList.remove('active-tab'));
      tab.classList.add('active-tab');

      filterFaqCards();
    });
  });
}

/**
 * Инициализирует клики по быстрым поисковым подсказкам под строкой поиска.
 */
function initQuickChips() {
  const quickChips = document.querySelectorAll('.quick-chip');
  const searchInput = document.getElementById('faq-search-input');
  const clearBtn = document.getElementById('clear-search-btn');

  quickChips.forEach((chip) => {
    chip.addEventListener('click', () => {
      const q = chip.getAttribute('data-query');
      if (searchInput && q) {
        searchInput.value = q;
        if (clearBtn) clearBtn.classList.remove('hidden');

        // Сбрасываем категорию на «Все вопросы» для более широкого поиска
        const allTab = document.querySelector('.category-tab[data-category="all"]');
        if (allTab) {
          document.querySelectorAll('.category-tab').forEach((t) => t.classList.remove('active-tab'));
          allTab.classList.add('active-tab');
        }

        filterFaqCards();
        searchInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  });
}

/**
 * Инициализирует кнопку сброса фильтрации в карточке отсутствия результатов.
 */
function initResetButton() {
  const resetBtn = document.getElementById('reset-filter-btn');
  const searchInput = document.getElementById('faq-search-input');
  const clearBtn = document.getElementById('clear-search-btn');

  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      if (searchInput) searchInput.value = '';
      if (clearBtn) clearBtn.classList.add('hidden');

      const allTab = document.querySelector('.category-tab[data-category="all"]');
      if (allTab) {
        document.querySelectorAll('.category-tab').forEach((t) => t.classList.remove('active-tab'));
        allTab.classList.add('active-tab');
      }

      filterFaqCards();
    });
  }
}

/**
 * Инициализирует форму отправки быстрого вопроса дежурному специалисту.
 */
function initQuickQuestionForm() {
  const form = document.getElementById('faq-quick-form');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const nameInput = form.querySelector('input[type="text"]');
    const name = nameInput ? nameInput.value.trim() : 'Покупатель';

    // Всплывающее уведомление
    showFaqToast(`Спасибо, ${name}! Специалист службы заботы «Пушистики» свяжется с вами в течение 5 минут.`);
    form.reset();
  });
}

/**
 * Создает и показывает всплывающее уведомление (Toast).
 * @param {string} message - Текст уведомления
 */
function showFaqToast(message) {
  let toast = document.querySelector('.faq-toast-notification');

  if (!toast) {
    toast = document.createElement('div');
    toast.className = 'faq-toast-notification';
    Object.assign(toast.style, {
      position: 'fixed',
      bottom: '24px',
      right: '24px',
      background: 'var(--color-secondary)',
      color: '#ffffff',
      padding: '14px 20px',
      borderRadius: '12px',
      fontSize: '14px',
      fontWeight: '600',
      boxShadow: '0 8px 24px rgba(0,0,0,0.15)',
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
  }, 4000);
}
