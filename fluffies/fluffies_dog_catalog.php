<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Пушистики • Каталог товаров для собак</title>

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
        <a href="index.php">
          <span class="material-symbols-outlined" style="font-size:16px">home</span>
          <span>Главная</span>
        </a>
        <span class="breadcrumbs-sep material-symbols-outlined">chevron_right</span>
        <a href="#">Товары для собак</a>
        <span class="breadcrumbs-sep material-symbols-outlined">chevron_right</span>
        <span class="breadcrumbs-current">Сухие и влажные корма</span>
      </nav>

      <!-- Интро-секция каталога -->
      <section class="catalog-hero">
        <div class="catalog-hero-top">
          <div>
            <div class="catalog-hero-badges">
              <span class="catalog-hero-badge catalog-hero-badge--primary">Рационы супер-премиум &amp; холистик</span>
              <span class="catalog-hero-badge catalog-hero-badge--secondary">Быстрая доставка по Алматы сегодня</span>
            </div>
            <h1 class="catalog-title">Корма и питание для собак</h1>
            <p class="catalog-desc">
              Сбалансированное питание с высоким содержанием мяса для собак любых пород и возрастов. Без искусственных красителей, пшеницы и сои.
            </p>
          </div>
          <div class="catalog-counter-pill">
            <span class="material-symbols-outlined" style="font-size:22px;color:var(--color-primary)">inventory_2</span>
            <div>
              <div style="font-size:11px;color:var(--color-on-surface-variant);font-weight:700">Ассортимент</div>
              <div style="font-weight:700">Найдено 428 товаров</div>
            </div>
          </div>
        </div>

        <!-- Горизонтальная полоса быстрых чипсов-фильтров -->
        <div class="filter-chips-row">
          <button class="filter-chip filter-chip--all">
            <span class="material-symbols-outlined" style="font-size:18px">tune</span>
            <span>Все фильтры</span>
          </button>
          <button class="filter-chip">
            <span>🐶 Для щенков (84)</span>
          </button>
          <button class="filter-chip filter-chip--active">
            <span>✨ Холистики (112)</span>
          </button>
          <button class="filter-chip">
            <span>🌿 Гипоаллергенный (67)</span>
          </button>
          <button class="filter-chip">
            <span>⚖️ Для стерилизованных (45)</span>
          </button>
          <button class="filter-chip">
            <span>🔥 Хиты продаж</span>
          </button>
          <button class="filter-chip filter-chip--sale">
            <span class="material-symbols-outlined" style="font-size:16px">local_fire_department</span>
            <span>🏷️ Со скидкой</span>
          </button>
        </div>
      </section>

      <!-- Основная сетка: Боковой сайдбар + Сетка товаров -->
      <div class="catalog-layout">

        <!-- Сайдбар фильтров -->
        <aside class="filter-sidebar" id="filterSidebar">
          <div class="filter-sidebar-header">
            <span class="filter-sidebar-title">Параметры</span>
            <button class="filter-reset-btn" type="button">Сбросить все</button>
          </div>

          <!-- Фильтр: Цена -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Цена, ₸</span>
              <span class="filter-group-badge">KZT</span>
            </div>
            <div class="filter-group-content">
              <div class="price-inputs-grid">
                <div class="price-input-box">
                  <span class="price-input-label">От</span>
                  <input class="price-input-val" type="text" value="1 500 ₸"/>
                </div>
                <div class="price-input-box">
                  <span class="price-input-label">До</span>
                  <input class="price-input-val" type="text" value="75 000 ₸"/>
                </div>
              </div>
              <div class="price-slider-track">
                <div class="price-slider-fill" style="left:5%;right:25%"></div>
                <div class="price-slider-thumb" style="left:5%"></div>
                <div class="price-slider-thumb" style="right:25%"></div>
              </div>
              <button class="filter-apply-btn" type="button" style="margin-top:var(--space-xs);width:100%;padding:8px;border-radius:12px;border:none;background:var(--color-surface-container);color:var(--color-on-surface);font-weight:600;cursor:pointer">
                Применить цену
              </button>
            </div>
          </div>

          <!-- Фильтр: Бренды -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Бренд</span>
              <span class="material-symbols-outlined" style="font-size:18px;color:var(--color-outline)">search</span>
            </div>
            <div class="filter-group-content">
              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Grandorf</span>
                </div>
                <span class="checkbox-count">38</span>
              </label>

              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Royal Canin</span>
                </div>
                <span class="checkbox-count">64</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Monge</span>
                </div>
                <span class="checkbox-count">41</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Brit Care</span>
                </div>
                <span class="checkbox-count">52</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Acana</span>
                </div>
                <span class="checkbox-count">29</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Farmina N&amp;D</span>
                </div>
                <span class="checkbox-count">33</span>
              </label>

              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Hill's Science Plan</span>
                </div>
                <span class="checkbox-count">47</span>
              </label>
            </div>
          </div>

          <!-- Фильтр: Возраст собаки -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Возраст собаки</span>
              <span class="material-symbols-outlined filter-group-arrow">expand_more</span>
            </div>
            <div class="filter-group-content">
              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Щенки (до 1 года)</span>
                </div>
                <span class="checkbox-count">84</span>
              </label>
              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Взрослые (1 - 7 лет)</span>
                </div>
                <span class="checkbox-count">298</span>
              </label>
              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Пожилые (старше 7 лет)</span>
                </div>
                <span class="checkbox-count">46</span>
              </label>
            </div>
          </div>

          <!-- Фильтр: Размер породы -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Размер породы</span>
              <span class="material-symbols-outlined filter-group-arrow">expand_more</span>
            </div>
            <div class="filter-group-content">
              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Миниатюрные (до 4 кг)</span>
                </div>
                <span class="checkbox-count">56</span>
              </label>
              <label class="custom-checkbox-row">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Мелкие (4 - 10 кг)</span>
                </div>
                <span class="checkbox-count">112</span>
              </label>
              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Средние (10 - 25 кг)</span>
                </div>
                <span class="checkbox-count">174</span>
              </label>
              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Крупные (25+ кг)</span>
                </div>
                <span class="checkbox-count">86</span>
              </label>
            </div>
          </div>

          <!-- Фильтр: Основной белок -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Основной белок</span>
              <span class="material-symbols-outlined filter-group-arrow">expand_more</span>
            </div>
            <div class="filter-group-content">
              <div class="filter-tags-wrap">
                <button class="filter-tag" type="button">Ягненок</button>
                <button class="filter-tag active" type="button">Индейка</button>
                <button class="filter-tag" type="button">Утка</button>
                <button class="filter-tag" type="button">Лосось</button>
                <button class="filter-tag" type="button">Говядина</button>
                <button class="filter-tag" type="button">Кролик</button>
              </div>
            </div>
          </div>

          <!-- Фильтр: Особенности диеты -->
          <div class="filter-group">
            <div class="filter-group-header">
              <span class="filter-group-title">Особенности диеты</span>
              <span class="material-symbols-outlined filter-group-arrow">expand_more</span>
            </div>
            <div class="filter-group-content">
              <label class="custom-checkbox-row checked">
                <div class="checkbox-left">
                  <div class="checkbox-box">
                    <span class="material-symbols-outlined">check</span>
                  </div>
                  <span class="checkbox-name">Беззерновой (Grain-free)</span>
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
                  <span class="checkbox-name">Защита суставов (Glucosamine)</span>
                </div>
              </label>
            </div>
          </div>

          <!-- Мини-баннер автодоставки -->
          <div class="subscription-banner-card">
            <div class="sub-banner-icon">
              <span class="material-symbols-outlined">autorenew</span>
            </div>
            <div>
              <div class="sub-banner-title">Автодоставка -15%</div>
              <div class="sub-banner-text">Регулярные поставки корма точно в срок без переплат.</div>
            </div>
          </div>

        </aside>

        <!-- Правая область: Сортировка + Сетка товаров + Пагинация -->
        <section class="catalog-main-area">

          <!-- Панель управления каталогом (сортировка, вид) -->
          <div class="catalog-controls-bar">
            <div class="sort-select-wrapper">
              <label class="sort-label" for="sortSelect">Сортировка:</label>
              <div class="sort-select-custom">
                <select id="sortSelect" class="sort-select">
                  <option selected>По популярности</option>
                  <option>Сначала дешевле</option>
                  <option>Сначала дороже</option>
                  <option>По размеру скидки</option>
                  <option>По рейтингу покупателей</option>
                </select>
                <span class="material-symbols-outlined sort-arrow">arrow_drop_down</span>
              </div>
            </div>

            <div class="view-and-count">
              <div class="view-switch-group">
                <span class="view-label">Вид:</span>
                <button class="view-mode-btn active" data-mode="grid" title="Сетка">
                  <span class="material-symbols-outlined">grid_view</span>
                </button>
                <button class="view-mode-btn" data-mode="list" title="Список">
                  <span class="material-symbols-outlined">view_list</span>
                </button>
              </div>
              <div class="controls-divider"></div>
              <span class="shown-counter">Показано 1–6 из 428</span>
            </div>
          </div>

          <!-- Сетка товаров (3 колонки на десктопе) -->
          <div class="product-grid" id="productGrid">

            <!-- Карточка 1: Grandorf -->
            <article class="product-card" data-product-id="dog-1">
              <button class="product-fav-btn" type="button" title="В избранное">
                <span class="material-symbols-outlined">favorite</span>
              </button>

              <div class="product-card-top">
                <div class="product-thumb-wrap">
                  <div class="product-badges-corner">
                    <span class="product-badge product-badge--bestseller">Хит продаж</span>
                    <span class="product-badge product-badge--holistic">Холистик</span>
                  </div>
                  <img
                    class="product-thumb"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiwkzaW7HRZlGoJgk5MWF5OHSNrll0CptCDE7t55zoA6PX6Gni9ekysML3mDzPX4WUCnIQNhHMA8n_D9c4fROuw1WGw6Nyo16ydPxEqhQ5CvALjznqx5w5P1RfLSLQfgXuFuc_Uqzy1RWVxg0MTWgCer8_91B45xNIpkaKKw_h1h6JGZ0d6mKApkh-Gjxe09FAGF3IBYkfoDtoIXT2O1kPf5HIeQPOxREkXONofPGzxTKpi30NbhoX"
                    alt="Grandorf 4 Meat Adult Medium Breed с живыми пробиотиками"
                  />
                </div>

                <div class="product-rating-row">
                  <div class="product-stars">
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star_half</span>
                  </div>
                  <span class="rating-val">4.9</span>
                  <span class="rating-reviews">(142)</span>
                </div>

                <div class="product-brand">Grandorf</div>
                <h2 class="product-name">
                  <a href="fluffies-product.php">4 Meat Adult Medium Breed с живыми пробиотиками</a>
                </h2>
                <p class="product-desc">Индейка, ягненок, утка, кролик с бурым рисом</p>

                <div class="product-weight-options">
                  <button class="weight-btn" type="button" data-price="7800" data-unit="5 200 ₸ / кг">1.5 кг</button>
                  <button class="weight-btn" type="button" data-price="14200" data-unit="4 733 ₸ / кг">3 кг</button>
                  <button class="weight-btn active" type="button" data-price="42500" data-unit="3 541 ₸ / кг">12 кг</button>
                </div>
              </div>

              <div class="product-card-bottom">
                <div class="price-wrap">
                  <div class="price-main">42 500 ₸</div>
                  <div class="price-per-unit">3 541 ₸ / кг</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined">shopping_cart</span>
                  <span>В корзину</span>
                </button>
              </div>
            </article>

            <!-- Карточка 2: Royal Canin -->
            <article class="product-card" data-product-id="dog-2">
              <button class="product-fav-btn" type="button" title="В избранное">
                <span class="material-symbols-outlined">favorite</span>
              </button>

              <div class="product-card-top">
                <div class="product-thumb-wrap">
                  <div class="product-badges-corner">
                    <span class="product-badge product-badge--sale">-12%</span>
                  </div>
                  <img
                    class="product-thumb"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPIkmoLWiGRpF9F0stoVqtaOMffyn1OR09qcSCmMbFqjhTlfpSdtW-IX7pvLK_hlyVpVh0Q-cn1o1TMhxin8hwKBMIQdslYdCup5qYYTr43EbrMBrse9ZnkxBf8Pbl_KHyLdRsGdSH7YXy_0jrVdmORn0-iabot8-H46nvw4-_0elPiZFlWuGtMo63M3eb-k0Lv2mvhLmwAt8SNCrdAZ3eYkNZFrfO_flUFPjwm94WqY46TlVJ5_vb"
                    alt="Royal Canin Maxi Adult для взрослых собак крупных пород"
                  />
                </div>

                <div class="product-rating-row">
                  <div class="product-stars">
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                  </div>
                  <span class="rating-val">5.0</span>
                  <span class="rating-reviews">(318)</span>
                </div>

                <div class="product-brand">Royal Canin</div>
                <h2 class="product-name">
                  <a href="fluffies-product.php">Maxi Adult для взрослых собак крупных пород</a>
                </h2>
                <p class="product-desc">Оптимальная поддержка костей и суставов (от 26 до 44 кг)</p>

                <div class="product-weight-options">
                  <button class="weight-btn" type="button" data-price="12900" data-unit="3 225 ₸ / кг">4 кг</button>
                  <button class="weight-btn active" type="button" data-price="38900" data-oldprice="44200" data-unit="2 593 ₸ / кг">15 кг</button>
                </div>
              </div>

              <div class="product-card-bottom">
                <div class="price-wrap">
                  <div class="price-row-with-old">
                    <span class="price-main">38 900 ₸</span>
                    <span class="price-old">44 200 ₸</span>
                  </div>
                  <div class="price-per-unit">2 593 ₸ / кг</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined">shopping_cart</span>
                  <span>В корзину</span>
                </button>
              </div>
            </article>

            <!-- Карточка 3: Brit Care -->
            <article class="product-card" data-product-id="dog-3">
              <button class="product-fav-btn" type="button" title="В избранное">
                <span class="material-symbols-outlined">favorite</span>
              </button>

              <div class="product-card-top">
                <div class="product-thumb-wrap">
                  <div class="product-badges-corner">
                    <span class="product-badge product-badge--hypo">Гипоаллергенный</span>
                  </div>
                  <img
                    class="product-thumb"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8aEaFEV_NKmrwgxaiccG6kzVlHykn3xJpsCoBj3sHyRetKnYQP5Z55IMQQkuSAGYTdx7H38neyLbPDW6VI_s5Eg0UGUcm366_ELPah0fg5dzcfp5Rw_0cm23OkS6qhQxYo5jIc-jdyJuahFaVKObRP28vbRMkuBgq_ShZ2fEX3kYex-y8dpFlfDJOquAvShDpNuKPw6KJ94ZXB8xAkZqP4dyRXNLNfDS_PToFi79-3zEuvLZIcmGy"
                    alt="Brit Care Hypoallergenic Adult Medium Breed Ягненок и рис"
                  />
                </div>

                <div class="product-rating-row">
                  <div class="product-stars">
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined">star</span>
                  </div>
                  <span class="rating-val">4.8</span>
                  <span class="rating-reviews">(95)</span>
                </div>

                <div class="product-brand">Brit Care</div>
                <h2 class="product-name">
                  <a href="fluffies-product.php">Hypoallergenic Adult Medium Breed Ягненок и рис</a>
                </h2>
                <p class="product-desc">Формула без пшеницы и сои для чувствительных собак</p>

                <div class="product-weight-options">
                  <button class="weight-btn" type="button" data-price="4200" data-unit="4 200 ₸ / кг">1 кг</button>
                  <button class="weight-btn" type="button" data-price="10900" data-unit="3 633 ₸ / кг">3 кг</button>
                  <button class="weight-btn active" type="button" data-price="34200" data-unit="2 850 ₸ / кг">12 кг</button>
                </div>
              </div>

              <div class="product-card-bottom">
                <div class="price-wrap">
                  <div class="price-main">34 200 ₸</div>
                  <div class="price-per-unit">2 850 ₸ / кг</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined">shopping_cart</span>
                  <span>В корзину</span>
                </button>
              </div>
            </article>

            <!-- Карточка 4: Monge -->
            <article class="product-card" data-product-id="dog-4">
              <button class="product-fav-btn" type="button" title="В избранное">
                <span class="material-symbols-outlined">favorite</span>
              </button>

              <div class="product-card-top">
                <div class="product-thumb-wrap">
                  <div class="product-badges-corner">
                    <span class="product-badge product-badge--country">Италия 🇮🇹</span>
                  </div>
                  <img
                    class="product-thumb"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDa6hA8m35i_6jX4wUBfcDimGMp00DXCe2FwOzEViLOUWk6l-DYIrBWa01wf8Cfm0fJ1PMju-dC06y7zrHgEQnH6IjxaGN_NlkKHgW3EvMrqBK9MJpqVXToXpMLGuIGVfX788UHMF4zjuupVU0eeQAJgQ5AYz-grexDJ265hJvpQlqRXHdG-9diQvt_sHRZtyUMyGjLYt9RtU8e5yYlMAAwljONgoWm-zqoMdIhpPI_Fq2Ip1ZPfT5e"
                    alt="Monge Dog Speciality Ягненок, рис и картофель"
                  />
                </div>

                <div class="product-rating-row">
                  <div class="product-stars">
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star_half</span>
                  </div>
                  <span class="rating-val">4.7</span>
                  <span class="rating-reviews">(86)</span>
                </div>

                <div class="product-brand">Monge</div>
                <h2 class="product-name">
                  <a href="fluffies-product.php">Dog Speciality Ягненок, рис и картофель</a>
                </h2>
                <p class="product-desc">Полнорационный монопротеиновый корм для всех пород</p>

                <div class="product-weight-options">
                  <button class="weight-btn" type="button" data-price="9600" data-unit="3 840 ₸ / кг">2.5 кг</button>
                  <button class="weight-btn active" type="button" data-price="36700" data-unit="3 058 ₸ / кг">12 кг</button>
                </div>
              </div>

              <div class="product-card-bottom">
                <div class="price-wrap">
                  <div class="price-main">36 700 ₸</div>
                  <div class="price-per-unit">3 058 ₸ / кг</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined">shopping_cart</span>
                  <span>В корзину</span>
                </button>
              </div>
            </article>

            <!-- Карточка 5: Farmina N&D -->
            <article class="product-card" data-product-id="dog-5">
              <button class="product-fav-btn" type="button" title="В избранное">
                <span class="material-symbols-outlined">favorite</span>
              </button>

              <div class="product-card-top">
                <div class="product-thumb-wrap">
                  <div class="product-badges-corner">
                    <span class="product-badge product-badge--new">Новинка</span>
                    <span class="product-badge product-badge--neutral">Grain-Free</span>
                  </div>
                  <img
                    class="product-thumb"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAO_7xTklUGgnmwjFXkZEkylSw2aqUCrG4jjAaEKhekjzh-4N5chTLGpGybLjwWfrUcgRBPW3y5X9S0glj5T8g36dphp099luHtbf2Dk_SKYh81uLFrR3pP0_EcPJH1RVt9Vu_-VbJmb3_S2vj-7rDE4QNvvVcfCqsuJ_qQiAelFEsV1VnvWRtN0zVQvw-GlkW7hXwG31wYyStkJesOUSvSDssmWyBqG8EJjrs8_ITEKKBZcKtuOOnr"
                    alt="Farmina N&amp;D Pumpkin Dog Беззерновой тыква, ягненок и черника"
                  />
                </div>

                <div class="product-rating-row">
                  <div class="product-stars">
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                  </div>
                  <span class="rating-val">4.9</span>
                  <span class="rating-reviews">(64)</span>
                </div>

                <div class="product-brand">Farmina N&amp;D</div>
                <h2 class="product-name">
                  <a href="fluffies-product.php">Pumpkin Dog Беззерновой тыква, ягненок и черника</a>
                </h2>
                <p class="product-desc">Ультра-премиальный холистик рацион без добавления злаков</p>

                <div class="product-weight-options">
                  <button class="weight-btn" type="button" data-price="13800" data-unit="5 520 ₸ / кг">2.5 кг</button>
                  <button class="weight-btn active" type="button" data-price="51000" data-unit="4 250 ₸ / кг">12 кг</button>
                </div>
              </div>

              <div class="product-card-bottom">
                <div class="price-wrap">
                  <div class="price-main">51 000 ₸</div>
                  <div class="price-per-unit">4 250 ₸ / кг</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined">shopping_cart</span>
                  <span>В корзину</span>
                </button>
              </div>
            </article>

            <!-- Карточка 6: Acana -->
            <article class="product-card" data-product-id="dog-6">
              <button class="product-fav-btn" type="button" title="В избранное">
                <span class="material-symbols-outlined">favorite</span>
              </button>

              <div class="product-card-top">
                <div class="product-thumb-wrap">
                  <div class="product-badges-corner">
                    <span class="product-badge product-badge--country">Канада 🇨🇦</span>
                    <span class="product-badge product-badge--eco">70% мяса</span>
                  </div>
                  <img
                    class="product-thumb"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFTWVIe9g39mRRiPUuCXm6d07VxsGtaeq07xfyuh788LBQPuVbtfc-1UwSA5OycT5shSO-ovtfRpB4Te6bxzcUwhVMsIXSi6MKMc-YVtnRKgPUiKJ9oXnw_U9E5AuEu9Ef5HnY5KV2tTDvNVIkmXvnA3mNDHH0u8CHWfuDBJkEqHz-IKTsWkSA3GfEY67KUSG6cGJ7jOi7u6J83fThW0JXgqB2n7c-CdrQtLzy3g4M3m5IXJ8zpKld"
                    alt="Acana Heritage Adult Large Breed свежая птица и камбала"
                  />
                </div>

                <div class="product-rating-row">
                  <div class="product-stars">
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                    <span class="material-symbols-outlined filled">star</span>
                  </div>
                  <span class="rating-val">5.0</span>
                  <span class="rating-reviews">(110)</span>
                </div>

                <div class="product-brand">Acana</div>
                <h2 class="product-name">
                  <a href="fluffies-product.php">Heritage Adult Large Breed свежая птица и камбала</a>
                </h2>
                <p class="product-desc">Биологически соответствующий рацион для взрослых собак от 25 кг</p>

                <div class="product-weight-options">
                  <button class="weight-btn" type="button" data-price="46200" data-unit="4 052 ₸ / кг">11.4 кг</button>
                  <button class="weight-btn active" type="button" data-price="62400" data-unit="3 670 ₸ / кг">17 кг</button>
                </div>
              </div>

              <div class="product-card-bottom">
                <div class="price-wrap">
                  <div class="price-main">62 400 ₸</div>
                  <div class="price-per-unit">3 670 ₸ / кг</div>
                </div>
                <button class="buy-btn" type="button">
                  <span class="material-symbols-outlined">shopping_cart</span>
                  <span>В корзину</span>
                </button>
              </div>
            </article>

          </div>

          <!-- Пагинация -->
          <div class="catalog-pagination">
            <button class="page-btn page-btn--nav" disabled type="button">
              <span class="material-symbols-outlined">arrow_back</span>
              <span>Назад</span>
            </button>
            <div class="page-numbers">
              <button class="page-num active" type="button">1</button>
              <button class="page-num" type="button">2</button>
              <button class="page-num" type="button">3</button>
              <span class="page-dots">...</span>
              <button class="page-num" type="button">18</button>
            </div>
            <button class="page-btn page-btn--nav" type="button">
              <span>Вперед</span>
              <span class="material-symbols-outlined">arrow_forward</span>
            </button>
          </div>

          <!-- Баннер консультации ветеринара -->
          <section class="vet-banner">
            <div class="vet-banner-left">
              <div class="vet-banner-icon">
                <span class="material-symbols-outlined">health_and_safety</span>
              </div>
              <div>
                <h3 class="vet-banner-title">Нужна помощь с выбором диеты для питомца?</h3>
                <p class="vet-banner-desc">
                  Дежурные ветеринарные врачи сети «Пушистики» бесплатно проконсультируют вас в чате или по телефону.
                </p>
              </div>
            </div>
            <button class="vet-banner-btn" type="button">
              <span class="material-symbols-outlined">support_agent</span>
              <span>Спросить ветврача</span>
            </button>
          </section>

        </section>
      </div>

    </div>
  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Скрипт логики каталога -->
  <script src="JS/dog_catalog.js"></script>
</body>
</html>