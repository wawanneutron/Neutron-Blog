// make projact portfolio Neutron Blog

// event when link in to click
$('.page-scroll').on('click', function (e) {
    // get a href
    var tujuan = $(this).attr('href');
    // add elemen
    var elemenTujuan = $(tujuan);

    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    }, 1900, 'easeInOutExpo');

    e.preventDefault();

});
// when in the scroll, appears icon scroll to top
$(window).scroll(function () {
    var totalHeight = $(window).scrollTop();
    if (totalHeight > 400) {
        $(".scrolltotop").fadeIn();
    } else {
        $(".scrolltotop").fadeOut();
    }
});

//process scroll
$('a.scrolltotop').on('click', function (event) {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#home").offset().top
    }, 2000, 'easeInOutExpo');
});

// when in the scroll, appears icon scroll to top
$(window).scroll(function () {
    var totalHeight = $(window).scrollTop();
    if (totalHeight > 550) {
        $(".share").fadeIn();
    }
    else {
        $(".share").fadeOut();
    }




});





// make navbar collapse when in scroll to down lost
(function () {
    var documentElem = $(document),
        nav = $('.navbar-custom'),
        lastScrollTop = 0;

    documentElem.on('scroll', function () {
        var currentScrollTop = $(this).scrollTop();

        // scroll down
        if (currentScrollTop > lastScrollTop) nav.addClass('hidden');

        // scrollTop
        else nav.removeClass('hidden');
        lastScrollTop = currentScrollTop;
    });

})();

// preloader
$(document).ready(function () {
    $('.preloader').fadeOut();

});

// animation when in scroll the web
$(window).scroll(function () {
    var windowScroll = $(this).scrollTop();

    if (windowScroll > $('.about').offset().top - 400) {
        setTimeout(function () {

            $('.about .about-text').addClass('come-up');

        }, 100)
    }

    if (windowScroll > $('.portfolio').offset().top - 600) {
        setTimeout(function () {

            $('.portfolio .img-quote').addClass('come-up');

        }, 600)
    }

    if (windowScroll > $('.portfolio').offset().top - 600) {
        setTimeout(function () {

            $('.portfolio .quote').addClass('come-up');

        }, 600)
    }

    if (windowScroll > $('.portfolio').offset().top - 100) {
        setTimeout(function () {

            $('.portfolio .skil-animate').addClass('come-up');

        }, 800)
    }

    if (windowScroll > $('.content-about').offset().top - 400) {
        $('.content-about .about-content').each(function (i) {
            setTimeout(function () {
                $('.content-about .about-content').eq(i).addClass('come-up');
            }, 300 * (i + 1));
        });

    }

    if (windowScroll > $('.social-icon').offset().top - 600) {

        $('.social-icon .social').each(function (i) {
            setTimeout(function () {
                $('.social-icon .social').eq(i).addClass('muncul');

            }, 250 * (i + 1));
        });

    }

});

// typing text animation
$(document).ready(function () {
    var typed = new Typed(".typing", {
        strings: ["Web Programer", "Developer", "Bloger", "Designer Web", "Full Stack Developer", "College"],
        typedSpeed: 100,
        backSpeed: 60,
        loop: true
    });


});


