<?php
/*
* My Theme Function
*/

// Theme Title
add_theme_support('title-tag');

// Theme css and jQuery
function arif_procoder_css_js_file_calling() {
    wp_enqueue_style( 'arif-procoder-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '1.0.0' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', [], '1.0.0' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', [], '5.0.2', 'true' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', [], '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'arif_procoder_css_js_file_calling' );

function arif_procoder_add_google_fonts() {
    wp_enqueue_style( 'arif_procoder_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@300&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'arif_procoder_add_google_fonts' );

// Theme Function
function arif_procoder_customizar_register($wp_customize) {
    $wp_customize->add_section('arif_procoder_header_area', array(
        'title' => __('Header Area', 'WordpressLearningByProCoder'),
        'description' => 'This is header area description',
    ));

    $wp_customize->add_setting('arif_procoder_logo', array(
        'default' => get_bloginfo( 'template_directory' ).'/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'arif_procoder_logo', array(
        'label' => 'Logo Upload',
        'description' => 'You can upload here...',
        'setting' => 'arif_procoder_logo',
        'section' => 'arif_procoder_header_area',
    )));
}

add_action( 'customize_register', 'arif_procoder_customizar_register' );

// Menu Register
register_nav_menu( 'primary_menu', __('Primary Menu', 'WordpressLearningByProCoder') );