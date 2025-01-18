<?php
/**
 * Module Two Columns
 */

if (!isset($module)) { return; }

$tc_section_id = (isset($module['tc_section_id'])) ? $module['tc_section_id'] : false;
$dtc_title = (isset($module['dtc_title'])) ? $module['dtc_title'] : false;
$dtc_description = (isset($module['dtc_description'])) ? $module['dtc_description'] : false;
$two_columns = (isset($module['two_columns'])) ? $module['two_columns'] : false;
?>

<div class="two__columns" <?php echo !empty($tc_section_id) ? 'id=' . $tc_section_id : ''; ?>>
    <div class="container titles">
        <?php if (!empty($dtc_title)) { ?>
            <h2 class="dtc__title"><?php echo $dtc_title; ?></h2>
        <?php } ?>
        <?php if (!empty($dtc_description)) { ?>
            <div class="dtc__description">
                <p><?php echo $dtc_description; ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="columns__wrapper">
        <div class="container">
            <?php if (!empty($two_columns) && is_iterable($two_columns)) { ?>
                <div class="columns__content standard-grid">
                    <div class="first__column">
                        <div class="col-img">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/pics/img/Morran-Belt.png' ?>" alt="Morran Bag">
                        </div>
                        <div class="col-content">
                            <?php if (isset($two_columns['title']) && !empty($two_columns['title'])) { ?>
                                <h3><?php echo $two_columns['title']; ?></h3>
                            <?php } ?>
                            <?php if (isset($two_columns['description']) && !empty($two_columns['description'])) { ?>
                                <div class="descr">
                                    <p><?php echo $two_columns['description']; ?></p>
                                </div>
                            <?php } ?>
                            <?php if (isset($two_columns['column_repeater']) && !empty($two_columns['column_repeater']) && is_array($two_columns['column_repeater'])) { ?>
                                <div class="column__repeater">
                                    <?php foreach ($two_columns['column_repeater'] as $item) { ?>
                                        <div class="col-item standard-grid">
                                            <?php if (isset($item['font_awesome_icon']) && !empty($item['font_awesome_icon'])) {
                                                echo $item['font_awesome_icon'];
                                            } ?>
                                            <div class="col-content">
                                                <?php if (isset($item['column_title']) && !empty($item['column_title'])) { ?>
                                                    <p class="col-title"><?php echo $item['column_title']; ?></p>
                                                <?php } ?>
                                                <?php if (isset($item['text_or_email_or_phone_number']) && $item['text_or_email_or_phone_number'] == 'text') { ?>
                                                    <?php if (isset($item['text']) && !empty($item['text'])) { ?>
                                                        <p class="text"><?php echo $item['text']; ?></p>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <?php if (isset($item['link']['url']) && !empty($item['link']['url'])) { ?>
                                                        <a href="<?php echo $item['link']['url']; ?>">
                                                            <?php echo $item['link']['title']; ?>
                                                        </a>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if (isset($two_columns['with_or_without_contact_form']) && $two_columns['with_or_without_contact_form'] == 'yes') { ?>
                        <div class="second__column">
                            <?php include(locate_template('components/shared/contact-form.php')); ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <?php if (isset($two_columns['with_or_without_contact_form']) && $two_columns['with_or_without_contact_form'] == 'yes') { ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.8762131141484!2d-0.0638748066303099!3d51.53383023611747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cdd3c6da561%3A0x75afb5f07feeb672!2sContainerville%20Corbridge%20Cresent!5e0!3m2!1sen!2suk!4v1722778683141!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <?php } ?>
    </div>
</div>