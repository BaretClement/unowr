<?php
/*
Template Name: Restaurateur - material
*/

get_header( 'custom-material' ); ?>

	<!-- Contact -->
  	<div id="form" class="row padding-vertical valign-wrapper background-black color-white">
  		<div class="container valign">
  			<h2 class="align-center">Contactez-nous <sup class="ion-paper-airplane color-yellow"></sup></h2>
  			<p class="align-center margin-bottom">Vous êtes restaurateur et notre concept vous plait ?<br> Vous avez la possibilité de nous contacter et même de faire partie de nos premiers partenaires !</p>
	    	<!-- form -->
	    	<form class="col s12 color-white" action="#contact" method="POST" autocomplete="off">
	      		<h4>À propos de vous</h4>
	      		<div class="row">
	        		
			        <div class="input-field col s12 m6">
			          	<input name="first_name" id="last_name" type="text" class="validate" required="required">
			          	<label for="first_name">Prénom</label>
			        </div>

	        		<div class="input-field col s12 m6">
	          			<input name="last_name" id="first_name" type="text" class="validate" required="required">
	          			<label for="last_name">Nom</label>
	        		</div>
	        		

			        <div class="input-field col s12 m6">
			        	<i class="ion-ios-telephone-outline prefix"></i>
			          	<input name="telephone" id="telephone" type="tel" class="validate" maxlength="10" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required="required">
			          	<label id="telephone" for="telephone" data-error="Numéro invalide">Téléphone</label>
			        </div>

			        <div class="input-field col s12 m6">
			        	<i class="ion-ios-at-outline prefix"></i>
			          	<input name="email" id="email" type="email" class="validate" required="required" autocomplete="off">
			          	<label for="email" data-error="Email invalide">Email</label>
			        </div>

				</div>

				<h4>À propos de votre restaurant</h4>
				<div class="row">
			        <div class="input-field col s12">
			        <i class="ion-ios-home-outline prefix"></i>
			          	<input name="restaurant_name" id="restaurant_name" type="text" class="validate" required="required">
			          	<label for="restaurant_name">Nom du restaurant</label>
			        </div>

			        <div class="input-field col s8">
			        	<i class="ion-ios-location-outline prefix"></i>
			          	<input name="adress" id="adress" type="text" class="validate" required="required">
			          	<label for="adress">Adresse</label>
			        </div>

			        <div class="input-field col s4">
			          	<input name="post_code" id="post_code" type="number" maxlength="5" pattern="^(([0-8][0-9])|(9[0-5])|(2[ab]))[0-9]{3}$" class="validate" required="required">
			          	<label id="post_code" for="post_code" data-error="Code postal invalide">Code postal</label>
			        </div>

				</div>

			    <h4 id="contact">Que pouvons-nous faire pour vous ?</h4>
			    <div class="row">
				    <div class="input-field col s12"> 	
				     	<i class="ion-ios-compose-outline prefix"></i>
				        <textarea name="message" id="message" type="text" class="materialize-textarea" required="required" ></textarea>
				        <label for="message">Dites-nous tout :)</label>
				    </div>
				</div>

			    <div class="row">	
					<div class="col s12 small-margin">	
						<div align="center" class="g-recaptcha" data-sitekey="6LdwqgkUAAAAADJhz_RcoTKTdEnYw8mC1IuXuHeA"></div>
					</div>

					<div class="col s12">
						<div class="row align-center small-margin">
							<!-- <button class="btn waves-effect waves-light" type="submit" name="submit" value="sumibt">Envoyer</button> -->
							<input class="btn waves-effect waves-light" type="submit" name="submit" value="Envoyer">
						</div>
					</div>
				</div>
				
				<!-- Captcha Google -->
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
					            $first_name = !empty($_POST['first_name'])?$_POST['first_name']:'';
					        	$last_name = !empty($_POST['last_name'])?$_POST['last_name']:'';
					            $telephone = !empty($_POST['telephone'])?$_POST['telephone']:'';
					            $email = !empty($_POST['email'])?$_POST['email']:'';
					            $restaurant_name = !empty($_POST['restaurant_name'])?$_POST['restaurant_name']:'';
					            $adress = !empty($_POST['adress'])?$_POST['adress']:'';
					            $post_code = !empty($_POST['post_code'])?$_POST['post_code']:'';
					            $message = !empty($_POST['message'])?$_POST['message']:'';
					            
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
			<!-- form -->
    	</div>
  	</div>