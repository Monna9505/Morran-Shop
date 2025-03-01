$(document).ready(function () {
    let catSlider = $('.shop__categories');

    function initSlickForSmallScreens() {
        if ($(window).width() < 991) {
            if (!catSlider.hasClass('slick-initialized')) {
                catSlider.slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    prevArrow: '<div class="previous-cat"><i class="fas fa-chevron-circle-left"></i></div>',
                    nextArrow: '<div class="next-cat"><i class="fas fa-chevron-circle-right"></i></div>',
                    infinite: false,
                    responsive: [
                        {
                          breakpoint: 768,
                          settings: {
                            slidesToShow: 2.5
                          }
                        },
                        {
                          breakpoint: 575,
                          settings: {
                            slidesToShow: 1.5
                          }
                        },
                        {
                            breakpoint: 420,
                            settings: {
                              slidesToShow: 1
                            }
                          }
                      ]
                });
            }
        } else {
            if (catSlider.hasClass('slick-initialized')) {
                catSlider.slick('unslick'); // Destroy slider for larger screens
            }
        }
    }

    // Initialize slider on page load
    initSlickForSmallScreens();

    // Re-check and reinitialize slider on window resize
    $(window).on('resize', function () {
        initSlickForSmallScreens();
    });
});
