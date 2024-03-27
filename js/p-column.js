document.addEventListener("DOMContentLoaded", function() {
    jQuery(document).ready(function(){
        jQuery('.sgcolumns').slick({
            autoplay: false,
            dots: false,
            arrows: false,
            slidesToShow: 3,
            prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><svg height="28.239" viewBox="0 0 16.62 28.239" width="16.62" xmlns="http://www.w3.org/2000/svg"><path d="m325.268 429.5-13 12 13 12" style="fill:none;stroke:#0087ce;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-width:3" transform="translate(-310.768 -427.38)"/></svg></button>',
            nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="16.62" height="28.239" viewBox="0 0 16.62 28.239"><path id="パス_3308" data-name="パス 3308" d="M312.268,429.5l13,12-13,12" transform="translate(-310.148 -427.38)" fill="none" stroke="#0087ce" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/></svg></button>',
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        arrows: true
                    }
                },
            ]
        });

        var elements = document.querySelectorAll('.onecolumn');
        var maxHeight = 0;
        elements.forEach(function (element) {
            var elementHeight = element.offsetHeight;
            if (elementHeight > maxHeight) {
                maxHeight = elementHeight;
            }
        });
        elements.forEach(function (element) {
            element.style.height = maxHeight + 'px';
        });
    });
    var ajaxUrl = ajax_object.ajax_url;
    jQuery(document).ready(function($) {
        var selectedCategory = '';
        loadColumnContent(selectedCategory);

        $('#column_category').change(function() {
            selectedCategory = $(this).val();
            loadColumnContent(selectedCategory);
        });

        function loadColumnContent(category) {
            $.ajax({
                url: ajaxUrl, 
                type: 'GET',
                data: {
                    action: 'load_column_content',
                    column_category: category
                },
                success: function(response) {
                    $('#column-content ul.columns').html(response);
                    custom_pagination_links();
                }
            });
        }
    });
    const currentCategory = "<?php echo $custom_category->slug; ?>"; 
    const clmctgElement = document.querySelector('.clmctg');
    if (currentCategory) {
        clmctgElement.classList.add(currentCategory); 
    }
});

