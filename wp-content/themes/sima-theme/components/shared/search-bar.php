<?php
/**
 * Search bar - Reusable Component
 */
?>

<form action="/<?php the_search_query(); ?>" method="get" id="search-bar">
    <div class="container">
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php echo __('Search Product', 'sima-theme'); ?>">
        <input class="secondary-button" type="submit" id="submit-search">
    </div>
</form>