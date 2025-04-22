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
                        <text x="50%" y="50%" font-size="140" stroke-linecap="round" stroke-linejoin="round" 
                            fill="none" stroke="#EBAB12" stroke-width="5" stroke-dasharray="1000" stroke-dashoffset="600">
                            <tspan x="2%" dy="100"><?php echo __('Our work at', 'sima-theme'); ?></tspan>
                            <tspan x="2%" dy="200"><?php echo __('Morran Studio', 'sima-theme'); ?></tspan>
                            <animate id="strokeAnimation" attributeName="stroke-dashoffset" from="1000" to="0" dur="7s" fill="freeze" />
                        </text>
                    </svg>
                </div>
            </div>
        <?php } ?>
    </div>
</div>