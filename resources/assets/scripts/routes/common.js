import Swiper, { Navigation, Pagination } from 'swiper';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
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