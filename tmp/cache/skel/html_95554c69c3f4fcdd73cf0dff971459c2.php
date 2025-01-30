<?php

/*
 * Squelette : squelettes-dist/formulaires/administration.html
 * Date :      Tue, 03 Dec 2024 10:08:54 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes-dist/formulaires/administration.html
// Temps de compilation total: 0.818 ms
//

function html_95554c69c3f4fcdd73cf0dff971459c2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
' <div' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'divclass', null), 'spip-admin-bloc'),true)))))!=='' ?
		(' class="' . $t1 . '"') :
		'') .
' id=\'spip-admin\' dir="' .
retablir_echappements_modeles(lang_dir(($Pile[0]['lang'] ?? null), 'ltr','rtl')) .
'">' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'analyser', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="analyser">' .
	_T('public|spip|ecrire:analyse_xml') .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'xhtml_error', null),true)))))!=='' ?
			(' (' . $t2 . ')') :
			'') .
	'</a>')) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true)) ?' ' :'')))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'id_objet', null),true)))))!=='' ?
			((	'<a href="' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)(	'voir_' .
			(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true)))), null),true))) .
		'" class="spip-admin-boutons"
		id="voir_' .
		retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true))) .
		'">' .
		retablir_echappements_modeles(interdire_scripts(_T(objet_info(entites_html(table_valeur($Pile[0]??[], (string)'objet', null),true),'texte_objet')))) .
		'
			(') . $t2 . ')</a>') :
			'') .
	'
	')) :
		'') .
'<!--extra-->' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ecrire', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="ecrire">' .
	_T('public|spip|ecrire:espace_prive') .
	'</a>')) :
		'') .
'
	<a href="' .
retablir_echappements_modeles(parametre_url(self(),'var_mode',(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'calcul', null),true))))) .
'" class="spip-admin-boutons"
		id="var_mode">' .
_T('public|spip|ecrire:admin_recalculer') .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'use_cache', null),true))) .
'</a>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'preview', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="preview">' .
	_T('public|spip|ecrire:previsualisation') .
	'</a>')) :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debug', null),true)))))!=='' ?
		('
	<a href="' . $t1 . (	'" class="spip-admin-boutons"
		id="debug">' .
	_T('public|spip|ecrire:admin_debug') .
	'</a>')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_95554c69c3f4fcdd73cf0dff971459c2', $Cache, $page, 'squelettes-dist/formulaires/administration.html');
}
