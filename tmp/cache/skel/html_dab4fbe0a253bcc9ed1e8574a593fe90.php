<?php

/*
 * Squelette : ../prive/squelettes/top/dist.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/dist.html
// Temps de compilation total: 0.659 ms
//

function html_dab4fbe0a253bcc9ed1e8574a593fe90($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- top -->';

	return analyse_resultat_skel('html_dab4fbe0a253bcc9ed1e8574a593fe90', $Cache, $page, '../prive/squelettes/top/dist.html');
}
