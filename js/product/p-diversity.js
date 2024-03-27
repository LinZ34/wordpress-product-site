document.addEventListener("DOMContentLoaded", function() {
    jQuery(document).ready(function(){
        jQuery('.case').slick({
        autoplay: false,
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><svg id="グループ_28158" data-name="グループ 28158" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#EA8030"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M16.448,32.9a1.828,1.828,0,0,0,1.292-3.12L4.412,16.448,17.74,3.12A1.827,1.827,0,0,0,15.156.535L.535,15.156a1.827,1.827,0,0,0,0,2.584L15.156,32.361a1.82,1.82,0,0,0,1.292.535" transform="translate(0 -0.318)" fill="#EA8030"/></g></svg></button>',
        nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><svg id="awwor-11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#EA8030"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M1.828,32.9a1.828,1.828,0,0,1-1.292-3.12L13.863,16.448.535,3.12A1.827,1.827,0,0,1,3.12.535L17.74,15.156a1.827,1.827,0,0,1,0,2.584L3.12,32.361a1.82,1.82,0,0,1-1.292.535" transform="translate(-0.276 -0.318)" fill="#EA8030"/></g></svg></button>',
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
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
            {
                breakpoint: 440,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false
                }
            },
        ]
    });
    jQuery('.pagelist').slick({
        autoplay: false,
        dots: false,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><svg id="グループ_28158" data-name="グループ 28158" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#EA8030"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M16.448,32.9a1.828,1.828,0,0,0,1.292-3.12L4.412,16.448,17.74,3.12A1.827,1.827,0,0,0,15.156.535L.535,15.156a1.827,1.827,0,0,0,0,2.584L15.156,32.361a1.82,1.82,0,0,0,1.292.535" transform="translate(0 -0.318)" fill="#EA8030"/></g></svg></button>',
        nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><svg id="awwor-11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#EA8030"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M1.828,32.9a1.828,1.828,0,0,1-1.292-3.12L13.863,16.448.535,3.12A1.827,1.827,0,0,1,3.12.535L17.74,15.156a1.827,1.827,0,0,1,0,2.584L3.12,32.361a1.82,1.82,0,0,1-1.292.535" transform="translate(-0.276 -0.318)" fill="#EA8030"/></g></svg></button>',
        responsive: [
            {
                breakpoint: 980,
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
            }
        ]
    });
    jQuery('.topseminarlist').slick({
        autoplay: false,
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><svg id="グループ_28158" data-name="グループ 28158" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#FFF"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M16.448,32.9a1.828,1.828,0,0,0,1.292-3.12L4.412,16.448,17.74,3.12A1.827,1.827,0,0,0,15.156.535L.535,15.156a1.827,1.827,0,0,0,0,2.584L15.156,32.361a1.82,1.82,0,0,0,1.292.535" transform="translate(0 -0.318)" fill="#FFF"/></g></svg></button>',
        nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><svg id="awwor-11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#FFF"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M1.828,32.9a1.828,1.828,0,0,1-1.292-3.12L13.863,16.448.535,3.12A1.827,1.827,0,0,1,3.12.535L17.74,15.156a1.827,1.827,0,0,1,0,2.584L3.12,32.361a1.82,1.82,0,0,1-1.292.535" transform="translate(-0.276 -0.318)" fill="#FFF"/></g></svg></button>',
        responsive: [
            {
                breakpoint: 980,
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
            }
        ]
    });
    jQuery('.topdownloadlist').slick({
        autoplay: false,
        dots: false,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><svg id="グループ_28158" data-name="グループ 28158" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#FFF"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M16.448,32.9a1.828,1.828,0,0,0,1.292-3.12L4.412,16.448,17.74,3.12A1.827,1.827,0,0,0,15.156.535L.535,15.156a1.827,1.827,0,0,0,0,2.584L15.156,32.361a1.82,1.82,0,0,0,1.292.535" transform="translate(0 -0.318)" fill="#5D4D92"/></g></svg></button>',
        nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><svg id="awwor-11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="28" viewBox="0 0 18 33"><defs><clipPath id="clip-path"><rect id="長方形_89434" data-name="長方形 89434" width="18" height="33" fill="#FFF"/></clipPath></defs><g id="グループ_28150" data-name="グループ 28150" clip-path="url(#clip-path)"><path id="パス_51302" data-name="パス 51302" d="M1.828,32.9a1.828,1.828,0,0,1-1.292-3.12L13.863,16.448.535,3.12A1.827,1.827,0,0,1,3.12.535L17.74,15.156a1.827,1.827,0,0,1,0,2.584L3.12,32.361a1.82,1.82,0,0,1-1.292.535" transform="translate(-0.276 -0.318)" fill="#5D4D92"/></g></svg></button>',
        responsive: [
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    arrows: true,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    arrows: true
                }
            }
        ]
    });
});

var subtitleElements = document.querySelectorAll('.diff-content .diff-subtitle');
var paragraphElements = document.querySelectorAll('.diff-content .diff-content-bg p');
var lwParagraphElements = document.querySelectorAll('.diff-content-lw .diff-content-bg p');
var caseTitleElements = document.querySelectorAll('.companyname');
var caseItemElements = document.querySelectorAll('.caseitem');

var maxSubtitleHeight = 0;
subtitleElements.forEach(function (element) {
    var elementHeight = element.offsetHeight;
    if (elementHeight > maxSubtitleHeight) {
        maxSubtitleHeight = elementHeight;
    }
});

subtitleElements.forEach(function (element) {
    element.style.height = maxSubtitleHeight + 'px';
});

var maxParagraphHeight = 0;
paragraphElements.forEach(function (element) {
    var elementHeight = element.offsetHeight;
    if (elementHeight > maxParagraphHeight) {
        maxParagraphHeight = elementHeight;
    }
});

paragraphElements.forEach(function (element) {
    element.style.height = maxParagraphHeight + 'px';
});

var maxLwParagraphHeight = 0;
lwParagraphElements.forEach(function (element) {
    var elementHeight = element.offsetHeight;
    if (elementHeight > maxLwParagraphHeight) {
        maxLwParagraphHeight = elementHeight;
    }
});

lwParagraphElements.forEach(function (element) {
    element.style.height = maxLwParagraphHeight + 'px';
});

var maxCaseTitleElements = 0;
caseTitleElements.forEach(function (element) {
    var elementHeight = element.offsetHeight;
    if (elementHeight > maxCaseTitleElements) {
        maxCaseTitleElements = elementHeight;
    }
});

caseTitleElements.forEach(function (element) {
    element.style.height = maxCaseTitleElements + 'px';
});

var maxCaseItemElements = 0;
caseItemElements.forEach(function (element) {
    var elementHeight = element.offsetHeight;
    if (elementHeight > maxCaseItemElements) {
        maxCaseItemElements = elementHeight;
    }
});

caseItemElements.forEach(function (element) {
    element.style.height = maxCaseItemElements + 'px';
});
})