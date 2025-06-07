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

    //Show shoe size dropdown on click
    if ($('.initial_shoe_text').length > 0) {
        $('.initial_shoe_text').on('click', function() {
            $('.initial_shoe_text').siblings('.sizes').removeClass('opened_dropdown').slideUp();
            $(this).siblings('.sizes').addClass('opened_dropdown').slideDown();
        });
    }
});