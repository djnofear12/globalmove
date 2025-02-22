<?php

/*
 * Squelette : ../prive/themes/spip/alertes.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/alertes.css.html
// Temps de compilation total: 1.510 ms
//

function html_cbbcf65d14a13d905bbf1c8c4112d973($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . (	'

	Ce squelette définit les styles des messages d\'alerte de l\'espace privé.

	Ce composant correspond aux balises ' .
	retablir_echappements_modeles(interdire_scripts(($Pile[0]['alerte_'] ?? null))) .
	' et cie.

	On maintient pour un temps la compat avec les vieux .notice, .error et .success
	qui pourraient se ballader dans la nature, mais leur utilisation est dépréciée.

	Organisation du fichier :

	0. Variables
	1. Habillage de base
	2. Variantes principales
	3. Autres variantes

	Markup :

	.msg-alert.type?.simple?
	  .msg-alert__heading
	  .msg-alert__text

<style>')) :
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


/* Nb : la media-query au début sinon pb (?) */
@media (min-width: 768px) {
	:root {
		--spip-alert-spacing-x: 1.25rem;
		--spip-alert-spacing-y: 1.25rem;
		--spip-alert-iconsize: 1.25em;
		--spip-alert-closesize: 1.25em;
	}
}
:root {
	--spip-alert-spacing-x: 0.75rem;
	--spip-alert-spacing-y: 0.75rem;
	--spip-alert-border-radius: var(--spip-border-radius);
	--spip-alert-iconsize: 1.25em;
	--spip-alert-closesize: 1em;
}
.lat .msg-alert,
.msg-alert.mini {
	--spip-alert-spacing-x: 0.75rem;
	--spip-alert-spacing-y: 0.75rem;
	--spip-alert-iconsize: 1em;
	--spip-alert-closesize: 1em;
}
.msg-alert.large,
.formulaire_spip .reponse_formulaire {
	--spip-alert-spacing-x: 1.5rem;
	--spip-alert-spacing-y: 1.5rem;
	--spip-alert-iconsize: 1.5em;
	--spip-alert-closesize: 1.25em;
}


/**
 * ====================
 * 1. Habillage de base
 * ====================
 */


 /* Conteneur */
.msg-alert,
.msg-alert * {
	box-sizing: border-box;
}
.msg-alert,
.notice, .error, .success,
.formulaire_spip .reponse_formulaire {
	position: relative;
	padding: var(--spip-alert-spacing-y) var(--spip-alert-spacing-x);
	/* gouttière + taille icone + espacement arbitraire avec le texte */
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-alert-spacing-x) + var(--spip-alert-iconsize) + 0.75em);
	margin: calc(var(--spip-margin-bottom) * 1.5) 0; /* Idem boîtes */
	background-repeat: no-repeat;
	/* Aligner icône au niveau de la 1ère ligne de texte */
	background-position: ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
' var(--spip-alert-spacing-x) top calc(var(--spip-alert-spacing-y) - ((var(--spip-alert-iconsize) - var(--spip-line-height)) / 2));
	background-size: var(--spip-alert-iconsize);
	font-weight: normal;
	border-radius: var(--spip-border-radius);
	box-shadow: inset 0 0 1.5em hsla(0, 0%, 0%, 0.02);
	background-color: var(--spip-color-gray-lighter);
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0.5rem solid var(--spip-color-gray-light);
}


/* Titre */
.msg-alert__heading {
	font-size: 1em;
	font-weight: bold;
	margin-bottom: calc(var(--spip-alert-spacing-y) / 2);
}

/* Rythme vertical des principauxs éléments blocks du texte */
.msg-alert__text p,
.msg-alert__text ul,
.msg-alert__text blockquote,
.msg-alert__text table {
	margin-bottom: calc(var(--spip-alert-spacing-y) / 2);
}
.msg-alert__text > *:last-child {
	margin-bottom: 0 !important; /* obligé car sélecteurs trop spécifiques ailleurs (#conteneur ul.spip) */
}

