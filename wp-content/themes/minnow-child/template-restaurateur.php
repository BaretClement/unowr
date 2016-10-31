<?php
/*
Template Name: Restaurateur
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
  <div class="container-body">
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <?php the_field('formulaire_de_contact') ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>