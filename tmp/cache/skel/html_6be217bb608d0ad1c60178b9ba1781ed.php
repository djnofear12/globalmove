<?php

/*
 * Squelette : ../prive/squelettes/page.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:35 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/page.html
// Temps de compilation total: 0.559 ms
//

function html_6be217bb608d0ad1c60178b9ba1781ed($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Security-Policy: frame-ancestors \'none\'') . '); ?'.'>') .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/structure') . ', array_merge('.var_export($Pile[0],1).',array(\'type-page\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'type-page', null), (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'exec', null),true)))),true)))) . ',
	\'composition\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'composition', null), ''),true)))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/page.html\',\'html_6be217bb608d0ad1c60178b9ba1781ed\',\'\',2,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
');

	return analyse_resultat_skel('html_6be217bb608d0ad1c60178b9ba1781ed', $Cache, $page, '../prive/squelettes/page.html');
}
