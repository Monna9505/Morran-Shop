<?php
/**
 * Module Hero
 */

if (!isset($module)) { return; }

$hero_image_hero_slider = (isset($module['hero_image_hero_slider'])) ? $module['hero_image_hero_slider'] : false;
$hero_slider = (isset($module['hero_slider'])) ? $module['hero_slider'] : false;
$hero_image = (isset($module['hero_image'])) ? $module['hero_image'] : false;
?>
<div class="hero">
    <?php if (!empty($hero_image_hero_slider) && $hero_image_hero_slider == 'hero-slider') { ?>
        <?php if (!empty($hero_slider)  && is_array($hero_slider)) { ?>
            <div class="hero__slider">
                <?php foreach ($hero_slider as $slide) { 
                    $has_text = (isset($slide['slide_title']) && !empty($slide['slide_title'])) || (isset($slide['slide_description']) && !empty($slide['slide_description']));
                    ?>
                    <div class="slide">
                        <div class="content">
                            <?php if ($has_text) { ?>
                                <div class="slide__text">
                                    <div class="descr standard-grid">
                                        <?php if (isset($slide['slide_title']) && !empty($slide['slide_title'])) { ?>
                                            <div class="slide__title">
                                                <h1><?php echo $slide['slide_title']; ?></h1>
                                            </div>
                                        <?php } ?>
                                        <?php if (isset($slide['slide_description']) && !empty($slide['slide_description'])) { ?>
                                            <div class="slide__description"><?php echo $slide['slide_description']; ?></div>
                                        <?php } ?>
                                    </div>
                                    <?php if (isset($slide['slide_link']['url']) && !empty($slide['slide_link']['url'])) { ?>
                                        <div class="slide__button">
                                            <a href="<?php echo $slide['slide_link']['url']; ?>" class="main-button">
                                                <?php echo $slide['slide_link']['title']; ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php if (isset($slide['slide_image']['url']) && !empty($slide['slide_image']['url'])) { 
                                $alt = (isset($slide['slide_image']['alt']) && !empty($slide['slide_image']['alt'])) ? $slide['slide_image']['alt'] : __('Slide Image', 'sima-theme');
                                ?>
                                <div class="slide__img">
                                    <img src="<?php echo $slide['slide_image']['url']; ?>" alt="<?php echo $alt; ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    <?php } else if (!empty($hero_image)) { 
        $image = $hero_image['hero_image']['url'];
        ?>
        <div class="hero__banner" <?php echo (isset($image) && !empty($image)) ? "style='background: url($image) no-repeat center'" : ''; ?>>
            <div class="hero__content-wrapper">
                <div class="title__overlay"></div>
                <div class="content">
                    <?php if (isset($hero_image['hero_title']) && !empty($hero_image['hero_title'])) { ?>
                        <h1 class="hero__title"><?php echo $hero_image['hero_title']; ?></h1>
                    <?php } ?>
                    <?php if (isset($hero_image['hero_link']['url']) && !empty($hero_image['hero_link']['url'] )) { ?>
                        <a href="<?php echo $hero_image['hero_link']['url']; ?>" class="secondary-button">
                            <?php echo $hero_image['hero_link']['title']; ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>