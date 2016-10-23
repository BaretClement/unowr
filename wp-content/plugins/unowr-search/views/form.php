<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" data-unowr-form="true">

<?php
// $taxonomies = get_taxonomies();
$taxonomies = array('ambiance', 'localisation', 'occasion', 'type_de_cuisine');
$first = true;
foreach ($taxonomies as $tkey => $taxonomy) {

	$args = array(
	    'hide_empty' => false, 
	);

	$terms = get_terms($taxonomy, $args);
	?>
	<p class="<?php echo ($first) ? '' : 'unowr-hidden'; ?>" data-unowr-form-wrapper="true">

	<?php echo $taxonomy; ?> <br/>
	<select name="<?php echo $taxonomy; ?>" id="">
	
	<?php
	foreach ($terms as $terkey => $term) {
	?>
		<option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
	<?php
	}
	?>
	</select>
	<span class="unowr-response" data-unowr-response="true"></span>
	</p>
	<?php
	$first = false;
}

?>

	<input type="button" value="envoyer" data-unowr-submit="true" />
</form>