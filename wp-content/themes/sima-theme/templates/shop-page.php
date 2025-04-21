<?php
/**
 * Template Name: Shop Page
 */

include(locate_template('components/shared/header.php'));

// Get the selected category from the URL (if any)
$selected_category_slug = isset($_GET['category']) ? $_GET['category'] : null;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// Getting all product categories
$categories = get_terms(
    array(
        'taxonomy'   => 'product_cat',
        'hide_empty' => false,
    )
);

$product_args = get_query_params('product', 4, $paged, $selected_category_slug);

// Fetch products
$shop_query = new WP_Query($product_args);
?>
<div class="shop-page">
    <div class="container">
        <?php if (!empty($categories) && !is_wp_error($categories)) { ?>
            <div class="shop__categories standard-grid">
                <?php foreach ($categories as $category) { 
                    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                    $cat_image_url = wp_get_attachment_url($thumbnail_id);
                    ?>
                    <?php if ($category->name == 'All') { 
                        $url = '/shop';
                    } else { 
                        $url = add_query_arg('category', $category->slug, get_permalink());
                    } 
                    
                    if ($category->slug == $selected_category_slug) {
                        $class = 'class="active_cat"';
                    } else if ($category->name == 'All') {
                        $class = 'class="cat_all"';
                    } else {
                        $class = '';
                    }
                    ?>
                    <a href="<?php echo esc_url($url); ?>" <?php echo $class; ?>>
                        <?php if (!empty($cat_image_url)) { ?>
                            <div class="cat_image">
                                <img src="<?php echo esc_url($cat_image_url); ?>" alt="<?php echo $category->name; ?>">
                            </div>
                        <?php } ?>
                        <p class="cat_name"><?php echo esc_html($category->name); ?></p>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="products__shop__list">
            <div class="products standard-grid">
                <?php if ($shop_query->have_posts()) { ?>
                    <?php while ($shop_query->have_posts()) {
                        $shop_query->the_post(); 
                        $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] ?: false;
                        $product_short_descr = wp_trim_words(get_the_excerpt(), 10, '...') ?: false;
                        ?>
                        <div class="product standard-grid">
                            <?php if (!empty($product_image)) { ?>
                                <div class="product__image">
                                    <img src="<?php echo $product_image; ?>" alt="">
                                </div>
                            <?php } ?>
                            <div class="product__content">
                                <h3 class="product__title"><?php the_title(); ?></h3>
                                <?php if (!empty($product_short_descr)) { ?>
                                    <div class="descr">
                                        <?php echo $product_short_descr; ?>
                                    </div>
                                <?php } ?>
                                <p class="product__price">
                                    <?php woocommerce_template_loop_price(); ?>
                                </p>
                                <div class="product__buttons">
                                    <div class="view__product__button">
                                        <a href="<?php the_permalink(); ?>" class="main-button">
                                            <?php echo __('View Product', 'sima-theme'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <p><?php echo __('No products found in this category.', 'sima-theme'); ?></p>
                <?php } ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php echo pagination($shop_query); ?>
        </div>
        <?php get_template_part('template-parts/shop-promotional-products'); ?>
    </div>
</div>

<?php 
include(locate_template('components/shared/footer.php')); 
?>