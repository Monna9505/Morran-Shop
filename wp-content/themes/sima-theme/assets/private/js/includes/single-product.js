$(document).ready(function() {
    setTimeout(function() {
        let $product = $(".single__product").find('#gallery_images');
        let imageCount = $product.find('img').length;

        if (imageCount >= 5) {
            console.log('test');
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
        }
    }, 0);
});