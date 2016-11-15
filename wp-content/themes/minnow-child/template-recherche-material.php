<?php
/*
Template Name: Recherche - material
*/

get_header( 'custom-material' ); ?> 


<div class="row">
	<div class="col s12 min-height100">
		<div class="container search">

		</div>
  	</div>
</div>


<!-- Modal Structure -->
<div id="modal-inscription" class="modal modal-fixed-footer">
<div class="modal-content">
<h4>Demande de contact</h4>
<p></p><div role="form" class="wpcf7" id="wpcf7-f1684-o1" lang="fr-FR" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/unowr-github/#wpcf7-f1684-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="1684">
<input type="hidden" name="_wpcf7_version" value="4.5.1">
<input type="hidden" name="_wpcf7_locale" value="fr_FR">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1684-o1">
<input type="hidden" name="_wpnonce" value="33bb21a0ce">
</div>
<div class="col s12" style="text-align: left; font-size: 1rem !important; max-height: 5.5rem">
<label style="font-size: 1rem"> Prénom (*)<br>
<span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label>
</div>
<div class="col s6" style="text-align: left; font-size: 1rem !important; max-height: 5.5rem">
<label style="font-size: 1rem"> Téléphone (*)<br>
<span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false"></span> </label>
</div>
<div class="col s6" style="text-align: left; font-size: 1rem !important; max-height: 5.5rem">
<label style="font-size: 1rem"> Email (*)<br>
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label>
</div>
<div class="col s12" style="position: relative; top: -3px; max-height: 5.5rem">
<input type="submit" value="Envoyer la demande" class="wpcf7-form-control wpcf7-submit btn-flat center"><img class="ajax-loader" src="http://unowr.fr/unowr-github/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
<p></p> 
</div>

<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red ">Quitter</a>
</div>
</div>

<?php get_footer( 'custom-material' ); ?>