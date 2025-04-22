<?php
/**
 * Module Gallery
 */
$morran_gallery = (isset($module['gallery'])) ? $module['gallery'] : false;
$main_title = (isset($module['main_title'])) ? $module['main_title'] : false;
?>
<div class="gallery__section">
    <div class="container">
        <?php if (!empty($main_title)) { ?>
            <h1 class="main__title"><?php echo $main_title; ?></h1>
        <?php } ?>
        <?php if (!empty($morran_gallery) && is_array($morran_gallery)) { ?>
            <div class="gallery">
                <?php foreach ($morran_gallery as $gallery_item) { ?>
                    <?php if (isset($gallery_item['gallery_image']['url']) && !empty($gallery_item['gallery_image']['url'])) { ?>
                        <div class="gallery__image">
                            <img src="<?php echo $gallery_item['gallery_image']['url']; ?>" alt="">
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>