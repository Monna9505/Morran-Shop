<?php

/**
 * Enqueuing styles & scripts of the theme
 */
function sima_custom_assets_enqueue() {
    wp_enqueue_style( 'sima-default-theme-styles', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'sima-main-theme-styles', get_stylesheet_directory_uri() . '/assets/public/css/styles.css', array(), null);
    wp_enqueue_style( 'slick-styles', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css',  array(), null );
    wp_enqueue_style( 'lightbox-styles', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', array(), null );

    wp_enqueue_script( 'slick-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'sima-theme-scripts', get_stylesheet_directory_uri() . '/assets/public/js/scripts.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'sima_custom_assets_enqueue' );