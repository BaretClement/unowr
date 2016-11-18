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
				</div>

				<!-- Modal Trigger -->
				<a class="waves-effect waves-light btn" href="#modal-reservation" style="display: none">Modal</a>

				<!-- Modal Structure -->                    
				<div id="modal-reservation" class="modal">
					<div class="modal-content">
						<h4>Demande de réservation</h4>
						<?php the_field('formulaire_de_reservation'); ?>
					</div>
				</div>

		</div>
  	</div>
</div>

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-86120720-1', 'auto');
	  ga('send', 'pageview');
	</script>

<?php get_footer( 'custom-material' ); ?>