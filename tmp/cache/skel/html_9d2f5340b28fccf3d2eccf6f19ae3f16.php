<?php

/*
 * Squelette : prive/formulaires/inc-logo_auteur.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/inc-logo_auteur.html
// Temps de compilation total: 225.260 ms
//

function html_9d2f5340b28fccf3d2eccf6f19ae3f16($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q((	'Content-type:text/html;charset=' .
	(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'charset', null),true))))) . '); ?'.'>') .
retablir_echappements_modeles(filtrer('image_graver',filtrer('image_recadre_avec_fallback',quete_html_logo(quete_logo('id_auteur', 'ON', ($Pile[0]['id_auteur'] ?? null), ''), '', ''),'200','200'))) .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' ce fichier est utilise par inc/identifier_login, pour l\'identification ajax des auteurs dans le formulaire de login') :
		''));

	return analyse_resultat_skel('html_9d2f5340b28fccf3d2eccf6f19ae3f16', $Cache, $page, 'prive/formulaires/inc-logo_auteur.html');
}
