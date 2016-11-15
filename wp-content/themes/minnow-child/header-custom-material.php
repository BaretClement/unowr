<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Minnow
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-material.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/materialize.css">
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

	<nav>
	    <div class="nav-wrapper">
              <a href="<?php echo get_home_url(); ?>" class="brand-logo"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/css/img/unowr_black.png"></a>
          		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="ion-navicon color_black valign"></i></a>
              
              <!-- Menu desktop -->
          		<ul class="right hide-on-med-and-down" style="margin-top: 12px">
                    <a href="<?php echo get_site_url(); ?>/resto-recherche" class="waves-effect waves-light btn-flat red">Recherche restaurant</a>

                    <!-- Modal Trigger -->
                    <a class="modal-trigger waves-effect waves-light btn-flat red" href="#modal-inscription">INSCRIPTION PARTENAIRE</a>

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
          		</ul>
              
              <!-- Menu burger -->
          		<ul class="side-nav" id="mobile-demo">
    				    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                <li><img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/css/img/P1030167.jpg"></li>
                <a href="<?php echo get_site_url(); ?>/resto-recherche" class="waves-effect waves-light btn-flat red">Recherche restaurant</a>

                    <!-- Modal Trigger -->
                    <a class="modal-trigger waves-effect waves-light btn-flat red" href="#modal1">INSCRIPTION PARTENAIRE</a>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h4>Demande de contact</h4>
                            <div role="form" class="wpcf7" id="wpcf7-f1684-o1" lang="fr-FR" dir="ltr">
                              <div class="screen-reader-response"></div>
                              <form action="/unowr-github/#wpcf7-f1684-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                              <div style="display: none;">
                              <input type="hidden" name="_wpcf7" value="1684">
                              <input type="hidden" name="_wpcf7_version" value="4.5.1">
                              <input type="hidden" name="_wpcf7_locale" value="fr_FR">
                              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1684-o1">
                              <input type="hidden" name="_wpnonce" value="33bb21a0ce">
                              </div>
                              <div class="col s12" style="text-align: left; font-size: 1rem !important; max-height: 5.5rem">
                                      <label style="font-size: 1rem"> Prénom (*)<br>
                                      <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label>
                                  </div>
                              <div class="col s6" style="text-align: left; font-size: 1rem !important; max-height: 5.5rem">
                                      <label style="font-size: 1rem"> Téléphone (*)<br>
                                      <span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false"></span> </label>
                                  </div>
                              <div class="col s6" style="text-align: left; font-size: 1rem !important; max-height: 5.5rem">
                                      <label style="font-size: 1rem"> Email (*)<br>
                                      <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label>
                                  </div>
                              <div class="col s12" style="position: relative; top: -3px; max-height: 5.5rem">
                                      <input type="submit" value="Envoyer la demande" class="wpcf7-form-control wpcf7-submit btn-flat center"><img class="ajax-loader" src="http://unowr.fr/unowr-github/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
                                  </div>
                              <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
                        </div>

                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red ">Quitter</a>
                        </div>
                    </div>
          		</ul>


    	</div>
  	</nav>

  	<script>$(".button-collapse").sideNav();</script>





