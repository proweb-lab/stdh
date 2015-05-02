(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {

       $('.accordion .collection-title').click(function(){
          $('.accordion .colloection-info').toggleClass('active');
          $('.accordion .colloection-info').slideToggle();
        });
            $('.accordion .collection-title').click(function () {
      if ($(this).parents('.colloction-info').hasClass('active')) {
        $(this).parents('.colloction-info').removeClass('active');
      }
      else {
        $(this).parents('.colloction-info').addClass('active');
      }
      $(this).parents('.colloction-info').find('.colloction-info-body').slideToggle('slow', function () {
      });

     


    });

   
      
      
      
      
    }
       };
})(jQuery, Drupal, this, this.document);
