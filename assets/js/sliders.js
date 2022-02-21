
$(document).ready(function () {
    $('.header_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'ease-in-out',
        pauseOnHover: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        // prevArrow: $('.prev_header_slide'),
        // nextArrow: $('.next_header_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.voorzieningen_slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        centerMode: true,
        dots: false,
        prevArrow: $('.prev_voorzieningen_slide'),
        nextArrow: $('.next_voorzieningen_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.locatie_slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        centerMode: true,
        dots: false,
        prevArrow: $('.prev_locatie_slide'),
        nextArrow: $('.next_locatie_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.actueel_slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: $('.prev_actuele_slide'),
        nextArrow: $('.next_actuele_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
});
