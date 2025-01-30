<?php

/*
 * Squelette : ../prive/themes/spip/forms.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/forms.css.html
// Temps de compilation total: 1.228 ms
//

function html_115f99431da9ddfb9aa6c85949c7786d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette définit les styles des formulaires de l\'espace privé.

	Organisation du fichier :

	0. Variables
	1. Layout : gouttière
	2. Layout : rythme vertical
	3. Entête optionnel avant le formulaire
	4. Structure générale : conteneurs, champs & labels
	5. Fieldsets
	6. Champs avec .choix
	7. Champs en erreurs, obligations & autres états
	8. Champs particuliers
	9. Éléments de formulaire (inputs & cie)
	10. Messages de retour
	11. Messages d’explications
	12. Variantes d\'affichage + formulaires dans certains contextes
	13. Formulaires particuliers
	14. Divers

	Markup :

	.formulaire_spip > form > div
	  .editer-groupe
	    .editer x
	    .editer y
	  (.fieldset > ) fieldset
	    .editer-groupe
	      .editer x
	      .editer y
	      (.fieldset > ) fieldset
	        .editer-groupe
	          .editer x
	          .editer y
	  .boutons

<style>/**') :
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
 *
 * Nb : garder des variables propres à ce composant même dans les cas où on réutilise les variables de --spip-box,
 * cela permet de garder une autonomie pour les ajustements éventuels.
 * De plus il est parfois nécessaire d\'accéder à ces variables en dehors de ce composant.
 */


:root {
	/* Espacements */
	--spip-form-spacing-x: var(--spip-box-spacing-x-mini);
	--spip-form-spacing-y: var(--spip-box-spacing-y-mini);
	/* Entête */
	--spip-form-heading-fontweight: var(--spip-box-heading-fontweight);
	--spip-form-heading-fontsize: var(--spip-box-heading-fontsize-mini);
	--spip-form-heading-iconsize: var(--spip-box-heading-iconsize-mini);
	--spip-from-heading-iconpadding: calc(var(--spip-from-heading-iconsize) + (var(--spip-from-spacing-x) * 1.5));
	/* Fieldsets */
	--spip-form-fieldset-offset: 1.5em; /* décalage quand imbriqué */
	--spip-form-fieldset-spacing: calc(var(--spip-form-spacing-y) / 2); /* espacement en plus */
	/* Layout labels */
	--spip-form-label-width: 12rem;
	--spip-form-label-long-width: 19rem; /* ne pas dépendre de la taille de la font-size du label qui peut varier */
	/* Couleurs */
	--spip-form-color-focus: hsla(var(--spip-color-theme--h), calc(var(--spip-color-theme--s) * 3), var(--spip-color-theme--l), 0.25); /* outline focus inputs et cie */
	--spip-form-color-text: var(--spip-color-gray-darkest); /* défaut */
	--spip-form-color-text-light: var(--spip-color-gray-darker); /* labels et cie */
	--spip-form-color-text-lightest: var(--spip-color-gray); /* placeholder */
	/* Divers */
	--spip-form-border-radius: var(--spip-box-border-radius);
	/* Inputs */
	--spip-form-input-padding-x: 0.33rem;
	--spip-form-input-padding-y: 0.33rem;
	--spip-form-input-border-color: hsla(0, 0%, 0%, 0.2);
	--spip-form-input-border-radius: calc(var(--spip-border-radius) * 2/3);
	--spip-form-input-height: calc((var(--spip-form-input-padding-y) * 2) + var(--spip-line-height)); /* à toute fin utile */
}
@media (min-width: 580px) {
	:root {
	--spip-form-input-border-radius: var(--spip-border-radius);
	}
}
@media (min-width: 768px) {
	/* Taille normale */
	:root {
		/* Espacements */
		--spip-form-spacing-x: var(--spip-box-spacing-x-normal);
		--spip-form-spacing-y: var(--spip-box-spacing-y-normal);
		/* Entête */
		--spip-form-heading-fontsize: var(--spip-box-heading-fontsize-normal);
		--spip-form-heading-iconsize: var(--spip-box-heading-iconsize-normal);
		--spip-from-heading-iconpadding: calc(var(--spip-from-heading-iconsize) + (var(--spip-from-spacing-x) * 1.5));
		/* Inputs */
		--spip-form-input-padding-x: 0.5rem;
		--spip-form-input-padding-y: 0.5rem;
		/* Décalage des fieldsets imbriqués */
		--spip-form-fieldset-offset: 2.5em;
	}
	/* Formulaire de taille réduite */
	.formulaire_spip.mini,
	.lat,
	.affiche_milieu,
	.formulaire_editer_liens,
	.formulaire_dater {
		/* Espacements  */
		--spip-form-spacing-x: var(--spip-box-spacing-x-mini);
		--spip-form-spacing-y: var(--spip-box-spacing-y-mini);
		/* Entête */
		--spip-form-heading-fontsize: var(--spip-box-heading-fontsize-mini);
		--spip-form-heading-iconsize: var(--spip-box-heading-iconsize-mini);
		--spip-from-heading-iconpadding: calc(var(--spip-from-heading-iconsize) + (var(--spip-from-spacing-x) * 1.5));
		/* Inputs */
		--spip-form-input-padding-x: 0.5rem;
		--spip-form-input-padding-y: 0.2rem;
		/* Décalage des fieldsets imbriqués */
		--spip-form-fieldset-offset: 1.5em;
	}
	/* Aligner la taille des boutons avec celles des inputs mis automatiquement en taille réduite */
	/* Nb : juste les boutons normaux pour l\'insatnt, ajouter pour les boutons large si nécessaire */
	.formulaire_spip.mini .editer-groupe .btn,
	.formulaire_spip.mini .editer-groupe button,
	.lat .editer-groupe .btn,
	.lat .editer-groupe button,
	.affiche_milieu .editer-groupe .btn,
	.affiche_milieu .editer-groupe button {
		--spip-btn-font-size: 0.9em;
		--spip-btn-padding-x: 0.5rem;
		--spip-btn-padding-y: calc(0.2rem * 1.325); /* facteur à la main pour compenser le font-size réduit */
	}
}



/**
 * ===================================
 * 1. Layout : gestion de la gouttière
 * ===================================
 *
 * Principe : par défaut il y a des gouttières latérales afin que le contenu ne colle pas aux bords du formulaire.
 * Mais pour certains éléments on l\'annule au moyen de marges négatives, de sorte qu\'ils reviennent coller aux bords.
 * On regroupe tout au même endroit pour mutualiser et se simplifier la vie.
 */

/* Gouttière latérale principale.
   Pour le titre ajuster selon la taille de la police. */
.formulaire_spip,
.formulaire_spip fieldset,
.formulaire_spip .editer-groupe,
.formulaire_spip .editer,
.formulaire_spip .boutons {
	padding-left: var(--spip-form-spacing-x);
	padding-right: var(--spip-form-spacing-x);
}
.formulaire_spip .titrem {
	padding-left: var(--spip-form-spacing-x);
	padding-right: var(--spip-form-spacing-x);
}

/* Marges négatives pour annuler la gouttière.
   Pour le titre ajuster selon la taille de la police. */
.formulaire_spip .editer-groupe,
.formulaire_spip fieldset,
.formulaire_spip .editer,
.formulaire_spip .boutons, #wysiwyg .formulaire_spip p.boutons {
	margin-left: calc(var(--spip-form-spacing-x) * -1);
	margin-right: calc(var(--spip-form-spacing-x) * -1);
}
.formulaire_spip .titrem {
	margin-left: calc(var(--spip-form-spacing-x) * -1);
	margin-right: calc(var(--spip-form-spacing-x) * -1);
}


