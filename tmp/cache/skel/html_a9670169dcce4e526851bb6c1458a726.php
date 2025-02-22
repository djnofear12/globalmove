<?php

/*
 * Squelette : ../prive/themes/spip/content.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/content.css.html
// Temps de compilation total: 1.047 ms
//

function html_a9670169dcce4e526851bb6c1458a726($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles de l\'espace prive

	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'/*  ------------------------------------------
/*  Habillage des elements du contenu
/*  ------------------------------------------ */
html {background-color:#eee;}


/**
 * ============
 * Pied de page
 * ============
 */
#pied {
	font-size: 0.9em;
	/* border-top:1px solid #ddd; */
	background: hsl(0, 0%, 93%);
	margin-top: var(--spip-margin-bottom);
	padding-top: calc(var(--spip-margin-bottom) * 1.5);
	padding-bottom: calc(var(--spip-margin-bottom) * 1.5);
	overflow: hidden;
}
#pied .largeur {
	display: flex;
	flex-flow: column;
}
/* Texte copyright, liens, infos de version, etc. */
#copyright *:last-child {
	margin-bottom: 0;
}
/* Logo Spip */
#pied .lien-logo {
	display: inline-flex;
	justify-content: center;
	align-items: center;
	color: var(--spip-color-theme);
	margin-top: 2em;
	transition: color 0.2s;
}
#pied .lien-logo:hover,
#pied .lien-logo:focus {
	color: var(--spip-color-theme-dark);
}
#pied .lien-logo:after {
	display: none; /* flèche unicode liens sortants */
}
#pied svg.logo_spip {
	/* height: 100%; */
	height: calc(var(--spip-line-height) * 3); /* ~3 lignes */
	width: auto;
}
/* Responsive */
@media (min-width: 580px) {
	#pied .largeur {
		flex-flow: row nowrap;
		justify-content: flex-end;
	}
	#copyright {
		flex: 10;
		text-align: var(--spip-right);
	}
	#pied .lien-logo {
		margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 1.5em;
		margin-top: 0;
	}
}


#chemin { overflow: hidden; margin: 0; padding: 0;	text-align:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';}
@media (min-width: 1200px) {
	#chemin {
		font-size: 0.9333em;
	}
}
#chemin > a  { color: #444; }
#chemin > a:hover { text-decoration: underline;  }

#chemin .bouton_deplacer {display:inline-block;position:relative;padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':20px;}
#chemin .bouton_deplacer .image_loading {position:absolute;top:0;' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':0;}
.edition #chemin .bouton_deplacer,.edition #chemin #chercher_rubrique {display: none;}

#chemin .aide {padding-top: 0px; }

/* Liens hypertexte */
a { text-decoration: none; color: var(--spip-color-theme-dark); }
a:hover { text-decoration: underline; }
a.icone { text-decoration: none; }
a.icone:hover { text-decoration: none; }

