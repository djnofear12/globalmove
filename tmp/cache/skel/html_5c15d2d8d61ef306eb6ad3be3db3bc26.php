<?php

/*
 * Squelette : ../plugins-dist/bigup/prive/style_prive_plugin_bigup.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/bigup/prive/style_prive_plugin_bigup.html
// Temps de compilation total: 0.131 ms
//

function html_5c15d2d8d61ef306eb6ad3be3db3bc26($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
		
/* Spécificités lorsqu\'utilisé dans la colonne #navigation du privé */
#navigation .bigup_fichiers .description {
	flex-wrap:wrap;
	align-items: center;
}
#navigation .bigup_fichiers .actions {
	text-align:center;
	margin:.5em 0 0;
	width:100%;
}
#navigation .bigup_fichiers .previsualisation {
	width:100%;
	margin:0 0 .5em;
}
#navigation .bigup_fichiers .previsualisation + .infos {
	text-align:center;
	flex-basis: 100%;
}
#navigation .bigup_fichiers .previsualisation + .infos .name,
#navigation .bigup_fichiers .previsualisation + .infos .size {
	display: none;
}
#navigation .editer_fichier_upload {
	min-height: 90px;
}

#navigation .dropfile {
	margin: -5px;
	padding: 10px 10px;
	text-align:center;
}
#navigation .dropfileor {
	display:block;
	margin: 5px 0;
}


/* Spécificités sur des formulaires pour utilisation dans l\'espace prive */
.formulaire_spip .dropfile {
	background: url("' .
retablir_echappements_modeles(chemin_image((string)'fond-imgs.png')) .
'") repeat center;
}

.formulaire_editer_logo .editer_logo_on {
	min-height: 90px;
	margin-top: -15px;
}
.formulaire_editer_logo .editer_logo_on label{
	margin-top: 15px;
}

.formulaire_joindre_document .editer_fichier_upload {
	margin-top: -15px;
}
.formulaire_joindre_document .editer_fichier_upload label{
	margin-top: 15px;
}
.formulaire_joindre_document .editer_fichier_upload .dropfile {
	padding: 20px 15px;
}



/*
 * Zones de dépot étendues
 */
#page {
	overflow: hidden;
	position: relative;
}

#chemin,#navigation,#extra {
	position: relative;
	z-index: 2;
}

/* décoration de base */
.bigup-extended-drop-zone {}
.bigup-extended-drop-zone::before { z-index: -1; }
.bigup-extended-drop-zone.drag-over::before {
	background: #ddd !important;
	border:5px #333 dashed !important;
	opacity: 0.5 !important;
	z-index: 0;
}

/* Cible de la zone de dépot étendue */
.drag-target {
	position: relative;
	z-index: 2000;
	border-color: transparent;
}
.drag-target::after {
	content:\'\';
	display: block;
	position: absolute;
	inset-inline-start: -2px;
	inset-inline-end: -2px;
	top:-2px;
	bottom: -2px;
	border:5px dashed var(--spip-color-theme);
}

/* Sans dépot étendue, le bloc extended correspond à la zone habituelle de bigup */
.formulaire_spip .editer.bigup-extended-drop-zone {
	position: relative;
}
.formulaire_spip .editer.bigup-extended-drop-zone::before {
	top:10px;
	bottom:10px;
	inset-inline-start: 10px;
	inset-inline-end: 10px;
	background: transparent;
	z-index: -1;
}
.formulaire_spip .editer.bigup-extended-drop-zone.drag-over::before {
	border:5px #333 dashed;
	opacity: 0.5;
	z-index: 0;
}

/* Cas de zone étendues particulières */
.formulaire_spip.bigup-extended-drop-zone::before,
#navigation.bigup-extended-drop-zone::before,
#contenu.bigup-extended-drop-zone::before {
	content: \'\';
	display: block;
	position: absolute;
}
/* Un formulaire SPIP conteneur */
.formulaire_spip.bigup-extended-drop-zone::before {
	top: -10px;
	bottom: -10px;
	inset-inline-start: -10px;
	inset-inline-end: -10px;
	border-radius: 20px;
}

/* Le bloc #contenu */
#contenu.bigup-extended-drop-zone::before {
	top:10px;
	bottom:10px;
	inset-inline-start: 10px;
	right: 10px;
	background: #fff;
	opacity: 0.01;
	border-radius: 40px;
}
#contenu.bigup-extended-drop-zone.drag-over::before {
	z-index: 3;
}

/* Le bloc #navigation */
#navigation.bigup-extended-drop-zone {
	position: relative;
	z-index: 5;
}
#navigation.bigup-extended-drop-zone::before {
	top: 0;
	bottom: 0;
	inset-inline-start: -50vw;
	inset-inline-end: -10px;
	background: #fff;
	opacity: 0.01;
	border-radius: 40px;
}
#navigation.bigup-extended-drop-zone.drag-over::before {
	z-index:6;
}');

	return analyse_resultat_skel('html_5c15d2d8d61ef306eb6ad3be3db3bc26', $Cache, $page, '../plugins-dist/bigup/prive/style_prive_plugin_bigup.html');
}
