var collapseButtons = document.querySelectorAll('.collapse-button');

collapseButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    var target = document.querySelector(this.dataset.target);
    var expanded = this.getAttribute('aria-expanded') === 'true';

    target.classList.toggle('show');
    this.setAttribute('aria-expanded', !expanded);
  });
});
