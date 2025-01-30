<?php

/*
 * Squelette : ../prive/themes/spip/bando.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/bando.css.html
// Temps de compilation total: 2.309 ms
//

function html_82edf6321399ff4d6ff8c29b1b477ba2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles des bandeaux de navigation l\'espace privé.

	Organisation du fichier :

	0. Variables
	1. Règles mutualisées : menus déroulants et cie
	2. Bandeau liens d\'évitement
	3. Bandeau identité
	4. Bandeau de navigation principale
	5. Autres

	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'/**
 * ============
 * 0. Variables
 * ============
 */


/* TODO : baser les gouttières sur la gouttière générale quand elle sera au point */
:root {
	/* Identité */
	--spip-bando-id-spacing-y: 0.33rem;
	--spip-bando-id-spacing-x: 0.66rem;
	/* Navigation principale */
	--spip-bando-nav-picto-size: 20px; /* grands pictos */
	/* Outils */
	--spip-bando-outils-spacing-x: 0.33rem;
	--spip-bando-outils-spacing-y: 0.25rem;
	--spip-bando-outils-icon-size: 1em;
	/* Menus déroulants */
	--spip-deroulant-spacing-x: 0.33rem;
	--spip-deroulant-spacing-y: 0.5rem;
	--spip-deroulant-icon-size: 16px;
	--spip-deroulant-col-width: 12em;
}
@media (min-width: 768px) {
	:root {
		/* Nav */
		--spip-bando-nav-picto-size: 40px; /* grands pictos : taille originale */
		/* Outils */
		--spip-bando-outils-spacing-x: 0.5rem;
		--spip-bando-outils-spacing-y: 0.33rem;
		--spip-bando-outils-icon-size: 1.3em;
		/* Menus déroulants */
		--spip-deroulant-spacing-x: 0.5rem;
		--spip-deroulant-spacing-y: 0.66rem;
		--spip-deroulant-icon-size: 20px;
		--spip-deroulant-col-width: 18em;
	}
}



/**
 * ==================
 * 1. Bandeaux : tous
 * ==================
 *
 * Règles mutualisées entre tous les bandeaux.
 * Pour les particularités, voir dans chaque bandeau.
 */


.bando-haut .largeur * {
	box-sizing: border-box;
}
.bando-haut {
	position: relative;
	z-index: 1001;
	border-bottom: 1px solid var(--spip-color-theme);
}
.bando-haut a {
	text-decoration: none;
}


/**
 * 1.1. Menus de liens simple.
 * Utilisés dans Bandeaux accès rapides + identité
 *
 * Markup :
 *
 * p.menu-simple
 *  a.menu-simple__item | span.menu-simple__item
 */
.bando-haut .menu-simple {
	display: flex;
	flex-flow: row wrap;
	margin: 0;
}
.bando-haut .menu-simple + .menu-simple {
	border-top: 1px solid hsla(0, 0%, 0%, 0.1);
}
.bando-haut .menu-simple__item {
	position: relative;
	display: inline-flex;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: center;
	padding: var(--spip-bando-id-spacing-y) var(--spip-bando-id-spacing-x);
	text-align: center;
	font-size: 0.9em;
	font-weight: 500;
	border: 1px solid transparent; /* Pour le focus */
	transition: all 0.2s;
}
.bando-haut a:not(:hover):not(:focus) {
	color: inherit;
}
.bando-haut a:hover,
.bando-haut a:focus {
	text-decoration: underline !important;
}
.bando-haut .menu-simple__item:focus {
	border-color: var(--spip-color-theme);
	outline: none;
}
.bando-haut .menu-simple__item + .menu-simple__item {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
':-1px;
}
.bando-haut .menu-simple__item + .menu-simple__item:before {
	content:\'\';
	display: inline-block;
	height: 0.9em;
	line-height: 1em;
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 1px solid var(--spip-color-gray-light);
	position: relative;
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(-1 * var(--spip-bando-id-spacing-x));
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
':-1px;
	z-index:-1;
}
.bando-haut .menu-simple img {
	vertical-align: middle;
}
@media (min-width: 580px) {
	.bando-haut .menu-simple + .menu-simple {
		border-top: 0;
	}
	/* Aligner le texte sur le bord de la page */
	.bando-haut .menu-simple:first-child {
		margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-bando-id-spacing-x) * -1);
	}
	.bando-haut .menu-simple_site:last-child {
		margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': calc(var(--spip-bando-id-spacing-x) * -1);
	}
}

