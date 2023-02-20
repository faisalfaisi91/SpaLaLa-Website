<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * Child theme functions
 */
if ( !function_exists( 'cherie_child_theme_css' ) ):
    function cherie_child_theme_css() {
        wp_enqueue_style( 'cherie_child_theme_CSS', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css');
    }
endif;
add_action( 'wp_enqueue_scripts', 'cherie_child_theme_css', 99 );


