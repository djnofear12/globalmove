<?php

/*
 * Squelette : ../prive/themes/spip/style_prive.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:46 GMT
 * Boucles :   _css, _cssplugins
 */ 

function BOUCLE_csshtml_b8cbc434da787156f0c7abafdb90e9f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'modules', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_css';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"env",
		"couleur_claire",
		"couleur_foncee",
		"ltr");
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
		array('../prive/themes/spip/style_prive.css.html','html_b8cbc434da787156f0c7abafdb90e9f2','_css',61,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fond'] = (interdire_scripts(substr(find_in_theme(concat(safehtml($Pile[$SP]['valeur']),'.html')),(strlen((defined('_DIR_RACINE')?constant('_DIR_RACINE'):''))),(intval('-5'))))))) .
'
/*
 * ' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
'::' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'fond', null)) .
'
 */
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'fond', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(recuperer_fond( (table_valeur($Pile["vars"]??[], (string)'fond', null)) , array_merge($Pile[0],array('couleur_claire' => (isset($Pile[$SP]['couleur_claire'])?$Pile[$SP]['couleur_claire']:(($Pile[0]['couleur_claire'] ?? null))) ,
	'couleur_foncee' => (isset($Pile[$SP]['couleur_foncee'])?$Pile[$SP]['couleur_foncee']:(($Pile[0]['couleur_foncee'] ?? null))) ,
	'ltr' => (isset($Pile[$SP]['ltr'])?$Pile[$SP]['ltr']:(($Pile[0]['ltr'] ?? null))) ,
	'claire' => (table_valeur($Pile["vars"]??[], (string)'claire', null)) ,
	'foncee' => (table_valeur($Pile["vars"]??[], (string)'foncee', null)) ,
	'left' => (table_valeur($Pile["vars"]??[], (string)'left', null)) ,
	'right' => (table_valeur($Pile["vars"]??[], (string)'right', null)) ,
	'rtl' => (table_valeur($Pile["vars"]??[], (string)'rtl', null)) ,
	'dir' => (table_valeur($Pile["vars"]??[], (string)'dir', null)) ,
	'font-size' => (table_valeur($Pile["vars"]??[], (string)'font-size', null)) ,
	'line-height' => (table_valeur($Pile["vars"]??[], (string)'line-height', null)) ,
	'margin-bottom' => (table_valeur($Pile["vars"]??[], (string)'margin-bottom', null)) ,
	'text-indent' => (table_valeur($Pile["vars"]??[], (string)'text-indent', null)) ,
	'font-family' => (table_valeur($Pile["vars"]??[], (string)'font-family', null)) ,
	'background-color' => (table_valeur($Pile["vars"]??[], (string)'background-color', null)) ,
	'color' => (table_valeur($Pile["vars"]??[], (string)'color', null)) ,
	'lang' => $GLOBALS["spip_lang"] )), array('compil'=>array('../prive/themes/spip/style_prive.css.html','html_b8cbc434da787156f0c7abafdb90e9f2','_css',64,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_css @ ../prive/themes/spip/style_prive.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_csspluginshtml_b8cbc434da787156f0c7abafdb90e9f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(find_all_in_path('prive/','/style_prive_plugin_')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_cssplugins';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"env",
		"couleur_claire",
		"couleur_foncee",
		"ltr");
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
		array('../prive/themes/spip/style_prive.css.html','html_b8cbc434da787156f0c7abafdb90e9f2','_cssplugins',74,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fond'] = (	'prive/' .
	(interdire_scripts(basename(safehtml($Pile[$SP]['valeur']),'.html')))))) .
retablir_echappements_modeles(recuperer_fond( (table_valeur($Pile["vars"]??[], (string)'fond', null)) , array_merge($Pile[0],array('couleur_claire' => (isset($Pile[$SP]['couleur_claire'])?$Pile[$SP]['couleur_claire']:(($Pile[0]['couleur_claire'] ?? null))) ,
	'couleur_foncee' => (isset($Pile[$SP]['couleur_foncee'])?$Pile[$SP]['couleur_foncee']:(($Pile[0]['couleur_foncee'] ?? null))) ,
	'ltr' => (isset($Pile[$SP]['ltr'])?$Pile[$SP]['ltr']:(($Pile[0]['ltr'] ?? null))) ,
	'claire' => (table_valeur($Pile["vars"]??[], (string)'claire', null)) ,
	'foncee' => (table_valeur($Pile["vars"]??[], (string)'foncee', null)) ,
	'left' => (table_valeur($Pile["vars"]??[], (string)'left', null)) ,
	'right' => (table_valeur($Pile["vars"]??[], (string)'right', null)) ,
	'rtl' => (table_valeur($Pile["vars"]??[], (string)'rtl', null)) ,
	'dir' => (table_valeur($Pile["vars"]??[], (string)'dir', null)) ,
	'font-size' => (table_valeur($Pile["vars"]??[], (string)'font-size', null)) ,
	'line-height' => (table_valeur($Pile["vars"]??[], (string)'line-height', null)) ,
	'margin-bottom' => (table_valeur($Pile["vars"]??[], (string)'margin-bottom', null)) ,
	'text-indent' => (table_valeur($Pile["vars"]??[], (string)'text-indent', null)) ,
	'font-family' => (table_valeur($Pile["vars"]??[], (string)'font-family', null)) ,
	'background-color' => (table_valeur($Pile["vars"]??[], (string)'background-color', null)) ,
	'color' => (table_valeur($Pile["vars"]??[], (string)'color', null)) ,
	'lang' => $GLOBALS["spip_lang"] )), array('compil'=>array('../prive/themes/spip/style_prive.css.html','html_b8cbc434da787156f0c7abafdb90e9f2','_cssplugins',76,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_cssplugins @ ../prive/themes/spip/style_prive.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/style_prive.css.html
// Temps de compilation total: 4.851 ms
//

function html_b8cbc434da787156f0c7abafdb90e9f2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'/*
Valeurs par defaut :
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'theme'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_theme', null), '3874b0'),true)))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'theme', null))))!=='' ?
		('theme: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'foncee'] = (table_valeur($Pile["vars"]??[], (string)'theme', null)))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'foncee', null))))!=='' ?
		('foncee: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'claire'] = (($t2 = strval((filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'theme', null),'.5'))))!=='' ?
			('#' . $t2) :
			''))) .
' ' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null))))!=='' ?
		('claire: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null))))!=='' ?
		('left: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null))))!=='' ?
		('right: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'rtl'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','','_rtl'))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'rtl', null))))!=='' ?
		('rtl: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'dir'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','ltr','rtl'))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'dir', null))))!=='' ?
		('dir: ' . $t1 . ';') :
		'') .
