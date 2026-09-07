(function () {
  'use strict';

  var items = Array.prototype.slice.call(document.querySelectorAll('.js-lightbox'));
  if (!items.length) return;

  var lightbox = document.createElement('div');
  lightbox.className = 'lightbox';
  lightbox.innerHTML =
    '<button type="button" class="lightbox__close" aria-label="Close">&times;</button>' +
    '<button type="button" class="lightbox__prev" aria-label="Previous">&#8249;</button>' +
    '<img src="" alt="">' +
    '<button type="button" class="lightbox__next" aria-label="Next">&#8250;</button>' +
    '<div class="lightbox__caption"></div>';
  document.body.appendChild(lightbox);

  var imgEl = lightbox.querySelector('img');
  var captionEl = lightbox.querySelector('.lightbox__caption');
  var groupItems = [];
  var currentIndex = 0;

  function show(index) {
    currentIndex = (index + groupItems.length) % groupItems.length;
    var item = groupItems[currentIndex];
    imgEl.src = item.getAttribute('href');
    captionEl.textContent = item.getAttribute('data-title') || '';
  }

  function open(item) {
    var group = item.getAttribute('data-group') || 'default';
    groupItems = items.filter(function (i) { return (i.getAttribute('data-group') || 'default') === group; });
    show(groupItems.indexOf(item));
    lightbox.classList.add('is-open');
    document.body.style.overflow = 'hidden';
  }

  function close() {
    lightbox.classList.remove('is-open');
    document.body.style.overflow = '';
  }

  items.forEach(function (item) {
    item.addEventListener('click', function (e) {
      e.preventDefault();
      open(item);
    });
  });

  lightbox.querySelector('.lightbox__close').addEventListener('click', close);
  lightbox.querySelector('.lightbox__prev').addEventListener('click', function () { show(currentIndex - 1); });
  lightbox.querySelector('.lightbox__next').addEventListener('click', function () { show(currentIndex + 1); });
  lightbox.addEventListener('click', function (e) {
    if (e.target === lightbox) close();
  });
  document.addEventListener('keydown', function (e) {
    if (!lightbox.classList.contains('is-open')) return;
    if (e.key === 'Escape') close();
    if (e.key === 'ArrowLeft') show(currentIndex - 1);
    if (e.key === 'ArrowRight') show(currentIndex + 1);
  });
})();
