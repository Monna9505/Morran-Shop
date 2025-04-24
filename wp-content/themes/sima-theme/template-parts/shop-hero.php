<?php
/**
 * Component Shop Hero
 */

$image_for_triangle = get_field('image_for_triangle') ?: false;
$shop_hero_title = get_field('shop_hero_title') ?: false;
$shop_hero_description = get_field('shop_hero_description') ?: false;
?>
<div class="shop-hero">
    <div class="triangle triangle-left">
        <div class="container content__wrapper">
            <?php if (!empty($shop_hero_title)) { ?>
                <h2 class="shop-hero-title"><?php echo $shop_hero_title; ?></h2>
            <?php } ?>
            <?php if (!empty($shop_hero_description)) { ?>
                <div class="shop-hero-descr">
                    <?php echo $shop_hero_description; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="triangle triangle-right">
        <?php if (isset($image_for_triangle['url']) && !empty($image_for_triangle['url'])) { ?>
            <img src="<?php echo $image_for_triangle['url']; ?>" alt="">
        <?php } ?>
    </div>
</div>