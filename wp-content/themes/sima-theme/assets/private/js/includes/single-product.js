$(document).ready(function() {
    setTimeout(function() {
        let $product = $(".single__product").find('#gallery_images');

        $product.slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 300,
            infinite: false,
            cssEase: 'ease',
            lazyLoad: 'progressive',
            dots: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 551,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                }
            ]
        });
    }, 0);

    jQuery(document).ready(function($) {
        // Toggle the dropdown when the shoe size text is clicked
        $('.initial_shoe_text').on('click', function() {
            // Find the associated dropdown and toggle it
            $(this).siblings('.sizes').slideToggle();
        });
    
        // Handle size selection
        $('.sizes li').on('click', function() {
            // Highlight the selected size
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
            
            // Get the selected size
            let selectedSize = $(this).data('size');
    
            // Optionally set the selected size in a hidden input
            $('.selected-shoe-size').val(selectedSize);
    
            // Optionally close the dropdown after selection
            $(this).closest('.sizes').slideUp();
        });
    });    
});