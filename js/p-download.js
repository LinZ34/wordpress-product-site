document.addEventListener("DOMContentLoaded", function() {
    jQuery(document).ready(function(){
        jQuery('.upper-download').slick({
        arrows: true, 
        prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35"><circle id="楕円形_31" data-name="楕円形 31" cx="17.5" cy="17.5" r="17.5" fill="#c3c3c3"/><path id="パス_821" data-name="パス 821" d="M1.672,11.984a1.2,1.2,0,0,1-1.2-1.139L0,1.258A1.2,1.2,0,0,1,1.258,0l9.587.474a1.2,1.2,0,0,1-.058,2.4h-.06L2.461,2.461l.409,8.266a1.2,1.2,0,0,1-1.138,1.256Z" transform="translate(10.679 17.608) rotate(-45)" fill="#fff"/></svg></button>',
        nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35"><g id="グループ_1781" data-name="グループ 1781" transform="translate(-1103 -669)"><circle id="楕円形_31" data-name="楕円形 31" cx="17.5" cy="17.5" r="17.5" transform="translate(1103 669)" fill="#c3c3c3"/><path id="パス_821" data-name="パス 821" d="M1.672,0a1.2,1.2,0,0,0-1.2,1.139L0,10.726a1.2,1.2,0,0,0,1.256,1.256l9.587-.474a1.2,1.2,0,0,0-.058-2.4h-.06l-8.266.409.409-8.266A1.2,1.2,0,0,0,1.732,0Z" transform="translate(1118.848 695.082) rotate(-135)" fill="#fff"/></g></svg></button>',
        dots: true,
        slidesToShow: 1, 
        centerMode: true, 
        slidesToScroll:1, 
        centerPadding: '10%',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false, 
                    slidesToShow: 2, 
                    centerMode: false, 
                    slidesToScroll:1, 
                }
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: false, 
                    slidesToShow: 1,
                    centerMode: false, 
                    slidesToScroll:1, 
                }
            },
        ]
        });
    });
});

