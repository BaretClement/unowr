<?php
/*
Template Name: Homepage - material
*/

get_header( 'custom-material' ); ?>

	<!-- BLOC UTILISATEUR -->
	<div id="utilisateur" class="row <?php the_field('couleur_texte_utilisateur') ?>" style="background-image: url(<?php the_field('background_image_utilisateur'); ?>);">
		<div class="col s12 height100 valign-wrapper">
			<div class="container valign center">
				<h1><?php the_field('titre_utilisateur'); ?></h1>
				<p><?php the_field('sous_titre_utilisateur'); ?></p>
				  <a href="<?php the_field('link_cta_utilisateur'); ?>" class="waves-effect waves-teal btn-flat <?php the_field('couleur_texte_utilisateur') ?>">
				  	<?php the_field('cta_utilisateur'); ?>
				  </a>
			</div>
		</div>
	</div>

	<!-- BLOC RESTAURATEUR -->
	<div class="row <?php the_field('couleur_texte_restaurant') ?>" style="background-image: url(<?php the_field('background_image_restaurateur'); ?>);">
		<div class="col s12 height100 valign-wrapper">
			<div class="container valign center">
				<h2><?php the_field('titre_restaurateur'); ?></h2>
				<p><?php the_field('sous_titre_restaurateur'); ?></p>
				  <a href="<?php the_field('link_cta_restaurateur'); ?>" class="waves-effect waves-teal btn-flat <?php the_field('couleur_texte_restaurant') ?>">
				  	<?php the_field('cta_restaurateur'); ?>
				  </a>
			</div>
		</div>
	</div>

	<!-- BLOC BLOG & CONCEPT -->
	<div class="row">

		<!-- BLOC BLOG -->
		<div id="blog" class="col s12 l6 height75 valign-wrapper <?php the_field('couleur_texte_blog') ?>" style="background-image: url(<?php the_field('background_image_blog'); ?>);">
			<div class="container valign center">
				<h2><?php the_field('titre_blog'); ?></h2>
				<p><?php the_field('sous_titre_blog'); ?></p>
				  <a href="<?php the_field('link_cta_blog'); ?>" class="waves-effect waves-teal btn-flat <?php the_field('couleur_texte_blog') ?>">
				  	<?php the_field('cta_blog'); ?>
				  </a>
			</div>
		</div>

		<!-- BLOC CONCEPT -->
		<div class="col s12 l6 height75 valign-wrapper <?php the_field('couleur_texte_concept') ?>" style="background-image: url(<?php the_field('background_image_concept'); ?>);">
			<div class="container valign center">
				<h2><?php the_field('titre_concept'); ?></h2>
				<p><?php the_field('sous_titre_concept'); ?></p>
				  <a href="<?php the_field('link_cta_concept'); ?>" class="waves-effect waves-teal btn-flat <?php the_field('couleur_texte_concept') ?>">
				  	<?php the_field('cta_concept'); ?>
				  </a>
			</div>
		</div>
	</div>

	<!-- BLOC SOCIAL -->
	<div class="row <?php the_field('couleur_texte_social') ?>" style="background-image: url(<?php the_field('background_image_social'); ?>);">
		<div class="col s12 height50 valign-wrapper">
			<div class="container center valign">	
				<h2><?php the_field('titre_social'); ?></h2>
				<p><?php the_field('sous_titre_social'); ?></p>
				<a href="<?php the_field('lien_social_1'); ?>" class="social-icon <?php the_field('pictogramme_social_1'); ?>"></a>
				<a href="<?php the_field('lien_social_2'); ?>" class="social-icon <?php the_field('pictogramme_social_2'); ?>"></a>
				<a href="<?php the_field('lien_social_3'); ?>" class="social-icon <?php the_field('pictogramme_social_3'); ?>"></a>
				<a href="<?php the_field('lien_social_4'); ?>" class="social-icon <?php the_field('pictogramme_social_4'); ?>"></a>
			</div>
		</div>
	</div>



	</div> 