'

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'font-size'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'font-size', null), '0.8125em'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-size', null))))!=='' ?
		('font-size: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'line-height'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'line-height', null), '1.385em'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'line-height', null))))!=='' ?
		('line-height: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'margin-bottom'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'margin-bottom', null), (table_valeur($Pile["vars"]??[], (string)'line-height', null))),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'margin-bottom', null))))!=='' ?
		('margin-bottom: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'text-indent'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'text-indent', null), '50px'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'text-indent', null))))!=='' ?
		('text-indent: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'font-family'] = (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'font-family', null), 'Helvetica, Arial, sans-serif'))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-family', null))))!=='' ?
		('font-family: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'background-color'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'background-color', null), '#F8F7F3'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'background-color', null))))!=='' ?
		('background-color : ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'color'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'color', null), '#000000'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'color', null))))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'
*/

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Variables ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'fond'] = (substr(find_in_theme('vars.css.html'),(strlen((defined('_DIR_RACINE')?constant('_DIR_RACINE'):''))),(intval('-5')))))) .
'
' .
(($t1 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'fond', null)) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(recuperer_fond( (table_valeur($Pile["vars"]??[], (string)'fond', null)) , array_merge($Pile[0],array('couleur_claire' => ($Pile[0]['couleur_claire'] ?? null) ,
	'couleur_foncee' => ($Pile[0]['couleur_foncee'] ?? null) ,
	'ltr' => ($Pile[0]['ltr'] ?? null) ,
	'claire' => (table_valeur($Pile["vars"]??[], (string)'claire', null)) ,
	'foncee' => (table_valeur($Pile["vars"]??[], (string)'foncee', null)) ,
	'left' => (table_valeur($Pile["vars"]??[], (string)'left', null)) ,
	'right' => (table_valeur($Pile["vars"]??[], (string)'right', null)) ,
	'rtl' => (table_valeur($Pile["vars"]??[], (string)'rtl', null)) ,
	'dir' => (table_valeur($Pile["vars"]??[], (string)'dir', null)) ,
	'font-size' => (table_valeur($Pile["vars"]??[], (string)'font-size', null)) ,
	'line-height' => (table_valeur($Pile["vars"]??[], (string)'line-height', null)) ,
	'margin-bottom' => (table_valeur($Pile["vars"]??[], (string)'margin-bottom', null)) ,
	'text-indent' => (table_valeur($Pile["vars"]??[], (string)'text-indent', null)) ,
	'font-family' => (table_valeur($Pile["vars"]??[], (string)'font-family', null)) ,
	'background-color' => (table_valeur($Pile["vars"]??[], (string)'background-color', null)) ,
	'color' => (table_valeur($Pile["vars"]??[], (string)'color', null)) ,
	'lang' => $GLOBALS["spip_lang"] )), array('compil'=>array('../prive/themes/spip/style_prive.css.html','html_b8cbc434da787156f0c7abafdb90e9f2','',20,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
	'
')) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' les vieux styles a evacuer en premier, ca permet qu\'ils ne polluent pas en cas de double definition') :
		'') .
'
' .
retablir_echappements_modeles(charge_scripts((substr(direction_css(find_in_theme('clear.css'),(table_valeur($Pile["vars"]??[], (string)'dir', null))),(strlen((defined('_DIR_RACINE')?constant('_DIR_RACINE'):''))))),false)) .
'
' .
retablir_echappements_modeles(charge_scripts((substr(direction_css(find_in_theme('layout.css'),(table_valeur($Pile["vars"]??[], (string)'dir', null))),(strlen((defined('_DIR_RACINE')?constant('_DIR_RACINE'):''))))),false)) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Les modules ') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'modules'] = (array('ajax.css', 'typo.css', 'grids.css', 'bando.css', 'boutons.css', 'icons.css', 'onglets.css', 'tables.css', 'box.css', 'lists.css', 'forms.css', 'picker.css', 'alertes.css', 'code.css', 'content.css', 'exceptions.css', 'utils.css', 'theme.css')))) .
BOUCLE_csshtml_b8cbc434da787156f0c7abafdb90e9f2($Cache, $Pile, $doublons, $Numrows, $SP) .
'


/*** Plugins ***/

' .
BOUCLE_csspluginshtml_b8cbc434da787156f0c7abafdb90e9f2($Cache, $Pile, $doublons, $Numrows, $SP) .
'

/**** Plugins fin ***/
');

	return analyse_resultat_skel('html_b8cbc434da787156f0c7abafdb90e9f2', $Cache, $page, '../prive/themes/spip/style_prive.css.html');
}
