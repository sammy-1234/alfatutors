$(window).scroll(function(){ //  Scroll event of window
    var scroll = $(window).scrollTop(); // Get's the vertical position of scrollbar
    if (scroll >= 10) {
        $(".navbar-custom").addClass("scrolling");
    }
    else {
        $(".navbar-custom").removeClass("scrolling");
    }

});