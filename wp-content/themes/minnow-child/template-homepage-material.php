<?php
/*
Template Name: Homepage - material
*/

get_header( 'custom-material' ); ?> 

	<!-- BLOC UTILISATEUR -->
	<div id="utilisateur" class="row <?php the_field('couleur_texte_utilisateur') ?>" style="background-color: <?php the_field('background_utilisateur'); ?>; background-image: url(<?php the_field('background_image_utilisateur'); ?>);">
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
	<div class="row <?php the_field('couleur_texte_restaurant') ?>" style="background-color: <?php the_field('background_restaurateur'); ?>; background-image: url(<?php the_field('background_image_restaurateur'); ?>);">
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

	<!-- BLOC BLOG  -->
	<div id="rtl" class="row <?php the_field('couleur_texte_blog') ?>" style="background-color: <?php the_field('background_blog'); ?>;">
		<div id="ltr" class="col s12 m6 height75 valign-wrapper">
			<div id="ltr" class="container valign center">
				<h2><?php the_field('titre_blog'); ?></h2>
				<p><?php the_field('sous_titre_blog'); ?></p>
				  <a href="<?php the_field('link_cta_blog'); ?>" class="waves-effect waves-teal btn disabled <?php the_field('couleur_texte_blog') ?>">
				  	<?php the_field('cta_blog'); ?>
				  </a>
			</div>
		</div>

		<div id="blog" class="col s12 m6 height75-img valign-wrapper" style="background: url(<?php the_field('background_image_blog'); ?>);">
		</div>

	</div>

	<!-- BLOC CONCEPT  -->
	<div class="row <?php the_field('couleur_texte_concept') ?>"" style="background-color: <?php the_field('background_concept'); ?>">

		<div id="concept" class="col s12 m6 height75-img valign-wrapper" style="background: url(<?php the_field('background_image_concept'); ?>);">
		</div>

		<div class="col s12 l6 height75 valign-wrapper">
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
	<div class="row <?php the_field('couleur_texte_social') ?>" style="background-color: <?php the_field('background_social'); ?>; background-image: url(<?php the_field('background_image_social'); ?>);">
		<div class="col s12 height50 valign-wrapper">
			<div class="container center valign">	
				<h2><?php the_field('titre_social'); ?></h2>
				<p class="margin-bottom"><?php the_field('sous_titre_social'); ?></p>

					<a href="<?php the_field('lien_social_1'); ?>" class="picto-social <?php the_field('pictogramme_social_1'); ?>"></a>
					<a href="<?php the_field('lien_social_2'); ?>" class="picto-social <?php the_field('pictogramme_social_2'); ?>"></a>
					<a href="<?php the_field('lien_social_3'); ?>" class="picto-social <?php the_field('pictogramme_social_3'); ?>"></a>
					<a href="<?php the_field('lien_social_4'); ?>" class="picto-social <?php the_field('pictogramme_social_4'); ?>"></a>
			</div>
		</div>
	</div>



	</div> 