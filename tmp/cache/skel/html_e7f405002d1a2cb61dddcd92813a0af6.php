<?php

/*
 * Squelette : ../plugins-dist/medias/prive/style_prive_plugin_medias.html
 * Date :      Tue, 03 Dec 2024 10:08:52 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/style_prive_plugin_medias.html
// Temps de compilation total: 0.514 ms
//

function html_e7f405002d1a2cb61dddcd92813a0af6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
'.formulaire_editer_document {margin-bottom: 0;}
.formulaire_editer_document .editer_dimensions input {width:7em;}
.formulaire_editer_document .editer_parent {padding-inline-start:10px;}
.formulaire_editer_document .editer_parent label {margin-inline-start:0;display:block;float:left;padding:2px 0;}

.formulaire_editer_document .taille_modifiee {display:block;color: red;}

.formulaire_editer_document .editer_apercu .tourner {float:inline-end;}
.formulaire_editer_document .editer_apercu .tourner input.image {}
.formulaire_editer_document .editer_apercu .tourner button.image {}

.box_mediabox .formulaire_editer_document .invisible-first-save-button {inset-inline-end:0.5em !important;inset-inline-start:auto !important;top:-3em !important;}
.box_mediabox .formulaire_editer_document .boutons {position: sticky;bottom: -1rem;z-index: 100;}

.formulaire_joindre_document {margin-top: 0}
.formulaire_joindre_document .sourceup {}
.formulaire_joindre_document .infos {}
.formulaire_joindre_document .deballer_zip ul {font-size:0.9em;}
.formulaire_joindre_document .deballer_zip ul ul {font-size:1em;}
.formulaire_joindre_document .deballer_zip ol {padding-inline-start:0;margin:0;word-wrap:break-word;}
.lat .formulaire_joindre_document { margin-top: ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(strmult(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true),'1.5')))))!=='' ?
		($t1 . 'em') :
		'') .
'; }
.lat .formulaire_joindre_document .deballer_zip ol {max-width: 185px;}

.formulaire_joindre_document .deballer_zip .editer_options_upload_zip li {padding:0;}
.formulaire_joindre_document .deballer_zip .editer_options_upload_zip .erreur_message {margin-bottom:1em;}
#navigation .formulaire_joindre_document .sourceup, #extra .formulaire_joindre_document .sourceup {font-size:0.85em;}
#navigation .formulaire_joindre_document .deballer_zip .editer_options_upload_zip > label,
#extra .formulaire_joindre_document .deballer_zip .editer_options_upload_zip > label {float:none;}
#navigation .formulaire_joindre_document .deballer_zip .editer_options_upload_zip .choix input,
#extra .formulaire_joindre_document .deballer_zip .editer_options_upload_zip .choix input {vertical-align:top;}

.formulaire_joindre_document .editer_fichier input.file {display:block;}
.formulaire_joindre_document .editer_refdoc_joindre input.text {width:50%;}

.onglets_simple .medias .image > *,
.onglets_simple .medias .audio > *,
.onglets_simple .medias .video > * {
	padding-inline-start: calc((var(--spip-tabs-spacing-x) * 1.5) + 16px);
	background-size: 16px;
	background-position: var(--spip-left) var(--spip-tabs-spacing-x) center;
	background-repeat: no-repeat;
}
.onglets_simple .medias .image > * { background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'media-image-16.png')) .
'"); }
.onglets_simple .medias .audio > * { background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'media-audio-16.png')) .
'"); }
.onglets_simple .medias .video > * { background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'media-video-16.png')) .
'"); }

.choix-type, .choix-type li {display:inline;list-style:none;margin:0;padding:0;}
.choix-type {margin:1em 0;padding:0;}


a.bouton_fermer {display:block;text-align:end;}

/**
 * Galerie
 */

/* Caption */
.liste-objets.galerie[class*="media-"] .caption {
	padding-left: var(--spip-list-heading-iconpadding);
	background-size: var(--spip-list-heading-iconsize);
	background-repeat: no-repeat;
	background-position: var(--spip-left) var(--spip-list-spacing-x) center;
}
.liste-objets.galerie.media-image .caption {
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'media-image-32.png')) .
'");
}
.liste-objets.galerie.media-audio .caption {
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'media-audio-32.png')) .
'");
}
.liste-objets.galerie.media-video .caption {
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'media-video-32.png')) .
'");
}

/* Colonne logo */
.liste-objets.galerie th.logo,
.liste-objets.galerie td.logo {
	width: 270px; /* laisser un peu respirer (largeur max image = 250px) */
	overflow: hidden;
	text-align: center;
}

