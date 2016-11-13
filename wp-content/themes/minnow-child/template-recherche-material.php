<?php
/*
Template Name: Recherche - material
*/

get_header( 'custom-material' ); ?> 


<div class="row">
	<div class="col s12 height100">
		<div class="container">
						
		<?php the_field(formulaire_de_recherche); ?>
		
			  <!-- Modal Trigger -->
			  <a class="waves-effect waves-light btn" href="#modal1" style="display: none">Modal</a>

			  <!-- Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4>Modal Header</h4>
					<?php the_field(formulaire_de_reservation); ?>	
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			    </div>
			  </div>

		</div>
  	</div>
</div>



<?php get_footer( 'custom-material' ); ?>