/**
 * ===========================
 * 2. Layout : rythme vertical
 * ===========================
 *
 * On réunit au même endroit toutes les règlent concernant le rythme vertical.
 * Il s\'agit des espacements verticaux entre les éléments : marges internes et externes.
 *
 * Ne mettre ici QUE des margin et des padding, rien d\'autre !
 */

/**
 * 2.2. Élements optionnels qui précèdent le <form> : titre, explications, etc.
 * Il y a d\'office 1 espace entre ceux-ci et le form.
 * Donc hormis le titre, dès qu\'il y a un élément avec une marge inférieure (p, ul), ça fait 2 espaces.
 * Essayer de forcer à n\'avoir qu\'1 espace tout le temps est trop compliqué avec le markup actuel.
 */

/* Titre : 1 espace avec l\'élément suivant. Pas de marge sous le titre lui-même,
   sinon ça fait 2 espaces quand il n\'y a que le titre avant le form, et c\'est très moche */
.formulaire_spip .titrem {
	margin-bottom: 0;
}
.formulaire_spip .titrem + *:not(form):not(.ajaxbloc) {
	margin-top: var(--spip-form-spacing-y);
}
/* Généralités */
.formulaire_spip p,
.formulaire_spip ul,
.formulaire_spip pre,
.formulaire_spip blockquote {
	margin-bottom: var(--spip-form-spacing-y);
}

/**
 * 2.3. Groupes de saisies
 * 1 espace entre les saisies, ainsi qu\'à l\'extérieur du groupe.
 */

.formulaire_spip .editer-groupe {
	padding-top: calc(var(--spip-form-spacing-y) / 2);
	padding-bottom: calc(var(--spip-form-spacing-y) / 2);
}
.formulaire_spip .editer {
	padding-top: calc(var(--spip-form-spacing-y) / 2);
	padding-bottom: calc(var(--spip-form-spacing-y) / 2);
}
/* Saisies avec fond de couleur : ajuster pour conserver 1 espace */
.formulaire_spip .editer.erreur,
.formulaire_spip .editer_parent,
.formulaire_spip .editer_groupe_mot,
.formulaire_editer_auteur .editer_statut {
	padding-top: var(--spip-form-spacing-y);
	padding-bottom: var(--spip-form-spacing-y);
	margin-top: calc(var(--spip-form-spacing-y) / 2);
	margin-bottom: calc(var(--spip-form-spacing-y) / 2);
}
/* Groupes consécutifs : annuler l\'espace en trop (à priori rare mais possible) */
.formulaire_spip .editer-groupe + .editer-groupe {
	margin-top: calc((var(--spip-form-spacing-y) / 2) * -1);
	padding-top: 0;
}

/**
 * 2.4. Fieldsets
 * Compliqué d\'avoir précisément la main, la légende fausse tous les calculs.
 */

/* Fieldsets : espace supplémentaire autour */
.formulaire_spip fieldset {
	padding-top: var(--spip-form-fieldset-spacing);
	padding-bottom: var(--spip-form-fieldset-spacing);
	margin-top: var(--spip-form-fieldset-spacing);
	margin-bottom: var(--spip-form-fieldset-spacing);
}
.formulaire_spip fieldset legend,
.formulaire_spip fieldset .legend {
	margin-bottom: 0;
}
/* Fieldsets successifs : ressérer */
.formulaire_spip fieldset + fieldset,
.formulaire_spip .fieldset + .fieldset > fieldset {
	margin-top: calc(var(--spip-form-fieldset-spacing) * -1);
}
/* Fieldsets imbriqués */
.formulaire_spip fieldset fieldset {
	margin-bottom: 0; /* Tant qu\'il n\'y a pas de bordure latérale */
}


/**
 * 2.5. Autres éléments
 */

/* Explications : 1 espace autour. */
.formulaire_spip .explication,
.formulaire_spip .attention {
	margin-top: var(--spip-form-spacing-y);
	margin-bottom: var(--spip-form-spacing-y);
}


/**
 * =======================================
 * 3. Entête optionnel avant le formulaire
 * =======================================
 */


.cadre-formulaire-editer .formulaire_spip {
	margin-top: 0;
	overflow: hidden; /* sinon problème avec marge supérieure qui déborde, mais par défaut sur tous ça cacherait l\'icône en entête */
}
.cadre-formulaire-editer {
	color: var(--spip-form-color-text-light);
	margin-top: calc(var(--spip-margin-bottom) * 1.5);
	position: relative;
}
.cadre-formulaire-editer.popin {
	margin-top: 0
}
.cadre-formulaire-editer .image_loading {
	position: absolute;
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0;
}
.entete-formulaire {
	position:relative;
	padding: var(--spip-form-spacing-y) var(--spip-form-spacing-x);
	padding-bottom: calc(var(--spip-form-spacing-y) / 2);
	overflow: hidden;
	background: var(--spip-color-white);
	border-bottom: 1px solid var(--spip-box-sep-color);
	border-top-left-radius: var(--spip-form-border-radius);
	border-top-right-radius: var(--spip-form-border-radius);
	box-shadow: var(--spip-box-shadow);
}
.formulaire_spip .cadre {
	border: 1px solid var(--spip-box-border-color);
}
.entete-formulaire + .formulaire_spip,
.entete-formulaire + .formedit .formulaire_spip,
.entete-formulaire + .ajax-form-container + .formulaire_spip,
.entete-formulaire + div > .formulaire_spip,
.entete-formulaire + div > div > .formulaire_spip {
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}


/**
 * ===================================================
 * 4. Structure générale : conteneurs, champs & labels
 * ===================================================
 */


/* Conteneur général */
.formulaire_spip,
.formulaire_spip * {
	box-sizing: border-box;
}
.formulaire_spip {
	position: relative; /* pour positionner le ajaxload en automatique */
	margin: calc(var(--spip-margin-bottom) * 1.5) 0;
	color: var(--spip-form-color-text);
	background-color: var(--spip-color-white);
	border-radius: var(--spip-form-border-radius);
	box-shadow: var(--spip-box-shadow);
	z-index: 2; /* passer par dessus l\'entête */
	transition: box-shadow 0.2s;
	border-top:1px solid transparent; /* permet de respecter le margin top sur le premier element si besoin */
	border-bottom:1px solid transparent; /* permet de respecter le margin bottom sur le dernier element si besoin */
}
.formulaire_spip:hover,
.formulaire_spip:focus-within {
	box-shadow: var(--spip-box-shadow-hover);
}

/* Titre optionnel */
.formulaire_spip .titrem {
	display: flex;
	align-items: center;
	padding-top: var(--spip-form-spacing-y);
	padding-bottom: var(--spip-form-spacing-y);
	border-top-left-radius: inherit;
	border-top-right-radius: inherit;
	border-bottom: 1px solid var(--spip-box-sep-color);
	font-size: var(--spip-form-heading-fontsize);
	font-weight: var(--spip-form-heading-fontweight);
}

/* Conteneur des saisies */
.formulaire_spip .editer-groupe {
	/* overflow: hidden; */ /* Gêne les puces statuts */
}
/*  2 colonnes */
@media (min-width: 768px) {
	.formulaire_spip .editer-groupe.deux_colonnes {
		column-count: 2;
		column-gap: var(--spip-form-spacing-x);
	}
	.formulaire_spip .editer-groupe.deux_colonnes .editer {
		padding-left:  0;
		padding-right: 0;
		margin: 0;
	}
}

/* Conteneur d\'une saisie */
.formulaire_spip .editer {
	clear: both;
	/* overflow: hidden; */ /* un peu trop brutal par défaut ? */
}

