<?php
function declan_theme_styles() {
    // Register the style:
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1.0.0', false );
    wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', false );
    wp_enqueue_style( 'reset_css', get_template_directory_uri().'/assets/css/reset.css', array(), '1.0.0', false );
    wp_enqueue_style( 'custom_css', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', false );
    wp_enqueue_script( 'jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.0.0', TRUE );
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), '1.0.0', TRUE );
}
add_action( 'wp_enqueue_scripts', 'declan_theme_styles' );

function declan_custom_top_nav() {
    register_nav_menu('header_nav', 'Header Navigation Menu');
}
add_action('after_setup_theme', 'declan_custom_top_nav');

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );
the_post_thumbnail( 'full' );
?>