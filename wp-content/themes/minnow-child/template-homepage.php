<?php
/*
Template Name: Homepage
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>UNOWR | Trouvez le restaurant qu'il vous faut !</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700,900" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- js -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/css/img/placeholder.png">

</head>
<body>

	<!-- start content part -->
	<div class="container">
    <!-- start user part -->
    <div class="row">
      <div class="twelve columns user <?php the_field('couleur_texte_utilisateur'); ?>"h>
        <div class="container content">
          <h2><?php the_field('titre_utilisateur'); ?></h2>
          <p><?php the_field('sous_titre_utilisateur'); ?></p>
          <button class="<?php the_field('couleur_texte_utilisateur'); ?>"><?php the_field('cta_utilisateur'); ?> <span class="<?php the_field('pictogramme_utilisateur'); ?>"></span></button>
        </div>
      </div>
    </div>
    <!-- end user part -->
    
    <!-- start restaurant part -->
    <div class="row">
      <div class="twelve columns restaurant <?php the_field('couleur_texte_restaurant'); ?>">
        <div class="container content hvr-hollow">
          <h2><?php the_field('titre_restaurateur'); ?></h2>
          <p><?php the_field('sous_titre_restaurateur'); ?></p>
          <button class="<?php the_field('couleur_texte_restaurant'); ?>"><?php the_field('cta_restaurateur'); ?> <span class="<?php the_field('pictogramme_restaurateur'); ?>"></span></button>
        </div>
      </div>
    </div>
    <!-- end restaurant part -->

    <!-- start blog & concept part -->
    <div class="row no-margin-bottom">

      <!-- strat blog part -->
      <div class="six columns blog <?php the_field('couleur_texte_blog'); ?>">
        <div class="container content">
          <h2><?php the_field('titre_blog'); ?></h2>
          <p><?php the_field('sous_titre_blog'); ?></p>
          <button class="<?php the_field('couleur_texte_blog'); ?>"><?php the_field('cta_blog'); ?> <span class="<?php the_field('pictogramme_blog'); ?>"></span></button>
        </div>
      </div>
      <!-- end blog part -->

      <!-- start concept part -->
      <div class="six columns concept <?php the_field('couleur_texte_concept'); ?>">
        <div class="container content">
          <h2><?php the_field('titre_concept'); ?></h2>
          <p><?php the_field('sous_titre_concept'); ?></p>
          <button class="<?php the_field('couleur_texte_concept'); ?>"><?php the_field('cta_concept'); ?> <span class="<?php the_field('pictogramme_concept'); ?>"></span></button>
        </div>
      </div>
      <!-- end concept part -->

    </div>
    <!-- end blog & concept part -->

    <!-- start social part -->
    <div class="row">
      <div class="twelve columns social <?php the_field('couleur_texte_social'); ?>">
        <div class="container content">
          <h2><?php the_field('titre_social'); ?></h2>
          <p><?php the_field('sous_titre_social'); ?></p>
          <h3 class="no-margin-bottom">
          <span class="<?php the_field('pictogramme_social_1'); ?> margin-icon hvr-grow"></span>
          <span class="<?php the_field('pictogramme_social_2'); ?> margin-icon hvr-grow"></span>
          <span class="<?php the_field('pictogramme_social_3'); ?> margin-icon hvr-grow"></span>
          <span class="<?php the_field('pictogramme_social_4'); ?> margin-icon hvr-grow"></span>
          </h3>
        </div>
      </div>
    </div>
    <!-- end social part -->

    <!-- start photos part -->
    <div class="row">

      <!-- strat photo 1 part -->
      <div class="six columns photo1">
        <div class="container content">
          <img class="responsive-img" src="<?php the_field('photo_1'); ?>">
        </div>
      </div>
      <!-- start photo 2 part -->
      <div class="six columns photo2">
        <div class="container content">
          <img class="responsive-img" src="<?php the_field('photo_2'); ?>">
        </div>
      </div>
    </div>

    <div class="row">
      <!-- start photo 3 part -->
      <div class="six columns photo3">
        <div class="container content">
          <img class="responsive-img" src="<?php the_field('photo_3'); ?>">
        </div>
      </div>
      <!-- start photo 4 part -->
      <div class="six columns photo4">
        <div class="container content">
          <img class="responsive-img" src="<?php the_field('photo_4'); ?>">
        </div>
      </div>

  </div>
  <!-- end content part -->

</body>
</html>