/* Labels : pleine largeur, puis affichés à gauche à partir des écrans moyens */
.formulaire_spip label[for] {
	cursor: pointer;
}
.formulaire_spip .editer > label,
/* @deprecated SPIP 5.0 .label */ .formulaire_spip .editer > .label,
.formulaire_spip .editer > .editer-label,
.formulaire_spip .editer.gauche > label {
	display: block;
	margin-bottom: calc(var(--spip-form-spacing-y) / 4);
	background: transparent;
	color: var(--spip-form-color-text-light);
	text-align: var(--spip-left);
	font-weight: inherit;
	line-height: 1.3; /* légèrement inférieure au texte normal */
}
/* @deprecated SPIP 5.0 .label */ .formulaire_spip fieldset.editer > .label,
.formulaire_spip fieldset.editer > .editer-label {
	transform: translateY(33%); /* remettre à peu près au niveau de la ligne */
}
/* Responsive : passer les labels à gauche + variantes */
@media (min-width: 580px) {
	.formulaire_spip .editer,
	.formulaire_spip .editer.gauche {
		padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-form-label-width) + (var(--spip-form-spacing-x) * 2)); /* largeur + marge gauche+droite */
	}
	.formulaire_spip .editer > label,
	/* @deprecated SPIP 5.0 .label */ .formulaire_spip .editer > .label,
	.formulaire_spip .editer > .editer-label,
	.formulaire_spip .editer.gauche > label {
		float: var(--spip-left);
		width: var(--spip-form-label-width);
		margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc((var(--spip-form-label-width) + var(--spip-form-spacing-x)) * -1); /* inverse largeur + marge */
		padding: calc(var(--spip-form-input-padding-y) + 1px) 0 0; /* décaler pour aligner avec texte input → padding + border */
	}
	/* @deprecated SPIP 5.0 .label */ .formulaire_spip fieldset.editer > .label,
	.formulaire_spip fieldset.editer > .editer-label {
		transform: none;
	}
	/* Labels plus longs */
	.formulaire_spip .editer.long_label {
		padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-form-label-long-width) + (var(--spip-form-spacing-x) * 2)); /* largeur + marge gauche+droite */
	}
	/* @deprecated SPIP 5.0 .label */ .formulaire_spip .editer.long_label > .label,
	.formulaire_spip .editer.long_label > .editer-label,
	.formulaire_spip .editer.long_label > label {
		width: var(--spip-form-label-long-width);
		margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc((var(--spip-form-label-long-width) + var(--spip-form-spacing-x)) * -1); /* inverse largeur + marge */
	}
	/* Labels en haut + cas particuliers où c\'est forcé */
	.formulaire_spip .editer.pleine_largeur,
	.formulaire_spip .editer_parent,
	.formulaire_spip .editer_groupe_mot,
	.formulaire_spip .editer_descriptif,
	.formulaire_spip .editer_chapo,
	.formulaire_spip .editer_texte,
	.formulaire_spip .editer_ps,
	.formulaire_spip .editer.haut {
		padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': var(--spip-form-spacing-x);
	}
	.formulaire_spip .editer.pleine_largeur > label,
	/* @deprecated SPIP 5.0 .label */ .formulaire_spip .editer.pleine_largeur > .label, /* fieldsets avec legend.label */
	.formulaire_spip .editer.pleine_largeur > .editer-label, /* fieldsets avec legend.editer-label */
	.formulaire_spip .editer-groupe.deux_colonnes > .editer > label,
	.formulaire_spip .editer_parent label,
	.formulaire_spip .editer_groupe_mot label,
	.formulaire_spip .editer_descriptif label,
	.formulaire_spip .editer_chapo label,
	.formulaire_spip .editer_texte label,
	.formulaire_spip .editer_ps label,
	.formulaire_spip .editer.haut label {
		display: block;
		float: none;
		width: auto;
		margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0;
		padding: 0;
	}
	/* @deprecated SPIP 5.0 .label */ .formulaire_spip fieldset.editer.pleine_largeur > .label,
	.formulaire_spip fieldset.editer.pleine_largeur > .editer-label {
		transform: translateY(33%); /* remettre à peu au niveau de la ligne */
	}
}

/* Conteneur des boutons (les boutons eux-mêmes sont dans boutons.css.html) */
.formulaire_spip .boutons {
	position: relative;
	margin-bottom: 0 !important; /* Fix #wysiwyg */
	clear: both;
	padding: var(--spip-form-spacing-y) var(--spip-form-spacing-x);
	text-align: var(--spip-right);
	background-color: var(--spip-color-theme-lightest);
	border-bottom-left-radius: var(--spip-form-input-border-radius);
	border-bottom-right-radius: var(--spip-form-input-border-radius);
}
.formulaire_spip .boutons .image_loading {
	float: none;
}
@media (min-width: 768px) {
	.formulaire_spip .boutons {
		padding-top: calc(var(--spip-form-spacing-y) / 2);
		padding-bottom: calc(var(--spip-form-spacing-y) / 2);
	}
	.formulaire_spip.mini .boutons,
	.lat .formulaire_spip .boutons,
	.affiche_milieu .formulaire_spip .boutons,
	.formulaire_editer_liens .boutons,
	.formulaire_dater  .boutons{
		padding-top: var(--spip-form-spacing-y);
		padding-bottom: var(--spip-form-spacing-y);
	}
}


/**
 * =======================
 * 5. Fieldsets des enfers
 * =======================
 */


/* Fieldsets : tous */
.formulaire_spip fieldset {
	position: relative;
	min-width: 0; /* nécessaire ? */
	width: auto;
	border: 0;
	border-top: 1px solid var(--spip-box-sep-color);
}

/* Légendes */
/* @deprecated SPIP 5.0 .label */ .formulaire_spip fieldset legend:not(.label):not(.editer-label),
.formulaire_spip fieldset .legend {
	padding: var(--spip-form-input-padding-y) var(--spip-form-input-padding-x);
	background-color: var(--spip-color-gray-lightest);
	/* color: var(--spip-color-theme-darker); */
	font-weight: 800;
	font-size: inherit;
}
/* Fix h3 pseudo-légendes : on essaie de les afficher comme des vraies */
.formulaire_spip fieldset .legend:not(legend) {
	display: inline-block;
	position: absolute;
	top: 0;
	transform: translateY(-50%);
}
.formulaire_spip fieldset .legend:not(legend) + * {
	margin-top: var(--spip-form-spacing-y) !important;
}

/* Fieldsets .editer : ce sont des conteneurs pour des .choix, à afficher comme les autre .editer */
.formulaire_spip fieldset.editer {
	border: 0;
	margin-bottom: 0;
	margin-top: 0;
}

/* Fix des .editer + .fieldset : combinaison erronée ? */
.formulaire_spip .fieldset.editer {
	padding-left: var(--spip-form-spacing-x);
}

/* Fieldsets imbriqués */
.formulaire_spip fieldset fieldset {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': var(--spip-form-fieldset-offset); /* décalage */
	padding-left: 0;
	padding-right: 0;
	margin-right: 0;
}

/* Hack temporaire pour avoir marquer la fin des fieldsets racines avec une bordure inférieure.
   Il n\'en faut une que quand le fieldset est suivi d\'autre chose qu\'un fieldset.
   On pose donc la bordure sur l\'élément suivant, en bidouillant les marges.
   À refaire proprement quand il y aura un meilleur markup (une classe spéciale ou autre). */
.formulaire_spip form > div > fieldset + *:not(fieldset):not(.fieldset):not(.boutons),
.formulaire_spip form > div > .fieldset + *:not(fieldset):not(.fieldset):not(.boutons),
.formulaire_spip form > div > .editer-groupe > .fieldset + *:not(.fieldset):not(.boutons) {
	border-top: 1px solid var(--spip-box-sep-color);
	margin-top: calc(var(--spip-form-fieldset-spacing) * -1);
	padding-top: var(--spip-form-spacing-y);
}


