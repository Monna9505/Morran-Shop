<?php
/**
 * Module Video
 */
if (!isset($module)) { return; }

$video = (isset($module['video'])) ? $module['video'] : false;
?>
<div class="video">
    <div class="container">
        <?php if (!empty($video)) { ?>
            <div class="content standard-grid">
                <div class="video__wrapper">
                    <video autoplay muted>
                        <source src="<?php echo $video['url']; ?>" type="video/mp4">
                        <p><?php echo __('Your browser does not support the video tag.', 'sima-theme'); ?></p>
                    </video>
                </div>
                <div class="animated__text">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="9.5 50 960 650">
                        <defs>
                            <stop offset="0%" stop-color="#EBAB12">
                                <animate attributeName="stop-color" values="#EBAB12;#EBAB12;#EBAB12;#EBAB12" dur="4s" repeatCount="indefinite" />
                            </stop>
                            <stop offset="100%" stop-color="#EBAB12">
                                <animate attributeName="stop-color" values="#EBAB12;#EBAB12;#EBAB12;#EBAB12" dur="4s" repeatCount="indefinite" />
                            </stop>
                        </defs>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 655">
                            <text x="50%" y="50%" font-size="140" stroke-linecap="round" stroke-linejoin="round" 
                                    fill="none" stroke="#000000" stroke-width="4" stroke-dasharray="1000" stroke-dashoffset="500">
                                <tspan x="2%" dy="100"><?php echo __('Our work at', 'sima-theme'); ?></tspan>
                                <animate id="strokeAnimation" attributeName="stroke-dashoffset" from="1300" to="0" dur="6s" fill="freeze" />
                            </text>
                            <image x="-4%" y="200" width="700" height="700" xlink:href="/wp-content/uploads/2024/09/Morran-Studio-Logo.png">
                                <animate attributeName="opacity" from="0" to="1" dur="3s" fill="freeze" />
                            </image>
                        </svg>
                    </svg>
                </div>
            </div>
        <?php } ?>
    </div>
</div>