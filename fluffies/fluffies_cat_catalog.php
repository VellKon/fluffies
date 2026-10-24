<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Пушистики • Каталог товаров для кошек</title>

  <!-- Шрифты и иконки Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

  <!-- Стили: глобальные и страница каталога -->
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/catalog.css"/>
</head>
<body>

  <!-- ========== ШАПКА САЙТА (HEADER) ========== -->
  <?php include 'components/header.php'; ?>

  <!-- Подложка для мобильного меню фильтров -->
  <div class="sidebar-backdrop"></div>

  <!-- ========== ОСНОВНОЙ КОНТЕНТ (MAIN) ========== -->
  <main class="catalog-page">
    <div class="catalog-container">

      <!-- Хлебные крошки -->
      <nav class="catalog-breadcrumbs" aria-label="Хлебные крошки">
        <a href="index.php">Главная</a>
        <span class="breadcrumbs-sep material-symbols-outlined">chevron_right</span>
        <a href="#">Кошки</a>
        <span class="breadcrumbs-sep material-symbols-outlined">chevron_right</span>
        <span class="breadcrumbs-current">Сухие и влажные корма, лакомства</span>
      </nav>

      <!-- Интро-секция каталога -->
      <section class="catalog-hero">
        <div class="catalog-hero-top">
          <div>
            <div class="catalog-hero-badges">
              <span class="catalog-hero-badge catalog-hero-badge--secondary">Казахстан • Kaspi QR 0-0-3</span>
              <span class="catalog-hero-badge catalog-hero-badge--primary">Алматы &amp; Астана экспресс 2ч</span>
            </div>
            <h1 class="catalog-title">Всё для кошек — корма, лакомства и уход</h1>
            <p class="catalog-desc">
              Премиальные холистики, сбалансированные рационы для стерилизованных кошек, натуральные паштеты и гипоаллергенные эко-наполнители с гарантией свежести.
            </p>
          </div>
          <div class="catalog-counter-pill">
            <span class="catalog-counter-dot"></span>
            <span>Найдено 386 товаров</span>
          </div>
        </div>

        <!-- Горизонтальная полоса быстрых чипсов-фильтров -->
        <div class="filter-chips-row">
          <button class="filter-chip filter-chip--all">
            <span class="material-symbols-outlined" style="font-size:18px">tune</span>
            <span>Все фильтры</span>
          </button>
          <button class="filter-chip filter-chip--active">
            <span>✨ Для стерилизованных (142)</span>
          </button>
          <button class="filter-chip">
            <span>🌿 Холистики и супер-премиум (98)</span>
          </button>
          <button class="filter-chip">
            <span>🥫 Влажные корма и паучи (115)</span>
          </button>
          <button class="filter-chip">
            <span>🍼 Для котят (45)</span>
          </button>
          <button class="filter-chip">
            <span>🧶 Выведение шерсти (Hairball) (38)</span>
          </button>
          <button class="filter-chip">
            <span>🌱 Наполнители для туалета (64)</span>
          </button>
          <button class="filter-chip filter-chip--sale">
            <span class="material-symbols-outlined" style="font-size:16px">local_fire_department</span>
            <span>Скидки до -30%</span>
          </button>
        </div>
      </section>

      <!-- Основная сетка: Боковой сайдбар + Сетка товаров -->
      <div class="catalog-layout">

        <!-- Сайдбар фильтров -->
        <aside class="filter-sidebar" id="filterSidebar">
          <div class="filter-sidebar-header">
            <span class="filter-sidebar-title">Фильтры</span>
            <button class="filter-reset-btn" type="button">Сбросить все</button>
          </div>

          <!-- Фильтр: Цена -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Цена, ₸</span>
              <span class="filter-group-badge">Kaspi 0-0-3</span>
            </div>
            <div class="filter-group-content">
              <div class="price-inputs-grid">
                <div class="price-input-box">
                  <span class="price-input-label">от</span>
                  <input class="price-input-val" type="text" value="900 ₸"/>
                </div>
                <div class="price-input-box">
                  <span class="price-input-label">до</span>
                  <input class="price-input-val" type="text" value="55 000 ₸"/>
                </div>
              </div>
              <div class="price-slider-track">
                <div class="price-slider-fill"></div>
                <div class="price-slider-thumb" style="left:5%"></div>
                <div class="price-slider-thumb" style="left:75%"></div>
              </div>
            </div>
          </div>

          <!-- Фильтр: Бренды -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Бренды</span>
              <span class="filter-group-badge">Топ-выбор</span>
            </div>
            <div class="filter-group-content">
              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Grandorf</span>
                </div>
                <span class="checkbox-count">28</span>
              </label>

              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Monge</span>
                </div>
                <span class="checkbox-count">34</span>
              </label>

              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Farmina N&amp;D</span>
                </div>
                <span class="checkbox-count">26</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Royal Canin</span>
                </div>
                <span class="checkbox-count">42</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Brit Care</span>
                </div>
                <span class="checkbox-count">31</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Pro Plan</span>
                </div>
                <span class="checkbox-count">39</span>
              </label>
            </div>
          </div>

          <!-- Фильтр: Тип корма и питания -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Тип корма и питания</span>
              <span class="material-symbols-outlined filter-group-toggle" style="font-size:18px">expand_more</span>
            </div>
            <div class="filter-group-content">
              <div class="custom-radio-row">
                <div class="radio-circle"><div class="radio-dot"></div></div>
                <span>Все категории</span>
              </div>
              <div class="custom-radio-row active">
                <div class="radio-circle"><div class="radio-dot"></div></div>
                <span>Сухой корм (холистики и премиум)</span>
              </div>
              <div class="custom-radio-row">
                <div class="radio-circle"><div class="radio-dot"></div></div>
                <span>Влажный корм / паштеты</span>
              </div>
              <div class="custom-radio-row">
                <div class="radio-circle"><div class="radio-dot"></div></div>
                <span>Мясные лакомства и снэки</span>
              </div>
              <div class="custom-radio-row">
                <div class="radio-circle"><div class="radio-dot"></div></div>
                <span>Наполнители и гигиена</span>
              </div>
            </div>
          </div>

          <!-- Фильтр: Возраст питомца -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Возраст питомца</span>
              <span class="material-symbols-outlined filter-group-toggle" style="font-size:18px">expand_more</span>
            </div>
            <div class="filter-group-content">
              <div class="filter-segmented">
                <button class="filter-segment-btn" type="button">Котята (до 1 года)</button>
                <button class="filter-segment-btn active" type="button">
                  <span>Взрослые (1–7 лет)</span>
                  <span class="material-symbols-outlined" style="font-size:16px;color:var(--color-primary)">check_circle</span>
                </button>
                <button class="filter-segment-btn" type="button">Пожилые кошки (7+ лет)</button>
              </div>
            </div>
          </div>

          <!-- Фильтр: Особенности здоровья -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Особенности здоровья</span>
              <span class="material-symbols-outlined filter-group-toggle" style="font-size:18px">expand_more</span>
            </div>
            <div class="filter-group-content">
              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Для стерилизованных и кастрированных</span>
                </div>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Чувствительное пищеварение</span>
                </div>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Уход за мочевыделительной (Urinary)</span>
                </div>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Для шерсти и кожи (Hairball)</span>
                </div>
              </label>
            </div>
          </div>

          <!-- Фильтр: Вкус и белок -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Основной вкус и белок</span>
              <span class="material-symbols-outlined filter-group-toggle" style="font-size:18px">expand_more</span>
            </div>
            <div class="filter-group-content">
              <div class="filter-chips-cloud">
                <span class="filter-tag active">🦃 Индейка</span>
                <span class="filter-tag">🐑 Ягненок</span>
                <span class="filter-tag">🐟 Лосось</span>
                <span class="filter-tag">🦆 Утка</span>
              </div>
            </div>
          </div>

          <!-- Промо-карточка: Автодоставка -->
          <div class="sidebar-promo-card">
            <div class="promo-icon-circle">
              <span class="material-symbols-outlined" style="font-size:18px">autorenew</span>
            </div>
            <span class="promo-title">Автодоставка -15%</span>
            <p class="promo-desc">
              Свежий любимый корм вашей кошке по гибкому расписанию. Отмена в 1 клик.
            </p>
            <a class="promo-link" href="#">
              <span>Подключить сервис</span>
              <span class="material-symbols-outlined" style="font-size:14px">arrow_forward</span>
            </a>
          </div>
        </aside>

        <!-- Правая часть: тулбар, сетка товаров, пагинация -->
        <section class="catalog-content">

          <!-- Тулбар управления сортировкой и видом -->
          <div class="catalog-toolbar">
            <div class="toolbar-left">
              <span class="toolbar-label">Сортировка:</span>
              <div class="sort-select-wrap">
                <select class="sort-select" aria-label="Сортировка каталога">
                  <option selected="">По популярности</option>
                  <option>Сначала дешевле</option>
                  <option>Сначала дороже</option>
                  <option>По величине скидки</option>
                  <option>По рейтингу отзывов</option>
                </select>
                <span class="material-symbols-outlined sort-select-icon">expand_more</span>
              </div>
            </div>

            <div class="toolbar-right">
              <span class="catalog-shown-text">Показано <strong>1–6</strong> из 386</span>
              <div class="view-mode-group">
                <button class="view-mode-btn active" data-view="grid" title="Сетка">
                  <span class="material-symbols-outlined" style="font-size:18px">grid_view</span>
                </button>
                <button class="view-mode-btn" data-view="list" title="Список">
                  <span class="material-symbols-outlined" style="font-size:18px">view_list</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Сетка товаров (Product Grid) -->
          <div class="product-grid">

            <!-- Карточка 1: Grandorf Sterilised 4 Meat -->
            <article class="product-card">
              <div class="card-header-row">
                <div class="card-badges-wrap">
                  <span class="product-badge product-badge--hit">Хит продаж</span>
                </div>
                <button class="product-fav-btn" title="Добавить в избранное" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-image-box">
                <img
                  class="product-image"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHMjPs4d7oJsSL2bauG-uiA2oxnDDiQBdkmN2C3WhU9f0YhNQCky_NhdDJJk_NELFxprv-sSQAIl8gBaJqrmLo18DFFG3S14aJ8v2vljk-WiJEnlgCGyvEU-p4Z2R8GLZa6OvHqRgqzc42BBK7i1-i5Q9MXr5iuE-44n2zIRBqojcrog691jXXXHtslrLMpXdnZA62XofLBJtmyRShBAjVyh7C5_k6P20wfrLZecuNRBd79Vz959Mh"
                  alt="Grandorf Cat Sterilised 4 Meat"
                />
                <div class="product-shipping-tag">
                  <span class="material-symbols-outlined" style="font-size:14px">local_shipping</span>
                  <span>Доставка 2 ч</span>
                </div>
              </div>

              <div class="card-body">
                <div class="product-rating">
                  <div class="stars-row">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="rating-score">5.0</span>
                  <span class="reviews-count">(214 отзывов)</span>
                </div>

                <span class="product-brand">GRANDORF</span>
                <h3 class="product-title">
                  Cat Sterilised 4 Meat (Белый рис, 4 вида мяса для стерилизованных)
                </h3>

                <!-- Переключатель веса -->
                <div class="weight-switcher">
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="4 200 ₸"
                    data-unit-price="10 500 ₸ / кг • 0-0-3"
                  >400 г</button>
                  <button
                    class="weight-btn active"
                    type="button"
                    data-price="18 900 ₸"
                    data-unit-price="9 450 ₸ / кг • Kaspi QR"
                  >2 кг</button>
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="68 500 ₸"
                    data-unit-price="6 850 ₸ / кг • Kaspi QR"
                  >10 кг</button>
                </div>
              </div>

              <div class="card-bottom-row">
                <div class="price-column">
                  <div class="price-main">18 900 ₸</div>
                  <div class="price-unit">9 450 ₸ / кг • Kaspi QR</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">shopping_bag</span>
                  <span>Купить</span>
                </button>
              </div>
            </article>

            <!-- Карточка 2: Monge Bwild Hare -->
            <article class="product-card">
              <div class="card-header-row">
                <div class="card-badges-wrap">
                  <span class="product-badge product-badge--sale">-15% скидка</span>
                </div>
                <button class="product-fav-btn" title="Добавить в избранное" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-image-box">
                <img
                  class="product-image"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlkLvzgHznUsWtcdPzWeP9P8A9qWPWqRKybkyK9KwD6Q4fTeqlS4I_5Ql853JsGxQAozHtg42-_sUf-NkmuFioQ6mNtHpXgOPrgg12I45l19_T5hnfNiqGJdfjQw9f8mo5a_TgJGzrIGwmZopZf8oFXlTpDIMW3hioNRvA7VzDo4phj0SqlwWbI5vajlZiTCsDKWhmp5ShtLQPHVhA5FdQGI9F4r7xMHyAwwEp5ecFu59ljOeEfSUW"
                  alt="Monge Natural Superpremium Cat Bwild Hare"
                />
                <div class="product-shipping-tag">
                  <span class="material-symbols-outlined" style="font-size:14px">local_shipping</span>
                  <span>Доставка 2 ч</span>
                </div>
              </div>

              <div class="card-body">
                <div class="product-rating">
                  <div class="stars-row">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="rating-score">4.9</span>
                  <span class="reviews-count">(165 отзывов)</span>
                </div>

                <span class="product-brand">MONGE</span>
                <h3 class="product-title">
                  Natural Superpremium Cat Bwild Hare (Дикий заяц для стерилизованных кошек)
                </h3>

                <div class="weight-switcher">
                  <button
                    class="weight-btn active"
                    type="button"
                    data-price="12 400 ₸"
                    data-old-price="14 600 ₸"
                    data-unit-price="8 266 ₸ / кг • 0-0-3"
                  >1.5 кг</button>
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="54 900 ₸"
                    data-old-price="64 500 ₸"
                    data-unit-price="5 490 ₸ / кг • 0-0-3"
                  >10 кг</button>
                </div>
              </div>

              <div class="card-bottom-row">
                <div class="price-column">
                  <div class="price-with-discount">
                    <span class="price-main">12 400 ₸</span>
                    <span class="price-old">14 600 ₸</span>
                  </div>
                  <div class="price-unit">8 266 ₸ / кг • 0-0-3</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">shopping_bag</span>
                  <span>Купить</span>
                </button>
              </div>
            </article>

            <!-- Карточка 3: Farmina N&D Ocean Cod -->
            <article class="product-card">
              <div class="card-header-row">
                <div class="card-badges-wrap">
                  <span class="product-badge product-badge--holistic">Холистик</span>
                </div>
                <button class="product-fav-btn" title="Добавить в избранное" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-image-box">
                <img
                  class="product-image"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8kV_28xMtaCXbMSUsM4Z7waANTsNb0IR_etJxizGUPY64zmWs5mzY1COlTugaK4flWxDqGuYhYZZbN7AiC7CiQlAcLF6vR_D7SYuxqUycGNuyIryykJoZTdPHDf7xoQ4LmxCyrgPJJPX--d3P-4CTyWJjQB-GQ-hNz3u_XQekJ2HDO7vW1Km9Pq7KYnPHllWnjzlEkuCS9VheOianT93XVnAx8KC4zzMnWb2nkGc8ihs41k3is4Tl"
                  alt="Farmina ND Ocean Cat Cod Pumpkin Orange"
                />
                <div class="product-shipping-tag">
                  <span class="material-symbols-outlined" style="font-size:14px">local_shipping</span>
                  <span>Доставка 2 ч</span>
                </div>
              </div>

              <div class="card-body">
                <div class="product-rating">
                  <div class="stars-row">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="rating-score">4.9</span>
                  <span class="reviews-count">(98 отзывов)</span>
                </div>

                <span class="product-brand">FARMINA N&amp;D</span>
                <h3 class="product-title">
                  Ocean Cod, Pumpkin &amp; Orange (Треска, тыква и апельсин беззерновой)
                </h3>

                <div class="weight-switcher">
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="4 100 ₸"
                    data-unit-price="13 666 ₸ / кг • 0-0-3"
                  >300 г</button>
                  <button
                    class="weight-btn active"
                    type="button"
                    data-price="16 800 ₸"
                    data-unit-price="11 200 ₸ / кг • 0-0-3"
                  >1.5 кг</button>
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="44 500 ₸"
                    data-unit-price="8 900 ₸ / кг • 0-0-3"
                  >5 кг</button>
                </div>
              </div>

              <div class="card-bottom-row">
                <div class="price-column">
                  <div class="price-main">16 800 ₸</div>
                  <div class="price-unit">11 200 ₸ / кг • 0-0-3</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">shopping_bag</span>
                  <span>Купить</span>
                </button>
              </div>
            </article>

            <!-- Карточка 4: Royal Canin Kitten Sterilised -->
            <article class="product-card">
              <div class="card-header-row">
                <div class="card-badges-wrap">
                  <span class="product-badge product-badge--kitten">Для котят</span>
                </div>
                <button class="product-fav-btn" title="Добавить в избранное" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-image-box">
                <img
                  class="product-image"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_dzcP7dfgVsyqiYQnFFL1B_Io2pO4r8Gk0iAfJ83f_M3yMIvJhSujrpcG_4nDBmnqjf-1IhZKFUKZ6-pUtR-0cZrsC-FWUJuMKlNlI2ppKRRBYk9fPx6pv-jhxeQM5j8a3Sset8PCvRaAfK6kDuLsUf0gfefTIxDyRVVEfKAmOsVCrZWfp9qBFXCL76ZwQjoJOdJGM6EQL1RiOwMs5HCv4_ERJzTXdoIqclaL4QV1wwqK5gu9BJe8"
                  alt="Royal Canin Kitten Sterilised"
                />
                <div class="product-shipping-tag">
                  <span class="material-symbols-outlined" style="font-size:14px">local_shipping</span>
                  <span>Доставка 2 ч</span>
                </div>
              </div>

              <div class="card-body">
                <div class="product-rating">
                  <div class="stars-row">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="rating-score">4.8</span>
                  <span class="reviews-count">(140 отзывов)</span>
                </div>

                <span class="product-brand">ROYAL CANIN</span>
                <h3 class="product-title">
                  Kitten Sterilised (Для стерилизованных котят от 6 до 12 месяцев)
                </h3>

                <div class="weight-switcher">
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="2 900 ₸"
                    data-unit-price="7 250 ₸ / кг • 0-0-3"
                  >400 г</button>
                  <button
                    class="weight-btn active"
                    type="button"
                    data-price="11 200 ₸"
                    data-unit-price="5 600 ₸ / кг • 0-0-3"
                  >2 кг</button>
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="20 500 ₸"
                    data-unit-price="5 125 ₸ / кг • 0-0-3"
                  >4 кг</button>
                </div>
              </div>

              <div class="card-bottom-row">
                <div class="price-column">
                  <div class="price-main">11 200 ₸</div>
                  <div class="price-unit">5 600 ₸ / кг • 0-0-3</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">shopping_bag</span>
                  <span>Купить</span>
                </button>
              </div>
            </article>

            <!-- Карточка 5: Schesir Pouches Tuna & Shrimps -->
            <article class="product-card">
              <div class="card-header-row">
                <div class="card-badges-wrap">
                  <span class="product-badge product-badge--eco">Натуральный паштет</span>
                </div>
                <button class="product-fav-btn" title="Добавить в избранное" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-image-box">
                <img
                  class="product-image"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiVN3sGsiK_itHVqiU9-yJMOHVJpIgJr47mXRFTfI2uzm7xjb-4woaNdUlj1KxQF3gnutllws_QO1wHIuxTCWhprGa9eVG-toM0UtOF43WWHDC4WxSa4oHn5WzOA9ZvF2VhBXTFBs8wz0YxmkHNySVCJ6LjttIpaY0xd1ZriACQpFSCKHWmUQI9jFWXGfFw2FqHpjzJJd-NiuJQtDv_c5liWcpqMg5n0Wx6NyP5E22heJWf3h6p8e5"
                  alt="Schesir wet cat food pouch"
                />
                <div class="product-shipping-tag">
                  <span class="material-symbols-outlined" style="font-size:14px">local_shipping</span>
                  <span>Доставка 2 ч</span>
                </div>
              </div>

              <div class="card-body">
                <div class="product-rating">
                  <div class="stars-row">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="rating-score">5.0</span>
                  <span class="reviews-count">(310 отзывов)</span>
                </div>

                <span class="product-brand">SCHESIR</span>
                <h3 class="product-title">
                  Паучи «Тунец с креветками в желе» (упаковка 85 г × 14 шт)
                </h3>

                <div class="weight-switcher">
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="1 150 ₸"
                    data-unit-price="1 150 ₸ / шт • 0-0-3"
                  >1 шт</button>
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="6 600 ₸"
                    data-unit-price="1 100 ₸ / шт • 0-0-3"
                  >6 шт</button>
                  <button
                    class="weight-btn active"
                    type="button"
                    data-price="14 500 ₸"
                    data-unit-price="1 035 ₸ / шт • Kaspi QR"
                  >14 шт</button>
                </div>
              </div>

              <div class="card-bottom-row">
                <div class="price-column">
                  <div class="price-main">14 500 ₸</div>
                  <div class="price-unit">1 035 ₸ / шт • Kaspi QR</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">shopping_bag</span>
                  <span>Купить</span>
                </button>
              </div>
            </article>

            <!-- Карточка 6: Cat's Step Tofu Green Tea -->
            <article class="product-card">
              <div class="card-header-row">
                <div class="card-badges-wrap">
                  <span class="product-badge product-badge--eco">Эко-хит</span>
                </div>
                <button class="product-fav-btn" title="Добавить в избранное" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">favorite</span>
                </button>
              </div>

              <div class="product-image-box">
                <img
                  class="product-image"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAGeGZxjrFh-RuW4zpQ6PnSyWseG3gICgvfLZlDTglcI4n8l23yDmZIS19hSGeEFvZvQTTdInJzpnxSCDPQfZrFrVeO8Oxoi3D5UHxli3BbIdREqghCR6T6Jm5dzvppVXdxXT77wyoOwru3pBra-fGwTZxkKrlDvZb9R0KPEVVpr-yFHYcrBOU7_4xHOePV-4Mg2FuyQVum9rUU5-kbwNp0t5ghjPkSGgY8VJf22epyDe-8lYFRN3T"
                  alt="Cats Step Tofu Green Tea"
                />
                <div class="product-shipping-tag">
                  <span class="material-symbols-outlined" style="font-size:14px">local_shipping</span>
                  <span>Доставка 2 ч</span>
                </div>
              </div>

              <div class="card-body">
                <div class="product-rating">
                  <div class="stars-row">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="rating-score">4.9</span>
                  <span class="reviews-count">(88 отзывов)</span>
                </div>

                <span class="product-brand">CAT'S STEP TOFU</span>
                <h3 class="product-title">
                  Наполнитель растительный комкующийся соевый Tofu Green Tea 6 л
                </h3>

                <div class="weight-switcher">
                  <button
                    class="weight-btn active"
                    type="button"
                    data-price="5 400 ₸"
                    data-unit-price="900 ₸ / л • Смываемый"
                  >6 л</button>
                  <button
                    class="weight-btn"
                    type="button"
                    data-price="14 900 ₸"
                    data-unit-price="827 ₸ / л • Смываемый"
                  >18 л (3х6л)</button>
                </div>
              </div>

              <div class="card-bottom-row">
                <div class="price-column">
                  <div class="price-main">5 400 ₸</div>
                  <div class="price-unit">900 ₸ / л • Смываемый</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">shopping_bag</span>
                  <span>Купить</span>
                </button>
              </div>
            </article>

          </div>

          <!-- Пагинация -->
          <div class="catalog-pagination">
            <button class="pagination-btn" type="button" disabled="">
              <span class="material-symbols-outlined" style="font-size:18px">chevron_left</span>
              <span>Назад</span>
            </button>
            <div class="pagination-pages">
              <button class="page-num active" type="button">1</button>
              <button class="page-num" type="button">2</button>
              <button class="page-num" type="button">3</button>
              <span class="page-dots">...</span>
              <button class="page-num" type="button">16</button>
            </div>
            <button class="pagination-btn" type="button">
              <span>Вперед</span>
              <span class="material-symbols-outlined" style="font-size:18px">chevron_right</span>
            </button>
          </div>

        </section>
      </div>

      <!-- Нижний баннер консультации ветеринара -->
      <section class="consultation-section">
        <div class="consultation-banner">
          <div class="consultation-left">
            <div class="consultation-icon">
              <span class="material-symbols-outlined" style="font-size:36px">medical_services</span>
            </div>
            <div>
              <h2 class="consultation-title">Не знаете, какой рацион выбрать для котика?</h2>
              <p class="consultation-text">
                Дежурный фелинолог и ветеринарный диетолог «Пушистики» бесплатно проконсультируют онлайн, учтут возраст, породу и анализы вашего пушистика.
              </p>
            </div>
          </div>
          <button class="consultation-btn" type="button">
            <span class="material-symbols-outlined" style="font-size:20px">chat</span>
            <span>Спросить ветеринара</span>
          </button>
        </div>
      </section>

    </div>
  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Скрипт приложения -->
  <script src="JS/fluffies_cat_catalog.js"></script>
</body>
</html>