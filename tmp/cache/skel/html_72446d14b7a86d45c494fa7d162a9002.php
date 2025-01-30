<?php

/*
 * Squelette : ../prive/themes/spip/theme.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/theme.css.html
// Temps de compilation total: 0.868 ms
//

function html_72446d14b7a86d45c494fa7d162a9002($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_claire', null), 'edf3fe'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_foncee', null), '3874b0'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'rtl'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','','_rtl'))))) .
'/** Habillage tire du plugin details_interface d\'Arno* *******/

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'lien'] = (($t2 = strval((interdire_scripts(filtrer('couleur_foncer',entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true),'0.25')))))!=='' ?
			('#' . $t2) :
			''))) .
'

body {
	font-family: \'Lucida Grande\', Tahoma, Ubuntu, Arial, Verdana, sans-serif;
	background-color: #f9f9f9;
	background-color: hsl(var(--spip-color-theme--h), 3%, 97%);
}


/* Fiche objet */
#contenu .fiche_objet > .box__header {
	line-height: 1.2;
	border-bottom: 0;
	padding-bottom: calc(var(--spip-box-spacing-y) / 2);
}
#contenu .fiche_objet > .box__header h1 {
	margin-bottom: 0.25em;
	line-height: inherit;
}
#contenu .fiche_objet > .box__header h1 .rang {
	opacity: 0.7;
}

#contenu .fiche_objet > .box__header h1,
#contenu .fiche_objet > .box__header .surtitre,
#contenu .fiche_objet > .box__header .soustitre {
	color: var(--spip-color-theme-dark);
	font-weight: normal;
	overflow-wrap: break-word;
	/* on laisse la place à la fin pour l\'icône modifier */
	max-width: calc(100% - calc(var(--spip-icon-btn-width) + var(--spip-box-spacing-x)));
}


#contenu .fiche_objet > .box__header .surtitre,
#contenu .fiche_objet > .box__header .soustitre {
	line-height: inherit;
	opacity: 0.7;
	font-size: 1.6em;
}
.box.fiche_objet > .box__body {
	padding-top: calc(var(--spip-box-spacing-y) / 2);
}
#contenu .fiche_objet .editer_urls {margin: 10px 0; }
#contenu .fiche_objet .editer_urls .formulaire_editer_url_objet {margin: 10px -15px 0px -15px; clear: both;}
#contenu .fiche_objet .editer_urls .formulaire_editer_url_objet {border-radius:0px;position:relative;}
#contenu .fiche_objet .editer_urls .boutons {border-radius:0px;position:relative;}

#contenu .fiche_objet {margin-bottom: 1em;}

/* Boîte articles proposés */
#contenu .fiche_objet .box.propose {
	background-color: var(--spip-color-theme-light);
}

h1 {font-size: 2em;line-height: 125%;}
.h1 {font-size: 2em;line-height: 125%;}

.en-edition {line-height: 120%;}

#chemin {}

.lat #documents_joints {border-top:0}
.lat #documents_joints .item {border-radius:5px;}

.fiche_objet #wysiwyg {padding: 0}
#wysiwyg .champ,.preview {font-size: 1.2em;line-height: 145%;font-family: Cambria, Georgia, \'Times New Roman\', Times, serif;hyphens:auto;}
#wysiwyg .champ .label, #wysiwyg .champ label {text-align: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';}
#wysiwyg p,.preview p {margin: 0.8em 0;}
#wysiwyg h3.spip, .preview h3.spip {margin-top: 2.5em;margin-bottom: 1.8em;font-family: \'Lucida Grande\', Tahoma, Ubuntu, Arial, Verdana, sans-serif;font-weight: normal;}
#wysiwyg .spip_note_ref,.preview .spip_note_ref {vertical-align: super;font-size: 80%;font-family: \'Lucida Grande\', Tahoma, Ubuntu, Arial, Verdana, sans-serif;}

/* Tous les champs sur fond gris qui collent aux bords de la boîte */
#wysiwyg .contenu_descriptif,
#wysiwyg .contenu_bio {
	border: 0;
	margin-left: calc(var(--spip-box-spacing-x) * -1); /* = padding de fiche_objet */
	margin-right: calc(var(--spip-box-spacing-x) * -1); /* = padding de fiche_objet */
	padding: var(--spip-box-spacing-y) var(--spip-box-spacing-x);
	background-color: var(--spip-color-gray-lightest);
}

#wysiwyg .contenu_descriptif .label {font-family: \'Lucida Grande\', Tahoma, Ubuntu, Arial, Verdana, sans-serif;font-size: 0.8em;display: block;margin-bottom: 0.5em;color: #999;font-weight: normal;}
#wysiwyg .contenu_descriptif p {margin: 0.5em 0em;}
#wysiwyg .contenu_bio .label {font-family: \'Lucida Grande\', Tahoma, Ubuntu, Arial, Verdana, sans-serif;font-size: 0.8em;display: block;margin-bottom: 0.5em;color: #999;font-weight: normal;}
#wysiwyg .contenu_bio p {margin: 0.5em 0em;}
#wysiwyg .contenu_nom_site {border: 0;background-color: #eee;margin-left: -15px;margin-right: -15px;padding: 10px 15px;}
#wysiwyg .contenu_nom_site .label {font-family: \'Lucida Grande\', Tahoma, Ubuntu, Arial, Verdana, sans-serif;font-size: 0.8em;display: block;margin-bottom: 0.5em;color: #999;font-weight: normal;}
#wysiwyg .contenu_nom_site p {margin: 0.5em 0em;}
#wysiwyg .contenu_nom_site .label {display: inline-block;padding: 0;margin: 0;}
#wysiwyg .contenu_nom_site .nom_site {display: inline-block;padding: 0;margin: 0;}
#wysiwyg .contenu_notes {background-color: transparent;border-top: 0px solid #ccc;background-color: #eee;margin-left: -15px;margin-right: -15px;padding: 10px 15px;}
#wysiwyg .contenu_notes .label {font-family: \'Lucida Grande\', Tahoma, Ubuntu, Arial, Verdana, sans-serif;display: block;margin-bottom: 0.5em;color: #999;font-weight: normal;}
#wysiwyg .contenu_notes .notes p {margin: 0.5em 0;}
#wysiwyg .contenu_notes .notes p .spip_note_ref {margin-left: -28px;}

#contenu .preview h1 {color: inherit;}

#text_area {height: 450px;padding: 10px;outline: none;border-top-left-radius:0px;border-top-right-radius:0px;position:relative;}

.logo_du_site {text-align: center;}

.en-edition {font-size: 95%;line-height: 120%;}
.en-edition button.submit {background-color: transparent;border: 0;color: red;cursor: pointer; padding:0}
.en-edition .bd {padding: 0;padding-bottom: 5px;}
.en-edition .bd .liste-items {border-top: 1px solid white;}
.en-edition .bd .liste-items li {border-bottom: 1px solid white;padding-left: 10px;padding-right: 10px;}

#portfolios h3 {padding: 7px 10px;background-color: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true))) .
';color: white;border-top-left-radius:5px;border-top-right-radius:5px;position:relative;}

p.actions.right {
	float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';
	clear: none;
	margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 1em;
}
');

	return analyse_resultat_skel('html_72446d14b7a86d45c494fa7d162a9002', $Cache, $page, '../prive/themes/spip/theme.css.html');
}
