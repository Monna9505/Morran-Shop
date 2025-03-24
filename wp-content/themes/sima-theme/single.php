<?php
/**
 * The template for displaying all single posts
 */

if (function_exists('is_product') && is_product()) {
    // Load your custom WooCommerce single product template
    include(locate_template('woocommerce/single-product.php'));
} else {
    // Fallback for other post types
    while (have_posts()) : the_post(); ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            </main>
        </div>
    <?php endwhile;
}