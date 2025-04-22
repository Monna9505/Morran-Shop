$(document).ready(function() {
    $(".gallery .gallery__image").slice(5).hide();
    let mincount = 5;
    let maxcount = 10;
   
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 40) {
            $(".gallery .gallery__image").slice(mincount, maxcount).slideDown(2000);

            mincount = mincount + 3;
            maxcount = maxcount + 3;
        }
    });
});