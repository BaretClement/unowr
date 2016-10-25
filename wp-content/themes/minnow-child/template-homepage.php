<?php
/*
Template Name: Homepage
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,700,900" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- js -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/css/img/favicon.png">

</head>
<body>

  <nav></nav>
	<!-- content part -->
	<div class="container">
    
    <!-- user part -->
    <div class="row">
      <div class="twelve columns user">
        <div class="container content">
          <h2>Trouvez le restaurant qu'il vous faut !</h2>
          <p>Ne perdez plus de temps, répondez aux questions & trouvez le restaurant !</p>
          <button>GO !</button>
        </div>
      </div>
    </div>
    
    <!-- restaurant part -->
    <div class="row">
      <div class="twelve columns restaurant">
        <div class="container content">
          <h2>Inscrivez votre restaurant</h2>
          <p>Vous souhaitez faire partie de l'avanture ? Rejoignez-nous !</p>
          <button>S'inscrire :)</button>
        </div>
      </div>
    </div>

    
    <div class="row no-margin-bottom">

      <!-- blog part -->
      <div class="six columns blog">
        <div class="container content">
          <h3>Blog</h3>
          <p>Suivez nos découvertes et nos actualités</p>
          <button>Suivre...</button>
        </div>
      </div>


      <!-- concept part -->
      <div class="six columns concept">
        <div class="container content">
          <h3>Concept</h3>
          <p>Vous voulez nous connaitre ?</p>
          <button>Découvrir !</button>
        </div>
      </div>

    </div>

    <!-- social part -->
    <div class="row">
      <div class="twelve columns social">
        <div class="container content">
          <h3>Suivez-nous sur les réseaux sociaux !</h3>
          <h3>
          <span class="ion-social-instagram-outline margin-icon"></span>
          <span class="ion-social-facebook-outline margin-icon"></span>
          <span class="ion-social-twitter-outline margin-icon"></span>
          <span class="ion-social-snapchat-outline margin-icon"></span>
          </h3>
          
          
        </div>
      </div>
    </div>

  </div>

</body>
</html>
