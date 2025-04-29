<?php
/**
 * Module Big Image And Three Blocks
 */

if (!isset($module)) { return; }

$bitb_section_id = (isset($module['bitb_section_id'])) ? $module['bitb_section_id'] : false;
$bitb_title = (isset($module['title'])) ? $module['title'] : false;
$bitb_short_description = (isset($module['short_description'])) ? $module['short_description'] : false;
$bitb_big_image = (isset($module['big_image'])) ? $module['big_image'] : false;
$bitb_blocks = (isset($module['blocks'])) ? $module['blocks'] : false;
?>
<section class="big__image__three__blocks" <?php echo !empty($bitb_section_id) ? 'id=' . $bitb_section_id : ''; ?>>
    <div class="container">
        <?php if (!empty($bitb_title)) { ?>
            <h2><?php echo $bitb_title; ?></h2>
        <?php } ?>
        <?php if (!empty($bitb_short_description)) { ?>
            <div class="short__description">
                <p><?php echo $bitb_short_description; ?></p>
            </div>
        <?php } ?>
        <?php if (!empty($bitb_blocks) && is_array($bitb_blocks)) { ?>
            
        <?php } ?>
    </div>
</section>