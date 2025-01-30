<?php

/*
 * Squelette : ../plugins-dist/sites/prive/style_prive_plugin_syndic.html
 * Date :      Tue, 03 Dec 2024 10:08:54 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/style_prive_plugin_syndic.html
// Temps de compilation total: 0.305 ms
//

function html_3e659de562e6e324dd0da67034c90096($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
'.liste-objets.syndic_articles tr td { vertical-align: top; }
.liste-objets.syndic_articles .titre a { display: inline; }
.liste-objets.syndic_articles .action button {vertical-align: top;}

.liste-objets.syndic_articles tr > .action {width: 50px;}
.liste-objets.syndic_articles td .tags,
.liste-objets.syndic_articles td .source {display:block;}
.liste-objets.syndic_articles td .tags a {color:#666;}

.onglets_simple ul.statut_syndic_articles li.publie strong,.onglets_simple ul.statut_syndic_articles li.publie a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'syndic-statut-publie-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_syndic_articles li.off strong,.onglets_simple ul.statut_syndic_articles li.off a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'syndic-statut-off-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_syndic_articles li.refuse strong,.onglets_simple ul.statut_syndic_articles li.refuse a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'syndic-statut-poubelle-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_syndic_articles li.dispo strong,.onglets_simple ul.statut_syndic_articles li.dispo a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'syndic-statut-dispo-24.png')) .
'");padding-inline-start:27px;}


.controler_syndication .filtres.second {font-size:0.9em;border:0;padding-inline-start:0;}
.controler_syndication .filtres.second ul li strong,.controler_syndication .filtres.second ul li a {margin-inline-start:0px;margin-inline-end:5px;margin-bottom:5px;}
.controler_syndication .filtres.second ul li strong {border:1px solid var(--spip-color-theme);}
.controler_syndication .filtres.second ul li strong,.controler_syndication .filtres.second ul li a:hover {background-color:#fff;}

.source {font-size:12px;font-weight:bold;background:#fff;padding:5px;border:1px solid var(--spip-color-theme);}
.source .actions {font-weight:normal;}
.annule_filtre {float:inline-end;}


/**
 * formulaire_editer_site
 */

.formulaire_editer_site.withlogo .editer_nom_site,.formulaire_editer_site.withlogo .editer_url_site {padding-inline-end:200px;}
.formulaire_editer_site .previsu_logo_site{height:1px;text-align: right;}

/* Inscription du flux RSS */
.formulaire_editer_site .editer_referencement_automatise fieldset,.formulaire_editer_site .editer_referencement_automatise .boutons{background-color:#E9E9E9;border:0;}
');

	return analyse_resultat_skel('html_3e659de562e6e324dd0da67034c90096', $Cache, $page, '../plugins-dist/sites/prive/style_prive_plugin_syndic.html');
}
