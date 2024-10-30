<?php
/*
Plugin Name: Hidden Badge ReCaptcha
Description: Plugin pour masquer le badge ReCaptcha V3 de Google
Author: Benjamin Simier
Version: 1.0
Author URI: https://www.benjaminsimier.com
*/

/*
VEUILLEZ AJOUTER LES LIGNES SUIVANTES À LA SUITE DE VOTRE FORMULAIRE (sans commentaire) :
<!--
<div id="bscaptcha">
	Ce site est protégé par reCAPTCHA et les <a href="https://policies.google.com/privacy" target="_blank">règles de confidentialité</a> et les <a href="https://policies.google.com/terms" target="_blank">conditions d'utilisation</a> de Google s'appliquent.
</div>
-->
*/

function bscaptcha() {
	echo "
	<style type='text/css'>
		.grecaptcha-badge {
			visibility: hidden !important;
		}

		#bscaptcha {
			font-size: 12px;
			margin-bottom: 15px;
		}
	</style>
	";
}

add_action( 'wp_head', 'bscaptcha' );

?>