<?php
/**
 * First Part of Header - Reusable Component
 */
$header_logo = get_field('header_logo', 'option') ?: false;
?>
<div class="header__first__part standard-grid">
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
        <a href="<?php echo wc_get_cart_url(); ?>" class="cart" title="<?php _e( 'View your shopping cart' ); ?>">
            <span class="cart__icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </span>
            <span class="cart__items__amount">
                <?php echo WC()->cart->get_cart_contents_count(); ?>
            </span>
        </a>
    </div>
</div>