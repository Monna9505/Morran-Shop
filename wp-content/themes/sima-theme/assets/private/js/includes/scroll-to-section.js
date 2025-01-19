jQuery(function($) {
    $(document).ready(function() {
        let hash = window.location.hash;
        console.log(hash);
        if (hash) {
            var target = $(hash);
            $('html, body').animate({
              scrollTop: target.offset().top - 250
            }, 1000);
        }
    });
});  