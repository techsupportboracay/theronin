(function () {
  'use strict';

  var root = document.getElementById('room-carousel');
  if (!root) return;

  var track = root.querySelector('.room-carousel__track');
  var slides = Array.prototype.slice.call(track.children);
  var dots = Array.prototype.slice.call(root.querySelectorAll('.room-carousel__dot'));
  var prevBtn = root.querySelector('.room-carousel__prev');
  var nextBtn = root.querySelector('.room-carousel__next');
  var thumbnailList = document.createElement('div');
  thumbnailList.id = 'room-carousel-thumbnails';
  thumbnailList.setAttribute('role', 'group');
  thumbnailList.setAttribute('aria-label', 'Choose a room photo');
  var thumbnails = slides.map(function (slide, i) {
    var button = document.createElement('button');
    button.type = 'button';
    button.className = 'room-carousel__thumbnail';
    button.setAttribute('aria-label', 'Show room photo ' + (i + 1));
    button.setAttribute('aria-controls', 'room-carousel');
    var image = document.createElement('img');
    image.src = slide.querySelector('img').getAttribute('src');
    image.alt = '';
    image.loading = 'lazy';
    button.appendChild(image);
    thumbnailList.appendChild(button);
    return button;
  });
  root.insertAdjacentElement('afterend', thumbnailList);

  var index = 0;
  var autoplayMs = 5000;
  var timer = null;

  function render() {
    track.style.transform = 'translateX(-' + index * 100 + '%)';
    dots.forEach(function (dot, i) {
      dot.classList.toggle('bg-white', i === index);
      dot.classList.toggle('bg-white/60', i !== index);
      thumbnails[i].setAttribute('aria-pressed', String(i === index));
    });
  }

  function goTo(newIndex) {
    index = (newIndex + slides.length) % slides.length;
    render();
  }

  function next() { goTo(index + 1); }
  function prev() { goTo(index - 1); }

  function startAutoplay() {
    stopAutoplay();
    if (root.matches(':hover') || thumbnailList.matches(':hover') || thumbnailList.contains(document.activeElement)) return;
    timer = setInterval(next, autoplayMs);
  }
  function stopAutoplay() {
    if (timer) clearInterval(timer);
  }

  prevBtn.addEventListener('click', function (e) {
    e.preventDefault();
    prev();
    startAutoplay();
  });
  nextBtn.addEventListener('click', function (e) {
    e.preventDefault();
    next();
    startAutoplay();
  });
  dots.concat(thumbnails).forEach(function (dot, i) {
    dot.addEventListener('click', function () {
      goTo(i);
      startAutoplay();
    });
  });

  root.addEventListener('mouseenter', stopAutoplay);
  root.addEventListener('mouseleave', startAutoplay);

  thumbnailList.addEventListener('mouseenter', stopAutoplay);
  thumbnailList.addEventListener('mouseleave', startAutoplay);
  thumbnailList.addEventListener('focusin', stopAutoplay);
  thumbnailList.addEventListener('focusout', function () {
    setTimeout(startAutoplay, 0);
  });

  render();
  startAutoplay();
})();
