<?php

add_action( 'wp_enqueue_scripts', 'my_load_styles' );

function my_load_styles()
{
    wp_enqueue_style( 'aos', '//unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all' );
    wp_enqueue_style( 'tiny-slider', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css', array(), '0.01', 'all' );
    wp_enqueue_style( 'lightgallery-bundle', get_template_directory_uri() . '/vendor/lightgallery/css/lightgallery-bundle.css', array(), '0.01', 'all' );
    wp_enqueue_style( 'normalize', get_theme_file_uri( '/css/normalize.css'), array(), '0.01', 'all' );
    wp_enqueue_style( 'hamburgers', get_theme_file_uri( '/css/hamburgers.css'), array(), '0.01', 'all' );
    wp_enqueue_style( 'sandbox', get_theme_file_uri( '/css/sandbox.css'), array(), '0.01', 'all' );
    wp_enqueue_style( 'main', get_theme_file_uri( '/css/style.css'), array(), '0.01', 'all' );
    wp_enqueue_style( 'child', get_theme_file_uri( '/css/child.css'), array(), '0.01', 'all' );
    wp_enqueue_style( 'var', get_theme_file_uri( '/css/var.css'), array(), '0.01', 'all' );
}

