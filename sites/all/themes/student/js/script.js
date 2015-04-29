(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {

       $('#accordion h3').click(function(){
          $('#accordion .colloection-info').toggleClass('active');
          $('#accordion .colloection-info').slideToggle();
        });

   
      
      
      
      
    }
       };
})(jQuery, Drupal, this, this.document);
