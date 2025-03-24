<?php
/**
 * Component Shop Promotional Products
 */

$promotional_products_shop_title = get_field('promotional_products_shop_title') ?: false;
$sale_products = get_query_params('product', 6, null, null, 'yes');

$prod_query = new WP_Query($sale_products);
?>
<div class="shop__promotional__products">
    <?php if (!empty($promotional_products_shop_title)) { ?>
        <h2 class="promo-shop-products-title">
            <?php echo $promotional_products_shop_title; ?>
        </h2>
    <?php } ?>
    <?php if ($prod_query->have_posts()) { ?>
        <div class="promo__shop__products standard-grid">
            <?php while ($prod_query->have_posts()) {
                $prod_query->the_post(); 
                $promo_product_image = wp_get_attachment_image_src(get_post_thumbnail_id())[0] ?: false;
                ?>
                <a href="<?php echo the_permalink(); ?>" class="promo">
                    <?php if (!empty($promo_product_image)) { ?>
                        <img src="<?php echo $promo_product_image; ?>" alt="">
                    <?php } ?>
                    <p class="product__sale__price">
                        <?php woocommerce_template_loop_price(); ?>
                    </p>
                </a>
            <?php } ?>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php } ?>
</div>