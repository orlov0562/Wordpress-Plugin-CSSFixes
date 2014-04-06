<?php
/*
Plugin Name: CSSFixes
Plugin URI: http://www.it-rem.ru/wordpress-dobavlenie-css-cherez-plagin.html
Description: Add some css-es to themes. Useful if you use theme which can be auto updated
Version: 1.0.0
Author: Vitaliy S. Orlov
Author URI: http://www.it-rem.ru/
License: any
*/

add_action( 'wp_enqueue_scripts', 'cssfixes_frontend_stylesheet' );
add_action( 'admin_enqueue_scripts', 'cssfixes_backend_stylesheet' );
add_action( 'admin_init', 'cssfixes_editor_stylesheet');

function cssfixes_frontend_stylesheet() {
    wp_register_style( 'cssfixes-style', plugins_url('frontend-style.css', __FILE__) );
    wp_enqueue_style( 'cssfixes-style' );
}

function cssfixes_backend_stylesheet() {
    wp_register_style( 'cssfixes-style', plugins_url('backend-style.css', __FILE__) );
    wp_enqueue_style( 'cssfixes-style' );
}

function cssfixes_editor_stylesheet() {
    global $editor_styles;
    if (is_admin()) $editor_styles = array('../../plugins/cssfixes/editor-style.css');
}