<?php

/*
 * Squelette : ../prive/themes/spip/icons.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:50 GMT
 * Boucles :   _icones_images
 */ 

function BOUCLE_icones_imageshtml_3b6efe5f09d656bab420b2327399ba2b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'icones', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_icones_images';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/themes/spip/icons.css.html','html_3b6efe5f09d656bab420b2327399ba2b','_icones_images',148,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
.icone-fonction-' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
':after {
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)(	(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
	'-xx.svg'))) .
'");
}
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_icones_images @ ../prive/themes/spip/icons.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/icons.css.html
// Temps de compilation total: 0.860 ms
//

function html_3b6efe5f09d656bab420b2327399ba2b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles des boutons icônes de l\'espace prive

	Organisation du fichier :

	1. Icones horizontales et verticales
	2. Divers et dépréciés

<style>') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css;charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		('/*' . $t1 . ' trouver mieux que `icon-btn` comme nom de composant */') :
		'') .
'
:root {
	--spip-icon-btn-font-size: 0.85em;
	--spip-icon-btn-padding: 0.5em;
	--spip-icon-btn-color-base: var(--spip-color-gray-lighter);
	--spip-icon-btn-color-hover: var(--spip-color-theme-light);
	--spip-icon-btn-color-active: var(--spip-color-theme);
	--spip-icon-btn-width: 5rem;
}

/**
 * ==============================
 * 1. Icône verticale/horizontale
 * ==============================
 *
 * Par défaut, icône verticale.
 * Une variante horizontale.
 *
 * Markup :
 * <span class="icone danger horizontale s24 left">
 *   <a>
 *     <img>
 *     <b>texte</b>
 *   </a>
 * </span>
 */

.icone {
	position: relative; /* Afin que le z-index soit pris en compte */
	z-index: 2;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
	border-radius: 0.25em;
	vertical-align: middle;
}

/* Conteneur lien */
.icone a {
	display: flex;
	flex-flow: column wrap;
	align-items: inherit;
	justify-content: inherit;
	width: var(--spip-icon-btn-width);
	padding: var(--spip-icon-btn-padding) 0;
	cursor: pointer;
	transition: all 0.2s;
	border-radius: inherit;
}

/* Label */
.icone b,
.box .icone b {
	font-weight: 500;
	margin: 0.5em 0 0;
	font-size: var(--spip-icon-btn-font-size);
	line-height: 1;
	color: var(--spip-color-link);
}

/* Survol et cie */
.icone a:hover,
.icone a:focus {
	text-decoration: none;
}
.icone a:hover .icone-image,
.icone a:focus .icone-image {
	background-color: var(--spip-icon-btn-color-hover);
	        box-shadow: none;
}
.icone a:active .icone-image,
.icone a:active .icone-image {
	background-color: var(--spip-icon-btn-color-active);
}
.icone a:hover b,
.icone a:focus b {
	color: var(--spip-color-text);
}
/* Si icone fonction, animation bling */
.icone a:hover .icone-image.icone-fonction,
.icone a:focus .icone-image.icone-fonction {
	background-color: transparent;
}
.icone a:hover .icone-fonction img,
.icone a:focus .icone-fonction img {
	opacity: 0;
}
.icone a:hover .icone-fonction:after,
.icone a:focus .icone-fonction:after {
	background-size: 60% auto;
	background-position: center center;
	transition: background 0.2s; /* aller */
}

/**
 * Images
 * Nb : les URLs sont mutualisées avec les boutons, donc définies dans boutons.css
 * .icone-image : image de base
 * .icone-fonction : mini image optionnelle par-dessus la précédente
 */
.icone .icone-image {
	padding: var(--spip-icon-btn-padding);
	border-radius: inherit;
	/* background-color: hsla(0, 0%, 0%, 0.025); */
	background-color: var(--spip-icon-btn-color-base);
	box-shadow: inset 0 0 0.75em hsla(0, 0%, 0%, 0.033);
	transition: all 0.2s;
}
.icone .icone-image img {
	display: block;
	transition: inherit;
}
.icone-fonction {
	display: flex; /* éviter espacements indésirables autour de l\'image */
	position: relative;
}
.icone-fonction:after {
	content: \'\';
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-position: bottom var(--spip-icon-btn-padding) right var(--spip-icon-btn-padding);
	background-repeat: no-repeat;
	transition: background 0.1s; /* Retour */
}
.icone-fonction-new:after {
	background-position-y: var(--spip-icon-btn-padding);
}
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'icones'] = (array('add', 'new', 'del', 'config', 'edit')))) .
BOUCLE_icones_imageshtml_3b6efe5f09d656bab420b2327399ba2b($Cache, $Pile, $doublons, $Numrows, $SP) .
'

