<?php

/*
 * Squelette : prive/login.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:02:47 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/login.html
// Temps de compilation total: 808.149 ms
//

function html_05278e20ef6ddda88f93d80931ed55b8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	Eviter les boutons d\'admin sur la page de login
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header(' . _q((	'Content-Type: text/html; charset=' .
	(interdire_scripts($GLOBALS['meta']['charset'])))) . '); ?'.'>') .
'<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
retablir_echappements_modeles(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])) .
'" lang="' .
retablir_echappements_modeles(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])) .
'" dir="' .
retablir_echappements_modeles(lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl')) .
'">
<head>
<title>' .
retablir_echappements_modeles(interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
'</title>
<meta charset="' .
retablir_echappements_modeles(interdire_scripts($GLOBALS['meta']['charset'])) .
'">
<meta name="robots" content="none">
<meta name="viewport" content="width=device-width">
' .
retablir_echappements_modeles(pipeline('insert_head_css','<!-- insert_head_css -->')) .
'
<link rel="stylesheet" href="' .
retablir_echappements_modeles(direction_css(find_in_theme('reset.css'))) .
'" type="text/css">
<link rel="stylesheet" href="' .
retablir_echappements_modeles(direction_css(find_in_theme('clear.css'))) .
'" type="text/css">
<link rel="stylesheet" href="' .
retablir_echappements_modeles(direction_css(find_in_theme('login_prive.css'))) .
'" type="text/css">
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Filtre: insert_head_css_conditionnel"); ?'.'>'. pipeline('insert_head','<!-- insert_head -->')) .
(($t1 = strval(retablir_echappements_modeles(header_silencieux(spip_version()))))!=='' ?
		('
<meta name="generator" content="SPIP ' . $t1 . '">') :
		'') .
'
' .
retablir_echappements_modeles(filtre_styles_inline_page_login_pass_dist($Pile,'')) .
'
</head>
<body class="page_login' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'body_class', null),true)))))!=='' ?
		(' ' . $t1) :
		'') .
'">
	<div class="contenu_login">
		<h1>' .
retablir_echappements_modeles(interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</h1>
		' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
			Est-ce qu\'on se connecte a l\'espace prive ou pas ?
		') :
		'') .
(($t1 = strval(retablir_echappements_modeles((((((table_valeur($Pile[0]??[], (string)'url', null)) ?'' :' ')) OR ((filtre_match_dist(table_valeur($Pile[0]??[], (string)'url', null),(	'^/?(.*/)?' .
		((defined('_DIR_RESTREINT_ABS')?constant('_DIR_RESTREINT_ABS'):''))))))) ?' ' :''))))!=='' ?
		('
		' . $t1 . (	'
		<h3 class="spip">' .
	_T('public|spip|ecrire:login_acces_prive') .
	'</h3>
		' .
	retablir_echappements_modeles(executer_balise_dynamique('MENU_LANG_ECRIRE',
	array(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])),
	array('prive/login.html','html_05278e20ef6ddda88f93d80931ed55b8','',24,$GLOBALS['spip_lang']))) .
	'
		')) :
		'') .
'

		' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_LOGIN',
	array((interdire_scripts(((($a = entites_html(table_valeur($Pile[0]??[], (string)'url', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (generer_url_ecrire('accueil')))))),
	array('prive/login.html','html_05278e20ef6ddda88f93d80931ed55b8','',9,$GLOBALS['spip_lang']))) .
'
		<p class="retour">
			' .
(($t1 = strval(retablir_echappements_modeles(tester_config(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')),'1comite'))))!=='' ?
		((	'<a href="' .
	retablir_echappements_modeles(interdire_scripts(generer_url_public('identifiants', 'focus=nom_inscription'))) .
	'&amp;mode=') . $t1 . (	'">' .
	_T('public|spip|ecrire:login_sinscrire') .
	'</a> | ')) :
		'') .
'
			<a href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'/">' .
_T('public|spip|ecrire:login_retoursitepublic') .
'</a>
		</p>
		' .
(($t1 = strval(retablir_echappements_modeles(filtre_balise_svg_dist(find_in_path((string)'spip.svg')))))!=='' ?
		((	'<p class="generator">
			<a href="https://www.spip.net/" title="' .
	_T('public|spip|ecrire:site_realise_avec_spip') .
	'">') . $t1 . '</a>
		</p>') :
		'') .
'

	</div>
</body>
</html>
');

	return analyse_resultat_skel('html_05278e20ef6ddda88f93d80931ed55b8', $Cache, $page, 'prive/login.html');
}
