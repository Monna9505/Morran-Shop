<?php
/**
 * Module Promotional Products
 */

if (!isset($module)) { return; }

$promotional_heading = (isset($module['promotional_heading'])) ? $module['promotional_heading'] : false;
$promo_short_description = (isset($module['promo_short_description'])) ? $module['promo_short_description'] : false;
$promotinal_slider = (isset($module['promotinal_slider'])) ? $module['promotinal_slider'] : false;
$p_cta_button = (isset($module['cta_button'])) ? $module['cta_button'] : false;
?>

<div class="promotional__products">
    <div class="container">
        <div class="headings">
            <?php if (!empty($promotional_heading)) { ?>
                <h2><?php echo $promotional_heading; ?></h2>
            <?php } ?>
            <?php if (!empty($promo_short_description)) { ?>
                <div class="short__description">
                    <p><?php echo $promo_short_description; ?></p>
                </div>
            <?php } ?>
        </div>
        <?php if (!empty($promotinal_slider) && is_array($promotinal_slider)) { ?>
            <div class="slider__content">
                <div class="carpet__background"></div>
                <div id="promo__slider">
                    <?php foreach ($promotinal_slider as $slide) { ?>
                            <div class="p__slide">
                                <?php if (isset($slide['image']['url']) && !empty($slide['image']['url'])) { ?>
                                    <div class="product__img">
                                        <img src="<?php echo $slide['image']['url']; ?>" 
                                            alt="<?php echo $slide['image']['alt']; ?>">
                                    </div>
                                <?php } ?>
                                <?php if (isset($slide['title']) && !empty($slide['title'])) { ?>
                                    <h4 class="slide__title"><?php echo $slide['title']; ?></h4>
                                <?php } ?>
                                <?php if (isset($slide['description']) && !empty($slide['description'])) { ?>
                                    <div class="slide__descr">
                                        <p><?php echo $slide['description']; ?></p>
                                    </div>
                                <?php } ?>
                            </div> 
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>