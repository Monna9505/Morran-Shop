$(window).on('scroll', function () {
    $('[data-parallax]').each(function () {
        const scrollTop = $(window).scrollTop();
        const offsetTop = $(this).offset().top;
        
        // Calculate parallax offset by scroll position
        const parallaxSpeed = 0.3; // Adjust this value to control the speed
        const parallaxOffset = (scrollTop - offsetTop) * parallaxSpeed;
        
        $(this).css('background-position', 'center ' + parallaxOffset + 'px');
    });
});