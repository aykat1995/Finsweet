document.addEventListener('DOMContentLoaded', function() {

  // Видео
  let videoPlay = document.querySelector('.video__play-icon');
  let videoModal = document.querySelector('.video-modal');
  let closeVideo = document.querySelector('.video-exit');

  videoPlay.addEventListener('click', function() {
    let coord = this.getBoundingClientRect().top
    videoModal.classList.add('active');
    videoModal.style.top = 0
  })

  closeVideo.addEventListener('click', function() {
    videoModal.classList.remove('active');
  })


  // Меню-бургер
  let burger = document.querySelector('.header__burger');
  let nav = document.querySelector('.header__nav');
  burger.addEventListener('click', function() {
    burger.classList.toggle('active');
    nav.classList.toggle('active');
  })
})

