/**
 * ============================================================
 * ПУШИСТИКИ — КОРЗИНА И ОФОРМЛЕНИЕ ЗАКАЗА
 * Скрипт интерактивности: пересчет товаров, выбор доставки,
 * способы оплаты и оформление через Kaspi QR
 * ============================================================
 */

document.addEventListener('DOMContentLoaded', () => {
  // Константы и начальное состояние
  const THRESHOLD_FREE_DELIVERY = 7000;
  const LOYALTY_DISCOUNT_PERCENT = 0.05; // 5% скидка постоянного клиента
  let promoDiscount = 2000; // Активный промокод PETLOVE2025

  /**
   * Список товаров в корзине
   * @type {Array<{id: string, name: string, unitPrice: number, quantity: number, element: HTMLElement}>}
   */
  const cartItems = [
    {
      id: 'item-1',
      name: 'Grandorf 4 Meat Adult Medium 12 кг',
      unitPrice: 42500,
      quantity: 1,
      element: document.querySelector('[data-item-id="item-1"]')
    },
    {
      id: 'item-2',
      name: 'Деревенские лакомства Утиные медальоны 100 г',
      unitPrice: 2400,
      quantity: 2,
      element: document.querySelector('[data-item-id="item-2"]')
    },
    {
      id: 'item-3',
      name: 'Игрушка для собак Kong Classic размер L',
      unitPrice: 6600,
      quantity: 1,
      element: document.querySelector('[data-item-id="item-3"]')
    },
    {
      id: 'item-4',
      name: 'Шампунь с хлоргексидином 4% 250 мл',
      unitPrice: 6800,
      quantity: 1,
      element: document.querySelector('[data-item-id="item-4"]')
    }
  ];

  /**
   * Форматирование числа в формат казахского тенге (например: 42 500 ₸)
   * @param {number} amount
   * @returns {string}
   */
  function formatKZT(amount) {
    return amount.toLocaleString('ru-RU') + ' ₸';
  }

  /**
   * Склонение слова "товар" в зависимости от количества
   * @param {number} count
   * @returns {string}
   */
  function getPluralGoods(count) {
    const cases = [2, 0, 1, 1, 1, 2];
    const titles = ['товар', 'товара', 'товаров'];
    return titles[
      count % 100 > 4 && count % 100 < 20
        ? 2
        : cases[Math.min(count % 10, 5)]
    ];
  }

  /**
   * Полный пересчет стоимости корзины и обновление всех UI-элементов
   */
  function recalculateCart() {
    let grossTotal = 0;
    let totalItemsCount = 0;

    cartItems.forEach(item => {
      if (item.quantity > 0 && item.element && item.element.isConnected) {
        const itemTotal = item.unitPrice * item.quantity;
        grossTotal += itemTotal;
        totalItemsCount += item.quantity;

        // Обновляем отображение цены конкретного товара
        const priceEl = item.element.querySelector('.cart-item-price');
        if (priceEl) {
          priceEl.textContent = formatKZT(itemTotal);
        }

        // Обновляем счетчик на единицу товара
        const qtyEl = item.element.querySelector('.qty-value');
        if (qtyEl) {
          qtyEl.textContent = item.quantity.toString();
        }

        // Обновляем подпись к единице измерения (если нужно)
        const unitEl = item.element.querySelector('.cart-item-unit-calc');
        if (unitEl && item.id === 'item-2') {
          unitEl.textContent = `${formatKZT(item.unitPrice)} × ${item.quantity} шт`;
        }
      }
    });

    // Скидка постоянного покупателя (5%)
    const loyaltyDiscount = Math.round(grossTotal * LOYALTY_DISCOUNT_PERCENT);

    // Доставка: бесплатная при заказе от 7 000 ₸
    const isFreeDelivery = grossTotal >= THRESHOLD_FREE_DELIVERY;
    const deliveryCost = isFreeDelivery || grossTotal === 0 ? 0 : 1500;

    // Итого к оплате
    const effectivePromo = grossTotal > 0 ? promoDiscount : 0;
    const finalTotal = Math.max(0, grossTotal - loyaltyDiscount - effectivePromo + deliveryCost);

    // Платеж в рассрочку Kaspi Red на 3 месяца
    const redInstallment = Math.round(finalTotal / 3);

    // Бонусы к начислению (3% от финальной суммы)
    const bonusesAccrued = Math.round(finalTotal * 0.03);

    // --- Обновление заголовков и счетчиков страницы ---
    const headerItemsCount = document.getElementById('headerItemsCount');
    if (headerItemsCount) {
      headerItemsCount.textContent = `${totalItemsCount} ${getPluralGoods(totalItemsCount)}`;
    }

    const headerTotalCost = document.getElementById('headerTotalCost');
    if (headerTotalCost) {
      headerTotalCost.textContent = formatKZT(grossTotal);
    }

    // Обновление бейджа корзины в шапке
    const headerCartBadge = document.getElementById('headerCartBadge');
    if (headerCartBadge) {
      headerCartBadge.textContent = totalItemsCount.toString();
    }
    const headerCartPrice = document.getElementById('headerCartPrice');
    if (headerCartPrice) {
      headerCartPrice.textContent = formatKZT(finalTotal);
    }

    // Бейдж в сайдбаре
    const summaryItemsCount = document.getElementById('summaryItemsCountBadge');
    if (summaryItemsCount) {
      summaryItemsCount.textContent = `${totalItemsCount} ${getPluralGoods(totalItemsCount)}`;
    }

    // Сумма без скидки
    const summaryGrossEl = document.getElementById('summaryGrossPrice');
    if (summaryGrossEl) {
      summaryGrossEl.textContent = formatKZT(grossTotal);
    }
    const summaryGrossLabel = document.getElementById('summaryGrossLabel');
    if (summaryGrossLabel) {
      summaryGrossLabel.textContent = `Товары без скидки (${totalItemsCount} шт.)`;
    }

    // Скидка постоянного клиента
    const summaryLoyaltyEl = document.getElementById('summaryLoyaltyDiscount');
    if (summaryLoyaltyEl) {
      summaryLoyaltyEl.textContent = loyaltyDiscount > 0 ? `-${formatKZT(loyaltyDiscount)}` : '0 ₸';
    }

    // Промокод
    const summaryPromoEl = document.getElementById('summaryPromoDiscount');
    if (summaryPromoEl) {
      summaryPromoEl.textContent = effectivePromo > 0 ? `-${formatKZT(effectivePromo)}` : '0 ₸';
    }

    // Доставка
    const summaryDeliveryEl = document.getElementById('summaryDelivery');
    if (summaryDeliveryEl) {
      summaryDeliveryEl.textContent = isFreeDelivery
        ? 'Бесплатно (0 ₸)'
        : formatKZT(deliveryCost);
      summaryDeliveryEl.className = isFreeDelivery
        ? 'summary-free-val'
        : 'summary-row-val';
    }

    // Итого к оплате
    const summaryFinalTotal = document.getElementById('summaryFinalTotal');
    if (summaryFinalTotal) {
      summaryFinalTotal.textContent = formatKZT(finalTotal);
    }

    // Экономия
    const summarySavings = document.getElementById('summarySavingsText');
    if (summarySavings) {
      const totalSavings = loyaltyDiscount + effectivePromo;
      if (totalSavings > 0 && grossTotal > 0) {
        summarySavings.style.display = 'block';
        summarySavings.textContent = `${formatKZT(grossTotal)} (экономия ${formatKZT(totalSavings)})`;
      } else {
        summarySavings.style.display = 'none';
      }
    }

    // Рассрочка Kaspi Red
    const installmentVal = document.getElementById('summaryKaspiRedVal');
    if (installmentVal) {
      installmentVal.textContent = `${formatKZT(redInstallment)} / мес`;
    }

    // Начисление бонусов
    const bonusAccrualVal = document.getElementById('bonusAccrualVal');
    if (bonusAccrualVal) {
      bonusAccrualVal.textContent = `+${bonusesAccrued.toLocaleString('ru-RU')} бонусов вернется на ваш счет Пушистики.Club`;
    }

    // Текст на кнопке оформления
    const checkoutBtn = document.getElementById('checkoutBtn');
    if (checkoutBtn && !checkoutBtn.dataset.busy) {
      checkoutBtn.innerHTML = `
        <span class="material-symbols-outlined" style="font-size:24px">lock</span>
        <span>Подтвердить и оплатить ${formatKZT(finalTotal)}</span>
      `;
    }

    // Прогресс бесплатной доставки
    updateFreeDeliveryProgress(grossTotal);
  }

  /**
   * Обновление индикатора прогресса бесплатной доставки
   * @param {number} currentTotal
   */
  function updateFreeDeliveryProgress(currentTotal) {
    const progressBar = document.getElementById('freeDeliveryProgressBar');
    const progressLabel = document.getElementById('freeDeliveryProgressLabel');
    const percentLabel = document.getElementById('freeDeliveryPercentLabel');
    const cardTitle = document.getElementById('freeDeliveryCardTitle');

    if (!progressBar || !progressLabel || !percentLabel || !cardTitle) return;

    if (currentTotal >= THRESHOLD_FREE_DELIVERY) {
      progressBar.style.width = '100%';
      progressLabel.textContent = `Прогресс: ${formatKZT(currentTotal)}`;
      percentLabel.textContent = '100% выполнено';
      cardTitle.textContent = '🎉 Поздравляем! Бесплатная доставка активна';
    } else {
      const percent = Math.min(100, Math.round((currentTotal / THRESHOLD_FREE_DELIVERY) * 100));
      const remaining = THRESHOLD_FREE_DELIVERY - currentTotal;
      progressBar.style.width = `${percent}%`;
      progressLabel.textContent = `Прогресс: ${formatKZT(currentTotal)} из 7 000 ₸`;
      percentLabel.textContent = `${percent}%`;
      cardTitle.textContent = `До бесплатной доставки осталось ${formatKZT(remaining)}`;
    }
  }

  // === ИНИЦИАЛИЗАЦИЯ СТЕППЕРОВ (КОЛИЧЕСТВО ТОВАРОВ) ===
  cartItems.forEach(item => {
    if (!item.element) return;

    const minusBtn = item.element.querySelector('[data-step-btn="minus"]');
    const plusBtn = item.element.querySelector('[data-step-btn="plus"]');
    const deleteBtn = item.element.querySelector('[data-action="delete"]');

    if (minusBtn) {
      minusBtn.addEventListener('click', () => {
        if (item.quantity > 1) {
          item.quantity -= 1;
          recalculateCart();
        } else {
          // Если 1, нажатие "минус" предлагает удалить товар
          deleteItem(item);
        }
      });
    }

    if (plusBtn) {
      plusBtn.addEventListener('click', () => {
        item.quantity += 1;
        recalculateCart();
      });
    }

    if (deleteBtn) {
      deleteBtn.addEventListener('click', () => {
        deleteItem(item);
      });
    }
  });

  /**
   * Удаление товара из корзины с плавной анимацией
   * @param {{id: string, name: string, quantity: number, element: HTMLElement}} item
   */
  function deleteItem(item) {
    if (!item.element) return;
    item.element.style.opacity = '0';
    item.element.style.transform = 'translateX(20px)';
    setTimeout(() => {
      item.quantity = 0;
      item.element.remove();
      recalculateCart();
    }, 250);
  }

  // === КНОПКА ОЧИСТКИ ВСЕЙ КОРЗИНЫ ===
  const clearCartBtn = document.getElementById('clearCartBtn');
  if (clearCartBtn) {
    clearCartBtn.addEventListener('click', () => {
      if (confirm('Вы уверены, что хотите очистить корзину?')) {
        cartItems.forEach(item => {
          if (item.element) {
            item.quantity = 0;
            item.element.remove();
          }
        });
        recalculateCart();
      }
    });
  }

  // === ВЫБОР СПОСОБА ДОСТАВКИ ===
  const deliveryOptions = document.querySelectorAll('.delivery-option-card');
  const addressBox = document.getElementById('addressDetailsBox');

  deliveryOptions.forEach(opt => {
    opt.addEventListener('click', () => {
      deliveryOptions.forEach(o => o.classList.remove('active'));
      opt.classList.add('active');

      const radio = opt.querySelector('input[type="radio"]');
      if (radio) {
        radio.checked = true;
        // Если выбран самовывоз, адаптируем блок адреса
        if (radio.value === 'pickup' && addressBox) {
          addressBox.style.opacity = '0.6';
        } else if (addressBox) {
          addressBox.style.opacity = '1';
        }
      }
    });
  });

  // === ВЫБОР ВРЕМЕННОГО ИНТЕРВАЛА ===
  const timeSlots = document.querySelectorAll('.time-slot-btn');
  timeSlots.forEach(slot => {
    slot.addEventListener('click', () => {
      timeSlots.forEach(s => {
        s.classList.remove('active');
        const icon = s.querySelector('.time-slot-icon');
        if (icon) icon.remove();
      });
      slot.classList.add('active');

      // Добавляем галочку подтверждения
      if (!slot.querySelector('.time-slot-icon')) {
        const checkIcon = document.createElement('span');
        checkIcon.className = 'material-symbols-outlined time-slot-icon';
        checkIcon.textContent = 'check_circle';
        slot.appendChild(checkIcon);
      }
    });
  });

  // === ВЫБОР СПОСОБА ОПЛАТЫ ===
  const paymentOptions = document.querySelectorAll('.payment-option-card');
  paymentOptions.forEach(card => {
    card.addEventListener('click', () => {
      paymentOptions.forEach(p => {
        p.classList.remove('active');
        const radioIcon = p.querySelector('.payment-radio-icon');
        if (radioIcon) {
          radioIcon.textContent = 'radio_button_unchecked';
        }
        const radioInput = p.querySelector('input[type="radio"]');
        if (radioInput) radioInput.checked = false;
      });

      card.classList.add('active');
      const activeRadioIcon = card.querySelector('.payment-radio-icon');
      if (activeRadioIcon) {
        activeRadioIcon.textContent = 'radio_button_checked';
      }
      const radio = card.querySelector('input[type="radio"]');
      if (radio) radio.checked = true;
    });
  });

  // === ПРИМЕНЕНИЕ ПРОМОКОДА ===
  const applyPromoBtn = document.getElementById('applyPromoBtn');
  const promoInput = document.getElementById('promoInput');
  const promoStatusMsg = document.getElementById('promoStatusMsg');

  if (applyPromoBtn && promoInput) {
    applyPromoBtn.addEventListener('click', () => {
      const code = promoInput.value.trim().toUpperCase();
      if (code === 'PETLOVE2025' || code === 'FLUFFIES' || code === 'ПУШИСТИКИ') {
        promoDiscount = 2000;
        if (promoStatusMsg) {
          promoStatusMsg.innerHTML = `
            <span class="material-symbols-outlined" style="font-size:14px">sell</span>
            <span>Скидка 2 000 ₸ успешно учтена в чеке!</span>
          `;
          promoStatusMsg.style.display = 'flex';
        }
        applyPromoBtn.textContent = 'Применен';
      } else if (code.length > 0) {
        promoDiscount = 0;
        if (promoStatusMsg) {
          promoStatusMsg.innerHTML = `
            <span class="material-symbols-outlined" style="font-size:14px; color:var(--color-error)">error</span>
            <span style="color:var(--color-error)">Промокод не найден или устарел</span>
          `;
          promoStatusMsg.style.display = 'flex';
        }
        applyPromoBtn.textContent = 'Применить';
      }
      recalculateCart();
    });
  }

  // === АНИМАЦИЯ И ОФОРМЛЕНИЕ ЧЕРЕЗ KASPI QR ===
  const checkoutBtn = document.getElementById('checkoutBtn');
  if (checkoutBtn) {
    checkoutBtn.addEventListener('click', () => {
      checkoutBtn.dataset.busy = 'true';
      checkoutBtn.disabled = true;
      checkoutBtn.innerHTML = `
        <span class="material-symbols-outlined animate-spin" style="font-size:24px">progress_activity</span>
        <span>Формируем счет Kaspi QR...</span>
      `;

      setTimeout(() => {
        checkoutBtn.innerHTML = `
          <span class="material-symbols-outlined" style="font-size:24px">check_circle</span>
          <span>Переход к оплате в Kaspi.kz...</span>
        `;
        setTimeout(() => {
          checkoutBtn.disabled = false;
          delete checkoutBtn.dataset.busy;
          recalculateCart();
        }, 2000);
      }, 950);
    });
  }

  // Первоначальный расчет при загрузке страницы
  recalculateCart();
});
