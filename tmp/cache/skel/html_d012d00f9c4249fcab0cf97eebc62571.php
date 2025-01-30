<?php

/*
 * Squelette : ../prive/squelettes/extra/dist.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/extra/dist.html
// Temps de compilation total: 0.106 ms
//

function html_d012d00f9c4249fcab0cf97eebc62571($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
<!-- extra -->');

	return analyse_resultat_skel('html_d012d00f9c4249fcab0cf97eebc62571', $Cache, $page, '../prive/squelettes/extra/dist.html');
}