/* Variante horizontale */
.icone.horizontale {
	clear: both;
	justify-content: flex-start;
	text-align: var(--spip-left);
}
.icone.horizontale a {
	padding: 0.25em 0;
	flex: 1 1 auto;
	flex-flow: row nowrap;
	width: auto;
}
.icone.horizontale b {
	margin-top: 0;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': var(--spip-spacing-x);
}
.icone.horizontale a:not(:hover):not(:focus) b {
	color: #666;
	color: hsla(0, 0%, 0%, 0.6);
}
.icone.horizontale .icone-image {
	flex-shrink: 0;
	padding: 0;
	background: transparent;
	box-shadow: none;
}
.icone.horizontale .icone-fonction:after {
	background-position: bottom 0 right 0;
}
.icone.horizontale .icone-fonction-new:after {
	background-position-y: 0;
}

/* Tailles */
.s16 .icone-image img {
	width: 16px;
	height: 16px;
}
.s16 .icone-fonction:after {
	background-size: 8px;
}
.s24 .icone-image img {
	width: 24px;
	height: 24px;
}
.s24 .icone-fonction:after {
	background-size: 12px;
}
.s32 .icone-image img {
	width: 32px;
	height: 32px;
}
.s32 .icone-fonction:after {
	background-size: 16px;
}

/* Variantes alignement */
.icone.left {
	float: var(--spip-left);
}
.icone.horizontale.left,
.icone.horizontale.right {
	clear: none;
}
.icone.right {
	float: var(--spip-right);
}
.icone.center {
	clear: both;
	display: table !important; /* Seule façon d\'auto-centrer un élément indépendamment du parent */
	margin-left: auto;
	margin-right: auto;
}
.icone.clearleft {
	clear: var(--spip-left);
}
.icone.clearright {
	clear: var(--spip-right);
}


/* Variante danger (à mutualiser avec boutons.css ?) */
.icone.danger a {
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'rayures-sup.svg')) .
'");
	background-color: transparent;
}
.icone.danger b {
	color: #222;
	text-shadow: 0 0 0.25em white, 0 0 0.5em white, 0 0 1em white; /* Lisibilité */
}
.icone.danger .icone-image {
	background-color: #fff;
	border: 2px solid #ff9999;
}
.icone.danger a:hover b,
.icone.danger a:focus b {
	color: red !important;
}
.icone.danger a:hover .icone-image,
.icone.danger a:focus .icone-image {
	background-color: #fff;
	border-color: red;
}
.icone.horizontale.danger a {
	padding-left: 0.25em;
	padding-right: 0.25em;
}
.icone.horizontale.danger .icone-image {
	background: none;
	border: none;
}
.icone.horizontale.danger a:hover .icone-image,
.icone.horizontale.danger a:focus .icone-image {
	background: none;
}

/* Cas particuliers */
.icone.verticale.historique-24 {
	width: 90px;
}
.icone.verticale.suivi-forum-24 {
	width: 100px;
}
.icone.verticale.edition_deja,
.icone.verticale.edition_deja a,
.icone.verticale.edition_deja a b {
	width: 100px;
}
.icone.verticale.edition_deja a b {
	height: ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(strdiv(strmult(entites_html(table_valeur($Pile[0]??[], (string)'line-height', null),true),'3'),'0.85')))))!=='' ?
		($t1 . 'em') :
		'') .
';
}


/* ==================
 * 2. Divers & oldies
 * ==================
 */

/* icone en bord haut du cadre */
.cadre-icone {
	position: absolute;
	top: -16px;
	' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 10px;
	z-index:1;
	max-width:24px;
	height:auto;
}

.iconeoff {
	padding: 3px;
	margin: 1px;
	border: 1px dashed #ccc;
	background-color: #f0f0f0;
}

.iconeon {
	cursor: pointer;
	padding: 3px;
	margin: 1px;
	border-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': solid 1px #fff;
	border-bottom: solid 1px #fff;
	border-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': solid 1px #666;
	border-top: solid 1px #666;
	background-color: #eee;
}

.iconedanger {
	padding: 3px;
	margin: 1px;
	border: 1px dashed #000;
	background: #fce8dd url("' .
retablir_echappements_modeles(chemin_image((string)'rayures-danger.svg')) .
'");
}

/* OLDIES anciennes icones issues de php */
td.icone table {}

td.icone a {
	color: #000;
	text-decoration: none;
	font-size: 10px;
	font-weight: bold;
}

td.icone a:hover {
	text-decoration: none;
}

td.icone a img {
	border: 0;
}
');

	return analyse_resultat_skel('html_3b6efe5f09d656bab420b2327399ba2b', $Cache, $page, '../prive/themes/spip/icons.css.html');
}
