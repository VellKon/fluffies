# Техническое задание (ТЗ) на разработку интернет-магазина «Пушистики»
## Для GoLang (Backend) и JavaScript (Frontend) разработчиков

---

## 1. Введение и цели проекта

### 1.1. О проекте
**«Пушистики»** — современный ZOO-гипермаркет в Казахстане (Алматы, Астана и регионы), специализирующийся на продаже премиальных и холистик-кормов, ветеринарных диет, лакомств, средств ухода и аксессуаров для домашних питомцев.

### 1.2. Текущее состояние
В данный момент интерфейс сверстан в виде статических HTML/CSS/JS страниц с демонстрационными данными (хардкод):
1. `code.html` — Главная страница (витрина, подбор питомца, акции, калькулятор рациона, отзывы, преимущества).
2. `fluffies_cat_catalog/code.html` — Каталог товаров для кошек с боковой панелью фильтрации.
3. `fluffies_dog_catalog/dog_catalog.html` — Каталог товаров для собак с расширенными фильтрами.
4. `fluffies_product_cart/code.html` — Карточка товара (выбор фасовки, автодоставка -15%, расчет суточной нормы, отзывы, сопутствующие товары).
5. `fluffies_cart/fluffies_cart.html` — Корзина и страница оформления заказа (выбор доставки, слотов времени, Kaspi QR / Kaspi Red, списание бонусов).
6. `fluffies_user_page/code.html` — Личный кабинет пользователя (история заказов, профили питомцев, управление автодоставкой, бонусы, адреса, безопасность).
7. `fluffies_registration/fluffies_registration.html` — Авторизация и регистрация (по телефону/email, онбординг питомца, Kaspi ID).
8. `fluffies_FAQ/fluffies_FAQ.html` — База знаний и часто задаваемые вопросы (поиск по вопросам, фильтрация по категориям, аккордеон).
9. `fluffies_404/fluffies_404.html` — Страница 404 с умным поиском и подборкой популярных товаров.

### 1.3. Главная цель
Перевести проект со статического хардкода на **полноценную динамическую клиент-серверную архитектуру**, где:
- Все данные (товары, остатки, цены, заказы, профили питомцев, бонусы, график автодоставки) хранятся в реляционной СУБД **PostgreSQL**.
- Бизнес-логика, авторизация, валидация и интеграция с платежными шлюзами (Kaspi Pay/QR) реализуются на **GoLang**.
- Клиентский код (**JavaScript**) динамически запрашивает данные по REST API / WebSocket, управляет состоянием приложения, корзиной и реактивным обновлением интерфейса.

---

## 2. Архитектура системы

```
┌─────────────────────────────────────────────────────────────────┐
│                      Frontend (Клиент)                          │
│   HTML5 + Vanilla JS (ES6+) Модули + CSS Custom Properties     │
│   (State Store, API Client, LocalStorage, Reactive UI)          │
└─────────────────────────────────┬───────────────────────────────┘
                                  │ HTTPS / REST API / WSS
                                  ▼
┌─────────────────────────────────────────────────────────────────┐
│                     Nginx / Caddy (Gateway)                     │
│        Раздача статики, SSL/TLS, Rate Limiting, CORS            │
└─────────────────────────────────┬───────────────────────────────┘
                                  │ Reverse Proxy :8080
                                  ▼
┌─────────────────────────────────────────────────────────────────┐
│                    Go Backend (RESTful API)                     │
│  - Transport Layer: HTTP Handlers (Chi / Gin)                   │
│  - Middleware: JWT Auth, CORS, Logger, Recover, RateLimiter     │
│  - Service / Business Logic Layer (Clean Architecture)          │
│  - Repository Layer (pgx / sqlx)                                │
└───────────────┬─────────────────────────────────┬───────────────┘
                │                                 │
                ▼                                 ▼
┌───────────────────────────────┐ ┌───────────────────────────────┐
│       PostgreSQL 16+          │ │         Redis 7+              │
│  Основная реляционная БД      │ │  Кеш каталога, сессии,        │
│  ACID, Full-Text Search       │ │  Idempotency keys, SMS rate   │
└───────────────────────────────┘ └───────────────────────────────┘
                │
                ▼
┌─────────────────────────────────────────────────────────────────┐
│                   Внешние интеграции                            │
│  - Kaspi Pay & Kaspi QR API (создание платежей, webhook колбэки)│
│  - SMS-шлюз (Mobizon / SMS.ru) для OTP-кодов                    │
│  - Служба курьерской доставки (Yandex Delivery API / СДЭК)      │
└─────────────────────────────────────────────────────────────────┘
```

