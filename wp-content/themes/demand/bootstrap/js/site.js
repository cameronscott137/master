function isMobile() {
    return (
      (navigator.userAgent.match(/Android/i)) ||
      (navigator.userAgent.match(/webOS/i)) ||
      (navigator.userAgent.match(/iPhone/i)) ||
      (navigator.userAgent.match(/iPod/i)) ||
      (navigator.userAgent.match(/iPad/i)) ||
      (navigator.userAgent.match(/BlackBerry/))
      );
}

jQuery(document).ready(function($) {
      $('.clients').fadeIn();
      $( ".client-header" ).click(function() {
          $(this).next('.quote').slideToggle();
      });
});
