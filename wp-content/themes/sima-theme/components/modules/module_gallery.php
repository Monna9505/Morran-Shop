<?php
/**
 * Module Gallery
 */
$morran_gallery = (isset($module['gallery'])) ? $module['gallery'] : false;
$main_title = (isset($module['main_title'])) ? $module['main_title'] : false;
?>
<section class="gallery__section">
    <div class="container">
        <?php if (!empty($main_title)) { ?>
            <h1 class="main__title"><?php echo $main_title; ?></h1>
        <?php } ?>
        <?php if (!empty($morran_gallery) && is_array($morran_gallery)) { ?>
            <div class="gallery">
                <?php foreach ($morran_gallery as $index=>$gallery_item) { 
                    $alt = (isset($gallery_item['gallery_image']['alt']) && !empty($gallery_item['gallery_image']['alt'])) ? $gallery_item['gallery_image']['alt'] : 'Morran Gallery Image'; 
                    ?>
                    <?php if (isset($gallery_item['gallery_image']['url']) && !empty($gallery_item['gallery_image']['url'])) { ?>
                        <a href="<?php echo $gallery_item['gallery_image']['url']; ?>" class="gallery__image" data-lightbox="image-gallery" style="<?php echo $index < 6 ? 'display:block;' : 'display:none;'; ?>">
                            <img src="<?php echo $gallery_item['gallery_image']['url']; ?>" alt="<?php echo $alt; ?>" loading="lazy">
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="load__imgs">
                <p id="load-more-btn" class="main-button"><?php echo __('Load More', 'sima-theme'); ?></p>
            </div>
        <?php } ?>
    </div>
</section>