---

## 3. Модель базы данных (PostgreSQL)

### 3.1. Схема сущностей

```sql
-- ============================================================
-- 1. ПОЛЬЗОВАТЕЛИ И АУТЕНТИФИКАЦИЯ
-- ============================================================

CREATE TYPE user_role AS ENUM ('customer', 'manager', 'admin');

CREATE TABLE users (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    phone VARCHAR(20) UNIQUE,
    email VARCHAR(255) UNIQUE,
    password_hash VARCHAR(255),
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100),
    role user_role DEFAULT 'customer',
    bonus_balance INT DEFAULT 0 CHECK (bonus_balance >= 0),
    is_phone_verified BOOLEAN DEFAULT FALSE,
    is_email_verified BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW(),
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

CREATE TABLE user_addresses (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    user_id UUID NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    city VARCHAR(100) NOT NULL DEFAULT 'Алматы',
    street VARCHAR(255) NOT NULL,
    building VARCHAR(50) NOT NULL,
    apartment VARCHAR(50),
    entrance VARCHAR(20),
    floor VARCHAR(20),
    intercom VARCHAR(50),
    comment TEXT,
    is_default BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- ============================================================
-- 2. ПИТОМЦЫ ПОЛЬЗОВАТЕЛЕЙ (Для персонализации)
-- ============================================================

CREATE TYPE pet_kind AS ENUM ('dog', 'cat', 'bird', 'rodent', 'fish', 'other');
CREATE TYPE pet_gender AS ENUM ('male', 'female', 'unknown');

CREATE TABLE user_pets (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    user_id UUID NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    kind pet_kind NOT NULL,
    name VARCHAR(100) NOT NULL,
    breed VARCHAR(150),
    gender pet_gender DEFAULT 'unknown',
    birth_date DATE,
    weight_kg NUMERIC(5,2),
    is_sterilized BOOLEAN DEFAULT FALSE,
    special_needs TEXT[], -- например: ['чувствительное пищеварение', 'аллергия']
    avatar_url TEXT,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW(),
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- ============================================================
-- 3. КАТАЛОГ, БРЕНДЫ, ТОВАРЫ И ФАСОВКИ
-- ============================================================

CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    parent_id INT REFERENCES categories(id) ON DELETE SET NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    name VARCHAR(150) NOT NULL,
    description TEXT,
    pet_kind pet_kind, -- null для общих категорий
    image_url TEXT,
    sort_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE
);

CREATE TABLE brands (
    id SERIAL PRIMARY KEY,
    slug VARCHAR(100) UNIQUE NOT NULL,
    name VARCHAR(150) NOT NULL,
    country VARCHAR(100),
    logo_url TEXT,
    description TEXT,
    is_popular BOOLEAN DEFAULT FALSE
);

CREATE TABLE products (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    category_id INT NOT NULL REFERENCES categories(id),
    brand_id INT REFERENCES brands(id),
    sku VARCHAR(64) UNIQUE NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    subtitle VARCHAR(255),
    description TEXT NOT NULL,
    composition TEXT, -- состав ингредиентов
    analytical_constituents TEXT, -- белки, жиры, клетчатка
    feeding_guide TEXT, -- таблица кормления
    pet_kind pet_kind NOT NULL,
    life_stage VARCHAR(50), -- puppy, adult, senior, all_ages
    is_holistic BOOLEAN DEFAULT FALSE,
    is_veterinary BOOLEAN DEFAULT FALSE,
    is_bestseller BOOLEAN DEFAULT FALSE,
    is_new BOOLEAN DEFAULT FALSE,
    rating NUMERIC(3,2) DEFAULT 5.0,
    reviews_count INT DEFAULT 0,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW(),
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- Варианты фасовки (1 кг, 3 кг, 12 кг и т.д.)
CREATE TABLE product_variants (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    product_id UUID NOT NULL REFERENCES products(id) ON DELETE CASCADE,
    weight_label VARCHAR(50) NOT NULL, -- "1.5 кг", "12 кг", "100 г"
    weight_grams INT NOT NULL,
    price INT NOT NULL CHECK (price >= 0), -- цена в тенге
    old_price INT CHECK (old_price >= price),
    stock_quantity INT DEFAULT 0 CHECK (stock_quantity >= 0),
    sku_variant VARCHAR(64) UNIQUE,
    is_default BOOLEAN DEFAULT FALSE
);

CREATE TABLE product_images (
    id SERIAL PRIMARY KEY,
    product_id UUID NOT NULL REFERENCES products(id) ON DELETE CASCADE,
    image_url TEXT NOT NULL,
    alt_text VARCHAR(255),
    sort_order INT DEFAULT 0,
    is_primary BOOLEAN DEFAULT FALSE
);

-- ============================================================
-- 4. КОРЗИНА И ЗАКАЗЫ
-- ============================================================

CREATE TABLE carts (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    user_id UUID REFERENCES users(id) ON DELETE CASCADE,
    session_id VARCHAR(100), -- для неавторизованных пользователей
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW(),
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

CREATE TABLE cart_items (
    id SERIAL PRIMARY KEY,
    cart_id UUID NOT NULL REFERENCES carts(id) ON DELETE CASCADE,
    variant_id UUID NOT NULL REFERENCES product_variants(id) ON DELETE CASCADE,
    quantity INT NOT NULL DEFAULT 1 CHECK (quantity > 0),
    is_subscription BOOLEAN DEFAULT FALSE,
    subscription_interval_weeks INT DEFAULT 4,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW(),
    UNIQUE(cart_id, variant_id)
);

CREATE TYPE order_status AS ENUM (
    'created', 'pending_payment', 'paid', 'assembling', 
    'delivering', 'delivered', 'cancelled'
);

CREATE TYPE payment_method AS ENUM (
    'kaspi_qr', 'kaspi_red', 'card_online', 'card_on_delivery', 'cash'
);

CREATE TYPE delivery_method AS ENUM (
    'express_almaty_2h', 'standard_courier', 'pickup'
);

CREATE TABLE orders (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    order_number VARCHAR(32) UNIQUE NOT NULL, -- например "KZ-2025-8841"
    user_id UUID REFERENCES users(id) ON DELETE SET NULL,
    status order_status DEFAULT 'created',
    payment_method payment_method NOT NULL,
    is_paid BOOLEAN DEFAULT FALSE,
    delivery_method delivery_method NOT NULL,
    delivery_date DATE NOT NULL,
    delivery_time_slot VARCHAR(50), -- "10:00 - 14:00"
    delivery_address JSONB NOT NULL,
    customer_name VARCHAR(100) NOT NULL,
    customer_phone VARCHAR(20) NOT NULL,
    customer_email VARCHAR(255),
    items_total INT NOT NULL,
    discount_amount INT DEFAULT 0,
    bonuses_spent INT DEFAULT 0,
    delivery_cost INT DEFAULT 0,
    total_amount INT NOT NULL,
    bonuses_accrued INT DEFAULT 0,
    kaspi_transaction_id VARCHAR(100),
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW(),
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

CREATE TABLE order_items (
    id SERIAL PRIMARY KEY,
    order_id UUID NOT NULL REFERENCES orders(id) ON DELETE CASCADE,
    variant_id UUID REFERENCES product_variants(id) ON DELETE SET NULL,
    product_name VARCHAR(255) NOT NULL,
    variant_label VARCHAR(50) NOT NULL,
    unit_price INT NOT NULL,
    quantity INT NOT NULL CHECK (quantity > 0),
    total_price INT NOT NULL,
    is_subscription BOOLEAN DEFAULT FALSE
);

-- ============================================================
-- 5. АВТОДОСТАВКА (РЕГУЛЯРНАЯ ПОДПИСКА НА КОРМ)
-- ============================================================

CREATE TYPE subscription_status AS ENUM ('active', 'paused', 'cancelled');

CREATE TABLE subscriptions (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    user_id UUID NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    variant_id UUID NOT NULL REFERENCES product_variants(id),
    quantity INT DEFAULT 1,
    discount_percent INT DEFAULT 15,
    interval_weeks INT NOT NULL DEFAULT 4, -- 2, 4 или 6 недель
    next_delivery_date DATE NOT NULL,
    delivery_address_id UUID REFERENCES user_addresses(id),
    status subscription_status DEFAULT 'active',
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW(),
    updated_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- ============================================================
-- 6. БОНУСНАЯ ПРОГРАММА («Пушистики.Club»)
-- ============================================================

CREATE TYPE bonus_tx_type AS ENUM ('accrual', 'spending', 'expiration', 'welcome');

CREATE TABLE bonus_transactions (
    id SERIAL PRIMARY KEY,
    user_id UUID NOT NULL REFERENCES users(id) ON DELETE CASCADE,
    order_id UUID REFERENCES orders(id) ON DELETE SET NULL,
    type bonus_tx_type NOT NULL,
    amount INT NOT NULL, -- положительное или отрицательное
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT NOW()
);

-- ============================================================
-- 7. FAQ (БАЗА ЗНАНИЙ)
-- ============================================================

CREATE TABLE faq_categories (
    id SERIAL PRIMARY KEY,
    slug VARCHAR(64) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    sort_order INT DEFAULT 0
);

CREATE TABLE faq_items (
    id SERIAL PRIMARY KEY,
    category_id INT NOT NULL REFERENCES faq_categories(id) ON DELETE CASCADE,
    question TEXT NOT NULL,
    answer_html TEXT NOT NULL,
    keywords TEXT, -- для поиска
    sort_order INT DEFAULT 0,
    is_published BOOLEAN DEFAULT TRUE
);
```

