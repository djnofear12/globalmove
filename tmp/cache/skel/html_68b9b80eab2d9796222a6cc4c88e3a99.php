<?php

/*
 * Squelette : ../prive/themes/spip/utils.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/utils.css.html
// Temps de compilation total: 0.271 ms
//

function html_68b9b80eab2d9796222a6cc4c88e3a99($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette définit les styles des boutons de l\'espace privé.

	Classes utilitaires.

') :
		'') .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<style>') :
		'') .
'

/* Éléments flottants */
.float-start {
	float: var(--spip-left); /* fallback */
	float: inline-start;
}
.float-end {
	float: var(--spip-right); /* fallback */
	float: inline-end;
}

/**
 * Éléments positionnés en sticky
 *
 * .sticky tout court est équivalent à .sticky-top
 * Par défaut l\'élément est collé au parent, pour avoir un espacement,
 * ajouter .sticky-m-<taille> (m = marge, taille = de 1 à 3).
 *
 * La parent doit avoir un taille supérieure sinon aucun effet.
 * Il ne doit pas y avoir un ancêtre avec une règle overflow: hidden|auto
 */
:root {
	--spip-sticky-spacing-x: 0;
	--spip-sticky-spacing-y: 0;
}
.sticky,
.sticky-top,
.sticky-bottom,
.sticky-start,
.sticky-end {
	position: sticky !important; /* classe utilitaire = forcer */
	z-index: 10; /* doit passer par dessus les autres éléments */
}
.sticky,
.sticky-top {
	top: var(--spip-sticky-spacing-y);
}
.sticky-bottom {
	bottom: var(--spip-sticky-spacing-y);
}
.sticky-start {
	inset-inline-start: var(--spip-sticky-spacing-x);
}
.sticky-end {
	inset-inline-end: var(--spip-sticky-spacing-x);
}
/* Classes à ajouter en plus pour avoir un espacement */
.sticky-m-1 {
	--spip-sticky-spacing-x: var(--spip-spacing-x);
	--spip-sticky-spacing-y: var(--spip-spacing-y);
}
.sticky-m-2 {
	--spip-sticky-spacing-x: calc(var(--spip-spacing-x) * 2);
	--spip-sticky-spacing-y: calc(var(--spip-spacing-y) * 2);
}
.sticky-m-3 {
	--spip-sticky-spacing-x: calc(var(--spip-spacing-x) * 3);
	--spip-sticky-spacing-y: calc(var(--spip-spacing-y) * 3);
}

/**
 * Tableaux : éléments <th> en sticky
 *
 * Par commodité, on peut placer une classe sur une ligne <tr> entière plutôt que sur chaque cellule.
 * Les cellules doivent avoir un fond de couleur pour un rendu correct.
 */
/* Sticky vertical dans thead ou tbody */
table tr.row-sticky-top th:not([class*=sticky]) {
	position: sticky !important;
	top: 0;
	z-index: 10;
}
/* Sticky horizontal dans tbody uniquement
 * En cas de double emploi horizontal dans tbody + vertical dans thead,
 * il faut aussi mettre les classes .sticky-start.sticky-top sur la cellule concernée dans le thead
*/
table tbody tr.row-sticky-start th:not([class*=sticky]) {
	position: sticky !important;
	inset-inline-start: 0;
	top: initial;
	z-index: 9; /* Passer sous les lignes du thead qui seraient aussi en sticky */
}
table thead tr.row-sticky-top th[class*=sticky] {
	z-index: 11; /* Par dessus tout le reste */
}');

	return analyse_resultat_skel('html_68b9b80eab2d9796222a6cc4c88e3a99', $Cache, $page, '../prive/themes/spip/utils.css.html');
}
