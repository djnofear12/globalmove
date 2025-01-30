<?php

/*
 * Squelette : prive/formulaires/menu_lang.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:02:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/menu_lang.html
// Temps de compilation total: 0.650 ms
//

function html_1cc940364779094478e95bfd12c27709($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(retablir_echappements_modeles(recuperer_fond( 'formulaires/inc-options-langues' , array('name' => (interdire_scripts(table_valeur($Pile[0]??[], (string)'name', null))) ,
	'default' => (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'default', null), ''))) ), array('compil'=>array('prive/formulaires/menu_lang.html','html_1cc940364779094478e95bfd12c27709','',0,$GLOBALS['spip_lang'])), _request('connect') ?? ''))))!=='' ?
		((	'<div class="formulaire_spip formulaire_menu_lang" id="formulaire_menu_lang">
<form method="post" action="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true))) .
	'"><div>
	' .
	retablir_echappements_modeles(interdire_scripts(form_hidden(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true)))) .
	'
	<label for="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'">' .
	_T('public|spip|ecrire:info_langues') .
	'</label>
	<select name="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" id="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nom', null),true))) .
	'" onchange="this.parentNode.parentNode.submit()">
		') . $t1 . '
	</select>
	<noscript><p class="boutons"><input type="submit" class="btn submit" value="&gt;&gt;"></p></noscript>
</div></form>
</div>') :
		'');

	return analyse_resultat_skel('html_1cc940364779094478e95bfd12c27709', $Cache, $page, 'prive/formulaires/menu_lang.html');
}
