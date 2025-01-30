<?php

/*
 * Squelette : ../plugins-dist/urls_etendues/prive/style_prive_plugin_urls.html
 * Date :      Tue, 03 Dec 2024 10:08:54 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/urls_etendues/prive/style_prive_plugin_urls.html
// Temps de compilation total: 1.256 ms
//

function html_c333f272010561a84eb98894f197d2d7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).
	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'.fiche_objet .editer_urls .btn_link {
	color:#999;
	display: block;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': 100px;
	padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 20px;
	background: url("' .
retablir_echappements_modeles(chemin_image((string)'url-xx.svg')) .
'") no-repeat ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true)))))!=='' ?
		($t1 . ' ') :
		'') .
'0.4em;
	background-size:16px;
	text-align: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';
	user-select: text;
}
.fiche_objet .editer_urls .btn_link .url {color: #999; text-decoration: none; white-space: break-spaces; }
.fiche_objet .editer_urls .btn_link .edit {visibility: hidden;float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':1em;margin-top:-0.2em}

.fiche_objet .editer_urls .edition {display:none;}
.fiche_objet .editer_urls.open .edition {display:block;}
.fiche_objet .editer_urls .btn_link:hover,
.fiche_objet .editer_urls.open .btn_link {color: inherit;}
.fiche_objet .editer_urls .btn_link:hover .edit,
.fiche_objet .editer_urls.open .btn_link .edit {visibility: visible;}
.fiche_objet .editer_urls .liste-objets .objet {display: none;}
.fiche_objet .editer_urls .liste-objets {margin-bottom: 0; overflow:auto; width:100%; }
.fiche_objet .editer_urls .formulaire_spip {margin-top:0;border:0;border-top: 1px solid ' .
retablir_echappements_modeles('#EEE') .
';}
');

	return analyse_resultat_skel('html_c333f272010561a84eb98894f197d2d7', $Cache, $page, '../plugins-dist/urls_etendues/prive/style_prive_plugin_urls.html');
}
