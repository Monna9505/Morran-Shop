<?php
/**
 * First Part of Header - Reusable Component
 */
$header_logo = get_field('header_logo', 'option') ?: false;
?>

<div class="header__first__part standard-grid">
    <?php include(locate_template('components/shared/header-languages.php')); ?>
    <?php if (!empty($header_logo['url'])) { 
        $alt = !empty($header_logo['alt']) ?: false;
        ?>
        <a href="/" class="header__logo">
            <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $alt ? $alt : 'Morran Logo'; ?>">
        </a>
    <?php } ?>
    <div class="search__favourites__cart standard-grid">
        <div class="dots__menu">
            <div class="first standard-grid">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="second standard-grid">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="third standard-grid">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <?php include(locate_template('components/shared/mobile-header.php')); ?>
        <div class="search standard-grid">
            <i class="fas fa-search"></i>
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