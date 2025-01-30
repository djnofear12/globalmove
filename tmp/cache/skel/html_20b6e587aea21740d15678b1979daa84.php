<?php

/*
 * Squelette : ../prive/style_prive.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/style_prive.css.html
// Temps de compilation total: 0.487 ms
//

function html_20b6e587aea21740d15678b1979daa84($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<style>/*
	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).
*/') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fond'] = (substr(find_in_theme('style_prive.css.html'),(strlen((defined('_DIR_RACINE')?constant('_DIR_RACINE'):''))),(intval('-5')))))) .
'
' .
retablir_echappements_modeles(recuperer_fond( (table_valeur($Pile["vars"]??[], (string)'fond', null)) , array_merge($Pile[0],array()), array('compil'=>array('../prive/style_prive.css.html','html_20b6e587aea21740d15678b1979daa84','',2,$GLOBALS['spip_lang'])), _request('connect') ?? '')));

	return analyse_resultat_skel('html_20b6e587aea21740d15678b1979daa84', $Cache, $page, '../prive/style_prive.css.html');
}
