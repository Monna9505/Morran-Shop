/**
 * Scripts go here.
 *
 * In order to enqueue a script use as follows without the star (*) in front:
 * //=include includes/file.js
 */

jQuery(function($) {
    $(document).ready(function() {
    
        // Show/hide languages on hover
        $('.lang__dropdown').hide();
        
        $('.lang__wrapper').mouseenter(function() {
            $('.lang__dropdown').stop().slideDown();
        });
    
        $('.lang__wrapper').mouseleave(function() {
            $('.lang__dropdown').stop().slideUp();
        });
    
        // Show/hide search bar on 'click'
        $('#search-bar').hide();
    
        $('.search').on('click', function(event) {
            $('#search-bar').fadeToggle();
        });
    
        // Mega Menu dropdown
        $('.sublinks').hide();
        $('.main__link').on('mouseenter', function() {
            $(this).find('.sublinks').stop().slideDown();
            $('body').addClass('blurred-body');
        });
        $('.main__link').on('mouseleave', function() {
            $(this).find('.sublinks').stop().slideUp();
            $('body').removeClass('blurred-body');
        });
    
        // Show image on hover on sublink
        $('.image__sublink').hide().first().show(); 
    
        $('.sublink').hover(function() {
            $('.image__sublink').hide();
            $(this).closest('.link').next('.image__sublink').fadeToggle();
        });
    });
});