<?php

/*
 * Squelette : ../prive/themes/spip/boutons.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:50 GMT
 * Boucles :   _tailles
 */ 

function BOUCLE_tailleshtml_6258ba2503dc179eb6a2d8e5c667844a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(array('mini', 'large')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_tailles';
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
		array('../prive/themes/spip/boutons.css.html','html_6258ba2503dc179eb6a2d8e5c667844a','_tailles',419,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
.btn_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
',
input.submit.btn_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
',
input.reset.btn_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
',
button.btn_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
',
.groupe-btns_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
' .btn,
.groupe-btns_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
' input.submit,
.groupe-btns_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
' input.reset,
.groupe-btns_' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
' button {
	font-size: var(--spip-btn-font-size-' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
');
	padding: var(--spip-btn-padding-y-' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
') var(--spip-btn-padding-x-' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
');
	border-radius: var(--spip-btn-border-radius-' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
');
	margin-bottom: var(--spip-btn-margin-' .
retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
');
}
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_tailles @ ../prive/themes/spip/boutons.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/boutons.css.html
// Temps de compilation total: 1.122 ms
//

function html_6258ba2503dc179eb6a2d8e5c667844a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette définit les styles des boutons de l\'espace privé.

	- Liens boutons : <a class="btn">
	- Boutons d\'action : #BOUTON_ACTION
	- Boutons de formulaires : <input class="submit"> et <button>

	Organisation du fichier :

	0. Variables
	1. Base commune à tous les boutons
	2. Variantes génériques
	4. Liens boutons
	5. Boutons de formulaires
	6. Boutons d\'action
	7. Groupes de boutons
	8. Boutons avec icônes
	9. Rustines, dépéractions

') :
		'') .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<style>') :
		'') .
'

/**
 * ============
 * 0. Variables
 * ============
 */

:root {
	/* couleurs partagées */
	--spip-btn-color-white:                var(--spip-color-white);
	--spip-btn-color-black:                var(--spip-color-gray-darker);
	--spip-btn-color-border-accent:       hsla(0, 0%, 0%, 0.2);
	--spip-btn-color-focus:                hsla(var(--spip-color-theme--h), calc(var(--spip-color-theme--s) * 3), var(--spip-color-theme--l), 0.5);
	/* couleurs bouton par défaut */
	--spip-btn-color-main-bg:              hsl(var(--spip-color-theme--h), var(--spip-color-theme--s), calc(var(--spip-color-theme--l) * 0.9));
	--spip-btn-color-main-border:          var(--spip-btn-color-main-bg);
	--spip-btn-color-main-text:            var(--spip-btn-color-white);
	--spip-btn-color-main-hover-bg:        hsl(var(--spip-color-theme--h), var(--spip-color-theme--s), calc(var(--spip-color-theme--l) * 0.75));
	--spip-btn-color-main-hover-border:    var(--spip-btn-color-main-hover-bg);
	--spip-btn-color-main-hover-text:      var(--spip-btn-color-main-text);
	--spip-btn-color-main-active-bg:       hsl(var(--spip-color-theme--h), var(--spip-color-theme--s), calc(var(--spip-color-theme--l) * 0.6));
	--spip-btn-color-main-active-border:   var(--spip-btn-color-main-active-bg);
	--spip-btn-color-main-active-text:     var(--spip-btn-color-main-text);
	/* couleurs bouton secondaire */
	--spip-btn-color-second-bg:            transparent;
	--spip-btn-color-second-border:        hsl(var(--spip-color-theme--h), var(--spip-color-theme--s), calc(var(--spip-color-theme--l) * 0.95));
	--spip-btn-color-second-text:          hsl(var(--spip-color-theme--h), var(--spip-color-theme--s), calc(var(--spip-color-theme--l) * 0.85));
	--spip-btn-color-second-hover-bg:      var(--spip-btn-color-main-hover-bg);
	--spip-btn-color-second-hover-border:  var(--spip-btn-color-main-hover-border);
	--spip-btn-color-second-hover-text:    var(--spip-btn-color-main-hover-text);
	--spip-btn-color-second-active-bg:     var(--spip-btn-color-main-active-bg);
	--spip-btn-color-second-active-border: var(--spip-btn-color-main-active-border);
	--spip-btn-color-second-active-text:   var(--spip-btn-color-main-active-text);
	/* couleurs bouton lien */
	--spip-btn-color-link-text:            var(--spip-btn-color-black);
	--spip-btn-color-link-hover-text:      var(--spip-color-theme-dark);
	/* couleurs boutons inverse */
	--spip-btn-color-inverse-bg:           var(--spip-btn-color-white);
	--spip-btn-color-inverse-border:       var(--spip-btn-color-inverse-bg);
	--spip-btn-color-inverse-text:         var(--spip-btn-color-black);
	--spip-btn-color-inverse-hover-bg:     var(--spip-color-gray-lightest);
	--spip-btn-color-inverse-hover-border: var(--spip-btn-color-inverse-hover-bg);
	--spip-btn-color-inverse-hover-text:   var(--spip-btn-color-inverse-text);
	--spip-btn-color-inverse-active-bg:    var(--spip-color-gray-lighter);
	--spip-btn-color-inverse-active-border:var(--spip-btn-color-inverse-active-bg);
	--spip-btn-color-inverse-active-text:  var(--spip-btn-color-inverse-text);
	/* couleur bouton actif (un seul état) */
	--spip-btn-color-on-bg:                var(--spip-btn-color-main-hover-bg);
	--spip-btn-color-on-border:            var(--spip-btn-color-main-hover-border);
	--spip-btn-color-on-text:              var(--spip-btn-color-main-hover-text);
	/* couleurs boutons inactif */
	--spip-btn-color-off-bg:               var(--spip-color-gray-lighter);
	--spip-btn-color-off-border:           var(--spip-btn-color-off-bg);
	--spip-btn-color-off-text:             var(--spip-btn-color-black);
	--spip-btn-color-off-hover-bg:         var(--spip-color-gray-light);
	--spip-btn-color-off-hover-border:     var(--spip-btn-color-off-hover-bg);
	--spip-btn-color-off-hover-text:       var(--spip-btn-color-off-text);
	--spip-btn-color-off-active-bg:        var(--spip-color-gray);
	--spip-btn-color-off-active-border:    var(--spip-btn-color-off-active-bg);
	--spip-btn-color-off-active-text:      var(--spip-btn-color-off-text);
	/* taille normale */
	--spip-btn-font-size:           1em;
	--spip-btn-padding-x:           1rem;
	--spip-btn-padding-y:           0.5rem;
	--spip-btn-margin:              0.25em;
	--spip-btn-border-radius:       0.25em;
	--spip-btn-gutter:              0.5em;
	/* taille mini */
	--spip-btn-font-size-mini:      0.8em;
	--spip-btn-padding-x-mini:      0.5rem;
	--spip-btn-padding-y-mini:      0.1rem;
	--spip-btn-margin-mini:         var(--spip-btn-margin);
	--spip-btn-border-radius-mini:  var(--spip-btn-border-radius);
	/* taille large */
	--spip-btn-font-size-large:     1.15em;
	--spip-btn-padding-x-large:     1.5rem;
	--spip-btn-padding-y-large:     0.75rem;
	--spip-btn-margin-large:        var(--spip-btn-margin);
	--spip-btn-border-radius-large: 0.33em;
}

/**
 * ==================================
 * 1. Base commune à tous les boutons
 * ==================================
 */

.btn,
input.submit,
input.reset,
button {
	position: relative;
	box-sizing: border-box;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	text-align: center;
	vertical-align: middle;
	padding: var(--spip-btn-padding-y) var(--spip-btn-padding-x);
	margin-bottom: var(--spip-btn-margin);
	background-color: var(--spip-btn-color-main-bg);
	color: var(--spip-btn-color-main-text);
	border: 1px solid var(--spip-btn-color-main-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	border-radius: var(--spip-btn-border-radius);
	text-decoration: none;
	font-size: var(--spip-btn-font-size);
	font-family: inherit;
	font-weight: 400;
	line-height: var(--spip-line-height);
	user-select: none;
	transition: all 0.1s;
}
a.btn,
#wysiwyg a.btn, #wysiwyg a.btn:hover,
input.submit,
input.reset,
button {
	text-decoration: none;
	cursor: pointer;
}

/* Survol */
.btn:hover,
.btn:focus,
input.submit:hover,
input.submit:focus,
input.reset:hover,
input.reset:focus,
button:hover {
	background-color: var(--spip-btn-color-main-hover-bg);
	border-color: var(--spip-btn-color-main-hover-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-main-hover-text);
	text-decoration: none;
	transition: all 0.2s;
}
/* Focus : outline */
.btn:focus,
input.submit:focus,
input.reset:focus,
button:focus {
	box-shadow: 0 0 0 0.2rem var(--spip-btn-color-focus);
}
/* Actif */
.btn:active,
input.submit:active,
input.reset:active,
button:active {
	background-color: var(--spip-btn-color-main-active-bg);
	border-color: var(--spip-btn-color-main-active-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-main-active-text);
}


/**
 * ================================
 * 2. Variantes génériques communes
 * ================================
 */


/**
 * Variante secondaire : boutons mis en retrait, juste une bordure
 */
.btn_secondaire,
input.submit.btn_secondaire,
input.reset.btn_secondaire,
button.btn_secondaire {
	background-color: var(--spip-btn-color-second-bg);
	border-color: var(--spip-btn-color-second-border);
	color: var(--spip-btn-color-second-text);
}
.btn_secondaire:hover,
.btn_secondaire:focus,
input.submit.btn_secondaire:hover,
input.submit.btn_secondaire:focus,
input.reset.btn_secondaire:hover,
input.reset.btn_secondaire:focus,
button.btn_secondaire:hover,
button.btn_secondaire:focus {
	background-color: var(--spip-btn-color-second-hover-bg);
	border-color: var(--spip-btn-color-second-hover-border);
	color: var(--spip-btn-color-second-hover-text);
}
.btn_secondaire:active,
input.submit.btn_secondaire:active,
input.reset.btn_secondaire:active,
button.btn_secondaire:active {
	background-color: var(--spip-btn-color-second-active-bg);
	border-color: var(--spip-btn-color-second-active-border);
	color: var(--spip-btn-color-second-active-text);
}

/**
 * Variante link : boutons affichés comme un lien
 */
.btn_link,
input.submit.btn_link,
input.reset.btn_link,
button.btn_link {
	background-color: transparent;
	border-color: transparent;
	color: var(--spip-btn-color-link-text);
}
.btn_link:hover,
.btn_link:focus,
.btn_link:active,
.btn_link.spip_out:hover,
.btn_link.spip_out:focus,
.btn_link.spip_out:active,
input.submit.btn_link:hover,
input.submit.btn_link:focus,
input.submit.btn_link:active,
input.reset.btn_link:hover,
input.reset.btn_link:focus,
input.reset.btn_link:active,
button.btn_link:hover,
button.btn_link:focus,
button.btn_link:active {
	background-color: transparent;
	border-color: transparent;
	color: var(--spip-btn-color-link-hover-text);
}

/**
 * Variante actif : idem pour tous les états (survol et cie).
 */
.btn_on,
input.submit.btn_on,
input.reset.btn_on,
button.btn_on,
.btn_on:hover,
input.submit.btn_on:hover,
input.reset.btn_on:hover,
button.btn_on:hover,
.btn_on:focus,
input.submit.btn_on:focus,
input.reset.btn_on:focus,
button.btn_on:focus,
.btn_on:active,
input.submit.btn_on:active,
input.reset.btn_on:active,
button.btn_on:active {
	background-color: var(--spip-btn-color-on-bg);
	border-color: var(--spip-btn-color-on-border);
	color: var(--spip-btn-color-on-text);
	border-bottom-color: var(--spip-btn-color-border-accent);
}

/**
 * Variante inactif
 */
.btn_off,
input.submit.btn_off,
input.reset.btn_off,
button.btn_off {
	background-color: var(--spip-btn-color-off-bg);
	border-color: var(--spip-btn-color-off-border);
	color: var(--spip-btn-color-off-text);
	border-bottom-color: var(--spip-btn-color-border-accent);
}
.btn_off:hover,
.btn_off:focus,
input.submit.btn_off:hover,
input.submit.btn_off:focus,
input.reset.btn_off:hover,
button.btn_off:hover,
button.btn_off:focus {
	background-color: var(--spip-btn-color-off-hover-bg);
	border-color: var(--spip-btn-color-off-hover-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-off-hover-text);
}
.btn_off:active,
input.submit.btn_off:active,
input.reset.btn_off:active,
button.btn_off:active {
	background-color: var(--spip-btn-color-off-active-bg);
	border-color: var(--spip-btn-color-off-active-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-off-active-text);
}

/**
 * Variante inverse : couleurs inversées (blanc)
 */
.btn_inverse,
input.submit.btn_inverse,
input.reset.btn_inverse,
button.btn_inverse {
	background-color: var(--spip-btn-color-inverse-bg);
	color: var(--spip-btn-color-inverse-text);
	border-color: var(--spip-btn-color-inverse-border);
}
.btn_inverse.btn_secondaire,
input.submit.btn_inverse.btn_secondaire,
input.reset.btn_inverse.btn_secondaire,
button.btn_inverse.btn_secondaire {
	color: var(--spip-btn-color-inverse-border);
	background-color: transparent;
}
.btn_inverse.btn_link,
input.submit.btn_inverse.btn_link,
input.reset.btn_inverse.btn_link,
button.btn_inverse.btn_link {
	color: var(--spip-btn-color-inverse-border);
	background-color: transparent;
	border-color: transparent;
}
.btn_inverse:hover,
.btn_inverse:focus,
input.submit.btn_inverse:hover,
input.submit.btn_inverse:focus,
input.reset.btn_inverse:hover,
input.reset.btn_inverse:focus,
button.btn_inverse:hover,
button.btn_inverse:focus {
	background-color: var(--spip-btn-color-inverse-hover-bg);
	color: var(--spip-btn-color-inverse-hover-text);
	border-color: var(--spip-btn-color-inverse-hover-border);
}
.btn_inverse:active,
input.submit.btn_inverse:active,
input.reset.btn_inverse:active,
button.btn_inverse:active {
	background-color: var(--spip-btn-color-inverse-active-bg);
	color: var(--spip-btn-color-inverse-active-text);
	border-color: var(--spip-btn-color-inverse-active-border);
}

/**
 * Variante bloc : pleine largeur
 */
.btn_bloc,
input.submit.btn_bloc,
input.reset.btn_bloc,
.formulaire_spip input.submit.btn_bloc, /* pour avoir précédence sur les règles de forms.css */
.formulaire_spip input.reset.btn_bloc, /* idem */
button.btn_bloc {
	display: flex;
	width: 100%;
	justify-content: center;
	text-align: center;
}
/* Pour les boutons d\'actions il faut ajouter *en plus* la classe bloc sur le formulaire */
.bouton_action_post.bloc {
	display: flex;
}

/**
 * Variante désactivé
 */
.btn_desactive,
input.submit.btn_desactive,
input.reset.btn_desactive,
button.btn_desactive {
	opacity: 0.66;
}

/**
 * Variante danger (voir aussi dans icons.css)
 */
.btn_danger,
.btn.danger, /* support temporaire des vieux boutons d\'action */
input.submit.btn_danger,
input.reset.btn_danger,
button.btn_danger {
	background-color: transparent;
	border-color: transparent transparent var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-black);
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'rayures-sup.svg')) .
'");
	text-shadow: 0 0 0.25em white, 0 0 0.5em white, 0 0 1em white; /* Lisibilité */
}
.btn_danger:hover,
.btn_danger:focus,
.btn.danger:hover,
.btn.danger:focus,
input.submit.btn_danger:hover,
input.submit.btn_danger:focus,
input.reset.btn_danger:hover,
input.reset.btn_danger:focus,
button.btn_danger:hover,
button.btn_danger:focus {
	background-color: transparent;
	border-color: transparent transparent var(--spip-btn-color-border-accent);
	color: hsl(0, 100%, 45%);
}

/**
 * Variantes de tailles
 * Ajuste de la police, des marges, etc.
 */
' .
BOUCLE_tailleshtml_6258ba2503dc179eb6a2d8e5c667844a($Cache, $Pile, $doublons, $Numrows, $SP) .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '/**/') :
		'') .
