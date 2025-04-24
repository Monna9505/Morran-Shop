<?php
/**
 * The Template for displaying all single products
 */

$product_id = get_the_ID();
$product = wc_get_product($product_id); // Properly initialize the product object
$product_title = $product->get_name();
$product_content = $product->get_description();
$product_image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail') ?: false;
$gallery_images = $product->get_gallery_image_ids() ?: false;
$add_to_cart_url = wc_get_checkout_url() . '?add-to-cart=' . $product_id;
$product_color = $product->get_attribute('pa_color');
$product_size = $product->get_attribute('pa_size');

include(locate_template('components/shared/header.php'));
?>
<div class="single__product">
    <div class="container">
        <div class="poduct__wrapper standard-grid">
            <div class="product__images">
                <?php if (!empty($product_image[0])) { ?>
                    <a href="<?php echo the_post_thumbnail_url(); ?>" class="product__main__image" data-lightbox="product-gallery">
                        <img src="<?php echo esc_url($product_image[0]); ?>" alt="">
                    </a>
                <?php } ?>
                <?php if (!empty($gallery_images)) { ?>
                    <div class="product__gallery standard-grid" id="gallery_images">
                        <?php foreach ($gallery_images as $image_id) { 
                            $image_url = wp_get_attachment_url($image_id); ?>
                            <a href="<?php echo esc_url($image_url); ?>" class="gallery__item" data-lightbox="product-gallery">
                                <img src="<?php echo esc_url($image_url); ?>" alt="Product Gallery Image">
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="product__content">
                <h3 class="product__title"><?php echo esc_html($product_title); ?></h3>
                <div class="product__descr">
                    <?php if (!empty($product_content)) { ?>
                        <div class="descr"><p><?php echo wp_kses_post($product_content); ?></p></div>
                    <?php } ?>
                </div>
                <?php if (!empty($product->price)) { ?>
                    <div class="price">
                        <p><?php echo __('Price', 'sima-theme') . ': ' . $product->price . ' ' . get_woocommerce_currency_symbol(); ?></p>
                    </div>
                <?php } ?>
                <?php if (!empty($product_color)) { ?>
                    <div class="product_color">
                        <p><?php echo __('Color: ' . $product_color, 'sima-theme'); ?></p>
                    </div>
                <?php } ?>
                <?php if (!empty($product_size)) { ?>
                    <div class="product_size">
                        <p><?php echo __('Size: ' . $product_size, 'sima-theme'); ?></p>
                    </div>
                <?php } ?>
                <div class="quantity-wrapper">
                    <button type="button" class="minus">-</button>
                    <?php
                        woocommerce_quantity_input([
                            'min_value'   => apply_filters('woocommerce_quantity_input_min', 1, $product),
                            'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
                            'input_value' => isset($_POST['quantity']) ? wc_stock_amount($_POST['quantity']) : 1, // default value
                        ]);
                    ?>
                    <button type="button" class="plus">+</button>
                </div>
                <div class="add_to_cart">
                    <a href="<?php echo esc_url($add_to_cart_url); ?>" class="main-button">
                        <?php echo esc_html(__('Add to Offer', 'sima-theme')); ?>
                    </a>
                </div>
            </div>
        </div>
        <?php if (function_exists('woocommerce_output_related_products')) { ?>
            <div class="related__products__wrapper">
                <?php woocommerce_output_related_products([
                    'posts_per_page' => 3,
                    'columns'        => 3,
                    'image_size'     => 'full'
                ]); ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php include(locate_template('components/shared/footer.php')); ?>