$(document).ready(function() {
    const imagesToShow = 6; // Number of images to show per click
    let totalImages = $(".gallery .gallery__image").length; // Total number of images
    let currentIndex = $(".gallery .gallery__image:visible").length; // Initially visible images

    $("#load-more-btn").click(function() {
        if (currentIndex < totalImages) {
            // Show the next batch of images
            $(".gallery .gallery__image")
                .slice(currentIndex, currentIndex + imagesToShow)
                .slideDown();
            currentIndex += imagesToShow;
        }

        // Hide the button if all images are shown
        if (currentIndex >= totalImages) {
            $(this).hide();
        }
    });
});