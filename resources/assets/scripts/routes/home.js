
export default {
  init() {
    $(document).ready(function(){
	
      $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');
    
        $('ul.tabs li').removeClass('current1');
        $('.tab-content').removeClass('current1');
    
        $(this).addClass('current1');
        $('#'+tab_id).addClass('current1');
      })
    
    })
  },
  finalize() {
    
    // JavaScript to be fired on the home page, after the init JS
  },
};
