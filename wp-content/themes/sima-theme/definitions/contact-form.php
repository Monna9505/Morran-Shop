<?php

/*
*  Contact Form
*/
add_action( 'wp_ajax_contacts_form', 'contacts_form' );
add_action( 'wp_ajax_nopriv_contacts_form', 'contacts_form' );

/*
* Creating E-mail Message
*/
function contacts_form() {
  //check honeypot protection from bots
  if(!$_REQUEST['data']['website']){

      $subject  = "E-mail sent from Morran Studio \r\n";
      $mail     = "E-mail sent from Morran Studio \r\n";
      $mail     .= "From: " . $_REQUEST['data']['name'] . "\r\n";
      $mail     .= "E-mail: " . $_REQUEST['data']['email'] . "\r\n";
      $mail     .= "Message: " . $_REQUEST['data']['message'] . "\r\n";

    /*
    * PHP Mailer variables
    */
    $headers = 'From: '. $_REQUEST['data']['email'] . "\r\n" .
    'Reply-To: ' . $_REQUEST['data']['email'] . "\r\n";

    // All ACF fields related to the form

    $to = 'todor@morran.studio';

    $sent = wp_mail($to, $subject, strip_tags($mail), $headers);

      /*
      * Validation & Response
      */
      if( $sent ) {
        //  message sent!
        wp_send_json_success(__('Thank you for your message!', 'sima-theme'));
      } else {
        wp_send_json_error(__('There was a problem sending your message. Please try again later.', 'sima-theme'));
    }
  }

  wp_send_json_error(__('There was a problem sending your message. Please try again later.', 'sima-theme'));
  exit();
}