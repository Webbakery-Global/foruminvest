$(document).ready(function () {
    $(".hamburger").click(function () {
        $(".hamburgerTop, .hamburgerMiddle, .hamburgerBottom").toggleClass("open");
        $("#navbarNavDropdown").toggleClass("open");
        $(".nav-link, .dropdown-item, .menu_info").toggleClass("fade_in");
        $(".top_menu").toggleClass("black");
    });

    $(".nav-link, .dropdown-item, .navbar-brand, .menu_button.open").click(function () {
        $(".menu_button").addClass("menu_closed").removeClass("menu_open");
        $(".open_icon").removeClass("hide");
        $(".close, .close_icon").addClass("hide");
        $(".menu_button, #wrapper-navbar, .top_menu").removeClass("open");
        $(".top_menu").removeClass("black");
    });

    $(".all_domains").click(function () {
        $(".domains").toggleClass("active");
    });

    $(".privacy").click(function () {
        $(".privacy_modal").addClass("active");
        $("body").addClass("no-scroll-modal");
    });

    $(".disclaimer").click(function () {
        $(".disclaimer_modal").addClass("active");
        $("body").addClass("no-scroll-modal");
    });

    $("body.no-scroll-modal, .close").click(function () {
        $(".modal").removeClass("active");
        $("body").removeClass("no-scroll-modal");
    });


    // // if ESC
    document.onkeydown = function (evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            $(".modal").removeClass("active");
            $("body").removeClass("no-scroll-modal");
        }
    };

    $('.header_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        // prevArrow: $('.prev_portfolio_item'),
        // nextArrow: $('.next_portfolio_item'),
    });

    $('.team_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        // prevArrow: $('.prev_portfolio_item'),
        // nextArrow: $('.next_portfolio_item'),
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,

                }
            },
        ]
    });

    $('.project_slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: $('.prev_slide'),
        nextArrow: $('.next_slide'),
    });

});

$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {

                });
            }
        }
    });

window.onload = function () {
    var current = location.pathname;
    $('#nav li a').each(function () {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
};




document.addEventListener('DOMContentLoaded', function () {
    // When the user scrolls the page, execute myFunction
    window.addEventListener('scroll', myFunction);

    // Get the navbar
    let navbar = document.getElementById("wrapper-navbar");
    // Get the offset position of the navbar
    let sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        let scrollPosition = Math.round(window.scrollY);

        if (scrollPosition > 50) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }
});


//
// jQuery(document).ready(function () {
//     function resizeForm() {
//         let width = (window.innerWidth > 0) ? window.innerWidth : document.documentElement.clientWidth;
//         if (width < 1024) {
//             $(document).ready(function () {
//                 function portfolioSlider() {
//                     $('.portfolio_slider').slick({
//                         infinite: true,
//                         autoplay: true,
//                         autoplaySpeed: 5000,
//                         pauseOnHover: false,
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         dots: true,
//                         arrows: true,
//                         prevArrow: $('.prev_portfolio_item'),
//                         nextArrow: $('.next_portfolio_item'),
//                     });
//                 }
//                 portfolioSlider();
//             });
//
//         } else {
//
//         }
//     }
//
//     window.onresize = resizeForm;
//     resizeForm();
// });



// select all accordion items
const accItems = document.querySelectorAll(".accordion__item");

// add a click event for all items
accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

function toggleAcc() {
    // remove active class from all items exept the current item (this)
    accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
    );

    // toggle active class on current item
    if (this.classList != "accordion__item--active") {
        this.classList.toggle("accordion__item--active");
    }
}
