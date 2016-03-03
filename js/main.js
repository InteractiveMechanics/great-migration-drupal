$(function(){

    // If you're scrolling and not at the top of the page...
    $(window).scroll(function() {
        if(!$(window).scrollTop()) {
            $('nav.navbar').removeClass('scrolled');
        } else {
            $('nav.navbar').addClass('scrolled');
        }
    });

});