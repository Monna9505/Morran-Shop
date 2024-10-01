$(document).ready(function() {
    let heroSlider = $('.hero__slider');

    if (heroSlider.length > -1) {
        heroSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            prevArrow: '<button class="prev-button"><i class="fas fa-arrow-left"></i></button>',
            nextArrow: '<button class="next-button"><i class="fas fa-arrow-right"></i></button>',
        });
    }
});