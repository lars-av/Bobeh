
export default {
  init() {
    $(document).ready(function(){
	
      $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');
    
        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');
    
        $(this).addClass('current');
        $('#'+tab_id).addClass('current');
      })
    
    })
  },
  finalize() {
    
    // JavaScript to be fired on the home page, after the init JS
  },
};
