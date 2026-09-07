(function () {
  'use strict';

  var modal = document.getElementById('booking-modal');
  if (!modal) return;

  var datesStep = document.getElementById('booking-step-dates');
  var guestForm = document.getElementById('bk-guest-form');
  var confirmation = document.getElementById('bk-confirmation');
  var errorBox = document.getElementById('bk-error');
  var availabilityResult = document.getElementById('bk-availability-result');
  var paymentNote = document.getElementById('bk-payment-instructions');

  var checkinInput = document.getElementById('bk-checkin');
  var checkoutInput = document.getElementById('bk-checkout');
  var guestsInput = document.getElementById('bk-guests');
  var checkinConfirmed = document.getElementById('bk-checkin-confirmed');
  var checkoutConfirmed = document.getElementById('bk-checkout-confirmed');

  var today = new Date().toISOString().slice(0, 10);
  checkinInput.min = today;
  checkoutInput.min = today;

  function resetModal() {
    datesStep.hidden = false;
    guestForm.hidden = true;
    confirmation.hidden = true;
    errorBox.hidden = true;
    availabilityResult.innerHTML = '';
    guestForm.reset();
  }

  function openModal() {
    resetModal();
    modal.hidden = false;
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    modal.hidden = true;
    document.body.style.overflow = '';
  }

  document.querySelectorAll('.js-book-now').forEach(function (el) {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      openModal();
    });
  });

  modal.querySelectorAll('[data-close]').forEach(function (el) {
    el.addEventListener('click', closeModal);
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !modal.hidden) closeModal();
  });

  function money(n) {
    return 'PHP ' + Number(n).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  }

  document.getElementById('bk-check-availability').addEventListener('click', function () {
    errorBox.hidden = true;
    var checkin = checkinInput.value;
    var checkout = checkoutInput.value;
    var guests = guestsInput.value;

    if (!checkin || !checkout) {
      availabilityResult.innerHTML = '<p class="booking-error">Please choose both dates.</p>';
      return;
    }

    availabilityResult.innerHTML = '<p>Checking availability...</p>';
    guestForm.hidden = true;

    var qs = new URLSearchParams({ checkin: checkin, checkout: checkout, guests: guests });
    fetch('api/availability.php?' + qs.toString())
      .then(function (r) { return r.json(); })
      .then(function (data) {
        if (!data.ok) {
          availabilityResult.innerHTML = '<p class="booking-error">' + data.error + '</p>';
          return;
        }
        if (!data.available) {
          availabilityResult.innerHTML = '<p class="booking-error">' + data.reason + '</p>';
          return;
        }
        availabilityResult.innerHTML =
          '<p class="booking-success">Available! ' + data.nights + ' night(s) - Total ' + money(data.totalPrice) + '</p>';
        paymentNote.innerHTML =
          '<strong>Full payment due now:</strong> ' + money(data.amountDue) + ' via bank transfer.';
        checkinConfirmed.value = checkin;
        checkoutConfirmed.value = checkout;
        guestForm.hidden = false;
      })
      .catch(function () {
        availabilityResult.innerHTML = '<p class="booking-error">Something went wrong. Please try again.</p>';
      });
  });

  guestForm.addEventListener('submit', function (e) {
    e.preventDefault();
    errorBox.hidden = true;

    var payload = {
      checkin: checkinConfirmed.value,
      checkout: checkoutConfirmed.value,
      guests: guestsInput.value,
      first_name: document.getElementById('bk-first-name').value,
      last_name: document.getElementById('bk-last-name').value,
      email: document.getElementById('bk-email').value,
      phone: document.getElementById('bk-phone').value,
      notes: document.getElementById('bk-notes').value,
    };

    var submitBtn = guestForm.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.textContent = 'Sending...';

    fetch('api/book.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
    })
      .then(function (r) { return r.json(); })
      .then(function (data) {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Confirm Booking';
        if (!data.ok) {
          errorBox.textContent = data.error;
          errorBox.hidden = false;
          return;
        }
        guestForm.hidden = true;
        confirmation.hidden = false;
        confirmation.innerHTML =
          '<h3>Request received!</h3><p>Booking reference: <strong>' + data.reference + '</strong></p>' +
          '<p>We\'ve emailed you bank transfer details for the full payment of ' + money(data.amountDue) +
          '. Your stay will be confirmed once we receive it.</p>';
      })
      .catch(function () {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Confirm Booking';
        errorBox.textContent = 'Something went wrong sending your booking. Please try again or contact us on WhatsApp.';
        errorBox.hidden = false;
      });
  });
})();
