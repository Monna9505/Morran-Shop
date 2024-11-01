<?php
/**
 * Module FAQ
 */
if (!isset($module)) { return; }

$faq_title = (isset($module['faq_title'])) ? $module['faq_title'] : false;
$faq = (isset($module['faq'])) ? $module['faq'] : false;
?>
<div class="faq">
    <div class="container-fluid">
        <?php if (!empty($faq_title)) { ?>
            <h2 class="faq__title"><?php echo $faq_title; ?></h2>
        <?php } ?>
        <?php if (!empty($faq) && is_array($faq)) { ?>
            <div class="faq__wrapper">
                <?php foreach ($faq as $question_answer) { ?>
                    <div class="q_and_a">
                        <?php if (isset($question_answer['question']) && !empty($question_answer['question'])) { ?>
                            <h4 class="question"><?php echo $question_answer['question']; ?><i class="fas fa-plus"></i></h4>
                        <?php } ?>
                        <?php if (isset($question_answer['answer']) && !empty($question_answer['answer'])) { ?>
                            <div class="answer">
                                <?php echo $question_answer['answer']; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?> 
            </div>
        <?php } ?>
    </div>
</div>