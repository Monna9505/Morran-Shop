<?php
/**
 * First Part of Header - Reusable Component
 */
$header_logo = get_field('header_logo', 'option') ?: false;
?>

<div class="header__first__part standard-grid">
    <?php if (function_exists('pll_the_languages')) { 
            $current_lang = pll_current_language();
            $languages = pll_the_languages( array( 'raw' => 1 ) );
        ?>
        <div class="languages">
            <div class="lang__wrapper">
                <a href="<?php echo $current_lang; ?>" class="current_language"><?php echo strtoupper($current_lang); ?></a>
                <ul class="lang__dropdown">
                    <?php foreach ($languages as $lang) { ?>
                        <?php if ($lang['slug'] != $current_lang) { ?>
                            <li>
                                <a href="<?php echo $lang['url']; ?>"><?php echo strtoupper($lang['slug']); ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php } ?>
    <?php if (!empty($header_logo['url'])) { 
        $alt = !empty($header_logo['alt']) ?: false;
        ?>
        <a href="/" class="header__logo">
            <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $alt ? $alt : 'Morran Logo'; ?>">
        </a>
    <?php } ?>
    <div class="search__favourites__cart standard-grid">
        <div class="search standard-grid">
            <i class="fas fa-search"></i>
            <p><?php echo __('Search', 'sima-theme'); ?></p>
        </div>
        <?php include(locate_template('components/shared/search-bar.php')); ?>
        <?php if (!defined('WISHLIST_ADDED')) {
            define('WISHLIST_ADDED', true);
            ?>
            <a href="<?php echo get_permalink( get_option( 'yith_wcwl_wishlist_page_id' ) ); ?>" class="wishlist__button">
                <i class="fas fa-heart"></i>
            </a>
        <?php } ?>
    </div>
</div>