<?php

/*
 * Squelette : ../prive/squelettes/inclure/admin_vider_images.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:07 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/admin_vider_images.html
// Temps de compilation total: 53.670 ms
//

function html_2bd69b41ba1f52205c0d76624b51c43a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(retablir_echappements_modeles(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_admin_vider')?" ":"")) ?' ' :'')))))!=='' ?
		($t1 . (	'

' .
	retablir_echappements_modeles(boite_ouvrir((wrap(concat(filtre_balise_img_dist(chemin_image((string)'image-24.png'),'','cadre-icone'),(_T('info_images_auto'))),'<h3>')), 'simple', 'titrem')) .
	'<div id="placehoder_taille_cache_images"><p>&nbsp;<br />&nbsp;<br />&nbsp;<br /></p></div>
	<script>
		jQuery(function($){
			$(\'#placehoder_taille_cache_images\').animateLoading().load(\'' .
	retablir_echappements_modeles(invalideur_session($Cache, replace(generer_action_auteur('calculer_taille_cache','images'),'&amp;','&'))) .
	'\');
		});
	</script>
	<noscript>
		<iframe src="' .
	retablir_echappements_modeles(invalideur_session($Cache, generer_action_auteur('calculer_taille_cache','images'))) .
	'" style="width: 100%;height: 3em;overflow: hidden;"></iframe>
	</noscript>

' .
	retablir_echappements_modeles(boite_pied()) .
	'
	' .
	retablir_echappements_modeles(bouton_action(_T('public|spip|ecrire:bouton_vider_cache'),(invalideur_session($Cache, generer_action_auteur('purger','vignettes',(invalideur_session($Cache, self()))))),'ajax')) .
	'
' .
	retablir_echappements_modeles(boite_fermer()) .
	'
')) :
		'');

	return analyse_resultat_skel('html_2bd69b41ba1f52205c0d76624b51c43a', $Cache, $page, '../prive/squelettes/inclure/admin_vider_images.html');
}
