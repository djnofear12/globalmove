<?php

/*
 * Squelette : ../prive/themes/spip/grids.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:47 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/grids.css.html
// Temps de compilation total: 0.294 ms
//

function html_f3c99e9de006f2dd2fcec14d1f964776($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>') .
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
'/* **************** GRIDS ***************** */
.line, .lastUnit {overflow: hidden; }
.unit{float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';}
.unitExt{float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';}
.size1of1{float:none;}
.size1of2{width:50%;}
.size1of3{width:33.33333%;}
.size2of3{width:66.66666%;}
.size1of4{width:25%;}
.size3of4{width:75%;}
.size1of5{width:20%;}
.size2of5{width:40%;}
.size3of5{width:60%;}
.size4of5{width:80%;}
.lastUnit {float:none;width:auto;}
/* extending grids to allow a unit that takes the width of its content */
.media{width:auto;}');

	return analyse_resultat_skel('html_f3c99e9de006f2dd2fcec14d1f964776', $Cache, $page, '../prive/themes/spip/grids.css.html');
}
