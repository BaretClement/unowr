<?php
/*
Template Name: Restaurateur - material
*/

get_header( 'custom-material' ); ?>

      <div class="container formulaire">
      	<form class="col s12 color-white" action="#contact" method="POST" autocomplete="off">
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

            <!-- Google Captcha -->
            <div class="col s12 small-margin">  
                <div class="g-recaptcha" data-sitekey="6LePrgkUAAAAADJ3EmlqXxgyaXJ2TyZi01NfwL3T"></div>
            </div>

          	<!-- BOUTON ENVOYER -->
          	<div class="col s12 center margin-bottom">
                <button class="btn-flat waves-effect" type="submit" name="action">Envoyer</button>
			     </div>
        </div>

        
        <?php 
          $_POST['https://www.google.com/recaptcha/api/siteverify']
        ?>
        
        <?php
        if(isset($_POST['action'])){
            $prenom_du_contact=$_POST['prenom_du_contact'];
            $nom_du_contact=$_POST['nom_du_contact'];
            $telephone=$_POST['telephone'];
            $email=$_POST['email'];
            $nom_du_restaurant=$_POST['nom_du_restaurant'];
            $adresse=$_POST['adresse'];
            $message=$_POST['message'];
           
            $mailToSend = 'Hello team UNOWR, ' . $prenom_du_contact . ' '. $nom_du_contact . ' vous a envoyé un message !<br><br><p>À propos restaurateur :</p><b>Prénom</b> : '. $prenom_du_contact . '<br><b>Nom</b> : '. $nom_du_contact . '<br> <b>Téléphone</b> : ' . $telephone .'<br><b>Email</b> : '. $email .'<br><p>À propos de son restaurant</p><b>Nom du restaurant :</b> : '. $nom_du_restaurant . '<br><b>adresse</b> : '. $adresse . '<br><br><b>Message</b> : '. $message . ' ';
        }
        ?>

        <?php
        $TO = "clement.baret@gmail.com";

        $h = "From: communication@unowr.fr";

        mail($TO, $nom_du_restaurant, $mailToSend, "Content-type: text/html");

        ?>

        <?php
function isValid($code, $ip = null)
{
    if (empty($code)) {
        return false; // Si aucun code n'est entré, on ne cherche pas plus loin
    }
    $params = [
        'secret'    => "6LePrgkUAAAAAF9VVGzkbWsYE-aQ-6fmgySrJZ7R",
        'response'  => $code
    ];
    if( $ip ){
        $params['remoteip'] = $ip;
    }
    $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
    if (function_exists('curl_version')) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Evite les problèmes, si le ser
        $response = curl_exec($curl);
    } else {
        // Si curl n'est pas dispo, un bon vieux file_get_contents
        $response = file_get_contents($url);
    }

    if (empty($response) || is_null($response)) {
        return false;
    }

    $json = json_decode($response);
    return $json->success;
}
        ?>
        </form>
      <!-- form -->
      </div>
    </div>


		</form>
	</div>



  	<script>
		$(document).ready(function() {
    		$('select').material_select();
  		});
        
        $('select').material_select('destroy');
  	</script>

    <?php get_footer( 'custom-material' ); ?>