<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Пушистики • Регистрация в клубе привилегий</title>

  <!-- Шрифты и иконки Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

  <!-- Стили: глобальные и страница регистрации -->
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/registration.css"/>
</head>
<body>

  <!-- ========== ШАПКА САЙТА (HEADER) ========== -->
  <?php include 'components/header.php'; ?>

  <!-- ========== ОСНОВНОЙ КОНТЕНТ (MAIN) ========== -->
  <main class="reg-page">

    <!-- Хлебные крошки -->
    <div class="reg-breadcrumbs-bar">
      <nav class="reg-breadcrumbs" aria-label="Хлебные крошки">
        <a href="index.php" data-path="catalog-home">
          <span class="material-symbols-outlined" style="font-size:16px">home</span>
          <span>Главная</span>
        </a>
        <span class="breadcrumbs-sep material-symbols-outlined">chevron_right</span>
        <a href="#" data-path="bonus-program">Клуб привилегий</a>
        <span class="breadcrumbs-sep material-symbols-outlined">chevron_right</span>
        <span class="breadcrumbs-current">Регистрация в клубе «Пушистики»</span>
      </nav>
    </div>

    <!-- Основная секция регистрации -->
    <section class="reg-section">
      <div class="reg-container">
        <div class="reg-grid">

          <!-- Левая колонка: Привилегии, бонусы и гарантии -->
          <div class="reg-benefits-col">

            <!-- Приветственная карточка с бонусом за регистрацию -->
            <div class="reg-welcome-card">
              <!-- Фоновый декоративный след лапки -->
              <svg class="reg-paw-bg" fill="currentColor" viewBox="0 0 200 200">
                <circle cx="50" cy="55" r="22"></circle>
                <circle cx="95" cy="35" r="20"></circle>
                <circle cx="145" cy="55" r="22"></circle>
                <circle cx="170" cy="105" r="19"></circle>
                <path d="M60 135 C50 110, 80 85, 110 85 C140 85, 170 110, 160 135 C150 165, 125 175, 110 175 C95 175, 70 165, 60 135 Z"></path>
              </svg>

              <!-- Бейдж приветственного бонуса -->
              <div class="reg-bonus-pill">
                <span class="material-symbols-outlined" style="font-size:18px">celebration</span>
                <span>+1 000 бонусов за регистрацию</span>
              </div>

              <h1 class="reg-welcome-title">
                Добро пожаловать в семью пет-родителей!
              </h1>
              <p class="reg-welcome-desc">
                Заботиться о хвостике проще и выгоднее: 1 бонус = 1 ₸. Оплачивайте до 30% стоимости кормов, витаминов и игрушек во всех городах Казахстана.
              </p>

              <!-- Бенто-сетка преимуществ клуба -->
              <div class="reg-perks-grid">
                <div class="reg-perk-card">
                  <div class="reg-perk-icon reg-perk-icon--secondary">
                    <span class="material-symbols-outlined" style="font-size:22px">savings</span>
                  </div>
                  <div>
                    <span class="reg-perk-title">Кэшбэк до 10%</span>
                    <span class="reg-perk-desc">С каждого заказа кормов и лакомств</span>
                  </div>
                </div>

                <div class="reg-perk-card">
                  <div class="reg-perk-icon reg-perk-icon--primary">
                    <span class="material-symbols-outlined" style="font-size:22px">autorenew</span>
                  </div>
                  <div>
                    <span class="reg-perk-title">Автодоставка -15%</span>
                    <span class="reg-perk-desc">Свежий рацион по расписанию</span>
                  </div>
                </div>

                <div class="reg-perk-card">
                  <div class="reg-perk-icon reg-perk-icon--tertiary">
                    <span class="material-symbols-outlined" style="font-size:22px">stethoscope</span>
                  </div>
                  <div>
                    <span class="reg-perk-title">Ветврач 24/7</span>
                    <span class="reg-perk-desc">Бесплатный онлайн-чат поддержки</span>
                  </div>
                </div>

                <div class="reg-perk-card">
                  <div class="reg-perk-icon reg-perk-icon--secondary">
                    <span class="material-symbols-outlined" style="font-size:22px">featured_seasonal_and_gifts</span>
                  </div>
                  <div>
                    <span class="reg-perk-title">Подарок в ДР</span>
                    <span class="reg-perk-desc">Сюрприз в день рождения питомца</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Экспресс-авторизация через Kaspi ID -->
            <div class="reg-kaspi-card">
              <div class="reg-kaspi-left">
                <div class="reg-kaspi-logo">K</div>
                <div>
                  <span class="reg-kaspi-title">Быстрая регистрация через Kaspi ID</span>
                  <span class="reg-kaspi-desc">Без ручного ввода — данные подтянутся автоматически</span>
                </div>
              </div>
              <button class="reg-kaspi-btn" type="button">
                <span class="material-symbols-outlined" style="font-size:18px">qr_code_scanner</span>
                <span>Через Kaspi ID</span>
              </button>
            </div>

            <!-- Социальное подтверждение с фото питомца -->
            <div class="reg-social-proof-card">
              <div class="reg-proof-avatar-wrap">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5NkASSMLnzkJuWDBRVpGfpzE3O9MkiVf6snZ21q4ZxRuvUG1DCzPv068Cohq0PCe1yvb7wABNxVuiwdxjIz9cNtmF8qhDTb-87Jj7yMoEphJh0-T01zxqee8E9vEp_PI6AauWueG2VNpeQ2YFu7mFi8GrkBY2slMwCosXPjjGoHHAeJldXztli0dKp8QqIGAzr3faqAi7i2VKoSrXQfqrrnTIaKLLd545_LXHbtTkL_mMIy51W99T"
                  alt="Счастливый питомец Пушистики"
                />
                <div class="reg-proof-badge">
                  <span class="material-symbols-outlined" style="font-size:12px">verified</span>
                </div>
              </div>
              <div>
                <div class="reg-proof-stars">
                  <span class="material-symbols-outlined filled" style="font-size:18px">star</span>
                  <span class="material-symbols-outlined filled" style="font-size:18px">star</span>
                  <span class="material-symbols-outlined filled" style="font-size:18px">star</span>
                  <span class="material-symbols-outlined filled" style="font-size:18px">star</span>
                  <span class="material-symbols-outlined filled" style="font-size:18px">star</span>
                  <span style="font-weight:700;margin-left:4px;color:var(--color-on-surface);font-size:14px">4.9 / 5.0</span>
                </div>
                <p class="reg-proof-text">
                  «Более <strong>45 000 хвостиков</strong> по всему Казахстану питаются натуральными рационами из «Пушистики»!»
                </p>
              </div>
            </div>

            <!-- Знак ветеринарного контроля качества -->
            <div class="reg-vet-seal-card">
              <div class="reg-vet-seal-icon">
                <span class="material-symbols-outlined" style="font-size:20px">health_and_safety</span>
              </div>
              <div>
                <span class="reg-vet-seal-title">100% Ветеринарный контроль</span>
                <span class="reg-vet-seal-desc">Все рационы сертифицированы в МСХ РК и хранятся на складах с климат-контролем.</span>
              </div>
            </div>

          </div>

          <!-- Правая колонка: Форма регистрации -->
          <div class="reg-form-card">
            <!-- Шапка формы -->
            <div class="reg-form-header">
              <div>
                <h2 class="reg-form-heading">Создайте личный кабинет</h2>
                <p class="reg-form-subheading">Занимает менее 1 минуты</p>
              </div>
              <div class="reg-login-link-wrap">
                <span style="color:var(--color-on-surface-variant)">Есть аккаунт?</span>
                <a class="reg-login-link" href="#" data-path="login">Войти</a>
              </div>
            </div>

            <!-- Вкладки метода регистрации -->
            <div class="reg-tabs-bar" id="reg-tabs">
              <button type="button" class="reg-tab-btn active" id="tab-phone">
                По номеру телефона
              </button>
              <button type="button" class="reg-tab-btn" id="tab-email">
                По E-mail
              </button>
            </div>

            <!-- Тело формы -->
            <form class="reg-form" id="pet-registration-form">

              <!-- Строка: Телефон / Email + Имя -->
              <div class="reg-row-2">

                <!-- Поле: Телефон (Казахстан +7) -->
                <div class="reg-field-group" id="field-phone-container">
                  <label class="reg-label" for="user-phone">
                    <span>Номер телефона <span style="color:var(--color-error)">*</span></span>
                    <span class="reg-label-sub" style="color:var(--color-secondary)">SMS-код</span>
                  </label>
                  <div class="reg-input-wrap">
                    <div class="reg-phone-prefix">
                      <span style="font-size:18px;line-height:1">🇰🇿</span>
                      <span>+7</span>
                    </div>
                    <input
                      type="tel"
                      id="user-phone"
                      class="reg-input reg-input--phone"
                      placeholder="(777) 000-00-00"
                      maxlength="15"
                      required
                    />
                  </div>
                </div>

                <!-- Поле: Email (скрыто в режиме телефона) -->
                <div class="reg-field-group hidden" id="field-email-container">
                  <label class="reg-label" for="user-email">
                    <span>Электронная почта <span style="color:var(--color-error)">*</span></span>
                  </label>
                  <div class="reg-input-wrap">
                    <span class="material-symbols-outlined reg-input-icon">mail</span>
                    <input
                      type="email"
                      id="user-email"
                      class="reg-input"
                      placeholder="example@fluffies.kz"
                    />
                  </div>
                </div>

                <!-- Поле: Имя пользователя -->
                <div class="reg-field-group">
                  <label class="reg-label" for="user-name">
                    <span>Ваше имя <span style="color:var(--color-error)">*</span></span>
                  </label>
                  <div class="reg-input-wrap">
                    <span class="material-symbols-outlined reg-input-icon">person</span>
                    <input
                      type="text"
                      id="user-name"
                      class="reg-input"
                      placeholder="Например, Айгерим или Тимур"
                      required
                    />
                  </div>
                </div>

              </div>

              <!-- Строка: Город доставки + Пароль -->
              <div class="reg-row-2">

                <!-- Выбор города доставки -->
                <div class="reg-field-group">
                  <label class="reg-label" for="user-city">
                    <span>Город доставки <span style="color:var(--color-error)">*</span></span>
                    <span class="reg-label-sub" style="color:var(--color-on-surface-variant);font-weight:400">Курьер до двери</span>
                  </label>
                  <div class="reg-input-wrap">
                    <span class="material-symbols-outlined reg-input-icon icon-primary">location_on</span>
                    <select id="user-city" class="reg-input reg-select" required>
                      <option value="almaty" selected>Алматы (доставка от 2 часов)</option>
                      <option value="astana">Астана (экспресс-доставка)</option>
                      <option value="shymkent">Шымкент (доставка на следующий день)</option>
                      <option value="karaganda">Караганда</option>
                      <option value="aktobe">Актобе</option>
                      <option value="atyrau">Атырау</option>
                      <option value="pavlodar">Павлодар</option>
                      <option value="ust-kamenogorsk">Усть-Каменогорск</option>
                      <option value="other">Другой населенный пункт РК</option>
                    </select>
                    <span class="material-symbols-outlined reg-select-arrow">expand_more</span>
                  </div>
                </div>

                <!-- Поле: Пароль с переключателем и индикатором сложности -->
                <div class="reg-field-group">
                  <label class="reg-label" for="user-password">
                    <span>Придумайте пароль <span style="color:var(--color-error)">*</span></span>
                    <span class="reg-label-sub" id="pwd-strength-label" style="color:var(--color-outline)">мин. 8 символов</span>
                  </label>
                  <div class="reg-input-wrap">
                    <span class="material-symbols-outlined reg-input-icon">lock</span>
                    <input
                      type="password"
                      id="user-password"
                      class="reg-input reg-input--pwd"
                      placeholder="••••••••"
                      required
                    />
                    <button type="button" id="pwd-toggle-btn" class="reg-pwd-toggle" title="Показать / Скрыть пароль">
                      <span class="material-symbols-outlined" id="pwd-eye-icon" style="font-size:20px">visibility</span>
                    </button>
                  </div>
                  <!-- Индикатор сложности (3 сегмента) -->
                  <div class="reg-pwd-strength-bar">
                    <div class="reg-strength-seg" id="bar-1"></div>
                    <div class="reg-strength-seg" id="bar-2"></div>
                    <div class="reg-strength-seg" id="bar-3"></div>
                  </div>
                </div>

              </div>

              <!-- Блок: Профиль питомца (+500 бонусов на счет) -->
              <div class="reg-pet-booster">
                <div class="reg-pet-header">
                  <div class="reg-pet-header-left">
                    <div class="reg-pet-icon-wrap">
                      <span class="material-symbols-outlined" style="font-size:20px">pets</span>
                    </div>
                    <div>
                      <span class="reg-pet-title">Добавьте вашего питомца</span>
                      <span class="reg-pet-subtitle">Персональный рацион и напоминания о прививках</span>
                    </div>
                  </div>
                  <span class="reg-bonus-chip">+500 бонусов</span>
                </div>

                <!-- Выбор вида животного -->
                <div style="display:flex;flex-direction:column;gap:6px">
                  <span style="font-size:11px;font-weight:700;color:var(--color-on-surface-variant);text-transform:uppercase;letter-spacing:0.04em">Кто ваш любимец?</span>
                  <div class="reg-pet-species-row" id="pet-species-selector">
                    <button type="button" class="pet-chip active" data-species="dog">
                      <span>🐶</span>
                      <span>Собака</span>
                    </button>
                    <button type="button" class="pet-chip" data-species="cat">
                      <span>🐱</span>
                      <span>Кошка</span>
                    </button>
                    <button type="button" class="pet-chip" data-species="bird">
                      <span>🦜</span>
                      <span>Птица</span>
                    </button>
                    <button type="button" class="pet-chip" data-species="rodent">
                      <span>🐹</span>
                      <span>Грызун</span>
                    </button>
                    <button type="button" class="pet-chip" data-species="other">
                      <span>🐠</span>
                      <span>Другой</span>
                    </button>
                  </div>
                </div>

                <!-- Поля клички и породы/даты рождения -->
                <div class="reg-row-2">
                  <input
                    type="text"
                    id="pet-name"
                    class="reg-input"
                    style="padding-left:16px"
                    placeholder="Кличка (например, Корги Макс, Барсик)"
                  />
                  <input
                    type="text"
                    id="pet-breed"
                    class="reg-input"
                    style="padding-left:16px"
                    placeholder="Порода или дата рождения (для подарка)"
                  />
                </div>
              </div>

              <!-- Чекбоксы согласия -->
              <div class="reg-consent-group">
                <!-- Оферта -->
                <div class="custom-consent-row">
                  <input type="checkbox" id="terms-check" checked required style="display:none"/>
                  <div class="custom-consent-box checked">
                    <span class="material-symbols-outlined" style="font-size:16px">check</span>
                  </div>
                  <span class="custom-consent-text">
                    Согласен с <a href="#" data-path="legal-terms">условиями оферты</a> и правилами <a href="#" data-path="privacy-policy">обработки персональных данных</a>
                  </span>
                </div>

                <!-- Промо-рассылки -->
                <div class="custom-consent-row">
                  <input type="checkbox" id="promo-check" checked style="display:none"/>
                  <div class="custom-consent-box checked">
                    <span class="material-symbols-outlined" style="font-size:16px">check</span>
                  </div>
                  <span class="custom-consent-text">
                    Получать эксклюзивные промокоды, скидки на корм и напоминания о вакцинации хвостика по SMS и WhatsApp
                  </span>
                </div>
              </div>

              <!-- Кнопка регистрации -->
              <button type="submit" class="reg-submit-btn">
                <span>Зарегистрироваться и забрать 1 000 бонусов</span>
                <span class="material-symbols-outlined btn-icon">pets</span>
              </button>

              <!-- Всплывающий баннер успешной регистрации -->
              <div class="reg-toast-card hidden" id="registration-toast">
                <span class="material-symbols-outlined" style="font-size:24px">task_alt</span>
                <div>
                  <span class="reg-toast-title">Добро пожаловать в клуб «Пушистики»!</span>
                  <span class="reg-toast-desc">На ваш бонусный счет начислено 1 000 ₸. Перенаправляем в каталог...</span>
                </div>
              </div>

              <!-- Альтернативные способы входа -->
              <div class="reg-alt-section">
                <div class="reg-alt-divider">
                  <div class="reg-divider-line"></div>
                  <span class="reg-divider-text">или войти через</span>
                  <div class="reg-divider-line"></div>
                </div>

                <div class="reg-social-grid">
                  <button type="button" class="reg-social-btn">
                    <span class="reg-social-dot-kaspi"></span>
                    <span>Kaspi QR</span>
                  </button>
                  <button type="button" class="reg-social-btn">
                    <svg style="width:16px;height:16px;flex-shrink:0" viewBox="0 0 24 24">
                      <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                      <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                      <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"></path>
                      <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"></path>
                    </svg>
                    <span>Google</span>
                  </button>
                  <button type="button" class="reg-social-btn">
                    <span class="material-symbols-outlined" style="font-size:18px">brand_awareness</span>
                    <span>Apple</span>
                  </button>
                </div>
              </div>

            </form>
          </div>

        </div>

        <!-- Нижние столпы надежности и гарантий -->
        <div class="reg-trust-pillars">
          <div class="reg-pillar-card">
            <div class="reg-pillar-icon reg-pillar-icon--secondary">
              <span class="material-symbols-outlined">verified_user</span>
            </div>
            <div>
              <h3 class="reg-pillar-title">Конфиденциальность 100%</h3>
              <p class="reg-pillar-desc">
                Защищенный шлюз SSL. Данные хранятся на серверах в РК в строгом соответствии с законом «О персональных данных».
              </p>
            </div>
          </div>

          <div class="reg-pillar-card">
            <div class="reg-pillar-icon reg-pillar-icon--primary">
              <span class="material-symbols-outlined">local_shipping</span>
            </div>
            <div>
              <h3 class="reg-pillar-title">Доставка по всему Казахстану</h3>
              <p class="reg-pillar-desc">
                Собственные курьеры в Алматы, Астане и Шымкенте. Экспресс-доставка за 2 часа и в пункты выдачи СДЭК / Казпочта.
              </p>
            </div>
          </div>

          <div class="reg-pillar-card">
            <div class="reg-pillar-icon reg-pillar-icon--tertiary">
              <span class="material-symbols-outlined">support_agent</span>
            </div>
            <div>
              <h3 class="reg-pillar-title">Помощь в WhatsApp</h3>
              <p class="reg-pillar-desc">
                Консультанты и ветеринары на связи ежедневно с 09:00 до 22:00. Поможем подобрать правильный лечебный или повседневный рацион.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Скрипт регистрации -->
  <script src="app.js"></script>
</body>
</html>