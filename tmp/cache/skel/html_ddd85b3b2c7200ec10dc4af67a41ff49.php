<?php

/*
 * Squelette : ../prive/themes/spip/ajax.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/ajax.css.html
// Temps de compilation total: 0.238 ms
//

function html_ddd85b3b2c7200ec10dc4af67a41ff49($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette définit les styles des boutons de l\'espace privé.

	Règles propres aux éléments en ajax.

') :
		'') .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<style>') :
		'') .
'

/**
 * Conteneurs ajax
 * Ils sont ajoutés autour des éléments ajaxés
 */
div.ajaxbloc,
div.ajax,
div.ajax-form-container {
	position: relative;
}

/* Picto de chargement */
.image_loading {
	float: inset-inline-end;
}
div.ajaxbloc > .image_loading,
div.ajax > .image_loading,
.formulaire_spip > .image_loading,
div.ajax-form-container > .image_loading {
	position: absolute;
	right: 0;
	float: none;
}

/* Bug IE/Win lol */
.bugajaxie {
	display: none;
}');

	return analyse_resultat_skel('html_ddd85b3b2c7200ec10dc4af67a41ff49', $Cache, $page, '../prive/themes/spip/ajax.css.html');
}
