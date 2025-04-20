<?php
/**
 * Search bar - Reusable Component
 */
?>

<form action="/<?php the_search_query(); ?>" method="get" id="morran-search-bar">
    <div class="wrap">
        <input type="text" class="input" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo __('Search Product', 'sima-theme'); ?>">
        <i class="fas fa-search"></i>
    </div>
</form>