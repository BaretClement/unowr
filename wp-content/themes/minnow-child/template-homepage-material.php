<?php
/*
Template Name: Homepage - material
*/

get_header( 'custom-material' ); ?> 

	<!-- BLOC UTILISATEUR -->
	<div id="utilisateur" class="row" style="color: <?php the_field('couleur_texte_utilisateur') ?>; background-color: <?php the_field('background_utilisateur'); ?>; background-image: url(<?php the_field('background_image_utilisateur'); ?>);">
		<div class="col s12 height100 valign-wrapper">
			<div class="container valign center">
				<h1><?php the_field('titre_utilisateur'); ?></h1>
				<p><?php the_field('sous_titre_utilisateur'); ?></p>
				  <a href="<?php the_field('link_cta_utilisateur'); ?>" class="waves-effect waves-light btn-flat" style="color: <?php the_field('couleur_texte_utilisateur') ?>; border-color: <?php the_field('couleur_texte_utilisateur') ?> !important">
				  	<?php the_field('cta_utilisateur'); ?>
				  </a>
				  <div><i class="ion-ios-arrow-down" style="color: <?php the_field('couleur_texte_utilisateur') ?>; font-size: 2rem"></i></div>
			</div>
		</div>
	</div>

	<!-- BLOC RESTAURATEUR -->
	<div class="row" style="color: <?php the_field('couleur_texte_restaurant') ?>; background-color: <?php the_field('background_restaurateur'); ?>; background-image: url(<?php the_field('background_image_restaurateur'); ?>);">
		<div class="col s12 height100 valign-wrapper">
			<div class="container valign center">
				<h2><?php the_field('titre_restaurateur'); ?></h2>
				<p class="margin-bottom"><?php the_field('sous_titre_restaurateur'); ?></p>
				  <!-- Modal Trigger -->
				  <a class="modal-trigger waves-effect waves-light btn-flat" href="#modal-inscription"><?php the_field('cta_restaurateur'); ?></a>

				  <!-- Modal Structure -->
				  <div id="modal-inscription" class="modal modal-fixed-footer">
				    <div class="modal-content">
				      <h4>Demande de contact</h4>
						<p><?php the_field('formulaire_de_contact'); ?></p>	
				    </div>
				    <div class="modal-footer">
				      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Quitter</a>
				    </div>
				  </div>

				  <div><i class="ion-ios-arrow-down" style="color: <?php the_field('couleur_texte_restaurant') ?>; font-size: 2rem"></i></div>
			</div>
		</div>
	</div>

	<!-- BLOC CONCEPT  -->
	<div id="concept" class="row" style="color: <?php the_field('couleur_texte_concept') ?>; background-color: <?php the_field('background_concept'); ?>;">

		<div class="col s12 m6 height75-img valign-wrapper" style="background-image: url(<?php the_field('background_image_concept'); ?>); background-repeat: no-repeat; background-position: center; background-size: contain;"></div>

		<div class="col s12 m6 height75 valign-wrapper">
			<div id="concept-text" class="container valign center">
				<h2><?php the_field('titre_concept'); ?></h2>
				<p><?php the_field('sous_titre_concept'); ?></p>
				  <a href="<?php the_field('link_cta_concept'); ?>" class="waves-effect waves-light btn-flat" style="color: <?php the_field('couleur_texte_concept') ?>; border-color: <?php the_field('couleur_texte_utilisateur') ?> !important">
				  	<?php the_field('cta_concept'); ?>
				  </a>
				  <div><i class="ion-ios-arrow-down" style="color: <?php the_field('couleur_texte_concept') ?>; font-size: 2rem"></i></div>
			</div>
		</div>
	</div>


	<!-- BLOC BLOG  -->
	<div class="row" style="color: <?php the_field('couleur_texte_blog') ?>; background-color: <?php the_field('background_blog'); ?>;">

		<div class="col s12 m6 push-m6 height75-img valign-wrapper" style="background-image: url(<?php the_field('background_image_blog'); ?>); background-repeat: no-repeat; background-position: center; background-size: contain;"></div>

		<div class="col s12 m6 pull-m6 height75 valign-wrapper">
			<div id="blog-text" class="container valign center">
				<h2><?php the_field('titre_blog'); ?></h2>
				<p><?php the_field('sous_titre_blog'); ?></p>
				  <a href="<?php the_field('link_cta_blog'); ?>" style="margin-bottom: 25px;" class="waves-effect waves-light btn disabled <?php the_field('couleur_texte_blog') ?>">
				  	<?php the_field('cta_blog'); ?>
				  </a>
				  <div><i class="ion-ios-arrow-down" style="color: <?php the_field('couleur_texte_blog') ?>; font-size: 2rem"></i></div>
			</div>
		</div>
	</div>

	<!-- BLOC SOCIAL -->
	<div class="row" style="color: <?php the_field('couleur_texte_social') ?>; background-color: <?php the_field('background_social'); ?>; background-image: url(<?php the_field('background_image_social'); ?>);">
		<div class="col s12 height50 valign-wrapper">
			<div class="container center valign">	
				<h2><?php the_field('titre_social'); ?></h2>
				<p class="margin-bottom"><?php the_field('sous_titre_social'); ?></p>

					<a href="<?php the_field('lien_social_1'); ?>" class="picto-social <?php the_field('pictogramme_social_1'); ?>" style="color: <?php the_field('couleur_texte_social') ?>"></a>
					<a href="<?php the_field('lien_social_2'); ?>" class="picto-social <?php the_field('pictogramme_social_2'); ?>" style="color: <?php the_field('couleur_texte_social') ?>"></a>
					<a href="<?php the_field('lien_social_3'); ?>" class="picto-social <?php the_field('pictogramme_social_3'); ?>" style="color: <?php the_field('couleur_texte_social') ?>"></a>
					<a href="<?php the_field('lien_social_4'); ?>" class="picto-social <?php the_field('pictogramme_social_4'); ?>" style="color: <?php the_field('couleur_texte_social') ?>"></a>
			</div>
		</div>
	</div>


    <?php get_footer( 'custom-material' ); ?>