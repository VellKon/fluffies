<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Пушистики • Личный кабинет покупателя</title>

  <!-- Шрифты и иконки Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

  <!-- Стили: глобальные и страница личного кабинета -->
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/user.css"/>
</head>
<body>

  <!-- ========== ШАПКА САЙТА (HEADER) ========== -->
  <?php include 'components/header.php'; ?>

  <!-- ========== ОСНОВНОЙ КОНТЕНТ (MAIN) ========== -->
  <main class="user-page">
    <div class="user-container">

      <!-- Хлебные крошки -->
      <nav class="user-breadcrumbs" aria-label="Хлебные крошки">
        <a href="index.php" data-path="catalog-home">
          <span class="material-symbols-outlined" style="font-size:16px">home</span>
          <span>Главная</span>
        </a>
        <span class="breadcrumbs-sep">/</span>
        <span style="color:var(--color-on-surface);font-weight:600">Личный кабинет покупателя</span>
      </nav>

      <!-- Верхний герой-блок профиля -->
      <div class="user-hero-card">
        <div class="user-hero-glow"></div>

        <div class="user-hero-grid">

          <!-- Информация о владельце -->
          <div class="user-hero-profile">
            <div class="user-avatar-wrap">
              <div class="user-avatar-ring">
                <img
                  class="user-avatar-img"
                  src="images/userLogo.png"
                  alt="Фото профиля"
                />
              </div>

            </div>

            <div class="user-info-text">
              <div class="user-name-row">
                <h1 class="user-full-name">Ева Новак</h1>
              </div>
              <div class="user-contacts-meta">
                <span>+7 (747) 593-20-55</span>
                <span>raindd.27@gmail.com</span>
                <span class="user-location-meta">
                  <span class="material-symbols-outlined" style="font-size:14px">location_on</span>
                  <span>г. Алматы (Жетысуский р-н)</span>
                </span>
              </div>
            </div>
          </div>

          <!-- Бонусный баланс Пушистики.Club -->
          <div class="user-bonus-card">
            <div class="user-bonus-header">
              <div>
                <div class="user-bonus-label">
                  <span class="material-symbols-outlined" style="font-size:18px">workspace_premium</span>
                  <span>Пушистики.Club Привилегии</span>
                </div>
                <div>
                  <span class="user-bonus-amount">1 240 ₸</span>
                  <span class="user-bonus-rate">1 бонус = 1 ₸</span>
                </div>
              </div>
              <span class="user-tier-badge">Золотая лапка • 7%</span>
            </div>

            <div class="user-progress-box">
              <div class="user-progress-labels">
                <span>До «Платиновой лапки» (10% кэшбэк):</span>
                <span style="font-weight:700;color:var(--color-on-surface)">осталось 15 200 ₸</span>
              </div>
              <div class="user-progress-bar">
                <div class="user-progress-fill" style="width: 76%"></div>
              </div>
            </div>

            <div class="user-bonus-footer">
              <a class="user-bonus-link" href="#bonuses">
                <span>История начислений и списаний</span>
                <span class="material-symbols-outlined" style="font-size:16px">chevron_right</span>
              </a>
              <span class="user-bonus-pending">+946 ₸ начислятся за заказ № KZ-89412</span>
            </div>
          </div>

          <!-- Быстрые виджеты профиля -->
          <div class="user-quick-widgets">
            <div class="user-widget-tile">
              <div class="user-widget-top">
                <span class="material-symbols-outlined icon-primary" style="font-size:20px">autorenew</span>
                <span style="width:8px;height:8px;border-radius:50%;background:var(--color-secondary)"></span>
              </div>
              <div>
                <span class="user-widget-label">Автодоставка</span>
                <span class="user-widget-val">15 мая (ср)</span>
              </div>
            </div>

            <div class="user-widget-tile">
              <div class="user-widget-top" style="color:var(--color-error)">
                <span class="material-symbols-outlined" style="font-size:20px">favorite</span>
                <span style="font-size:11px;font-weight:700;background:var(--color-error-container);color:var(--color-on-error-container);padding:2px 6px;border-radius:9999px">3</span>
              </div>
              <div>
                <span class="user-widget-label">Избранное</span>
                <span class="user-widget-val">3 товара</span>
              </div>
            </div>

            <div class="user-widget-tile user-widget-tile--full">
              <div class="user-widget-top">
                <div style="display:flex;align-items:center;gap:6px">
                  <span class="material-symbols-outlined icon-tertiary" style="font-size:20px">home_pin</span>
                  <span style="font-size:11px;color:var(--color-on-surface-variant)">Основной адрес:</span>
                </div>
                <span style="font-size:11px;font-weight:700;color:var(--color-primary)">2 адреса</span>
              </div>
              <span style="font-size:13px;font-weight:600;color:var(--color-on-surface);margin-top:4px">
                Алматы, пр. Достык 132, кв. 48
              </span>
            </div>
          </div>

        </div>
      </div>

      <!-- Основной макет: Сайдбар + Контент -->
      <div class="user-main-layout">

        <!-- Левый сайдбар навигации -->
        <aside class="user-sidebar">
          <div class="user-sidebar-heading">Управление кабинетом</div>

          <button type="button" class="user-nav-item active" data-tab="orders">
            <div class="user-nav-left">
              <span class="material-symbols-outlined icon-primary" style="font-size:20px">local_mall</span>
              <span>Заказы и покупки</span>
            </div>
            <span class="user-nav-badge user-nav-badge--primary">12</span>
          </button>

          <button type="button" class="user-nav-item" data-tab="pets">
            <div class="user-nav-left">
              <span class="material-symbols-outlined icon-secondary" style="font-size:20px">pets</span>
              <span>Мои питомцы</span>
            </div>
            <span class="user-nav-badge user-nav-badge--secondary">Cэм</span>
          </button>

          <button type="button" class="user-nav-item" data-tab="autoship">
            <div class="user-nav-left">
              <span class="material-symbols-outlined icon-tertiary" style="font-size:20px">autorenew</span>
              <span>Автодоставка</span>
            </div>
            <span style="width:8px;height:8px;border-radius:50%;background:var(--color-secondary)"></span>
          </button>

          <button type="button" class="user-nav-item" data-tab="bonuses">
            <div class="user-nav-left">
              <span class="material-symbols-outlined icon-primary" style="font-size:20px">card_membership</span>
              <span>Бонусы и клуб</span>
            </div>
            <span style="font-size:14px;font-weight:700;color:var(--color-primary)">1 240 ₸</span>
          </button>

          <button type="button" class="user-nav-item" data-tab="addresses">
            <div class="user-nav-left">
              <span class="material-symbols-outlined" style="font-size:20px">location_on</span>
              <span>Адреса доставки</span>
            </div>
            <span style="font-size:11px;color:var(--color-outline)">2</span>
          </button>

          <button type="button" class="user-nav-item" data-tab="security">
            <div class="user-nav-left">
              <span class="material-symbols-outlined" style="font-size:20px">lock_reset</span>
              <span>Безопасность и пароль</span>
            </div>
            <span class="material-symbols-outlined icon-secondary" style="font-size:16px">check_circle</span>
          </button>

          <button type="button" class="user-nav-item" data-tab="notifications">
            <div class="user-nav-left">
              <span class="material-symbols-outlined" style="font-size:20px">notifications</span>
              <span>Уведомления</span>
            </div>
          </button>

          <div class="user-nav-divider"></div>

          <button type="button" class="user-nav-item user-nav-item--logout">
            <div class="user-nav-left">
              <span class="material-symbols-outlined" style="font-size:20px">logout</span>
              <span>Выйти из профиля</span>
            </div>
          </button>
        </aside>

        <!-- Правая основная контентная область -->
        <div class="user-content-area">

          <!-- Виджет питомца Корги Макс -->
          <section class="pet-widget-card">
            <div class="pet-widget-header">
              <div class="pet-header-left">
                <div class="pet-avatar-icon">🐶</div>
                <div>
                  <div class="pet-title-row">
                    <h2 class="pet-name-title">Сэм</h2>
                    <span class="pet-breed-badge">Дворнягских кровей</span>
                  </div>
                  <p class="pet-meta-desc">Возраст: 1 год(а) и 1 месяц(ев) • Идеальный вес: 4.0 кг (норма)</p>
                </div>
              </div>

              <div class="pet-header-actions">
                <button type="button" class="btn-pet-action btn-pet-action--default">
                  <span class="material-symbols-outlined" style="font-size:18px">edit</span>
                  <span>Редактировать паспорт</span>
                </button>
                <button type="button" class="btn-pet-action btn-pet-action--add">
                  <span class="material-symbols-outlined" style="font-size:18px">add</span>
                  <span>Добавить питомца</span>
                </button>
              </div>
            </div>

            <!-- Показатели здоровья и рациона -->
            <div class="pet-stats-grid">
              <div class="pet-stat-card pet-stat-card--diet">
                <div>
                  <div class="pet-stat-top">
                    <span class="pet-stat-label">Суточная норма</span>
                    <span class="material-symbols-outlined icon-primary" style="font-size:18px">restaurant</span>
                  </div>
                  <div class="pet-stat-value">215 г / день</div>
                  <p class="pet-stat-desc">Grandorf 4 Meat Adult Medium (рассчитано по весу 14 кг)</p>
                </div>
                <div class="pet-stat-footer" style="color:var(--color-primary);font-size:11px;font-weight:700">
                  Хватит текущего мешка: ~18 дней
                </div>
              </div>

              <div class="pet-stat-card pet-stat-card--vet">
                <div>
                  <div class="pet-stat-top">
                    <span class="pet-stat-label" style="color:var(--color-secondary)">Веткалендарь</span>
                    <span class="material-symbols-outlined icon-secondary" style="font-size:18px">event_upcoming</span>
                  </div>
                  <div class="pet-stat-value" style="font-size:16px">Обработка от клещей</div>
                  <p class="pet-stat-desc">Через <strong style="color:var(--color-secondary)">18 дней</strong> (1 июня) — таблетка Бравекто 10–20 кг.</p>
                </div>
                <div class="pet-stat-footer">
                  <button type="button" class="btn-pet-action" style="background:var(--color-secondary);color:#ffffff;width:100%;justify-content:center">
                    <span class="material-symbols-outlined" style="font-size:16px">shopping_cart</span>
                    <span>Купить Бравекто (19 800 ₸)</span>
                  </button>
                </div>
              </div>

              <div class="pet-stat-card pet-stat-card--autoship">
                <div>
                  <div class="pet-stat-top">
                    <span class="pet-stat-label" style="color:var(--color-primary)">Умная подписка -15%</span>
                    <span class="material-symbols-outlined icon-primary" style="font-size:18px">autorenew</span>
                  </div>
                  <div class="pet-stat-value" style="font-size:16px">Grandorf 4 Meat 12 кг</div>
                  <p class="pet-stat-desc">Интервал: каждые 4 недели. Следующий выезд: <strong>15 мая</strong>.</p>
                </div>
                <div class="pet-stat-footer" style="display:flex;justify-content:space-between;align-items:center;font-size:11px">
                  <span style="color:var(--color-secondary);font-weight:700">Скидка: -7 500 ₸</span>
                  <a href="#autoship" style="color:var(--color-primary);font-weight:700;text-decoration:none">Настроить дату</a>
                </div>
              </div>
            </div>
          </section>

          <!-- Секция: История заказов и покупок -->
          <section class="orders-section-card">
            <div class="orders-header-row">
              <div>
                <h2 class="orders-heading">История заказов и покупок</h2>
                <p class="orders-subheading">Всего совершено 12 доставок в г. Алматы за 2024–2025 гг.</p>
              </div>

              <div class="orders-filter-controls">
                <div class="orders-search-wrap">
                  <span class="material-symbols-outlined orders-search-icon">search</span>
                  <input
                    type="text"
                    class="orders-search-input"
                    placeholder="Поиск по товару или №..."
                  />
                </div>
                <select class="orders-year-select">
                  <option selected>2025 год</option>
                  <option>2024 год</option>
                </select>
              </div>
            </div>

            <!-- Вкладки фильтрации статусов -->
            <div class="orders-status-tabs">
              <button type="button" class="status-chip active" data-filter="all">Все заказы (12)</button>
              <button type="button" class="status-chip" data-filter="in_transit">
                <span>В пути (1)</span>
              </button>
              <button type="button" class="status-chip" data-filter="completed">Завершенные (11)</button>
              <button type="button" class="status-chip" data-filter="autoship">Автодоставка (1)</button>
            </div>

            <!-- Карточка 1: Активный заказ в пути (№ KZ-89412) -->
            <article class="order-card order-card--active" data-order-status="in_transit">
              <div class="order-card-top">
                <div class="order-meta-left">
                  <span class="order-id-title">Заказ № KZ-89412</span>
                  <span class="order-date-text">от 12 мая 2025, 11:20</span>
                  <span class="order-status-pill order-status-pill--transit">
                    <span class="material-symbols-outlined" style="font-size:16px">local_shipping</span>
                    <span>В пути — сегодня, 18:00–21:00</span>
                  </span>
                </div>
                <div class="order-payment-info">
                  <span>Оплата: </span>
                  <strong><span style="color:var(--color-error)">Kaspi</span> QR • 47 300 ₸</strong>
                </div>
              </div>

              <!-- Графический таймлайн трекинга -->
              <div class="order-timeline-box">
                <div class="timeline-steps-grid">
                  <div class="timeline-track-bg"></div>
                  <div class="timeline-track-progress"></div>

                  <div class="timeline-step">
                    <div class="timeline-step-circle timeline-step-circle--done">
                      <span class="material-symbols-outlined" style="font-size:18px">check</span>
                    </div>
                    <span class="timeline-step-title">Оформлен</span>
                    <span class="timeline-step-sub">12 мая 11:20</span>
                  </div>

                  <div class="timeline-step">
                    <div class="timeline-step-circle timeline-step-circle--done">
                      <span class="material-symbols-outlined" style="font-size:18px">check</span>
                    </div>
                    <span class="timeline-step-title">Собран на складе</span>
                    <span class="timeline-step-sub">Алматы (Рыскулова)</span>
                  </div>

                  <div class="timeline-step">
                    <div class="timeline-step-circle timeline-step-circle--current">
                      <span class="material-symbols-outlined" style="font-size:18px">local_shipping</span>
                    </div>
                    <span class="timeline-step-title" style="color:var(--color-primary)">У курьера</span>
                    <span class="timeline-step-sub" style="color:var(--color-secondary);font-weight:700">Прибудет через 1.5 ч</span>
                  </div>

                  <div class="timeline-step" style="opacity:0.4">
                    <div class="timeline-step-circle timeline-step-circle--pending">
                      <span class="material-symbols-outlined" style="font-size:18px">home</span>
                    </div>
                    <span class="timeline-step-title">Доставлен</span>
                    <span class="timeline-step-sub">пр. Достык 132</span>
                  </div>
                </div>
              </div>

              <!-- Список товаров в заказе -->
              <div class="order-items-grid">
                <div class="order-item-card">
                  <div class="order-item-img-wrap">
                    <img
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMIbdLVy6FpQj_Otp4nlht2bRER8JHa0S03FTbbExFi14lt-rhqbJo3_cMCcpfwZTh7UxU4AP64LIJ8ufEKaN42--A7FPTo-MpZJgoyEDE60NHvfkcNnqD4Z0E1eUClnV7UfFhtuzW4DODyxDObPQyTFqoIgV0qk3x2uYzhv5nZLCONGrWdKvfI2HQJAivFowH5qmIUHvLjBkLtUr3QzjOxc-kdjcA3s0xX-gntAkv9N6YY1BhVy3e"
                      alt="Grandorf 4 Meat 12 кг"
                    />
                  </div>
                  <div class="order-item-details">
                    <span class="order-item-name">Grandorf 4 Meat &amp; Brown Rice Adult Medium</span>
                    <span class="order-item-meta">Сухой гипоаллергенный корм • 12 кг • 1 шт</span>
                    <span class="order-item-price">42 500 ₸</span>
                  </div>
                </div>

                <div class="order-item-card">
                  <div class="order-item-img-wrap">
                    <img
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-N1qoHJUp87K-VwNza34irce5aVVNU1HOkULUbnXwvd1STyHr42uJ1XyFU5Cp_ZrNO3kWE4D-5ZGxUfv3XWhR2PhmaY7xZTnC4mcPRIz8_NGwzLxk4NIqjhpyHfgyvEh0EAgCxEjJNy7T5VoEm2bXzAqI1cP3Ac8Uou5RA_DOfRJ8mH31R-eRlKiqT3zL3LmA5GlV1hLAs6xFzK7VbO8EPK_By232ExgjIpHiLfNeSbLx0g9qXbwf"
                      alt="Деревенские лакомства Утиные медальоны"
                    />
                  </div>
                  <div class="order-item-details">
                    <span class="order-item-name">Деревенские лакомства «Утиные медальоны»</span>
                    <span class="order-item-meta">Натуральное лакомство • 100 г • 2 шт</span>
                    <span class="order-item-price">4 800 ₸ <span style="font-size:11px;font-weight:400;color:var(--color-on-surface-variant)">(2 400 ₸/шт)</span></span>
                  </div>
                </div>
              </div>

              <!-- Нижняя панель действий заказа -->
              <div class="order-actions-bar">
                <span style="font-size:13px;font-weight:700;color:var(--color-secondary);display:inline-flex;align-items:center;gap:4px">
                  <span class="material-symbols-outlined" style="font-size:18px">verified</span>
                  <span>Начисление бонусов: +946 ₸ после получения</span>
                </span>

                <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap">
                  <button type="button" class="order-action-btn order-action-btn--secondary">
                    <span class="material-symbols-outlined icon-tertiary" style="font-size:18px">receipt_long</span>
                    <span>Чек заказа</span>
                  </button>
                  <button type="button" class="order-action-btn order-action-btn--secondary">
                    <span class="material-symbols-outlined icon-primary" style="font-size:18px">call</span>
                    <span>Связаться с курьером</span>
                  </button>
                  <button type="button" class="order-action-btn order-action-btn--track">
                    <span class="material-symbols-outlined" style="font-size:18px">near_me</span>
                    <span>Отследить на карте Алматы</span>
                  </button>
                </div>
              </div>
            </article>

            <!-- Карточка 2: Завершенный заказ (№ KZ-78105) -->
            <article class="order-card order-card--completed" data-order-status="completed">
              <div class="order-card-top">
                <div class="order-meta-left">
                  <span class="order-id-title">Заказ № KZ-78105</span>
                  <span class="order-date-text">от 14 апреля 2025</span>
                  <span class="order-status-pill order-status-pill--done">
                    <span class="material-symbols-outlined" style="font-size:14px">done_all</span>
                    <span>Доставлен 14 апреля</span>
                  </span>
                </div>
                <div class="order-payment-info">
                  <span>Оплата: </span>
                  <strong><span style="color:var(--color-secondary)">Halyk</span> Bank • 33 200 ₸</strong>
                </div>
              </div>

              <!-- Список товаров завершенного заказа -->
              <div class="order-items-grid">
                <div class="order-item-card">
                  <div class="order-item-img-wrap">
                    <img
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWT-zl1DN0vUuoVsUZez1BC3mxe8LbLUIRE5bO39uouIZc4pEgOwSz6SZgGYt_uhPwUuwYLGdXJQJxR-rKWpIAKk7bDsFeVK-4Ny-E-vXgmZaMJL17nwtXWqX4_dEaHt178pFTXXX99kGylaCwZVodeatfdtmzPFtudB788umReUH_1HkG1biJEtrUbl_aS63Qsu4uwMnqpv0czR1S6eq9VMcuwFsicrO5S9e5LUFhkVx3tBG8IvBY"
                      alt="Игрушка Kong Classic L"
                    />
                  </div>
                  <div class="order-item-details">
                    <span class="order-item-name">Игрушка Kong Classic L</span>
                    <span class="order-item-price">6 600 ₸</span>
                  </div>
                </div>

                <div class="order-item-card">
                  <div class="order-item-img-wrap">
                    <img
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyQ5SFpWvtdwBj6xxKbZEz96UQY_EPv8xA1pmGWw1DAJ4ACv8N96oC6NZvbXjbyJqGVFr5hpN7FrfbA4EaLmL23ZM6v-1QCmgCTT3jyMI2nHGwo59pMf8sxxbabxLj8tsH8dbwaI8EpUHpq2g8AXv0XoujQlXgojve34mXUTUDdvWjYIFyq4e8AAx5tiUNffZZyy2Q-btubmZaUN7YDrYlHFbdnzJ-_77GaeymTimyRmo-Dl8SMUbN"
                      alt="Шампунь с хлоргексидином 4%"
                    />
                  </div>
                  <div class="order-item-details">
                    <span class="order-item-name">Шампунь с хлоргексидином 4%</span>
                    <span class="order-item-price">6 800 ₸</span>
                  </div>
                </div>

                <div class="order-item-card">
                  <div class="order-item-img-wrap">
                    <img
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuDi06aT9-Tm8kzUnUOzDRCA3-VLMCyeJSLw69oUsJzwWdozdWR-D2DMLkCbHnHDgCaU5Z2AplrckNkEmOygql2V0zjaXQ3JgdDQBmFskhIsBqWHfkmO9O-lHpImacf3My5I0jJRF56zXxVEWs9esOeHKUw4D3K9rNsN7g7hmKlhHV69fVKoWH5QmOy2_nPZD_oy7pN9wAmYULVPpdlQ9b6COAzoepVQQuEMTlN3LET0UNQyZP3PjgqZ"
                      alt="Бравекто 10-20 кг"
                    />
                  </div>
                  <div class="order-item-details">
                    <span class="order-item-name">Бравекто 10–20 кг (1 таб)</span>
                    <span class="order-item-price">19 800 ₸</span>
                  </div>
                </div>
              </div>

              <!-- Нижняя панель действий завершенного заказа -->
              <div class="order-actions-bar">
                <div style="font-size:13px;color:var(--color-on-surface-variant)">
                  <span>Курьер: Касымбек Т. • Оценка доставки: </span>
                  <span style="color:var(--color-primary);font-weight:700">★★★★★ (5.0)</span>
                </div>

                <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap">
                  <button type="button" class="order-action-btn order-action-btn--secondary">
                    <span class="material-symbols-outlined" style="font-size:16px">rate_review</span>
                    <span>Оставить отзыв (+100 бонусов)</span>
                  </button>
                  <button type="button" class="order-action-btn order-action-btn--primary btn-repeat-order">
                    <span class="material-symbols-outlined" style="font-size:18px">replay</span>
                    <span>Повторить заказ в 1 клик</span>
                  </button>
                </div>
              </div>
            </article>

          </section>

          <!-- Секция: Безопасность и пароль -->
          <section class="security-section-card" id="security-section">
            <div class="security-header">
              <div>
                <h2 class="orders-heading">Настройки безопасности и вход</h2>
                <p class="orders-subheading">Управление паролем, двухфакторной защитой и доверенными сервисами</p>
              </div>
              <div style="width:40px;height:40px;border-radius:12px;background:rgba(147,244,172,0.5);display:flex;align-items:center;justify-content:center;color:var(--color-secondary)">
                <span class="material-symbols-outlined" style="font-size:24px">verified_user</span>
              </div>
            </div>

            <div class="security-grid">

              <!-- Форма смены пароля -->
              <form class="security-form-box" onsubmit="event.preventDefault(); alert('Пароль успешно обновлен!');">
                <div class="security-form-title">
                  <span class="material-symbols-outlined icon-primary" style="font-size:20px">key</span>
                  <span>Смена пароля аккаунта</span>
                </div>

                <div class="security-field">
                  <label class="security-label">Текущий пароль</label>
                  <div class="security-input-wrap">
                    <input class="security-input" type="password" value="••••••••••••"/>
                    <button type="button" class="pwd-visibility-btn" style="position:absolute;right:10px;top:8px;background:none;border:none;color:var(--color-outline);cursor:pointer">
                      <span class="material-symbols-outlined" style="font-size:18px">visibility</span>
                    </button>
                  </div>
                </div>

                <div class="security-field">
                  <label class="security-label">Новый пароль</label>
                  <div class="security-input-wrap">
                    <input class="security-input" type="password" placeholder="Придумайте надежный пароль"/>
                    <button type="button" class="pwd-visibility-btn" style="position:absolute;right:10px;top:8px;background:none;border:none;color:var(--color-outline);cursor:pointer">
                      <span class="material-symbols-outlined" style="font-size:18px">visibility_off</span>
                    </button>
                  </div>

                  <!-- Индикатор надежности нового пароля -->
                  <div style="display:flex;align-items:center;gap:6px;margin-top:4px">
                    <div style="flex:1;height:5px;border-radius:9999px;background:var(--color-secondary)"></div>
                    <div style="flex:1;height:5px;border-radius:9999px;background:var(--color-secondary)"></div>
                    <div style="flex:1;height:5px;border-radius:9999px;background:var(--color-secondary)"></div>
                    <div style="flex:1;height:5px;border-radius:9999px;background:var(--color-surface-variant)"></div>
                    <span style="font-size:11px;font-weight:700;color:var(--color-secondary)">Надежный пароль</span>
                  </div>
                  <span style="font-size:11px;color:var(--color-on-surface-variant)">Минимум 8 знаков, латинские буквы, цифры и спецсимвол</span>
                </div>

                <div class="security-field">
                  <label class="security-label">Повторите новый пароль</label>
                  <input class="security-input" type="password" placeholder="Повторите ввод"/>
                </div>

                <button type="submit" class="security-save-btn">
                  Сохранить новый пароль
                </button>
              </form>

              <!-- Двухфакторная защита и привязанные сервисы -->
              <div style="display:flex;flex-direction:column;gap:var(--space-md)">

                <!-- Тумблеры 2FA -->
                <div class="security-switches-box">
                  <div class="switch-row">
                    <div>
                      <div class="switch-label-title">2FA через SMS</div>
                      <div class="switch-label-sub">Код подтверждения на номер +7 (777) 450-89-12 при входе</div>
                    </div>
                    <div class="custom-switch">
                      <div class="custom-switch-knob"></div>
                    </div>
                  </div>

                  <div style="height:1px;background:var(--color-surface-variant)"></div>

                  <div class="switch-row">
                    <div>
                      <div class="switch-label-title">Оповещение о новых входах</div>
                      <div class="switch-label-sub">Письмо на email при авторизации с неизвестного устройства</div>
                    </div>
                    <div class="custom-switch">
                      <div class="custom-switch-knob"></div>
                    </div>
                  </div>
                </div>

                <!-- Привязанные сервисы -->
                <div class="connected-services-box">
                  <span style="font-size:14px;font-weight:700;color:var(--color-on-surface)">Привязанные сервисы для быстрого входа</span>

                  <div class="service-row">
                    <div class="service-left">
                      <div class="service-badge-icon service-badge-icon--google">G</div>
                      <div>
                        <span style="font-size:14px;font-weight:700;display:block">Google Account</span>
                        <span style="font-size:11px;color:var(--color-on-surface-variant)">raindd.27@gmail.com</span>
                      </div>
                    </div>
                    <span class="service-status-pill">Подключен</span>
                  </div>
                </div>

                <!-- История сессий -->
                <div style="padding:var(--space-sm);border-radius:12px;background:var(--color-surface-container);display:flex;align-items:center;justify-content:space-between;font-size:13px;color:var(--color-on-surface-variant)">
                  <div style="display:flex;align-items:center;gap:6px">
                    <span class="material-symbols-outlined" style="font-size:18px">devices</span>
                    <span>Текущий сеанс: macOS • Safari • г. Алматы</span>
                  </div>
                  <button type="button" style="background:none;border:none;color:var(--color-error);font-weight:600;cursor:pointer">Завершить все другие</button>
                </div>

              </div>

            </div>
          </section>

        </div>

      </div>

    </div>
  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Скрипт личного кабинета -->
  <script src="JS/user-page.js"></script>
</body>
</html>