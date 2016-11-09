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
      			<div class="col s12">
                <div class="input-field col s12 no-padding">
                    <select>
                      <option value="" disabled selected>Sélectionnez l'ambiance</option>
                      <option value="1">lumière tamisée</option>
                      <option value="2">chill</option>
                      <option value="3">costume trois pièces</option>
                      <option value="4">bonne franquette</option>
                      <option value="5">rendez-vous en terre inconnue</option>
                      <option value="6">bon classique</option>
                  </select>
                  <label class="active">Ambiance du restaurant</label>
                </div>
            </div>


          	<!-- BOUTON ENVOYER -->
          	<div class="col s12 center margin-bottom">
				<button class="btn-flat waves-effect waves-light" type="submit" name="action">
					Envoyer
  				</button>
			</div>
		</form>
	</div>



  	<script>
		$(document).ready(function() {
    		$('select').material_select();
  		});
        
        $('select').material_select('destroy');
  	</script>