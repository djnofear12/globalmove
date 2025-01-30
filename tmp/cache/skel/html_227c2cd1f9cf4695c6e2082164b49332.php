<?php

/*
 * Squelette : ../prive/squelettes/inclure/head.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:36 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/head.html
// Temps de compilation total: 5.548 ms
//

function html_227c2cd1f9cf4695c6e2082164b49332($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
Appel au script php en attendant de reecrire le head ici
') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'titre', null), ''),true)))))!=='' ?
		('<title>' . $t1 . '</title>
') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((include_spip('inc/config')?lire_config('charset',null,false):'')))))!=='' ?
		('<meta charset="' . $t1 . '">
') :
		'') .
'<script>
var url_menu_rubrique="' .
retablir_echappements_modeles(generer_url_action('menu_rubriques',(($t2 = strval((interdire_scripts((include_spip('inc/config')?lire_config('date_calcul_rubriques',null,false):'')))))!=='' ?
			('date=' . $t2) :
			''),'1')) .
'";
(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((table_valeur(eval('return '.'$_COOKIE'.';'),'spip_accepte_ajax') >= '1')) ?'' :' ')))))!=='' ?
		($t1 . (	'
function test_accepte_ajax(){jQuery.ajax({"url":"' .
	retablir_echappements_modeles(replace(generer_url_ecrire('test_ajax','js=1'),'&amp;','\\x26')) .
	'"});}
')) :
		'') .
(($t1 = strval(retablir_echappements_modeles((((defined('_OUTILS_DEVELOPPEURS')?constant('_OUTILS_DEVELOPPEURS'):'')) ?' ' :''))))!=='' ?
		($t1 . 'var _OUTILS_DEVELOPPEURS=true;
') :
		'') .
'var ajax_image_searching = \'<img src="' .
retablir_echappements_modeles(chemin_image((string)'loader.svg')) .
'" class="loader" alt="">\';
var stat = ' .
retablir_echappements_modeles(interdire_scripts((((include_spip('inc/config')?lire_config('activer_statistiques',null,false):'') == 'non') ? '0':'1'))) .
';
var confirm_changer_statut = \'' .
unicode_to_javascript(addslashes(html2unicode(_T('public|spip|ecrire:confirm_changer_statut')))) .
'\';
var error_on_ajaxform=\'' .
unicode_to_javascript(addslashes(html2unicode(_T('public|spip|ecrire:erreur_technique_ajaxform')))) .
'\';

// On pose un objet SPIP extensible, non dépendant de jQuery
var spipConfig = spipConfig || {};
// On le remplit avec déjà les anciennes variables
spipConfig.core = {
	test_espace_prive: true,
	url_menu_rubrique: url_menu_rubrique,
	outils_developpeurs: ' .
retablir_echappements_modeles(((defined('_OUTILS_DEVELOPPEURS')?constant('_OUTILS_DEVELOPPEURS'):'') ? 'true':'false')) .
',
	ajax_image_searching: ajax_image_searching,
	stat: stat,
	confirm_changer_statut: confirm_changer_statut,
	error_on_ajaxform: error_on_ajaxform
};
</script>
<meta name="viewport" content="width=device-width">
' .
(($t1 = strval(retablir_echappements_modeles(url_absolue(timestamp(find_in_theme('reset.css'))))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" id="csspriveereset">') :
		'') .
'
' .
retablir_echappements_modeles(pipeline( 'header_prive_css' , '' )) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		('<!--
' . $t1 . ' CSS de secours en cas de non fonct de la suivante
-->') :
		'') .
(($t1 = strval(retablir_echappements_modeles(url_absolue(timestamp(find_in_theme('style_prive_defaut.css'))))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '" id="csspriveedef">') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		('<!--
' . $t1 . ' spip-admin pour le debug
-->') :
		'') .
(($t1 = strval(retablir_echappements_modeles(url_absolue(timestamp(find_in_path((string)'spip_admin.css'))))))!=='' ?
		('<link rel="stylesheet" type="text/css" href="' . $t1 . '">') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		('<!--
' . $t1 . ' CSS espace prive : la vraie
-->') :
		'') .
'<link rel="stylesheet" type="text/css" href="' .
retablir_echappements_modeles(interdire_scripts(generer_url_public('style_prive.css', (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'paramcss', null),true)))))) .
'">
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		('<!--
' . $t1 . ' CSS optionelle minipres
-->') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(sinon(table_valeur($Pile[0]??[], (string)'minipres', null), ''),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
' .
	(($t2 = strval(retablir_echappements_modeles(url_absolue(timestamp(find_in_path((string)'minipres.css'))))))!=='' ?
			('<link rel="stylesheet" type="text/css" href="' . $t2 . '">') :
			'') .
	'
')) :
		'') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		('<!--
' . $t1 . ' Favicon
-->') :
		'') .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/favicon-head') . ', array(\'couleur\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'paramcss', null),true),'couleur_foncee')))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/inclure/head.html\',\'html_227c2cd1f9cf4695c6e2082164b49332\',\'\',29,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>

<link rel="alternate" type="application/rss+xml" title="' .
retablir_echappements_modeles(interdire_scripts(attribut_html(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))) .
'" href="' .
retablir_echappements_modeles(interdire_scripts(generer_url_public('backend', ''))) .
'">
<link rel="help" type="text/html" title="' .
attribut_html(_T('public|spip|ecrire:icone_aide_ligne')) .
'" href="' .
retablir_echappements_modeles(interdire_scripts(generer_url_public('aide', (	'var_lang=' .
	(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang'])))))) .
'">
' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((((include_spip('inc/config')?lire_config('activer_breves',null,false):'') == 'non')) ?'' :' ')))))!=='' ?
		($t1 . (	'
<link rel="alternate" type="application/rss+xml" title="' .
	attribut_html(_T('public|spip|ecrire:info_breves_03')) .
	'" href="' .
	retablir_echappements_modeles(interdire_scripts(generer_url_public('backend-breves', ''))) .
	'">
')) :
		'') .
'

' .
(($t1 = strval(retablir_echappements_modeles(timestamp(find_in_path((string)'prive/javascript/layer_old.js')))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(find_in_path((string)'prive/javascript/layer.js')))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(find_in_path((string)'prive/javascript/presentation.js')))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(find_in_path((string)'prive/javascript/gadgets.js')))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(retablir_echappements_modeles(timestamp(find_in_path((string)'prive/javascript/prefixfree.js')))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
');

	return analyse_resultat_skel('html_227c2cd1f9cf4695c6e2082164b49332', $Cache, $page, '../prive/squelettes/inclure/head.html');
}
