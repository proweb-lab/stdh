(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {


        $('.collection-title').click(function(){
            var prev = $(this).prev('.colloction-info');
            $(this).siblings('.colloction-info').not(prev).slideUp("slow");
            prev.slideToggle("slow");
        });

        $('.colloction-info').click(function(){
            $(this).siblings('.colloction-info').slideUp("slow");
            $(this).slideToggle("slow");
        });






       /*$('.accordion .collection-title').click(function(){
          $('.accordion .colloction-info').toggleClass('active');
          $('.accordion .colloction-info').slideToggle();
        });*/


   
      
      
      
      
    }
       };
})(jQuery, Drupal, this, this.document);
