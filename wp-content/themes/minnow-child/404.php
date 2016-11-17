<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Minnow
 */

get_header('custom-material'); ?>

<div class="row">
	<div class="col s12 valign-wrapper height404 center">
		<div class="container valign">
			<h1>Page non trouvée...</h1>
				<a href="<?php echo get_site_url(); ?>" class="waves-effect waves-light btn-flat">Retourner à l'accueil</a><br>
				<a href="<?php echo get_site_url(); ?>/rechercher_restaurant" class="waves-effect waves-light btn-flat">Rechercher un restaurant</a><br>
				<a href="<?php echo get_site_url(); ?>/le-concept-unowr" class="waves-effect waves-light btn-flat">Découvrir le concept UNOWR</a><br>
		</div>
	</div>
</div>

<?php get_footer('custom-material'); ?>
