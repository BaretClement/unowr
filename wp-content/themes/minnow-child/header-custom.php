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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body <?php body_class(); ?>>

<nav>
	<input type="checkbox" id="checkbox">
	<label class="btn menu medium-icon" for="checkbox"><i class="color_black ion-navicon"></i></label>

	<div class="sidebar">
    	<ul>
    		<?php wp_nav_menu( array( 'theme_location' => 'menu_burger' ) ); ?>
    	</ul>
	</div>
</nav>

