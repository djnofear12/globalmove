<?php

/*
 * Squelette : ../prive/themes/spip/tables.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:51 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/tables.css.html
// Temps de compilation total: 0.433 ms
//

function html_f0923d8044bff8d723b214a2d313a1b1($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
	<style>
	/* Décoration des tables. */
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
'/* Tableaux */
table { margin-bottom: var(--spip-margin-bottom); width: 100%; }
th { font-weight: bold; }
thead th {color:inherit; background: var(--spip-color-theme-lighter); }
table.spip td, table.spip th, /* annuler spip-styles */
th,td,caption { padding: calc(var(--spip-line-height) / 2); }

tbody tr:nth-child(even)>td,tbody tr:nth-child(even)>th,
tbody tr.even>td,tbody tr.even>th { background: var(--spip-color-theme-lightest); }
tfoot { font-style: italic; }
caption { background: #eee; }

/* Tableaux SPIP */
table.spip { max-width: 99%; margin-right: auto; margin-left: auto; margin-bottom: var(--spip-margin-bottom); border-collapse: collapse; border-spacing: 0;}
table.spip caption { caption-side: top; /* bottom pas pris en compte par IE */ text-align: center; margin-right: auto; margin-left: auto; font-weight: bold; }
table.spip th, table.spip td { /*padding: 0.20em 0.40em; text-align: left; */border: 1px solid var(--spip-color-gray-light); }
table.spip td.numeric {text-align:right;}


/** tables responsives */
@media (max-width: 760px) {

	.spip_table--responsive,
	.spip_table--responsive thead,
	.spip_table--responsive tbody,
	.spip_table--responsive th,
	.spip_table--responsive td,
	.spip_table--responsive tr {
		display: block; 
	}

	.spip_table--responsive thead tr { 
		border: none;
		clip: rect(0 0 0 0);
		height: 1px;
		margin: -1px;
		overflow: hidden;
		padding: 0;
		position: absolute;
		width: 1px;
	}

	.spip_table--responsive tr { 
		border-top: 1px solid var(--spip-color-gray-light); 
		border-bottom: 1px solid var(--spip-color-gray-light); 
	}
	.spip_table--responsive tr + tr { 
		margin-top: 1em;
	}
	.spip_table--responsive td { 
		text-align: right;
	}
	table.spip_table--responsive td {
		border-top: none;
		border-bottom: 1px solid rgba(0, 0, 0, .08);
	}
	
	.spip_table--responsive td:before { 
		float: left;
		font-weight: bold;
		content: attr(data-label); 
	}
}
');

	return analyse_resultat_skel('html_f0923d8044bff8d723b214a2d313a1b1', $Cache, $page, '../prive/themes/spip/tables.css.html');
}