'


/**
 * ================
 * 4. Liens boutons
 * ================
 *
 * Markup :
 * <a class="bouton [variante]">…</a>
 */
.btn {}
/* Garder la couleur de base pour les boutons liens externes */
.btn[rel=external],
.btn.spip_out {
	color: inherit;
}


/**
 * ==============================
 * 5. Boutons de formulaires spip
 * ==============================
 *
 * Markup :
 *
 * <form class="formulaire_spip">
 *   <input type="submit" class="submit [variante]" value="Valider">
 *   <button type="submit" class="[variante]">Valider</button>
 * </form>
 */

.formulaire_spip .boutons .btn,
.formulaire_spip .boutons input.submit,
.formulaire_spip .boutons input.reset,
.formulaire_spip .boutons button,
.formulaire_spip .boutons .groupe-btns,
.act .bouton_action_post {
	margin-bottom: 0;
}


/**
 * ===================
 * 6. Boutons d\'action
 * ===================
 *
 * Markup :
 *
 * <form class="bouton_action_post [variante]">
 *   <div><button class="submit">Action</button></div>
 * </form>
 */

.bouton_action_post {
	display: inline-flex;
	vertical-align: middle;
}
.bouton_action_post.bloc div {
	flex: 1 1 auto;
}

/* Dans le footer d\'une boîte */
.box__footer .bouton_action_post {
	margin-bottom: 0;
}