/**
 * 1.2. Menus déroulants (Nav principale + plan)
 *
 * Ici les règles mutualisées, pour les particularités propres à chaque menu,
 * voir leurs sections respectives : 3. et 4.
 *
 * En cas d\'ajouts, merci d\'essayer de les faire au bon endroit :)
 *
 * Particularité CSS pénible :
 * Pour qu\'un élément positionné en absolute ne soit pas limité par la largeur
 * de son parent, ce dernier doit être en display: block
 * Le cas contraire, c\'est bloqué sur les largeurs min/max en dur, ce qui est nul.
 *
 * Nb : [data-racine] au lieu de [data-profondeur=0] car c\'est plus court et plus commode.
 *
 * Markup :
 *
 * ul.deroulant[data-racine]
 *  li.deroulant__item[data-racine]
 *    a.deroulant__lien[data-racine]
 *
 *    ul.deroulant__sous-menu[data-profondeur="1"]
 *      li.deroulant__item[data-profondeur="1"]
 *        a.deroulant__lien[data-profondeur="1"]
 *
 *        ul.deroulant__sous-menu[data-profondeur="2"]
 *          li.deroulant__item[data-profondeur="2"]
 *            a.deroulant__lien[data-profondeur="2"]
 *
 *            etc.
 */

/* Reset conteneur et sous-menus */
.bando-haut .deroulant,
.bando-haut .deroulant__sous-menu {
	margin: 0;
	padding: 0;
	list-style: none;
}

/* Conteneur racine <ul> */
.bando-haut .deroulant {
	display: flex;
	flex-flow: row wrap;
	align-items: center;
	line-height: 1.2;
}

/* Items <li> */
.bando-haut .deroulant__item {
	flex: auto 1; /* effectif à la racine uniquement, plus bas le conteneur est en display:block */
	display: block; /* block obligé, cf. notes */
	position: relative;
}

/* Liens <a> */
.bando-haut .deroulant__lien {
	display: flex;
	align-items: center;
	padding: var(--spip-deroulant-spacing-y) var(--spip-deroulant-spacing-x);
	font-weight: 500;
	color: inherit;
	transition: all 0.1s;
	position: relative;
}
.bando-id .deroulant__lien img,  .bando-id .deroulant__lien svg{
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0.5em;
}
.bando-haut .deroulant__lien .libelle {
	flex: 1 1 100%;
}
.bando-haut .deroulant__item.actif > .deroulant__lien,
.bando-haut .deroulant__item.actif_tempo > .deroulant__lien,
.bando-haut .deroulant__item:focus-within > .deroulant__lien {
	text-decoration: underline;
	color: var(--spip-color-black);
	background-color: var(--spip-color-theme-lighter);
}
.bando-haut .deroulant__item:focus-within > .deroulant__lien {
	outline: none;
	box-shadow: inset 0 0 0 1px var(--spip-color-theme);
}
/* Liens des sous-menus : prévoir les icônes à gauche en background pour ceux qui n\'ont pas déjà une image en HTML */
.bando-haut .deroulant__sous-menu .deroulant__lien {
	background-position: var(--spip-left) var(--spip-deroulant-spacing-x) center;
	background-size: var(--spip-deroulant-icon-size);
	background-repeat: no-repeat;
	height: 100%;
	padding-inline-start: calc(var(--spip-deroulant-icon-size) + (var(--spip-deroulant-spacing-x) * 2));
}
.bando-haut .deroulant__sous-menu .deroulant__lien:has(img, svg) {
	padding-inline-start: var(--spip-deroulant-spacing-x);
}
/* Navigateurs sans :has */
@supports not selector(:has(img)) {
	.bando-haut .deroulant_infos_site .deroulant__item:first-child .deroulant__sous-menu .deroulant__lien,
	.bando-haut .deroulant_infos_perso .deroulant__sous-menu .deroulant__lien {
		padding-inline-start: var(--spip-deroulant-spacing-x);
	}
}

