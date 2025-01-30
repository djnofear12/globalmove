<?php

/*
 * Squelette : ../plugins-dist/forum/prive/style_prive_plugin_forum.html
 * Date :      Tue, 03 Dec 2024 10:08:52 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:55 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/forum/prive/style_prive_plugin_forum.html
// Temps de compilation total: 1.618 ms
//

function html_a2dbd169bdccbfda4f9f65f196f43866($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
'.onglets_simple ul.statut_forum li.publie strong,.onglets_simple ul.statut_forum li.publie a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-publie-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_forum li.off strong,.onglets_simple ul.statut_forum li.off a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-off-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_forum li.spam strong,.onglets_simple ul.statut_forum li.spam a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-spam-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_forum li.prop strong,.onglets_simple ul.statut_forum li.prop a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-prop-24.png')) .
'");padding-inline-start:27px;}

.onglets_simple ul.statut_forum li.prive strong,.onglets_simple ul.statut_forum li.prive a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-prive-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_forum li.privadm strong,.onglets_simple ul.statut_forum li.privadm a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-privadm-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_forum li.privrac strong,.onglets_simple ul.statut_forum li.privrac a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-privrac-24.png')) .
'");padding-inline-start:27px;}
.onglets_simple ul.statut_forum li.privoff strong,.onglets_simple ul.statut_forum li.privoff a {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'forum-statut-privoff-24.png')) .
'");padding-inline-start:27px;}

.controler_forum .annule_filtre {float:inline-end;}
.controler_forum #actiongroup button {width:100%;margin:5px 0;}

/* Habillage des forums en liste pour moderation
---------------------------------------------- */
ul.forums li.item { margin: 15px 0; padding: 0 0 .8em 0; background: #eee url("' .
retablir_echappements_modeles(chemin_image((string)'forum-bg-item-64.png')) .
'"); border: 1px solid #ccc; border-top: 8px solid #ccc; position:relative;}
ul.forums li.item:hover { background-color: #e9e9e9; }

ul.forums li.statut_publie { background-image: none; border-color: #B2BF6B; }
ul.forums li.statut_off,
ul.forums li.statut_privoff,
ul.forums li.statut_off:hover,
ul.forums li.statut_privoff:hover { background-color: #edd3d3; border-color: #FF5F5F; }
ul.forums li.statut_spam,
ul.forums li.statut_spam:hover  { background-color: #ddd; border-color: #666; }
ul.forums li.statut_prop,
ul.forums li.statut_prop:hover { background-color: ' .
retablir_echappements_modeles('#FFFBEF') .
'; border-color: #EFCA68; }

ul.forums li .cartouche { min-height: 30px; padding: 5px; padding-inline-start: 30px; border-bottom: 1px solid #eee; }
ul.forums li .cartouche .numero {position: absolute;inset-inline-end: 5px;font-size: 1.5em;color:#bbb;font-weight: bold;font-style: italic;}
ul.forums li.statut_off .cartouche,
ul.forums li.statut_privoff .cartouche { border-color: #edd3d3; }
ul.forums li.statut_spam .cartouche { border-color: #ddd; }
ul.forums li.statut_prop .cartouche { border-color: ' .
retablir_echappements_modeles('#FFFBEF') .
'; }
ul.forums li .cartouche h3 {font-size:1.1em;margin-bottom:0.25em;}
ul.forums li .cartouche .date,ul.forums li .cartouche .par {display:inline;}
ul.forums li .cartouche .info_statut {display:block;float:inline-start;margin-inline-start:-30px;position:relative;display:inline;}
ul.forums li .cartouche .reponse_a {font-weight:bold;}
ul.forums li .cartouche .reponse_a a {font-weight:normal;}
ul.forums li .cartouche .lien_admin {display:block;}
ul.forums li .cartouche .statut{ float:right; width:20%; font-style:italic; text-align:right; }

ul.forums li.item .texte,ul.forums li.item .site,ul.forums li.item .urls { margin: 0; padding: 0 30px;max-height:15em;overflow-y:auto;}
ul.forums li.item .urls {border-top:1px dotted #eee;color:#666;overflow-wrap:break-word;}
ul.forums li.item .urls h4 {margin:0;cursor:hand;cursor:pointer;}
ul.forums li.item .texte p { margin: 0; padding: .8em 0; }

ul.forums >li.item .actions.moderer {padding-top:5px;padding-bottom:5px;padding-inline-end:2em;position:relative;}
ul.forums >li.item .actions.moderer::after {	content:\'\';	display: block;	position: absolute;	width: 1.5em;	height: 1.5em;	background:url("' .
retablir_echappements_modeles(chemin_image((string)'config-xx.svg')) .
'") no-repeat center;	background-size:contain;	inset-inline-end: 0.15em;	bottom:5px;	opacity: 0.15;}
ul.forums >li.item .actions.moderer > div {visibility:hidden;}
ul.forums >li.item:hover .actions.moderer > div,ul.forums >li.item.hover .actions.moderer > div{visibility:visible;}

ul.forums li .actions .bruler input.submit {color:#af976d;}
ul.forums li .actions .supprimer input.submit {color:#cf4d4d;}
ul.forums li .checkbox {position:absolute;top:50%;inset-inline-start:1px;}

/* controle des forums : afficher les liens */
.controle a {
	position: relative !important;
	left:0 !important;
	right:0 !important;
	top:0 !important;
	bottom: 0 !important;
}
.controle a:after {	display: inline; content: " [\\27a0" attr(href) "]";}

/* Habillage des forums en thread pour participation
---------------------------------------------- */
.repondre { clear: both; margin-top: 2.50em; margin-right: 1em; text-align: right; font-weight: bold; }

/* Habillage des forums */
ul.forum { display: block; clear: both; margin: 0; padding: 0; }
ul.forum, ul.forum>li>ul { list-style: none; }
.forum-fil { margin-top: 1.50em; }
.forum-fil ul { display: block; margin: 0; padding: 0; margin-left: 1em; }
.forum-chapo .forum-titre, .forum-chapo .forum-titre a { display: block; margin: 0; padding: 0; font-weight: bold; color: #333; overflow-wrap: break-word; }
.forum-texte { margin: 0; padding: 0.50em 1em; color: #333; overflow-wrap:break-word;}
.forum-texte .hyperlien {}
.forum-texte .repondre { margin: 0; padding: 0.10em 0; text-align: right; }

/* Boite d\'un forum : eclaircissement progressif des bords */
ul .forum-message { background:#fff; border: 1px solid var(--spip-color-theme); margin: 0; padding: 0; margin-bottom: 1em; }
ul ul .forum-message { border: 1px solid var(--spip-color-theme-light); }
ul ul ul .forum-message { border: 1px solid var(--spip-color-theme-lighter); }
ul ul ul ul .forum-message { border: 1px solid var(--spip-color-theme-lightest); }
ul ul ul ul ul .forum-message { border: 1px solid var(--spip-color-theme-98); }
ul ul ul ul ul ul .forum-message { border: 1px dotted var(--spip-color-theme-100); }

/* Boite de titre d\'un forum : mise en couleur selon la profondeur du forum */
ul .forum-chapo { border: 0; border-bottom: 1px dotted #B8B8B8; margin: 0; padding: 3px 6px 2px 6px; background: var(--spip-couleur-theme-light); }
ul ul .forum-chapo { background: var(--spip-color-theme-lighter); }
ul ul ul .forum-chapo { background: var(--spip-color-theme-lightest); }
ul ul ul ul .forum-chapo { background: var(--spip-color-theme-98); border-bottom: 1px dotted #E0E0E0; }
ul ul ul ul ul .forum-chapo { background: var(--spip-color-theme-100); }


/* ?? */
/*
a.icone36.suivi-forum-24 { width: 100px; }
.cadre-forum { background-color: #fff; border: 1px solid #aaa; margin-bottom: 0; }
.cadre-forum div.cadre-titre { background-color: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
'; border-bottom: 1px solid #aaa; color: #000; }
.cadre-thread-forum { background-color: #eee; border: 1px solid #ccc; border-top: 0; margin-bottom: 0; }
.cadre-thread-forum div.cadre-titre { background-color: #ccc; color: #000; }
*/
' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '	</style>') :
		'') .
'
');

	return analyse_resultat_skel('html_a2dbd169bdccbfda4f9f65f196f43866', $Cache, $page, '../plugins-dist/forum/prive/style_prive_plugin_forum.html');
}
