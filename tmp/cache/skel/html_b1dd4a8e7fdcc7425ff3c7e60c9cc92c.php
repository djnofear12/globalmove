<?php

/*
 * Squelette : ../prive/themes/spip/code.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/code.css.html
// Temps de compilation total: 0.231 ms
//

function html_b1dd4a8e7fdcc7425ff3c7e60c9cc92c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette définit les styles des blocs de code de l\'espace privé.

	- spip_code (balise code, backtick simples et triples)
	- spip_cadre (balise cadre : textarea)

') :
		'') .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<style>') :
		'') .
'

.spip_code,
.spip_cadre {
	border: 1px solid hsl(var(--spip-color-theme--h), 10%, 85%);
	background-color: hsla(var(--spip-color-theme--h), 10%, 95%, .75);
	color: hsl(var(--spip-color-theme--h), 10%, 20%);
}

.spip_code {
	font-size:0.85em;
	border-radius: 0.125em;
	text-shadow: 0 1px 0 hsl(var(--spip-color-theme--h), 10%, 80%);
}

.spip_cadre {
	font-size: 1em;
	border-radius: 0.25em;
}

.spip_code.spip_code_inline {
	margin: 0 0.125em;
	padding: 0 0.125em;
}

.spip_code.spip_code_block,
.spip_cadre.spip_cadre_block {
	margin-bottom: var(--spip-margin-bottom);
	width: 100%;
	box-sizing:border-box;
	padding:0.75em;
	overflow: auto;
}

.precode {
	position:relative;
}

.spip_code.spip_code_block[data-language]::before,
.spip_cadre.spip_cadre_block[data-language]::before {
	position: absolute;
	top: 5px;
	right: 6px;
	content: attr(data-language);
	text-transform: lowercase;
	font-family: monospace;
	line-height: 1;
	font-size: 0.8rem;
	color: hsl(var(--spip-color-theme--h), 20%, 50%);
	text-shadow: none;
}
');

	return analyse_resultat_skel('html_b1dd4a8e7fdcc7425ff3c7e60c9cc92c', $Cache, $page, '../prive/themes/spip/code.css.html');
}
