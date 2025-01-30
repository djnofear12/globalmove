<?php

/*
 * Squelette : ../prive/squelettes/head/dist.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:36 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/head/dist.html
// Temps de compilation total: 0.503 ms
//

function html_8bf2d473bb4fe3f13e046fd7e3cf84e2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

  Squelette
  (c) 2009 xxx
  Distribue sous licence GPL

') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Si pas de title, celui ci sera mis automatiquement par f_title_auto
en capturant le premier <h1> de la page') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'paramcss'] = (parametres_css_prive('')))) .
retablir_echappements_modeles(pipeline( 'header_prive' , (recuperer_fond( 'prive/squelettes/inclure/head' , array('titre' => ($Pile[0]['titre'] ?? null) ,
	'minipres' => ($Pile[0]['minipres'] ?? null) ,
	'paramcss' => (table_valeur($Pile["vars"]??[], (string)'paramcss', null)) ,
	'espace_prive' => ($Pile[0]['espace_prive'] ?? null) ), array('compil'=>array('../prive/squelettes/head/dist.html','html_8bf2d473bb4fe3f13e046fd7e3cf84e2','',0,$GLOBALS['spip_lang'])), _request('connect') ?? '')) )));

	return analyse_resultat_skel('html_8bf2d473bb4fe3f13e046fd7e3cf84e2', $Cache, $page, '../prive/squelettes/head/dist.html');
}
