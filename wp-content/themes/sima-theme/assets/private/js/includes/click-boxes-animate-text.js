jQuery(function($) {
    $(document).ready(function () {
        // Function to check if the text element is in the viewport
        function isInViewport(element) {
            let elementTop = $(element).offset().top;
            let elementBottom = elementTop + $(element).outerHeight();
            let viewportTop = $(window).scrollTop();
            let viewportBottom = viewportTop + $(window).height();

            return elementBottom > viewportTop && elementTop < viewportBottom;
        }

        // Event listener for scroll
        $(window).on('scroll', function () {
            $('.cat__link').each(function () { // Iterate over each category link
                if (isInViewport(this) && !$(this).hasClass('animated')) {
                    $(this).toggleClass('animated'); // Add the animated class
                }
            });
        });

        // Trigger scroll event on page load to catch elements already in view
        $(window).trigger('scroll');
    });
});