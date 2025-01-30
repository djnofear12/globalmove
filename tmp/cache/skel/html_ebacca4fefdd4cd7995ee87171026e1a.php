<?php

/*
 * Squelette : ../plugins-dist/svp/prive/style_prive_plugin_svp.html
 * Date :      Tue, 03 Dec 2024 10:08:54 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/svp/prive/style_prive_plugin_svp.html
// Temps de compilation total: 0.693 ms
//

function html_ebacca4fefdd4cd7995ee87171026e1a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
	--svp-pluginlist-iconsize: 18px;
	--svp-pluginlist-spacing-x: 0.75em;
}
@media (min-width: 500px) {
	:root {
		--svp-pluginlist-iconsize: 32px;
	}
}

/* **************** EXEC ADMIN PLUGIN ***************** */

.admin_plugin .actions_multiples .groupe-btns.cocher {
	margin-bottom: calc(var(--spip-form-spacing-y) / 2);
}
.admin_plugin .actions_multiples .action {
	width: 30%;
}

/**
 * Liste des plugins
 * Nb : incluse dans un formulaire
 */

.liste-plugins .liste.plugins,
.liste-plugins .liste.plugins .liste-items {
	margin-bottom: 0;
}
/* Coller la liste aux bords du form */
.liste-plugins .liste-items {
	margin-left: calc(var(--spip-form-spacing-x) * -1);
	margin-right: calc(var(--spip-form-spacing-x) * -1);
}

/* Item + états */
.liste-plugins .liste-items .item {
	padding: calc(var(--spip-form-spacing-y) / 2) var(--spip-form-spacing-x);
	overflow: initial;
	clear: both;
	display:flex;
	flex-direction: row;
	flex-wrap: wrap;
}
.liste-plugins .item .col-check {
	width: 1em; /* un peu arbitraire */
	text-align: var(--spip-left);
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': var(--svp-pluginlist-spacing-x);
	align-self: center;
}
.liste-plugins .item .col-icon {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': var(--svp-pluginlist-spacing-x);
	align-self: center;
}
.liste-plugins .item .resume {
	align-self: center;
	flex: 1 1 min-content;
}
.liste-plugins .item .messages,
.liste-plugins .item .footer,
.liste-plugins .item .details {
	flex-basis: 100%;
	flex-wrap: wrap;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(1em + var(--svp-pluginlist-iconsize) + (2 * var(--svp-pluginlist-spacing-x)));
}
.liste-plugins .item .footer {
	flex-wrap: wrap;
}

@media (min-width: 500px) {
	.liste-plugins .item .messages,
	.liste-plugins .item .footer,
	.liste-plugins .item .details {
		flex-wrap: nowrap;
	}
}

.liste-plugins .item:last-child {
	border: none;
}

.liste-plugins .item.actif,
.liste-plugins .item.verrou {
	background: #ffffff;
}
.liste-plugins .distants .item,
.liste-plugins .item.inactif {
	background: #f6f6f6;
}
.liste-plugins .liste-items .item.on {
	background: #f3f3f3;
}
.liste-plugins .item:hover {
	background:#eee !important;
}
.liste-plugins .liste-items .item.disabled {
	opacity: 1;
}
.liste-plugins .liste-items .item.attente {
    background-color:#FBE3E4;
}

/* Case à cocher */
.liste-plugins .liste-items .item .check {
	font-size: 1em;
	position: static;
	padding:0 0 2px 0;
	margin:0;
}

/* Résumé : logo, nom, version, slogan */
.liste-plugins .liste-items .item .resume {
	min-height: initial;
}
.liste-plugins .liste-items .item .icon {
	position: static;
	float: none;
	margin: 0px;
	width: var(--svp-pluginlist-iconsize);
	height: auto;
}
.liste-plugins .liste-items .item .icon img {
	width: 100%;
	max-width: var(--svp-pluginlist-iconsize);
}

.liste-plugins .label-etat {
	border:2px solid #ccc;
	background-color: #fff3;
	padding:0 5px;
	border-radius: 3px;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': .25em;
	cursor: default;
}
.label-etat.label-etat--actif {
	border-color: #78a327;
}
.label-etat.label-etat--verrouille {
	border-color: #e77b00;
}
.label-etat.label-etat--obsolete {
	border-color: #444;
	background-color: #444;
	color: white;
}

/* Messages */
.liste-plugins .messages {}
.liste-plugins .svp_message {
	display: block;
	font-weight: 500;
	font-size: 0.9em;
}
.liste-plugins .svp_message.important {
	color: #8A1F11;
}
.liste-plugins .svp_message.maj {
	color: #42a145;
}
.liste-plugins .svp_message.maj.maj_x {
	color: #ec681c;
}

/* Footer */
.liste-plugins .footer {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	margin-top: .25em;
}

/* Footer : liens */
.liste-plugins .footer .links {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': calc(var(--spip-btn-padding-x) * -1);
	margin-botom: 0;
}

