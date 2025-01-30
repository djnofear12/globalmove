<?php

/*
 * Squelette : ../prive/themes/spip/onglets.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/onglets.css.html
// Temps de compilation total: 1.039 ms
//

function html_e28180522ef8ef5f61bd05bfd2ec7d25($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette définit les styles des menus onglets de l\'espace privé

	Organisation du fichier :

	1. Onglets simples
	2. Barre onglets

<style>') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css;charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'/* ============
 * 0. Variables
 * ============
 */
:root {
	--spip-tabs-border-width: 2px;
	--spip-tabs-border-radius: var(--spip-border-radius);
	--spip-tabs-spacing-x: 1em;
	--spip-tabs-spacing-y: 0.5em;
}


/**
 * =================
 * 0. Onglets (tous)
 * =================
 * Styles mutualisés
 */
.onglets_simple a:focus,
.barre_onglet a:focus {
	box-shadow: 0 0 0 0.2rem var(--spip-btn-color-focus);
	outline: none;
	z-index: 2;
}


/* ==================
 * 1. Onglets simples
 * ==================
 *
 * Markup :
 *
 * div.onglets_simple
 *   ul
 *     li
 *       strong | a
 * div.onglets_simple.second
 *   ul
 *     li
 *       strong | a
 *   ul…
 */

/**
 * Onglets de base
 */
.onglets_simple {
	display: flex;
	justify-content: space-between;
	flex-flow: row wrap;
	margin: calc(var(--spip-spacing-y) * 1.5) 0;
	border-bottom: var(--spip-tabs-border-width) solid hsla(0, 0%, 0%, 0.1);
}
.onglets_simple ul {
	display: flex;
	flex-flow: row wrap;
	padding: 0;
	margin: 0 0 calc(var(--spip-tabs-border-width) * -1); /* Empiéter sur la bordure du bas */
	list-style: none;
}
.onglets_simple ul:only-of-type {
	flex: 1; /* si groupe unique, permettre d\'aggrandir pour garder l\'alignement à gauche */
}
.onglets_simple ul + ul,
.onglets_simple.second ul + ul {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-tabs-spacing-x) * 2);
}
.onglets_simple li {
	display: flex;
	padding: 0;
	margin: 0;
}
/* Items */
.onglets_simple li strong,
.onglets_simple li a {
	flex: 1;
	position: relative;
	display: block;
	padding: calc(var(--spip-tabs-spacing-y) * 2) var(--spip-tabs-spacing-x);
	border-bottom: var(--spip-tabs-border-width) solid transparent;
	transition: background 0.15s, border 0.15s;
	text-align: center;
	font-weight: 500;
	font-size: 0.9em;
	background-position: center var(--spip-left);
	background-repeat: no-repeat;
}
/* Items non exposés (liens) */
.onglets_simple li a {
	color: var(--spip-color-gray-dark);
	text-decoration: none;
}
.onglets_simple li a:hover,
.onglets_simple li a:active {
	cursor: pointer;
	z-index: 2;
}
.onglets_simple li a:hover {
	background-color: var(--spip-color-theme-lightest);
	border-bottom-color: var(--spip-color-theme-light);
}
.onglets_simple li a:active {
	background-color: var(--spip-color-theme-lighter);
	border-bottom-color: var(--spip-color-theme);
}
/* Item exposé */
.onglets_simple li strong {
	color: var(--spip-color-theme-dark);
	border-bottom-color: var(--spip-color-theme-dark);
	z-index: 2;
}
/* Divers */
.onglets_simple .cadre-icone {
	display: none;
}
/* Variante bloc */
.onglets_simple.bloc ul {
	flex-wrap: nowrap;
}
.onglets_simple.bloc ul li {
	flex: 1;
}


/**
 * Onglets secondaires = filtres
 */
