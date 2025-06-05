<?php
/**
 * Module Hero
 */

if (!isset($module)) { return; }

$hero_section_id = (isset($module['hero_section_id'])) ? $module['hero_section_id'] : false;
$hero_image_hero_slider = (isset($module['hero_image_hero_slider'])) ? $module['hero_image_hero_slider'] : false;
$hero_slider = (isset($module['hero_slider'])) ? $module['hero_slider'] : false;
$hero_image = (isset($module['hero_image'])) ? $module['hero_image'] : false;
?>
<section class="hero">
    <div class="container">
        <?php if (!empty($hero_image_hero_slider) && $hero_image_hero_slider == 'hero-slider') { ?>
            <?php if (!empty($hero_slider)  && is_array($hero_slider)) { ?>
                <div class="hero__slider">
                    <?php foreach ($hero_slider as $slide) { 
                        $has_text = (isset($slide['slide_title']) && !empty($slide['slide_title'])) || (isset($slide['slide_description']) && !empty($slide['slide_description']));
                        ?>
                        <div class="slide">
                            <div class="content standard-grid">
                                <?php if ($has_text) { ?>
                                    <div class="slide__text">
                                        <div class="descr">
                                            <?php if (isset($slide['slide_title']) && !empty($slide['slide_title'])) { ?>
                                                <div class="slide__title">
                                                    <h1><?php echo $slide['slide_title']; ?></h1>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($slide['slide_description']) && !empty($slide['slide_description'])) { ?>
                                                <div class="slide__description"><?php echo $slide['slide_description']; ?></div>
                                            <?php } ?>
                                            <?php if (isset($slide['slide_link']['url']) && !empty($slide['slide_link']['url'])) { 
                                                $title = (isset($slide['slide_link']['title']) && !empty($slide['slide_link']['title'])) ? $slide['slide_link']['title'] : 'Morran Slide';
                                                ?>
                                                <div class="slide__button">
                                                    <a href="<?php echo $slide['slide_link']['url']; ?>" class="main-button" title="<?php echo $title; ?>">
                                                        <?php echo $title; ?>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (isset($slide['slide_image']['url']) && !empty($slide['slide_image']['url'])) { 
                                    $alt = (isset($slide['slide_image']['alt']) && !empty($slide['slide_image']['alt'])) ? $slide['slide_image']['alt'] : __('Slide Image', 'sima-theme');
                                    $link = (isset($slide['slide_link']['url']) && !empty($slide['slide_link']['url'])) ? $slide['slide_link']['url'] : '#';
                                    ?>
                                    <a href="<?php echo $link; ?>" class="slide__img">
                                        <img src="<?php echo $slide['slide_image']['url']; ?>" alt="<?php echo $alt; ?>" loading="lazy">
                                    </a>
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
                    <div class="content">
                        <div class="title__overlay"></div>
                        <?php if (isset($hero_image['hero_title']) && !empty($hero_image['hero_title'])) { ?>
                            <h1 class="hero__title"><?php echo $hero_image['hero_title']; ?></h1>
                        <?php } ?>
                        <?php if (isset($hero_image['hero_link']['url']) && !empty($hero_image['hero_link']['url'] )) { 
                            $title = (isset($hero_image['hero_link']['title']) && !empty($hero_image['hero_link']['title'])) ? $hero_image['hero_link']['title'] : 'Morran Hero Title';
                            ?>
                            <a href="<?php echo $hero_image['hero_link']['url']; ?>" class="main-button" title="<?php echo $title; ?>">
                                <?php echo $title; ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>