---

## 4. Задание для GoLang разработчика (Backend)

### 4.1. Архитектурный паттерн
Проект должен быть построен по принципам **Clean Architecture** (чистая архитектура) со следующей структурой каталогов:

```
backend/
├── cmd/
│   └── api/
│       └── main.go                  # Точка входа в приложение
├── internal/
│   ├── config/                      # Чтение переменных окружения (.env)
│   ├── domain/                      # Доменные структуры и ошибки
│   │   ├── user.go
│   │   ├── product.go
│   │   ├── cart.go
│   │   ├── order.go
│   │   └── subscription.go
│   ├── repository/                  # Слой работы с БД (PostgreSQL / pgx)
│   │   ├── user_repo.go
│   │   ├── product_repo.go
│   │   ├── order_repo.go
│   │   └── subscription_repo.go
│   ├── service/                     # Бизнес-логика приложения
│   │   ├── auth_service.go
│   │   ├── catalog_service.go
│   │   ├── cart_service.go
│   │   ├── order_service.go
│   │   ├── kaspi_service.go
│   │   └── calculator_service.go
│   ├── handler/                     # HTTP Handlers (REST Controllers)
│   │   ├── auth_handler.go
│   │   ├── catalog_handler.go
│   │   ├── cart_handler.go
│   │   ├── order_handler.go
│   │   └── user_handler.go
│   └── middleware/                  # JWT auth, CORS, Rate Limiter, Logger
├── pkg/
│   ├── hasher/                      # bcrypt паролей
│   ├── jwt/                         # генерация и валидация JWT
│   └── validator/                   # проверка входных данных
├── migrations/                      # SQL миграции (golang-migrate)
├── go.mod
└── Dockerfile
```