/**
 * =====================
 * 8. Champs avec .choix
 * =====================
 *
 * Conteneur de paires inputs + labels, plusieurs paires possibles par conteneur.
 * Recommandé pour les radios et checkbox.
 * La variante inline peut avoir des inputs textes, et éventuellement des selects.
 *
 * Attention, il y a une distinction selon la balise :
 *   - div.choix : variante bloc avec un cadre similaire à ceux des inputs.text et cie
 *   - span.choix : variante inline sans aucun habillage
 */


/* Ceux avec un cadre */
.formulaire_spip div.choix {
	background-color: var(--spip-color-white);
	padding: calc(var(--spip-form-input-padding-y) / 2) var(--spip-form-input-padding-x);
	border: 1px solid var(--spip-form-input-border-color);
	border-top-left-radius: var(--spip-form-input-border-radius);
	border-top-right-radius: var(--spip-form-input-border-radius);
	border-bottom: 0;
	z-index: 1; /* passer par dessus fond explication qui suit */
	transition: box-shadow 0.2s; /* idem inputs */
}
.formulaire_spip div.choix + .choix {
	padding-top: 0;
	border-top: 0;
	border-bottom: 0;
	border-radius: 0;
}
.formulaire_spip div.choix:last-of-type,
.formulaire_spip div.choix:last-child {
	border-bottom-left-radius: var(--spip-form-input-border-radius);
	border-bottom-right-radius: var(--spip-form-input-border-radius);
	border-bottom: 1px solid var(--spip-form-input-border-color);
	padding-bottom: var(--spip-form-input-padding-y);
	position: relative;
}
.formulaire_spip div.choix:first-of-type {
	border-top-left-radius: var(--spip-form-input-border-radius);
	border-top-right-radius: var(--spip-form-input-border-radius);
	border-top: 1px solid var(--spip-form-input-border-color);
	padding-top: var(--spip-form-input-padding-y);
	position: relative;
}
.formulaire_spip div.choix label img {
	vertical-align: middle;
	margin: 3px 0px;
}

/* Label */
.formulaire_spip .choix > label,
.formulaire_spip .choix :not(.editer) > label /* pourquoi ? */
{
	display: inline;
	float: none;
	margin: 0;
	font-weight: normal;
	text-transform: none;
}

/* Inputs */
.formulaire_spip .choix input {
	margin: 0 0 0.15em; /* remonter légèrement pour aligner */
	vertical-align: middle;
}
/* Largeur auto, en évitant d\'utiliser !important */
.formulaire_spip .choix input,
.formulaire_spip .choix input.text,
.formulaire_spip .choix input.password,
.formulaire_spip .choix select {
	width: auto;
}

/* Espacements entre inputs et labels (à affiner) */
.formulaire_spip .choix > label,
/* @deprecated SPIP 5.0 .label */ .formulaire_spip .choix > .label,
.formulaire_spip .choix > .editer-label {
	margin: 0 0.5em;
}
/* Espacement entre .choix inline successifs */
.formulaire_spip span.choix + span.choix {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': var(--spip-form-spacing-x); /* entre options ou .choix inline */
}

/* Variante inline, sans bordure (cf. explication plus haut) */
.formulaire_spip span.choix,
.formulaire_spip span.choix:first-of-type,
.formulaire_spip span.choix:last-of-type,
.formulaire_spip span.choix:last-child{
	display: inline-block;
	background: transparent;
	padding: 0;
	border: 0;
}

/* Explication en dessous */
.formulaire_spip div.choix + .explication,
.formulaire_spip div.choix + .attention {
	margin-top: 0;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	position: relative;
}

/* Les choix qui contiennent un sous-formulaire optionnel, dependant du choix */

.formulaire_spip div.choix>fieldset,
.formulaire_spip div.choix>.editer-groupe,
.formulaire_spip div.choix>.boutons {
	/* Marges négatives pour annuler la gouttière. */
	margin-left: calc(var(--spip-form-input-padding-x) * -1);
	margin-right: calc(var(--spip-form-input-padding-x) * -1);
}


/**
 * ================================================
 * 7. Champs en erreurs, obligations & autres états
 * ================================================
 */


/* Champs obligatoires */
.formulaire_spip .editer.obligatoire label,
/* @deprecated SPIP 5.0 .label */ .formulaire_spip .editer.obligatoire .label,
.formulaire_spip .editer.obligatoire .editer-label,
.formulaire_spip .editer.obligatoire.gauche label {
	color: var(--spip-color-black);
	font-weight: bold;
}
.formulaire_spip .editer.obligatoire input.text,
.formulaire_spip .editer.obligatoire input.password {
	font-weight: bold;
}

/* Champs en erreur */
.formulaire_spip .editer.erreur {
	background-color: hsl(var(--spip-color-error--h), var(--spip-color-error--s), 95%);
}
.formulaire_spip .erreur_message {
	display: block;
	margin-bottom: calc(var(--spip-form-spacing-y) / 4);
	font-weight: bold;
}
/* Coloriser message et labels des .choix */
.formulaire_spip .erreur_message,
.formulaire_spip .editer.erreur .choix label {
	color: hsl(var(--spip-color-error--h), var(--spip-color-error--s), 45%);
}
/* cas exotique d\'un label dans une erreur (ie confirmez que vous êtes sûr ) */
.formulaire_spip .erreur_message label {
	float: none;
	display: inline;
	font-weight: normal;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0;
}
.formulaire_spip .editer.erreur input.text,
.formulaire_spip .editer.erreur input.password,
.formulaire_spip .editer.erreur textarea,
.formulaire_spip .editer.erreur select {
	border: 2px solid hsl(var(--spip-color-error--h), var(--spip-color-error--s), 66%);
}
.formulaire_spip .editer.erreur .choix {
	border-color: hsl(var(--spip-color-error--h), var(--spip-color-error--s), 66%) !important;
	border-width: 2px !important;
}
.formulaire_spip .editer.erreur input.text:focus,
.formulaire_spip .editer.erreur input.password:focus,
.formulaire_spip .editer.erreur textarea:focus,
.formulaire_spip .editer.erreur select:focus,
.formulaire_spip .editer.erreur [type="radio"]:focus,
.formulaire_spip .editer.erreur [type="checkbox"]:focus,
.formulaire_spip .editer.erreur [type="file"]:focus {
	box-shadow: 0 0 0 0.2rem hsla(var(--spip-color-error--hsl), 0.33);
}

/* Champs disabled */
.formulaire_spip .editer.disabled {
	opacity: 0.5;
}


/**
 * ======================
 * 8. Champs particuliers
 * ======================
 */


/* Avec couleur de fond */
.formulaire_spip .editer_parent:not(.erreur),
.formulaire_spip .editer_groupe_mot:not(.erreur),
.formulaire_editer_auteur .editer_statut:not(.erreur) {
	background-color: var(--spip-color-gray-lightest);
}

/* Importants */
.formulaire_spip .editer.editer_parent label,
.formulaire_spip .editer.editer_groupe_mot label {
	/* color: black; */
	font-weight: bold;
}


/**
 * ========================================
 * 9. Éléments de formulaire (inputs & cie)
 * ========================================
 *
 * Nomenclature recommandée pour les types d\'inputs : <type> [text text_<type>]
 * C\'est à dire toujours mettre le type + text si c\'est une variation du type texte.
 * Pour l\'instant on fait des fallbacks si classes absentes.
 *
 * Exemples :
 * <input type="text"   class="text">
 * <input type="email"  class="email  text text_email">
 * <input type="number" class="number text text_number">
 * <input type="phone"  class="phone  text text_phone">
 * <input type="file"   class="file">
 */


