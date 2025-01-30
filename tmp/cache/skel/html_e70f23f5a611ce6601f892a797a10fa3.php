<?php

/*
 * Squelette : ../prive/squelettes/inclure/admin_vider_cache.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/admin_vider_cache.html
// Temps de compilation total: 21.946 ms
//

function html_e70f23f5a611ce6601f892a797a10fa3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_admin_vider')?" ":"")) ?' ' :'')))))!=='' ?
		($t1 . (	'
' .
	retablir_echappements_modeles(boite_ouvrir((wrap(concat(filtre_balise_img_dist(chemin_image((string)'cache-24.png'),'','cadre-icone'),(_T('taille_repertoire_cache'))),'<h3>')), 'simple', 'titrem')) .
	'<div id="placehoder_taille_cache"><p>&nbsp;</p></div>
	<script>
		jQuery(function($){
			$(\'#placehoder_taille_cache\').animateLoading().load(\'' .
	retablir_echappements_modeles(invalideur_session($Cache, replace(generer_action_auteur('calculer_taille_cache','skel'),'&amp;','&'))) .
	'\');
		});
	</script>
	<noscript>
		<iframe src="' .
	retablir_echappements_modeles(invalideur_session($Cache, generer_action_auteur('calculer_taille_cache','skel'))) .
	'" style="width: 100%;height: 3em;overflow: hidden;"></iframe>
	</noscript>

	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'cache_inhib'] = (interdire_scripts((((((($a = (include_spip('inc/config')?lire_config('cache_inhib',null,false):'')) OR (is_string($a) AND strlen($a))) ? $a : '0') > (interdire_scripts(eval('return '.'time()'.';'))))) ?' ' :''))))) .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'cache_inhib', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
	<div class="msg-alert notice" role="alert" data-alert="notice"><div class="msg-alert__text clearfix">
		<p><strong>' .
		_T('public|spip|ecrire:info_cache_desactive') .
		'</strong></p>
	</div></div>
	')) :
			'') .
	'

' .
	retablir_echappements_modeles(boite_pied()) .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'cache_inhib', null)) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		retablir_echappements_modeles(bouton_action(_T('public|spip|ecrire:bouton_cache_desactiver'),(invalideur_session($Cache, generer_action_auteur('purger','inhibe_cache',(invalideur_session($Cache, self()))))),'ajax')) .
		'
	')) :
			'') .
	'
	' .
	(($t2 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'cache_inhib', null)) ?' ' :''))))!=='' ?
			($t2 . (	'
 		' .
		retablir_echappements_modeles(bouton_action(_T('public|spip|ecrire:bouton_cache_activer'),(invalideur_session($Cache, generer_action_auteur('purger','reactive_cache',(invalideur_session($Cache, self()))))),'ajax')) .
		'
	')) :
			'') .
	'
	' .
	retablir_echappements_modeles(bouton_action(_T('public|spip|ecrire:bouton_vider_cache'),(invalideur_session($Cache, generer_action_auteur('purger','cache',(invalideur_session($Cache, self()))))),'ajax')) .
	'
' .
	retablir_echappements_modeles(boite_fermer()) .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_e70f23f5a611ce6601f892a797a10fa3', $Cache, $page, '../prive/squelettes/inclure/admin_vider_cache.html');
}
