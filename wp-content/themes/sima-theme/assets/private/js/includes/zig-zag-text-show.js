$(document).ready(function() {
  $('.read__more .main-button').on('click', function(e) {
    e.preventDefault();

    let $btn = $(this);
    let $block = $btn.closest('.block');
    let $content = $block.find('.block__description');

    if ($content.is(':visible')) {
      // Slide up (hide)
      $content.slideUp(300);
      $btn.text('Read More');
    } else {
      // Slide down (show)
      $content.slideDown(300);
      $btn.text('Read Less');
    }
  });
});