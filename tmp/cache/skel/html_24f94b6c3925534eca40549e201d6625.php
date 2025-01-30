<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/style_prive_plugin_stats.html
 * Date :      Tue, 03 Dec 2024 10:08:54 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/style_prive_plugin_stats.html
// Temps de compilation total: 9.968 ms
//

function html_24f94b6c3925534eca40549e201d6625($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_claire', null), 'edf3fe'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_foncee', null), '3874b0'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
'ol.classement {list-style:decimal;margin:0;padding:0;padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':50px;margin-bottom:1.5em;}

@media screen and (min-width: 1024px) {
	.statistiques-bloc { display: grid; grid-template-columns: 1fr 14rem; column-gap: 1rem; }
	.statistiques-bloc-visites {  }
	.statistiques-bloc-visites .spip_d3_graph { margin-bottom: 0; }
	.statistiques-bloc-resume { display: block; padding: .5em 0 .25em; }
}

.stats_referers .liste-items.referers .item.referer {padding-left:150px;}
.stats_referers .liste-items.referers .item.referer.depliant { background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'deplierhaut.svg')) .
'"); background-position: 0 0.6925em; background-repeat: no-repeat;}
.stats_referers .liste-items.referers .item.referer.depliant.open { background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'deplierbas.svg')) .
'"); }
.stats_referers .liste-items.referers .item.referer span.visites {float:left;text-align:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
';width:180px;margin-left:-150px;margin-inline-end:.5em;}
.stats_referers .liste-items.referers .item.referer .miniature {float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
';}
.stats_referers .liste-items.referers .item.referer .miniature img {max-width:60px;height: auto;}
.stats_referers .liste-items.referers .item.referer ul {margin-left:0;padding-left:0;}
.stats_referers .liste-items.referers .item.referer ul li {margin-left:0px;padding-left:0;}
.stats_referers .action.plus {text-align:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
';font-size:1.5em;font-weight:bold;}

.stats_repartition .couleur_cumul { background: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'foncee', null)) .
'; }
.stats_repartition .couleur_nombre { background: ' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'foncee', null)))))!=='' ?
		('#' . $t1) :
		'') .
'; }
.stats_repartition table h3,.stats_repartition table table {margin-bottom: 0;padding-bottom: 0;padding-top: 0;}
.stats_repartition table h3 {font-size: inherit;margin-bottom: 3px;margin-top:3px;}
.stats_repartition table {margin: 0;}
.stats_repartition table + p,.stats_repartition .bloc_depliable + p {margin-top: 1em;}
.stats_repartition table td {padding: 2px 5px;vertical-align: middle;}
.stats_repartition table table td {padding: 0;}
.stats_lang .couleur_langue { background: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'foncee', null)) .
'; }
.stats_lang table p {padding-left:10px;margin:2px 0;}

.stats-articles .size1of2 {padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':1%;}
.stats-articles .lastUnit {padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':1%;border-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':1px solid;}
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '	</style>') :
		'') .
'
');

	return analyse_resultat_skel('html_24f94b6c3925534eca40549e201d6625', $Cache, $page, '../plugins-dist/statistiques/prive/style_prive_plugin_stats.html');
}
