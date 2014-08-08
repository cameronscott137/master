//@codekit-prepend "gravityforms.js"
//@codekit-prepend "jquery.json-1.3.js"
//@codekit-prepend "jquery.placeholders.2.1.1.min.js"
//@codekit-prepend "flexslider.js"


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
    $('.flexslider').flexslider({
    animation: "fade",
    animationLoop: true,
    slideshow: true,
    slideshowSpeed: 10000,
    controlNav: false,
    directionNav: false,
  });
});