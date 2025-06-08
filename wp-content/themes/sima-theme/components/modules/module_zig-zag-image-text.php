<?php
/**
 * Module Zig Zag Image Text
 */

if (!isset($module)) { return; }

$image_description_repeater = (isset($module['image_description_repeater'])) ? $module['image_description_repeater'] : false;
?>

<?php if (!empty($image_description_repeater) && is_array($image_description_repeater)) { ?>
    <div class="zig__zag__img__txt">
        <?php foreach ($image_description_repeater as $item) { ?>
            <div class="block standard-grid <?php echo (isset($item['right_or_left']) && !empty($item['right_or_left'])) ? $item['right_or_left'] : ""; ?>">
                <?php if (isset($item['image']['url']) && !empty($item['image']['url'])) { ?>
                    <div class="block__img">
                        <img src="<?php echo $item['image']['url']; ?>" 
                             alt="<?php echo $item['image']['alt']; ?>">
                    </div>
                <?php } ?>
                <div class="block__content">
                    <?php if (isset($item['title']) && !empty($item['title'])) { ?>
                        <h2 class="block__title">
                            <?php echo $item['title']; ?>
                        </h2>
                    <?php } ?>
                    <?php if (isset($item['description']) && !empty($item['description'])) { ?>
                        <div class="block__description">
                            <?php echo $item['description']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>