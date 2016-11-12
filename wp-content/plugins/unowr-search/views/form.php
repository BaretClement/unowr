<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" data-unowr-form="true">

<?php
$taxonomies = array('agenda', 'localisation', 'occasion', 'ambiance', 'type_de_cuisine');
$first = true;
foreach ($taxonomies as $tkey => $taxonomy) {

	$args = array(
	    'hide_empty' => false, 
	);

	$terms = get_terms($taxonomy, $args);
	?>
	<div name="<?php echo $taxonomy; ?>" name="unowr-response-title"
		data-unowr-taxonomy="<?php echo $taxonomy; ?>" class="<?php echo ($first) ? '' : 'unowr-hidden'; ?> unowr-taxonomy">

	<?php echo $taxonomy; ?> <br/>
	<div>

	<?php
	$parentHtml = [];
	foreach ($terms as $terkey => $term) {
		if ($term->parent == 0) {
		?>
		<div class="unowr-choice" data-unowr-choice="true"  data-unowr-taxonomy="<?php echo $taxonomy; ?>" data-parent="true" data-value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></div>
		<?php
		}else {
			if ($parentHtml[$term->parent] == null) {
				$parentHtml[$term->parent] = "";
			}
			$parentHtml[$term->parent] .= '<div class="unowr-choice" data-unowr-choice="true" data-value="'
				. $term->term_id . '" data-unowr-taxonomy="' . $taxonomy . '">' . $term->name . '</div>';
		}
	}

	foreach ($parentHtml as $key => $value) {
		echo "<div class='children unowr-hidden' data-parent='" . $key . "'>";
		echo $value;
		echo "</div>";
	}
	?>
	</div>
	<span class="unowr-response" data-unowr-response="true"></span>
	</div>
	<?php
	$first = false;
}

?>
</form>