<?php

/*
 * Squelette : ../prive/squelettes/inclure/pied.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/pied.html
// Temps de compilation total: 1.152 ms
//

function html_b9f080ef922070bb8b46af13c3ca56f7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	Le pied de page de l\'espace privé peut varier en fonction de la session,
	voire dans une même session (notamment en cas de changement d\'adresse IP,
	qui peut être le signe d\'un vol du cookie de session).
	Il ne faut donc pas le mettre en cache.
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
'<div id=\'copyright\'>
	' .
retablir_echappements_modeles(info_maj_spip('')) .
'
	' .
retablir_echappements_modeles(info_copyright('')) .
'
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'home_server'] = (interdire_scripts(concat(table_valeur(eval('return '.'$GLOBALS'.';'),'home_server'),'/',(interdire_scripts(table_valeur(eval('return '.'$GLOBALS'.';'),'spip_lang')))))))) .
'
	<p>' .
_T('public|spip|ecrire:info_copyright_doc', array('spipnet' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'home_server', null)),
'spipnet_affiche' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'home_server', null)))) .
'</p>
</div>
' .
(($t1 = strval(retablir_echappements_modeles(filtre_balise_svg_dist(find_in_path((string)'spip.svg')))))!=='' ?
		((	'<a
	href="' .
	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'home_server', null)) .
	'"
	class="lien-logo"
	rel="external"
	aria-label="' .
	attribut_html(textebrut(_T('public|spip|ecrire:info_copyright_doc', array('spipnet_affiche' => retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'home_server', null)))))) .
	'"
>
	') . $t1 . '
</a>') :
		'') .
'
' .
retablir_echappements_modeles(html_tests_js('')) .
'
');

	return analyse_resultat_skel('html_b9f080ef922070bb8b46af13c3ca56f7', $Cache, $page, '../prive/squelettes/inclure/pied.html');
}
