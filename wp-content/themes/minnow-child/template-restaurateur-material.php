<?php
/*
Template Name: Restaurateur - material
*/

get_header( 'custom-material' ); ?>

      <div class="container formulaire">
      	<form>
      		<div class="row">
      			<!-- TITLE -->
      			<div class="col s12"><h1 class="center">Formulaire d'inscription</h1></div>

      			<!-- NOM DU RESTAURANT -->
            <div class="input-field col s12">
              	<input id="nom_du_restaurant" type="text" class="validate" required>
              	<label for="nom_du_restaurant">Nom du restaurant *</label>
            </div>
      			<!-- ADRESSE DU RESTAURANT -->
            <div class="input-field col s12 m6">
              	<input id="adresse" type="text" class="validate" required>
              	<label for="adresse">Adresse *</label>
            </div>
      			<!-- CODE POSTAL DU RESTAURANT -->
            <div class="input-field col s6 m3">
              	<input id="code_postal" type="text" class="validate" maxlength="5" pattern="[0-9]{5}" required>
              	<label for="code_postal" data-error="code postal non valide">Code postal *</label>
            </div>
      			<!-- VILLE DU RESTAURANT -->
            <div class="input-field col s6 m3">
              	<input id="ville" type="text" class="validate" required>
              	<label for="ville">Ville *</label>
            </div>
      			<!-- TÉLÉPHONE -->
            <div class="input-field col s6">
              	<input id="telephone" type="tel" class="validate" maxlength="10" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
              	<label for="telephone" data-error="numéro non valide">Téléphone *</label>
            </div>
      			<!-- EMAIL -->
            <div class="input-field col s6">
              	<input id="email" type="email" class="validate" required>
              	<label for="email" data-error="email non valide">Email *</label>
            </div>
      			<!-- PRÉNOM DU CONTACT -->
            <div class="input-field col s6">
              	<input id="prenom_du_contact" type="text" class="validate" required>
              	<label for="prenom_du_contact">Prénom du contact *</label>
            </div>
      			<!-- NOM DU CONTACT -->
            <div class="input-field col s6">
              	<input id="nom_du_contact" type="text" class="validate" required>
              	<label for="nom_du_contact">Nom du contact *</label>
            </div>
      			<!-- START HORAIRES D'OUVERTURE -->
            <div class="input-field col s12">
                <input id="horaires" type="text" class="validate">
                <label for="horaires">Horaires d'ouverture </label>
            </div>
            <!-- START HORAIRES D'OUVERTURE -->
            <div class="input-field col s12">
                <input id="type_de_cuisine" type="text" class="validate">
                <label for="type_de_cuisine">Type de cuisine ( le précis prossible )</label>
            </div>
      			<!-- SPECIALITÉ -->
  	        <div class="input-field col s6">
  	          	<input id="specialite" type="text" class="validate">
  	          	<label for="specialite">Spécialité </label>
  	        </div>
      			<!-- PRIX MOYEN -->
  	        <div class="input-field col s6">
  	          	<input id="prix_moyen" type="text" class="validate">
  	          	<label for="prix_moyen">Prix moyen ( menu )</label>
  	        </div>

      			<!-- START AMBIANCE -->
            <div class="input-field col s12">
                <input id="ambiance" type="text" class="validate">
                <label for="ambiance">Ambiance & occasion</label>
            </div>

            <!-- START ADDITIONNEL MESSSAGE-->
            <div class="input-field col s12">
                <textarea id="message" class="materialize-textarea validate" style="padding: 14px 10px !important;"></textarea>
                <label for="message">Dites-nous en plus !</label>
            </div>

          	<!-- BOUTON ENVOYER -->
          	<div class="col s12 center margin-bottom">
				      <button class="btn-flat waves-effect waves-light right" type="submit" name="action">
                  Envoyer
  				    </button>
			     </div>
        </div>

                    <?php 
          if(isset($_POST['submit']) && !empty($_POST['submit'])):
              if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
                  //your site secret key
                  $secret = '6LdwqgkUAAAAAOG7g2oLvZ7D9y7moXhtf5jjmqlK';
              // On récupère l'IP de l'utilisateur
              $remoteip = $_SERVER['REMOTE_ADDR'];
                  //get verify response data
                  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                  $responseData = json_decode($verifyResponse);
                  if($responseData->success):
                    //contact form submission code
                      $nom_du_restaurant = !empty($_POST['nom_du_restaurant'])?$_POST['nom_du_restaurant']:'';
                      $adresse = !empty($_POST['adresse'])?$_POST['adresse']:'';
                      $code_postal = !empty($_POST['code_postal'])?$_POST['code_postal']:'';
                      $ville = !empty($_POST['ville'])?$_POST['ville']:'';
                      $telephone = !empty($_POST['telephone'])?$_POST['telephone']:'';
                      $email = !empty($_POST['email'])?$_POST['email']:'';
                      $prenom_du_contact = !empty($_POST['prenom_du_contact'])?$_POST['prenom_du_contact']:'';
                      $nom_du_contact = !empty($_POST['nom_du_contact'])?$_POST['nom_du_contact']:'';
                      $horaires = !empty($_POST['horaires'])?$_POST['horaires']:'';
                      $type_de_cuisine = !empty($_POST['type_de_cuisine'])?$_POST['type_de_cuisine']:'';
                      $specialite = !empty($_POST['specialite'])?$_POST['specialite']:'';
                      $prix_moyen = !empty($_POST['prix_moyen'])?$_POST['prix_moyen']:'';
                      
                      $to = 'contact@unowr.fr';
                      $subject = 'New contact form have been submitted';
                      $htmlContent = "
                          <h2>Contact request details</h2>
                          <h3>À propos du restaurateur : </h3>
                          <p>
                          <b>Prénom : </b>".$first_name."<br>
                          <b>Nom : </b>".$last_name."<br>
                          <b>Téléphone : </b>".$telephone."<br>
                          <b>Email : </b>".$email."<br>
                          <h3>À propos du restaurant : </h3>
                          <p><b>Nom du restaurant : </b>".$restaurant_name."<br>
                          <b>Adresse : </b>".$adress."<br></p>
                          <b>Code postal : </b>".$post_code."<br></p>
                          <p><b>Message : </b>".$message."<br></p>
                      ";
                      // Always set content-type when sending HTML email
                      $headers = "MIME-Version: 1.0" . "\r\n";
                      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                      // More headers
                      $headers .= 'From : '.$first_name.' '.$last_name.' <'.$email.'>' . "\r\n";
                      //send email
                      @mail($to,$subject,$htmlContent,$headers);
                      
                      $succMsg = 'Votre message a bien été envoyé !';
                      echo '<p style="color: #26a69a"><b>';
                      echo $succMsg;
                      echo "</b></p>";
                  else:
                      $errMsg = 'Échec de vérification du captcha, essayez à nouveau...';
                      echo '<p style="color: #F44336; text-align: center"><b>';
                      echo $errMsg;
                      echo "</b></p>";
                  endif;
              else:
                  $errMsg = "Pensez à valider le captcha avant d'envoyer votre message.";
                echo '<p style="color: #F44336"; text-align: center><b>';
                      echo $errMsg;
                      echo "</b></p>";
              endif;
          else:
              $errMsg = '';
              $succMsg = '';
          endif;
        ?>
		</form>
	</div>



  	<script>
		$(document).ready(function() {
    		$('select').material_select();
  		});
        
        $('select').material_select('destroy');
  	</script>