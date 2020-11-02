jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var loader = $('#loader');
    var loader_container = $('#preloader');
    var scroll = $(window).scrollTop();
    var scrollup = $('.scrollup');
    var menu_toggle = $('.menu-toggle');
    var dropdown_toggle = $('.main-navigation button.dropdown-toggle');
    var nav_menu = $('.main-navigation ul.nav-menu');
    var regular = $('.regular');
    var testimonial_slider  = $('.testimonial-slider');

/*------------------------------------------------
            PRELOADER
------------------------------------------------*/

    loader_container.delay(1000).fadeOut();
    loader.delay(1000).fadeOut("slow");

/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        }
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/

    if( $(window).width() < 767 ) {
        $('#top-bar').click(function(){
            $('#top-bar .wrapper').slideToggle();
            $('#top-bar').toggleClass('top-menu-active');
        });
    }

    menu_toggle.click(function(){
        nav_menu.slideToggle();
       $('.main-navigation').toggleClass('menu-open');
       $('.menu-overlay').toggleClass('active');
    });

    dropdown_toggle.click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.menu-sticky #masthead').addClass('nav-shrink');
        }
        else {
            $('.menu-sticky #masthead').removeClass('nav-shrink');
        }
    });

/*------------------------------------------------
            SLICK SLIDER
------------------------------------------------*/

$('#featured-slider').slick();
$('.regular').slick({
    responsive: [
    {
    breakpoint: 992,
        settings: {
            slidesToShow: 3,
            centerMode: false,
            arrows: true
        }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
      }
    },

    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
      }
    },

    ]
});


testimonial_slider.slick({
    responsive: [
    {
    breakpoint: 992,
        settings: {
            slidesToShow: 1,
            centerMode: false,
            arrows: false
        }
    }
    ]
});




/*------------------------------------------------
                PHOTO GALLERY
------------------------------------------------*/
    $('.grid').packery({
        itemSelector: '.grid-item',
        gutter: 0
    });

    var $container = $('.grid');

    $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        $('nav.portfolio-filter ul li').removeClass('active');
        $(this).parent().addClass('active');
        return false;
    });

    packery = function () {
        $container.isotope({
            resizable: true,
            itemSelector: '.grid-item',
            layoutMode : 'masonry',
            gutter: 0
        });
    };
    packery();

/*------------------------------------------------
                MAGNIFIC POPUP
------------------------------------------------*/

    $('.gallery-popup').magnificPopup( {
        delegate:'.popup', type:'image', tLoading:'Loading image #%curr%...',
        gallery: {
            enabled: true, navigateByImgClick: true, preload: [0, 1]
        }
        , image: {
            tError:'<a href="%url%">The image #%curr%</a> could not be loaded.', titleSrc:function(item) {
                return item.el.attr('title');
            }
        }
    });

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});