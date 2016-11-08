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
	          	<input id="nom_du_restaurant" type="text" class="validate" required="">
	          	<label for="nom_du_restaurant">Nom du restaurant</label>
	        </div>
			<!-- ADRESSE DU RESTAURANT -->
	        <div class="input-field col s12 m6">
	          	<input id="adresse" type="text" class="validate">
	          	<label for="adresse">Adresse</label>
	        </div>
			<!-- CODE POSTAL DU RESTAURANT -->
	        <div class="input-field col s6 m3">
	          	<input id="code_postal" type="text" class="validate">
	          	<label for="code_postal">Code postal</label>
	        </div>
			<!-- VILLE DU RESTAURANT -->
	        <div class="input-field col s6 m3">
	          	<input id="ville" type="text" class="validate">
	          	<label for="ville">Ville</label>
	        </div>
			<!-- TÉLÉPHONE -->
	        <div class="input-field col s6">
	          	<input id="telephone" type="text" class="validate">
	          	<label for="telephone">Téléphone</label>
	        </div>
			<!-- EMAIL -->
	        <div class="input-field col s6">
	          	<input id="email" type="email" class="validate">
	          	<label for="email">Email</label>
	        </div>
			<!-- PRÉNOM DU CONTACT -->
	        <div class="input-field col s6">
	          	<input id="prenom_du_contact" type="text" class="validate">
	          	<label for="prenom_du_contact">Prénom du contact</label>
	        </div>
			<!-- NOM DU CONTACT -->
	        <div class="input-field col s6">
	          	<input id="nom_du_contact" type="text" class="validate">
	          	<label for="nom_du_contact">Nom du contact</label>
	        </div>
			<!-- START HORAIRES D'OUVERTURE -->
	        <div class="col s12">
	        	<table class="formulaire">
        			<thead>
          				<tr>
				            <th data-field="id">Horaires d'ouverture</th>
				        </tr>
        			</thead>
        			<tbody>
        				<!-- lundi -->
          				<tr>
            				<td>Lundi</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="lundi_midi"/>
      							<label for="lundi_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="lundi_soir"/>
            					<label for="lundi_soir">soir</label>
            				</td>
          				</tr>
        				<!-- mardi -->
          				<tr>
            				<td>Mardi</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="mardi_midi"/>
      							<label for="mardi_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="mardi_soir"/>
            					<label for="mardi_soir">soir</label>
            				</td>
          				</tr>
						<!-- mercredi -->
          				<tr>
            				<td>Mercredi</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="mercredi_midi"/>
      							<label for="mercredi_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="mercredi_soir"/>
            					<label for="mercredi_soir">soir</label>
            				</td>
          				</tr>
						<!-- jeudi -->
          				<tr>
            				<td>Jeudi</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="jeudi_midi"/>
      							<label for="jeudi_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="jeudi_soir"/>
            					<label for="jeudi_soir">soir</label>
            				</td>
          				</tr>
						<!-- vendredi -->
          				<tr>
            				<td>Vendredi</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="vendredi_midi"/>
      							<label for="vendredi_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="vendredi_soir"/>
            					<label for="vendredi_soir">soir</label>
            				</td>
          				</tr>
						<!-- samedi -->
          				<tr>
            				<td>Samedi</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="samedi_midi"/>
      							<label for="samedi_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="samedi_soir"/>
            					<label for="samedi_soir">soir</label>
            				</td>
          				</tr>
						<!-- dimanche -->
          				<tr>
            				<td>Dimanche</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="dimanche_midi"/>
      							<label for="dimanche_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="dimanche_soir"/>
            					<label for="dimanche_soir">soir</label>
            				</td>
          				</tr>
					</tbody>
				</table>
	        </div>
	        <!-- END HORAIRES D'OUVERTURE -->
	        <!-- START TYPE DE CUISINE -->
	        <div class="col s12">
	        	<table class="formulaire">
        			<thead>
          				<tr>
				            <th data-field="id">Type de cuisine</th>
				        </tr>
        			</thead>
        			<tbody>
        				<tr>
            				<td></td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="lundi_midi"/>
      							<label for="lundi_midi">midi</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="lundi_soir"/>
            					<label for="lundi_soir">soir</label>
            				</td>
          				</tr>
        			</tbody>
        		</table>
        	</div>

       		<div class="input-field col s12">
		    	<select multiple>
		    		<option value="" disabled selected>Type de cuisine ( à cocher )</option>
		      		<option value="1">Végétarien</option>
		      		<option value="1">Poissons & fruits de mer</option>
		      		<optgroup label="Cuisine asiatique"></optgroup>
		      		<option value="1">Japonais</option>
		      		<option value="1">Chinois</option>
		      		<option value="1">Wok</option>
		      		<option value="1">Indien</option>
		      		<option value="1">Thaï</option>
		      		<option value="1">Vietnamien</option>
		      		<option value="1">Malaisien</option>
		      		<option value="1">Libanais</option>
		      		<optgroup label="Cuisine nord-américaine"></optgroup>
		      		<option value="1">Burger</option>
		      		<option value="1">Bagel</option>
		      		<option value="1">Cubain</option>
		      		<option value="1">Mexicain</option>
		      		<optgroup label="Cuisine africaine"></optgroup>
		      		<option value="1">Couscous & tajines</option>
		      		<option value="1">Turc</option>
		    	</select>
		  	</div>
	        <div class="input-field col s12">
	          	<input id="specialite" type="text" class="validate">
	          	<label for="specialite">Vous n'avez pas trouvé votre type de cuisine ? Indiquez le ici :)</label>
	        </div>
	        <!-- END TYPE DE CUISINE -->

			<!-- SPECIALITÉ -->
	        <div class="input-field col s6">
	          	<input id="specialite" type="text" class="validate">
	          	<label for="specialite">Spécialité du restaurant</label>
	        </div>
			<!-- PRIX MOYEN -->
	        <div class="input-field col s6">
	          	<input id="prix_moyen" type="text" class="validate">
	          	<label for="prix_moyen">Prix moyen ( menu )</label>
	        </div>
			<!-- START AMBIANCE -->
			<div class="col s12">
	        	<table class="formulaire">
        			<thead>
          				<tr>
				            <th data-field="id">Type d'ambiance</th>
				        </tr>
        			</thead>
        			<tbody>
          				<tr>
            				<td>      
            					<input type="checkbox" class="filled-in" id="lumiere_tamisee"/>
      							<label for="lumiere_tamisee">Lumière tamisée</label>
      						</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="chill"/>
            					<label for="chill">Chill</label>
            				</td>
            			</tr>
            			<tr>
            				<td>      
            					<input type="checkbox" class="filled-in" id="costume_trois_pièces"/>
            					<label for="costume_trois_pièces">Costume trois pièces</label>
            				</td>
            				<td>      
            					<input type="checkbox" class="filled-in" id="bonne_franquette"/>
            					<label for="bonne_franquette">Bonne franquette</label>
            				</td>
            			</tr>
            			<tr>
            				<td>      
            					<input type="checkbox" class="filled-in" id="rdv_en_terre_inconnue"/>
            					<label for="rdv_en_terre_inconnue">Rendez-vous en terre inconnue</label>
            				</td>
							<td>      
            					<input type="checkbox" class="filled-in" id="bon_classique"/>
            					<label for="bon_classique">Bon classique</label>
            				</td>
          				</tr>
          			</tbody>
          		</table>
          	</div>
          	<!-- END AMBIANCE -->
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