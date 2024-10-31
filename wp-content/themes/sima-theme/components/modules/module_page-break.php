<?php
/**
 * Module Page Break
 */

if (!isset($module)) { return; }

$image_or_video = (isset($module['image_or_video'])) ? $module['image_or_video'] : false;
$background_image_pb = (isset($module['background_image_pb'])) ? $module['background_image_pb'] : false;
$video_pb = (isset($module['video_pb'])) ? $module['video_pb'] : false;
$title_pb = (isset($module['title_pb'])) ? $module['title_pb'] : false;
$link_pb = (isset($module['link_pb'])) ? $module['link_pb'] : false;
?>
<div class="page__break" data-parallax <?php echo ($image_or_video == 'image' && !empty($background_image_pb['url'])) ? 'style="background:url(' . htmlspecialchars($background_image_pb['url']) . ') no-repeat center; background-size: cover;"' : ''; ?>>
    <?php if ($image_or_video == 'video' && isset($video_pb['url']) && !empty($video_pb['url'])) { ?>
        <video src="<?php echo $video_pb['url']; ?>"></video>
    <?php } ?>
    <div class="container">
        <div class="headings">
            <?php if (!empty($title_pb)) { ?>
                <h2 class="pb__title"><?php echo $title_pb; ?></h2>
            <?php } ?>
            <?php if (isset($link_pb['url']) && !empty($link_pb['url'])) { 
                $link = (isset($link_pb['title']) && !empty($link_pb['title'])) ? $link_pb['title'] : __('View Products', 'sima-theme');
                $target = (isset($link_pb['target']) && !empty($link_pb['target'])) ? $link_pb['target'] : '_blank';
                ?>
                <a href="<?php echo $link_pb['url']; ?>" class="main-button" target="<?php echo $target; ?>">
                    <?php echo $link; ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>