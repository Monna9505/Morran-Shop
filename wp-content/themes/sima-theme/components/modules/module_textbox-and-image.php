<?php
/**
 * Module TextBox and Image
 */

if (!isset($module)) { return; }

$ti_title = (isset($module['ti_title'])) ? $module['ti_title'] : false;
$ti_description = (isset($module['ti_description'])) ? $module['ti_description'] : false;
$textbox_image_repeater = (isset($module['textbox_image_repeater'])) ? $module['textbox_image_repeater'] : false;
?>
<div class="textbox__and__img">
    <div class="container">
        <?php if (!empty($ti_title)) { ?> 
            <h2 class="ti__title"><?php echo $ti_title; ?></h2>
        <?php } ?>
        <?php if (!empty($ti_description)) { ?>
            <div class="ti__descr">
                <p><?php echo $ti_description; ?></p>
            </div>
        <?php } ?>
        <?php if (!empty($textbox_image_repeater) && is_array($textbox_image_repeater)) { ?>
            <div class="textbox__image__repeater standard-grid">
                <?php foreach ($textbox_image_repeater as $index => $item) { ?>
                    <div class="service standard-grid">
                        <div class="textbox">
                            <?php if (isset($item['service_title']) && !empty($item['service_title'])) { ?>
                                <h4 class="service__title"><?php echo $item['service_title']; ?></h4>
                            <?php } ?>
                            <?php if (isset($item['short_service_description']) && !empty($item['short_service_description'])) { ?>
                                <p class="service__descr"><?php echo $item['short_service_description']; ?></p>
                            <?php } ?>
                            <?php if (isset($item['service_link']['url']) && !empty($item['service_link']['url'])) { ?>
                                <div class="service__link">
                                    <a href="<?php echo $item['service_link']['url']; ?>" class="main-button"><?php echo $item['service_link']['title']; ?></a>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if (isset($item['service_image']['url']) && !empty($item['service_image']['url'])) { ?>
                            <div class="service__image">
                                <img src="<?php echo $item['service_image']['url']; ?>" 
                                    alt="<?php echo $item['service_image']['alt']; ?>">
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>