/* Sous-menus <ul> */
.bando-haut .deroulant__sous-menu {
	position: absolute !important;
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': -3000em;
	display: block;
	width: max-content;
	opacity: 0;
	background-color: var(--spip-color-white);
	border-radius: var(--spip-border-radius);
	box-shadow: 0 0.5em 0.6em hsla(0, 0%, 0%, 0.075);
	border: 1px solid var(--spip-box-border-color);
	border-top: 0px;
	transition: opacity 0.1s;
}
.plan_site .deroulant__sous-menu {
	border: 1px solid var(--spip-box-border-color);
	margin-top: -1px;
}
/* Ouverture à la prise de focus (css ou javascript) */
.bando-haut .deroulant__item:focus-within > .deroulant__sous-menu,
.bando-haut .deroulant__item.actif > .deroulant__sous-menu,
.bando-haut .deroulant__item.actif_tempo > .deroulant__sous-menu {
	z-index: 100;
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': auto;
	opacity: 1;
}
/* Ajustements pour le menu perso tout à droite */
.deroulant_infos_perso .deroulant__item:focus-within > .deroulant__sous-menu,
.deroulant_infos_perso .deroulant__item.actif > .deroulant__sous-menu,
.deroulant_infos_perso .deroulant__item.actif_tempo > .deroulant__sous-menu {
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0;
}
/* Ajustements arrondis */
.bando-haut .deroulant__sous-menu[data-profondeur="1"] {
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}
.bando-haut .deroulant__sous-menu .deroulant__item:first-child,
.bando-haut .deroulant__sous-menu .deroulant__item:first-child > .deroulant__lien {
	border-top-left-radius: inherit;
	border-top-right-radius: inherit;
}
.bando-haut .deroulant__sous-menu .deroulant__item:last-child,
.bando-haut .deroulant__sous-menu .deroulant__item:last-child > .deroulant__lien {
	border-bottom-left-radius: inherit;
	border-bottom-right-radius: inherit;
}
/* Sous-menus en colonnes
   Nb : column-count serait plus adapté mais pose des problèmes
   pour le placement des sous-menus imbriqués */
.bando-haut .deroulant__sous-menu[class*=cols-] {
	max-width: calc(var(--spip-vw) * 0.9);
	display: grid;
	grid-gap: 0;
}
.bando-haut .deroulant__sous-menu.cols-2 {
	grid-template-columns: repeat(2, 1fr);
}
.bando-haut .deroulant__sous-menu.cols-3 {
	grid-template-columns: repeat(3, 1fr);
}
.bando-haut .deroulant__sous-menu.cols-4 {
	grid-template-columns: repeat(4, 1fr);
}
.bando-haut .deroulant__sous-menu.cols-5 {
	grid-template-columns: repeat(5, 1fr);
}
.bando-haut .deroulant__sous-menu.cols-6 {
	grid-template-columns: repeat(6, 1fr);
}
.bando-haut .deroulant__sous-menu.cols-7 {
	grid-template-columns: repeat(7, 1fr);
}
.bando-haut .deroulant__sous-menu.cols-8 {
	grid-template-columns: repeat(8, 1fr);
}


/**
 * ============================
 * 2. Bandeau liens d\'évitement
 * ============================
 *
 * Visibles uniquement à la prise de focus.
 */


.bando-evitement {
	position: absolute;
	top: 0;
	z-index: 0;
	width: 100%;
	overflow: hidden;
	background: var(--spip-color-black);
	color: var(--spip-color-white);
}
.bando-evitement.actif {
	z-index: 11;
}
.bando-evitement a:hover,
.bando-evitement a:focus {
	color: var(--spip-color-theme);
}


/**
 * ===================
 * 3. Bandeau identité
 * ===================
 *
 * 1er bandeau visible
 * Voir aussi 1.1 pour les styles mutualisés du menu
 */


