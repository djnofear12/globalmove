<?php

/*
 * Squelette : ../plugins-dist/filtres_images/prive/squelettes/inclure/favicon-head.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:42 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/filtres_images/prive/squelettes/inclure/favicon-head.html
// Temps de compilation total: 0.858 ms
//

function html_063077fa0a74550bdac61a102350c103($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Un favicon ') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((include_spip('inc/config')?lire_config('image_process',null,false):'')) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fichier'] = (interdire_scripts(((($a = table_valeur($Pile[0]??[], (string)'favicon', null)) OR (is_string($a) AND strlen($a))) ? $a : (find_in_path((string)'images/favicon-spip.png'))))))) .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' D’une certaine couleur désirée ') :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'couleur', null),true)) ?' ' :'')))))!=='' ?
			($t2 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fichier'] = (appliquer_filtre(table_valeur($Pile["vars"]??[], (string)'fichier', null),'image_sepia',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'couleur', null),true)))))))) :
			'') .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' D’une certaine dimension ') :
			'') .
	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fichier-32'] = (filtrer('image_graver',filtrer('image_recadre',filtrer('image_passe_partout',table_valeur($Pile["vars"]??[], (string)'fichier', null),'32','32'),'32','32','center'))))) .
	'

	' .
	(($t2 = strval(retablir_echappements_modeles(url_absolue(extraire_attribut(timestamp(filtrer('image_graver', filtrer('image_format',table_valeur($Pile["vars"]??[], (string)'fichier-32', null),'ico'))),'src')))))!=='' ?
			('<link rel="shortcut icon" href="' . $t2 . '" type="image/x-icon" />') :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((include_spip('inc/config')?lire_config('image_process',null,false):'')) ?'' :' ')))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(retablir_echappements_modeles(url_absolue(timestamp(find_in_path((string)'spip.ico'))))))!=='' ?
			('<link rel="shortcut icon" href="' . $t2 . '" type="image/x-icon" />') :
			'') .
	'
')) :
		'') .
'
' .
retablir_echappements_modeles('<' . '?php header("X-Spip-Filtre: '.'trim' . '"); ?'.'>'));

	return analyse_resultat_skel('html_063077fa0a74550bdac61a102350c103', $Cache, $page, '../plugins-dist/filtres_images/prive/squelettes/inclure/favicon-head.html');
}
