$(function(){

    // If you're scrolling and not at the top of the page...
    $(window).scroll(function() {
        if(!$(window).scrollTop()) {
            $('nav.navbar').removeClass('scrolled');
        } else {
            $('nav.navbar').addClass('scrolled');
        }
    });

    // Rotate through images on the artwork page automagically
    var images = $('.artwork-hero-image').find('img');
    if (images.length > 1) {
        var total = images.length;
        var count = 0;

        function changeImage() {
            images.removeClass('in');
            $('.artwork-hero-image img:eq(' + count + ')').addClass('in');

            count++;
            if (count > total - 1){ count = 0; }
        }
        setInterval(changeImage, 5000);
    }

});