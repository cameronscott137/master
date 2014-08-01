//@codekit-prepend "collapse.js"
//@codekit-prepend "dropdown.js"
//@codekit-prepend "transition.js"
//@codekit-prepend "modal.js"
//@codekit-prepend "map.js"
//@codekit-prepend "gravityforms.js"
//@codekit-prepend "jquery.json-1.3.js"
//@codekit-prepend "jquery.placeholders.2.1.1.min.js"
//@codekit-prepend "jquery.localscroll-1.2.7-min.js"
//@codekit-prepend "jquery.scrollTo-1.4.3.1-min.js"


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
    if(isMobile()) {
      jQuery('body').addClass('mobile');
    }

    $('.entry-meta').localScroll(
    {
      duration: 700,
      offset: -100
    });

    $('.social').localScroll(
    {
      duration: 700,
      offset: -100
    });

    $('.category-toggle').toggle(
        function() {
          $( '.categories' ).addClass( "selected" );
        }, function() {
          $( '.categories' ).removeClass( "selected" );
        }
    );
});


jQuery(window).scroll(function() {
    if(!isMobile()) {
          var scrollPosition = jQuery(this).scrollTop();
          jQuery(".hero.js").css({"position":"fixed"});
          jQuery('.hero.js .container .row').css({
            'opacity' : 1-(scrollPosition/200)
          });
          jQuery(".featured-image").css({"background-position":"center "+(-scrollPosition/8)+"px"});
    } else{
         // jQuery(".hero").css({"position":"absolute"});
    }
});

