$(document).ready(function() {
    // Initially show the first image and description
    $('.new__arrival-hidden-img').hide();
    $('.new__arrival-hidden-descr').hide();
    $('.new__arrival-hidden-img').first().show();
    $('.new__arrival-hidden-descr').first().show();

    // When an image in the grid is clicked
    $('.image__grid .new__arrival-image').on('click', function() {
        // Get the current-selection value of the clicked image
        let currentClicked = $(this).attr('current-selection');

        // Hide all images on the left and descriptions
        $('.new__arrival-hidden-img').hide();
        $('.new__arrival-hidden-descr').hide();

        // Find and show the matching image and description
        $('.new__arrival-hidden-img[current-selection="' + currentClicked + '"]').fadeIn('slow').show();
        $('.new__arrival-hidden-descr[current-selection="' + currentClicked + '"]').fadeIn('slow').show();
    });
});