### 4.2. Спецификация REST API эндпоинтов

#### 1. Аутентификация и пользователи (`/api/v1/auth`)
- `POST /api/v1/auth/register` — Регистрация по телефону или email.
  - *Body:* `{ "phone": "+77011234567", "email": "aigerim@mail.kz", "password": "...", "first_name": "Айгерим", "pet": { "name": "Макс", "kind": "dog" } }`
  - *Response:* `{ "token": "JWT_ACCESS", "refresh_token": "JWT_REFRESH", "user": { ... } }`
- `POST /api/v1/auth/login` — Вход по телефону/паролю или OTP-коду.
- `POST /api/v1/auth/refresh` — Обновление access-токена по refresh-токену.
- `GET /api/v1/users/me` — Профиль текущего пользователя (баланс бонусов, данные).
- `PUT /api/v1/users/me` — Обновление персональных данных.
- `GET /api/v1/users/me/pets` — Список питомцев текущего пользователя.
- `POST /api/v1/users/me/pets` — Добавление нового питомца.
- `PUT /api/v1/users/me/pets/:id` — Редактирование питомца (вес, порода, особенности).

#### 2. Каталог и товары (`/api/v1/catalog`)
- `GET /api/v1/catalog/categories` — Дерево категорий (собаки, кошки, птицы, грызуны, ветаптека).
- `GET /api/v1/catalog/products` — Получение списка товаров с пагинацией и фильтрами.
  - *Query параметры:*
    - `category`: slug категории (`dogs-catalog`, `cats-catalog`)
    - `pet_kind`: `dog`, `cat`, `bird`, `rodent`
    - `brand`: список ID или slug брендов (`grandorf`, `monge`)
    - `life_stage`: `puppy`, `adult`, `senior`
    - `is_holistic`: `true/false`
    - `min_price`, `max_price`
    - `sort`: `popular`, `price_asc`, `price_desc`, `rating`
    - `page`: номер страницы (по умолчанию 1)
    - `limit`: количество на странице (по умолчанию 12)
    - `search`: поисковая строка (Full-Text search по названию и описанию)
