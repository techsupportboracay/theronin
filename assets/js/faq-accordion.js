(function () {
  'use strict';

  var titles = Array.prototype.slice.call(document.querySelectorAll('#faqs .elementor-tab-title'));
  if (!titles.length) return;

  function setState(title, isOpen) {
    var content = document.getElementById(title.getAttribute('aria-controls'));
    title.classList.toggle('elementor-active', isOpen);
    title.setAttribute('aria-expanded', String(isOpen));
    if (content) content.style.display = isOpen ? 'block' : 'none';
  }

  titles.forEach(function (title) {
    title.addEventListener('click', function () {
      var isOpen = title.classList.contains('elementor-active');
      titles.forEach(function (t) { setState(t, false); });
      if (!isOpen) setState(title, true);
    });
  });
})();
