import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {

    $(function() {
      $(window).on('scroll', function() {
          if($(window).scrollTop() > 50) {
              $('.header').addClass('background-frontpage-nav');
          } else {
             $('.header').removeClass('background-frontpage-nav');
          }
      });
  });
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