/* Éléments avec du texte */
.formulaire_spip input.text,
.formulaire_spip input.password,
.formulaire_spip textarea,
.formulaire_spip select {
	font-size: inherit;
	font-family: inherit;
	line-height: var(--spip-line-height);
}

/* Éléments avec bordure */
.formulaire_spip input.text,
.formulaire_spip input.password,
.formulaire_spip textarea,
.formulaire_spip select {
	position: relative;
	z-index: 2;
	padding: var(--spip-form-input-padding-y) var(--spip-form-input-padding-x);
	margin: 0;
	width: 100%;
	border: 1px solid var(--spip-form-input-border-color);
	border-radius: var(--spip-form-input-border-radius);
	background-color: var(--spip-color-white);
	transition: box-shadow 0.1s;
}
.formulaire_spip input.text:focus,
.formulaire_spip input.password:focus,
.formulaire_spip textarea:focus,
.formulaire_spip select:focus,
.formulaire_spip [type="radio"]:focus,
.formulaire_spip [type="checkbox"]:focus,
.formulaire_spip [type="file"]:focus {
	border-color: var(--spip-color-theme);
	box-shadow: 0 0 0 0.2rem var(--spip-form-color-focus);
	outline: 0;
}

/* Selects
 * Il faut un min-height car apparemment la hauteur est pas calculée pareil que pour les inputs,
 * il faut tenir compte de la bordure. C\'est nul.
 */
.formulaire_spip select {
	min-height: calc(var(--spip-line-height) + 2px + (var(--spip-form-input-padding-y) * 2));
}

/* Select (apparences unifiées) */
.formulaire_spip select:not(.statut):not([multiple]) {
	padding-right: calc(var(--spip-form-input-padding-x) + 21px);
	background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' width=\'24\' height=\'24\'%3E%3Cpath fill=\'none\' d=\'M0 0h24v24H0z\'/%3E%3Cpath d=\'M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z\'/%3E%3C/svg%3E");
	background-repeat: no-repeat;
	background-position: var(--spip-right) var(--spip-form-input-padding-x) center;
	background-size: 21px 21px;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

/* Bloc de texte */
.formulaire_spip textarea {
	overflow: auto;
}

/* Placeholders (et simulés, legacy) */
.formulaire_spip input.placeholder,
.formulaire_spip textarea.placeholder,
.formulaire_spip input::placeholder,
.formulaire_spip textarea::placeholder {
	color: hsla(var(--spip-color-black--hsl), 0.6);
	font-style: italic;
}

/* Input fichier */
.formulaire_spip input.file,
.formulaire_spip input[type="file"] {
	border: none;
	background-color: transparent;
	cursor: pointer;
}

/* Input de couleur */
.formulaire_spip input.color,
.formulaire_spip input[type="color"] {
	min-height: 2.75em; /* À la louche, à calculer auto. si possible */
	min-width: 2.75em; /* Carré */
	width: auto;
	padding: calc(var(--spip-form-input-padding-y) / 2);
	cursor: pointer;
}

/* Input de recherche */
.formulaire_spip input.search,
.formulaire_spip input[type="search"] {
	border-radius: var(--spip-form-input-border-radius);
}

/* Boutons de soumission (voir aussi dans boutons.css) */
.formulaire_spip input.submit,
.formulaire_spip input.reset,
.formulaire_spip input.button {
	width: auto;
}


/**
 * ======================
 * 10. Messages de retour
 * ======================
 */


/* Les messages de retour sont des alertes (role="status"),
   aussi les styles sont mutualisés dans alertes.css.
   On reprend les styles d\'une alerte large.
   Ici, juste des ajustements */
.formulaire_spip .reponse_formulaire.reponse_formulaire {
	margin: var(--spip-form-spacing-y) 0;
}


/**
 * ==========================================
 * 11. Messages d’explications et d’attention
 * ==========================================
 */


.formulaire_spip .explication,
.formulaire_spip .attention {
	display: block;
	position: relative;
	padding: var(--spip-form-input-padding-y) var(--spip-form-input-padding-x);
	font-size: 0.9em;
	line-height: 1.25;
	color: var(--spip-color-gray-dark);
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: var(--spip-form-input-border-radius);
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: var(--spip-form-input-border-radius);
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-width: 0.3em;
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-style: solid;
}
.formulaire_spip .explication {
	overflow-wrap: break-word;
	background-color: hsla(0, 0%, 0%, 0.05); /* transparent sinon on voit pas sur les champs avec le même fond */
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-color: var(--spip-form-input-border-color);
}
.formulaire_spip .attention {
	color: hsl(var(--spip-color-notice--h), var(--spip-color-notice--s), 22%);
	border-color: hsl(var(--spip-color-notice--h), var(--spip-color-notice--s), 57%);
	background-color:hsl(var(--spip-color-notice--h), var(--spip-color-notice--s), 87%);
}

/* Si l\'explication est un div avec des choses à l\'intérieur : pas de marge en trop en bas */
.formulaire_spip .explication * :last-child,
.formulaire_spip .attention * :last-child {
	margin-bottom: 0;
}

/* Ceux dans un champ */
.formulaire_spip .editer .explication,
.formulaire_spip .editer .attention {
	margin-bottom: 0;
	margin-top: 0;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: var(--spip-form-input-border-radius);
	border: 0;
}
.formulaire_spip .editer .explication > :last-child,
.formulaire_spip .editer .attention > :last-child {
	margin-bottom: 0
}
.formulaire_spip .editer .explication:last-child,
.formulaire_spip .editer .attention:last-child {
	border-radius: var(--spip-form-input-border-radius);
}
.formulaire_spip .explication + input.text,
.formulaire_spip .attention + input.text,
.formulaire_spip .explication + input.password,
.formulaire_spip .attention + input.password,
.formulaire_spip .explication + textarea,
.formulaire_spip .attention + textarea,
.formulaire_spip .explication + select,
.formulaire_spip .attention + select,
.formulaire_spip .explication + div.choix:first-of-type,
.formulaire_spip .attention + div.choix:first-of-type {
	position: relative;
	margin-top: 0;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}

/* Message dessous : on fait "déborder" le fond sous l\'input précédent (à cause border-radius) */
.formulaire_spip .editer input.text + .explication,
.formulaire_spip .editer input.text + .attention,
.formulaire_spip .editer input.password + .explication,
.formulaire_spip .editer input.password + .attention,
.formulaire_spip .editer textarea + .explication,
.formulaire_spip .editer textarea + .attention,
.formulaire_spip .editer select + .explication,
.formulaire_spip .editer select + .attention,
.formulaire_spip .editer div.choix:last-of-type + .explication,
.formulaire_spip .editer div.choix:last-of-type + .attention {
	border-radius: var(--spip-form-input-border-radius);
	border-top-left-radius: 0;
	border-top-right-radius: 0;
	position: relative
}
.formulaire_spip input.text + .explication:before,
.formulaire_spip input.text + .attention:before,
.formulaire_spip input.password + .explication:before,
.formulaire_spip input.password + .attention:before,
.formulaire_spip textarea + .explication:before,
.formulaire_spip textarea + .attention:before,
.formulaire_spip select + .explication:before,
.formulaire_spip select + .attention:before,
.formulaire_spip div.choix:last-of-type + .explication:before,
.formulaire_spip div.choix:last-of-type + .attention:before {
	content: "";
	display: block;
	position: absolute;
	top: calc(var(--spip-form-input-border-radius) * -1);
	height: var(--spip-form-input-border-radius);
	width: 100%;
	left: 0;
	background-color: inherit;
}


/**
 * ===============================================================
 * 12. Variantes d\'affichage + formulaires dans certains contextes
 * ===============================================================
 */


/**
 * 12.1. Formulaires compacts
 * ---------------------------
 * cf. variables
 */
.formulaire_spip.mini {}

/**
 * 12.2. Formulaires flat
 * ----------------------
 * Sans ombre portée, simple bordure
 */
.formulaire_spip.flat,
.formulaire_spip .formulaire_spip,
.box .formulaire_spip,
.popin .entete-formulaire,
.popin .formulaire_spip {
	border: 1px solid var(--spip-box-border-color);
	box-shadow: none !important; /* important = pour inclure hover et cie */
}

/**
 * 12.3. Ceux dans .affiche_milieu + certains précis.
 * --------------------------------------------------
 * Cf. variables + content.css
 */


/**
 * 12.4. Ceux dans #wysiwyg
 * -------------------------
 */
#wysiwyg .formulaire_spip {
	font-size: 1rem;
}

