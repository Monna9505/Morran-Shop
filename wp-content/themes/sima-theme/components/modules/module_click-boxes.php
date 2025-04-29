<?php
/**
 * Module Click Boxes
 */

if (!isset($module)) { return; }

$cb_section_id = (isset($module['cb_section_id'])) ? $module['cb_section_id'] : false;
$heading_cb = (isset($module['heading_cb'])) ? $module['heading_cb'] : false;
$category_links = (isset($module['category_links'])) ? $module['category_links'] : false;
?>
<section class="click__boxes" <?php echo !empty($cb_section_id) ? 'id=' . $cb_section_id : ''; ?>>
    <div class="container">
        <?php if (!empty($heading_cb)) { ?>
            <h2><?php echo $heading_cb; ?></h2>
        <?php } ?>
        <?php if (!empty($category_links) && is_array($category_links)) { ?>
            <div class="category__links standard-grid">
                <?php foreach ($category_links as $key => $cat_link) {
                    $title = (isset($cat_link['title']) && !empty($cat_link['title'])) ? $cat_link['title'] : 'Morran Link';
                    $alt = (isset($cat_link['image']['alt']) && !empty($cat_link['image']['alt'])) ? $cat_link['image']['alt'] : 'Morran Img';
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
                    <a href="<?php echo isset($cat_link['link']['url']) ? $cat_link['link']['url'] : '#'; ?>" 
                       title="<?php echo $title; ?>"
                       class="cat__link <?php echo $cat_class; ?>">
                        <div class="overlay"></div>
                        <?php if (isset($cat_link['title'])) { ?>
                            <h3><?php echo $cat_link['title']; ?></h3>
                        <?php } ?>
                        <?php if (isset($cat_link['image']['url'])) { ?>
                            <div class="cat__image">
                                <img src="<?php echo $cat_link['image']['url']; ?>" alt="<?php echo $alt; ?>" loading="lazy">
                            </div>
                        <?php } ?>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>