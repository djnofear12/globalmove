<?php

/*
 * Squelette : ../plugins-dist/bigup/css/vignettes.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:38 GMT
 * Boucles :   _vignettes
 */ 

function BOUCLE_vignetteshtml_8aaf49774749a177bf09781db05fe4d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(find_all_in_path('prive/vignettes/','[.]svg$')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_vignettes';
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
		array('../plugins-dist/bigup/css/vignettes.css.html','html_8aaf49774749a177bf09781db05fe4d8','_vignettes',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'ext'] = (interdire_scripts(filtre_reset(filtre_explode_dist(basename(safehtml($Pile[$SP]['valeur'])),'.')))))) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
') :
		'') .
retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'ext', null) != 'defaut') ? (	'.vignette_extension.' .
	(table_valeur($Pile["vars"]??[], (string)'ext', null)) .
	'{ background-image:url(' .
	(interdire_scripts(url_absolue(safehtml($Pile[$SP]['valeur'])))) .
	') }'):'')) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
') :
		''));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_vignettes @ ../plugins-dist/bigup/css/vignettes.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/bigup/css/vignettes.css.html
// Temps de compilation total: 12.246 ms
//

function html_8aaf49774749a177bf09781db05fe4d8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'.vignette_extension {
	background-image:url(' .
retablir_echappements_modeles(url_absolue(find_in_path((string)'prive/vignettes/defaut.svg'))) .
');
	background-repeat:no-repeat;
	background-position: center left;
}
' .
BOUCLE_vignetteshtml_8aaf49774749a177bf09781db05fe4d8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_8aaf49774749a177bf09781db05fe4d8', $Cache, $page, '../plugins-dist/bigup/css/vignettes.css.html');
}
