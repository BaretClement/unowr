<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" class="data-unowr-form" data-unowr-form="true">

<?php
$taxonomies = array('agenda', 'localisation', 'type_de_cuisine', 'occasion', 'ambiance');
$questions = array(
		'agenda'=> array(
			"Bien le bonjour ! Quand est-ce que tu souhaites manger ?",
			"Salut, j’espère que tu vas bien ! Quel jour souhaites-tu réserver ?",
			"Hello, alors quand est-ce qu’on mange ?"
		
		),
		'localisation' => array(
			"On se situe où ?",
			"Pour le lieu on te laisse le choix ;-)",
			"Un endroit favori ?",
			"Un endroit en particulier ?"
		
		),
		'occasion' => array(
			"C’est pour une occasion en particulier ?",
			"Pour quelle occasion ?",
			"Quel est le contexte ?"

		),
		'ambiance' => array(
			"Niveau ambiance, on se situe où ?",
			"Un type d’ambiance en particulier ?",
			"C’est quoi ton type d’ambiance ?",
			"Quelle ambiance serait idéale ?",
			"Quelle ambiance tu souhaites ?"

		),
		'type_de_cuisine' => array(
			"Quel type de cuisine tu préfères ?",
			"Niveau cuisine, tu préfères ?",
			"Qu’est-ce que tu veux manger ?"

		)
	);
$questions_child = array(
		'agenda'=> array(
			"Ça marche ! Et plus précisément : midi ou soir ?",
			"C’est noté ! Ce serait pour déjeuner ou dîner ?",
			"Ok ! Midi ou soir ?"

		),
		'localisation' => array(
			"ou",
			"where",
			"donde esta la cuisina"
		),
		'occasion' => array(
			"Tu saurais nous en dire plus ?",
			"Plus précisément ?",
			"Tu peux être plus précis ?"

		),
		'type_de_cuisine' => array(
			"Alright ! Et plus précisément ?",
			"Super ! Et dans tout ça, on mange quoi ?",
			"Et qu’est-ce qui te ferait le plus plaisir ?"

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
				<!-- loader -->
				<div class="loader"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>
				<p class="questions search"><?php echo $questions[$taxonomy][rand(0, count($questions[$taxonomy]) - 1)]; ?></p>
			</div>
		<div>
	</div>

	<div class="row valign-wrapper search answer">
	<div class="bubble-answer"> 
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
	echo '</div><div id="triangle-right"></div><div class="user-avatar"></div></div>';

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


	<div class="row valign-wrapper search answer">
	<div class="bubble-answer"> 
	<?php
		echo $value;
		echo "</div><div id='triangle-right'></div><div class='user-avatar'></div></div></div>";
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