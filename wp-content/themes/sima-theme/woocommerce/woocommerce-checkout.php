<?php
/**
 * Woocommerce change checkout page
 */
 
 /*
  * Cart and Checkout on one page
  */
add_action( 'woocommerce_before_checkout_form', 'orbis_cart_on_checkout_page_only', 5 );
function orbis_cart_on_checkout_page_only() {
if ( is_wc_endpoint_url( 'order-received' ) ) return;
echo do_shortcode('[woocommerce_cart]');
}

/* overrides cart url to checkout url, since it has no cart page set, and to make the update button work */
add_filter('woocommerce_get_cart_url', 'orbis_cart_checkout_override');
function orbis_cart_checkout_override () {
    return wc_get_page_permalink( 'checkout' );
}

/* Avoid Empty Cart Redirect @ WooCommerce Checkout */
add_filter( 'woocommerce_checkout_redirect_empty_cart', '__return_false' );
add_filter( 'woocommerce_checkout_update_order_review_expired', '__return_false' );

//Remove notice message when product is added to the cart
add_filter( 'wc_add_to_cart_message_html', '__return_null' );

//Remove user login
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );

//Remove notices-wrapper from checkout
remove_action('woocommerce_before_checkout_form', 'woocommerce_output_all_notices', 10);

//Remove COUPON code field from checkout
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 10 );

//Change checkout fields
add_filter( 'woocommerce_default_address_fields' , 'custom_override_postcode_validation' );
function custom_override_postcode_validation( $address_fields ) {
    unset($address_fields['postcode']);
    unset($address_fields['address_2']);
    unset($address_fields['state']);
    unset($address_fields['city']);
    unset($address_fields['country']);

    $address_fields['first_name']['priority'] = 1;
    $address_fields['last_name']['priority'] = 2;
    $address_fields['company']['priority'] = 5;
    $address_fields['address_1']['priority'] = 6;

    $address_fields['first_name']['label'] =  __( 'Name', 'sima-theme' );
    $address_fields['first_name']['placeholder'] = __( 'Your first name', 'sima-theme' );
    $address_fields['first_name']['class'] = array('checkout-field');

    $address_fields['last_name']['label'] =  __( 'Last Name', 'sima-theme' );
    $address_fields['last_name']['placeholder'] = __( 'Your last name', 'sima-theme' );
    $address_fields['last_name']['class'] = array('checkout-field');

    $address_fields['company']['label'] =  __( 'Company', 'sima-theme' );
    $address_fields['company']['placeholder'] = __( 'Company name', 'sima-theme' );
    $address_fields['company']['class'] = array('checkout-field');

    $address_fields['address_1']['label'] =  __( 'Region', 'sima-theme' );
    $address_fields['address_1']['placeholder'] = __( 'Exact address of facility', 'sima-theme' );
    $address_fields['address_1']['class'] = array('checkout-field');

    return $address_fields;
}

add_filter( 'woocommerce_checkout_fields', 'aptekan_checkout_fields' );
function aptekan_checkout_fields( $fields ){
    //reorder
    $fields['billing']['billing_email']['priority'] = 3;
    $fields['billing']['billing_phone']['priority'] = 4;

    $fields['billing']['billing_email']['placeholder'] = __( 'Вашият имейл', 'infraconcept' );

    $fields['billing']['billing_email']['class'] = array('checkout-field');
    $fields['billing']['billing_phone']['class'] = array('checkout-field');

    $fields['order']['order_comments']['label'] = __('Message', 'sima-theme');
    $fields['order']['order_comments']['placeholder'] = __('Additional Information', 'sima-theme');
    return $fields;
}

//Change cart empty message
remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_action( 'woocommerce_cart_is_empty', 'orbis_empty_cart_message', 10 );
function orbis_empty_cart_message() {
    $html  = '<p class="cart-empty woocommerce-info">';
    $html .= wp_kses_post( apply_filters( 'wc_empty_cart_message', __( 'No products added', 'sima-theme' ) ) );;
    $html .= '</p>';
    echo $html;
}

/**
 * Change "Return To Shop" text
*/
add_filter( 'woocommerce_return_to_shop_text', 'filter_woocommerce_return_to_shop_text', 10, 1 );
function filter_woocommerce_return_to_shop_text ( $default_text ) {
    $default_text = __( 'All products', 'sima-theme' );

    return $default_text;
}

/**
 *	Remove 'Billing' from error messages
*/
add_filter( 'woocommerce_add_error', 'customize_wc_errors' );
function customize_wc_errors( $error ) {
    if ( strpos( $error, 'Billing ' ) !== false ) {
        $error = str_replace("Billing ", "", $error);
    }
    return $error;
}

/**
 * Change "Place Order" Button text
*/
add_filter( 'woocommerce_order_button_text', 'orbis_custom_button_text' );
function orbis_custom_button_text( $button_text ) {
    return __( 'Send offer request', 'sima-theme' );
}

/**
* Disable payment methods
*/
add_filter( 'woocommerce_cart_needs_payment', '__return_false' );