- `GET /api/v1/catalog/products/:slug` — Детальная информация о товаре, включая все варианты фасовок, фото, состав, отзывы.
- `GET /api/v1/catalog/bestsellers` — Хиты продаж для главной страницы и страницы 404.

#### 3. Калькулятор нормы кормления (`/api/v1/calculator`)
- `POST /api/v1/calculator/calculate` — Расчет суточной нормы и рекомендация рациона.
  - *Body:* `{ "pet_kind": "dog", "age_group": "adult", "weight_kg": 14, "activity": "normal" }`
  - *Response:*
    ```json
    {
      "daily_grams": 215,
      "feedings_per_day": 2,
      "recommended_product": {
        "id": "uuid",
        "name": "Grandorf 4 Meat Adult Medium",
        "duration_days": 56,
        "price": 42500
      }
    }
    ```

#### 4. Корзина (`/api/v1/cart`)
- `GET /api/v1/cart` — Получить текущую корзину (по токену или Session-ID cookie).
- `POST /api/v1/cart/items` — Добавить товар/фасовку в корзину.
- `PUT /api/v1/cart/items/:id` — Изменить количество товара.
- `DELETE /api/v1/cart/items/:id` — Удалить позицию.
- `POST /api/v1/cart/sync` — Синхронизация анонимной корзины при логине пользователя.

