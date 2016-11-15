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
                    <a class="modal-trigger waves-effect waves-light btn-flat red" href="#modal1">INSCRIPTION PARTENAIRE</a>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal modal-fixed-footer">
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
                            <p><?php the_field('formulaire_de_contact'); ?></p> 
                        </div>

                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red ">Quitter</a>
                        </div>
                    </div>
          		</ul>


    	</div>
  	</nav>

  	<script>$(".button-collapse").sideNav();</script>