/* Colonne infos : media, extension, distant, orphelin */
.liste-objets.galerie td.infos {
	min-width: 24px;
}
.liste-objets.galerie .type-media {
	margin-bottom: 0.2em;
}
.liste-objets.galerie .extension {
	text-transform: uppercase;
}

/* Colonne exif : infos techniques */
.liste-objets.galerie td.exif {
	vertical-align: top;
}
.liste-objets.galerie .fichier,
.liste-objets.galerie .taille {
	margin-bottom: 0.25em;
}
.liste-objets.galerie .fichier {
	display: block;
	max-width: 15em;
	overflow: hidden;
	text-overflow: ellipsis;
}
.liste-objets.galerie .detaillees {
	display: grid;
	grid-template-columns: max-content 1fr;
	margin-bottom: 0.5em;
}
.liste-objets.galerie .detaillees__label,
.liste-objets.galerie .detaillees__valeur {
	padding: 0.33em 0;
	border-bottom: 1px solid var(--spip-box-sep-color);
}
.liste-objets.galerie .detaillees__valeur {
	padding-inline-start: 1em;
	margin-bottom: 0;
}
.liste-objets.galerie .detaillees__label:last-of-type,
.liste-objets.galerie .detaillees__valeur:last-of-type {
	border-bottom: 0;
}
/* dans les détails il faut voir le nom de fichier en entier */
.liste-objets.galerie .detaillees .fichier {
	margin: 0;
	word-wrap: break-word;
}
.liste-objets.galerie .detaillees .taille {
	margin: 0;
}
.liste-objets.galerie .detaillees .taille {}
.liste-objets.galerie .detaillees .date {}
.liste-objets.galerie .exif .utilisations {
	margin: 0;
	padding: 0;
	list-style: none;
}
.liste-objets.galerie .exif .utilisations__item {}
.liste-objets.galerie .exif .btn_link {
	padding-inline-start: 0;
	margin: 0;
}

/* Colonne titre + crédits + descriptif */
.liste-objets.galerie td.editorial {
	vertical-align: top;
	word-break:break-word;
}
.liste-objets.galerie td.editorial .titre:not(:last-child),
.liste-objets.galerie td.editorial .descriptif:not(:last-child),
.liste-objets.galerie td.editorial p {
	margin-bottom: 0.5em;
}
.liste-objets.galerie td.editorial p:last-child {
	margin-bottom: 0;
}
.liste-objets.galerie .titre {
	display: block;
}
.liste-objets.galerie .sans-titre {
	font-weight: normal;
	font-style: normal;
	color: var(--spip-color-gray);
}
.liste-objets.galerie .descriptif { }
.liste-objets.galerie .credits { }

/* Modale avec galerie pour choisir */
.popin-choisir_document {}
.popin-choisir_document .onglets_simple.second {
	display: none;
}
.popin-choisir_document .liste-objets.galerie td {
	word-wrap: break-word;
}
.popin-choisir_document .liste-objets.galerie tr > .logo {
	width: 200px;
}
.popin-choisir_document .liste-objets.galerie tr > .editorial {
	max-width: 20em;
}
.liste-objets.galerie .fichier {
	max-width: 12em;
	word-wrap: initial;
}

.spip_documents_legende {border:1px solid var(--spip-color-theme);text-align:center;font-size:0.9em;margin:0 0 1em;}
.spip_documents_legende dt {background:var(--spip-color-theme);color:#fff;padding:5px 3px;font-weight:bold;}
.spip_documents_legende dd {padding:3px 0;margin:0;}
.spip_documents_legende dd.vignette {margin:5px 0;}

.document_utilisations li.item {position:relative;padding-inline-end:24px;}
.document_utilisations li.item .vu {position:absolute;top:0;right:0;}


.pagination .tris {float:left;}

p.actions {clear:both;}

#documents_joints {margin-top:25px;}
#documents_joints .item {text-align:center;margin-bottom:25px;padding:0;border:1px solid var(--spip-color-theme);overflow:visible;}
#documents_joints .item.image {background:#fff;}
#documents_joints .item.document {background:#ddd;}
#documents_joints .item .infos {padding:6px;}
#documents_joints .item .titrem {margin-top:0px;text-align:left;background:var(--spip-color-theme);padding:5px;padding-left:16px;font-weight:bold;margin-bottom:5px;position:relative;font-size:x-small;word-wrap:break-word;}
#documents_joints .item .titrem .fichier {display:block;color:#fff;overflow:hidden;}
#documents_joints .item .titrem .titre {display:block;color:#000;}
#documents_joints .item .titrem .image_loading {position:absolute;bottom:-20px;right:0;}
#documents_joints .item .type {font-size:x-small;}
#documents_joints .item .raccourcis {margin:.5em 0;}
#documents_joints .item .raccourcis .raccourcis_group_label { display: block; font-size: .9em; }
#documents_joints .item div.mode {text-align:right;font-size:x-small;}
#documents_joints .item .actions {margin-top: 1em}
#documents_joints .item .actions a.editbox {
	display: inline-flex;
	margin: 0;
}
#documents_joints .item .tourner {
	float: inline-end;
}
#documents_joints .item .tourner button img {margin:0px;}

