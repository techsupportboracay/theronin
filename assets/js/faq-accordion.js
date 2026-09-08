(function () {
  'use strict';

  var questions = Array.prototype.slice.call(document.querySelectorAll('#faqs .faq-question'));
  if (!questions.length) return;

  function setState(question, isOpen) {
    var answer = document.getElementById(question.getAttribute('aria-controls'));
    question.classList.toggle('is-open', isOpen);
    question.setAttribute('aria-expanded', String(isOpen));
    if (answer) answer.hidden = !isOpen;
  }

  questions.forEach(function (question) {
    question.addEventListener('click', function () {
      var isOpen = question.classList.contains('is-open');
      questions.forEach(function (q) { setState(q, false); });
      if (!isOpen) setState(question, true);
    });
  });
})();
