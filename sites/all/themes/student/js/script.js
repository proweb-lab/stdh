(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {


        $('.collection-title').click(function(){
            var next = $(this).next('.colloction-info');
            $(this).siblings('.colloction-info').not(next).slideUp("slow");
            next.slideToggle("slow");
        });

        $('.colloction-info').click(function(){
            $(this).siblings('.colloction-info').slideUp("slow");
            $(this).slideToggle("slow");
        });

      
    }
       };
})(jQuery, Drupal, this, this.document);
