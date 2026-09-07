(function () {
  'use strict';

  var toggle = document.querySelector('.nav-toggle');
  var panel = document.getElementById('mobile-nav');
  if (!toggle || !panel) return;

  function isOpen() {
    return toggle.getAttribute('aria-expanded') === 'true';
  }

  function closeMenu() {
    toggle.setAttribute('aria-expanded', 'false');
    panel.hidden = true;
  }

  function openMenu() {
    toggle.setAttribute('aria-expanded', 'true');
    panel.hidden = false;
    var firstLink = panel.querySelector('a');
    if (firstLink) firstLink.focus();
  }

  toggle.addEventListener('click', function () {
    if (isOpen()) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  panel.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && isOpen()) {
      closeMenu();
      toggle.focus();
    }
  });

  document.addEventListener('click', function (e) {
    if (!isOpen()) return;
    if (panel.contains(e.target) || toggle.contains(e.target)) return;
    closeMenu();
  });
})();
