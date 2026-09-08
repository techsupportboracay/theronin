(function () {
  'use strict';

  var checkinDisplay = document.getElementById('bk-checkin-display');
  var checkoutDisplay = document.getElementById('bk-checkout-display');
  var checkinValue = document.getElementById('bk-checkin');
  var checkoutValue = document.getElementById('bk-checkout');
  var calendar = document.getElementById('booking-calendar');
  if (!checkinDisplay || !checkoutDisplay || !calendar) return;

  var MONTH_NAMES = [
    'January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'
  ];

  var months = [
    { title: calendar.querySelector('[data-month="0"]'), days: calendar.querySelector('[data-days="0"]') },
    { title: calendar.querySelector('[data-month="1"]'), days: calendar.querySelector('[data-days="1"]') }
  ];
  var prevBtn = calendar.querySelector('.booking-calendar__nav--prev');
  var nextBtn = calendar.querySelector('.booking-calendar__nav--next');

  var today = new Date();
  today.setHours(0, 0, 0, 0);
  var todayIso = toIso(today.getFullYear(), today.getMonth(), today.getDate());

  var viewYear = today.getFullYear();
  var viewMonth = today.getMonth();
  var startDate = null;
  var endDate = null;

  function pad(n) {
    return n < 10 ? '0' + n : String(n);
  }

  function toIso(year, month, day) {
    var d = new Date(year, month, day);
    return d.getFullYear() + '-' + pad(d.getMonth() + 1) + '-' + pad(d.getDate());
  }

  function formatDisplay(iso) {
    var parts = iso.split('-');
    return parts[1] + '/' + parts[2] + '/' + parts[0];
  }

  function renderMonth(year, month, monthEntry) {
    monthEntry.title.textContent = MONTH_NAMES[month] + ' ' + year;
    monthEntry.days.innerHTML = '';

    var firstDay = new Date(year, month, 1);
    var startOffset = (firstDay.getDay() + 6) % 7; // Monday-first offset
    var daysInMonth = new Date(year, month + 1, 0).getDate();
    var daysInPrevMonth = new Date(year, month, 0).getDate();

    for (var i = 0; i < startOffset; i++) {
      var filler = document.createElement('span');
      filler.className = 'booking-calendar__day booking-calendar__day--filler';
      filler.textContent = daysInPrevMonth - startOffset + i + 1;
      monthEntry.days.appendChild(filler);
    }

    for (var day = 1; day <= daysInMonth; day++) {
      var iso = toIso(year, month, day);
      var btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'booking-calendar__day';
      btn.dataset.date = iso;
      var inner = document.createElement('span');
      inner.className = 'booking-calendar__day-inner';
      inner.textContent = String(day);
      btn.appendChild(inner);

      if (iso < todayIso) {
        btn.disabled = true;
        btn.classList.add('is-disabled');
      }
      if (iso === todayIso) btn.classList.add('is-today');
      if (iso === startDate) btn.classList.add('is-start');
      if (iso === endDate) btn.classList.add('is-end');
      if (startDate && endDate && iso > startDate && iso < endDate) {
        btn.classList.add('is-in-range');
      }

      btn.addEventListener('click', function () {
        handleDayClick(this.dataset.date);
      });
      monthEntry.days.appendChild(btn);
    }
  }

  function renderBoth() {
    var secondMonth = viewMonth + 1;
    var secondYear = viewYear;
    if (secondMonth > 11) {
      secondMonth = 0;
      secondYear += 1;
    }
    renderMonth(viewYear, viewMonth, months[0]);
    renderMonth(secondYear, secondMonth, months[1]);
  }

  function updateDisplays() {
    checkinValue.value = startDate || '';
    checkoutValue.value = endDate || '';
    checkinDisplay.value = startDate ? formatDisplay(startDate) : '';
    checkoutDisplay.value = endDate ? formatDisplay(endDate) : '';
  }

  function handleDayClick(iso) {
    if (!startDate || (startDate && endDate)) {
      startDate = iso;
      endDate = null;
    } else if (iso <= startDate) {
      startDate = iso;
      endDate = null;
    } else {
      endDate = iso;
    }
    renderBoth();
    updateDisplays();
    if (startDate && endDate) {
      closeCalendar();
    }
  }

  function openCalendar() {
    var anchor = startDate || todayIso;
    var anchorParts = anchor.split('-');
    viewYear = Number(anchorParts[0]);
    viewMonth = Number(anchorParts[1]) - 1;
    renderBoth();
    calendar.hidden = false;
  }

  function closeCalendar() {
    calendar.hidden = true;
  }

  checkinDisplay.addEventListener('click', openCalendar);
  checkoutDisplay.addEventListener('click', openCalendar);

  prevBtn.addEventListener('click', function () {
    viewMonth -= 1;
    if (viewMonth < 0) {
      viewMonth = 11;
      viewYear -= 1;
    }
    renderBoth();
  });

  nextBtn.addEventListener('click', function () {
    viewMonth += 1;
    if (viewMonth > 11) {
      viewMonth = 0;
      viewYear += 1;
    }
    renderBoth();
  });

  document.addEventListener('click', function (e) {
    if (calendar.hidden) return;
    if (calendar.contains(e.target) || e.target === checkinDisplay || e.target === checkoutDisplay) return;
    closeCalendar();
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !calendar.hidden) closeCalendar();
  });
})();
