<?php

/*
 * Squelette : ../prive/squelettes/inclure/mise_a_jour.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/mise_a_jour.html
// Temps de compilation total: 0.290 ms
//

function html_a1a690e9bbe7a940f794ac83484aa19a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(boite_ouvrir('', 'notice')) .
'
	<p>' .
_T('public|spip|ecrire:nouvelle_version_spip', array('version' => retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('derniere_maj_notifiee',null,false):''))))) .
'</p>
	' .
(($t1 = strval(retablir_echappements_modeles(((find_in_path((string)'spip_loader.php')) ?' ' :''))))!=='' ?
		(retablir_echappements_modeles(boite_pied()) . $t1 . (	'
	<a class="btn" href="' .
	retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
	'/spip_loader.php">' .
	_T('public|spip|ecrire:bouton_mettre_a_jour') .
	'</a>')) :
		'') .
'
' .
retablir_echappements_modeles(boite_fermer()));

	return analyse_resultat_skel('html_a1a690e9bbe7a940f794ac83484aa19a', $Cache, $page, '../prive/squelettes/inclure/mise_a_jour.html');
}
