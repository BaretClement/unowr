<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" class="data-unowr-form" data-unowr-form="true">

<?php
$taxonomies = array('agenda', 'localisation', 'type_de_cuisine', 'occasion', 'ambiance');
$questions = array(
		'agenda'=> array(
			"Quand est-ce que tu souhaites manger ?",
			"Quel jour souhaites-tu réserver ?",
			"On mange quand ?"
		),
		'localisation' => array(
			"On se situe où ?",
			"On te laisse le choix ;-)",
			"Un endroit favori ?"

		),
		'occasion' => array(
			"Une occasion en particulier ?",
			"Pour quelle occasion ?",
			"Dans quel contexte ?"

		),
		'ambiance' => array(
			"Niveau ambiance, on se situerait sur quoi ?",
			"Un type d’ambiance favori ?",
			"C’est quoi ton type d’ambiance ?"

		),
		'type_de_cuisine' => array(
			"Ton type de cuisine préféré, c’est plutôt…",
			"Lequel des 5 continents tu préfères ?",
			"Dans quel coin on voyage ?"

		)
	);
$questions_child = array(
		'agenda'=> array(
			"Plus précisément, plutôt midi ou soir ?",
			"Pour déjeuner ou dîner ?",
			"Midi ou soir ?"

		),
		'localisation' => array(
			"ou",
			"where",
			"donde esta la cuisina"
		),
		'occasion' => array(
			"Tu saurais nous en dire plus ?",
			"Plus précisément ?",
			"Un chouïa plus précis ?"

		),
		'type_de_cuisine' => array(
			"Et qu’est-ce que tu souhaites manger ?",
			"Mais dans tout ça, c’est quoi ton plat idéal ?",
			"La dernière étape avant de manger"

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
	<div class="valign-wrapper">
		<div name="<?php echo $taxonomy; ?>" name="unowr-response-title"
			data-unowr-taxonomy="<?php echo $taxonomy; ?>" class="<?php echo ($first) ? '' : 'unowr-hidden'; ?> unowr-taxonomy">
			<div class="row valign-wrapper search">
				<div class="bot-avatar"></div>
				<div id="triangle-left"></div>
				<div class="loader"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>
				<p class="questions search"><?php echo $questions[$taxonomy][rand(0, count($questions[$taxonomy]) - 1)]; ?></p>
			</div>
		<div>
	</div>

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
	?>
	<div>
		<div class="row valign-wrapper search">
			<div class="bot-avatar"></div>
			<div id="triangle-left"></div>
			<p class="questions search"><?php echo $questions_child[$taxonomy][rand(0, count($questions_child[$taxonomy]) - 1)] . "<br/>"; ?> </p>
		</div>
	</div>
	<?php
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