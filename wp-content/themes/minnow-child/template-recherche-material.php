<?php
/*
Template Name: Recherche - material
*/

get_header( 'custom-material' ); ?> 


<div class="row">
	<div class="col s12 min-height100">
		<div class="container search">
						
			<?php the_field(formulaire_de_recherche); ?>	



<!-- Modal Structure -->                    
<div id="modal-inscription" class="modal modal-fixed-footer">
<div class="modal-content">
<h4>Demande de contact</h4>
<p><?php the_field('formulaire_de_contact'); ?></p> 
</div>

<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red ">Quitter</a>
</div>
</div>


<!-- Modal Trigger -->
<a class="waves-effect waves-light btn" href="#modal-reservation" style="display: none">Modal</a>


<!-- Modal Structure -->                    
<div id="modal-reservation" class="modal modal-fixed-footer">
<div class="modal-content">
<h4>Demande de réservation</h4>
<p><?php the_field('formulaire_de_reservation'); ?></p> 
</div>

<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red ">Quitter</a>
</div>
</div>

		</div>
  	</div>
</div>

<?php get_footer( 'custom-material' ); ?>