/* Fix bouton d\'action + classe .icone : combinaison obsolète à ne plus utiliser */
.bouton_action_post.icone {
	display: inline-flex !important;
	padding: 0 !important;
	background: none !important;
}
.bouton_action_post.icone b,
.box .bouton_action_post.icone b,
.btn.icone b {
	font-size: inherit !important;
	font-weight: inherit !important;
	line-height: inherit !important;
	text-shadow: inherit !important;
	color: inherit !important;
	margin: 0 !important;
}
.bouton_action_post.icone .icone-image img {
	max-height: 100%;
}

/* Ajustements pour le filtre |bouton_action_horizontal */
.bouton_action_post .icone-fonction:after {
	background-position: bottom 0 right 0;
}
.bouton_action_post .icone-fonction.icone-fonction-new:after {
	background-position: top 0 right 0;
}

/**
 * =====================
 * 7. Groupes de boutons
 * =====================
 *
 * Markup :
 *
 * <div class="groupe-btns">
 *   <a class="btn">…</a>
 *   <a class="btn">…</a>
 * </div>
 */

.groupe-btns {
	display: inline-flex;
	flex-flow: row nowrap;
	margin-bottom: var(--spip-btn-margin);
}
.groupe-btns .btn,
.groupe-btns .bouton_action_post,
.groupe-btns input.submit,
.groupe-btns input.reset,
.groupe-btns button {
	flex: 0 1 auto;
	margin: 0;
}
.groupe-btns .bouton_action_post .submit {
	margin: 0;
}
/* Ne garder l\'arrondi qu\'aux extrémités */
.groupe-btns:not(.groupe-btns_vertical) .btn:not(:last-child):not(:only-child),
.groupe-btns:not(.groupe-btns_vertical) input.submit:not(:last-child):not(:only-child),
.groupe-btns:not(.groupe-btns_vertical) input.reset:not(:last-child):not(:only-child),
.groupe-btns:not(.groupe-btns_vertical) > button:not(:last-child):not(:only-child),
.groupe-btns:not(.groupe-btns_vertical) .bouton_action_post:not(:last-child):not(:only-child) .submit {
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
}
.groupe-btns:not(.groupe-btns_vertical) .btn:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) input.submit:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) input.reset:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) > button:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) .bouton_action_post:not(:first-child) .submit {
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
}
/* Bordures pour séparer */
.groupe-btns:not(.groupe-btns_vertical) .btn:not(:first-child):not(.btn_secondaire),
.groupe-btns:not(.groupe-btns_vertical) input.submit:not(:first-child):not(.btn_secondaire),
.groupe-btns:not(.groupe-btns_vertical) input.reset:not(:first-child):not(.btn_secondaire),
.groupe-btns:not(.groupe-btns_vertical) > button:not(:first-child):not(.btn_secondaire),
.groupe-btns:not(.groupe-btns_vertical) .bouton_action_post:not(:first-child):not(.btn_secondaire) .submit {
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-color: var(--spip-btn-color-border-accent) !important;
}
.groupe-btns:not(.groupe-btns_vertical) .btn:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) input.submit:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) input.reset:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) > button:not(:first-child),
.groupe-btns:not(.groupe-btns_vertical) .bouton_action_post:not(:first-child) .submit {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': -1px; /* bordure haut par dessus le bouton précédent */
}
.groupe-btns:not(.groupe-btns_vertical) .btn_secondaire:not(:last-child),
.groupe-btns:not(.groupe-btns_vertical) input.submit.btn_secondaire:not(:last-child),
.groupe-btns:not(.groupe-btns_vertical) input.reset.btn_secondaire:not(.last-child),
.groupe-btns:not(.groupe-btns_vertical) > button.btn_secondaire:not(:last-child),
.groupe-btns:not(.groupe-btns_vertical) .bouton_action_post.btn_secondaire:not(:last-child) .submit {
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-color: transparent;
}

