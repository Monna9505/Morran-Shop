<?php
/**
 * Languages Dropdown menu reusable component
 */

if (function_exists('pll_the_languages')) { 
    $current_lang = pll_current_language();
    $languages = pll_the_languages( array( 'raw' => 1 ) );
?>
<div class="languages">
    <div class="lang__wrapper">
        <div class="current_language"><?php echo strtoupper($current_lang); ?></div>
        <ul class="lang__dropdown">
            <?php foreach ($languages as $lang) { ?>
                <?php if ($lang['slug'] != $current_lang) { ?>
                    <li>
                        <a href="<?php echo $lang['url']; ?>"><?php echo strtoupper($lang['slug']); ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>