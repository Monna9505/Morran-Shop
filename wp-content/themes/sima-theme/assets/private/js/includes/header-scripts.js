$(document).ready(function() {
    let sublinks = $('.header__links .main__link .sublinks');

    if (sublinks.length > 0) {
        sublinks.each(function() {
            // Find the <a> tag inside the closest .main__link
            let mainLink = $(this).closest('.main__link').find('a.main-menu-link');
            
            // Check if the chevron icon is already added, then append if not
            if (!mainLink.find('.fa-chevron-down').length) {
                mainLink.append('<i class="fas fa-chevron-down"></i>');
            }
        });
    }

    $('.sublinks').hide();

    $(".wrap .fa-search").click(function() {
        $(".wrap, .wrap .input").toggleClass("active");
        $(".wrap input[type='text']").focus();
    });

    // Close the search bar when clicking outside of it
    $(document).click(function(event) {
        // Check if the click target is outside the search bar
        if (!$(event.target).closest(".wrap").length) {
            $(".wrap, .wrap .input").removeClass("active");
        }
    });

    if ($(window).width() > 991) {
        // Show/hide languages on hover
        $('.lang__dropdown').hide();
            
        $('.lang__wrapper').mouseenter(function() {
            $('.lang__dropdown').stop().slideDown();
        });

        $('.lang__wrapper').mouseleave(function() {
            $('.lang__dropdown').stop().slideUp();
        });

        // Mega Menu dropdown
        $('.main__link').on('mouseenter', function() {
            $(this).find('.sublinks').stop().slideDown();
            $(this).addClass('hovered-main-link');
        });
        $('.main__link').on('mouseleave', function() {
            $(this).find('.sublinks').stop().slideUp();
            $(this).removeClass('hovered-main-link');
        });

        // Show image on hover on sublink
        $('.image__sublink').not(":first").hide();

        $('.sublink').hover(function() {
            $('.image__sublink').hide();
            $(this).closest('.link').next('.image__sublink').fadeToggle();
        });
    }

    // Show main menu
    $('.header__wrapper .dots__menu').on('click', function() {
        $('.mobile__header__wrapper .header__links').slideToggle();
    });

    $('.mobile__header__wrapper .lang__dropdown').hide();
            
    $('.mobile__header__wrapper .header__links .lang__wrapper').on('click', function() {
        $('.mobile__header__wrapper .header__links .lang__dropdown').slideToggle();
    });

    $('.mobile__header__wrapper .header__links .main__link').on('click', function() {
        // Close any open submenus in other links
        $('.mobile__header__wrapper .header__links .main__link').not(this).removeClass('clicked-main-link').find('.sublinks').slideUp();

        // Toggle current link's submenu
        $(this).toggleClass('clicked-main-link');

        let submenu = $(this).find('.sublinks');

        // Check if submenu is already visible
        if (submenu.is(':visible')) {
            submenu.stop().slideUp();
        } else {
            submenu.stop().slideDown();
        }
    }); 
});