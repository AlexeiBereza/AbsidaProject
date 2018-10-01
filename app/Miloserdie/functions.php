<?php 

function brightcolors_theme_styles() {
    wp_enqueue_style( 'brightcolors_style', get_stylesheet_uri() );
    wp_enqueue_style( 'fontawesome_font', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );

} 
add_action( 'wp_enqueue_scripts', 'brightcolors_theme_styles' );

function brightcolors_theme_js() {
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', '', '', true );

}
add_action( 'wp_enqueue_scripts', 'brightcolors_theme_js' );