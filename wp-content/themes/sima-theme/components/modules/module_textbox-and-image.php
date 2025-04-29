<?php
/**
 * Module TextBox and Image
 */

if (!isset($module)) { return; }

$ti_section_id = (isset($module['ti_section_id'])) ? $module['ti_section_id'] : false;
$ti_title = (isset($module['ti_title'])) ? $module['ti_title'] : false;
$ti_description = (isset($module['ti_description'])) ? $module['ti_description'] : false;
$textbox_image_repeater = (isset($module['textbox_image_repeater'])) ? $module['textbox_image_repeater'] : false;
?>
<section class="textbox__and__img" <?php echo !empty($ti_section_id) ? 'id=' . $ti_section_id : ''; ?>>
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
                <?php foreach ($textbox_image_repeater as $index => $item) { 
                    $zigzag_class = ($index % 2 === 0) ? 'zigzag-odd' : 'zigzag-even'; 
                    $has_link = (isset($item['service_link']['url']) && !empty($item['service_link']['url'])) ? 'with-link' : 'no-link';
                    $link = (isset($item['service_link']['url']) && !empty($item['service_link']['url'])) ? $item['service_link']['url'] : '#';
                    $alt = (isset($item['service_image']['alt']) && !empty($item['service_image']['alt'])) ? $item['service_image']['alt'] : 'Morran Image';
                    $title = (isset($item['service_link']['title']) && !empty($item['service_link']['title'])) ? $item['service_link']['title'] : 'Morran Title';
                ?>
                    <div class="service <?php echo $zigzag_class; ?>">
                        <div class="textbox__wrapper">
                            <a href="<?php echo $link; ?>" class="textbox__content <?php echo $has_link; ?>" title="<?php echo $title; ?>">
                                <?php if (isset($item['service_title']) && !empty($item['service_title'])) { ?>
                                    <h4 class="service__title"><?php echo $item['service_title']; ?></h4>
                                <?php } ?>
                                <?php if (isset($item['short_service_description']) && !empty($item['short_service_description'])) { ?>
                                    <p class="service__descr"><?php echo $item['short_service_description']; ?></p>
                                <?php } ?>
                            </a>
                        </div>
                        <?php if (isset($item['service_image']['url']) && !empty($item['service_image']['url'])) { ?>
                            <div class="service__image">
                                <img src="<?php echo $item['service_image']['url']; ?>" 
                                     alt="<?php echo $alt; ?>"
                                     loading="lazy">
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>