.onglets_simple.second {
	border: 0;
	justify-content: flex-start;
}
.onglets_simple.second ul {
	margin: 0;
}
/* Items */
.onglets_simple.second li strong,
.onglets_simple.second li a {
	padding: var(--spip-tabs-spacing-y) var(--spip-tabs-spacing-x);
	text-transform: none;
	border: 1px solid var(--spip-color-gray-light);
	border-radius: var(--spip-tabs-border-radius);
}
.onglets_simple.second li:not(:first-child) > * {
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
}
.onglets_simple.second li:not(:last-child) > * {
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
}
.onglets_simple.second li:not(:first-child):not(:only-child) > * {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': -1px;
}
/* Items non exposés (liens) */
.onglets_simple.second li a {
	background-color: transparent;
}
.onglets_simple.second li a:hover,
.onglets_simple.second li a:focus,
.onglets_simple.second li a:active {
	color: var(--spip-color-theme-dark);
	border-color: var(--spip-color-theme);
}
.onglets_simple.second li a:hover {
	background-color: var(--spip-color-theme-lightest);
}
.onglets_simple.second li a:active {
	background-color: var(--spip-color-theme-light);
}
/* Item exposé */
.onglets_simple.second li strong {
	background-color: var(--spip-color-theme-dark);
	border-color: var(--spip-color-theme-dark);
	color: white;
}


/* ================
 * 2. Barre onglets
 * ================
 *
 * Markup :
 *
 * div.barre_onglet
 *   ul
 *     li
 *       [img.cadre-icone]
 *       strong | a
 */
.barre_onglet {
	margin: calc(var(--spip-spacing-y) * 1.5) 0;
}
.barre_onglet ul {
	display: flex;
	flex-flow: row wrap;
	justify-content: center;
	margin: 0 auto;
	padding: 0;
	margin: 0;
	text-align: var(--spip-left);
	list-style:none;
}
.barre_onglet li {
	margin: 0;
	padding: 0;
	position: relative;
	list-style: none;
}
/* Items */
.barre_onglet a,
.barre_onglet strong {
	display: block;
	padding: calc(var(--spip-tabs-spacing-y) * 1.5) var(--spip-tabs-spacing-x);
	font-weight: 500;
	text-decoration: none;
	transition: background 0.15s, border 0.15s;
	border-radius: 99em;
}
.barre_onglet li:first-child a,
.barre_onglet li:first-child strong {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-tabs-spacing-x) * 1.5); /* plus grand because arrondi */
}
.barre_onglet li:last-child a,
.barre_onglet li:last-child strong {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': calc(var(--spip-tabs-spacing-x) * 1.5); /* plus grand because arrondi */
}
.barre_onglet li:not(:last-child) a,
.barre_onglet li:not(:last-child) strong {
	border-right: 1px solid hsla(0, 0%, 0%, 0.1);
}
.barre_onglet li:not(:first-child) a,
.barre_onglet li:not(:first-child) strong {
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
}
.barre_onglet li:not(:last-child) a,
.barre_onglet li:not(:last-child) strong {
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
}
/* Item non exposé (lien) */
.barre_onglet a {
	background-color: var(--spip-color-gray-lighter);
	text-decoration: none;
	color: var(--spip-color-theme-dark);
}
.barre_onglet a:hover {
	text-decoration: none;
	background-color: var(--spip-color-theme-lighter);
}
.barre_onglet a:active {
	text-decoration: none;
	background-color: var(--spip-color-theme-light);
	color: var(--spip-color-theme-darker);
}
/* Items exposés */
.barre_onglet strong,
.barre_onglet strong.on {
	background-color: var(--spip-color-theme-dark);
	color: var(--spip-color-white);
	z-index: 1;
}
/* Icônes */
.barre_onglet .cadre-icone {
	top: 50%;
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': var(--spip-tabs-spacing-x);
	transform: translateY(-50%);
}
.barre_onglet .cadre-icone + a,
.barre_onglet .cadre-icone + strong {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(24px + (var(--spip-tabs-spacing-x) * 2));
}
.barre_onglet li:first-child .cadre-icone {
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-tabs-spacing-x) * 1.5); /* plus grand because arrondi */
}
.barre_onglet li:first-child .cadre-icone + a,
.barre_onglet li:first-child .cadre-icone + strong {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(24px + (var(--spip-tabs-spacing-x) * 2.5)); /* plus grand because arrondi */
}');

	return analyse_resultat_skel('html_e28180522ef8ef5f61bd05bfd2ec7d25', $Cache, $page, '../prive/themes/spip/onglets.css.html');
}
