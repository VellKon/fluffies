<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Пушистики • База знаний и вопросы-ответы (FAQ)</title>

  <!-- Шрифты и иконки Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

  <!-- Стили: глобальные и страница FAQ -->
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/faq.css"/>
</head>
<body>

  <!-- ========== ШАПКА САЙТА (HEADER) ========== -->
  <?php include 'components/header.php'; ?>

  <!-- ========== ОСНОВНОЙ КОНТЕНТ (MAIN) ========== -->
  <main class="faq-page">

    <!-- Хлебные крошки -->
    <div class="faq-breadcrumbs-bar">
      <nav class="faq-breadcrumbs" aria-label="Хлебные крошки">
        <a href="index.php" data-path="catalog-home">
          <span class="material-symbols-outlined" style="font-size:16px">home</span>
          <span>Главная</span>
        </a>
        <span class="breadcrumbs-sep">/</span>
        <span>Помощь покупателю</span>
        <span class="breadcrumbs-sep">/</span>
        <span class="breadcrumbs-current">Вопросы и ответы (FAQ)</span>
      </nav>
    </div>

    <!-- Герой-секция базы знаний с поиском -->
    <section class="faq-hero-section">
      <div class="faq-hero-glow-1"></div>
      <div class="faq-hero-glow-2"></div>

      <div class="faq-hero-inner">
        <div class="faq-hero-grid">

          <!-- Текст и строка поиска -->
          <div class="faq-hero-text-col">
            <div class="faq-hero-pill">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--color-secondary)">pets</span>
              <span>База знаний и забота 24/7 • Казахстан</span>
            </div>

            <h1 class="faq-hero-title">
              Часто задаваемые <span>вопросы</span>
            </h1>

            <p class="faq-hero-desc">
              Всё о бесплатной доставке по Алматы и Казахстану, мгновенной оплате через <strong>Kaspi QR / Kaspi Red 0-0-12</strong>, бонусном клубе «Пушистики.Club», гарантии свежести рационов и ветеринарной поддержке.
            </p>

            <!-- Интерактивная строка поиска -->
            <div class="faq-search-wrapper">
              <div class="faq-search-box">
                <span class="material-symbols-outlined faq-search-icon">search</span>
                <input
                  type="text"
                  id="faq-search-input"
                  class="faq-search-input"
                  placeholder="Найти ответ (например: Kaspi Red, экспресс в Алматы, возврат корма)..."
                />
                <button type="button" id="clear-search-btn" class="faq-clear-btn hidden" title="Очистить">
                  <span class="material-symbols-outlined" style="font-size:20px">close</span>
                </button>
                <button type="button" id="faq-search-btn" class="faq-submit-btn">
                  <span>Найти</span>
                </button>
              </div>

              <!-- Быстрые поисковые подсказки -->
              <div class="faq-quick-chips">
                <span class="faq-quick-label">Популярные запросы:</span>
                <button type="button" class="quick-chip" data-query="Kaspi QR">Kaspi QR</button>
                <span style="color:var(--color-outline)">•</span>
                <button type="button" class="quick-chip" data-query="бесплатная доставка">бесплатная доставка</button>
                <span style="color:var(--color-outline)">•</span>
                <button type="button" class="quick-chip" data-query="возврат">возврат корма</button>
                <span style="color:var(--color-outline)">•</span>
                <button type="button" class="quick-chip" data-query="ветеринар">онлайн-ветврач</button>
              </div>
            </div>
          </div>

          <!-- Правая колонка героя: Карточка службы заботы -->
          <div class="faq-hero-visual-col">
            <div class="faq-hero-visual-card">
              <div class="faq-hero-media">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBiYIixETOi1f4qw1IN1-_xN8_H10dijmqoDffdcAu6AhyVbtFssX2YmpJlXkQcW6fpJVMPl_Oi0NSu1me-hfrScXtGCBN3vbee2mOmBzaXP2IZpCe3DJsZmYHhUqAVJL4b6wwf__Bkyi6MfI_gJg8xurJKjqmDrLRP9Xgimn5Hqd6IwK7nI7fvWahPDq13_cRzEgzVYnKb58AohA_Rp03q_XVnwrfVmq_2qxZ0RgsOzwAZtbcwcmIL"
                  alt="Дежурная служба заботы Пушистики"
                />
                <div class="faq-hero-media-overlay">
                  <div class="faq-media-badge">
                    <span class="faq-media-dot"></span>
                    <span>Дежурная служба заботы</span>
                  </div>
                  <h3 class="faq-media-title">С заботой о каждом хвостике по всему Казахстану</h3>
                </div>
              </div>

              <!-- Статистическая строка -->
              <div class="faq-stats-bar">
                <div class="faq-stat-item">
                  <span class="faq-stat-val faq-stat-val--primary">2 часа</span>
                  <span class="faq-stat-label">Экспресс Алматы</span>
                </div>
                <div class="faq-stat-item">
                  <span class="faq-stat-val faq-stat-val--secondary">0 ₸</span>
                  <span class="faq-stat-label">Доставка от 7 000 ₸</span>
                </div>
                <div class="faq-stat-item">
                  <span class="faq-stat-val faq-stat-val--accent">100%</span>
                  <span class="faq-stat-label">Свежесть рационов</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Липкая панель вкладок категорий -->
    <section class="faq-categories-section">
      <div class="faq-categories-inner">
        <div class="faq-tabs-row" id="category-chips">
          <button type="button" class="category-tab active-tab" data-category="all">
            <span class="material-symbols-outlined" style="font-size:18px">density_medium</span>
            <span>Все вопросы</span>
            <span class="category-tab-counter">7</span>
          </button>
          <button type="button" class="category-tab" data-category="delivery">
            <span class="material-symbols-outlined icon-secondary" style="font-size:18px">local_shipping</span>
            <span>Доставка и получение</span>
            <span class="category-tab-counter">2</span>
          </button>
          <button type="button" class="category-tab" data-category="payment">
            <span class="material-symbols-outlined icon-primary" style="font-size:18px">credit_card</span>
            <span>Оплата и Kaspi QR</span>
            <span class="category-tab-counter">1</span>
          </button>
          <button type="button" class="category-tab" data-category="food">
            <span class="material-symbols-outlined" style="font-size:18px;color:var(--color-primary-container)">restaurant</span>
            <span>Корма и подбор рациона</span>
            <span class="category-tab-counter">2</span>
          </button>
          <button type="button" class="category-tab" data-category="loyalty">
            <span class="material-symbols-outlined icon-secondary" style="font-size:18px">loyalty</span>
            <span>Пушистики.Club и автодоставка</span>
            <span class="category-tab-counter">1</span>
          </button>
          <button type="button" class="category-tab" data-category="vet">
            <span class="material-symbols-outlined icon-tertiary" style="font-size:18px">medical_services</span>
            <span>Ветврач и консультации</span>
            <span class="category-tab-counter">1</span>
          </button>
        </div>
      </div>
    </section>

    <!-- Основная секция: Аккордеон вопросов + Сайдбар обращений -->
    <section class="faq-main-section">
      <div class="faq-main-inner">
        <div class="faq-layout-grid">

          <!-- Список вопросов (Аккордеон) -->
          <div class="faq-questions-list" id="faq-accordion-container">

            <!-- Вопрос 1: Экспресс-доставка -->
            <details class="faq-card" data-category="delivery" data-keywords="доставка алматы астана экспресс курьер стоимость бесплатно 7000 тенге часы трекинг" open>
              <summary class="faq-summary">
                <div class="faq-summary-left">
                  <div class="faq-icon-box faq-icon-box--delivery">
                    <span class="material-symbols-outlined" style="font-size:22px">local_shipping</span>
                  </div>
                  <div class="faq-summary-titles">
                    <span class="faq-category-tag faq-category-tag--delivery">Доставка и получение</span>
                    <span class="faq-question-text">
                      Как работает экспресс-доставка по Алматы и Астане и сколько она стоит?
                    </span>
                  </div>
                </div>
                <div class="faq-arrow-box">
                  <span class="material-symbols-outlined faq-arrow-icon">expand_more</span>
                </div>
              </summary>
              <div class="faq-answer">
                <p>
                  Доставка день в день осуществляется собственной курьерской службой с 09:00 до 22:00. При заказе от <strong>7 000 ₸</strong> доставка по городам Алматы и Астана — <span style="color:var(--color-secondary);font-weight:700">абсолютно бесплатная</span>! Если сумма заказа меньше, стандартная стоимость составляет всего 900 ₸.
                </p>
                <div class="faq-highlight-box">
                  <div class="faq-highlight-info">
                    <span class="material-symbols-outlined icon-tertiary" style="font-size:24px">electric_moped</span>
                    <div>
                      <div class="faq-highlight-title">Экспресс-доставка за 120 минут</div>
                      <div class="faq-highlight-desc">Доступна во всех районах Алматы (от Медеу до Саина) с живым GPS-трекингом</div>
                    </div>
                  </div>
                  <span class="faq-highlight-price">1 200 ₸</span>
                </div>
                <div style="display:flex;align-items:center;gap:var(--space-md);font-size:13px;padding-top:4px">
                  <a href="#" style="color:var(--color-primary);font-weight:600;display:inline-flex;align-items:center;gap:2px;text-decoration:none">
                    <span>Зоны и интервалы курьеров</span>
                    <span class="material-symbols-outlined" style="font-size:16px">arrow_forward</span>
                  </a>
                  <span style="color:var(--color-outline)">•</span>
                  <span style="color:var(--color-secondary);display:inline-flex;align-items:center;gap:4px;font-weight:500">
                    <span class="material-symbols-outlined" style="font-size:16px">verified</span>
                    <span>Бережная термо-упаковка кормов</span>
                  </span>
                </div>
              </div>
            </details>

            <!-- Вопрос 2: Kaspi QR / Red -->
            <details class="faq-card" data-category="payment" data-keywords="kaspi qr red рассрочка 0-0-12 0-0-24 оплата картой наличные halyk visa mastercard">
              <summary class="faq-summary">
                <div class="faq-summary-left">
                  <div class="faq-icon-box faq-icon-box--payment">
                    <span class="material-symbols-outlined" style="font-size:22px">qr_code_2</span>
                  </div>
                  <div class="faq-summary-titles">
                    <span class="faq-category-tag faq-category-tag--payment">Оплата и Kaspi</span>
                    <span class="faq-question-text">
                      Можно ли оплатить заказ через Kaspi QR, Kaspi Red или оформить рассрочку 0-0-12?
                    </span>
                  </div>
                </div>
                <div class="faq-arrow-box">
                  <span class="material-symbols-outlined faq-arrow-icon">expand_more</span>
                </div>
              </summary>
              <div class="faq-answer">
                <p>
                  Да! Мы поддерживаем все удобные способы мгновенной оплаты для жителей Казахстана. Вы можете отсканировать <strong>Kaspi QR</strong> прямо на сайте в момент оформления или при получении у курьера через POS-терминал.
                </p>
                <div class="faq-subgrid-2">
                  <div class="faq-subcard">
                    <span class="material-symbols-outlined" style="font-size:20px;color:var(--color-error);margin-top:2px">credit_score</span>
                    <div>
                      <span class="faq-subcard-title">Kaspi Red и Рассрочка</span>
                      <span class="faq-subcard-desc">Покупки в клубный кредит на 3 месяца без переплат или в рассрочку до 12-24 месяцев на крупные заказы и премиум-рационы.</span>
                    </div>
                  </div>
                  <div class="faq-subcard">
                    <span class="material-symbols-outlined icon-secondary" style="font-size:20px;margin-top:2px">account_balance_wallet</span>
                    <div>
                      <span class="faq-subcard-title">Другие способы</span>
                      <span class="faq-subcard-desc">Карты Visa, Mastercard любого банка Казахстана (Halyk, Forte, Jusan), Apple Pay, а также наличными курьеру с фискальным чеком.</span>
                    </div>
                  </div>
                </div>
              </div>
            </details>

            <!-- Вопрос 3: Замена и гарантия корма -->
            <details class="faq-card" data-category="food" data-keywords="корм не подошел гранулы вкус замена возврат непереносимость аллергия диетолог свежесть">
              <summary class="faq-summary">
                <div class="faq-summary-left">
                  <div class="faq-icon-box faq-icon-box--food">
                    <span class="material-symbols-outlined" style="font-size:22px">restaurant</span>
                  </div>
                  <div class="faq-summary-titles">
                    <span class="faq-category-tag faq-category-tag--food">Корма и гарантия</span>
                    <span class="faq-question-text">
                      Что делать, если питомцу не подошел вкус или размер гранул корма?
                    </span>
                  </div>
                </div>
                <div class="faq-arrow-box">
                  <span class="material-symbols-outlined faq-arrow-icon">expand_more</span>
                </div>
              </summary>
              <div class="faq-answer">
                <p>
                  Мы гарантируем 100% свежесть и оригинальность всех рационов. Если герметичная заводская упаковка не вскрыта, вы можете вернуть или обменять корм в течение <strong>14 дней</strong> в любом нашем гипермаркете в Алматы и Астане, либо бесплатно передать его курьеру при следующем заказе.
                </p>
                <div class="faq-subcard" style="background:rgba(147,244,172,0.3);padding:var(--space-md)">
                  <span class="material-symbols-outlined icon-secondary" style="font-size:24px">verified_user</span>
                  <div>
                    <span class="faq-subcard-title">Программа «Вкусная гарантия»:</span>
                    <p class="faq-subcard-desc">
                      Если упаковка была вскрыта, но любимец отказывается от еды из-за капризов или аллергической реакции, наш штатный ветеринарный диетолог бесплатно поможет скорректировать переходный период и подберет гипоаллергенный рацион в виде пробных паучей.
                    </p>
                  </div>
                </div>
              </div>
            </details>

            <!-- Вопрос 4: Бонусы Пушистики.Club -->
            <details class="faq-card" data-category="loyalty" data-keywords="бонусы лапки пушистики club кэшбэк скидка 1000 бонусов баллы программа лояльности списать">
              <summary class="faq-summary">
                <div class="faq-summary-left">
                  <div class="faq-icon-box faq-icon-box--loyalty">
                    <span class="material-symbols-outlined" style="font-size:22px">loyalty</span>
                  </div>
                  <div class="faq-summary-titles">
                    <span class="faq-category-tag faq-category-tag--loyalty">Программа лояльности</span>
                    <span class="faq-question-text">
                      Как начисляются и на что можно потратить бонусы «Пушистики.Club»?
                    </span>
                  </div>
                </div>
                <div class="faq-arrow-box">
                  <span class="material-symbols-outlined faq-arrow-icon">expand_more</span>
                </div>
              </summary>
              <div class="faq-answer">
                <p>
                  За каждую покупку на ваш персональный баланс начисляется от <strong style="color:var(--color-secondary)">5% до 10% кэшбэка бонусами</strong> (1 бонус = 1 ₸). Бонусы не сгорают в течение 365 дней и суммируются со всеми стандартными промо-акциями каталога.
                </p>
                <ul class="faq-list-checks">
                  <li class="faq-list-item">
                    <span class="material-symbols-outlined icon-secondary" style="font-size:18px">check_circle</span>
                    <span><strong>Оплата до 30%</strong> от общей стоимости любого следующего заказа бонусами.</span>
                  </li>
                  <li class="faq-list-item">
                    <span class="material-symbols-outlined icon-secondary" style="font-size:18px">check_circle</span>
                    <span><strong>+1 000 бонусов</strong> начисляются сразу при первой регистрации по номеру телефона.</span>
                  </li>
                  <li class="faq-list-item">
                    <span class="material-symbols-outlined icon-secondary" style="font-size:18px">check_circle</span>
                    <span><strong>+500 бонусов</strong> за заполнение анкеты питомца (порода, возраст, день рождения).</span>
                  </li>
                </ul>
              </div>
            </details>

            <!-- Вопрос 5: Умная автодоставка со скидкой 15% -->
            <details class="faq-card" data-category="food" data-keywords="автодоставка подписка скидка 15 регулярная доставка график отмена расписание">
              <summary class="faq-summary">
                <div class="faq-summary-left">
                  <div class="faq-icon-box faq-icon-box--food">
                    <span class="material-symbols-outlined" style="font-size:22px">autorenew</span>
                  </div>
                  <div class="faq-summary-titles">
                    <span class="faq-category-tag faq-category-tag--food">Умный сервис</span>
                    <span class="faq-question-text">
                      Как работает сервис «Умная автодоставка со скидкой 15%»?
                    </span>
                  </div>
                </div>
                <div class="faq-arrow-box">
                  <span class="material-symbols-outlined faq-arrow-icon">expand_more</span>
                </div>
              </summary>
              <div class="faq-answer">
                <p>
                  Вы выбираете привычный корм вашего любимца и периодичность доставки (раз в 2, 3 или 4 недели). Система автоматически резервирует партию свежей поставки со скидкой <strong style="color:var(--color-primary-container)">-15%</strong> от базовой розничной цены.
                </p>
                <div class="faq-highlight-box">
                  <div class="faq-highlight-info">
                    <span class="material-symbols-outlined icon-primary" style="font-size:24px">chat</span>
                    <p style="font-size:13px;margin:0">
                      За 2 дня до выезда курьера вы получаете уведомление в WhatsApp. Дату можно сдвинуть, адрес изменить, а саму подписку отменить в 1 клик в личном кабинете без каких-либо комиссий.
                    </p>
                  </div>
                </div>
              </div>
            </details>

            <!-- Вопрос 6: Консультация ветврача -->
            <details class="faq-card" data-category="vet" data-keywords="ветеринар врач консультация бесплатно диета urinary renal gastrointestinal дозировка лекарства">
              <summary class="faq-summary">
                <div class="faq-summary-left">
                  <div class="faq-icon-box faq-icon-box--vet">
                    <span class="material-symbols-outlined" style="font-size:22px">medical_services</span>
                  </div>
                  <div class="faq-summary-titles">
                    <span class="faq-category-tag faq-category-tag--vet">Ветеринарная помощь</span>
                    <span class="faq-question-text">
                      Как получить бесплатную онлайн-консультацию ветеринарного врача?
                    </span>
                  </div>
                </div>
                <div class="faq-arrow-box">
                  <span class="material-symbols-outlined faq-arrow-icon">expand_more</span>
                </div>
              </summary>
              <div class="faq-answer">
                <p>
                  Дежурный ветеринарный врач и фелинолог-кинолог консультируют покупателей «Пушистики» ежедневно с <strong>09:00 до 22:00</strong> без выходных. Консультация бесплатна для всех зарегистрированных клиентов.
                </p>
                <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-xs);padding-top:4px">
                  <div class="faq-stat-item">
                    <span class="material-symbols-outlined icon-secondary" style="font-size:22px">scale</span>
                    <span style="font-weight:700;display:block;font-size:13px;color:var(--color-on-surface)">Расчет порции</span>
                    <span style="font-size:11px;color:var(--color-on-surface-variant)">Суточная норма по граммам</span>
                  </div>
                  <div class="faq-stat-item">
                    <span class="material-symbols-outlined icon-tertiary" style="font-size:22px">prescriptions</span>
                    <span style="font-weight:700;display:block;font-size:13px;color:var(--color-on-surface)">Лечебные диеты</span>
                    <span style="font-size:11px;color:var(--color-on-surface-variant)">Urinary, Renal, Gastro</span>
                  </div>
                  <div class="faq-stat-item">
                    <span class="material-symbols-outlined" style="font-size:22px;color:var(--color-primary-container)">pest_control</span>
                    <span style="font-weight:700;display:block;font-size:13px;color:var(--color-on-surface)">Защита от паразитов</span>
                    <span style="font-size:11px;color:var(--color-on-surface-variant)">Таблетки, капли и ошейники</span>
                  </div>
                </div>
              </div>
            </details>

            <!-- Вопрос 7: Доставка по регионам Казахстана -->
            <details class="faq-card" data-category="delivery" data-keywords="регионы казахстан шымкент караганда актобе павлодар казпочта сдэк доставка упаковка коробки">
              <summary class="faq-summary">
                <div class="faq-summary-left">
                  <div class="faq-icon-box faq-icon-box--delivery">
                    <span class="material-symbols-outlined" style="font-size:22px">public</span>
                  </div>
                  <div class="faq-summary-titles">
                    <span class="faq-category-tag faq-category-tag--delivery">Доставка по РК</span>
                    <span class="faq-question-text">
                      Доставляете ли вы заказы в другие города и регионы Казахстана?
                    </span>
                  </div>
                </div>
                <div class="faq-arrow-box">
                  <span class="material-symbols-outlined faq-arrow-icon">expand_more</span>
                </div>
              </summary>
              <div class="faq-answer">
                <p>
                  Да, мы отправляем товары в Шымкент, Караганду, Актобе, Павлодар, Усть-Каменогорск, Тараз, Костанай и любой населенный пункт Казахстана через партнерские службы <strong>СДЭК и Казпочта</strong>.
                </p>
                <div class="faq-highlight-box">
                  <div class="faq-highlight-info">
                    <span class="material-symbols-outlined icon-secondary" style="font-size:20px">inventory_2</span>
                    <span style="font-size:13px">Срок доставки: <strong>от 2 до 5 рабочих дней</strong> прямо до двери или в постамат.</span>
                  </div>
                  <span style="font-weight:700;color:var(--color-secondary);font-size:14px">От 1 450 ₸</span>
                </div>
                <p style="font-size:13px">
                  Каждый мешок корма и стеклянные флаконы упаковываются в трехслойный гофрокартон с влагозащитной пленкой и защитным стикером контроля вскрытия.
                </p>
              </div>
            </details>

            <!-- Заглушка: Ничего не найдено -->
            <div class="faq-no-results hidden" id="no-faq-results">
              <div class="faq-no-results-icon">
                <span class="material-symbols-outlined">search_off</span>
              </div>
              <h3 class="faq-no-results-title">По вашему запросу ничего не найдено</h3>
              <p class="faq-no-results-desc">
                Попробуйте изменить формулировку или задайте вопрос нашему дежурному консультанту напрямую через WhatsApp.
              </p>
              <button type="button" class="faq-submit-btn" id="reset-filter-btn">
                Показать все вопросы
              </button>
            </div>

          </div>

          <!-- Правая колонка: Виджет связи и быстрый вопрос -->
          <aside class="faq-sidebar">
            <div class="faq-contact-card">
              <div class="faq-contact-header">
                <div class="faq-contact-icon-bubble">💬</div>
                <div>
                  <h3 class="faq-contact-title">Не нашли ответ?</h3>
                  <span class="faq-contact-subtitle">Отвечаем за 2 минуты в чате</span>
                </div>
              </div>

              <p class="faq-contact-text">
                Наши зооконсультанты и ветеринары помогут подобрать размер гранул, проверить статус заказа или рассчитать точный срок доставки до вашего дома.
              </p>

              <div class="faq-actions-col">
                <a class="btn-whatsapp" href="https://wa.me/77475932055" target="_blank" rel="noopener">
                  <span class="material-symbols-outlined" style="font-size:22px">chat</span>
                  <span>Написать в WhatsApp</span>
                </a>
                <a class="btn-phone" href="tel:+77475932055">
                  <span class="material-symbols-outlined icon-primary" style="font-size:20px">call</span>
                  <span>+7 (747) 593-20-55</span>
                </a>
              </div>

              <!-- Форма быстрого вопроса -->
              <div class="faq-quick-form-card">
                <span class="faq-quick-form-title">Быстрый вопрос специалисту:</span>
                <form class="faq-form" id="faq-quick-form">
                  <input class="faq-form-input" type="text" placeholder="Ваше имя" required/>
                  <input class="faq-form-input" type="tel" placeholder="+7 (___) ___-__-__" required/>
                  <textarea class="faq-form-textarea" rows="2" placeholder="Какая порода питомца или какой вопрос возник?" required></textarea>
                  <button class="faq-form-submit-btn" type="submit">
                    Отправить вопрос
                  </button>
                </form>
              </div>

              <!-- Плашки гарантий -->
              <div class="faq-guarantee-badges">
                <div class="faq-guarantee-badge">
                  <span class="material-symbols-outlined icon-secondary" style="font-size:15px">verified</span>
                  <span>Kaspi QR Pay</span>
                </div>
                <div class="faq-guarantee-badge">
                  <span class="material-symbols-outlined icon-primary" style="font-size:15px">local_shipping</span>
                  <span>Курьер до двери</span>
                </div>
                <div class="faq-guarantee-badge">
                  <span class="material-symbols-outlined icon-tertiary" style="font-size:15px">support_agent</span>
                  <span>Без выходных</span>
                </div>
              </div>
            </div>
          </aside>

        </div>
      </div>
    </section>

    <!-- Секция полезных памяток для владельцев -->
    <section class="faq-memos-section">
      <div class="faq-memos-inner">
        <div class="faq-memos-header">
          <div>
            <span style="font-size:11px;font-weight:700;color:var(--color-primary);text-transform:uppercase;letter-spacing:0.05em">Полезные памятки</span>
            <h2 class="faq-memos-title">Коротко о самом главном для здоровья питомца</h2>
          </div>
          <p class="faq-memos-desc">
            Стандарты хранения кормов, правила мягкого перехода на новый рацион и адреса дежурных ветаптек сети «Пушистики».
          </p>
        </div>

        <div class="faq-memos-grid">
          <!-- Карточка 1 -->
          <div class="memo-card">
            <div class="memo-content">
              <div class="memo-icon memo-icon--secondary">
                <span class="material-symbols-outlined">thermostat</span>
              </div>
              <h3 class="memo-title">Хранение сухого корма</h3>
              <p class="memo-desc">
                Храните рационы при температуре от +10°C до +25°C в оригинальном мешке с плотно закрытым зип-локом. Избегайте прямого солнечного света и балконов, чтобы не допустить окисления полезных Омега-3 жиров.
              </p>
            </div>
            <a class="memo-link-wrap memo-link--secondary" href="#">
              <span>Читать руководство</span>
              <span class="material-symbols-outlined" style="font-size:18px">chevron_right</span>
            </a>
          </div>

          <!-- Карточка 2 -->
          <div class="memo-card">
            <div class="memo-content">
              <div class="memo-icon memo-icon--primary">
                <span class="material-symbols-outlined">change_circle</span>
              </div>
              <h3 class="memo-title">Схема перехода за 7 дней</h3>
              <p class="memo-desc">
                Не меняйте рацион резко. Начните с пропорции 25% нового корма и 75% привычного в первые 2 дня, плавно доводя до 100% к 7-му дню. Это предотвратит расстройство ЖКТ у щенков и взрослых собак.
              </p>
            </div>
            <a class="memo-link-wrap memo-link--primary" href="#">
              <span>Таблица дозировок</span>
              <span class="material-symbols-outlined" style="font-size:18px">chevron_right</span>
            </a>
          </div>

          <!-- Карточка 3 -->
          <div class="memo-card">
            <div class="memo-content">
              <div class="memo-icon memo-icon--tertiary">
                <span class="material-symbols-outlined">storefront</span>
              </div>
              <h3 class="memo-title">Самовывоз и ветпункты</h3>
              <p class="memo-desc">
                Заберите заказ бесплатно в одном из фирменных зоогипермаркетов в Алматы через 30 минут после оформления. В каждом магазине оборудован кабинет первичного осмотра и взвешивания.
              </p>
            </div>
            <a class="memo-link-wrap memo-link--tertiary" href="#">
              <span>Карта магазинов</span>
              <span class="material-symbols-outlined" style="font-size:18px">chevron_right</span>
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Скрипт базы знаний FAQ -->
  <script src="app.js"></script>
</body>
</html>