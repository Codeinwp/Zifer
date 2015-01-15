jQuery( document ).ready(function() {
    
    jQuery('.categ-block img').each(function() {
      if (jQuery(this).width() > jQuery(this).height()) {
        jQuery(this).addClass('landscape');        
      }
    });
  
});