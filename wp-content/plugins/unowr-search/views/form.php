<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" class="data-unowr-form" data-unowr-form="true">

<?php
$taxonomies = array('agenda', 'localisation', 'occasion', 'ambiance', 'type_de_cuisine');
$questions = array(
		'agenda'=> array(
			"agents du shield",
			"agen du shiel"
		),
		'localisation' => array(
			"ou",
			"where",
			"donde esta la cuisina"
		),
		'occasion' => array(
			"por que ?",
			"pourquoi faire"
		),
		'ambiance' => array(
			"type"
		),
		'type_de_cuisine' => array(
			"type"
		)
	);
$questions_child = array(
		'agenda'=> array(
			"agents du shield",
			"agen du shiel"
		),
		'localisation' => array(
			"ou",
			"where",
			"donde esta la cuisina"
		),
		'occasion' => array(
			"por que ?",
			"pourquoi faire"
		),
		'ambiance' => array(
			"type"
		),
		'type_de_cuisine' => array(
			"type"
		)
	);
$first = true;
foreach ($taxonomies as $tkey => $taxonomy) {

	$args = array(
	    'hide_empty' => false, 
	);
// echo $taxonomy; die();
	$terms = get_terms($taxonomy, $args);
	?>
	<div name="<?php echo $taxonomy; ?>" name="unowr-response-title"
		data-unowr-taxonomy="<?php echo $taxonomy; ?>" class="<?php echo ($first) ? '' : 'unowr-hidden'; ?> unowr-taxonomy">

	<?php echo $questions[$taxonomy][count($questions[$taxonomy]) - 1]; ?> <br/>
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
		echo $questions_child[$taxonomy][count($questions_child[$taxonomy]) - 1] . "<br/>";
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

<script>
	var questions = <?php echo json_encode($questions); ?>;
</script>