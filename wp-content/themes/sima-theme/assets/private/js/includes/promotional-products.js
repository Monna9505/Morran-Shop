$(document).ready(function() {
    let promoSlider = $('#promo__slider');

    if (promoSlider.length > -1) {
        promoSlider.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '0',
            infinite: true,
            prevArrow: '<button class="prev-button"><i class="fas fa-arrow-left"></i></button>',
            nextArrow: '<button class="next-button"><i class="fas fa-arrow-right"></i></button>',
            responsive: [
                {
                  breakpoint: 765,
                  settings: {
                    slidesToShow: 1,
                    centerMode: false,
                  }
                }
            ]
        });
    }
});