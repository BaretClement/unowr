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
		include('views/results.php');
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
add_action( 'wp_ajax_nopriv_unowr_search', 'unowr_search' );
function unowr_search() {
	global $wpdb; // this is how you get access to the database
	$search = array();
	if(isset($_POST)){
		if(isset($_POST['agenda']) && !empty($_POST['agenda'])){
			$search['agenda'] = array(
	        	'taxonomy' => 'agenda',
	        	'terms'    => $_POST['agenda']
        	);
		}
		if(isset($_POST['ambiance']) && !empty($_POST['ambiance'])){
			$search['ambiance'] = array(
	        	'taxonomy' => 'ambiance',
	        	'terms'    => $_POST['ambiance']
        	);
		}
		if(isset($_POST['localisation']) && !empty($_POST['localisation'])){
			$search['localisation'] = array(
				'taxonomy' => 'localisation',
	        	'terms'    => $_POST['localisation']
        	);
		}
		if(isset($_POST['occasion']) && !empty($_POST['occasion'])){
			$search['occasion'] = array(
				'taxonomy' => 'occasion',
				'terms'    => $_POST['occasion']
        	);
		}
		if(isset($_POST['type_de_cuisine']) && !empty($_POST['type_de_cuisine'])){
			$search['type_de_cuisine'] = array(
				'taxonomy' => 'type_de_cuisine',
				'terms'    => $_POST['type_de_cuisine']
			);
		}
	}

	$args = array (
		'post_type' => 'restaurant',
		'posts_per_page' => -1,
		'order' => 'DESC',
		'tax_query' => array($search)
    );

	global $post;
	// $myposts = get_posts($args);
	$query = new WP_Query($args);
	$posts = $query->get_posts();

	// $args = array( 'post_type' => 'restaurant', 'posts_per_page' => 10 );
	// $the_query = new WP_Query( $args ); 
	// if ( $the_query->have_posts() ) {
	// 	var_dump($the_query); die();
	// }
	// while ( $the_query->have_posts() ) : $the_query->the_post();

	$res = array();
	foreach ($posts as $key => $post) {
		if(isset($post->post_title)){

			$cat = get_the_terms($post->ID, 'type_de_cuisine');
			$ambiances = get_the_terms($post->ID, 'ambiance');
			$array_ambiances = array();

			foreach ($ambiances as $k => $val) {
				$array_ambiances[] = $val->name;
			}

			$customFieds = get_post_custom($post->ID);
			$res[] = array(
				'title' => $post->post_title,
				'name' => $post->post_name,
				'guid' => $post->guid,
				'id' => $post->ID,
				'content' => $post->post_content,
				'prenom_du_contact' => $customFieds['prenom_du_contact'][0],
				'nom_du_contact' => $customFieds['nom_du_contact'][0],
				'nom_du_restaurant' => $customFieds['nom_du_restaurant'][0],
				'adresse' => $customFieds['adresse'][0],
				'code_postal' => $customFieds['code_postal'][0],
				'ville' => $customFieds['ville'][0],
				'telephone' => $customFieds['telephone'][0],
				'email' => $customFieds['email'][0],
				'specialite' => $customFieds['specialite'][0],
				'prix_moyen' => $customFieds['prix_moyen'][0],
				'category' => $cat[0]->name,
				'subcategory' => $cat[1]->name,
				"ambiances" => $array_ambiances,
  			);
  		}
	}

	echo json_encode($res);
	wp_die();
}

?>