/**
 * 12.5. Ceux dans une colonne latérale
 * ------------------------------------
 */
.lat .formulaire_spip {
	/* font-size: 0.95em; */
}
/* Tous les labels au dessus */
.lat .formulaire_spip .editer {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': var(--spip-form-spacing-x);
}
.lat .formulaire_spip .editer label,
/* @deprecated SPIP 5.0 .label */ .lat .formulaire_spip .editer .label,
.lat .formulaire_spip .editer .editer-label {
	text-transform: none;
	display: block;
	float: none;
	padding: 0;
	width: auto;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0;
}
/* Fieldsets imbriqués */
.lat .formulaire_spip fieldset fieldset {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-form-fieldset-offset) / 2);
}
/* Fieldsets conteneurs de .choix */
.lat .formulaire_spip fieldset.editer {
	margin-top: calc(var(--spip-form-spacing-y) / 2);
	margin-bottom: calc(var(--spip-form-spacing-y) / 2);
	margin-left: calc(var(--spip-form-spacing-x) * -1);
}
.lat .formulaire_spip .editer .choix label {
	display: inline;
}
.lat .formulaire_spip input.file {
	font-size: 0.9em;
}
.lat .formulaire_spip ul.spip li {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 2em !important;
}


/**
 * ============================
 * 13. Formulaires particuliers
 * ============================
 */


/* Choix couleur */


.formulaire_configurer_preferences .editer_couleur .choix {
	float: left;
	border: 0 !important;
	padding: 5px 20px 5px 0px !important;
}

/* Edition d\'un auteur */
.formulaire_editer_auteur .editer_identification fieldset {
	background-color: var(--spip-color-gray-lightest);
}
.formulaire_editer_auteur .editer.editer_statut .instituer_auteur {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc((var(--spip-form-label-width) * -1) + var(--spip-form-spacing-x));
	margin-top: var(--spip-form-input-padding-y);
}
.formulaire_editer_auteur .editer.editer_statut .rubriques_restreintes > p {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0;
	margin-bottom: 0;
	margin-top: var(--spip-form-input-padding-y);
}
.formulaire_editer_auteur .editer.editer_statut .rubriques_restreintes label {
	float: none;
	width: auto;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0;
}
.formulaire_editer_auteur .reset_password {
	margin-top: calc(var(--spip-form-spacing-y) / 2);
	margin-bottom: 0;
	display: block;
	width: 100%;
}

/* Statut */
.lat .formulaire_instituer .editer_statut label {
	display: flex;
	align-items: center;
}

/* Logo */
.lat .formulaire_editer_logo .apercu,
.lat .formulaire_editer_logo .ajouter_survol {
	text-align: center;
}
.formulaire_editer_logo .spip_logo img,
#illustrations .vignette img,
#documents_joints .image img.spip_logo {
	background: url("' .
retablir_echappements_modeles(chemin_image((string)'fond-imgs.png')) .
'");
}
#illustrations .vignette img.spip_document_icone {
	background-image:none;
}
.formulaire_editer_logo .taille {
	font-size: 0.9em;
}
.formulaire_editer_logo .groupe-btns {
	margin-top: var(--spip-box-spacing-y);
}
.formulaire_editer_logo .titrem,
.formulaire_editer_logo .ajouter_survol {
	text-transform: uppercase;
}
.formulaire_editer_logo .editer_logo_on {
	margin-top: 0 !important; /* Fix bigup */
}
.formulaire_editer_logo .editer_logo_on.logo_upload,
.formulaire_editer_logo .editer_logo_off.logo_upload.open {
	background: #fff; ' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' https://core.spip.net/issues/2995') :
		'') .
'
}
#navigation .dropfile {
	margin: 0 !important; /* Bigup */
}

/* Documents */
.formulaire_joindre_document .editer_fichier_upload {
	margin-top: 0 !important; /* Fix à déplacer dans medias */
}


/* Multilinguisme */
.formulaire_configurer_multilinguisme #langues_bloquees .choix,
.formulaire_configurer_multilinguisme #langues_proposees .choix {
	padding: 0 5px;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 10px;
	float: ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
';
	width: 45%;
	clear: none;
	background: transparent;
	border: 0;
}
.formulaire_configurer_multilinguisme .traduite label {
	text-decoration: underline;
}
.formulaire_configurer_multilinguisme #langues_bloquees label {
	color: var(--spip-color-theme);
	font-weight: bold;
}

/* Config / réducteur
   Les vignettes sont des <button>
   Les images en background font 150 x 150px */
.formulaire_configurer_reducteur .vignettes_reducteur {
	display: flex;
}
.formulaire_configurer_reducteur .vignette_reducteur {
	text-align: center;
	float: var(--spip-left);
	border: 1px solid var(--spip-form-input-border-color);
	width: 150px;
	padding-top: calc(150px + var(--spip-btn-padding-y));
	margin: 0.5em;
	background-position: top center;
	background-repeat: no-repeat;
}
.formulaire_configurer_reducteur .vignette_reducteur:first-child {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0;
}
.formulaire_configurer_reducteur .vignette_reducteur:last-child {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0;
}
.formulaire_configurer_reducteur .vignette_reducteur.on,
.formulaire_configurer_reducteur .vignette_reducteur:hover {
	border-color: var(--spip-color-theme);
	background-color: var(--spip-color-theme);
	color: var(--spip-color-white);
}
.formulaire_configurer_reducteur .vignette_reducteur.on {
	border-color: var(--spip-color-theme-dark);
	background-color: var(--spip-color-theme-dark);
}


/* dater
   @extend .mini
   + voir .affiche_milieu */
.formulaire_dater [class*=editer_date] + [class*=editer_date] {
	padding-top: 0;
}
.formulaire_dater .editer > label {
	font-weight: var(--spip-form-heading-fontweight);
	font-size: var(--spip-form-heading-fontsize);
	padding-top: calc(var(--spip-form-input-padding-y) / 2);
}
.formulaire_dater .affiche {
	display:block;
	font-weight: bold;
	text-transform: uppercase;
	padding-top: calc(var(--spip-form-input-padding-y) / 4);
}
.formulaire_dater .saisie_redac {
	display: block;
}
.formulaire_dater .editer_date_redac .editable .choix {
	display: block;
	margin-top: calc(var(--spip-form-input-padding-y) / 2);
}
.formulaire_dater #sans_redac {
	vertical-align: top;
}
.formulaire_spip.formulaire_dater img.ui-datepicker-trigger {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': -1em;
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': -1em;
}
.formulaire_spip.formulaire_dater input.text {
	padding-top: calc(var(--spip-form-input-padding-y) / 2);
	padding-bottom: calc(var(--spip-form-input-padding-y) / 2);
}
.formulaire_spip.formulaire_dater .toggle_box_link {
	transform: none;
}
.formulaire_spip.formulaire_dater .boutons {
	border-radius: 0px;
	position: relative;
	padding-top: 0; /* inutile car pas de démarquation de couleur */
}
@media (max-width: 760px) {
	.formulaire_dater .editer_date_redac .editable label {
		margin-left: calc((var(--spip-form-label-long-width) + (var(--spip-form-spacing-x) * 1/2)) * -1);
		width: calc(var(--spip-form-label-long-width) - (var(--spip-form-spacing-x) * 2));
		display: inline-block;
	}
}
.fiche_objet .formulaire_spip.formulaire_dater {
	margin-top: 0;
	position: relative;
}

