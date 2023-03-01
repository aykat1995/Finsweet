document.addEventListener('DOMContentLoaded', function() {

  // Меню-бургер
  let burger = document.querySelector('.header__burger');
  let nav = document.querySelector('.header__nav');
  burger.addEventListener('click', function() {
    burger.classList.toggle('active');
    nav.classList.toggle('active');
  })
})