.bando-id {
	z-index: 10;
	position: relative;
	font-size: 0.9em;
	background: var(--spip-color-theme-light);
	color: var(--spip-color-gray-darkest);
}
.bando-id img, .bando-id svg {
	max-height: 1.3em;
	width: auto;
}
/* Menu liens */
.bando-id .menu-simple {
	flex: 1 1 100%;
}
.bando-id .menu-simple__item * {
	font-weight: inherit; /* tout unifier, même si <strong> */
}
.bando-id a:hover,
.bando-id a:focus {
	color: var(--spip-color-theme-dark);
}
.bando-id .picto_identite {
	filter: saturate(0);
}
.bando-id svg.picto-lang {
	height: 1.3em;
	width: auto;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0.33em;
	fill: currentColor;
}
.bando-id svg.picto-lang path {
	fill: inherit; /* forcer la main (?) */
}
.bando-id .deroulant__item_plan .picto {
	margin-right: 0;
}
.bando-id .deroulant__item_collaborer:not(:last-child) {
	margin-inline-end: calc(-1 * var(--spip-deroulant-spacing-x));
}
.bando-id .deroulant__item_collaborer .deroulant__lien {
	flex: 0 0 auto;
	align-items: center;
	background-position: center;
	background-repeat: no-repeat;
	background-size: var(--spip-bando-outils-icon-size);
	padding-left: calc(2 * var(--spip-deroulant-spacing-x));
	padding-right: calc(2 * var(--spip-deroulant-spacing-x));
}
.bando-id .deroulant__item_collaborer .deroulant__lien .libelle {
	visibility: hidden;
	display: block;
	height: var(--spip-bando-outils-icon-size);
	width: var(--spip-bando-outils-icon-size);
	overflow: hidden;
}
.bando-id .deroulant__item_aide .deroulant__lien {
	border-left: 1px solid var(--spip-color-theme-lighter);
	border-right: 1px solid var(--spip-color-theme-lighter);
	padding-left: 1em;
	padding-right: 1em;
}
/**
.bando-id > .largeur {
	.deroulant_infos_site
	.formulaire_recherche
	.deroulant_collaborer
	.deroulant_infos_perso
}
*/
.bando-id > .largeur {
	display: flex;
	flex-flow: row wrap;
}
.bando-id > .largeur > .formulaire_recherche {
	margin-right: auto;
}
.bando-id > .largeur > .deroulant_collaborer {
	margin-left: auto;
}
.bando-id > .largeur > .deroulant_infos_perso {
	margin-left: auto;
}
.bando-id > .largeur > .deroulant_collaborer + .deroulant_infos_perso {
	margin-left: 0;
}


/**
 * =====================
 * 4. Bandeau navigation
 * =====================
 *
 * Menu de navigation principale
 * Voir aussi 1.2 pour les styles mutualisés
 */


.bando-nav {
	z-index: 10;
	background: var(--spip-color-white);
	color: var(--spip-color-gray-dark);
}

/* Item <li> à la racine : largeur arbitraire qui doit convenir dans l\'ensemble */
.deroulant_navigation .deroulant__item[data-racine] {
	flex: 0 1 8.5em;
}

/* Liens <a> à la racine : centrer, picto au dessus */
.deroulant_navigation .deroulant__lien[data-racine] {
	flex-wrap: wrap;
	justify-content: center;
	text-align: center;
}
.deroulant_navigation .deroulant__item.actif[data-racine] > .deroulant__lien,
.deroulant_navigation .deroulant__item.actif_tempo[data-racine] > .deroulant__lien,
.deroulant_navigation .deroulant__item[data-racine]:focus-within > .deroulant__lien,
.deroulant_navigation .deroulant__lien[data-racine]:focus,
.deroulant_navigation .deroulant__lien[data-racine]:hover {
	background-color: transparent;
}

/* Picto <svg> à la racine */
.deroulant_navigation .picto {
	width: var(--spip-bando-nav-picto-size);
	height: auto;
	margin-bottom: calc(var(--spip-deroulant-spacing-y) / 2);
}
.deroulant_navigation .picto .foreground {
	fill: var(--spip-color-theme-darker); /* currentColor; */
}
.deroulant_navigation .picto .background {
	fill: var(--spip-color-theme-light);
}
.deroulant_navigation .deroulant__item.actif .picto .background,
.deroulant_navigation .deroulant__item.actif_tempo .picto .background,
.deroulant_navigation .deroulant__item[data-racine]:focus-within > .deroulant__lien .picto .background,
.deroulant_navigation .deroulant__lien[data-racine]:focus .picto .background,
.deroulant_navigation .deroulant__lien[data-racine]:hover .picto .background {
	fill: var(--spip-color-theme);
}
.deroulant_navigation .deroulant__item.actif .picto .foreground,
.deroulant_navigation .deroulant__item.actif_tempo .picto .foreground,
.deroulant_navigation .deroulant__item[data-racine]:focus-within > .deroulant__lien .picto .foreground,
.deroulant_navigation .deroulant__lien[data-racine]:focus .picto .foreground,
.deroulant_navigation .deroulant__lien[data-racine]:hover .picto .foreground {
	fill: var(--spip-color-black);
}

/* Favoris */
.deroulant_navigation .deroulant__item_non-favori {
	background-color: var(--spip-color-gray-lightest);
}
.deroulant_navigation .deroulant__item_favori + .deroulant__item_non-favori {
	border-top: 1px solid var(--spip-color-gray-lighter);
}


