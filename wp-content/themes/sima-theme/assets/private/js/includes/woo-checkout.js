$(document).ready(function() {
    let removeButton = $('.woocommerce a.remove');

    if (removeButton.length > 0) {
        removeButton.html('<i class="fas fa-trash"></i>');
    }
});