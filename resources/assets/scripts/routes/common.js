import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {

    $('.navbar-icon').click(function(){
      $(this).toggleClass('active');
      $('.navbar-menu nav').toggleClass('active');
    });
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};

// Slideshow
new Swiper('.slideShow', {
  modules: [Navigation, Pagination],
  loop: true,

  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },

  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: 'true',
  },
});

// Slideshow
new Swiper('.aboutSlide', {
  modules: [Navigation, Pagination,Autoplay],
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: 'true',
  },
  autoplay: {
    delay: 2000,
    pauseOnMouseEnter: true,
    autoplayResume: true,
  },
});

