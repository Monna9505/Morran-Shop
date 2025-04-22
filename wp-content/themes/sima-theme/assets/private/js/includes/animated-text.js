function adjustFontSize() {
    const width = $(window).width();
    const svgPositions = $('.video .content .animated__text svg');
    const tspan = $('.video .content .animated__text svg text tspan');

    if (width <= 768) {
        tspan.eq(0).attr('x', '1%');
        tspan.eq(0).attr('dy', '0');
        tspan.eq(1).attr('x', '1%');
        tspan.eq(1).attr('dy', '150');

        svgPositions.attr('viewBox', '9.5 50 960 350');
    } 
}
    
// Run on page load
$(document).ready(adjustFontSize);
// Re-run on window resize
$(window).resize(adjustFontSize);

$(document).ready(function () {
    // Function to check if the text element is in viewport
    function isInViewport(element) {
        let elementTop = $(element).offset().top;
        let elementBottom = elementTop + $(element).outerHeight();
        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    // Event listener for scroll
    $(window).on('scroll', function () {
        let section = $('.video');
        
        let animatedText = $(section).find('svg text');
        if (isInViewport(animatedText) && !animatedText.hasClass('animated')) {
            animatedText.addClass('animated'); // Prevent retriggering
            $(section).find('animate[attributeName="stroke-dashoffset"]').each(function () {
                this.beginElement(); // Trigger SVG animation for each animate tag
            });
        }
    });

    // Trigger scroll event on page load to catch elements already in view
    $(window).trigger('scroll');
});