document.addEventListener("DOMContentLoaded", function() {
    jQuery(document).ready(function(){
        jQuery('.topcolumns').slick({
        autoplay: false,
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><svg id="グループ_28158" data-name="グループ 28158" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#0087ce"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M16.448,32.9a1.828,1.828,0,0,0,1.292-3.12L4.412,16.448,17.74,3.12A1.827,1.827,0,0,0,15.156.535L.535,15.156a1.827,1.827,0,0,0,0,2.584L15.156,32.361a1.82,1.82,0,0,0,1.292.535" transform="translate(0 -0.318)" fill="#0087ce"/></g></svg></button>',
        nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><svg id="awwor-11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#0087ce"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M1.828,32.9a1.828,1.828,0,0,1-1.292-3.12L13.863,16.448.535,3.12A1.827,1.827,0,0,1,3.12.535L17.74,15.156a1.827,1.827,0,0,1,0,2.584L3.12,32.361a1.82,1.82,0,0,1-1.292.535" transform="translate(-0.276 -0.318)" fill="#0087ce"/></g></svg></button>',
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    arrows: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    arrows: true
                }
            },
        ]
    });
});
    // Sticky navbar
    const navbar = $('.topheader');
    const keyvisual = $('#home');

    $(window).scroll(function() {
        if ($(window).scrollTop() > keyvisual.offset().top) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
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
 // Find all the '.onecolumn' elements
 var elements = document.querySelectorAll('.onecolumn');

 // Find the maximum height among them
 var maxHeight = 0;
 elements.forEach(function (element) {
     var elementHeight = element.offsetHeight;
     if (elementHeight > maxHeight) {
         maxHeight = elementHeight;
     }
 });

 // Set the same height for all elements
 elements.forEach(function (element) {
     element.style.height = maxHeight + 'px';
 });
setTimeout(function() {
    const iconsContainer = document.querySelector('.allicon');
    iconsContainer.classList.add('icon-animation-trigger');
}, 1500);