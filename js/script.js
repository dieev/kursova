$(function() {
    $('.slider__items').slick({
        dots: false,
        arrows: false,
    });
});

$(function() {
    $('.partners__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        dots: false,
        variableWidth: true,
        nextArrow: '<button class="slick-arrow slick-next"><img src="images/arrow-next.png" alt=""></button>',
        prevArrow: '<button class="slick-arrow slick-prev"><img src="images/arrow-prev.png" alt=""></button>',
        responsive: [{
                breakpoint: 1630,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                }
            },
            {

                breakpoint: 1110,
                settings: {
                    arrows: false,
                    // slidesToShow: 2,
                }
            },
            {
                breakpoint: 790,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }
            },
        ]

    });
});

$(function() {
    $('.btn__menu').on('click', function() {
        $('.menu__list').slideToggle();
    });
});

var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 500) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '500');
});