/* editer_liens
   @extend .mini
   + voir .affiche_milieu */
.formulaire_editer_liens .selecteur {
	margin-left: calc(var(--spip-form-spacing-x) * -1);
	margin-right: calc(var(--spip-form-spacing-x) * -1);
	padding-left: var(--spip-box-spacing-x);
	padding-right: var(--spip-box-spacing-x);
	background-color: var(--spip-color-theme-lightest);
	border: 1px solid var(--spip-color-theme);
	border-bottom-left-radius: var(--spip-form-input-border-radius);
	border-bottom-right-radius: var(--spip-form-input-border-radius);
}
.formulaire_editer_liens .selecteur h3,
.formulaire_editer_liens .selecteur .titrem {
	margin: 0;
	padding: var(--spip-box-spacing-y) 0;
	background-color: transparent;
	font-size: 1em;
	border: 0;
}
.formulaire_editer_liens .selecteur .boutons {
	margin-left: 0;
	margin-right: 0;
	padding-left: 0;
	padding-right: 0;
	background-color: transparent;
}
/* listes */
.formulaire_editer_liens .liste-objets {
	border: 0;
	background-color: transparent;
	margin-top: 0;
	margin-bottom: 0;
}
.formulaire_editer_liens .liste-objets thead {
	display: none; /* bruit peu utile */
}
.formulaire_editer_liens .liste-objets-lies {
	margin-left: calc(var(--spip-form-spacing-x) * -1);
	margin-right: calc(var(--spip-form-spacing-x) * -1);
	margin-bottom: 0;
}
.formulaire_editer_liens .liste-objets-associer {
	font-size: 0.9em;
	margin-left: calc(var(--spip-box-spacing-x) * -1);
	margin-right: calc(var(--spip-box-spacing-x) * -1);
	margin-bottom: var(--spip-box-spacing-y);
	border-bottom: 1px solid var(--spip-box-sep-color);
}
.formulaire_editer_liens .liste-objets-associer .caption {
	display: flex;
	align-items: center;
	gap: 2em;
}
.formulaire_editer_liens .liste-objets-associer .caption span.recherche {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': auto;
	font-size: 0.9em;
	flex: 50%;
	flex-shrink: 1;
	flex-grow: 1;
	max-width: 30em;
	text-align: end;
}
.formulaire_editer_liens .liste-objets-associer .caption input.recherche {
	width: auto;
	border-radius: 1em;
	border: 1px solid var(--spip-color-gray-light);
	padding: .2rem .5rem;
}
.formulaire_editer_liens .liste-objets-associer .caption span.recherche .tout_voir {
	/* font-size: 0.8em; */
	/* .offscreen */
}
.formulaire_editer_liens .selecteur.filtre .tout_voir {
	visibility: visible;
}
.formulaire_editer_liens.non_editable input,
.formulaire_editer_liens.non_editable button {
	display: none;
}
.formulaire_editer_liens .action {
	text-align: ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
';
}
.formulaire_editer_liens .liste-objets tr > .action {
	text-align: ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
';
	/* width: 120px; */
}
.formulaire_editer_liens .liste-objets tr > .action button img {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 0;
	vertical-align: bottom;
}


/* retour visuel a la suppression et a l\'ajout */
.remove {background-color:#FFD0BF;}
.append {background-color:#E0FFCF;}

/* formulaire de recherche : */
/* version old style */
.spip_recherche {
	float: var(--spip-right);
	border: 0;
	background: none;
}
.spip_recherche .recherche {
	float: var(--spip-left);
	padding: 3px;
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 30px;
	width: 186px;
	border: 1px solid #fff;
	background-color: var(--spip-color-theme);
	color: var(--spip-gray-white);
	margin: 0 0 6px;
}
.spip_recherche .submit {
	float: ' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
';
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
':-24px;
	margin-top:1px;
}
/* version moderne */
:root {
	--spip-searchform-padding: 1em;
}
.formulaire_recherche {
	z-index: 1;
	float: var(--spip-right);
	width: 40ch;
	border: 0;
	margin: 0 0 calc(var(--spip-spacing-y) / 2);
	padding: 0;
	background: transparent;
	box-shadow: none !important;
}
.formulaire_recherche form {
	position: relative;
}
.formulaire_recherche input.text {
	z-index: 1;
	box-sizing: border-box;
	width: 100%;
	padding-inline-start: var(--spip-searchform-padding);
	padding-inline-end: calc(1.15em + var(--spip-searchform-padding)); /* place pour picto loupe (.image) */
	font-size: 0.9em;
	border-radius: 99em;
	border-color: transparent;
	background-color: var(--spip-color-gray-lighter);
	transition: background 0.1s, border 0.1s;
}
.formulaire_recherche input.text:focus {
	border-color: var(--spip-color-theme);
	background-color: transparent;
	box-shadow: none;
}
.formulaire_recherche input.text:focus ~ .image:not(:hover) {
	color: var(--spip-color-theme);
}
.formulaire_recherche input.text.cancelable {
	padding-inline-start: calc(16px + (var(--spip-searchform-padding) * 1)); /* place pour picto fermer */
}
.formulaire_recherche input.text.placeholder {
	color: var(--spip-color-gray-light);
	opacity: 1;
}
.formulaire_recherche .image,
.formulaire_recherche .cancel {
	z-index: 2;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	line-height: 1px;
}
.formulaire_recherche .image {
	inset-inline-end: calc(var(--spip-searchform-padding) / 2);
	margin-bottom: 0;
	padding: 0.25em;
	color: hsla(0, 0%, 0%, 0.5);
}
.formulaire_recherche .image svg {
	width: 1.15em;
	height: auto;
}
.formulaire_recherche .image,
.formulaire_recherche .image:hover,
.formulaire_recherche .image:focus {
	background: none;
	border: 0;
	box-shadow: none;
}
.formulaire_recherche .image:hover,
.formulaire_recherche .image:focus {
	color: var(--spip-color-theme-black);
}
.formulaire_recherche .cancel {
	inset-inline-start: calc(var(--spip-searchform-padding) / 2);
}
/* Dans une modale */
.box_mediabox .formulaire_recherche {
	z-index: 1; /* focus dans la mediabox */
}
/* Dans bandeau outils : faire coller l\'input aux bords du bandeau, quelque soit sa hauteur*/
#bando_haut .formulaire_recherche {
	--spip-searchform-padding: 0.66rem;
	display: flex;
	width: 30ch;
	margin-top: 0;
	margin-bottom: 0;
	border-left: 1px solid var(--spip-color-theme-light);
	border-right: 1px solid var(--spip-color-theme-light);
	border-radius: 0;
}
#bando_haut .formulaire_recherche form,
#bando_haut .formulaire_recherche form > div {
	display: flex;
	flex: 1;
}
#bando_haut .formulaire_recherche input.text {
	height: 100%;
	padding-top: 0.44em; /* à la louche pour obtenir même hauteur que le bando */
	padding-bottom: 0.44em;
	border-radius: 0;
	background-color:hsla(0, 0%, 100%, 0.5);
	font-size: 1em;
}