/* variante vertical */
.groupe-btns.groupe-btns_vertical {
	flex-flow: column wrap;
	vertical-align: middle;
}
.groupe-btns.groupe-btns_vertical .btn:not(:last-child),
.groupe-btns.groupe-btns_vertical input.submit:not(:last-child),
.groupe-btns.groupe-btns_vertical input.reset:not(:last-child),
.groupe-btns.groupe-btns_vertical > button.submit:not(:last-child),
.groupe-btns.groupe-btns_vertical .bouton_action_post:not(:last-child) .submit {
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
	margin-bottom: 0;
}
.groupe-btns.groupe-btns_vertical .btn:not(:first-child),
.groupe-btns.groupe-btns_vertical input.submit:not(:first-child),
.groupe-btns.groupe-btns_vertical input.reset:not(:first-child),
.groupe-btns.groupe-btns_vertical > button:not(:first-child),
.groupe-btns.groupe-btns_vertical .bouton_action_post:not(:first-child) .submit {
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
}
.groupe-btns.groupe-btns_vertical .btn:not(:first-child):not(.btn_secondaire),
.groupe-btns.groupe-btns_vertical input.submit:not(:first-child):not(.btn_secondaire),
.groupe-btns.groupe-btns_vertical input.reset:not(:first-child):not(.btn_secondaire),
.groupe-btns.groupe-btns_vertical > button:not(:first-child):not(.btn_secondaire),
.groupe-btns.groupe-btns_vertical .bouton_action_post:not(:first-child):not(.btn_secondaire) .submit {
	border-top-color: var(--spip-btn-color-border-accent);
	margin-top: -1px; /* bordure haut par dessus le bouton précédent */
}
.groupe-btns.groupe-btns_vertical .btn_secondaire:not(:last-child),
.groupe-btns.groupe-btns_vertical input.submit.btn_secondaire:not(:last-child),
.groupe-btns.groupe-btns_vertical input.reset.btn_secondaire:not(:last-child),
.groupe-btns.groupe-btns_vertical > button.btn_secondaire:not(:last-child),
.groupe-btns.groupe-btns_vertical .bouton_action_post.btn_secondaire:not(:last-child) .submit {
	border-bottom: 0;
}

