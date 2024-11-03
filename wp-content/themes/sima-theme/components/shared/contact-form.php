<?php
/**
 * Template Part Name: Contact Form
 */
?>
<div class="contact__us" id="contacts">
    <div class="container">
        <h3 class="contacts-us-title"><?php echo __('Send a message', 'sima-theme'); ?></h3>
        <div class="contacts">
            <form method="POST" id="contact__form">
                <div class="name__email">
                    <div class="name">
                        <input type="text" name="name" id="name" placeholder="<?php echo __('Name', 'sima-theme'); ?>">
                    </div>
                    <div class="email">
                        <input type="email" name="email" id="email" placeholder="<?php echo __('Email Address', 'sima-theme'); ?>">
                    </div>
                </div>
                <div class="message">
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                </div>
                <div class="send">
                    <input class="secondary-button" id="submit" type="submit">
                </div>
                <div id="response__message"></div>
            </form>
        </div>
    </div>
</div>