/* Plan déroulant : ressérer, icônes customs, ouverture latérale */
.deroulant__item_plan > .deroulant__lien {
	height: 100%;
}
.deroulant__item_plan .image_loading {
	float: var(--spip-right);
}
/* Sous-menus s\'ouvrant latéralement */
.deroulant__item_plan .deroulant__sous-menu .deroulant__item {
	position: relative;
	width: var(--spip-deroulant-col-width);
}
.deroulant__item_plan .deroulant__item_parent.actif > .deroulant__sous-menu,
.deroulant_rubriques .deroulant__item_parent.actif_tempo > .deroulant__sous-menu {
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 4em; /* Décalage arbitraire pas trop grand */
}
/* Lien tout voir sans icône */
.deroulant__item_plan .deroulant__item_tout > .deroulant__lien {
	background-image: none !important;
}
/* Icônes secteur / rubriques selon la profondeur */
.deroulant__item_plan .deroulant__lien[data-profondeur="1"] {
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'secteur-xx.svg')) .
'");
}
.deroulant__item_plan [data-profondeur="2"] .deroulant__lien {
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'rubrique-xx.svg')) .
'");
}
/* picto pour indiquer les items dépliants */
.deroulant__item_plan .deroulant__item_parent > .deroulant__lien {
	position: relative;
}
.deroulant__item_plan .deroulant__item_parent > .deroulant__lien:after {
	content: \'\';
	display: block;
	width: var(--spip-deroulant-icon-size);
	height: var(--spip-deroulant-icon-size);
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'deplier-right.svg')) .
'");
	background-repeat: no-repeat;
	background-position: center center;
	background-size: contain;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': auto;
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': var(--spip-deroulant-spacing-x);
}


/**
 * =========
 * 6. Autres
 * =========
 */


/* Menu de sous-navigation : à déplacer, rien à voir avec les bandeaux */
.navigation .sous_navigation {
	border-top: 0;
}
.navigation .sous_navigation .item:last-child {
	border-bottom: 0;
}
.navigation .sous_navigation .item {
	padding: 0;
	font-size: 1.05em;
	border-color: hsla(0, 0%, 0%, 0.1);
	background-color: transparent;
}
.navigation .sous_navigation .item,
.navigation .sous_navigation .item.on {
	font-weight: bold;
}
.navigation .sous_navigation .item a {
	position: relative;
	display: block;
	margin: 0;
	padding: 14px;
	padding-left: 48px;
	background-position: 14px center;
	background-size: 24px;
	background-repeat: no-repeat;
	color: var(--spip-color-gray-dark);
	transition: background 0.2s;
}
.navigation .sous_navigation .item.on > *,
.navigation .sous_navigation .item a:hover,
.navigation .sous_navigation .item a:focus {
	background-color: var(--spip-color-theme-lighter);
	color: var(--spip-color-black);
	/* box-shadow: inset 0 0 1.5em hsla(0, 0%, 0%, 0.05); */
}


#contenu .sous_navigation {
	display: flex;
	flex-wrap: wrap;
	justify-content: flex-start;
	flex-flow: row wrap;
}

#contenu .sous_navigation .item {
	border: 0;
	flex: 0 1 160px;
}
#contenu .sous_navigation .item a {
	padding: 20px 16px;
	padding-top: 60px;
	background-position: center 20px;
	background-size: 32px;
	height: 100%;
	text-align: center;
	border-radius: var(--spip-border-radius);
}
@media (max-width: 500px) {
	#contenu .sous_navigation .item {
		flex: 1 1 100px;
		font-size: 85%;
		line-height: 120%;
	}
}

/* messages de statut et d\'avertissement dans le bandeau */
div.wrap-messages,
div.en_lignes {
	padding: 5px;
	border-bottom: 1px solid ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true))) .
';
	font-weight: bold;
}
div.wrap-messages {
	background: #333;
	color: #fff;
}
div.messages {
	margin-top: 0;
}
div.messages ul {
	text-align: left;
}
div.en_lignes { }


/* Icônes en background-image */
' .
retablir_echappements_modeles(bando_images_background('')) .
'
');

	return analyse_resultat_skel('html_82edf6321399ff4d6ff8c29b1b477ba2', $Cache, $page, '../prive/themes/spip/bando.css.html');
}