#### 5. Оформление заказов и Kaspi Pay (`/api/v1/orders`)
- `POST /api/v1/orders/checkout` — Создание заказа.
  - Автоматический расчет стоимости доставки: бесплатно от 7 000 ₸, экспресс — 1 200 ₸.
  - Списание бонусов (до 30% от суммы заказа).
  - Начисление кешбэка бонусами (до 5% от суммы).
- `POST /api/v1/orders/:id/kaspi-qr` — Генерация платежного QR-кода Kaspi.
  - Возвращает ссылку на Kaspi App и SVG/PNG QR-кода.
- `POST /api/v1/webhooks/kaspi` — Webhook от Kaspi о статусе оплаты. При подтверждении — перевод заказа в статус `paid`.
- `GET /api/v1/orders/my` — Список заказов авторизованного пользователя.

#### 6. Автодоставка («Умная забота») (`/api/v1/subscriptions`)
- `GET /api/v1/subscriptions` — Активные подписки пользователя.
- `POST /api/v1/subscriptions` — Оформление автодоставки со скидкой 15%.
- `PATCH /api/v1/subscriptions/:id/pause` — Приостановить подписку.
- `PATCH /api/v1/subscriptions/:id/resume` — Возобновить подписку.
- `DELETE /api/v1/subscriptions/:id` — Отменить автодоставку.

#### 7. FAQ (`/api/v1/faq`)
- `GET /api/v1/faq` — Список категорий и вопросов с фильтрацией по ключевым словам и поисковой строке.

---

## 5. Задание для JavaScript разработчика (Frontend)

### 5.1. Организация клиентского кода
Весь клиентский код должен быть модульным, чистым, без сторонних тяжелых фреймворков или с легким SPA-роутером.

Рекомендуемая структура файлов:
```
js/
├── api/
│   ├── client.js          # Базовый HTTP-клиент (fetch с перехватом 401 и refresh token)
│   ├── auth.js            # Методы авторизации, регистрации, профиля
│   ├── catalog.js         # Запросы каталога, фильтрации, пагинации
│   ├── cart.js            # Управление корзиной
│   └── orders.js          # Создание заказа, опрос Kaspi QR
├── store/
│   ├── cartStore.js       # Реактивное состояние корзины (localStorage + Backend)
│   ├── userStore.js       # Состояние авторизованного пользователя
│   └── petStore.js        # Выбранный текущий питомец в шапке
├── components/
│   ├── header.js          # Интерактивная шапка (город, питомец, поиск, корзина)
│   ├── productCard.js     # Компонент карточки товара
│   ├── toast.js           # Всплывающие уведомления (ошибки, успехи)
│   └── kaspiModal.js      # Модальное окно с таймером Kaspi QR
└── pages/
    ├── home.js            # Логика главной страницы и калькулятора
    ├── catalog.js         # Логика фильтров и каталога
    ├── product.js         # Логика детальной карточки и фасовок
    ├── cart.js            # Логика страницы корзины и чекаута
    └── account.js         # Личный кабинет и переключение вкладок
```

### 5.2. Обязательные задачи Frontend-разработчика

1. **Единый API-клиент (`api/client.js`)**:
   - Автоматически прикреплять заголовок `Authorization: Bearer <token>`.
   - При истечении access-токена (401) автоматически вызывать `/api/v1/auth/refresh`, сохранять новый токен и повторять исходный запрос.
   - Поддерживать fallback на гостевой `session_id` в `localStorage` для неавторизованных покупателей.

2. **Динамический каталог (`catalog.js`)**:
   - Заменить статическую разметку карточек товаров на рендеринг данных из `GET /api/v1/catalog/products`.
   - Синхронизировать состояние фильтров с URL-параметрами браузера (`History API / URLSearchParams`), чтобы ссылкой с фильтрами можно было поделиться.
   - Реализовать «живой поиск» в шапке с задержкой (debounce 300мс).
   - Пока идет загрузка — отображать Skeleton-плейсхолдеры.

