<?php
/*
Template Name: Concept - material
*/

get_header( 'custom-material' ); ?>

  <!-- BLOC UNOWR -->
  <div class="row <?php the_field('couleur_texte_unowr'); ?>" style="background-color: <?php the_field('background_unowr'); ?>; background-image: url(<?php the_field('background_image_unowr'); ?>);">
    <div class="col s12 min-height100 valign-wrapper">
      <div class="container valign center">
        <h1><?php the_field('titre_unowr'); ?></h1>
        <p><?php the_field('sous_titre_unowr'); ?></p>
      </div>
    </div>
  </div>

  <!-- BLOC IDEA -->
  <div class="row <?php the_field('couleur_texte_idea'); ?>" style="background-color: <?php the_field('background_idea'); ?>; background-image: url(<?php the_field('background_image_idea'); ?>);">
    <div class="col s12 min-height100 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_idea'); ?></h2>
        <p><?php the_field('sous_titre_idea') ?></p>
        <p><?php the_field('contenu_idea') ?></p>
      </div>
    </div>
  </div>

  <!-- BLOC PRINCIPLE -->
  <div class="row <?php the_field('couleur_texte_principle'); ?>" style="background-color: <?php the_field('background_principle'); ?>; background-image: url(<?php the_field('background_image_principle'); ?>);">
      
    <div class="col s12 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_principle') ?></h2>
        <p><?php the_field('sous_titre_principle') ?></p>
      </div>
    </div>
    
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

  <!-- BLOC OBJECTIVES -->
  <div class="row <?php the_field('couleur_texte_objective'); ?>" style="background-color: <?php the_field('background_objective'); ?>; background-image: url(<?php the_field('background_image_objective'); ?>);">  
    
    <div class="col s12 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_objectif') ?></h2>
        <p><?php the_field('sous_titre_objectif') ?></p>
      </div>
    </div>

    <div class="col s12 l6 min-height33 valign-wrapper top-left">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_1') ?></h3>
        <p><?php the_field('contenu_objectif_1') ?></p>
      </div>
    </div>

    <div class="col s12 l6 min-height33 valign-wrapper top-right">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_2') ?></h3>
        <p><?php the_field('contenu_objectif_2') ?></p>
      </div>
    </div>

    <div class="col s12 l6 min-height33 valign-wrapper bottom-left">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_3') ?></h3>
        <p><?php the_field('contenu_objectif_3') ?></p>
      </div>
    </div>

    <div class="col s12 l6 min-height33 valign-wrapper bottom-right">
      <div class="container objective valign">
        <h3><?php the_field('titre_objectif_4') ?></h3>
        <p><?php the_field('contenu_objectif_4') ?></p>
      </div>
    </div>

  </div>

  <!-- BLOC TEAM -->
  <div class="row <?php the_field('couleur_texte_equipe'); ?>" style="background-color: <?php the_field('background_equipe'); ?>; background-image: url(<?php the_field('background_image_equipe'); ?>);"> 
    <div class="col s12 min-height100 valign-wrapper">
      <div class="container valign center">
        <h2><?php the_field('titre_equipe') ?></h2>
        <p><?php the_field('sous_titre_equipe') ?></p>
      </div>
    </div>
  </div>

<!-- Modal Structure -->
<div id="modal-inscription" class="modal modal-fixed-footer">
<div class="modal-content">
<h4>Demande de contact</h4>
<p><?php the_field('formulaire_de_contact'); ?></p> 
</div>

<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red ">Quitter</a>
</div>
</div>

<?php get_footer( 'custom-material' ); ?>




