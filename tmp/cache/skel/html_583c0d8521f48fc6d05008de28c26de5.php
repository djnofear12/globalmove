<?php

/*
 * Squelette : ../prive/themes/spip/vars.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:46 GMT
 * Boucles :   _themes
 */ 

function BOUCLE_themeshtml_583c0d8521f48fc6d05008de28c26de5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'couleurs', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_themes';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
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
		array('../prive/themes/spip/vars.css.html','html_583c0d8521f48fc6d05008de28c26de5','_themes',29,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
[data-spip-theme-colors="' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
'"],
.spip-theme-colors-' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
' {
	' .
retablir_echappements_modeles(interdire_scripts(spip_generer_variables_css_couleurs_theme(safehtml(table_valeur($Pile[$SP]['valeur'], 'couleur_theme'))))) .
'
}
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_themes @ ../prive/themes/spip/vars.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/vars.css.html
// Temps de compilation total: 3.921 ms
//

function html_583c0d8521f48fc6d05008de28c26de5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles de l\'espace prive

	Déclarations de variables CSS.
	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
':root {
	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Dépend pour le moment de l’environnement ') :
		'') .
'
	' .
retablir_echappements_modeles(spip_generer_variables_css_typo($Pile,'')) .
'

	' .
retablir_echappements_modeles(interdire_scripts(spip_generer_variables_css_couleurs_theme(entites_html(table_valeur($Pile[0]??[], (string)'couleur_theme', null),true)))) .
'
}

:root,
[data-spip-theme-colors],
[class*="spip-theme-colors"] {
	' .
retablir_echappements_modeles(spip_generer_variables_css_couleurs('')) .
'
}


' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'couleurs'] = (charger_fonction('couleurs','inc')))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'couleurs'] = (call_user_func(table_valeur($Pile["vars"]??[], (string)'couleurs', null))))) .
BOUCLE_themeshtml_583c0d8521f48fc6d05008de28c26de5($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_583c0d8521f48fc6d05008de28c26de5', $Cache, $page, '../prive/themes/spip/vars.css.html');
}
