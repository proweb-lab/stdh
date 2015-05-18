
(function ($, Drupal, window, document, undefined) {

  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  Drupal.behaviors.bilbaal_registration = {
    attach: function(context, settings) {
      $(document).bind("keyup keypress", function(e) {
        var code = e.keyCode || e.which; 
        if (code  == 13) {               
          e.preventDefault();
          return false;
        }
      });

      $('.registration-step-back').click(function() {
        $('.tab-container ').removeClass('active');
        $('.' + $(this).attr('rel')).addClass('active');
        $('.registration-pager li').removeClass('active');
        $('.registration-pager li[rel="' + $(this).attr('rel') + '"]').addClass('active');
      });

      $('.registration-step').click(function(){
        var pass1 = $.trim($('#edit-password').val());
        var pass2 = $.trim($('#edit-re-password').val());
        var errors = false;
        var messages = '';
        if(pass1 == ''){
          $('#edit-step-1 #edit-password').addClass('error');
          errors = true;
        }
        if(pass2 == ''){
          $('#edit-step-1 #edit-re-password').addClass('error');
          errors = true;
        }

        if(pass1 != pass2){
          messages = 'Passwords does not match';
          errors = true;
        }

        if(errors){
          html = '<div class="messages--error messages error"><ul class="messages__list">';
          if(messages == ''){
            html += '<li>Pleae fill fields in red.</li>';
          }
          else{
            html += '<li>'+messages+'</li>';
          }
          html += '</ul></div>';

          $(html).insertBefore($('#bilbaal-member-form'));
          return false;
        }
        else{
          $('.messages--error').remove();
          $('.tab-container ').removeClass('active');
          $('.' + $(this).attr('rel')).addClass('active');
          $('.registration-pager li').removeClass('active');
          $('.registration-pager li[rel="' + $(this).attr('rel') + '"]').addClass('active');
        }
      });
    }
  };

})(jQuery, Drupal, this, this.document);
