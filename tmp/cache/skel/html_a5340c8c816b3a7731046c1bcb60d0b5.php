<?php

/*
 * Squelette : ../plugins-dist/revisions/prive/style_prive_plugin_revisions.html
 * Date :      Tue, 03 Dec 2024 10:08:52 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:54 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/revisions/prive/style_prive_plugin_revisions.html
// Temps de compilation total: 0.242 ms
//

function html_a5340c8c816b3a7731046c1bcb60d0b5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
'/* * Comparaison d articles */
.diff-para-deplace { background: #e8e8ff; }
.diff-para-ajoute { background: #d0ffc0; color: #000; }
.diff-para-supprime { background: #ffd0c0; color: #904040; text-decoration: line-through; }
p>.diff-para-deplace,p>.diff-para-ajoute,p>.diff-para-supprime {display:block;}

.diff-deplace { background: #e8e8ff; }
.diff-ajoute { background: #d0ffc0; }
.diff-supprime { background: #ffd0c0; color: #802020; text-decoration: line-through; }
.diff-para-deplace .diff-ajoute { background: #b8ffb8; border: 1px solid #808080; }
.diff-para-deplace .diff-supprime { background: #ffb8b8; border: 1px solid #808080; }
.diff-para-deplace .diff-deplace { background: #b8b8ff; border: 1px solid #808080; }

/* liste de versions */
.liste-objets.versions tr > .type {width:30px;}
.liste-objets.versions tr > .diff {width:30px;}
.liste-objets.versions blockquote {margin-left:0;margin-right:0;}
.liste-objets.versions .caption {background-image:url("' .
retablir_echappements_modeles(chemin_image((string)'revision-24.png')) .
'");padding-inline-start:30px;background-position:var(--spip-left) center;}

.revision #wysiwyg .contenu_id_rubrique {display:none;}
.revision #wysiwyg .jointure {display:block;margin:1em 0;}
.revision #wysiwyg .jointure .label {display:block;font-weight:bold;}


.formulaire_reviser .editer_id_version .choix {margin: 0 -5px;}
.formulaire_reviser table.spip.diff-versions {font-size: 0.85em;width: 100%;max-width: 100%;}
.formulaire_reviser table,.formulaire_reviser table tr,.formulaire_reviser table td {border-left:0;border-right:0;}
.formulaire_reviser table .version,.formulaire_reviser table .diff {padding:0;}
.fiche_objet_diff .hd {border-bottom:1px solid #ddd;}
');

	return analyse_resultat_skel('html_a5340c8c816b3a7731046c1bcb60d0b5', $Cache, $page, '../plugins-dist/revisions/prive/style_prive_plugin_revisions.html');
}
