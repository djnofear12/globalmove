<?php

/*
 * Squelette : ../plugins-dist/mots/prive/style_prive_plugin_mots.html
 * Date :      Tue, 03 Dec 2024 10:08:52 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/mots/prive/style_prive_plugin_mots.html
// Temps de compilation total: 1.201 ms
//

function html_b791a84e1d12f4086c7ccf6353c266bc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
'.mots .groupe_mots .groupe_mots-edit-24 { margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 30px; }
.mots .groupe_mots #wysiwyg { clear: none; }

.formulaire_editer_liens .associer_mot.obligatoire.nonvu {
	background-color:' .
retablir_echappements_modeles('#FFCDAF') .
';
}
.formulaire_editer_liens .associer_mot .bouton-inline {
	display: flex;
}
.formulaire_editer_liens .associer_mot .bouton-inline select.avec-bouton,
.formulaire_editer_liens .associer_mot .bouton-inline input.text {
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
'-radius: 0;
	border-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0;
}
.formulaire_editer_liens .associer_mot .bouton-inline .btn {
	border-bottom-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	border-top-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
'-radius: 0;
	flex: 0 0 auto;
}
.formulaire_editer_liens .associer_mot .submit {
	float: var(--spip-right);
	margin: 0;
}');

	return analyse_resultat_skel('html_b791a84e1d12f4086c7ccf6353c266bc', $Cache, $page, '../plugins-dist/mots/prive/style_prive_plugin_mots.html');
}
