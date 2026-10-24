<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Моя корзина и оформление заказа • Пушистики — ZOO-гипермаркет</title>

  <!-- Шрифты и иконки Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

  <!-- Стили: глобальные и страница корзины -->
  <link rel="stylesheet" href="css/global.css"/>
  <link rel="stylesheet" href="css/pages/cart.css"/>
</head>
<body>

  <!-- ========== ШАПКА САЙТА ========== -->
  <?php include 'components/header.php'; ?>

  <!-- ========== СТРАНИЦА КОРЗИНЫ ========== -->
  <main class="site-main">
    <div class="cart-page-wrapper">
      <div class="cart-page-container">

        <!-- Хлебные крошки и статус склада -->
        <div class="cart-breadcrumbs-row">
          <nav class="cart-breadcrumbs" aria-label="Хлебные крошки">
            <a href="index.php">
              <span class="material-symbols-outlined" style="font-size:16px">arrow_back</span>
              <span>В каталог зоотоваров</span>
            </a>
            <span>/</span>
            <span class="cart-breadcrumbs-current">Оформление корзины</span>
          </nav>
          <div class="cart-warehouse-badge">
            <span class="pulse-dot"></span>
            <span>Склад: <strong style="color:var(--color-on-surface)">Алматы, Сейфуллина 521</strong> (все товары в наличии)</span>
          </div>
        </div>

        <!-- Заголовок страницы -->
        <div class="cart-header-row">
          <div>
            <span class="cart-header-subtitle">Корзина и чек-аут</span>
            <h1 class="cart-page-title">Моя корзина</h1>
          </div>
          <div class="cart-header-summary">
            В заказе <strong style="color:var(--color-on-surface)" id="summaryItemsCount">4 товара</strong> на сумму <strong style="color:var(--color-primary)" id="headerSummaryTotal">60 700 ₸</strong>
          </div>
        </div>

        <!-- Прогресс бесплатной доставки -->
        <div class="free-delivery-card">
          <div class="free-delivery-left">
            <div class="free-delivery-icon-box">
              <span class="material-symbols-outlined" style="font-size:26px">local_shipping</span>
            </div>
            <div>
              <div class="free-delivery-title-row">
                <span class="free-delivery-title">🎉 Поздравляем! Бесплатная доставка активна</span>
                <span class="city-pill">г. Алматы</span>
              </div>
              <p class="free-delivery-desc">
                Сумма заказа превысила порог 7 000 ₸. Мы бережно доставим весь заказ курьером до вашей двери бесплатно!
              </p>
            </div>
          </div>
          <div class="free-delivery-progress-wrap">
            <div class="free-delivery-progress-labels">
              <span>Прогресс: 60 700 ₸</span>
              <span>100% выполнено</span>
            </div>
            <div class="free-delivery-bar-outer">
              <div class="free-delivery-bar-inner"></div>
            </div>
          </div>
        </div>

        <!-- Основная сетка: товары слева, итог справа -->
        <div class="cart-layout">

          <!-- ЛЕВАЯ КОЛОНКА: Список товаров и шаги оформления -->
          <div class="cart-main-column">

            <!-- 1. Секция списка товаров -->
            <div class="cart-card">
              <div class="cart-card-header">
                <div class="cart-card-title-wrap">
                  <span class="material-symbols-outlined cart-card-title-icon">shopping_basket</span>
                  <h2 class="cart-card-title">Выбранные зоотовары</h2>
                </div>
                <button class="btn-clear-cart" id="clearCartBtn" type="button">
                  <span class="material-symbols-outlined" style="font-size:18px">delete_sweep</span>
                  <span>Очистить корзину</span>
                </button>
              </div>

              <!-- Товар 1: Grandorf 4 Meat 12 кг -->
              <div class="cart-item" data-item-id="item-1">
                <div class="cart-item-info-group">
                  <div class="cart-item-thumb-box">
                    <img
                      class="cart-item-img"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuDF89WIhV-I1F43ypkseQsRAv2Bcz95-th2Pdk9gvLNrFPps8ygNUbnrieIj84iL-0uikbuI68rd4OAJC4jjSI86N9UIq52Z648QMJxvIDjyAc48_QPglQ0tdwb2ReZHqdyx_FpkFiwZQm4_HM5dko_9K5cPsK9G64vfoWFfR81iopxGiC-3AbNEFRQKRBFZt7FS-4WCvO0FE_Q5bjMP3IMrP1cr0cg6E8rKbjWGY82G925YKCzW1vg"
                      alt="Grandorf 4 Meat 12 кг"
                    />
                    <span class="cart-item-badge" style="background:var(--color-primary); color:var(--color-on-primary)">Хит</span>
                  </div>
                  <div style="display:flex; flex-direction:column">
                    <span style="font-size:11px; font-weight:700; color:var(--color-secondary); text-transform:uppercase">Сухой корм • Holistic</span>
                    <h3 style="font-size:15px; font-weight:700; color:var(--color-on-surface); margin:2px 0">Grandorf 4 Meat Adult Medium 12 кг</h3>
                    <span style="font-size:13px; color:var(--color-on-surface-variant)">Для взрослых собак средних пород с пребиотиками</span>
                    <div style="display:flex; gap:12px; margin-top:6px">
                      <button class="btn-item-action" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">favorite</span>
                        <span>В избранное</span>
                      </button>
                      <button class="btn-remove-item" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">close</span>
                        <span>Удалить</span>
                      </button>
                    </div>
                  </div>
                </div>

                <div style="display:flex; align-items:center; gap:20px">
                  <!-- Степпер -->
                  <div style="display:flex; align-items:center; background:var(--color-surface-container); border-radius:9999px; padding:3px">
                    <button class="btn-qty-minus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">remove</span>
                    </button>
                    <span class="cart-qty-val" style="width:32px; text-align:center; font-weight:700">1</span>
                    <button class="btn-qty-plus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">add</span>
                    </button>
                  </div>
                  <!-- Цена -->
                  <div style="text-align:right; min-width:100px">
                    <div class="cart-item-total" style="font-size:20px; font-weight:800; color:var(--color-on-surface)">42 500 ₸</div>
                    <div style="font-size:12px; color:var(--color-on-surface-variant)">3 541 ₸/кг</div>
                  </div>
                </div>
              </div>

              <!-- Товар 2: Утиные медальоны 100 г -->
              <div class="cart-item" data-item-id="item-2">
                <div class="cart-item-info-group">
                  <div class="cart-item-thumb-box">
                    <img
                      class="cart-item-img"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8q45oGzeusIXQu3CITB-RGHzv2UsHPZaYRSdK2Ix8iPwhm_x64f8nU-oiYfDihynkvsTX2BnGKUSfRWm4xBTMJ_ExmEtck83VIxBwLe7DUwmxcfTBWG--8aAodOhjfEsNytzNpQO64zy8FDIUcn1lXjXiQaKDyNSJlw_YSowfK4FcsUIMobdK1QVBKWJ7YajYJj182T5QnWKCnUz8ytevk-SI8vqAEuAm2g4QrgaXEZW7i9KrdTMH"
                      alt="Утиные медальоны 100 г"
                    />
                    <span class="cart-item-badge" style="background:var(--color-secondary); color:var(--color-on-secondary)">2 шт</span>
                  </div>
                  <div style="display:flex; flex-direction:column">
                    <span style="font-size:11px; font-weight:700; color:var(--color-primary); text-transform:uppercase">Лакомства</span>
                    <h3 style="font-size:15px; font-weight:700; color:var(--color-on-surface); margin:2px 0">Деревенские лакомства Утиные медальоны 100 г</h3>
                    <span style="font-size:13px; color:var(--color-on-surface-variant)">Натуральное сушеное мясо утки без красителей</span>
                    <div style="display:flex; gap:12px; margin-top:6px">
                      <button class="btn-item-action" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">favorite</span>
                        <span>В избранное</span>
                      </button>
                      <button class="btn-remove-item" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">close</span>
                        <span>Удалить</span>
                      </button>
                    </div>
                  </div>
                </div>

                <div style="display:flex; align-items:center; gap:20px">
                  <div style="display:flex; align-items:center; background:var(--color-surface-container); border-radius:9999px; padding:3px">
                    <button class="btn-qty-minus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">remove</span>
                    </button>
                    <span class="cart-qty-val" style="width:32px; text-align:center; font-weight:700">2</span>
                    <button class="btn-qty-plus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">add</span>
                    </button>
                  </div>
                  <div style="text-align:right; min-width:100px">
                    <div class="cart-item-total" style="font-size:20px; font-weight:800; color:var(--color-on-surface)">4 800 ₸</div>
                    <div style="font-size:12px; color:var(--color-on-surface-variant)">2 400 ₸ × 2 шт</div>
                  </div>
                </div>
              </div>

              <!-- Товар 3: Игрушка Kong Classic L -->
              <div class="cart-item" data-item-id="item-3">
                <div class="cart-item-info-group">
                  <div class="cart-item-thumb-box">
                    <img
                      class="cart-item-img"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzg3RJK4NhcUxw7l0r-VGqHT8al8Vj7Ya3l60cib8moFBl2bUtoXqAZjS4ezWkPow4s_BVczs0hV9gphkaxnBkBLsDtdhYnxhvonsm3N30UcqO1Agk69Yx3xmH3AxfTQH4y2XnNmKwSyebR4kXdRntdy-ev_u3cAl_OL6_DdV02hYljj0LzDogELCQodPHADSqMwI2Bsx7E4TT-9b_0eYqSndTjJuUcFdfG8TMz1m1Uw4nh1ko0n-Z"
                      alt="Игрушка Kong Classic L"
                    />
                  </div>
                  <div style="display:flex; flex-direction:column">
                    <span style="font-size:11px; font-weight:700; color:var(--color-tertiary); text-transform:uppercase">Игрушки и амуниция</span>
                    <h3 style="font-size:15px; font-weight:700; color:var(--color-on-surface); margin:2px 0">Игрушка для собак Kong Classic размер L</h3>
                    <span style="font-size:13px; color:var(--color-on-surface-variant)">Сверхпрочный каучук под лакомства для активных игр</span>
                    <div style="display:flex; gap:12px; margin-top:6px">
                      <button class="btn-item-action" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">favorite</span>
                        <span>В избранное</span>
                      </button>
                      <button class="btn-remove-item" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">close</span>
                        <span>Удалить</span>
                      </button>
                    </div>
                  </div>
                </div>

                <div style="display:flex; align-items:center; gap:20px">
                  <div style="display:flex; align-items:center; background:var(--color-surface-container); border-radius:9999px; padding:3px">
                    <button class="btn-qty-minus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">remove</span>
                    </button>
                    <span class="cart-qty-val" style="width:32px; text-align:center; font-weight:700">1</span>
                    <button class="btn-qty-plus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">add</span>
                    </button>
                  </div>
                  <div style="text-align:right; min-width:100px">
                    <div class="cart-item-total" style="font-size:20px; font-weight:800; color:var(--color-on-surface)">6 600 ₸</div>
                    <div style="font-size:12px; color:var(--color-secondary); font-weight:600">В наличии 14 шт</div>
                  </div>
                </div>
              </div>

              <!-- Товар 4: Шампунь с хлоргексидином 4% -->
              <div class="cart-item" data-item-id="item-4">
                <div class="cart-item-info-group">
                  <div class="cart-item-thumb-box">
                    <img
                      class="cart-item-img"
                      src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIDssmHyboDQEBGGJqT4FEK-fznHBunyRQRpjPyohsfgt66Qk2uEkxbL4aGXw8rgN4z9Z61HMcOwlIlFe252u1UtSdRD2hFWi-HyfUDFuRNvEo1GSa23IVDYpZHE6tZ7w-BXHdUxr2TVx5VHAc0bk1vOEmA2YAegBPNbSIwN5gZumeWVK_k_PXMcNF_hGYHuDxJC-pfbqKA6i4wv7rUm_PvSzOl59j3NBvU5XucXBa1XKjCkRgSWDy"
                      alt="Шампунь с хлоргексидином 4%"
                    />
                    <span class="cart-item-badge" style="background:var(--color-tertiary); color:var(--color-on-tertiary)">Ветаптека</span>
                  </div>
                  <div style="display:flex; flex-direction:column">
                    <span style="font-size:11px; font-weight:700; color:var(--color-tertiary); text-transform:uppercase">Уход и гигиена</span>
                    <h3 style="font-size:15px; font-weight:700; color:var(--color-on-surface); margin:2px 0">Шампунь с хлоргексидином 4% для собак и кошек 250 мл</h3>
                    <span style="font-size:13px; color:var(--color-on-surface-variant)">Лечебно-профилактический при дерматитах и зуде</span>
                    <div style="display:flex; gap:12px; margin-top:6px">
                      <button class="btn-item-action" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">favorite</span>
                        <span>В избранное</span>
                      </button>
                      <button class="btn-remove-item" type="button" style="background:none; border:none; color:var(--color-outline); font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                        <span class="material-symbols-outlined" style="font-size:16px">close</span>
                        <span>Удалить</span>
                      </button>
                    </div>
                  </div>
                </div>

                <div style="display:flex; align-items:center; gap:20px">
                  <div style="display:flex; align-items:center; background:var(--color-surface-container); border-radius:9999px; padding:3px">
                    <button class="btn-qty-minus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">remove</span>
                    </button>
                    <span class="cart-qty-val" style="width:32px; text-align:center; font-weight:700">1</span>
                    <button class="btn-qty-plus" type="button" style="width:28px; height:28px; border-radius:50%; border:none; background:#fff; cursor:pointer; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:16px">add</span>
                    </button>
                  </div>
                  <div style="text-align:right; min-width:100px">
                    <div class="cart-item-total" style="font-size:20px; font-weight:800; color:var(--color-on-surface)">6 800 ₸</div>
                    <div style="font-size:12px; color:var(--color-tertiary); font-weight:600">Рецепт не требуется</div>
                  </div>
                </div>
              </div>

              <!-- Бесплатный подарок -->
              <div style="margin-top:20px; padding:16px; border-radius:16px; background:rgba(255,219,200,0.35); display:flex; align-items:center; justify-content:space-between; gap:16px">
                <div style="display:flex; align-items:center; gap:14px">
                  <div style="width:48px; height:48px; border-radius:12px; background:var(--color-primary); color:#fff; display:flex; align-items:center; justify-content:center; flex-shrink:0">
                    <span class="material-symbols-outlined" style="font-size:24px">card_giftcard</span>
                  </div>
                  <div style="display:flex; flex-direction:column">
                    <div style="display:flex; align-items:center; gap:8px">
                      <span style="font-weight:700; color:var(--color-on-surface); font-size:14px">Подарок к вашему заказу от шеф-повара!</span>
                      <span style="background:var(--color-primary); color:#fff; font-size:10px; font-weight:700; padding:2px 8px; border-radius:9999px">Акция 0 ₸</span>
                    </div>
                    <span style="font-size:13px; color:var(--color-on-surface-variant)">🎁 Пауч мясных консервов для собаки (телятина с тыквой, 85 г)</span>
                  </div>
                </div>
                <span style="font-size:16px; font-weight:700; color:var(--color-secondary)">0 ₸</span>
              </div>

            </div>

            <!-- 2. Секция: Способ получения заказа -->
            <div class="cart-card">
              <div style="display:flex; align-items:center; gap:10px; margin-bottom:16px">
                <div style="width:32px; height:32px; border-radius:50%; background:var(--color-primary-fixed); color:var(--color-primary); display:flex; align-items:center; justify-content:center; font-weight:700">1</div>
                <h2 class="cart-card-title">Способ получения заказа</h2>
              </div>

              <!-- Переключатели способов доставки -->
              <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:12px; margin-bottom:20px" id="deliveryTabs">
                <!-- Вариант 1: Курьер -->
                <label class="delivery-option is-active" style="padding:16px; border-radius:16px; border:2px solid var(--color-primary); background:rgba(255,219,200,0.25); cursor:pointer; display:flex; flex-direction:column; justify-content:space-between">
                  <input type="radio" name="deliveryMethod" value="courier" checked style="display:none"/>
                  <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:12px">
                    <div style="width:40px; height:40px; border-radius:10px; background:var(--color-primary-container); color:#fff; display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:22px">local_shipping</span>
                    </div>
                    <span style="background:var(--color-secondary); color:#fff; font-size:11px; font-weight:700; padding:2px 8px; border-radius:9999px">0 ₸</span>
                  </div>
                  <div>
                    <span style="font-weight:700; color:var(--color-on-surface); font-size:16px; display:block">Курьер до двери</span>
                    <span style="font-size:13px; color:var(--color-on-surface-variant); display:block; margin-top:4px">Алматы и пригород, бесконтактно с подъемом на этаж</span>
                  </div>
                </label>

                <!-- Вариант 2: Самовывоз -->
                <label class="delivery-option" style="padding:16px; border-radius:16px; border:1px solid rgba(225,226,230,0.8); background:var(--color-surface-container-low); cursor:pointer; display:flex; flex-direction:column; justify-content:space-between">
                  <input type="radio" name="deliveryMethod" value="pickup" style="display:none"/>
                  <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:12px">
                    <div style="width:40px; height:40px; border-radius:10px; background:var(--color-surface-container-high); color:var(--color-on-surface); display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:22px">storefront</span>
                    </div>
                    <span style="background:var(--color-secondary-container); color:var(--color-on-secondary-container); font-size:11px; font-weight:700; padding:2px 8px; border-radius:9999px">через 30 мин</span>
                  </div>
                  <div>
                    <span style="font-weight:700; color:var(--color-on-surface); font-size:16px; display:block">Самовывоз</span>
                    <span style="font-size:13px; color:var(--color-on-surface-variant); display:block; margin-top:4px">ул. Сейфуллина, 521 (парковка для клиентов)</span>
                  </div>
                </label>

                <!-- Вариант 3: Постамат -->
                <label class="delivery-option" style="padding:16px; border-radius:16px; border:1px solid rgba(225,226,230,0.8); background:var(--color-surface-container-low); cursor:pointer; display:flex; flex-direction:column; justify-content:space-between">
                  <input type="radio" name="deliveryMethod" value="postomat" style="display:none"/>
                  <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:12px">
                    <div style="width:40px; height:40px; border-radius:10px; background:var(--color-surface-container-high); color:var(--color-on-surface); display:flex; align-items:center; justify-content:center">
                      <span class="material-symbols-outlined" style="font-size:22px">inbox</span>
                    </div>
                    <span style="background:var(--color-primary-fixed); color:var(--color-on-primary-fixed); font-size:11px; font-weight:700; padding:2px 8px; border-radius:9999px">Kaspi Postomat</span>
                  </div>
                  <div>
                    <span style="font-weight:700; color:var(--color-on-surface); font-size:16px; display:block">Постамат</span>
                    <span style="font-size:13px; color:var(--color-on-surface-variant); display:block; margin-top:4px">Более 140 точек самообслуживания 24/7</span>
                  </div>
                </label>
              </div>

              <!-- Поля адреса -->
              <div style="background:var(--color-surface-container-low); padding:20px; border-radius:16px; display:flex; flex-direction:column; gap:16px">
                <div style="display:flex; justify-content:space-between; align-items:center">
                  <span style="font-weight:700; color:var(--color-on-surface); font-size:14px">Адрес доставки в г. Алматы</span>
                  <button type="button" style="background:none; border:none; color:var(--color-primary); font-size:13px; font-weight:600; cursor:pointer; display:inline-flex; align-items:center; gap:4px">
                    <span class="material-symbols-outlined" style="font-size:16px">my_location</span>
                    <span>Определить на карте</span>
                  </button>
                </div>

                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:12px">
                  <div>
                    <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:4px">Город</label>
                    <select style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; font-weight:600">
                      <option selected>Алматы</option>
                      <option>Астана</option>
                      <option>Шымкент</option>
                      <option>Караганда</option>
                    </select>
                  </div>
                  <div style="grid-column: span 2">
                    <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:4px">Улица / Микрорайон *</label>
                    <input type="text" value="проспект Достык" style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box"/>
                  </div>
                </div>

                <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:12px">
                  <div>
                    <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:4px">Дом *</label>
                    <input type="text" value="180" style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box"/>
                  </div>
                  <div>
                    <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:4px">Подъезд</label>
                    <input type="text" value="2" style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box"/>
                  </div>
                  <div>
                    <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:4px">Этаж</label>
                    <input type="text" value="6" style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box"/>
                  </div>
                  <div>
                    <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:4px">Кв. / Офис</label>
                    <input type="text" value="48" style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box"/>
                  </div>
                </div>

                <!-- Слоты времени -->
                <div>
                  <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:6px">Удобное время доставки</label>
                  <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:10px">
                    <button class="time-slot is-selected" type="button" style="padding:10px 14px; border-radius:12px; border:1px solid var(--color-primary); background:rgba(255,219,200,0.4); font-family:inherit; font-size:13px; font-weight:700; cursor:pointer; display:flex; justify-content:space-between; align-items:center">
                      <span>Сегодня, 18:00 - 21:00</span>
                      <span class="material-symbols-outlined" style="font-size:18px; color:var(--color-primary)">check_circle</span>
                    </button>
                    <button class="time-slot" type="button" style="padding:10px 14px; border-radius:12px; border:1px solid rgba(225,226,230,0.8); background:#fff; font-family:inherit; font-size:13px; cursor:pointer; display:flex; justify-content:space-between; align-items:center">
                      <span>Завтра, 10:00 - 14:00</span>
                    </button>
                    <button class="time-slot" type="button" style="padding:10px 14px; border-radius:12px; border:1px solid rgba(225,226,230,0.8); background:#fff; font-family:inherit; font-size:13px; cursor:pointer; display:flex; justify-content:space-between; align-items:center">
                      <span>Завтра, 14:00 - 18:00</span>
                    </button>
                  </div>
                </div>

                <!-- Комментарий -->
                <div>
                  <label style="display:block; font-size:13px; color:var(--color-on-surface-variant); margin-bottom:4px">Комментарий курьеру</label>
                  <input type="text" value="Позвоните перед дверью, собака может лаять. Домофон 48В." style="width:100%; padding:12px; border-radius:12px; border:1px solid rgba(140,114,99,0.2); background:#fff; font-family:inherit; box-sizing:border-box"/>
                </div>
              </div>
            </div>

            <!-- 3. Секция: Способ оплаты -->
            <div class="cart-card">
              <div style="display:flex; align-items:center; gap:10px; margin-bottom:16px">
                <div style="width:32px; height:32px; border-radius:50%; background:var(--color-primary-fixed); color:var(--color-primary); display:flex; align-items:center; justify-content:center; font-weight:700">2</div>
                <h2 class="cart-card-title">Способ оплаты</h2>
              </div>

              <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:12px">
                <!-- Kaspi Pay / QR -->
                <label class="payment-option is-active" style="padding:16px; border-radius:16px; border:2px solid var(--color-primary); background:rgba(255,219,200,0.25); cursor:pointer; display:flex; flex-direction:column; justify-content:space-between">
                  <input type="radio" name="paymentMethod" value="kaspi" checked style="display:none"/>
                  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px">
                    <div style="display:flex; align-items:center; gap:10px">
                      <div style="width:36px; height:36px; border-radius:10px; background:var(--color-error); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:14px">K</div>
                      <div>
                        <span style="font-weight:700; color:var(--color-on-surface); font-size:15px; display:block">Kaspi Pay / Kaspi QR</span>
                        <span style="font-size:12px; color:var(--color-secondary); font-weight:600">Моментально без комиссии</span>
                      </div>
                    </div>
                    <span class="material-symbols-outlined" style="color:var(--color-primary); font-size:20px">radio_button_checked</span>
                  </div>
                  <p style="font-size:13px; color:var(--color-on-surface-variant); margin:0">Откроем QR-код для сканирования или мгновенный счет в Kaspi.kz</p>
                </label>

                <!-- Kaspi Red -->
                <label class="payment-option" style="padding:16px; border-radius:16px; border:1px solid rgba(225,226,230,0.8); background:var(--color-surface-container-low); cursor:pointer; display:flex; flex-direction:column; justify-content:space-between">
                  <input type="radio" name="paymentMethod" value="kaspired" style="display:none"/>
                  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px">
                    <div style="display:flex; align-items:center; gap:10px">
                      <div style="width:36px; height:36px; border-radius:10px; background:var(--color-error); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:11px">RED</div>
                      <div>
                        <span style="font-weight:700; color:var(--color-on-surface); font-size:15px; display:block">Kaspi Red (Рассрочка)</span>
                        <span style="font-size:12px; color:var(--color-primary); font-weight:700">3 месяца по 18 555 ₸/мес</span>
                      </div>
                    </div>
                    <span class="material-symbols-outlined" style="color:var(--color-outline); font-size:20px">radio_button_unchecked</span>
                  </div>
                  <p style="font-size:13px; color:var(--color-on-surface-variant); margin:0">0% переплаты, 0% первого взноса. 3 равных платежа</p>
                </label>

                <!-- Банковская карта -->
                <label class="payment-option" style="padding:16px; border-radius:16px; border:1px solid rgba(225,226,230,0.8); background:var(--color-surface-container-low); cursor:pointer; display:flex; flex-direction:column; justify-content:space-between">
                  <input type="radio" name="paymentMethod" value="card" style="display:none"/>
                  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px">
                    <div style="display:flex; align-items:center; gap:10px">
                      <div style="width:36px; height:36px; border-radius:10px; background:var(--color-surface-container-high); color:var(--color-on-surface); display:flex; align-items:center; justify-content:center">
                        <span class="material-symbols-outlined" style="font-size:20px">credit_card</span>
                      </div>
                      <div>
                        <span style="font-weight:700; color:var(--color-on-surface); font-size:15px; display:block">Банковская карта</span>
                        <span style="font-size:12px; color:var(--color-on-surface-variant)">Visa, MasterCard, Halyk</span>
                      </div>
                    </div>
                    <span class="material-symbols-outlined" style="color:var(--color-outline); font-size:20px">radio_button_unchecked</span>
                  </div>
                  <p style="font-size:13px; color:var(--color-on-surface-variant); margin:0">Безопасная оплата через 3D-Secure любого казахстанского банка</p>
                </label>

                <!-- При получении -->
                <label class="payment-option" style="padding:16px; border-radius:16px; border:1px solid rgba(225,226,230,0.8); background:var(--color-surface-container-low); cursor:pointer; display:flex; flex-direction:column; justify-content:space-between">
                  <input type="radio" name="paymentMethod" value="cash" style="display:none"/>
                  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px">
                    <div style="display:flex; align-items:center; gap:10px">
                      <div style="width:36px; height:36px; border-radius:10px; background:var(--color-surface-container-high); color:var(--color-on-surface); display:flex; align-items:center; justify-content:center">
                        <span class="material-symbols-outlined" style="font-size:20px">payments</span>
                      </div>
                      <div>
                        <span style="font-weight:700; color:var(--color-on-surface); font-size:15px; display:block">При получении</span>
                        <span style="font-size:12px; color:var(--color-on-surface-variant)">Картой или наличными</span>
                      </div>
                    </div>
                    <span class="material-symbols-outlined" style="color:var(--color-outline); font-size:20px">radio_button_unchecked</span>
                  </div>
                  <p style="font-size:13px; color:var(--color-on-surface-variant); margin:0">Курьер прибудет с мобильным POS-терминалом и фискальным чеком</p>
                </label>
              </div>
            </div>

          </div>

          <!-- ПРАВАЯ КОЛОНКА: Итоговый расчет заказа (Sticky) -->
          <div style="position:sticky; top:190px; display:flex; flex-direction:column; gap:16px">

            <div class="cart-card">
              <h2 style="font-size:20px; font-weight:800; color:var(--color-on-surface); margin:0 0 16px">Ваш заказ</h2>

              <!-- Промокод -->
              <div style="margin-bottom:16px">
                <div style="display:flex; gap:6px">
                  <input
                    type="text"
                    id="promoInput"
                    placeholder="Промокод (PETLOVE2025)"
                    value="PETLOVE2025"
                    style="flex:1; padding:10px 14px; border-radius:12px; border:1px solid rgba(140,114,99,0.25); background:var(--color-surface-container-low); font-family:inherit; font-size:13px"
                  />
                  <button
                    type="button"
                    id="btnApplyPromo"
                    style="padding:10px 16px; border-radius:12px; border:none; background:var(--color-surface-container-high); color:var(--color-on-surface); font-weight:700; cursor:pointer; font-family:inherit; font-size:13px"
                  >
                    Применить
                  </button>
                </div>
                <span style="font-size:11px; color:var(--color-secondary); font-weight:700; margin-top:4px; display:block">✓ Промокод применен: скидка 2 000 ₸</span>
              </div>

              <!-- Строки расчета -->
              <div style="display:flex; flex-direction:column; gap:10px; padding:16px 0; border-top:1px solid var(--color-surface-container-high); border-bottom:1px solid var(--color-surface-container-high); font-size:14px">
                <div style="display:flex; justify-content:space-between">
                  <span style="color:var(--color-on-surface-variant)">Товары (4 шт)</span>
                  <span style="font-weight:700" id="summaryItemsTotal">60 700 ₸</span>
                </div>
                <div style="display:flex; justify-content:space-between">
                  <span style="color:var(--color-on-surface-variant)">Скидка постоянного покупателя</span>
                  <span style="font-weight:700; color:var(--color-secondary)">-3 035 ₸</span>
                </div>
                <div style="display:flex; justify-content:space-between">
                  <span style="color:var(--color-on-surface-variant)">Промокод</span>
                  <span style="font-weight:700; color:var(--color-secondary)" id="summaryDiscount">-2 000 ₸</span>
                </div>
                <div style="display:flex; justify-content:space-between">
                  <span style="color:var(--color-on-surface-variant)">Курьерская доставка</span>
                  <span style="font-weight:700; color:var(--color-secondary)" id="summaryDeliveryCost">Бесплатно (0 ₸)</span>
                </div>
              </div>

              <!-- Итоговая сумма -->
              <div style="display:flex; justify-content:space-between; align-items:baseline; margin:16px 0">
                <span style="font-size:16px; font-weight:700; color:var(--color-on-surface)">Итого к оплате:</span>
                <span style="font-size:28px; font-weight:800; color:var(--color-primary)" id="summaryFinalTotal">55 665 ₸</span>
              </div>

              <!-- Начисление бонусов -->
              <div style="display:flex; align-items:center; gap:8px; padding:10px 14px; border-radius:12px; background:rgba(147,244,172,0.45); color:var(--color-on-secondary-container); font-size:13px; font-weight:600; margin-bottom:16px">
                <span class="material-symbols-outlined" style="font-size:18px; color:var(--color-secondary)">stars</span>
                <span id="summaryBonus">+1 669 бонусов вернется на ваш счет Пушистики.Club</span>
              </div>

              <!-- Большая кнопка оплаты -->
              <button
                type="button"
                id="btnCheckout"
                style="width:100%; padding:16px; border-radius:16px; border:none; background:var(--color-primary); color:#fff; font-size:18px; font-weight:800; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:8px; box-shadow:0 8px 24px rgba(255,122,0,0.35); font-family:inherit; transition:background 0.2s, transform 0.1s"
              >
                <span class="material-symbols-outlined" style="font-size:22px">lock</span>
                <span>Подтвердить и оплатить 55 665 ₸</span>
              </button>

              <p style="font-size:12px; text-align:center; color:var(--color-on-surface-variant); margin:12px 0 0; line-height:1.4">
                Нажимая кнопку, вы соглашаетесь с <a href="#" style="color:var(--color-primary); text-decoration:underline">условиями публичной оферты</a> и правилами программы лояльности.
              </p>

              <!-- Значки безопасности -->
              <div style="display:flex; justify-content:center; gap:16px; margin-top:16px; font-size:11px; color:var(--color-outline)">
                <div style="display:flex; align-items:center; gap:4px">
                  <span class="material-symbols-outlined" style="font-size:16px; color:var(--color-secondary)">verified_user</span>
                  <span>Kaspi Pay</span>
                </div>
                <div style="display:flex; align-items:center; gap:4px">
                  <span class="material-symbols-outlined" style="font-size:16px; color:var(--color-tertiary)">health_and_safety</span>
                  <span>Ветконтроль</span>
                </div>
                <div style="display:flex; align-items:center; gap:4px">
                  <span class="material-symbols-outlined" style="font-size:16px; color:var(--color-primary)">published_with_changes</span>
                  <span>14 дней возврат</span>
                </div>
              </div>
            </div>

            <!-- Мини-карточка консультации -->
            <div style="background:var(--color-surface-container-low); padding:16px; border-radius:16px; display:flex; align-items:center; justify-content:space-between">
              <div style="display:flex; align-items:center; gap:10px">
                <div style="width:36px; height:36px; border-radius:50%; background:#fff; color:var(--color-primary); display:flex; align-items:center; justify-content:center">
                  <span class="material-symbols-outlined" style="font-size:20px">support_agent</span>
                </div>
                <div>
                  <span style="font-size:13px; font-weight:700; color:var(--color-on-surface); display:block">Нужна консультация?</span>
                  <span style="font-size:11px; color:var(--color-on-surface-variant)">Ветеринар подскажет дозировку</span>
                </div>
              </div>
              <a href="https://wa.me/77475932055" target="_blank" style="padding:6px 14px; border-radius:9999px; background:#fff; color:var(--color-on-surface); font-size:12px; font-weight:600; text-decoration:none; box-shadow:0 1px 3px rgba(0,0,0,0.08)">
                WhatsApp
              </a>
            </div>

          </div>

        </div>

      </div>
    </div>
  </main>

  <!-- ========== ПОДВАЛ САЙТА (FOOTER) ========== -->
  <?php include 'components/footer.php'; ?>

  <!-- Клиентский скрипт корзины -->
  <script src="app.js"></script>
</body>
</html>