3. **Корзина и синхронизация (`cartStore.js`)**:
   - Любое нажатие «В корзину» должно мгновенно обновлять бейдж в шапке сайта и вызывать API.
   - Поддерживать офлайн-добавление в корзину через `localStorage` с последующей синхронизацией при появлении сети или логине.
   - Пересчет итоговых сумм, скидок по подписке (-15%) и доступных бонусов.

4. **Интерактивный Kaspi QR Checkout**:
   - При выборе способа оплаты Kaspi QR и нажатии кнопки оплаты:
     - Создать заказ через API.
     - Открыть модальное окно с отображением динамического Kaspi QR-кода.
     - Запустить Long-polling или WebSocket-подписку на статус заказа.
     - При получении статуса `paid` — поздравить покупателя, очистить корзину и показать номер заказа.

5. **Калькулятор корма (`home.js` и `product.js`)**:
   - Отправлять выбранные параметры питомца на бэкенд и плавно анимировать число рассчитанных граммов в день.

6. **Валидация форм и безопасность**:
   - Маски ввода казахстанских номеров телефонов (`+7 (7XX) XXX-XX-XX`).
   - Проверка надежности пароля (индикатор надежности) на странице регистрации.
   - Защита от XSS (экранирование любого пользовательского ввода перед вставкой в DOM).

---

## 6. План этапов разработки (Roadmap)

| Этап | Задачи бэкенда (Go) | Задачи фронтенда (JS) | Сроки |
|:---|:---|:---|:---|
| **Этап 1: База данных и Auth** | Проектирование БД, запуск PostgreSQL, миграции, эндпоинты `/auth` (JWT, SMS OTP, валидация). | Экран регистрации и входа, валидация полей, сохранение токенов в LocalStorage. | Неделя 1-2 |
| **Этап 2: Каталог и товары** | Модели категорий, брендов и товаров, полнотекстовый поиск, фильтрация, пагинация, кеш Redis. | Динамическая витрина, фильтры каталога, карточки товаров, поиск с debounce, шапка сайта. | Неделя 3-4 |
| **Этап 3: Детальная страница товара** | Эндпоинт товара по slug, варианты фасовок, остатки на складе, калькулятор рациона. | Галерея изображений, переключатель фасовок, виджет автодоставки, калькулятор нормы. | Неделя 5 |
| **Этап 4: Корзина и Оформление** | Эндпоинты корзины, создание заказа, расчет доставки по зонам, интеграция с Kaspi Pay. | Управление корзиной, интерактивный чекаут, модалка Kaspi QR, подтверждение заказа. | Неделя 6-7 |
| **Этап 5: Личный кабинет и Питомцы** | Профиль пользователя, CRUD питомцев, управление автодоставкой, история бонусов. | Личный кабинет со вкладками, добавление питомцев, график автодоставки, история заказов. | Неделя 8 |
| **Этап 6: Тестирование и Запуск** | Нагрузочное тестирование, логирование, CI/CD пайплайны, Docker Compose, деплой. | Кроссбраузерное тестирование, оптимизация Lighthouse, финализация стилей. | Неделя 9 |

---

## 7. Требования к коду и соглашения

1. **Комментарии**: Все комментарии в коде, SQL-скриптах и конфигурациях должны быть написаны **на русском языке**.
2. **Валюта**: Все цены на бэкенде хранятся в целых числах тенге (`INT`, KZT), без копеек. При выводе на клиенте форматируются с разделителем тысяч: `42 500 ₸`.
3. **Безопасность**:
   - Пароли хешируются только алгоритмом `bcrypt` (cost 12).
   - Все запросы, изменяющие состояние (`POST`, `PUT`, `DELETE`), должны быть защищены от CSRF.
   - Использование `sqlx` или `pgx` только с параметризованными запросами (защита от SQL Injection).
4. **Контейнеризация**: Предоставить `docker-compose.yml`, поднимающий `postgres`, `redis` и `backend-api` одной командой `docker compose up -d`.
