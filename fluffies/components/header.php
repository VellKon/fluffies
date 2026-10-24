<header class="site-header">
  <div class="header-inner">

    <!-- Верхняя часть шапки -->
    <div class="header-topbar">
      <div class="topbar-left">
        <div class="location-selector">
          <span class="material-symbols-outlined icon-primary" style="font-size:18px">location_on</span>
          <span class="location-name">Алматы</span>
          <span class="material-symbols-outlined" style="font-size:16px">expand_more</span>
        </div>
      </div>
      <div class="free-shipping">
        <span class="material-symbols-outlined" style="font-size:18px">local_shipping</span>
        <span>Бесплатная доставка от 7 000 ₸ по Казахстану</span>
      </div>
      <div class="topbar-right">
        <div class="topbar-schedule">
          <span class="material-symbols-outlined icon-tertiary" style="font-size:16px">schedule</span>
          <span>+7 (727) 355-88-22 • Ежедневно 09:00 - 22:00</span>
        </div>
      </div>
    </div>

    <!-- Средняя часть шапки -->
    <div class="header-main">
      <div class="logo-area">
        <a class="logo-link" href="index.php" data-path="catalog-home">
          <div class="logo-icon-wrap">
            <img src="svg/fluffies-logo.svg" alt="Пушистики"/>
          </div>
          <div class="logo-text-wrap">
            <span class="logo-name">Пушистики</span>
            <span class="logo-sub">ZOO-магазин</span>
          </div>
        </a>
      </div>

      <div class="search-area">
        <div class="search-wrap">
          <span class="material-symbols-outlined search-icon">search</span>
          <input
            class="search-input"
            type="text"
            placeholder="Поиск по сайту - сухой корм, лакомства..."
          />
          <button class="search-btn">Найти</button>
        </div>
      </div>

      <div class="header-actions">
        <div class="action-icons">
          <a class="icon-btn" href="fluffies-user-page.php" data-path="favorites" title="Избранное">
            <span class="material-symbols-outlined" style="font-size:24px">favorite</span>
            <span class="icon-badge">3</span>
          </a>
          <a class="icon-btn" href="fluffies-user-page.php" data-path="orders" title="Мои заказы">
            <span class="material-symbols-outlined" style="font-size:24px">package_2</span>
          </a>
          <a class="cart-btn" href="fluffies_cart.php" data-path="cart">
            <div class="cart-icon-wrap">
              <span class="material-symbols-outlined" style="font-size:22px">shopping_bag</span>
              <span class="cart-badge">4</span>
            </div>
            <div class="cart-info">
              <span class="cart-label">Корзина</span>
              <span class="cart-price">18 067 ₸</span>
            </div>
          </a>
        </div>

        <a class="user-area" href="fluffies-user-page.php">
          <img class="user-avatar" src="images/userLogo.png" alt="Profile"/>
          <div class="user-info">
            <span class="user-name">Ева</span>
            <span class="user-bonus">1 240 бонусов</span>
          </div>
        </a>
      </div>
    </div>

    <!-- Нижняя часть шапки -->
    <nav class="header-nav" data-active-classes="text-primary font-bold">
      <a href="fluffies_dog_catalog.php" data-path="dogs-catalog">🐶 Собаки</a>
      <a href="fluffies_cat_catalog.php" data-path="cats-catalog">🐱 Кошки</a>
      <a href="#" data-path="birds-catalog">🦜 Птицы</a>
      <a href="#" data-path="rodents-catalog">🐹 Грызуны</a>
      <a href="#" data-path="aquarium-catalog">🐠 Аквариумистика</a>
      <a href="fluffies_FAQ.php" data-path="vet-pharmacy">💊 Ветаптека</a>
      <a href="fluffies_dog_catalog.php" data-path="discounts-promotions">🏷️ Акции и Скидки</a>
      <a href="fluffies-user-page.php" data-path="auto-replenishment">🔄 Автодоставка -15%</a>
    </nav>

  </div>
</header>