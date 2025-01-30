<?php

/*
 * Squelette : plugins-dist/medias/modeles/logo.html
 * Date :      Tue, 03 Dec 2024 10:08:52 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/medias/modeles/logo.html
// Temps de compilation total: 0.742 ms
//

function html_2807b192801527136c1a288722fd1bb2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_url(entites_html(table_valeur($Pile[0]??[], (string)'lien', null),true))))))!=='' ?
		('<a href="' . $t1 . '">') :
		'') .
'<img
	src="' .
retablir_echappements_modeles(interdire_scripts(attribut_url(entites_html(table_valeur($Pile[0]??[], (string)'logo_on', null),true)))) .
'"
	class="spip_logo' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(entites_html(table_valeur($Pile[0]??[], (string)'align', null),true))))))!=='' ?
		(' spip_logo_' . $t1) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true)) ?' ' :'')))))!=='' ?
		($t1 . 'spip_logo_survol') :
		'') .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(entites_html(table_valeur($Pile[0]??[], (string)'width', null),true))))))!=='' ?
		('
	width="' . $t1 . '"') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_html(entites_html(table_valeur($Pile[0]??[], (string)'height', null),true))))))!=='' ?
		('
	height="' . $t1 . '"') :
		'') .
'
	alt="' .
retablir_echappements_modeles(interdire_scripts(attribut_html(supprimer_tags(entites_html(table_valeur($Pile[0]??[], (string)'alt', null),true))))) .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(attribut_url(entites_html(table_valeur($Pile[0]??[], (string)'logo_off', null),true))))))!=='' ?
		('
	data-src-hover="' . $t1 . '"') :
		'') .
'/>' .
retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'lien', null),true) ? '</a>':''))) .
'
');

	return analyse_resultat_skel('html_2807b192801527136c1a288722fd1bb2', $Cache, $page, 'plugins-dist/medias/modeles/logo.html');
}
