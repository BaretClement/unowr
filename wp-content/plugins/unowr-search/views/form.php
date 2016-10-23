<form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post">
	<p class="" data-unowr-form-wrapper="true">
	Ou <br/>
	<input type="text" class="" name="unowr-input" data-unowr-form="unowr-where" value="<?php
	if ( isset( $_POST["cf-name"] )) {
		echo esc_attr($_POST["cf-name"]);
	}
	?>" size="40" />
	<span class="unowr-response" data-unowr-response="true"></span>
	</p>

	<p class="unowr-hidden" data-unowr-form-wrapper="true">
	Quand<br/>
	<input type="text" class="" name="unowr-input" data-unowr-form="unowr-when" value="<?php
	if ( isset( $_POST["cf-name"] )) {
		echo esc_attr($_POST["cf-name"]);
	}
	?>" size="40" />
	<span class="unowr-response" data-unowr-response="true"></span>
	</p>

	<p class="unowr-hidden" data-unowr-form-wrapper="true">
	Quelle occasion <br/>
	<input type="text" class="" name="unowr-input" data-unowr-form="unowr-which" value="<?php
	if ( isset( $_POST["cf-name"] )) {
		echo esc_attr($_POST["cf-name"]);
	}
	?>" size="40" />
	<span class="unowr-response" data-unowr-response="true"></span>
	</p>

	<p class="unowr-hidden" data-unowr-form-wrapper="true">
	Quelle budget <br/>
	<input type="text" class="" name="unowr-input" data-unowr-form="unowr-how-much" value="<?php
	if ( isset( $_POST["cf-name"] )) {
		echo esc_attr($_POST["cf-name"]);
	}
	?>" size="40" />
	<span class="unowr-response" data-unowr-response="true"></span>
	</p>

	<p class="unowr-hidden" data-unowr-form-wrapper="true">
	Quel ambiance <br/>
	<input type="text" class="" name="unowr-input" data-unowr-form="unowr-ambiance" value="<?php
	if ( isset( $_POST["cf-name"] )) {
		echo esc_attr($_POST["cf-name"]);
	}
	?>" size="40" />
	<span class="unowr-response" data-unowr-response="true"></span>
	</p>

	<p class="unowr-hidden" data-unowr-form-wrapper="true">
	Quelle cuisine <br/>
	<input type="text" class="" name="unowr-input" data-unowr-form="unowr-food-type" value="<?php
	if ( isset( $_POST["cf-name"] )) {
		echo esc_attr($_POST["cf-name"]);
	}
	?>" size="40" />
	<span class="unowr-response" data-unowr-response="true"></span>
	</p>

	<input type="button" value="envoyer" data-unowr-submit="true" />
</form>