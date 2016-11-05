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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-material.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/materialize.css">
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body <?php body_class(); ?>>
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>

	<nav>
	    <div class="nav-wrapper">
    		<a href="#!" class="brand-logo"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/css/img/unowr_black.png"></a>
      		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="ion-navicon color_black valign"></i></a>
      		<ul class="right hide-on-med-and-down">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      		</ul>
      		<ul class="side-nav" id="mobile-demo">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      		</ul>
    	</div>
  	</nav>

  	<script>$(".button-collapse").sideNav();</script>