#documents_joints .item .actions > *,
#documents_joints .item .actions .deplacer-modifier {visibility:visible;}
#documents_joints .item:hover .actions > *,
#documents_joints .item:hover .tourner,
#documents_joints .item:hover .mode,
#documents_joints .item.hover .actions > *,
#documents_joints .item.hover .tourner,
#documents_joints .item.hover .mode {visibility:visible;}

.portfolios {}
.portfolios h3 {background-color:var(--spip-color-theme-light);padding:2px 10px;color:#000;margin-bottom:0;}
.portfolios .liste_items {margin-top:0;}
.portfolios .liste_items .pagination { clear:both; width:100%; }
.portfolios .liste_items > .pagination:first-child {  margin-top:0; margin-bottom:.6925em; }
.portfolios .item { clear:both; }
.portfolios .item .presentation {
	display:flex;
	flex-direction:row;
	width:100%;
}
.portfolios .item .vignette { width: 150px; min-width:150px; text-align: center; }
.portfolios .item .descriptions {
	display: flex;
	flex-direction: column;
	padding-inline-end: 0.6925em;
	margin-inline-start: 1em;
	width: 100%;
	flex-grow: 1;
}
.portfolios .item .titrem .vu { float:left; margin-inline-end:4px; }
.portfolios .item .titrem {margin:0 0 5px;font-size:1em;}
.portfolios .item .titrem .fichier {font-weight:normal;font-size:0.9em; font-style:italic; display:block; }
.portfolios .item .titrem .titre {display:block;}
.portfolios .item .descriptif {
	color:#444;
	margin-bottom:.6925em;
	flex-grow: 1;
}
.portfolios .item .infos { }
.portfolios .item .infos .permanentes {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 2px 0; margin-top:.5em; color:rgba(0,0,0,.8);
	border-top:1px solid rgba(100, 100, 100, .1);
	border-bottom:1px solid rgba(100, 100, 100, .1);
}
.portfolios .item .infos .lien_details { margin: 0; }
.portfolios .item .infos .detaillees { display:none; }
.portfolios .item .infos .detaillees table.compact:first-child tr { border-top:0; }
.portfolios .item table.compact { background-color:rgba(255,255,255,.6); }
.portfolios .item table.compact th,
.portfolios .item table.compact td { padding:.3em .3em; }
.portfolios .item table.compact tr { border-top:1px solid rgba(100, 100, 100, .1); border-bottom:1px solid rgba(100, 100, 100, .1);  }
.portfolios .item table.compact tr:nth-child(2n) td,
.portfolios .item table.compact tr:nth-child(2n) th { background:none; }
.portfolios .item .infos .vide {  font-style:italic; opacity:.5; }
.portfolios .item div.mode {display:inline-block; clear:inline-end;}
.portfolios .item .actions {
	clear:both;
	overflow:visible;
	margin-top: auto;
	padding-top: 0.6925em;
}
.portfolios .item div.mode,
.portfolios .item .actions,
.portfolios .item div.mode button,
.portfolios .item .actions button {text-align: start; clear: none;}
.portfolios .item div.mode button,
.portfolios .item .actions button {display: inline;}

.portfolios .item .actions .deplacer-modifier {
	display: flex;
	align-items: center;
	visibility: visible;
	float: inline-end;
}
.portfolios .item .actions .editbox  {
	text-decoration: none;
	margin: 0;
}
.portfolios .item:hover .actions > *,
.portfolios .item:hover .mode,
.portfolios .item.hover .actions > *,
.portfolios .item.hover .mode {
	visibility:visible;
	z-index:1000;
	position: relative;
}

.portfolios .item .titre > .sanstitre,
.portfolios .item .titre > .sanstitre + .fichier {opacity:0.4;}

.portfolios .actions-liste { clear:both; margin-top:.6925em; }
.portfolios .actions-liste > * {display:inline; }

.item.vu_oui {background:#f9f9f9;}
.item.deplacer-document-placeholder { background-color: var(--spip-color-theme-lighter); }

.deplacer-document {
	display: inline-flex;
	float: var(--spip-left);
	margin-top: 1px;
	cursor: move;
}
.document-en-mouvement { cursor:move; }


/* Types d\'affichages des listes de douments */
h3 .affichages {
	float:inline-end;
}

.affichages .icone {
	width:16px;
	height:16px;
	margin:0;
	padding:2px;
	display:inline-block;
	background:rgba(255, 255, 255, 0.5) center center no-repeat;
	border-radius:3px;
	cursor:pointer;
}
.affichages .icone + .icone {
	margin-inline-start:5px;
}
.affichages .icone.grand {
	background-image: url(' .
retablir_echappements_modeles(chemin_image((string)'documents-liste-16.png')) .
');
	background-size:16px;
}
.affichages .icone.liste {
	background-image: url(' .
retablir_echappements_modeles(chemin_image((string)'documents-liste-courte-16.png')) .
');
	background-size:16px;
}
.affichages .icone.cases {
	background-image: url(' .
retablir_echappements_modeles(chemin_image((string)'documents-cases-16.png')) .
');
	background-size:16px;
}
.affichages .icone.on {
	background-color:rgba(255, 255, 255, 0.9);
}
.affichages .icone.on:hover,
.affichages .icone:hover {
	background-color:rgba(255, 255, 255, 1);
}

/* Liste courte de documents */
.portfolios .documents_liste .item  {
	position:relative;
	padding:7px;
	display: flex;
}
.portfolios .documents_liste .item .vignette {
	width:65px;
	min-width: 65px;
}
.portfolios .documents_liste .item .vignette img {
	max-height: 36px;
	max-width:65px;
	height:auto;
	width:auto;
}
.portfolios .documents_liste .item .presentation {
	align-items: center;
	flex-grow: 1;
	overflow:hidden;
}
.portfolios .documents_liste .item .descriptions {
	flex-direction: row;
	align-items: center;
	width: calc(100% - 90px);
	padding-inline-end: 0;
}
.portfolios .item .descriptions {  overflow: hidden; }
.portfolios .documents_liste .item .infos,
.portfolios .documents_liste .item .descriptif,
.portfolios .documents_liste .item .mode,
.portfolios .documents_liste .item .actions > * {
	display:none;
}
.portfolios .documents_liste .item .titrem {
	margin-bottom:0;
	overflow: hidden;
}
.portfolios .documents_liste .item .titrem .fichier,
.portfolios .documents_liste .item .titrem .titre {
	max-height:2.4em;
	line-height:1.2em;
	overflow:hidden;
	white-space: nowrap;
	display:block;
	text-overflow:ellipsis; /* necessite des overflow:hidden; sur les parents */
}
.portfolios .documents_liste .item .actions {
	margin-inline-start: auto;
	margin-top: 0;
	align-items:center;
	text-align:end;
	padding-inline-end:0;
	padding-top: 0;
	min-width:80px;
}
.portfolios .documents_liste .item .actions .deplacer-modifier {
	display: inline-flex;
	float:none;
	margin-inline-end:0;
}
.documents_liste .deplacer-document-placeholder { height:40px; }


/* Grille en cases des documents. */
.portfolios .documents_cases .sortable {
	display:flex;
	flex-wrap: wrap;
}
.portfolios .documents_cases .item {
	padding: 2px;
	margin: 2px;
	border:1px solid #eee;
	border-radius:5px;
	width:113px;
	height:130px;
	display:flex;
	flex-direction:column;
	align-items:center;
}
.portfolios .documents_cases .item .presentation {
	flex-grow:1;
	justify-content: center;
	flex-direction: column;
}
.portfolios .documents_cases .item .descriptions {
	margin: 0;
	padding: 0;
	justify-content: flex-end;
}
.portfolios .documents_cases .item .descriptions > *:not(.actions),
.portfolios .documents_cases .item .mode,
.portfolios .documents_cases .item .actions > * {
	display:none;
}
.portfolios .documents_cases .item .actions .deplacer-modifier {
	display: flex;
	width: 100%;
}
.documents_cases .deplacer-document { flex-shrink: 0 }
.documents_cases .deplacer-document-placeholder { height:130px; width:113px; padding: 2px; margin: 2px;}

.portfolios .documents_cases .item .vignette {
	width:auto;
	height:auto;
	min-width:auto;
}
.portfolios .documents_cases .item .vignette img {
	max-height: 95px;
	max-width:110px;
	width: auto;
	height: auto;
}

.portfolios  .item .vignette img.spip_document_icone {
	max-height:90px;
}


.portfolios .documents_cases .item .actions {
	display:block;
	width:100%;
	margin-bottom:0;
	box-sizing:border-box;
	padding: 2px 5px 1px 5px;
}
');

	return analyse_resultat_skel('html_e7f405002d1a2cb61dddcd92813a0af6', $Cache, $page, '../plugins-dist/medias/prive/style_prive_plugin_medias.html');
}
