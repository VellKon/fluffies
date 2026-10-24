<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Страница не найдена (404) • Пушистики — ZOO-гипермаркет</title>

  <!-- Шрифты и иконки Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

  <!-- Стили: глобальные и страница 404 -->
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/404.css"/>
</head>
<body>

  <!-- ========== ШАПКА САЙТА ========== -->
  <?php include 'components/header.php'; ?>

  <!-- ========== ОСНОВНОЙ КОНТЕНТ СТРАНИЦЫ ========== -->
  <main class="site-main">
    <div class="not-found-container">

      <!-- Декоративные свечения фона -->
      <div class="error-ambient-orb-1"></div>
      <div class="error-ambient-orb-2"></div>

      <!-- Хлебные крошки -->
      <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <ol class="breadcrumbs-list">
          <li>
            <a class="breadcrumbs-link" href="index.php" data-path="catalog-home">
              <span class="material-symbols-outlined" style="font-size:16px">home</span>
              <span>Главная</span>
            </a>
          </li>
          <li class="breadcrumbs-separator">
            <span class="material-symbols-outlined" style="font-size:16px">chevron_right</span>
          </li>
          <li class="breadcrumbs-current">
            Страница не найдена (404)
          </li>
        </ol>
      </nav>

      <!-- 1. Главный блок 404 ошибки -->
      <section class="hero-404-card">
        <!-- Декоративные лапки -->
        <span class="material-symbols-outlined hero-404-paw hero-404-paw--top">pets</span>
        <span class="material-symbols-outlined hero-404-paw hero-404-paw--bottom">pets</span>

        <div class="hero-404-grid">

          <!-- Левая колонка: 3D-иллюстрация -->
          <div class="hero-404-visual-wrap">
            <div class="hero-404-glow"></div>
            <div class="hero-404-img-box">
              <img
                class="hero-404-img"
                src="images/404.jpg"
                alt="Озорной щенок и котенок с пустой миской"
              />
              <div class="hero-404-code-badge">
                <span class="material-symbols-outlined">search_off</span>
                <span>Код ошибки: 404</span>
              </div>
            </div>
          </div>

          <!-- Правая колонка: Текст и форма поиска -->
          <div class="hero-404-content">
            <div class="hero-404-header-row">
              <span class="hero-404-big-num">404</span>
              <div class="hero-404-v-divider"></div>
              <span class="hero-404-status-badge">
                <span class="material-symbols-outlined" style="font-size:16px">sentiment_dissatisfied</span>
                След потерян
              </span>
            </div>

            <h1 class="hero-404-title">Ой! Кажется, этот хвостик утащил страницу...</h1>
            <p class="hero-404-desc">
              Возможно, ссылка устарела или страницу съел очень любопытный щенок. Не переживайте, миска полна других интересных вещей и лакомств!
            </p>

            <!-- Форма поиска внутри блока 404 -->
            <form class="hero-404-search" id="hero-404-search-form">
              <div class="hero-404-search-wrap">
                <span class="material-symbols-outlined hero-404-search-icon">search</span>
                <input
                  class="hero-404-search-input"
                  id="hero-404-search-input"
                  type="text"
                  placeholder="Искать корм, лакомства или игрушки..."
                />
                <button class="hero-404-search-btn" type="submit">
                  <span class="material-symbols-outlined" style="font-size:18px">search</span>
                  <span>Найти</span>
                </button>
              </div>
            </form>

            <!-- Кнопки действий -->
            <div class="hero-404-actions">
              <a class="btn-action-primary" href="index.php" data-path="catalog-home">
                <span class="material-symbols-outlined" style="font-size:20px">home</span>
                <span>На главную страницу</span>
              </a>
              <a class="btn-action-secondary" href="fluffies_dog_catalog.php" data-path="catalog">
                <span class="material-symbols-outlined" style="font-size:20px">grid_view</span>
                <span>Перейти в каталог</span>
              </a>
              <button class="btn-action-back" id="btn-back" type="button">
                <span class="material-symbols-outlined" style="font-size:20px">arrow_back</span>
                <span>Вернуться назад</span>
              </button>
            </div>

          </div>
        </div>
      </section>

      <!-- 2. Быстрая навигация по категориям -->
      <section class="quick-nav-section">
        <div class="section-header-wrap">
          <div>
            <span class="section-subtitle">Куда отправиться</span>
            <h2 class="section-title">Куда можно отправиться прямо сейчас:</h2>
          </div>
          <p class="section-caption">Быстрый переход к самым популярным разделам магазина</p>
        </div>

        <div class="quick-nav-grid">
          <!-- Собаки -->
          <a class="quick-nav-card" href="fluffies_dog_catalog.php" data-path="dogs-catalog">
            <div class="quick-nav-card-top">
              <div class="quick-nav-icon quick-nav-icon--dogs">🐶</div>
              <span class="material-symbols-outlined quick-nav-arrow">arrow_forward</span>
            </div>
            <div>
              <h3 class="quick-nav-title">Корма для собак</h3>
              <p class="quick-nav-desc">Сухие, влажные рационы, холистики и вкусные мясные паучи</p>
            </div>
          </a>

          <!-- Кошки -->
          <a class="quick-nav-card" href="fluffies_cat_catalog.php" data-path="cats-catalog">
            <div class="quick-nav-card-top">
              <div class="quick-nav-icon quick-nav-icon--cats">🐱</div>
              <span class="material-symbols-outlined quick-nav-arrow">arrow_forward</span>
            </div>
            <div>
              <h3 class="quick-nav-title">Всё для кошек</h3>
              <p class="quick-nav-desc">Нежные паштеты, когтеточки, натуральные наполнители и домики</p>
            </div>
          </a>

          <!-- Ветаптека -->
          <a class="quick-nav-card" href="fluffies_FAQ.php" data-path="vet-pharmacy">
            <div class="quick-nav-card-top">
              <div class="quick-nav-icon quick-nav-icon--pharmacy">💊</div>
              <span class="material-symbols-outlined quick-nav-arrow">arrow_forward</span>
            </div>
            <div>
              <h3 class="quick-nav-title">Ветеринарная аптека</h3>
              <p class="quick-nav-desc">Витамины, капли, надежная защита от клещей и уход за шерстью</p>
            </div>
          </a>

          <!-- Скидки -->
          <a class="quick-nav-card" href="fluffies_dog_catalog.php" data-path="discounts-promotions">
            <div class="quick-nav-card-top">
              <div class="quick-nav-icon quick-nav-icon--discounts">🔥</div>
              <span class="discount-tag">до -35%</span>
            </div>
            <div>
              <h3 class="quick-nav-title">Скидки и акции</h3>
              <p class="quick-nav-desc">Выгода недели на любимые рационы, игрушки и полезные аксессуары</p>
            </div>
          </a>
        </div>
      </section>

      <!-- 3. Хиты продаж («Популярное среди питомцев») -->
      <section class="popular-products-section">
        <div class="popular-header-wrap">
          <div>
            <span class="section-subtitle section-subtitle--secondary">Выбор покупателей</span>
            <h2 class="section-title">Популярное среди питомцев</h2>
          </div>
          <a class="popular-view-all" href="fluffies_dog_catalog.php">
            <span>Смотреть все хиты</span>
            <span class="material-symbols-outlined" style="font-size:18px">arrow_forward</span>
          </a>
        </div>

        <div class="popular-grid">

          <!-- Товар 1: Grandorf 4 Meat -->
          <div class="product-card" data-product-id="grandorf-12kg" data-product-name="Grandorf 4 Meat Adult Medium 12 кг" data-product-price="42500" data-product-bonus="850">
            <div>
              <div class="product-img-box">
                <img
                  class="product-img"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMbCXdiSEAxBtcQ6l0_Xm5m95vuZBlnvs85lZ1Cs2kBd07eYK-m7fL927aSqUwTWQ-wbvZuwEB68wIvELhvpLCSV3F3lyo9BblLvzC2MQRTd2lgEtxmjW0lmfBA_4z9IgmAcPg4mSPgdc8B8PKuPmGCXfANUJPspmCNKI6Cknd5U_T0f_bBx4Tm9HJYctWFMcmL_u4wuO8_dPxb9Kk5b_Ap7iXlUTNL8FlUO0YTpyBolNoVQ0ys5yr"
                  alt="Grandorf 4 Meat 12 кг"
                />
                <div class="product-badges">
                  <span class="product-badge product-badge--hit">Хит продаж</span>
                  <span class="product-badge product-badge--feature">Холистик</span>
                </div>
                <button class="product-fav-btn" type="button" title="В избранное">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-rating-row">
                <div class="product-rating-val">
                  <span class="material-symbols-outlined">star</span>
                  <span>4.9</span>
                </div>
                <span style="color:var(--color-outline)">•</span>
                <span class="product-reviews">142 отзыва</span>
              </div>

              <h3 class="product-title">Grandorf 4 Meat Adult Medium 12 кг</h3>
              <p class="product-subtitle">С живыми пробиотиками для средних пород</p>
            </div>

            <div class="product-bottom-row">
              <div class="product-price-box">
                <span class="product-price">42 500 ₸</span>
                <span class="product-bonus">+850 бонусов</span>
              </div>
              <button class="product-cart-btn" type="button" title="Добавить в корзину">
                <span class="material-symbols-outlined" style="font-size:22px">shopping_bag</span>
              </button>
            </div>
          </div>

          <!-- Товар 2: Утиные медальоны -->
          <div class="product-card" data-product-id="treats-duck-100g" data-product-name="Деревенские лакомства Утиные медальоны 100 г" data-product-price="4800" data-product-bonus="96">
            <div>
              <div class="product-img-box">
                <img
                  class="product-img"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDczrSJqO7d-TqMASWwe14NZ1p8KvsThQPk3l5b45yt5DykIl5ppelDbcVI4p4c_tVg65gAkaJIGuX_bH0tmNJVhxLz0u2mfrLxAax2_UdXk_5mAvsO39sTr0w21bLbZ431y1DHQhdAdBIsD1vVLvZ0odZQnr0BqDgBhnCY0uIy1gEWv02ihktRUMI6jPThQLeZZ5avowBLp3vEsRYArL8IivowQx5IHy5RWsP-Tt972jgIF17aXQ41"
                  alt="Деревенские лакомства Утиные медальоны 100 г"
                />
                <div class="product-badges">
                  <span class="product-badge product-badge--natural">100% Натурально</span>
                </div>
                <button class="product-fav-btn" type="button" title="В избранное">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-rating-row">
                <div class="product-rating-val">
                  <span class="material-symbols-outlined">star</span>
                  <span>5.0</span>
                </div>
                <span style="color:var(--color-outline)">•</span>
                <span class="product-reviews">88 отзывов</span>
              </div>

              <h3 class="product-title">Деревенские лакомства Утиные медальоны 100 г</h3>
              <p class="product-subtitle">Нежное мясо утки для дрессировки и поощрения</p>
            </div>

            <div class="product-bottom-row">
              <div class="product-price-box">
                <span class="product-price">4 800 ₸</span>
                <span class="product-bonus">+96 бонусов</span>
              </div>
              <button class="product-cart-btn" type="button" title="Добавить в корзину">
                <span class="material-symbols-outlined" style="font-size:22px">shopping_bag</span>
              </button>
            </div>
          </div>

          <!-- Товар 3: Игрушка Kong Classic -->
          <div class="product-card" data-product-id="toy-kong-l" data-product-name="Игрушка Kong Classic для собак" data-product-price="6600" data-product-bonus="132">
            <div>
              <div class="product-img-box">
                <img
                  class="product-img"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLZwlikyxmb_QJeN2L7xFprjAOtxLN4bvG4Y6SX7OQh81HCabMHnJKosH6SPhi5sLHV7UnNqBp5NkCHzP8BJEqT5C72xI5CQCo46TDDWBnyMY1ODkrcGcCjJk9c5XqboDkBGPIJOKHHPRkMHvOH2T-VeFEdiD5HycNDj9COTIebkpbzjjhTTu6VjwMzxVpJEqrQMKb-B-Le3dNJQ03moeFzKaLt8e15q_AeOU8NDbPQ_XIgFhBKL8I"
                  alt="Игрушка Kong Classic"
                />
                <div class="product-badges">
                  <span class="product-badge product-badge--tertiary">Прочная</span>
                </div>
                <button class="product-fav-btn" type="button" title="В избранное">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-rating-row">
                <div class="product-rating-val">
                  <span class="material-symbols-outlined">star</span>
                  <span>4.8</span>
                </div>
                <span style="color:var(--color-outline)">•</span>
                <span class="product-reviews">64 отзыва</span>
              </div>

              <h3 class="product-title">Игрушка Kong Classic для собак</h3>
              <p class="product-subtitle">Сверхпрочный натуральный каучук (размер L)</p>
            </div>

            <div class="product-bottom-row">
              <div class="product-price-box">
                <span class="product-price">6 600 ₸</span>
                <span class="product-bonus">+132 бонуса</span>
              </div>
              <button class="product-cart-btn" type="button" title="Добавить в корзину">
                <span class="material-symbols-outlined" style="font-size:22px">shopping_bag</span>
              </button>
            </div>
          </div>

          <!-- Товар 4: Лососевое масло -->
          <div class="product-card" data-product-id="salmon-oil-500ml" data-product-name="Лососевое масло Salmon Oil 500 мл" data-product-price="6800" data-product-bonus="136">
            <div>
              <div class="product-img-box">
                <img
                  class="product-img"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6DcaVsZqU84PHsGmFlzaVfg8FWtJ6RGq19rKlf44HmEMt1USPnWAe4H5EDTsFjS6Fb09QTsgmmsnOUM9JZcieF9YY5qarf50swz9SE0IXo7rv0SA_l7MM26uFftbCzchzLAUiBP52IcuxInbhXFGstytaVVXR8URUOiAqLIrlfqEXFLZxMaeStxazd0PA8EYTTATVAFmpgiOewem8oAhh24zZydgbpjqpwTrb4JBBqsgOiVuJVwnS"
                  alt="Лососевое масло Salmon Oil 500 мл"
                />
                <div class="product-badges">
                  <span class="product-badge product-badge--feature">Омега-3 &amp; 6</span>
                </div>
                <button class="product-fav-btn" type="button" title="В избранное">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-rating-row">
                <div class="product-rating-val">
                  <span class="material-symbols-outlined">star</span>
                  <span>4.9</span>
                </div>
                <span style="color:var(--color-outline)">•</span>
                <span class="product-reviews">97 отзывов</span>
              </div>

              <h3 class="product-title">Лососевое масло Salmon Oil 500 мл</h3>
              <p class="product-subtitle">Для здоровья кожи, суставов и блеска шерсти</p>
            </div>

            <div class="product-bottom-row">
              <div class="product-price-box">
                <span class="product-price">6 800 ₸</span>
                <span class="product-bonus">+136 бонусов</span>
              </div>
              <button class="product-cart-btn" type="button" title="Добавить в корзину">
                <span class="material-symbols-outlined" style="font-size:22px">shopping_bag</span>
              </button>
            </div>
          </div>

        </div>
      </section>

      <!-- 4. Баннер ветеринарной помощи и онлайн-консультации -->
      <section class="support-banner">
        <div class="support-banner-info">
          <div class="support-banner-icon">
            <span class="material-symbols-outlined">medical_services</span>
          </div>
          <div>
            <div class="support-badge-row">
              <span class="status-dot-pulse"></span>
              <span class="support-badge-text">Дежурный ветврач и консультант онлайн</span>
            </div>
            <h3 class="support-banner-title">Заблудились или не нашли нужный корм?</h3>
            <p class="support-banner-desc">
              Поможем подобрать правильный лечебный или повседневный рацион под породу и возраст вашего хвостика. Ежедневно с 09:00 до 21:00.
            </p>
          </div>
        </div>

        <div class="support-banner-actions">
          <a class="btn-support-phone" href="tel:+77475932055">
            <span class="material-symbols-outlined" style="font-size:20px; color:var(--color-primary)">call</span>
            <div style="display:flex; flex-direction:column; text-align:left">
              <span class="phone-label">Прямой номер</span>
              <span class="phone-number">+7 (747) 593-20-55</span>
            </div>
          </a>
          <a class="btn-support-wa" href="https://wa.me/77475932055" target="_blank" rel="noopener noreferrer">
            <span class="material-symbols-outlined" style="font-size:20px">chat</span>
            <span>Написать в WhatsApp</span>
          </a>
          <button class="btn-support-call" id="btn-request-callback" type="button">
            <span class="material-symbols-outlined" style="font-size:20px">ring_volume</span>
            <span>Заказать звонок</span>
          </button>
        </div>
      </section>

    </div>
  </main>
  
  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Всплывающее уведомление (Toast) -->
  <div class="toast-notification" id="toast-notification">
    <span class="material-symbols-outlined">check_circle</span>
    <span id="toast-text">Действие выполнено</span>
  </div>

  <!-- Подключение клиентского скрипта -->
  <script src="JS/fluffies_404.js"></script>
</body>
</html>