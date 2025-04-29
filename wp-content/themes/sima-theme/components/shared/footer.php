<?php
$footer_logo = get_field('footer_logo', 'option') ?: false;
$footer_main_links = get_field('main_links', 'option') ?: false;
$categories_group = get_field('categories_group', 'option') ?: false;
$contacts_group = get_field('contacts_group', 'option') ?: false;
$social_text = get_field('social_text', 'option') ?: false;
$footer_social_links = get_field('social_links', 'option') ?: false;
$privacy_policy_link = get_field('privacy_policy', 'option') ?: false;
$terms_and_conditions_link = get_field('terms_and_conditions', 'option') ?: false;
$rights_reserved_text = get_field('rights_reserved_text', 'option') ?: false;
?>
<footer>
    <div class="container">
        <div class="footer__first__part standard-grid">
            <?php if (isset($footer_logo['url']) && !empty($footer_logo['url'])) { ?>
                <a href="/" class="footer__logo">
                    <img src="<?php echo $footer_logo['url']; ?>" 
                         alt="<?php echo $footer_logo['alt']; ?>"
                         loading="lazy">
                </a>
            <?php } ?>
            <?php if (!empty($footer_main_links) && is_array($footer_main_links)) { ?>
                <div class="footer__main__links">
                    <?php foreach ($footer_main_links as $footer_link) { ?>
                        <?php if (isset($footer_link['main_footer_link']['url']) && !empty($footer_link['main_footer_link']['url'])) { 
                            $target = (isset($footer_link['main_footer_link']['target']) && !empty($footer_link['main_footer_link']['target'])) ? $footer_link['main_footer_link']['target'] : '_self';
                            $title = (isset($footer_link['main_footer_link']['title']) && !empty($footer_link['main_footer_link']['title'])) ? $footer_link['main_footer_link']['title'] : __('No Title', 'sima-theme');
                            ?>
                            <div class="footer_main_link">
                                <a href="<?php echo $footer_link['main_footer_link']['url']; ?>" target="<?php echo $target; ?>">
                                    <?php echo $title; ?>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if (isset($categories_group['category_repeater']) && !empty($categories_group['category_repeater']) && is_array($categories_group['category_repeater'])) { ?>
                <div class="categories__column">
                    <?php if (isset($categories_group['categories_title']) && !empty($categories_group['categories_title'])) { ?>
                        <h4 class="categories__title"><?php echo $categories_group['categories_title']; ?></h4>
                    <?php } ?>
                    <div class="categories">
                        <?php foreach ($categories_group['category_repeater'] as $category) { 
                            $target = (isset($category['category']['target']) && !empty($category['category']['target'])) ? $category['category']['target'] : '_self';
                            $title = (isset($category['category']['title']) && !empty($category['category']['title'])) ? $category['category']['title'] : __('No Title', 'sima-theme');
                            ?>
                            <?php if (isset($category['category']['url']) && !empty($category['category']['url'])) { ?>
                                <div class="category__link">
                                    <a href="<?php echo $category['category']['url']; ?>" target="<?php echo $target; ?>">
                                        <?php echo $title; ?>
                                    </a>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($contacts_group)) { ?>
                <div class="contacts__column">
                    <?php if (isset($contacts_group['contacts_title']) && !empty($contacts_group['contacts_title'])) { ?>
                        <h4 class="contacts__title"><?php echo $contacts_group['contacts_title']; ?></h4>
                    <?php } ?>
                    <div class="contact__links">
                        <?php if (isset($contacts_group['email']['url']) && !empty($contacts_group['email']['url'])) { ?>
                            <div class="email__field">
                                <a href="<?php echo $contacts_group['email']['url']; ?>">
                                    <?php echo $contacts_group['email']['title']; ?>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if (isset($contacts_group['telephone_number']['url']) && !empty($contacts_group['telephone_number']['url'])) { ?>
                            <div class="telephone__field">
                                <a href="<?php echo $contacts_group['telephone_number']['url']; ?>">
                                    <?php echo $contacts_group['telephone_number']['title']; ?>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if (isset($contacts_group['work_address']) && !empty($contacts_group['work_address'])) { ?>
                            <p class="address__field">
                                <?php echo $contacts_group['work_address']; ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($footer_social_links) && is_array($footer_social_links)) { ?>
                <div class="social__links">
                    <?php if (!empty($social_text)) { ?>
                        <h4 class="social__links__text"><?php echo $social_text; ?></h4>
                    <?php } ?>
                    <div class="soc__links">
                        <?php foreach ($footer_social_links as $s_link) { ?>
                            <?php if (isset($s_link['font_awesome_class']) && !empty($s_link['font_awesome_class'])) { ?>
                                <a href="<?php echo (isset($s_link['social_link']['url']) && !empty($s_link['social_link']['url'])) ? $s_link['social_link']['url'] : 'javascript:void(0)'; ?>" class="social__media__link">
                                    <i class="<?php echo $s_link['font_awesome_class']; ?>"></i>
                                </a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="footer__privacy__texts">
            <div class="privacy__texts">
                <?php if (isset($privacy_policy_link['url']) && !empty($privacy_policy_link['url'])) { ?>
                    <a href="<?php echo $privacy_policy_link['url']; ?>" class="privacy__policy">
                        <?php echo $privacy_policy_link['title']; ?>
                    </a>
                <?php } ?>
                <span> | </span>
                <?php if (isset($terms_and_conditions_link['url']) && !empty($terms_and_conditions_link['url'])) { ?>
                    <a href="<?php echo $terms_and_conditions_link['url']; ?>" class="terms__and__conditions">
                        <?php echo $terms_and_conditions_link['title']; ?>
                    </a>
                <?php } ?>
            </div>
            <?php if (!empty($rights_reserved_text)) { ?>
                <p class="rights__reserved__text"><?php echo $rights_reserved_text; ?></p>
            <?php } ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>