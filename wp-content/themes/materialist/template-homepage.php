<?php
/*
Template Name: Homepage
*/
?>
<!DOCTYPE html>
<html lang="fr">
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
	<div class="container body">
    <!-- start user part -->
    <div class="row utilisateur" style="background: <?php the_field('background_utilisateur'); ?>; background-image: url(<?php the_field('background_image_utilisateur'); ?>); ">
      <div class="twelve columns user <?php the_field('couleur_texte_utilisateur'); ?>">
        <div class="container content">
          <h2><?php the_field('titre_utilisateur'); ?> <sup class="<?php the_field('pictogramme_utilisateur') ?> picto"></sup></h2>
          <p><?php the_field('sous_titre_utilisateur'); ?></p>
            
          <a class="button button-primary <?php the_field('couleur_texte_utilisateur'); ?>" href="<?php the_field('link_cta_utilisateur'); ?>"> 
            <?php the_field('cta_utilisateur'); ?>
          </a>

        </div>
      </div>
    </div>
    <!-- end user part -->
    
    <!-- start restaurant part -->
    <div class="row restaurateur" style="background: <?php the_field('background_restaurateur'); ?>; background-image: url(<?php the_field('background_image_restaurateur'); ?>); ">
      <div class="twelve columns restaurant <?php the_field('couleur_texte_restaurant'); ?>">
        <div class="container content">
          <div class="container">
            <h2><?php the_field('titre_restaurateur'); ?> <sup class="<?php the_field('pictogramme_restaurant') ?> picto"></sup></h2>
            <p><?php the_field('sous_titre_restaurateur'); ?></p>

            <a class="button button-primary <?php the_field('couleur_texte_restaurant'); ?>" href="<?php the_field('link_cta_restaurateur'); ?>"> 
              <?php the_field('cta_restaurateur'); ?>
            </a>

          </div>
        </div>
      </div>
    </div>
    <!-- end restaurant part -->

    <!-- start blog & concept part -->
    <div class="row no-border no-margin-bottom">

      <!-- strat blog part -->
      <div class="six columns blog <?php the_field('couleur_texte_blog'); ?>" style="background: <?php the_field('background_blog'); ?>; background-image: url(<?php the_field('background_image_blog'); ?>)">
        <div class="container content">
          <div class="container">
            <h2><?php the_field('titre_blog'); ?> <sup class="<?php the_field('pictogramme_blog') ?> picto"></sup></h2>
            <p><?php the_field('sous_titre_blog'); ?></p>

            <a class="button button-primary <?php the_field('couleur_texte_blog'); ?>" href="<?php the_field('link_cta_blog'); ?>"> 
              <?php the_field('cta_blog'); ?>
            </a>

          </div>
        </div>
      </div>
      <!-- end blog part -->

      <!-- start concept part -->
      <div class="six columns concept <?php the_field('couleur_texte_concept'); ?>" style="background: <?php the_field('background_concept'); ?>; background-image: url(<?php the_field('background_image_concept'); ?>)">
        <div class="container content">
          <div class="container">
            <h2><?php the_field('titre_concept'); ?> <sup class="<?php the_field('pictogramme_concept') ?> picto"></sup></h2>
            <p><?php the_field('sous_titre_concept'); ?></p>

            <a class="button button-primary <?php the_field('couleur_texte_concept'); ?>" href="<?php the_field('link_cta_concept'); ?>"> 
              <?php the_field('cta_concept'); ?>
            </a>

          </div>
        </div>
      </div>
      <!-- end concept part -->

    </div>
    <!-- end blog & concept part -->

    <!-- start social part -->
      <div class="row social" style="background: <?php the_field('background_social'); ?>; background-image: url(<?php the_field('background_image_social'); ?>); ">
      <div class="twelve columns social <?php the_field('couleur_texte_social'); ?>">
        <div class="container content">
          <div class="container">
            <h2><?php the_field('titre_social'); ?> <sup class="<?php the_field('pictogramme_social') ?> picto"></sup></h2>
            <p><?php the_field('sous_titre_social'); ?></p>
            <h3 class="no-margin-bottom">
            <a class="<?php the_field('couleur_texte_social'); ?>" href="<?php the_field('lien_social_1')?>"><span class="big-icon <?php the_field('pictogramme_social_1'); ?> margin-icon hvr-grow"></span></a>
            <a class="<?php the_field('couleur_texte_social'); ?>" href="<?php the_field('lien_social_2')?>"><span class="big-icon <?php the_field('pictogramme_social_2'); ?> margin-icon hvr-grow"></span></a>
            <a class="<?php the_field('couleur_texte_social'); ?>" href="<?php the_field('lien_social_3')?>"><span class="big-icon <?php the_field('pictogramme_social_3'); ?> margin-icon hvr-grow"></span></a>
            <a class="<?php the_field('couleur_texte_social'); ?>" href="<?php the_field('lien_social_4')?>"><span class="big-icon <?php the_field('pictogramme_social_4'); ?> margin-icon hvr-grow"></span></a>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- end social part -->

</body>
</html>
