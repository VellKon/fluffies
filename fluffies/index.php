<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Пушистики • ZOO-магазин</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"/>

  <!-- Styles -->
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/home.css"/>
</head>
<body>

  <!-- ========== HEADER ========== -->
  <?php include 'components/header.php'; ?>

  <!-- ========== MAIN ========== -->
  <main class="site-main">
    <div class="page-content">

      <!-- ========== HERO ========== -->
      <section class="hero">
        <div class="hero-inner">
          <div class="hero-grid">

            <!-- Hero Text -->
            <div class="hero-content">

              <h1 class="hero-title">
                Забота о любимых хвостиках с быстрой доставкой по всему Казахстану!
                <span style="display:inline-block">🐾</span>
              </h1>

              <p class="hero-desc">
                Свежие рационы супер-премиум класса, ветеринарные холистики, игрушки и препараты прямо со склада. Скидка <strong>-20%</strong> на первый заказ по коду <strong class="text-primary">Fluffies</strong>.
              </p>

              <div class="hero-actions">
                <a class="btn-hero-primary" href="#feed-calculator">
                  <span class="material-symbols-outlined" style="font-size:22px">pets</span>
                  <span>Выбрать корм для питомца</span>
                </a>
                <a class="btn-hero-secondary" href="#specials">
                  <span class="material-symbols-outlined" style="font-size:20px">local_offer</span>
                  <span>Каталог акций</span>
                </a>
              </div>

              <!-- Trust Counters -->
              <div class="hero-stats">
                <div class="stat-card">
                  <span class="stat-value stat-value--primary">14 500+</span>
                  <span class="stat-label">Счастливых питомцев</span>
                </div>
                <div class="stat-card">
                  <span class="stat-value stat-value--secondary">45 минут</span>
                  <span class="stat-label">Среднее время сборки</span>
                </div>
                <div class="stat-card">
                  <span class="stat-value stat-value--tertiary">100%</span>
                  <span class="stat-label">Оригинальные бренды</span>
                </div>
              </div>
            </div>

            <!-- Hero Visual -->
            <div class="hero-visual">
              <div class="hero-image-wrap">
                <div class="hero-image-inner">
                  <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMBYXs8XR7AP6hGHw5C7_0kS9-5BWfb6F8U4C9NNqWKcpp6Jrd14NsivquBlZi_0-95f_aWBS0mD6Ph7d2PFH4NXRpS9yxS6Gn022aMD4qcbJOWFXRuf7Cgdaj5hswGDRTAFLcSlyf6OipfQNmuUw0VVRfkvvpTYs6XM4geo4bwmbxZAgEBQgxIlrdRRzGOJ7mZ4VnIcWE-ZvMw_ZyXGHiWRceeObJzMg17vLbXcjo0AvPfPpG-Ng3"
                    alt="Puppy and cat next to premium pet food"
                  />
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ========== ANIMAL CATEGORIES ========== -->
      <section class="categories">
        <div class="categories-inner">
          <div class="section-header">
            <div>
              <span class="section-eyebrow">Каталог для каждого друга</span>
              <h2 class="section-title">Выберите любимца</h2>
            </div>
            <p class="section-subtitle">Более 12 000 сертифицированных товаров с быстрой фильтрацией</p>
          </div>

          <div class="categories-grid">
            <!-- Собаки -->
            <a class="category-card" href="#catalog-dogs">
              <div class="category-img-wrap category-img-wrap--dogs">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-M2J5Ef0TC47STO6jYVC9-ZVfNvtr6eARamD6FTfxGiKmwMO4T4knTefK3c-BluVbM9IIQgiJ3xUErRKdYjIcz9t6aa3YJmQ4n0_YxuTR931Q5kKj1Mjux3RbWcvXncoe8gItpULHzVgdeJzTA7cz-HE5O2umNdeiZqeh_T1uvcTdWGbeskXrbLvQgduTw0rh0sitvYITzKuaEz8fnNOsLaMx84M_42xzhFMJMAWP3Rlm9X6F8AJC"
                  alt="Corgi dog"
                />
              </div>
              <span class="category-name category-name--dogs">Собаки</span>
              <span class="category-desc">Корма, игрушки, амуниция</span>
            </a>
            <!-- Кошки -->
            <a class="category-card" href="#catalog-cats">
              <div class="category-img-wrap category-img-wrap--cats">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAnv1QwQPRNzkjMy-Z8f7FpH45a34r4Nc74x-k1fQ2xKYi6F6JJWOw_23DmBTRvWfk5IkaWwitv1t78pyCG_3S9Km4_9_Hd8CkuESswTtcqp0vCZPdnK2memnmGi5xWK7ihCTmsQR0SuX4Wv1xbGEpU-H5_U3NFObemGU7aszSqZxdgndAmr7P9u56jdoAquLyh7qsHJfTyIdoQ1VNrEJXpjcka-VqObVMgVwuPhUOmEp3kWFsx12z"
                  alt="Scottish fold cat"
                />
              </div>
              <span class="category-name category-name--cats">Кошки</span>
              <span class="category-desc">Паштеты, лотки, когтеточки</span>
            </a>
            <!-- Птицы -->
            <a class="category-card" href="#catalog-birds">
              <div class="category-img-wrap category-img-wrap--birds">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmmGy2VO851OTWbP9sVuLX0urT7HX_Te3iCPXd-wGvdIH0qdPaGUlpJQYJ2khFzTxJApHLkTZOBay7qA87QBKZt8dhdCEEk1wje_8p0Nu3m_yR-RMPUpEFO21_dEZM6VT1b3fwl6s5PZIxTeGYhj4zUT4sl8tOqyU8nmDFvprL2XZAzmjW_KK9A8_vdw01P75SD5ASO5w5wsOXxOkI9174-5Vu2LM6FHhmd-TnUPUiNOUGnA1W-baP"
                  alt="Budgie parrot"
                />
              </div>
              <span class="category-name category-name--birds">Птицы</span>
              <span class="category-desc">Зерносмеси, клетки, качели</span>
            </a>
            <!-- Грызуны -->
            <a class="category-card" href="#catalog-rodents">
              <div class="category-img-wrap category-img-wrap--rodents">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbDuKsobVHbyma_zLc2Uxi5Azit28X5OpwLsUiHFBmItuEIala-cgxicc95Ka9eHofeDOoCtX0pJ1Wvex5Uk7B8zpvjpOKlfdVahaG9bQgr10Fs3x9sA9lLoyqDcq0cci4WFV6NLL4EzH2X4FNWoX0Tci280RIBtB6bEXBM1uHeo_kN6vvf5gC1GfZKFebVhodBiRH8ABsHJtcS1mkZK6vB9CE3P-5pPgOm-lr20MCUZl2RdHS3cki"
                  alt="Syrian hamster"
                />
              </div>
              <span class="category-name category-name--rodents">Грызуны</span>
              <span class="category-desc">Сено, лакомства, домики</span>
            </a>
            <!-- Аквариум -->
            <a class="category-card" href="#catalog-aqua">
              <div class="category-img-wrap category-img-wrap--aqua">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbwkSSB_iE0a7s0JPYg3ob-MHcJwAF2ScJb7JfXpIKCiLjTYCXOUlQJNkzFRfNLGvMyTGQpzc1eQcQVUOQJph9p-_SzohQfiJlfeg0xxuROu-wdfQRd3FSDJllBgE35XfFdjRzYFQH_Wsi9ZhSOtX3_TL67gtoxZJzAKRQ3Tdt31KUoxNaBoBbDi_lGIhkhKWYF3mK4Jyj-XpCJNmSYpTZDoGTGiVy6L-woE7la5UVAxBmJ1l6L71e"
                  alt="Betta fish"
                />
              </div>
              <span class="category-name category-name--aqua">Аквариум</span>
              <span class="category-desc">Хлопья, фильтры, грунты</span>
            </a>
            <!-- Ветаптека -->
            <a class="category-card" href="#catalog-vet">
              <div class="category-img-wrap category-img-wrap--vet">
                <img
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAS_AS-F-Bk3gMEgsvNHa3ZLseNYmZmZ4Sjp7JKgsLolAuQI2z72QfSbvhPMC1RyKJPibxtB87rgtmlj8hHe7YrrxoT1piq6M0d7mCIC0bc2q2VRhYVaDQ43fbk_6Catd7m3kQTBIE-P2TJKZ4WW-nfGusd_020NuM1mrY-egkiWSg5bR8ICivTKmQHxJLHHTa7ECcpKoz4geH880mLSJCRYsLLp8ZlfTxogC1w-Its5UKDDfEcPMff"
                  alt="Veterinary medicine"
                />
              </div>
              <span class="category-name category-name--vet">Ветаптека</span>
              <span class="category-desc">Капли, таблетки, уход</span>
            </a>
          </div>
        </div>
      </section>

      <!-- ========== FEED CALCULATOR ========== -->
      <section class="calculator" id="feed-calculator">
        <div class="calculator-inner">
          <div class="calculator-header">
            <span class="section-eyebrow">Персональный рацион</span>
            <h2 class="section-title" style="font-size:36px; margin-top:4px">Калькулятор нормы кормления и подбор корма</h2>
            <p class="section-subtitle" style="margin-top:8px">
              Введите данные о питомце — наш алгоритм рассчитает суточную норму граммов и предложит идеально подходящие формулы питания
            </p>
          </div>

          <div class="calculator-card">
            <div class="calculator-grid">

              <!-- Inputs -->
              <div class="calculator-inputs">

                <!-- Шаг 1: Тип питомца -->
                <div class="calc-step">
                  <label>1. Кто ваш питомец?</label>
                  <div class="pet-type-grid" id="pet-type-selector">
                    <button class="pet-btn pet-btn--active-dog" id="btn-pet-dog" type="button" onclick="selectPetType('dog')">
                      <span style="font-size:24px">🐶</span> Собака
                    </button>
                    <button class="pet-btn pet-btn--inactive" id="btn-pet-cat" type="button" onclick="selectPetType('cat')">
                      <span style="font-size:24px">🐱</span> Кошка
                    </button>
                  </div>
                </div>

                <!-- Шаг 2: Возраст -->
                <div class="calc-step">
                  <label>2. Возраст питомца</label>
                  <div class="age-grid" id="age-selector">
                    <button class="age-btn age-btn--inactive" id="btn-age-puppy" type="button" onclick="selectAge('puppy')">
                      Щенок / Котёнок <span class="age-btn-sub">до 1 года</span>
                    </button>
                    <button class="age-btn age-btn--active" id="btn-age-adult" type="button" onclick="selectAge('adult')">
                      Взрослый <span class="age-btn-sub">от 1 до 7 лет</span>
                    </button>
                    <button class="age-btn age-btn--inactive" id="btn-age-senior" type="button" onclick="selectAge('senior')">
                      Сеньор <span class="age-btn-sub">старше 7 лет</span>
                    </button>
                  </div>
                </div>

                <!-- Шаг 3: Вес -->
                <div class="calc-step">
                  <div class="weight-header">
                    <label for="weight-input">3. Вес питомца (в кг)</label>
                    <span class="weight-display" id="weight-display">14 кг</span>
                  </div>
                  <input
                    class="weight-slider"
                    id="weight-slider"
                    type="range"
                    min="1"
                    max="60"
                    step="1"
                    value="14"
                    oninput="updateCalculation(this.value)"
                  />
                  <div class="weight-labels">
                    <span>1 кг (Мини)</span>
                    <span>25 кг (Средний)</span>
                    <span>60 кг (Гигант)</span>
                  </div>
                </div>

                <!-- Шаг 4: Активность -->
                <div class="calc-step">
                  <label>4. Особенность или уровень активности</label>
                  <div class="activity-chips">
                    <span class="activity-chip activity-chip--active">Обычная активность</span>
                    <span class="activity-chip activity-chip--inactive">Стерилизован / Кастрирован</span>
                    <span class="activity-chip activity-chip--inactive">Чувствительное пищеварение</span>
                  </div>
                </div>

              </div>

              <!-- Result -->
              <div class="calculator-result">
                <div>
                  <div class="result-header">
                    <span class="result-label">Расчёт готов</span>
                    <span class="material-symbols-outlined icon-secondary">verified</span>
                  </div>
                  <div class="result-daily-box">
                    <span class="result-daily-text">Суточная норма сухих гранул:</span>
                    <div class="result-grams-row">
                      <span class="result-grams" id="calculated-grams">215</span>
                      <span class="result-unit">грамм / день</span>
                    </div>
                    <span class="result-hint">Рекомендуется разделить на 2 приема (утро / вечер)</span>
                  </div>
                  <div class="result-recommendation">
                    <span class="result-rec-title">Рекомендуемый рацион:</span>
                    <div class="recommended-product">
                      <div class="rec-product-img">
                        <img
                          src="https://lh3.googleusercontent.com/aida-public/AB6AXuBF0c0qK00L8qlaDOXWICxlgJE67VETdL448di2S2j6UN-NVITQ8aTa5oqxGOnrkKONNkNayQhhmFgJNImeh5QFSTWtpalcgqF2UXvNcFD1WpuotA3WUbPiTzVQqZ4XSkyVA56_V2iH-AscObiXlDEqKRbahvcUsCvyYifz98pEisGpWDZ0Q4GwVG6ohHh8xd2C_Cn3YoOEZMM8itZJ6HA5WgBhFsBwYAeHiPyDUqcGqhmQYtc74HF"
                          alt="Grandorf adult feed"
                        />
                      </div>
                      <div class="rec-product-info">
                        <span class="rec-product-name" id="recommended-product-name">Grandorf 4 Meat Adult Medium</span>
                        <span class="rec-product-duration">Хватит примерно на 56 дней (12 кг)</span>
                        <span class="rec-product-price">42 500 ₸</span>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn-order-ration">
                  <span class="material-symbols-outlined" style="font-size:18px">shopping_cart_checkout</span>
                  <span>Заказать подходящий рацион</span>
                </button>
              </div>

            </div>
          </div>
        </div>
      </section>

            <!-- ========== AUTO-REPLENISHMENT ========== -->
      <section class="autoship">
        <div class="autoship-inner">
          <div class="autoship-card">
            <div class="autoship-decoration"></div>
            <div class="autoship-grid">

              <div class="autoship-content">
                <div class="autoship-eyebrow">
                  <span class="material-symbols-outlined icon-primary" style="font-size:28px">autorenew</span>
                  <span class="autoship-tag">Умная забота о запасах</span>
                </div>
                <h2 class="autoship-title">Никогда не оставляйте миску пустой с «Автодоставкой -15%»</h2>
                <p class="autoship-desc">
                  Настройте регулярную отправку любимого рациона раз в 2, 4 или 6 недель. Корм приедет точно вовремя, а вы получите постоянную скидку 15% и бесплатную курьерскую доставку прямо до двери.
                </p>
                <div class="autoship-benefits">
                  <div class="autoship-benefit">
                    <span class="material-symbols-outlined icon-secondary" style="font-size:24px">percent</span>
                    <span class="autoship-benefit-text">Скидка -15% на каждый заказ</span>
                  </div>
                  <div class="autoship-benefit">
                    <span class="material-symbols-outlined icon-primary" style="font-size:24px">edit_calendar</span>
                    <span class="autoship-benefit-text">Легко перенести или отменить</span>
                  </div>
                  <div class="autoship-benefit">
                    <span class="material-symbols-outlined icon-tertiary" style="font-size:24px">local_shipping</span>
                    <span class="autoship-benefit-text">Приоритетный курьер 0 ₸</span>
                  </div>
                </div>
                <div>
                  <button class="btn-autoship">
                    <span>Настроить график автодоставки</span>
                    <span class="material-symbols-outlined" style="font-size:20px">arrow_forward</span>
                  </button>
                </div>
              </div>

              <div>
                <div class="autoship-widget">
                  <div class="autoship-widget-header">
                    <span class="autoship-widget-title">Мой график подписки</span>
                    <span class="autoship-widget-status">Активен</span>
                  </div>
                  <div class="autoship-order-item">
                    <div class="autoship-order-icon">
                      <span class="material-symbols-outlined icon-primary">lunch_dining</span>
                    </div>
                    <div class="autoship-order-info">
                      <span class="autoship-order-name">Grandorf Maxi 12 кг</span>
                      <span class="autoship-order-freq">Каждые 4 недели</span>
                    </div>
                  </div>
                  <div class="autoship-meta">
                    <span class="autoship-meta-label">Следующая доставка:</span>
                    <span class="autoship-meta-value">Четверг, 15 мая</span>
                  </div>
                  <div class="autoship-meta">
                    <span class="autoship-meta-label">Цена с авто-скидкой:</span>
                    <span class="autoship-meta-price">36 125 ₸</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <!-- ========== REVIEWS ========== -->
      <section class="reviews">
        <div class="reviews-inner">
          <div class="reviews-header">
            <div>
              <span class="section-eyebrow" style="color: var(--color-secondary)">Реальные отзывы</span>
              <h2 class="section-title">Что говорят Pet-родители в РК</h2>
            </div>
            <div class="reviews-stars">
              <span class="material-symbols-outlined icon-primary" style="font-size:20px; font-variation-settings: 'FILL' 1">star</span>
              <span class="material-symbols-outlined icon-primary" style="font-size:20px; font-variation-settings: 'FILL' 1">star</span>
              <span class="material-symbols-outlined icon-primary" style="font-size:20px; font-variation-settings: 'FILL' 1">star</span>
              <span class="material-symbols-outlined icon-primary" style="font-size:20px; font-variation-settings: 'FILL' 1">star</span>
              <span class="material-symbols-outlined icon-primary" style="font-size:20px; font-variation-settings: 'FILL' 1">star</span>
              <span class="reviews-score">4.96 из 5</span>
            </div>
          </div>

          <div class="reviews-grid">

            <!-- Отзыв 1 -->
            <div class="review-card">
              <div>
                <div class="review-author-row">
                  <div class="review-author">
                    <img
                      class="review-avatar"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJp-zop3Ul2RFONHJh5rahuByCiKMsk4ZzL4xgdWRCep964VVxUWzMPVvAkgCSTIIC7HbYggWsGqTEZcZD38ENh_rt4BO-hisA_394Ik-nPFfPkeOXUi_Ap4MsgjFrKJ-0t56p2L4C93esb9_BjT16g77U49uHeLmx2guJ3rjaP6IoCPbbNtQLnTeWrgnWJS_HIEldGaXxbfzeHqrL5UXB4Z7PkQs2N8lN9K-IJBp2TWGyfYRpwxix"
                      alt="Динара Сарсенова"
                    />
                    <div>
                      <h3 class="review-author-name">Динара Сарсенова</h3>
                      <span class="review-author-city">
                        <span class="material-symbols-outlined icon-primary" style="font-size:14px">location_on</span>
                        г. Алматы (Медеуский р-н)
                      </span>
                    </div>
                  </div>
                </div>
                <p class="review-text">
                  «Заказываем Monge и Бравекто для нашего бульдожки. Курьер приехал буквально за 1 час 40 минут! Пакет корма свежий, сроки годности отличные. В подарок положили пакетик лакомств — очень приятно!»
                </p>
              </div>
              <div class="review-footer">
                <span class="review-pet-tag">Французский бульдог Ричи</span>
                <span>2 дня назад</span>
              </div>
            </div>

            <!-- Отзыв 2 -->
            <div class="review-card">
              <div>
                <div class="review-author-row">
                  <div class="review-author">
                    <img
                      class="review-avatar"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1Dl7IgyexUMZhlVBL8TYNax_oQgurOyN660ax6hefj2mLPux2x071rP6BSF77EzUk0IrPZAiKOGlsORHQWSxqgjJ6PGYoYy6CbHG3xEnlDP8xE1gXt1HPrF8jEJrKzaXbmEGapQZRZ3IZJvl0aMXetL7CV56W_eFsIY-qqh9klNk-p_-10ubYiMUolcevTcnoJEqbGFDbSQEUViIsKwPUKHl3XeLadUSmeZFGH-foo1jD2XJwN__o"
                      alt="Арман Бектуров"
                    />
                    <div>
                      <h3 class="review-author-name">Арман Бектуров</h3>
                      <span class="review-author-city">
                        <span class="material-symbols-outlined icon-primary" style="font-size:14px">location_on</span>
                        г. Алматы (Турксибский р-н)
                      </span>
                    </div>
                  </div>
                </div>
                <p class="review-text">
                  «Оформил автодоставку на Grandorf со скидкой 15%. Теперь голова не болит, что корм внезапно закончится в выходные. Оплата по Kaspi QR проходит мгновенно, кешбэк начисляется. Сервис топ!»
                </p>
              </div>
              <div class="review-footer">
                <span class="review-pet-tag">Кот Барсик (3 года)</span>
                <span>5 дней назад</span>
              </div>
            </div>

            <!-- Отзыв 3 -->
            <div class="review-card">
              <div>
                <div class="review-author-row">
                  <div class="review-author">
                    <img
                      class="review-avatar"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuAesQBCuieDhx2UfbRYHmD2A13rSFxMij8-Zj94ZUK27PfpjEmyufJJCQKdJ9ysKOUWsTqZ8ve_HgNOE6Fg4LBcThQQGHg5jsIM-087JTS8ZVuwwx5R7ryPIDutIVPDl2AGXljgDdIm0o-r1PJXwzi4lAY8fJHdghC0bx9o8rre7EpG9JdpL7mCM2vCtl6lkH6BHlv99QbRBCd85bslovu5j101R84OTsyQgzyUDG09aj_9Fs3sgJg9"
                      alt="Елена Ким"
                    />
                    <div>
                      <h3 class="review-author-name">Елена Ким</h3>
                      <span class="review-author-city">
                        <span class="material-symbols-outlined icon-primary" style="font-size:14px">location_on</span>
                        г. Караганда
                      </span>
                    </div>
                  </div>
                </div>
                <p class="review-text">
                  «Отдельное спасибо дежурному ветеринару на сайте: проконсультировал в чате по поводу перевода щенка на холистик без проблем с ЖКТ. Доставка в Караганду заняла 1 день, все в идеальном состоянии.»
                </p>
              </div>
              <div class="review-footer">
                <span class="review-pet-tag">Бигль Майло</span>
                <span>1 неделя назад</span>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ========== TRUST BADGES ========== -->
      <section class="trust">
        <div class="trust-inner">
          <div class="trust-grid">

            <div class="trust-card">
              <div class="trust-icon trust-icon--green">
                <span class="material-symbols-outlined" style="font-size:28px">verified_user</span>
              </div>
              <div>
                <h3 class="trust-title">100% Оригинал</h3>
                <p class="trust-desc">Только сертифицированная продукция с ветеринарными паспортами качества.</p>
              </div>
            </div>

            <div class="trust-card">
              <div class="trust-icon trust-icon--orange">
                <span class="material-symbols-outlined" style="font-size:28px">rocket_launch</span>
              </div>
              <div>
                <h3 class="trust-title">Экспресс-доставка</h3>
                <p class="trust-desc">Доставим за 2 часа в Алматы и Астане, либо отправим в любой город РК.</p>
              </div>
            </div>

            <div class="trust-card">
              <div class="trust-icon trust-icon--teal">
                <span class="material-symbols-outlined" style="font-size:28px">qr_code_scanner</span>
              </div>
              <div>
                <h3 class="trust-title">Kaspi QR и Рассрочка</h3>
                <p class="trust-desc">Оплата в 1 клик через Kaspi Red/Pay или картой курьеру при получении.</p>
              </div>
            </div>

            <div class="trust-card">
              <div class="trust-icon trust-icon--lime">
                <span class="material-symbols-outlined" style="font-size:28px">stethoscope</span>
              </div>
              <div>
                <h3 class="trust-title">Ветконсультация 0 ₸</h3>
                <p class="trust-desc">Штатный ветеринарный врач поможет подобрать лечебную диету прямо в чате.</p>
              </div>
            </div>

          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Скрипты -->
  <script src="app.js"></script>
</body>
</html>