a.plus_info {display:block;float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';}

img.puce { width: 7px; height: 7px; border: 0; }
img.lang { width: 12px; height: 12px; border: 0; }


/* * Styles generes par les raccourcis de mise en page */

.chapo { font-weight: bold; color: #333; }

#wysiwyg a, .wysiwyg a { /*color: #604A7F;*/ text-decoration: underline; }
#wysiwyg a:hover, .wysiwyg a:hover { /*color: #f57900;*/ text-decoration: underline; }

/* Signaler les liens JS suspect */
#wysiwyg a[href*="javascript:"],
.wysiwyg a[href*="javascript:"] {
	background: yellow;
	pointer-events: none;
}
#wysiwyg a[href*="javascript:"]:after,
.wysiwyg a[href*="javascript:"]:after {
	display: inline-block;
	content: attr(href);
	margin-left: 0.25em;
	font-family: \'lucida console\',monospace;
	font-size: 0.85em;
	font-weight: normal;
}
#wysiwyg a[href*="javascript:"]:before,
.wysiwyg a[href*="javascript:"]:before {
	display: inline;
	content: "⚠️";
	margin-right: 0.25em;
	text-decoration: none;
}

.boutonlien { font-weight: bold; font-size: 9px; }
a.boutonlien:hover { color: #454545; text-decoration: none; }
a.boutonlien { color: #808080; text-decoration: none; }

a.triangle_block { margin-top: -3px; margin-bottom: -3px; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': -3px; opacity: 0.7; }
a.triangle_block:hover { opacity: 1; }

a.ical { background: url("' .
retablir_echappements_modeles(chemin_image((string)'synchro-24.png')) .
'") no-repeat; background-position: top center; padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 30px; padding-bottom: 20px; }

.enfants ul { list-style: none; }
.enfants ul li.rubrique_12 {background:url("' .
retablir_echappements_modeles(chemin_image((string)'rubrique-xx.svg')) .
'")' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true)))))!=='' ?
		(' ' . $t1) :
		'') .
' center no-repeat; background-size:12px; padding: 2px; padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 18px; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 6px;position:relative;}


/* menu langues */
.lang_ecrire { max-height: 24px; border: 1px solid #fff; color: white; width: 100px; background: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true))) .
'; }

/* pour les puces de changement rapide de statut ; NB: ca buggue car ca s\'affiche en-dessous du cadre */
/*li .puce_statut { float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
'; padding-top: 5px; }
li .puce_article_popup, li.puce_breve_popup,li.puce_site_popup { padding: 0; }*/
.puce_objet { position: relative; }
.puce_objet_fixe { position: relative; }

.puce_objet_popup, .puce_objet_popup * { box-sizing: content-box; }
.puce_objet_popup {
	position: absolute;
	visibility: hidden;
	border: 0px;
	background-color: white;
	padding: 0px;
	z-index: 10;
	top: -3px;
	box-shadow: 0 0 5px rgba(0,0,0,0.2);
	border-radius: var(--spip-list-border-radius);
	' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': -7px;
	padding: 4px;
	line-height: 0;
}
.puce_objet_popup a { display: inline-block;}
.puce_objet_popup img { margin: 3px; border: 0; display: block;}
.puce_objet .puce_objet_popup { visibility: hidden; }
.puce_objet.on .puce_objet_popup { visibility: visible; }

.puce-survol-enabled:hover,
.puce-survol-enabled:focus
{
    background-color: var(--spip-color-gray-lighter);
}

.tabs-nav a { color: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true))) .
'; }

/* generique */
#voir { overflow: hidden; }

#navigation .infos .numero { font-size: 0.769em;font-weight: bold; text-align: center; text-transform:uppercase;border-bottom: 1px solid #eee;padding-bottom: 10px;}
#navigation .infos .numero p { font-size: 2.4em; margin:5px 0;color:#333; font-family: Verdana, Geneva, sans-serif; }
#navigation .infos .noinfo { color:#ddd;}
#contenu .bandeau_actions { margin:5px 0;clear:both; }
#contenu .bandeau_actions a:hover { background: #fff; }
#contenu .logo_titre { float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
'; margin: 5px 0; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 5px; }

#contenu .fiche_objet > .inner > .hd {padding-bottom: 0;}
#contenu .fiche_objet > .inner > .bd {padding-top: 0;}


/**
 * Affiche_milieu
 * --------------
 * Conteneur situé dans .fiche_objet, juste avant le #wysiwyg.
 *
 * Intention : distinguer visuellement tout ce qui précède le #wysiwyg.
 * Il s\'agit principalement du contenu ajouté par le pipeline affiche_milieu.
 * Ce sont en général des éléments de configuration : formulaire editer_liens, etc.
 * On met par défaut ces blocs sur fond gris clair et en mode "mini" :
 * - formulaires
 * - listes
 * - boîtes simples
 * Si ces règles sont trop intrusives, supprimer et faire du cas par cas.
 * Voir aussi les variables de ces composant pour les tailles.
 */
.affiche_milieu:not(:last-child) {
	margin-bottom: calc(var(--spip-spacing-y) * 2); /* Espacer avec le contenu */
}
.fiche_objet .formulaire_editer_liens-auteurs,
.fiche_objet .formulaire_dater,
.affiche_milieu .formulaire_spip,
.affiche_milieu .liste-objets,
.affiche_milieu .box.simple {
	margin-bottom: calc(var(--spip-form-spacing-y) * 2);
	margin-top: calc(var(--spip-form-spacing-y) * 2);
	border-width: 0;
	background-color: var(--spip-color-gray-lightest);
	box-shadow: none !important; /* important = pour inclure hover et cie */
}
.affiche_milieu .formulaire_spip .boutons,
.affiche_milieu .box.simple .box__footer {
	background-color: transparent;
}
/* ajustement listes imbriquées */
.affiche_milieu .formulaire_spip .liste-objets,
.affiche_milieu .box.simple .liste-objets {
	border-width: 1px;
	background-color: transparent;
}
.affiche_milieu .formulaire_spip .liste-objets {
	margin-top: 0;
	margin-bottom: 0;
}
.affiche_milieu .liste-objets thead {
	background-color: transparent;
	border-bottom: 1px solid var(--spip-box-sep-color);
}

#wysiwyg .champ>.label { clear: both;color:#888;}
#wysiwyg div p { margin-top: 0; }
#wysiwyg .champ {display:block; overflow: hidden; margin-bottom: 0.8em;}
#wysiwyg .contenu_ps { background:#dddddd; border:1px solid #666; padding:5px;  margin:1em 0;}
#wysiwyg .contenu_ps.vide {display: none;}
#wysiwyg .contenu_ps .label {display:inline; background:none;color:#666;}
#wysiwyg .contenu_notes { background:#fff; border-top:1px solid #666; padding-top:5px; margin:1em 0; font-size: 0.9em; line-height: 1.3em;}
#wysiwyg .contenu_notes.vide {display: none;}
#wysiwyg .contenu_notes .label {display:inline;font-weight:bold;background:none;color:#000;}
#wysiwyg .contenu_notes .notes { padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 2em;}
#wysiwyg .contenu_notes .spip_note_ref {display:block;float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':-2em;}
#wysiwyg .texte {font-size:1em;}

#wysiwyg { padding:5px;font-size: 1em;clear: both;}

#wysiwyg .contenu_soustitre,
#wysiwyg .contenu_surtitre,
#wysiwyg .contenu_titre {display: none;}
#wysiwyg .vide {display: none;}
#wysiwyg .contenu_descriptif,
#wysiwyg .contenu_nom_site,
#wysiwyg .contenu_bio,
#wysiwyg .contenu_ps { background:#eeeeee; border: 1px solid #ccc; padding: 1em 1em 0em 1em; margin: 1em 0 ;}
#wysiwyg .contenu_nom_site {padding: 1em;}
#wysiwyg .contenu_descriptif .label {color:#000;background:none;display:inline;font-size:1.1em;font-weight:bold;}
#wysiwyg .champ>.label { display: block; font-weight: bold; color:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true))) .
'; font-family: var(--spip-font-family);font-size: 85%;}
#wysiwyg .champ>.label.label-none { display: none !important;}
#wysiwyg .champ>.label.label-inline { display: inline !important;}
#wysiwyg .champ>.label.label-inline-block { display: inline-block !important;}
#wysiwyg .champ>.label.label-block { display: block !important;}
#wysiwyg .contenu_chapo>.label,
#wysiwyg .contenu_texte>.label {display: none;}
#wysiwyg .contenu_lien_titre {margin:1em 0;}
#wysiwyg .contenu_lien_titre>.label{ color:#000;background:none;display:inline; font-size:1.1em;font-weight:bold;font-family:Georgia,Garamond,Times New Roman,serif;}
#wysiwyg .contenu_lien_titre .lien_titre p { display:inline;}

.site #wysiwyg .contenu_nom_site {display: none;}

.auteur #wysiwyg .contenu_nom,.infos_perso #wysiwyg .contenu_nom {display:none;}
#wysiwyg .contenu_email {margin:0.5em 0;}
#wysiwyg .contenu_email > div {display:inline;}
.auteur #wysiwyg .contenu_nom_site,.infos_perso #wysiwyg .contenu_nom_site {padding:0;border:0;background:none;margin:0.5em 0;}
.auteur #wysiwyg .contenu_nom_site > div,.infos_perso #wysiwyg .contenu_nom_site > div {display:inline;}
#wysiwyg .contenu_pgp>.label {display:inline;}
#wysiwyg .contenu_pgp .pgp code {overflow-wrap:break-word;}


/* fond des miniatures de logos et documents */
.miniature_logo, .miniature_document {
	background: url("' .
retablir_echappements_modeles(chemin_image((string)'fond-grille.gif')) .
'") top left;
}

h2.titrem { display: block; padding-top: 6px; padding-bottom: 4px; background-repeat: no-repeat;padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':16px;background-color: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'claire', null),true))) .
';font-size:14px;}

.aide .contenu-aide,.box_mediabox .contenu-aide {padding-top:' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(strmult(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true),'1.0')))))!=='' ?
		($t1 . 'em') :
		'') .
';}
.box_mediabox .contenu-aide {min-width:450px;margin-right: 15px;}
');

	return analyse_resultat_skel('html_a9670169dcce4e526851bb6c1458a726', $Cache, $page, '../prive/themes/spip/content.css.html');
}
