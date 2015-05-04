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

        if ( ($(window).height() + 100) < $(document).height() ) {
            $('#top-link-block').removeClass('hidden').affix({
                // how far to scroll down before link "slides" into view
                offset: {top:100}
            });
        }
    }
       };
})(jQuery, Drupal, this, this.document);