/* Footer : boutons d\'actions */
.liste-plugins .liste-items .item .actions {
	visibility: visible;
	display: flex;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': auto; /* s\'assurer que ce soit à droite */
}
.liste-plugins .actions > .btn {
	margin: 0;
}
.liste-plugins .actions > .btn:last-of-type {
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': 0;
}
.liste-plugins .actions > .btn:last-of-type + .submit,
.liste-plugins .actions > .btn:last-of-type + .dropdown {
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 0.5em;
}
.liste-plugins .btn_config {
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': 0.5em;
}

/* Footer : Dropdown Bootstrap */
.liste-plugins .dropdown {
	display: flex;
}
.liste-plugins .dropdown-toggle {
	margin: 0;
}
.liste-plugins .dropdown-menu {
	padding: 0;
}
.liste-plugins .dropdown-divider {
	margin: 0;
}
.liste-plugins input.dropdown-item {
	margin-bottom: 0;
	width: 100%;
	text-align: var(--spip-css-left);
}

/* Détails (visibles au clic) */
.liste-plugins .details {
	clear: both;
	margin-bottom: 1em;
	margin-top:1em;
	padding-top:1em;
	border-top: 1px solid #ddd;
}
.liste-plugins .liste-items .item .details dl {
	float: none;
	width: auto;
	margin-bottom: 0;
}
.liste-plugins .liste-items .item .details dl.tech {
	float: none;
	clear: both;
	width: auto;
	text-align: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';
	font-size: 1em;
	word-wrap: break-word;
}
.liste-plugins .liste-items .item .details dl dt {
	float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';
	padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': 0.5em;
}
.liste-plugins .liste-items .item .details dd {
	margin-bottom: 0;
}
.liste-plugins .details .description .desc {
	margin-bottom: 10px;
}

/* Bouton afficher incompatibles (avant la liste) */
#afficher_incompatibles {
	float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';
	margin-bottom: 1em;
	margin-top: -.5em; /* compenser le paragraphe de présentation */
}


/**
 * Validation des actions par popin
 */
.box_mediabox #charger_plugin_confirm {
	font-size:110%;
	padding-bottom:65px;
}
.box_mediabox #charger_plugin_confirm .reponse_formulaire {
	margin-bottom:1em;
	line-height: 1.4em;
}
.box_mediabox #charger_plugin_confirm .boutons {
	font-size:120%;
	margin-top:.5em; margin-bottom:0;
	display:block;
	text-align:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';
	background: var(--spip-color-gray-lightest);
	position:absolute; left:0; bottom:0; width:100%;
}
.box_mediabox #charger_plugin_confirm .boutons .submit {
	margin-top:.5em;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
':.5em;
	margin-bottom:.5em;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':0;
}

/**
 * Présentation des actions effectuées
 */
.svp_retour .fail {
	color:#c30000;
}
.svp_retour ul {
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 0.5em;
}
.svp_retour li {
	list-style-type: square;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 0.5em;
}

.svp_plugins_toolbar {
	clear:both;
	background-color: var(--spip-box-sep-color);
	margin-left: calc(-1 * var(--spip-form-spacing-x));
  	margin-right: calc(-1 * var(--spip-form-spacing-x));
	margin-top: 0 !important;
	margin-bottom: var(--spip-form-spacing-y);
	padding: calc(var(--spip-form-spacing-y) / 2) var(--spip-form-spacing-x);
	font-size: 90%;

	display:flex;
	flex-direction: row;
	flex-wrap: wrap;
}
.svp_plugins_toolbar_filters {
	display:flex;
	flex-direction: row;
	margin-left: auto;
}

.svp_plugins_toolbar .groupe-btns_bloc {
	margin-bottom: 0;
}

.svp_plugins_toolbar_filters select {
	width: auto;
}

#dropdown_filter_type .dropdown-toggle {
	margin-bottom: 0;
}

input#filter_text {
	margin-right: .25em;
	width: 150px;
	border: 1px solid var(--spip-form-input-border-color);
  	border-radius: var(--spip-form-input-border-radius);
  	background-color: var(--spip-color-white);
	padding-left:.5em;
	padding-right:.5em;
}

.formulaire_admin_plugin > .titrem {
	align-items: baseline;
}
#svp_filters_reset {
	margin-left: .5em;
}

/* **************** EXEC PLUGIN ***************** */

/* Boite d\'infos */
#navigation .infos .numero  p.prefixe { font-size: 1.3em; text-transform: lowercase; }
#navigation .info .branches { margin-top: 0.5em; }
#navigation .info .actualite .liste-items { padding-top: 0.7em; border-top: 1px solid #eee; }
/* Contenu objet */
.plugin #wysiwyg .champ.contenu_texte .label { display: block; }
');

	return analyse_resultat_skel('html_ebacca4fefdd4cd7995ee87171026e1a', $Cache, $page, '../plugins-dist/svp/prive/style_prive_plugin_svp.html');
}
