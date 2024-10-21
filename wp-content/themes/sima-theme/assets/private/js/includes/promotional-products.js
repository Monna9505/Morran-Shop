$(document).ready(function() {
    let promoSlider = $('#promo__slider');

    if (promoSlider.length > -1) {
        promoSlider.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<button class="prev-button"><i class="fas fa-arrow-left"></i></button>',
            nextArrow: '<button class="next-button"><i class="fas fa-arrow-right"></i></button>',
            infinite: false,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    }
});