/* formulaire_traduire */
.formulaire_traduire .editer > label {
	padding: 0;
}
.formulaire_traduire .voir_traductions {
	padding-top: calc(var(--spip-form-spacing-y) / 2);
}
.formulaire_traduire .liste-objets {
	margin: 0 calc(var(--spip-box-spacing-x) * -1);
	background-color: transparent;
	border-color: var(--spip-box-sep-color);
	border-left: 0;
	border-right: 0;
	border-radius: 0;
}
.formulaire_traduire .liste-objets .caption {
	border: 0;
}
.formulaire_traduire .liste-objets .first_row {
	display: none;
}
.formulaire_traduire .liste-objets .on {
	font-weight: inherit;
}
.formulaire_traduire .supprimer_trad {
	float: var(--spip-right);
	margin: calc(var(--spip-form-spacing-y) / 2) 0 0;
}
.formulaire_traduire .new_trad {
	overflow: hidden;
	padding-bottom: calc(var(--spip-form-spacing-y) / 2);
}

/* formulaire_instituer */
.infos .instituer_objet {
	border: 0px;
	margin: var(--spip-form-spacing-y) 0 calc(var(--spip-form-spacing-y) * 2);
}
.infos .instituer_objet .statut {
	margin: 0 calc(var(--spip-form-spacing-x) * -1);
	padding: calc(var(--spip-form-spacing-y) / 2) var(--spip-form-spacing-x);
	display: flex !important;
	flex-direction: row;
	align-items: center;
	gap: var(--spip-spacing-x);
	gap: .5em;
	width: 100%;
  	box-sizing: content-box;
}
.infos .instituer_objet .statut_actuel .statut {
	margin-top: calc(var(--spip-form-spacing-y) / 2);
}

.infos .instituer_objet.objet_publie .statut_actuel .statut {
	color: hsl(var(--spip-color-success--h), var(--spip-color-success--s), 15%);
	background-color: hsl(var(--spip-color-success--h), 55%, 90%);
}
.infos .instituer_objet .statut .statut-icone {
	line-height: 1;
	margin: 0 4px;
	flex-direction: row;
	align-items: center;
	display: flex;
}
.infos .instituer_objet .statut .statut-icone img {
	width: 16px;
  	height: 16px;
	margin: 0;
}

.infos .instituer_objet .statut_actuel .btn_modifier {display: none;}
.infos .instituer_objet.form-closed .statut_actuel .btn_modifier {display: inline-block;}
.infos .instituer_objet.form-closed .formulaire_instituer {display: none;}

.infos .formulaire_instituer {
	background-color: var(--spip-color-white);
	border: 0;
	border-radius: 0;
	box-shadow: none;
	margin: 0 calc(var(--spip-box-spacing-x) * -1);
	border-top: 1px solid var(--spip-box-border-color);
	border-bottom: 1px solid var(--spip-box-border-color);
}
.infos .formulaire_instituer .reponse_formulaire {
	display: none;
}
.infos .instituer_objet .formulaire_instituer .editer_statut legend {
	display: block;
	width: 100% !important;
	margin-left: calc(-1 * var(--spip-form-spacing-x)) !important;
	margin-right: calc(-1 * var(--spip-form-spacing-x)) !important;
	padding-left: var(--spip-form-spacing-x) !important;
	padding-right: var(--spip-form-spacing-x) !important;
	box-sizing: content-box;
	background-color: var(--spip-color-white);
}
.infos .instituer_objet .formulaire_instituer .editer_statut div.choix {
	border: 0;
	margin-left: calc(-1 * var(--spip-form-spacing-x));
	margin-right: calc(-1 * var(--spip-form-spacing-x));

	display: flex;
	align-items: center;

	border-radius: 0 !important;
	padding: 0;
}

.infos .instituer_objet .formulaire_instituer .editer_statut .choix .radio {
	flex-shrink: 0;
	margin-bottom: 0;

	opacity: 0;
	width: 1em;
	height: 1em;
	position: absolute;
	left: .5em;
	top: .4em;
}
.infos .instituer_objet .formulaire_instituer .editer_statut div.choix label {
	font-weight: normal;
	flex-grow: 1;
	padding: 0 var(--spip-form-spacing-x);
	margin-left: 0;
	margin-right: 0;
}
.infos .instituer_objet .formulaire_instituer .editer_statut div.choix input.radio:hover + label {
	background-color: var(--spip-color-gray-lightest);
}
.infos .instituer_objet .formulaire_instituer .editer_statut div.choix input.radio:checked + label {
	font-weight: bold;
	background-color: var(--spip-color-gray-lighter);
}
.infos .instituer_objet .formulaire_instituer .editer_statut div.choix input.radio:focus-visible + label {
	background-color: var(--spip-color-gray-light);
}
.infos .instituer_objet .formulaire_instituer .editer_statut div.choix label img {
	transition: transform .2s;
	transform: scale(.8);
}
.infos .instituer_objet .formulaire_instituer .editer_statut div.choix input.radio:checked + label img {
	transform: scale(1.2);
}
.infos .instituer_objet .formulaire_instituer .boutons {
	padding-top: 0;
	background-color: transparent;
}


/* Menu favoris */
.formulaire_configurer_preferences_menus .menus_favoris input.text {
	padding: calc(var(--spip-form-input-padding-y) / 2) calc(var(--spip-form-input-padding-y) / 2);
	width: 2em;
}
.formulaire_configurer_preferences_menus .menus_favoris .choix {
	padding: calc(var(--spip-form-input-padding-y) / 2) calc(var(--spip-form-input-padding-x) / 2);
}


/**
 * ==========
 * 14. Divers
 * ==========
 */


/* Icone d\'aide
   Attention même classe sur le <a> et le <img> dedans */
a.aide {
	display: inline-flex; /* pour aligner correctement */
	vertical-align: middle;
	margin-bottom: 0.1em; /* pour aligner aussi */
}
img.aide {
	padding: 2px !important;
	width: 16px;
	height: 16px;
}

/* Date picker */
#ui-datepicker-div {
	z-index: 10000 !important;
}
.ui-datepicker {
	z-index: 1001 !important;
}
.formulaire_spip img.ui-datepicker-trigger {
	position: relative;
	max-width: 1.5em;
	margin-top: -0.25em;
	margin-left: -1.75em;
}

/* pour editer_liens ? */
.actions a.editbox:not(.bouton) {
	display: inline-block;
}

/* Toggle box link */
.formulaire_spip .toggle_box_link {
	display: inline-flex; /* éviter des espacements indésirables */
	position: absolute;
	top: var(--spip-box-spacing-y);
	' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': var(--spip-box-spacing-x);
	z-index: 1;
}
.formulaire_spip .toggle_box_link button,
.formulaire_spip .toggle_box_link .btn {
	margin: 0;
}
/* Centrage vertical */
.formulaire_spip .toggle_box_link.middle {
	top: 50%;
	transform: translateY(-50%);
}


@keyframes bounce {
	0% {
		transform: translateX(0px);
		timing-function: ease-in;
	}
	37% {
		transform: translateX(5px);
		timing-function: ease-out;
	}
	55% {
		transform: translateX(-5px);
		timing-function: ease-in;
	}
	73% {
		transform: translateX(4px);
		timing-function: ease-out;
	}
	82% {
		transform: translateX(-4px);
		timing-function: ease-in;
	}
	91% {
		transform: translateX(2px);
		timing-function: ease-out;
	}
	96% {
		transform: translateX(-2px);
		timing-function: ease-in;
	}
	100% {
		transform: translateX(0px);
		timing-function: ease-in;
	}
}

.formulaire_spip.resubmit-noajax {
	animation: bounce 0.5s;
}
');

	return analyse_resultat_skel('html_115f99431da9ddfb9aa6c85949c7786d', $Cache, $page, '../prive/themes/spip/forms.css.html');
}
