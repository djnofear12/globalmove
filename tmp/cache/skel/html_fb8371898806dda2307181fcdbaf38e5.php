<?php

/*
 * Squelette : ../plugins-dist/compagnon/prive/style_prive_plugin_compagnon.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:55 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/compagnon/prive/style_prive_plugin_compagnon.html
// Temps de compilation total: 0.556 ms
//

function html_fb8371898806dda2307181fcdbaf38e5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
':root {
	--compagnon-picto-size: 2.5em;
	--compagnon-border-radius: calc(var(--spip-border-radius) * 2);
	--compagnon-border-width: 2px;
	--compagnon-icon-spacing-x: 1em;
}

@media (min-width: 768px) {
	:root {
		--compagnon-picto-size: 4em;
	}
}
.lat {
	--compagnon-picto-size: 2.5em;
}

/**
 * ===============
 * Boîte compagnon
 * ===============
 */
.box.compagnon {
	border: var(--compagnon-border-width) solid var(--spip-color-theme);
	border-radius: var(--compagnon-border-radius);
	color: var(--spip-color-gray-darker);
	background-color: var(--spip-color-theme-lightest);
	overflow: hidden;
}

/* Picto */
.box.compagnon .picto-compagnon {
	position: absolute;
	top: calc(var(--compagnon-picto-size) * 0.15 * -1);
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--compagnon-picto-size) * 0.15 * -1);
	width: var(--compagnon-picto-size);
	height: auto;
}
.rtl .box.compagnon .picto-compagnon {
	transform: rotate(45deg);
}

.picto-compagnon .fond {
	fill: var(--spip-color-theme-light);
}
.picto-compagnon .visage {
	fill: var(--spip-color-theme-lightest);
}
.picto-compagnon .visage-trait {
	fill: var(--spip-color-theme);
}
.picto-compagnon .ombre {
	fill: hsl(var(--spip-color-theme--h),var(--spip-color-theme--s), 70%);
}

/* Header, body, footer */
.box.compagnon .box__header,
.box.compagnon .box__body {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--compagnon-picto-size) + 0.5em);
}
.box.compagnon .box__header {
	min-height: 2.5em;
	padding-bottom: calc(var(--spip-box-spacing-y) / 2);
	color: var(--spip-color-theme-dark);
	border: 0;
}
.box.compagnon .box__body {
	padding-top: calc(var(--spip-box-spacing-y) / 2);
}
.box.compagnon .box__footer {
	background-color: transparent;
	border-top: none;
	padding: 0;
}

/* Bouton */
.box.compagnon .box__header .bouton_action_post {
	float: ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
';
}
.box.compagnon .box__header button.submit {
	opacity: .5;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': calc(-1 * var(--spip-box-spacing-x));
	margin-top: calc(-1 * var(--spip-box-spacing-y));
	padding: .75em;
	border-radius: var(--compagnon-border-radius);
}
.box.compagnon .box__header button.submit svg {
	width: 1em;
	height: 1em;
}
.box.compagnon .box__header button.submit svg circle {
	fill: var(--spip-color-theme-dark);
}
.box.compagnon .box__header button.submit:hover,
.box.compagnon .box__header button.submit:focus {
	opacity: 1;
}

.box.compagnon .box__footer button.submit {
	border: var(--compagnon-border-width) solid var(--spip-color-theme);
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-width: 0;
	border-bottom-width: 0;
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: var(--compagnon-border-radius);
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: calc(var(--compagnon-border-radius) - var(--compagnon-border-width));
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	margin: 0;
	font-size: 1em;
}
.box.compagnon .box__footer button.submit:not(:hover):not(:focus) {
	background-color: var(--spip-color-theme-lighter);
	color: var(--spip-color-theme-dark);
}
.box.compagnon .box__footer button.submit:hover,
.box.compagnon .box__footer button.submit:focus {
	border-color: var(--spip-btn-color-main-hover-bg);
}

/* Cible dans le pied à gauche */
.box.compagnon .target {
	position: absolute;
	bottom: 5px;
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 5px;
	display: block;
	width: 32px;
	height: 32px;
	background: url(' .
retablir_echappements_modeles(extraire_attribut(filtrer('image_graver', filtrer('image_sepia',chemin_image((string)'target-32.png'),(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true)))))),'src')) .
');
	cursor: crosshair;
}

/* Explications éventuelles */
.box.compagnon .compagnon_helper {
	padding: var(--spip-spacing-x);
	margin: var(--spip-spacing-y) 0;
	border-radius: var(--compagnon-border-radius);
	background-color: var(--spip-color-theme-lighter);
}
');

	return analyse_resultat_skel('html_fb8371898806dda2307181fcdbaf38e5', $Cache, $page, '../plugins-dist/compagnon/prive/style_prive_plugin_compagnon.html');
}
