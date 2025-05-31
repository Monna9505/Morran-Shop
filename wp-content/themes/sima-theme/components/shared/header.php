<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <?php
        $header_logo = get_field('header_logo', 'option') ?: false;
    ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header__wrapper">
            <div class="container standard-grid">
                <?php if (!empty($header_logo['url'])) { 
                    $alt = (isset($header_logo['alt']) && !empty($header_logo['alt'])) ? $header_logo['alt'] : 'Morran Studio Logo';
                    ?>
                    <a href="/" class="header__logo" title="Morran Studio Logo">
                        <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $alt; ?>" loading="lazy">
                    </a>
                <?php } ?>
                <?php include(locate_template('components/shared/header-links.php')); ?>
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
                    <div class="desktop-searchbar">
                        <?php include(locate_template('components/shared/search-bar.php')); ?>
                    </div>
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
        </div>
    </header>
</html>