/* Liens */
.msg-alert a {
	color: var(--spip-color-black);
	text-decoration: underline;
}

/* Code */
.msg-alert tt,
.msg-alert code {
	color: var(--spip-color-black);
}


/**
 * ========================
 * 2. Variantes principales
 * ========================
 */


/* Notice */
.msg-alert.notice,
.notice {
	color:            hsl(var(--spip-color-notice--h), var(--spip-color-notice--s), 18%);
	background-color: hsl(var(--spip-color-notice--h), 90%, 88%);
	border-color:     hsl(var(--spip-color-notice--h), 100%, 48%);
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'warning-24.png')) .
'");
}

/* Erreur */
.msg-alert.error,
.formulaire_spip .reponse_formulaire_erreur,
.error {
	color:            hsl(var(--spip-color-error--h), var(--spip-color-error--s), 18%);
	background-color: hsl(var(--spip-color-error--h), 60%, 95%);
	border-color:     hsl(var(--spip-color-error--h), var(--spip-color-error--s), 50%);
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'erreur-24.png')) .
'");
}

/* Succès */
.msg-alert.success,
.formulaire_spip .reponse_formulaire_ok,
.success {
	color:            hsl(var(--spip-color-success--h), var(--spip-color-success--s), 15%);
	background-color: hsl(var(--spip-color-success--h), 55%, 90%);
	border-color:     hsl(var(--spip-color-success--h), var(--spip-color-success--s), 45%);
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'ok-24.png')) .
'");
}

/* Information */
.msg-alert.info,
.information {
	color:            hsl(var(--spip-color-info--h), var(--spip-color-info--s), 25%);
	background-color: hsl(var(--spip-color-info--h), 45%, 93%);
	border-color:     hsl(var(--spip-color-info--h), var(--spip-color-info--s), 60%);
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'info-24.png')) .
'");
}


/**
 * ===================
 * 3. Autres variantes
 * ===================
 * Ces variantes peuvent se conjuguer aux variantes principales : .notice.mini, .error.large, etc.
 */


/* Variante mini, automatique en colonne latérale : voir variables */
.msg-alert.mini,
.lat .msg-alert {
	font-size: 0.9em;
	margin: calc(var(--spip-margin-bottom) * 0.75) 0; /* Moitié */
}

/* Variante large : voir variables */
.msg-alert.large,
.formulaire_spip .reponse_formulaire {
	/* font-size: 1.1em; */
}

/* Variante fermable */
.msg-alert.fermable {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': calc((var(--spip-alert-spacing-x) * 2) + 1.5em);
}
.msg-alert__close {
	width: var(--spip-alert-closesize);
	height: var(--spip-alert-closesize);
	position: absolute;
	z-index: 2;
	/* Aligner icône au niveau de la 1ère ligne de texte */
	top: calc(var(--spip-alert-spacing-y) + (var(--spip-line-height) - var(--spip-alert-closesize)));
	/* top: var(--spip-alert-spacing-y); */
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': var(--spip-alert-spacing-x);
	padding: 0;
	background: transparent url("' .
retablir_echappements_modeles(chemin_image((string)'fermer-16.png')) .
'") center/1em auto no-repeat;
	background-size: contain;
	border: 0;
	opacity: 0.75;
}
.msg-alert__close:hover,
.msg-alert__close:focus {
	opacity: 1;
	background-color: transparent;
}

/* Bloc ajax invalid apres reload */
.ajaxbloc.invalid {
	box-shadow: 0 0 var(--spip-alert-spacing-x) hsl(var(--spip-color-error--h), var(--spip-color-error--s), 50%);
}
');

	return analyse_resultat_skel('html_cbbcf65d14a13d905bbf1c8c4112d973', $Cache, $page, '../prive/themes/spip/alertes.css.html');
}
