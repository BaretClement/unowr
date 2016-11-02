<?php
/*
Template Name: Concept
*/

get_header( 'custom' ); ?>

  <!-- start content part -->
  <div class="container body">
    <!-- start unowr part -->
    <div class="row unowr margin-top" style="background: <?php the_field('background_unowr'); ?>; background-image: url(<?php the_field('background_image_unowr'); ?>); ">
      <div class="twelve columns unowr <?php the_field('couleur_texte_unowr'); ?>">
        <div class="container content">
          <h1 style="font-weight: 700"><?php the_field('titre_unowr'); ?></h1>
          <p><?php the_field('sous_titre_unowr'); ?></p>
          <p><sub>Scroll down</sub><br><span class="ion-ios-arrow-down"></span></p>
        </div>
      </div>
    </div>
    <!-- end unowr part -->		

    <!-- strat idea part -->
    <div class="row idee" style="background: <?php the_field('background_idea'); ?>; background-image: url(<?php the_field('background_image_idea'); ?>); "> 
      <div class="twelve columns idea <?php the_field('couleur_texte_idea'); ?>">
        <div class="container content">
          <div class="container">
            <h2><?php the_field('titre_idea'); ?> <sup class="<?php the_field('pictogramme_idea') ?> picto"></sup></h2>
            <p><?php the_field('sous_titre_idea') ?></p>
            <p class="justify"><?php the_field('contenu_idea') ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- end idea part -->

    <!-- strat principle part -->
    <div class="row principe" style="background: <?php the_field('background_principle'); ?>; background-image: url(<?php the_field('background_image_principle'); ?>); "> 
      <div class="twelve columns principle <?php the_field('couleur_texte_principle'); ?>">
        <div class="container content">
          <div class="container">
            <h2><?php the_field('titre_principle') ?> <sup class="<?php the_field('pictogramme_principle') ?> picto"></sup></h2>
            <p><?php the_field('sous_titre_principle') ?></p>
            <div class="row no-border margin-top">
              <!-- element 1 -->
              <div class="four columns hvr-grow">
                <div class="container margin-top">
                  <h3><span class="big-icon <?php the_field('pictogramme_principle_1') ?>"></span><br><?php the_field('titre_principle_1') ?></h3>
                  <p><?php the_field('contenu_principle_1') ?></p>
                </div>
              </div>
              <!-- element 2 -->
              <div class="four columns hvr-grow">
                <div class="container margin-top border-vertical">
                  <h3><span class="big-icon <?php the_field('pictogramme_principle_2') ?>"></span><br><?php the_field('titre_principle_2') ?></h3>
                  <p><?php the_field('contenu_principle_2') ?></p>
                </div>
              </div>
              <!-- element 3 -->
              <div class="four columns hvr-grow">
                <div class="container margin-top">
                  <h3><span class="big-icon <?php the_field('pictogramme_principle_3') ?>"></span><br><?php the_field('titre_principle_3') ?></h3>
                  <p><?php the_field('contenu_principle_3') ?></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- end principle part -->

    <!-- start objective part -->
    <div class="row objectif" style="background: <?php the_field('background_objective'); ?>; background-image: url(<?php the_field('background_image_objective'); ?>); "> 
      <div class="twelve colums objective <?php the_field('couleur_texte_objectif'); ?>">
        <div class="container content">
          <h2><?php the_field('titre_objectif') ?> <sup class="<?php the_field('pictogramme_objectif') ?> picto"></sup></h2>
          <p><?php the_field('sous_titre_objectif') ?></p>
          <div class="row no-border margin-top">
              <!-- element 1 -->
              <div class="six columns objectif hvr-grow margin-top">
                <div class="container objectif">
                  <h3 class="align-center"><?php the_field('titre_objectif_1') ?></h3>
                  <p class="justify"><?php the_field('contenu_objectif_1') ?></p>
                  <hr>
                </div>
              </div>
              <!-- element 2 -->
              <div class="six columns objectif hvr-grow margin-top">
                <div class="container objectif">
                  <h3 class="align-center"><?php the_field('titre_objectif_2') ?></h3>
                  <p class="justify"><?php the_field('contenu_objectif_2') ?></p>
                  <hr>
                </div>
              </div>
              <!-- element 3 -->
              <div class="six columns objectif hvr-grow margin-top">
                <div class="container objectif">
                  <h3 class="align-center"><?php the_field('titre_objectif_3') ?></h3>
                  <p class="justify"><?php the_field('contenu_objectif_3') ?></p>
                  <hr>
                </div>
              </div>
              <!-- element 4 -->
              <div class="six columns objectif hvr-grow margin-top">
                <div class="container objectif">
                  <h3 class="align-center"><?php the_field('titre_objectif_4') ?></h3>
                  <p class="justify"><?php the_field('contenu_objectif_4') ?></p>
                  <hr>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end objective part -->

    <!-- strat team part -->
    <div class="row equipe" style="background: <?php the_field('background_equipe'); ?>; background-image: url(<?php the_field('background_image_equipe'); ?>); "> 
      <div class="twelve colums team <?php the_field('couleur_texte_equipe'); ?>">
        <div class="container content">
          <h2><?php the_field('titre_equipe') ?> <sup class="<?php the_field('pictogramme_equipe') ?> picto"></sup></h2>
          <p><?php the_field('sous_titre_equipe') ?></p>
        </div>
      </div>
    </div>
    <!-- end team part -->

  </div>
</body>
</html>
