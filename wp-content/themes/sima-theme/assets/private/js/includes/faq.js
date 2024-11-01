$(document).ready(function() {
    $('.q_and_a .question').on('click', function() {
        // Close other answers and reset icons to plus
        $('.q_and_a').not($(this).parent()).removeClass('clicked-qa').find('.answer').slideUp();
        $('.q_and_a').not($(this).parent()).find('.fas').removeClass('fa-minus').addClass('fa-plus');
        
        // Toggle the clicked question's answer
        $(this).parent().toggleClass('clicked-qa').find('.answer').slideToggle();

        // Toggle the icon explicitly
        let icon = $(this).find('.fas');
        if (icon.hasClass('fa-plus')) {
            icon.removeClass('fa-plus').addClass('fa-minus');
        } else {
            icon.removeClass('fa-minus').addClass('fa-plus');
        }
    });
});