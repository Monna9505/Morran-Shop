<?php
/**
 * Module New Products
 */

if (!isset($module)) { return; }

$np_section_id = (isset($module['np_section_id'])) ? $module['np_section_id'] : false;
$new_products_title = (isset($module['new_products_title'])) ? $module['new_products_title'] : false;
$new_products = (isset($module['new_products'])) ? $module['new_products'] : false;
?>
<div class="new__products" <?php echo !empty($np_section_id) ? 'id=' . $np_section_id : ''; ?>>
    <div class="container">
        <?php if (!empty($new_products_title)) { ?>
            <h2><?php echo $new_products_title; ?></h2>
        <?php } ?>
        <?php if (!empty($new_products) && is_iterable($new_products)) { ?>
            <div class="product__items standard-grid">
                <div class="left__content">
                    <?php foreach ($new_products as $key=>$new_arrival_left_img) { ?>
                        <?php if (isset($new_arrival_left_img['product_image']['url']) && !empty($new_arrival_left_img['product_image']['url'])) { ?>
                            <div class="new__arrival-hidden-img" current-selection="current-hovered-<?php echo $key; ?>">
                                <img src="<?php echo $new_arrival_left_img['product_image']['url']; ?>" 
                                     alt="<?php echo $new_arrival_left_img['product_image']['alt']; ?>">
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="right__content">
                    <?php foreach ($new_products as $key=>$new_arrival_descr) { ?>
                        <div class="new__arrival-hidden-descr" current-selection="current-hovered-<?php echo $key; ?>">
                            <?php if (isset($new_arrival_descr['product_title']) && !empty($new_arrival_descr['product_title'])) { ?>
                                <h4 class="new__arrival__title"><?php echo $new_arrival_descr['product_title']; ?></h4>
                            <?php } ?>
                            <?php if (isset($new_arrival_descr['product_description']) && !empty($new_arrival_descr['product_description'])) { ?>
                                <div class="new__arrival__descr"><?php echo $new_arrival_descr['product_description']; ?></div>
                            <?php } ?>
                            <?php if (isset($new_arrival_descr['product_link']['url']) && !empty($new_arrival_descr['product_link']['url'])) { ?>
                                <a href="<?php echo $new_arrival_descr['product_link']['url']; ?>" class="main-button">
                                    <?php echo $new_arrival_descr['product_link']['title']; ?>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="image__grid standard-grid">
                        <?php foreach ($new_products as $key=>$new_arrival_images) { ?>
                            <?php if (isset($new_arrival_images['product_image']['url']) && !empty($new_arrival_images['product_image']['url'])) { ?>
                                <div class="new__arrival-image" current-selection="current-hovered-<?php echo $key; ?>">
                                    <img src="<?php echo $new_arrival_images['product_image']['url']; ?>" 
                                         alt="<?php echo $new_arrival_images['product_image']['alt']; ?>">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>