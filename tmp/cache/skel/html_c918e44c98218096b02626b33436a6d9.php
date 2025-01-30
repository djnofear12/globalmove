<?php

/*
 * Squelette : ../prive/formulaires/recherche_ecrire.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:05 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/recherche_ecrire.html
// Temps de compilation total: 0.941 ms
//

function html_c918e44c98218096b02626b33436a6d9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_recherche" role=\'search\'>
<form action="' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
'" method="get"><div>
	' .
retablir_echappements_modeles(interdire_scripts(form_hidden(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true)))) .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'lang', null),true)))))!=='' ?
		('<input type="hidden" name="lang" value="' . $t1 . '">') :
		'') .
'
	<label for="' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_id_champ', null), 'recherche'),true))) .
'" class="editer-label visually-hidden">' .
_T('public|spip|ecrire:info_rechercher_02') .
'</label>
	<input
		type="text"
		class="text' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'recherche', null),true)) ?' ' :'')))))!=='' ?
		($t1 . ' cancelable') :
		'') .
'"
		size="10"
		name="recherche"
		id="' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_id_champ', null), 'recherche'),true))) .
'"
		placeholder="' .
attribut_html(_T('public|spip|ecrire:info_rechercher')) .
'"' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'recherche', null),true)))))!=='' ?
		('
		value="' . $t1 . '"') :
		'') .
'
	/>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'recherche', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
	<a
		class="cancel' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'class', null), ''),true)))))!=='' ?
			(' ' . $t2) :
			'') .
	'"
		href="' .
	retablir_echappements_modeles(interdire_scripts(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true),'recherche',''))) .
	'"
		onclick="$(this).siblings(\'input.text\').val(\'\')"
		title=\'' .
	attribut_html(_T('public|spip|ecrire:annuler_recherche')) .
	'\'
	>' .
	retablir_echappements_modeles(inserer_attribut(filtre_balise_img_dist(chemin_image((string)'fermer-16.png')),'alt',_T('public|spip|ecrire:annuler_recherche'))) .
	'
	</a>')) :
		'') .
'
	<button
		type="submit"
		class="image"
		aria-label="' .
attribut_html(_T('public|spip|ecrire:info_rechercher')) .
'"
		title="' .
attribut_html(_T('public|spip|ecrire:info_rechercher')) .
'"
		onclick="return recherche_submit_' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_id_champ', null), 'recherche'),true))) .
'.apply(this);"
	>
		' .
retablir_echappements_modeles(filtre_balise_svg_dist(chemin_image((string)'rechercher-20.png'))) .
'
	</button>
	<a class="none' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'class', null), ''),true)))))!=='' ?
		(' ' . $t1) :
		'') .
' refresh" href="' .
retablir_echappements_modeles(interdire_scripts(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true),'recherche',''))) .
'">' .
_T('public|spip|ecrire:info_rechercher') .
'</a>
</div></form>
<script>
function recherche_submit_' .
retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'_id_champ', null), 'recherche'),true))) .
'(){
$.placeholderLabel.disable_placeholder_fields.apply($(this).parents(\'form\').eq(0));
var a=$(this).siblings(\'a.refresh\');
a.attr(\'href\',parametre_url(a.attr(\'href\'),\'recherche\',$(this).siblings(\'input.text\').val())).followLink();
return false;
}</script>
</div>
');

	return analyse_resultat_skel('html_c918e44c98218096b02626b33436a6d9', $Cache, $page, '../prive/formulaires/recherche_ecrire.html');
}