/* Variante bloc */
.groupe-btns.groupe-btns_bloc,
.groupe-btns.groupe-btns_bloc .bouton_action_post div {
	display: flex;
}
.groupe-btns.groupe-btns_bloc .btn,
.groupe-btns.groupe-btns_bloc .bouton_action_post,
.groupe-btns.groupe-btns_bloc .bouton_action_post div ,
.groupe-btns.groupe-btns_bloc .bouton_action_post .submit,
.groupe-btns.groupe-btns_bloc input.submit,
.groupe-btns.groupe-btns_bloc input.reset,
.groupe-btns.groupe-btns_bloc button {
	flex: 1 1 auto;
}

/* Variante groupe de boutons menu.
   Les boutons reprennent l\'apparence de boutons inactifs par défaut,
   sauf ceux qui ont la classe .btn_on, ou les secondaires / liens */
.groupe-btns_menu .btn:not(.btn_on):not(.btn_secondaire):not(.btn_link),
.groupe-btns_menu input.submit:not(.btn_on):not(.btn_secondaire):not(.btn_link),
.groupe-btns_menu input.reset:not(.btn_on):not(.btn_secondaire):not(.btn_link),
.groupe-btns_menu button:not(.btn_on):not(.btn_secondaire):not(.btn_link) {
	background-color: var(--spip-btn-color-off-bg);
	border-color: var(--spip-btn-color-off-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-off-text);
}
.groupe-btns_menu .btn:not(.btn_on):not(.btn_secondaire):not(.btn_link):hover,
.groupe-btns_menu .btn:not(.btn_on):not(.btn_secondaire):not(.btn_link):focus,
.groupe-btns_menu input.submit:not(.btn_on):not(.btn_secondaire):not(.btn_link):hover,
.groupe-btns_menu input.submit:not(.btn_on):not(.btn_secondaire):not(.btn_link):focus,
.groupe-btns_menu input.reset:not(.btn_on):not(.btn_secondaire):not(.btn_link):hover,
.groupe-btns_menu input.reset:not(.btn_on):not(.btn_secondaire):not(.btn_link):focus,
.groupe-btns_menu button:not(.btn_on):not(.btn_secondaire):not(.btn_link):hover,
.groupe-btns_menu button:not(.btn_on):not(.btn_secondaire):not(.btn_link):focus {
	background-color: var(--spip-btn-color-off-hover-bg);
	border-color: var(--spip-btn-color-off-hover-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-off-hover-text);
}
.groupe-btns_menu .btn:not(.btn_on):not(.btn_secondaire):not(.btn_link):active,
.groupe-btns_menu input.submit:not(.btn_on):not(.btn_secondaire):not(.btn_link):active,
.groupe-btns_menu input.reset:not(.btn_on):not(.btn_secondaire):not(.btn_link):active,
.groupe-btns_menu button:not(.btn_on):not(.btn_secondaire):not(.btn_link):active {
	background-color: var(--spip-btn-color-off-active-bg);
	border-color: var(--spip-btn-color-off-active-border);
	border-bottom-color: var(--spip-btn-color-border-accent);
	color: var(--spip-btn-color-off-active-text);
}

