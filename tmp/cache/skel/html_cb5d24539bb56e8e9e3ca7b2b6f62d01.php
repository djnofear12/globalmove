<?php

/*
 * Squelette : ../prive/squelettes/structure.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:35 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/structure.html
// Temps de compilation total: 0.500 ms
//

function html_cb5d24539bb56e8e9e3ca7b2b6f62d01($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Cache-Control: no-cache') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Pragma: no-cache') . '); ?'.'>') .
retablir_echappements_modeles((defined('_DOCTYPE_ECRIRE')?constant('_DOCTYPE_ECRIRE'):'')) .
'<html class="' .
retablir_echappements_modeles(lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl')) .
(($t1 = strval(retablir_echappements_modeles(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang']))))!=='' ?
		(' ' . $t1) :
		'') .
' no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
retablir_echappements_modeles(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])) .
'" lang="' .
retablir_echappements_modeles(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])) .
'" dir="' .
retablir_echappements_modeles(lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl')) .
'">
<head>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/head/' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type-page', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'espace_prive\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/structure.html\',\'html_cb5d24539bb56e8e9e3ca7b2b6f62d01\',\'\',6,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
</head>
' .
retablir_echappements_modeles(filtre_sanitize_env($Pile,array('titre', 'sinon'))) .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/body') . ', array_merge('.var_export($Pile[0],1).',array(\'espace_prive\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/structure.html\',\'html_cb5d24539bb56e8e9e3ca7b2b6f62d01\',\'\',9,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
</html>
');

	return analyse_resultat_skel('html_cb5d24539bb56e8e9e3ca7b2b6f62d01', $Cache, $page, '../prive/squelettes/structure.html');
}
