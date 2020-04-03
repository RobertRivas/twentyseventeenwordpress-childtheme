<?php

function mychildtheme_enqueue_styles() {
  $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
  }
  add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


    add_action( 'woocommerce_before_checkout_form', 'checkout_message' );
function checkout_message() {
echo '<p>Please fill all required fields. Thank you!</p>';
}