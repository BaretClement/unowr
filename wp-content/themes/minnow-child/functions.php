<?php 
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/rtl.css' );
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/edito-style.css' );
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/genericons/genericons.css' );
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/genericons/genericons/genericons.css' );
	}