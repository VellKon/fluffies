/**
 * ============================================================
 * ПУШИСТИКИ — РЕГИСТРАЦИЯ И КЛУБ ПРИВИЛЕГИЙ
 * Логика переключения методов регистрации (телефон / email),
 * проверка надежности пароля, выбор питомца и отправка формы
 * ============================================================
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  initRegistrationTabs();
  initPasswordControls();
  initPetChips();
  initConsentCheckboxes();
  initRegistrationForm();
});

/**
 * Инициализирует переключение метода регистрации (По номеру телефона / По E-mail).
 */
function initRegistrationTabs() {
  const tabPhone = document.getElementById('tab-phone');
  const tabEmail = document.getElementById('tab-email');
  const phoneCont = document.getElementById('field-phone-container');
  const emailCont = document.getElementById('field-email-container');
  const phoneInput = document.getElementById('user-phone');
  const emailInput = document.getElementById('user-email');

  if (!tabPhone || !tabEmail) return;

  tabPhone.addEventListener('click', () => {
    tabPhone.classList.add('active');
    tabEmail.classList.remove('active');

    if (phoneCont) phoneCont.classList.remove('hidden');
    if (emailCont) emailCont.classList.add('hidden');

    if (phoneInput) phoneInput.setAttribute('required', 'true');
    if (emailInput) {
      emailInput.removeAttribute('required');
      emailInput.value = '';
    }
  });

  tabEmail.addEventListener('click', () => {
    tabEmail.classList.add('active');
    tabPhone.classList.remove('active');

    if (emailCont) emailCont.classList.remove('hidden');
    if (phoneCont) phoneCont.classList.add('hidden');

    if (emailInput) emailInput.setAttribute('required', 'true');
    if (phoneInput) {
      phoneInput.removeAttribute('required');
      phoneInput.value = '';
    }
  });
}

/**
 * Инициализирует видимость и индикатор надежности пароля.
 */
function initPasswordControls() {
  const pwdInput = document.getElementById('user-password');
  const toggleBtn = document.getElementById('pwd-toggle-btn');
  const eyeIcon = document.getElementById('pwd-eye-icon');
  const b1 = document.getElementById('bar-1');
  const b2 = document.getElementById('bar-2');
  const b3 = document.getElementById('bar-3');
  const strengthLabel = document.getElementById('pwd-strength-label');

  // Переключение видимости символов пароля
  if (toggleBtn && pwdInput && eyeIcon) {
    toggleBtn.addEventListener('click', () => {
      if (pwdInput.type === 'password') {
        pwdInput.type = 'text';
        eyeIcon.textContent = 'visibility_off';
      } else {
        pwdInput.type = 'password';
        eyeIcon.textContent = 'visibility';
      }
    });
  }

  // Оценка надежности пароля при вводе
  if (pwdInput && b1 && b2 && b3 && strengthLabel) {
    pwdInput.addEventListener('input', () => {
      const val = pwdInput.value;

      // Сброс классов
      b1.className = 'reg-strength-seg';
      b2.className = 'reg-strength-seg';
      b3.className = 'reg-strength-seg';

      if (!val) {
        strengthLabel.textContent = 'мин. 8 символов';
        strengthLabel.style.color = 'var(--color-outline)';
        return;
      }

      if (val.length < 6) {
        b1.classList.add('weak');
        strengthLabel.textContent = 'Слабый пароль';
        strengthLabel.style.color = 'var(--color-error)';
      } else if (val.length < 9) {
        b1.classList.add('medium');
        b2.classList.add('medium');
        strengthLabel.textContent = 'Средний пароль';
        strengthLabel.style.color = 'var(--color-primary)';
      } else {
        b1.classList.add('strong');
        b2.classList.add('strong');
        b3.classList.add('strong');
        strengthLabel.textContent = 'Надежный пароль ✓';
        strengthLabel.style.color = 'var(--color-secondary)';
      }
    });
  }
}

/**
 * Инициализирует выбор типа питомца (собака, кошка, птица и т.д.).
 */
function initPetChips() {
  const chips = document.querySelectorAll('.pet-chip');

  chips.forEach((chip) => {
    chip.addEventListener('click', () => {
      chips.forEach((c) => c.classList.remove('active'));
      chip.classList.add('active');
    });
  });
}

/**
 * Инициализирует интерактивность кастомных чекбоксов согласий.
 */
function initConsentCheckboxes() {
  const consentRows = document.querySelectorAll('.custom-consent-row');

  consentRows.forEach((row) => {
    const box = row.querySelector('.custom-consent-box');
    const input = row.querySelector('input[type="checkbox"]');

    if (!box || !input) return;

    row.addEventListener('click', (e) => {
      // Игнорируем клики по ссылкам внутри текста согласия
      if (e.target.tagName.toLowerCase() === 'a') return;

      input.checked = !input.checked;
      if (input.checked) {
        box.classList.add('checked');
      } else {
        box.classList.remove('checked');
      }
    });
  });
}

/**
 * Инициализирует отправку формы регистрации и показ уведомления об успехе.
 */
function initRegistrationForm() {
  const form = document.getElementById('pet-registration-form');
  const toast = document.getElementById('registration-toast');
  const submitBtn = document.querySelector('.reg-submit-btn');

  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Проверка обязательного согласия с офертой
    const termsCheck = document.getElementById('terms-check');
    if (termsCheck && !termsCheck.checked) {
      alert('Пожалуйста, подтвердите согласие с условиями оферты.');
      return;
    }

    // Блокируем кнопку на время отправки
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.style.opacity = '0.7';
      submitBtn.innerHTML = `
        <span class="material-symbols-outlined" style="animation: spin 1s infinite linear">sync</span>
        <span>Регистрация аккаунта...</span>
      `;
    }

    // Имитация успешной регистрации и начисления бонусов
    setTimeout(() => {
      if (toast) {
        toast.classList.remove('hidden');
        toast.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }

      if (submitBtn) {
        submitBtn.innerHTML = `
          <span>Успешно зарегистрированы!</span>
          <span class="material-symbols-outlined">check_circle</span>
        `;
        submitBtn.style.background = 'var(--color-secondary)';
      }

      // Перенаправление на страницу каталога через 2 секунды
      setTimeout(() => {
        window.location.href = 'index.php';
      }, 2000);
    }, 800);
  });
}
