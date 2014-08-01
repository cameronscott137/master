jQuery(document).ready(function($) {

    var confirm = $('input:radio[name="download[confirmation]"]');
    var confirm_checked = $('input:radio[name="download[confirmation]"]:checked');

    if ( $(confirm_checked).val() === 'Yes') {
      $('.confirm').css('display', 'block');
      $('.landing').css('display', 'none');
      //$('.landing .field').val('');
    }

    $(confirm).click(function() {
      var value = $(this).val();
      if (value === "No") {
        $('.confirm').hide('fast');
        $('.landing').show('fast');
        //$('.confirm .field').val('');
      } else {
        $('.confirm').show('fast');
        $('.landing').hide('fast');
        //$('.landing .field').val('');
      }
    });



});