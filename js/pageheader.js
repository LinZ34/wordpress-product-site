document.addEventListener("DOMContentLoaded", function() {
    // Sticky navbar
    const navbar = $('.topheader');
    const navwrapper = $('.header-wrapper');
    const keyvisual = $('#home');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            navbar.addClass('scrolled');
            navwrapper.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
            navwrapper.removeClass('scrolled');
        }
    });

    // Mobile navigation toggle
    const collapser = document.querySelector(".navbar-toggler");
    const navlist = document.querySelector(".navlist");
    const header = document.querySelector(".header_items");

    collapser.addEventListener("click", function () {
        navlist.classList.toggle("expanded");
        header.classList.toggle("expanded");
    });

    // Hamburger menu icon toggle
    const hamburgerIcons = document.querySelectorAll('#nav-icon1, #nav-icon2, #nav-icon3, #nav-icon4');
    hamburgerIcons.forEach(function(icon) {
        icon.addEventListener('click', function() {
            icon.classList.toggle('open');
        });
    });
});