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
  $search = array();
	if(isset($_POST)){
		if(isset($_POST['ambiance'])){
			$search['ambiance'] = array(
        'taxonomy' => 'ambiance',
        'terms'    => $_POST['ambiance']
      );
		}
		if(isset($_POST['localisation'])){
			$search['localisation'] = array(
        'taxonomy' => 'localisation',
        'terms'    => $_POST['localisation']
      );
		}
		if(isset($_POST['occasion'])){
			$search['occasion'] = array(
        'taxonomy' => 'occasion',
        'terms'    => $_POST['occasion']
      );
		}
		if(isset($_POST['type_de_cuisine'])){
			$search['type_de_cuisine'] = array(
        'taxonomy' => 'type_de_cuisine',
        'terms'    => $_POST['type_de_cuisine']
      );
		}
	}

  $args = array (
	  'posts_per_page' => -1,
	  'order' => 'DESC',
    'tax_query' => array($search)
  );

  global $post;
  $myposts = get_posts( $args );
  echo json_encode($myposts);

	wp_die(); // this is required to terminate immediately and return a proper response
}

?>