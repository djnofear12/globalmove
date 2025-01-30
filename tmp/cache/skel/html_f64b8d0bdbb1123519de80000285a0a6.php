<?php

/*
 * Squelette : prive/formulaires/inc-options-langues.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:02:56 GMT
 * Boucles :   _langues
 */ 

function BOUCLE_langueshtml_f64b8d0bdbb1123519de80000285a0a6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(liste_options_langues(table_valeur($Pile[0]??[], (string)'name', null)))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_langues';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('prive/formulaires/inc-options-langues.html','html_f64b8d0bdbb1123519de80000285a0a6','_langues',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_multi_herit');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((safehtml($Pile[$SP]['valeur']) == (interdire_scripts(table_valeur($Pile[0]??[], (string)'herit', null))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
		<option class=\'maj-debut on\' value=\'herit\'' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((safehtml($Pile[$SP]['valeur']) == (interdire_scripts(table_valeur($Pile[0]??[], (string)'default', null))))) ?' ' :'')))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	' dir="' .
	retablir_echappements_modeles(interdire_scripts(lang_dir(safehtml($Pile[$SP]['valeur']),'ltr','rtl'))) .
	'">&#91;' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
	'&#93; ' .
	retablir_echappements_modeles(interdire_scripts(traduire_nom_langue(safehtml($Pile[$SP]['valeur'])))) .
	' (' .
	$l1 .
	')</option>
	')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((safehtml($Pile[$SP]['valeur']) == (interdire_scripts(table_valeur($Pile[0]??[], (string)'herit', null))))) ?'' :' ')))))!=='' ?
		($t1 . (	'
		<option value=\'' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
	'\'' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((safehtml($Pile[$SP]['valeur']) == (interdire_scripts(table_valeur($Pile[0]??[], (string)'default', null))))) ?' ' :'')))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	' dir="' .
	retablir_echappements_modeles(interdire_scripts(lang_dir(safehtml($Pile[$SP]['valeur']),'ltr','rtl'))) .
	'">&#91;' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
	'&#93; ' .
	retablir_echappements_modeles(interdire_scripts(traduire_nom_langue(safehtml($Pile[$SP]['valeur'])))) .
	'</option>
	')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_langues @ prive/formulaires/inc-options-langues.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette prive/formulaires/inc-options-langues.html
// Temps de compilation total: 185.371 ms
//

function html_f64b8d0bdbb1123519de80000285a0a6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_langueshtml_f64b8d0bdbb1123519de80000285a0a6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_f64b8d0bdbb1123519de80000285a0a6', $Cache, $page, 'prive/formulaires/inc-options-langues.html');
}
