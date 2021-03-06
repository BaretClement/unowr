<?php
/*
Template Name: Concept - material
*/

get_header( 'custom-material' ); ?>

  <!-- BLOC UNOWR -->
  <div id="unowr" class="row" style="color: <?php the_field('couleur_texte_unowr'); ?>; background-color: <?php the_field('background_unowr'); ?>; background-image: url(<?php the_field('background_image_unowr'); ?>);">
    <div class="col s12 height100 valign-wrapper">
      <div class="container valign center">
        <h1>
          <span style="background: rgba(255, 255, 255, 0.6);">
            <?php the_field('titre_unowr'); ?>
          </span>
        </h1> 
        <p>
          <span style="background: rgba(255, 255, 255, 0.6); padding: 4px 10px">
            <b><?php the_field('sous_titre_unowr'); ?></b>
          </span>
        </p>
      </div>
    </div>
    <div class="col s12 transition-bottom-unowr"></div>
  </div>

  <!-- BLOC CTAs-->
  <div class="row" style="background: <?php the_field('background_cta') ?>; color: <?php the_field('couleur_texte_cta') ?>">
    <div class="col s12 center-align">
      <a href="<?php echo get_site_url(); ?>/resto-recherche" class="waves-effect waves-light btn-flat red" style="border: 1px solid <?php the_field('couleur_texte_cta') ?> !important">Recherche restaurant</a>
      <a class="modal-trigger waves-effect waves-light btn-flat red" style="border: 1px solid <?php the_field('couleur_texte_cta') ?> !important" href="#modal-inscription">INSCRIPTION PARTENAIRE</a></div>
      <div class="col s12 transition-bottom"></div>
  </div>

  <!-- BLOC IDEA -->
  <div id="idea" class="row" style="color: <?php the_field('couleur_texte_idea'); ?>; background-color: <?php the_field('background_idea'); ?>; background-image: url(<?php the_field('background_image_idea'); ?>);">
    <div class="col s12 min-height100 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_idea'); ?></h2>
        <p><b><?php the_field('sous_titre_idea') ?></p></b>
        <p><?php the_field('contenu_idea') ?></p>
      </div>
    </div>
  </div>

  <!-- Transition -->
  <div class="col s12 transition-top"></div>

  <!-- BLOC PRINCIPLE -->
  <div id="principle" class="row" style="color: <?php the_field('couleur_texte_principle'); ?>; background-color: <?php the_field('background_principle'); ?>; background-image: url(<?php the_field('background_image_principle'); ?>);">
      
    <div class="col s12 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_principle') ?></h2>
        <p><b><?php the_field('sous_titre_principle') ?></p></b>
      </div>
    </div>
    <div class="container">
      <div class="col s12 l4 valign-wrapper">
        <div class="container principle valign center">
          <i class="big-icon <?php the_field('pictogramme_principle_1') ?>"></i>
          <h3 class="after-picto"><?php the_field('titre_principle_1') ?></h3>
          <p><?php the_field('contenu_principle_1') ?></p>
        </div>
      </div>

      <div class="col s12 l4 valign-wrapper">
        <div class="container principle valign center">
          <i class="big-icon <?php the_field('pictogramme_principle_2') ?>"></i>
          <h3 class="after-picto"><?php the_field('titre_principle_2') ?></h3>
          <p><?php the_field('contenu_principle_2') ?></p>
        </div>
      </div>

      <div class="col s12 l4 valign-wrapper">
        <div class="container principle valign center">
          <i class="big-icon <?php the_field('pictogramme_principle_3') ?>"></i>
          <h3 class="after-picto"><?php the_field('titre_principle_3') ?></h3>
          <p><?php the_field('contenu_principle_3') ?></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Transition -->
  <div class="col s12 transition-bottom"></div>

  <!-- BLOC OBJECTIVES -->
  <div id="objectives" class="row" style="color: <?php the_field('couleur_texte_objective'); ?>; background-color: <?php the_field('background_objective'); ?>; background-image: url(<?php the_field('background_image_objective'); ?>);">  
    
    <div class="col s12 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_objectif') ?></h2>
        <p><b><?php the_field('sous_titre_objectif') ?></p></b>
      </div>
    </div>

    <div class="col s12 l6 valign-wrapper top-left" style="background: <?php the_field('background_objectif1') ?>; height:40vh; padding: 20px 0">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_1') ?></h3>
        <p><?php the_field('contenu_objectif_1') ?></p>
      </div>
    </div>

    <div class="col s12 l6 valign-wrapper top-right" style="background: <?php the_field('background_objectif2') ?>; height:40vh; padding: 20px 0">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_2') ?></h3>
        <p><?php the_field('contenu_objectif_2') ?></p>
      </div>
    </div>

    <div class="col s12 l6 valign-wrapper bottom-left" style="background: <?php the_field('background_objectif3') ?>; height:40vh; padding: 20px 0">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_3') ?></h3>
        <p><?php the_field('contenu_objectif_3') ?></p>
      </div>
    </div>

    <div class="col s12 l6 valign-wrapper bottom-right" style="background: <?php the_field('background_objectif4') ?>; height:40vh; padding: 20px 0">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_4') ?></h3>
        <p><?php the_field('contenu_objectif_4') ?></p>
      </div>
    </div>

  </div>

  <!-- BLOC TEAM -->
  <div id="team" class="row" style="color: <?php the_field('couleur_texte_equipe'); ?>; background-color: <?php the_field('background_equipe'); ?>; background-image: url(<?php the_field('background_image_equipe'); ?>);"> 
    <div class="col s12 min-height100 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_equipe') ?></h2>
        <p><b><?php the_field('sous_titre_equipe') ?></p></b>
      </div>
    </div>
  </div>

<!-- Modal Structure -->
<div id="modal-inscription" class="modal">
  <div class="modal-content">
    <h4>Demande de contact</h4>
    <p><?php the_field('formulaire_de_contact'); ?></p> 
  </div>
</div>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-86120720-1', 'auto');
    ga('send', 'pageview');
  </script>

<?php get_footer( 'custom-material' ); ?>