/* Si boutons de formulaire ou pied d\'une boîte : bloc et alignement */
.groupe-btns.act,
.groupe-btns.boutons {
	display: flex;
	justify-content: flex-end;
}


/**
 * ======================
 * 8. Boutons avec icônes
 * ======================
 *
 * Markup :
 *
 * <a class="btn sp-icone sp-icone_ajouter">Bouton</a>
 * <a class="btn"><svg class="sp-icon sp-icone_ajouter"></svg> Bouton</a>
 */

/* Base */
.btn.sp-icone:before,
.btn .sp-icone,
button.sp-icone:before,
button .sp-icone,
input.submit.sp-icone:before,
input.reset.sp-icone:before,
.bouton_action_post .icone-image {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': var(--spip-btn-gutter); /* fallback */
	margin-inline-end: var(--spip-btn-gutter);
}

/* Bouton avec uniquement une icône, sans label */
.btn_icone {
	padding-left: var(--spip-btn-padding-x);
	padding-right: var(--spip-btn-padding-x);
}
.btn_icone.btn_mini {
	padding-left: var(--spip-btn-padding-x-mini);
	padding-right: var(--spip-btn-padding-x-mini);
}
.btn_icone.btn_large {
	padding-left: var(--large-spip-btn-padding-x-large);
	padding-right: var(--spip-btn-padding-x-large);
}
.btn_icone.sp-icone:before,
.btn_icone .sp-icone {
	margin: 0;
}

/* Icône après le texte */
.btn_icone_after.sp-icone:before,
.btn_icone_after .sp-icone {
	order: 2;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': var(--spip-btn-gutter); /* fallback */
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0; /* fallback */
	margin-inline-start: var(--spip-btn-gutter);
	margin-inline-end: 0;
}

/**
 * ===========================
 * 9. Rustines et déprécations
 * ===========================
 */

/* Formulaire editer_liens
 * Dans les listes, les boutons d\'ajout et de retrait doivent avoir les classes .btn_mini et .btn_link
 * En leur absence, on @extend .btn_mini à la main en fallback */

.liste-objets-associer button:not(.btn_mini),
.liste-objets-lies button:not(.btn_mini) {
	font-size: var(--spip-btn-font-size-mini);
	padding: var(--spip-btn-padding-y-mini) var(--spip-btn-padding-x-mini);
	border-radius: var(--spip-btn-border-radius-mini);
	margin-bottom: var(--spip-btn-margin-mini);
}
');

	return analyse_resultat_skel('html_6258ba2503dc179eb6a2d8e5c667844a', $Cache, $page, '../prive/themes/spip/boutons.css.html');
}
