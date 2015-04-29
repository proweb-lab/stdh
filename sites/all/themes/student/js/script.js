(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {

       $('#accordion h3').click(function(){
          $('#accordion h3').toggleClass('active');
          $('#accordion h3').slideToggle();
        });

   
      
      
      
      
    }
       };
})(jQuery, Drupal, this, this.document);
