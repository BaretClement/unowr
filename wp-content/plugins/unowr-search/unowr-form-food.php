<?php
/*
Plugin Name: Unowr search
Plugin URI: http://unowr.fr
Description: Search form for unowr.fr
Version: 1.0
Author: Labbé Nicolas
Author URI: 
*/

add_action( 'wp_enqueue_scripts', 'load_unowr_css_and_js' );
function load_unowr_css_and_js() {
	wp_enqueue_style( 'unowr', plugin_dir_url( __FILE__ ) . 'css/styles.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'unowr', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ), '1.0', true );
	wp_localize_script( 'unowr', 'unowr_config',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ))
	);
}

function html_form_code() {
	ob_start();
		include('views/form.php');
		$includedhtml = ob_get_contents();
	ob_end_clean();
	echo $includedhtml;
}

add_shortcode( 'unowr_form', 'cf_shortcode' );
function cf_shortcode() {
	ob_start();
	html_form_code();

	return ob_get_clean();
}

add_action( 'wp_ajax_unowr_search', 'unowr_search' );
function unowr_search() {
	global $wpdb; // this is how you get access to the database

	$whatever = intval( $_POST['whatever'] );

	$whatever += 10;

        echo $whatever;

	wp_die(); // this is required to terminate immediately and return a proper response
}

?>