(function () {
  'use strict';

  var btn = document.getElementById('scroll-top');
  if (!btn) return;

  function update() {
    btn.classList.toggle('is-visible', window.scrollY > 400);
  }

  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  window.addEventListener('scroll', update, { passive: true });
  update();
})();
