(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {


        $('.collection-title').click(function(){
            var next = $(this).next('.colloction-info');
            $(this).siblings('.colloction-info').not(next).slideUp("fast");
            next.slideToggle("fast");
        });

        $('.colloction-info').click(function(){
            $(this).siblings('.colloction-info').slideUp("fast");
            $(this).slideToggle("fast");
        });


    }
       };
})(jQuery, Drupal, this, this.document);
