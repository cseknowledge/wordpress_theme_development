<?php
/*
* My Theme Function
*/

// Theme Title
add_theme_support('title-tag');

// Theme css and jQuery
function arif_procoder_css_js_file_calling() {
    wp_enqueue_style( 'arif-procoder-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_stylesheet_uri().'/css/bootstrap.css', array(), '1.0.0' );
    wp_register_style( 'custom', get_stylesheet_uri().'/css/custom.css', [], '1.0.0' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', [], '5.0.2', 'true' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', [], '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'arif_procoder_css_js_file_calling' );

// Theme Function
function arif_procoder_customizar_register($wp_customize) {
    $wp_customize->add_section('arif_procoder_header_area', array(

    ));
}