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