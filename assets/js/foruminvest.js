import AOS from 'aos';

AOS.init({
    once: true,
    duration: 1500,
})

$(document).ready(function () {
    $(".hamburger").click(function () {
        $(".hamburgerTop, .hamburgerMiddle, .hamburgerBottom").toggleClass("open");
        $("#navbarNavDropdown").toggleClass("open");
        $(".nav-link, .dropdown-item, .menu_info").toggleClass("fade_in");
        $(".top_menu").toggleClass("black");
        $(".languages").removeClass("active");
    });

    $(".nav-link, .dropdown-item, .navbar-brand, .menu_button.open").click(function () {
        $(".menu_button").addClass("menu_closed").removeClass("menu_open");
        $(".open_icon").removeClass("hide");
        $(".close, .close_icon").addClass("hide");
        $(".menu_button, #wrapper-navbar, .top_menu").removeClass("open");
        $(".top_menu").removeClass("black");
    });

    $(".language_switcher").click(function () {
        $(".languages").toggleClass("active");
        $(".hamburgerTop, .hamburgerMiddle, .hamburgerBottom").removeClass("open");
        $("#navbarNavDropdown").removeClass("open");
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
        fade: true,
        cssEase: 'linear',
        dots: false,
        arrows: false,
    });


    $('.project_slider').slick({
        infinite: false,
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
