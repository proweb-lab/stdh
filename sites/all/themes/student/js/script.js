(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {

        $(function() {
            $( "#accordion" ).accordion();
        });
   
      
      
      
      
    }
       };
})(jQuery, Drupal, this, this.document);
