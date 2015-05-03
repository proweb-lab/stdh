(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {

       $('.accordion .collection-title').click(function(){
          $('.accordion .colloction-info').toggleClass('active');
          $('.accordion .colloction-info').slideToggle();
        });


   
      
      
      
      
    }
       };
})(jQuery, Drupal, this, this.document);
