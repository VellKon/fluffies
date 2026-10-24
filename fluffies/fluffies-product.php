<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Grandorf 4 Meat Adult Medium 12 кг • Пушистики — ZOO-гипермаркет</title>

  <!-- Шрифты и иконки Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

  <!-- Стили: глобальные и страница товара -->
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/product.css"/>
</head>
<body>

  <!-- ========== ШАПКА САЙТА ========== -->
  <?php include 'components/header.php'; ?>

  <!-- ========== СТРАНИЦА КАРТОЧКИ ТОВАРА ========== -->
  <main class="site-main">
    <div class="container" style="padding-bottom:var(--space-xl)">

      <!-- Хлебные крошки -->
      <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <a href="index.php">Главная</a>
        <span class="material-symbols-outlined breadcrumbs-sep">chevron_right</span>
        <a href="fluffies_dog_catalog.php">Собаки</a>
        <span class="material-symbols-outlined breadcrumbs-sep">chevron_right</span>
        <a href="fluffies_dog_catalog.php">Корма</a>
        <span class="material-symbols-outlined breadcrumbs-sep">chevron_right</span>
        <a href="fluffies_dog_catalog.php">Сухой корм</a>
        <span class="material-symbols-outlined breadcrumbs-sep">chevron_right</span>
        <span class="breadcrumbs-current">Grandorf 4 Meat Adult Medium</span>
      </nav>

      <!-- Главная секция товара: Галерея слева, Покупка справа -->
      <section class="product-main-grid">

        <!-- ЛЕВАЯ КОЛОНКА: Галерея и медиа -->
        <div class="product-gallery-col">

          <div class="gallery-preview-card">
            <!-- Плавающие бейджи -->
            <div class="gallery-badges-overlay">
              <span class="product-tag-badge product-tag-badge--secondary">
                <span class="material-symbols-outlined" style="font-size:16px">biotech</span>
                <span>Живые пробиотики 10⁹</span>
              </span>
              <span class="product-tag-badge product-tag-badge--primary">
                <span class="material-symbols-outlined" style="font-size:16px">restaurant</span>
                <span>65% мяса в составе</span>
              </span>
              <span class="product-tag-badge product-tag-badge--tertiary">
                <span class="material-symbols-outlined" style="font-size:16px">verified</span>
                <span>Holistic &amp; Hypoallergenic</span>
              </span>
            </div>

            <!-- Кнопки действий -->
            <div class="gallery-actions-overlay">
              <button class="action-circle-btn" id="favorite-btn" type="button" title="В избранное">
                <span class="material-symbols-outlined" style="font-size:22px">favorite_border</span>
              </button>
              <button class="action-circle-btn" type="button" title="Сравнить">
                <span class="material-symbols-outlined" style="font-size:22px">compare_arrows</span>
              </button>
            </div>

            <!-- Главное фото продукта -->
            <div class="main-image-wrap">
              <img
                id="main-product-image"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDc640i_X8HL0T9ja0DYAoqDVUd1U4u5IqXyAmrXuABfVAsfO6ef-y_K_vwzNUehP99IOM8s2orOnZH5cI_x5BBWZzYIwnDdYgWKuQ72vEjWk7jVLgOhWZJ8EktUTPDE5U0Ez3eGm3HFacSV0jrao4pEfsuoU4SvmvTGmj84yWbpPOQEm_PWh4iBiIFia1o6yVofFjPZ3eBjhTIV50eg30-Izi8C058CvEw0jz5zL4xvVHhTkmg-oPf"
                alt="Grandorf 4 Meat Adult Medium"
              />
            </div>

            <!-- Размер гранулы -->
            <div class="kibble-info-bar">
              <div class="kibble-visual-wrap">
                <div class="kibble-shape-icon">
                  <div class="kibble-shape-round">
                    <span class="kibble-shape-text">14мм</span>
                  </div>
                </div>
                <div class="kibble-text-wrap">
                  <span class="kibble-title">Крокет идеальной формы</span>
                  <span class="kibble-subtitle">Очищает налет при жевании, не травмирует десны</span>
                </div>
              </div>
              <div class="kibble-measure">
                <span class="material-symbols-outlined" style="font-size:18px">straighten</span>
                <span>1.4 см</span>
              </div>
            </div>
          </div>

          <!-- Галерея миниатюр -->
          <div class="gallery-thumbnails-grid">
            <button class="gallery-thumb gallery-thumb--active" onclick="changeGallery(0)" type="button">
              <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDc640i_X8HL0T9ja0DYAoqDVUd1U4u5IqXyAmrXuABfVAsfO6ef-y_K_vwzNUehP99IOM8s2orOnZH5cI_x5BBWZzYIwnDdYgWKuQ72vEjWk7jVLgOhWZJ8EktUTPDE5U0Ez3eGm3HFacSV0jrao4pEfsuoU4SvmvTGmj84yWbpPOQEm_PWh4iBiIFia1o6yVofFjPZ3eBjhTIV50eg30-Izi8C058CvEw0jz5zL4xvVHhTkmg-oPf" alt="Упаковка 12 кг"/>
              <span class="gallery-thumb-caption">Упаковка 12 кг</span>
            </button>
            <button class="gallery-thumb" onclick="changeGallery(1)" type="button">
              <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAW-aNiomXzWscnJkkJ5FAMD-YqtCE9aZdj_K1-bgThMshBKPBhIVaAaxkCPfv4c9T8uyGF4arFGZDF5xHKDslquI8hu_GhONDLmlZwyt0nkirOqwQckHl6fp8PL1bHlSTfpweT7snIA5Sm6O7GSpkg-rT4bWsj5RcU9PSclx_hcueLXcQ4ctPnhFuGFxJJe6wDnlEwvriiw9VZFM228r7JmwYuy_Gp7xgniar3Ng0q342ojXlgWUUg" alt="Вид сзади / Состав"/>
              <span class="gallery-thumb-caption">Состав</span>
            </button>
            <button class="gallery-thumb" onclick="changeGallery(2)" type="button">
              <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVkVHUSKD2T2Yk2MKpa9yLycDOrX6kzCL911yWOPZ766XJUcgdIbaP5iXpuWEUeZ1eldaORIfmVfHM_vVAYywCboEVa0sE8lXP9c4BtXLui7MRTIEUCawK78nA3OGG67OOcxB-tk7HjlkqmFNqxHAZhYon4seb2_MCQfTFSxjf0qU12JinuDjC36WkerIX57jLNyy39UfDcMmgrBLwRi5Ip_NQOr-TYoPfRysranUMG5U29B6Qec_j" alt="Текстура гранулы"/>
              <span class="gallery-thumb-caption">Гранулы</span>
            </button>
            <button class="gallery-thumb" onclick="changeGallery(3)" type="button">
              <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNvUeXefGCR0e_wVs_0NXRPC44TrBI4ETu93ms0QXfVhoVF7GTXDnrh2Btwzyw6XL5a88LR4x6wpz6CXJcw4VrDUGskxKWti9n5PoZwnT3qEx929hx45PkVA6rZ9FFTHbZgxuNawAUo-lqgSCQox40_wDDSxRRvbGx0Mysu-M6Q1AztjuD4aR3Zi-YXLX54ngY-fqgZd1aA4vEfSm1EP-yZ-AVJG6qxe4ur-EeVQBOekPXSPjBBZP9" alt="Zip-замок"/>
              <span class="gallery-thumb-caption">Zip-замок</span>
            </button>
          </div>

          <!-- Гарантия подлинности -->
          <div class="authenticity-card">
            <div class="authenticity-left">
              <span class="material-symbols-outlined authenticity-icon">verified</span>
              <div>
                <span class="authenticity-title">100% Оригинальная продукция Grandorf</span>
                <span class="authenticity-desc">Прямые поставки от официального дистрибьютора в Бельгии. Сертификаты соответствия РК.</span>
              </div>
            </div>
            <a href="#" style="color:var(--color-primary); font-size:13px; font-weight:700; text-decoration:none">Сертификаты</a>
          </div>

        </div>

        <!-- ПРАВАЯ КОЛОНКА: Детали и оформление покупки -->
        <div class="product-details-col">

          <div class="purchase-card">

            <!-- Бренд, артикул, статус наличия -->
            <div class="product-meta-header">
              <div style="display:flex; align-items:center; gap:8px">
                <span class="brand-meta-badge">Grandorf</span>
                <span class="sku-text">Арт. GR-4M-12KG</span>
              </div>
              <span class="stock-status-pill">
                <span class="material-symbols-outlined">check_circle</span>
                <span>В наличии: 18 шт. (Склад Алматы)</span>
              </span>
            </div>

            <!-- Название товара -->
            <h1 class="product-title">
              Grandorf 4 Meat &amp; Brown Rice Adult Medium Breeds — Сухой корм для взрослых собак средних пород
            </h1>

            <!-- Рейтинг и отзывы -->
            <div class="rating-social-row">
              <div class="rating-left">
                <div class="star-rating">
                  <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span>
                  <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span>
                  <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span>
                  <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span>
                  <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span>
                </div>
                <span class="rating-score">4.95</span>
                <a class="reviews-link" href="#tab-reviews">(142 проверенных отзыва)</a>
              </div>
              <div class="repeat-purchase-tag">
                <span class="material-symbols-outlined" style="font-size:16px; color:var(--color-secondary)">repeat</span>
                <span>94% заказывают повторно</span>
              </div>
            </div>

            <!-- Выбор фасовки -->
            <div class="package-size-section">
              <div class="package-size-header">
                <span class="package-size-title">Выберите вес упаковки:</span>
                <span class="package-size-hint">Выгода до 25% в большой пачке</span>
              </div>
              <div class="package-options-grid" id="pack-selector">
                <button class="pack-opt" onclick="selectPackage('1 кг', 5800, 6200, 400, 174)" type="button">
                  <span class="pack-size-label">1 кг</span>
                  <span class="pack-price">5 800 ₸</span>
                  <span class="pack-unit-price">5 800 ₸/кг</span>
                </button>
                <button class="pack-opt" onclick="selectPackage('3 кг', 15200, 16500, 1300, 456)" type="button">
                  <span class="pack-size-label">3 кг</span>
                  <span class="pack-price">15 200 ₸</span>
                  <span class="pack-unit-price">5 066 ₸/кг</span>
                </button>
                <button class="pack-opt pack-opt--active" onclick="selectPackage('12 кг', 42500, 47000, 4500, 1275)" type="button">
                  <span class="pack-hit-badge">Выгодно</span>
                  <span class="pack-size-label">12 кг</span>
                  <span class="pack-price">42 500 ₸</span>
                  <span class="pack-unit-price">3 541 ₸/кг</span>
                </button>
              </div>
            </div>

            <!-- Режимы покупки (Разовая vs Автодоставка) -->
            <div class="order-modes-wrap">
              <label class="order-mode-card" onclick="toggleOrderMode('regular')">
                <div class="order-mode-left">
                  <input type="radio" name="orderType" value="once" checked/>
                  <div>
                    <span class="order-mode-title">Обычная разовая покупка</span>
                    <span class="order-mode-sub">Доставка сегодня или самовывоз</span>
                  </div>
                </div>
                <span class="order-mode-price" id="price-once">42 500 ₸</span>
              </label>

              <label class="order-mode-card" onclick="toggleOrderMode('subscribe')" style="border:1px solid rgba(0,109,55,0.3)">
                <div class="order-mode-left">
                  <input type="radio" name="orderType" value="subscribe"/>
                  <div>
                    <div style="display:flex; align-items:center; gap:6px">
                      <span class="order-mode-title">Автодоставка «Умная забота»</span>
                      <span class="order-mode-discount-pill">-15% ВСЕГДА</span>
                    </div>
                    <span class="order-mode-sub">Привезем по расписанию (раз в 4-6 недель). Отмена в 1 клик</span>
                  </div>
                </div>
                <div style="text-align:right">
                  <span class="order-mode-price order-mode-price--secondary" id="price-sub">36 125 ₸</span>
                  <span style="font-size:11px; color:var(--color-secondary); display:block; font-weight:700">Экономия 6 375 ₸</span>
                </div>
              </label>
            </div>

            <!-- Итоговая плашка цены и количества -->
            <div style="background:var(--color-surface-container-low); padding:20px; border-radius:18px">
              <div style="display:flex; justify-content:space-between; align-items:flex-end">
                <div>
                  <div style="display:flex; align-items:center; gap:8px">
                    <span style="font-size:32px; font-weight:800; color:var(--color-on-surface)" id="display-price">42 500 ₸</span>
                    <span style="font-size:18px; color:var(--color-outline); text-decoration:line-through" id="display-old-price">47 000 ₸</span>
                    <span style="background:var(--color-error); color:#fff; font-size:11px; font-weight:800; padding:2px 8px; border-radius:9999px" id="display-discount">-10%</span>
                  </div>
                  <span style="font-size:13px; color:var(--color-secondary); font-weight:600; display:block; margin-top:2px" id="display-bonus">
                    +1 275 бонусов на карту «Пушистики»
                  </span>
                </div>

                <!-- Количество -->
                <div style="display:flex; align-items:center; background:#fff; border-radius:12px; padding:4px; box-shadow:0 1px 3px rgba(0,0,0,0.06)">
                  <button onclick="adjustQty(-1)" type="button" style="width:32px; height:32px; border-radius:8px; border:none; background:var(--color-surface-container); cursor:pointer; font-weight:700">-</button>
                  <input type="number" id="item-quantity" value="1" min="1" max="99" style="width:36px; border:none; text-align:center; font-size:15px; font-weight:700; outline:none"/>
                  <button onclick="adjustQty(1)" type="button" style="width:32px; height:32px; border-radius:8px; border:none; background:var(--color-surface-container); cursor:pointer; font-weight:700">+</button>
                </div>
              </div>

              <!-- Кнопки покупки -->
              <div style="display:grid; grid-template-columns:1fr; gap:10px; margin-top:16px">
                <button
                  type="button"
                  id="add-to-cart-btn"
                  onclick="triggerAddToCart()"
                  style="width:100%; padding:16px; border-radius:16px; border:none; background:var(--color-primary-container); color:#fff; font-size:16px; font-weight:700; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:8px; box-shadow:0 4px 16px rgba(255,122,0,0.3); font-family:inherit; transition:background 0.2s"
                >
                  <span class="material-symbols-outlined" style="font-size:22px">shopping_bag</span>
                  <span id="cart-button-text">Добавить в корзину</span>
                </button>

                <button
                  type="button"
                  onclick="triggerKaspiModal()"
                  style="width:100%; padding:14px; border-radius:16px; border:1px solid rgba(225,226,230,0.8); background:#fff; color:var(--color-on-surface); font-size:15px; font-weight:700; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:8px; font-family:inherit"
                >
                  <span style="width:22px; height:22px; border-radius:6px; background:var(--color-error); color:#fff; display:inline-flex; align-items:center; justify-content:center; font-size:12px; font-weight:800">K</span>
                  <span>Купить через Kaspi QR / В рассрочку 0-0-12</span>
                </button>
              </div>

              <!-- Преимущества доставки -->
              <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-top:14px; padding-top:14px; border-top:1px solid rgba(225,226,230,0.6); font-size:12px; color:var(--color-on-surface-variant)">
                <div style="display:flex; align-items:center; gap:6px">
                  <span class="material-symbols-outlined" style="font-size:18px; color:var(--color-secondary)">local_shipping</span>
                  <span>Бесплатная доставка сегодня</span>
                </div>
                <div style="display:flex; align-items:center; gap:6px">
                  <span class="material-symbols-outlined" style="font-size:18px; color:var(--color-primary)">cached</span>
                  <span>14 дней на легкий возврат</span>
                </div>
              </div>
            </div>

            <!-- Виджет расчета нормы кормления -->
            <div style="background:var(--color-surface-container-low); padding:16px; border-radius:16px">
              <div style="display:flex; align-items:center; gap:8px; margin-bottom:10px">
                <span class="material-symbols-outlined" style="color:var(--color-primary); font-size:20px">calculate</span>
                <span style="font-size:14px; font-weight:700; color:var(--color-on-surface)">Калькулятор расхода пачки для вашей собаки</span>
              </div>
              <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px">
                <div>
                  <label style="font-size:11px; color:var(--color-on-surface-variant); display:block; margin-bottom:2px">Вес собаки (кг)</label>
                  <input type="number" id="calc-dog-weight" value="18" min="1" max="90" oninput="calculateFoodDose()" style="width:100%; padding:8px 12px; border-radius:10px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box"/>
                </div>
                <div>
                  <label style="font-size:11px; color:var(--color-on-surface-variant); display:block; margin-bottom:2px">Активность</label>
                  <select id="calc-dog-activity" onchange="calculateFoodDose()" style="width:100%; padding:8px 12px; border-radius:10px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box">
                    <option value="0.9">Спокойная (1 прогулка)</option>
                    <option value="1.0" selected>Умеренная (2 прогулки)</option>
                    <option value="1.2">Высокая (спорт / бег)</option>
                  </select>
                </div>
              </div>
              <div style="display:flex; justify-content:space-between; align-items:center; margin-top:12px; padding-top:10px; border-top:1px dashed rgba(140,114,99,0.2); font-size:13px">
                <span style="color:var(--color-on-surface-variant)">Норма: <strong style="color:var(--color-on-surface)" id="calc-result-grams">225 г / сутки</strong></span>
                <span style="color:var(--color-secondary); font-weight:700">Пачки 12 кг хватит на <strong id="calc-result-days">53 дня</strong></span>
              </div>
            </div>

          </div>

        </div>

      </section>

      <!-- Секция детальных вкладок (Описание, Состав, Таблица норм, Отзывы) -->
      <section style="margin-top:40px">
        <div style="display:flex; gap:8px; border-bottom:1px solid var(--color-surface-container-high); padding-bottom:8px; overflow-x:auto">
          <button class="tab-button tab-button--active" id="btn-tab-desc" onclick="switchTab('tab-desc')" type="button" style="padding:10px 20px; border-radius:12px; border:none; background:var(--color-primary-container); color:#fff; font-weight:700; cursor:pointer; font-family:inherit; font-size:14px">
            Описание
          </button>
          <button class="tab-button" id="btn-tab-composition" onclick="switchTab('tab-composition')" type="button" style="padding:10px 20px; border-radius:12px; border:none; background:var(--color-surface-container); color:var(--color-on-surface-variant); cursor:pointer; font-family:inherit; font-size:14px">
            Состав и анализ
          </button>
          <button class="tab-button" id="btn-tab-feeding" onclick="switchTab('tab-feeding')" type="button" style="padding:10px 20px; border-radius:12px; border:none; background:var(--color-surface-container); color:var(--color-on-surface-variant); cursor:pointer; font-family:inherit; font-size:14px">
            Нормы кормления
          </button>
          <button class="tab-button" id="btn-tab-reviews" onclick="switchTab('tab-reviews')" type="button" style="padding:10px 20px; border-radius:12px; border:none; background:var(--color-surface-container); color:var(--color-on-surface-variant); cursor:pointer; font-family:inherit; font-size:14px">
            Отзывы покупателей (142)
          </button>
        </div>

        <!-- Контент вкладок -->
        <div style="background:#fff; border-radius:20px; padding:24px; margin-top:16px; box-shadow:0 1px 4px rgba(0,0,0,0.04)">

          <!-- Вкладка 1: Описание -->
          <div class="tab-panel" id="tab-desc">
            <h3 style="font-size:18px; font-weight:700; margin:0 0 12px">О рационе Grandorf 4 Meat Adult Medium</h3>
            <p style="font-size:15px; line-height:1.6; color:var(--color-on-surface-variant); margin-bottom:16px">
              Полнорационный гипоаллергенный сухой корм класса холистик с живыми пробиотиками для взрослых собак средних пород (весом от 10 до 25 кг). Уникальный комплекс из четырех видов отборного мяса (индейка, ягненок, утка, кролик) обеспечивает превосходный аминокислотный профиль без риска пищевой аллергии на куриный белок или глютен.
            </p>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:16px">
              <div style="padding:16px; border-radius:14px; background:var(--color-surface-container-low)">
                <span class="material-symbols-outlined" style="color:var(--color-secondary); font-size:24px">spa</span>
                <h4 style="margin:6px 0 4px; font-size:15px; font-weight:700">100% Натуральный состав</h4>
                <p style="margin:0; font-size:13px; color:var(--color-on-surface-variant)">Не содержит кукурузы, пшеницы, свекольного жома, сои, курицы, яиц и искусственных красителей.</p>
              </div>
              <div style="padding:16px; border-radius:14px; background:var(--color-surface-container-low)">
                <span class="material-symbols-outlined" style="color:var(--color-primary); font-size:24px">health_and_safety</span>
                <h4 style="margin:6px 0 4px; font-size:15px; font-weight:700">Защита суставов</h4>
                <p style="margin:0; font-size:13px; color:var(--color-on-surface-variant)">Глюкозамин и хондроитин в терапевтической дозировке укрепляют суставные хрящи активных собак.</p>
              </div>
              <div style="padding:16px; border-radius:14px; background:var(--color-surface-container-low)">
                <span class="material-symbols-outlined" style="color:var(--color-tertiary); font-size:24px">biotech</span>
                <h4 style="margin:6px 0 4px; font-size:15px; font-weight:700">Микрокапсулированные пробиотики</h4>
                <p style="margin:0; font-size:13px; color:var(--color-on-surface-variant)">1 миллиард живых бактерий на 1 кг корма для крепкого пищеварения и иммунитета.</p>
              </div>
            </div>
          </div>

          <!-- Вкладка 2: Состав -->
          <div class="tab-panel" id="tab-composition" style="display:none">
            <h3 style="font-size:18px; font-weight:700; margin:0 0 12px">Ингредиенты и питательная ценность</h3>
            <p style="font-size:14px; color:var(--color-on-surface-variant); line-height:1.6">
              <strong>Ингредиенты:</strong> Дегидрированное мясо индейки, Дегидрированное мясо ягненка, Дегидрированное мясо утки, Дегидрированное мясо кролика, Цельный бурый рис, Свежее мясо индейки, Жир индейки, Сушеный цикорий (натуральный источник FOS и инулина), Мука из плодов рожкового дерева, Сушеное яблоко, Сушеный антарктический криль (натуральный источник EPA и DHA), Пивные дрожжи, Масло лосося, Глюкозамин, Хондроитин, Юкка Шидигера, Живые пробиотики (Enterococcus faecium).
            </p>
          </div>

          <!-- Вкладка 3: Нормы -->
          <div class="tab-panel" id="tab-feeding" style="display:none">
            <h3 style="font-size:18px; font-weight:700; margin:0 0 12px">Суточная норма кормления</h3>
            <p style="font-size:14px; color:var(--color-on-surface-variant); margin-bottom:12px">
              Указанные нормы являются ориентировочными. Корм следует давать сухим, обеспечив собаке постоянный доступ к чистой свежей питьевой воде.
            </p>
            <table style="width:100%; border-collapse:collapse; font-size:14px">
              <tr style="background:var(--color-surface-container); text-align:left">
                <th style="padding:10px">Вес собаки</th>
                <th style="padding:10px">Низкая активность</th>
                <th style="padding:10px">Нормальная активность</th>
                <th style="padding:10px">Высокая активность</th>
              </tr>
              <tr style="border-bottom:1px solid var(--color-surface-container)">
                <td style="padding:10px">10 – 15 кг</td>
                <td style="padding:10px">140 – 190 г</td>
                <td style="padding:10px">160 – 215 г</td>
                <td style="padding:10px">190 – 250 г</td>
              </tr>
              <tr style="border-bottom:1px solid var(--color-surface-container)">
                <td style="padding:10px">15 – 20 кг</td>
                <td style="padding:10px">190 – 235 г</td>
                <td style="padding:10px">215 – 270 г</td>
                <td style="padding:10px">250 – 310 г</td>
              </tr>
              <tr style="border-bottom:1px solid var(--color-surface-container)">
                <td style="padding:10px">20 – 25 кг</td>
                <td style="padding:10px">235 – 280 г</td>
                <td style="padding:10px">270 – 320 г</td>
                <td style="padding:10px">310 – 370 г</td>
              </tr>
            </table>
          </div>

          <!-- Вкладка 4: Отзывы -->
          <div class="tab-panel" id="tab-reviews" style="display:none">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:16px">
              <h3 style="font-size:18px; font-weight:700; margin:0">Отзывы владельцев питомцев</h3>
              <button type="button" style="padding:8px 16px; border-radius:12px; border:none; background:var(--color-primary-container); color:#fff; font-weight:700; cursor:pointer; font-family:inherit">
                Оставить отзыв
              </button>
            </div>
            <!-- Отзыв 1 -->
            <div style="padding:16px 0; border-bottom:1px solid var(--color-surface-container)">
              <div style="display:flex; justify-content:space-between; margin-bottom:4px">
                <span style="font-weight:700; color:var(--color-on-surface)">Асель К. (Алматы) • Корги 2 года</span>
                <span style="color:var(--color-primary); font-weight:700">★★★★★</span>
              </div>
              <p style="margin:0; font-size:14px; color:var(--color-on-surface-variant); line-height:1.5">
                Перешли на Grandorf 4 Meat после долгой борьбы с аллергией на курицу. За месяц полностью прошла чесотка, шерсть стала лосниться и блестеть! Гранулы оптимального размера, собака ест с аппетитом. Очень довольны быстрой доставкой за 2 часа!
              </p>
            </div>
          </div>

        </div>
      </section>

      <!-- Сопутствующие товары («Часто покупают вместе») -->
      <section style="margin-top:48px">
        <h2 style="font-size:22px; font-weight:800; color:var(--color-on-surface); margin:0 0 16px">
          Часто покупают вместе с этим кормом
        </h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:16px">
          <!-- Товар 1 -->
          <div style="background:#fff; border-radius:20px; padding:16px; box-shadow:0 1px 4px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between">
            <div>
              <div style="height:160px; background:var(--color-surface-container-low); border-radius:14px; display:flex; align-items:center; justify-content:center; padding:12px; margin-bottom:12px">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8q45oGzeusIXQu3CITB-RGHzv2UsHPZaYRSdK2Ix8iPwhm_x64f8nU-oiYfDihynkvsTX2BnGKUSfRWm4xBTMJ_ExmEtck83VIxBwLe7DUwmxcfTBWG--8aAodOhjfEsNytzNpQO64zy8FDIUcn1lXjXiQaKDyNSJlw_YSowfK4FcsUIMobdK1QVBKWJ7YajYJj182T5QnWKCnUz8ytevk-SI8vqAEuAm2g4QrgaXEZW7i9KrdTMH" alt="Утиные медальоны" style="max-height:100%; object-fit:contain"/>
              </div>
              <span style="font-size:11px; font-weight:700; color:var(--color-primary); text-transform:uppercase">Лакомства</span>
              <h4 style="font-size:14px; font-weight:700; margin:4px 0 2px">Деревенские лакомства Утиные медальоны 100 г</h4>
              <span style="font-size:12px; color:var(--color-on-surface-variant)">Натуральное сушеное мясо для дрессировки</span>
            </div>
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:14px">
              <span style="font-size:18px; font-weight:800; color:var(--color-on-surface)">2 400 ₸</span>
              <button onclick="quickAddCompanion(this, 'Утиные медальоны')" type="button" style="width:36px; height:36px; border-radius:10px; border:none; background:var(--color-primary-container); color:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                <span class="material-symbols-outlined" style="font-size:20px">add</span>
              </button>
            </div>
          </div>

          <!-- Товар 2 -->
          <div style="background:#fff; border-radius:20px; padding:16px; box-shadow:0 1px 4px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between">
            <div>
              <div style="height:160px; background:var(--color-surface-container-low); border-radius:14px; display:flex; align-items:center; justify-content:center; padding:12px; margin-bottom:12px">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAW91h_sPU3YkZzB4nie3S1KwW9hje3shg9Ewo5ktP0wurS_8HOMz2BpPVHRnWKYH4ncwlEYHSaOEAYZPqpUdDllrJ-XNS7ywNxB-46d4X-QTBKwP4ZncqRV7IbIrlKgQDkYWJIqGROKyUSuEYtRK81f2SToLVxTpXwy3aT-KYfn2oaLe7ti1nAibT6DJDRFeapdWtHNrUm5YUXKNRn-SI2j4ZopkzaxCIFdOHtdGcuTlIDZrzmfuJj" alt="Масло лосося" style="max-height:100%; object-fit:contain"/>
              </div>
              <span style="font-size:11px; font-weight:700; color:var(--color-secondary); text-transform:uppercase">Витамины</span>
              <h4 style="font-size:14px; font-weight:700; margin:4px 0 2px">Масло дикого лосося Salmon Oil 500 мл</h4>
              <span style="font-size:12px; color:var(--color-on-surface-variant)">Для густой шерсти и крепких суставов</span>
            </div>
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:14px">
              <span style="font-size:18px; font-weight:800; color:var(--color-on-surface)">6 800 ₸</span>
              <button onclick="quickAddCompanion(this, 'Масло лосося')" type="button" style="width:36px; height:36px; border-radius:10px; border:none; background:var(--color-primary-container); color:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                <span class="material-symbols-outlined" style="font-size:20px">add</span>
              </button>
            </div>
          </div>

          <!-- Товар 3 -->
          <div style="background:#fff; border-radius:20px; padding:16px; box-shadow:0 1px 4px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between">
            <div>
              <div style="height:160px; background:var(--color-surface-container-low); border-radius:14px; display:flex; align-items:center; justify-content:center; padding:12px; margin-bottom:12px">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAm-fW0E4shOx_Dvgt1ir3Y2RMgCO5WXyoG4DDRo5kV0mGBKVYnRbec7sXco2oavqXO2GnltWqmbRWRwb3HejMM3Akq-vEwoawcW1N40F74Noowm5_5SOSGsiwrG3VPB_qEt39_PCTAQsdFFivBNCkau5B1P9kmtYQe9lVpKgvUMrWjJvE5AetPZb9fdNdcjVvjUd9IbY0vlSn3tDLGB1azXYnnuR2zoD3vGeCwZP-PAL6dKjJS8X8w" alt="Двойная миска" style="max-height:100%; object-fit:contain"/>
              </div>
              <span style="font-size:11px; font-weight:700; color:var(--color-tertiary); text-transform:uppercase">Аксессуары</span>
              <h4 style="font-size:14px; font-weight:700; margin:4px 0 2px">Двойная керамическая миска EcoBowl на дубе</h4>
              <span style="font-size:12px; color:var(--color-on-surface-variant)">Объем 2×850 мл • Высота 12 см</span>
            </div>
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:14px">
              <span style="font-size:18px; font-weight:800; color:var(--color-on-surface)">9 200 ₸</span>
              <button onclick="quickAddCompanion(this, 'Миска')" type="button" style="width:36px; height:36px; border-radius:10px; border:none; background:var(--color-primary-container); color:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                <span class="material-symbols-outlined" style="font-size:20px">add</span>
              </button>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Клиентский скрипт карточки товара -->
  <script src="app.js"></script>
</body>
</html>