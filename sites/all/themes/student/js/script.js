(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {

       //Begin Script toggle
    $('.collection-title').click(function() {
    $(this).next('.colloction-info').slideToggle("slow");
    $(this).toggleClass("active");
  });

        //End Script toggle

      //Begin Script button back to top
        var offset = 350;
        var duration = 300;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });

        jQuery('.back-to-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
     //End Script button back to top
    }

       };
})(jQuery, Drupal, this, this.document);
