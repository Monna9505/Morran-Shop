<?php
/**
 * Module Big Image And Three Blocks
 */

if (!isset($module)) { return; }

$bitb_title = (isset($module['title'])) ? $module['title'] : false;
$bitb_short_description = (isset($module['short_description'])) ? $module['short_description'] : false;
$bitb_big_image = (isset($module['big_image'])) ? $module['big_image'] : false;
$bitb_blocks = (isset($module['blocks'])) ? $module['blocks'] : false;
?>
<script>console.log(<?php echo json_encode($bitb_blocks); ?>)</script>
<div class="big__image__three__blocks">
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
</div>