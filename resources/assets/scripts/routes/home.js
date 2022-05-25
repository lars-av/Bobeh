
export default {
  init() {
    $('.tab').on('click', function(evt) {
      evt.preventDefault();
      $(this).toggleClass('active1');
      var sel = this.getAttribute('data-toggle-target');
      $('.tab-content').removeClass('active1').filter(sel).addClass('active1');
    });
  },
  finalize() {
    
    // JavaScript to be fired on the home page, after the init JS
  },
};
