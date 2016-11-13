<?php
/*
Template Name: Recherche - material
*/

get_header( 'custom-material' ); ?> 


<div class="row">
	<div class="col s12 height100">
		<div class="container">
						
			<?php the_field(formulaire_de_recherche); ?>
			  
		</div>
  	</div>
</div>



<?php get_footer( 'custom-material' ); ?>