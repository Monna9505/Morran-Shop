<?php
/**
 * Header Links - Reusable Component
 */
$main_menu_links = get_field('main_menu_links', 'option') ?: false;

if (!empty($main_menu_links) && is_iterable($main_menu_links)) { ?>
    <div class="header__links standard-grid">
        <?php foreach ($main_menu_links as $main_link) { ?>
            <div class="main__link">
                <?php if (isset($main_link['main_link']['url']) && !empty($main_link['main_link']['url'])) { 
                    $target = (isset($main_link['main_link']['target']) && !empty($main_link['main_link']['target'])) ? $main_link['main_link']['target'] : '';
                    $title = (isset($main_link['main_link']['title']) && !empty($main_link['main_link']['title'])) ? $main_link['main_link']['title'] : __('No title', 'sima-theme');
                    ?>
                    <a href="<?php echo $main_link['main_link']['url']; ?>" target="<?php echo $target; ?>" class="main-menu-link">
                        <?php echo $title; ?>
                    </a>
                <?php } ?>
                <?php if (isset($main_link['with_sublinks']) && !empty($main_link['with_sublinks'])) { ?>
                    <?php if (isset($main_link['sublinks']) && !empty($main_link['sublinks']) && is_iterable($main_link['sublinks'])) { ?>
                        <div class="sublinks">
                            <?php foreach ($main_link['sublinks'] as $sublink) { ?>
                                <?php if (isset($sublink['sublink']['url']) && !empty($sublink['sublink']['url'])) { ?>
                                    <div class="link">
                                        <a href="<?php echo $sublink['sublink']['url']; ?>" class="sublink"><?php echo $sublink['sublink']['title']; ?></a>
                                    </div>
                                <?php } ?>
                                <?php if (isset($sublink['image_for_sublink']['url']) && !empty($sublink['image_for_sublink']['url'])) { 
                                    $alt = !empty($sublink['image_for_sublink']['alt']) ? $sublink['image_for_sublink']['alt'] : '';
                                    ?>
                                    <div class="image__sublink">
                                        <p class="image__title"><?php echo $sublink['image_for_sublink']['title']; ?></p>
                                        <img src="<?php echo $sublink['image_for_sublink']['url']; ?>" alt="<?php echo $alt; ?>" class="img_for_sublink">
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
<?php } ?>