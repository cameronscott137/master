//@codekit-prepend "jquery.localscroll-1.2.7-min.js"
//@codekit-prepend "jquery.scrollTo-1.4.3.1-min.js"

jQuery(document).ready(function($) {
    $('.main').localScroll({
        duration: 400,
        offset: -50
    });
});