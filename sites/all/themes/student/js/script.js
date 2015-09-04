(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.student = {
    attach: function (context, settings) {

       //Begin Script toggle
    $('.collection-title').click(function() {
    $(this).next('.colloction-info').slideToggle("slow");
    $(this).toggleClass("active");
  });
          $('.payment-line-item-amount.form-control').val('100');
          $('#edit-field-pay-und-line-item-container-0-quantity').val('1');
          $('#edit-field-pay-und-line-item-container-0-tax-rate').val('0');
//          $('#edit-field-pay-und-line-item-container-0-description').val('Service fees');
          
          

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
       
 $('.form-type-checkbox input').addClass('red');
// '] = '';
//     var t=$(this).val();
//     alert(t);
//var tot=0;
////$('.form-type-checkbox:checkbox:checked').each(function(){
////tot+=parseFloat($(this).val());
////});
//// tot+=parseFloat($('#more').val());
////alert(tot);
//});

// $('input:checkbox').change(function(){
//var tot=0;
//$('input:checkbox:checked').each(function(){
//tot+=parseFloat($(this).val());
//});
// tot+=parseFloat($('#more').val());
//alert(tot);
//});



})(jQuery, Drupal, this, this.document);
//Begin function calculate other services
function checkTotal() {
    document.listForm.total.value = '';
    var sum = 0;
    for (i=0;i<document.listForm.choice.length;i++) {
        if (document.listForm.choice[i].checked) {
            sum = sum + parseFloat(document.listForm.choice[i].value);
            alert(sum);
        }
    }
    document.listForm.total.value = sum;
}
//End function calculate other services






