<?php

function load_stylesheets(){
    wp_register_style( 'stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style( 'stylesheet');

    wp_register_style( 'custom', get_template_directory_uri() . '/dist/styles.css', '', 1, 'all');
    wp_enqueue_style( 'custom');
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script( 'custom', get_template_directory_uri() . '/dist/app.js', 'jquery', 1, true );
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts','load_javascript');

//Add Google Fonts
function wpb_add_google_fonts() {
 
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap', false ); 
}
     
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
    

//Add Menus
add_theme_support( 'menus' );

register_nav_menus( array(
    'top-menu' => 'Top Menu'
) );