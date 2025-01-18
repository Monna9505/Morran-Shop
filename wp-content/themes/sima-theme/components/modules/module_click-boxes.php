<?php
/**
 * Module Click Boxes
 */

if (!isset($module)) { return; }

$cb_section_id = (isset($module['cb_section_id'])) ? $module['cb_section_id'] : false;
$heading_cb = (isset($module['heading_cb'])) ? $module['heading_cb'] : false;
$category_links = (isset($module['category_links'])) ? $module['category_links'] : false;
?>

<div class="click__boxes" <?php echo !empty($cb_section_id) ? 'id=' . $cb_section_id : ''; ?>>
    <div class="container">
        <?php if (!empty($heading_cb)) { ?>
            <h2><?php echo $heading_cb; ?></h2>
        <?php } ?>
        <?php if (!empty($category_links) && is_array($category_links)) { ?>
            <div class="category__links standard-grid">
                <?php foreach ($category_links as $key => $cat_link) {
                        if ($key == 0) {
                            $cat_class = "large";
                        } elseif ($key == 1) {
                            $cat_class = "tall";
                        } elseif ($key == 2) {
                            $cat_class = "small-top";
                        } else {
                            $cat_class = "small-bottom";
                        }
                    ?>
                    <a href="<?php echo isset($cat_link['link']['url']) ? $cat_link['link']['url'] : 'javascript:void(0)'; ?>" class="cat__link <?php echo $cat_class; ?>">
                        <div class="overlay"></div>
                        <?php if (isset($cat_link['title'])) { ?>
                            <h4><?php echo $cat_link['title']; ?></h4>
                        <?php } ?>
                        <?php if (isset($cat_link['image']['url'])) { ?>
                            <div class="cat__image">
                                <img src="<?php echo $cat_link['image']['url']; ?>" alt="<?php echo $cat_link['image']['alt']; ?>">
                            </div>
                        <?php } ?>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>