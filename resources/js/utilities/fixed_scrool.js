/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 75) {
        $('.nav-fixed').addClass('fixed-header');
        $('.feature').addClass('feature-2');
    }
    else {
        $('.nav-fixed').removeClass('fixed-header');
        $('.feature').removeClass('feature-2');
    }
});