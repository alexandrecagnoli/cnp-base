<?php

function my_load_scripts()  
{
	wp_enqueue_script( 'fa', '//kit.fontawesome.com/055cc960f1.js' );
	wp_enqueue_script( 'aos', '//unpkg.com/aos@2.3.1/dist/aos.js' );
	wp_enqueue_script( 'tiny-slider', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js' );
	wp_enqueue_script( 'countdown', get_template_directory_uri() . '/vendor/jquery.countdown.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'lightgallery', get_template_directory_uri()  . '/vendor/lightgallery/lightgallery.min.js' );
	wp_enqueue_script( 'lg-thumbnail', get_template_directory_uri()  . '/vendor/lightgallery/plugins/thumbnail/lg-thumbnail.min.js' );
	wp_enqueue_script( 'lg-zoom', get_template_directory_uri()  . '/vendor/lightgallery/plugins/zoom/lg-zoom.min.js' );
	wp_enqueue_script( 'main', get_template_directory_uri()  . '/js/main.js' );
	wp_enqueue_script( 'hamburgers', get_template_directory_uri()  . '/vendor/hamburgers.js' );
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_load_scripts", 11);