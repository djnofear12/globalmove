<?php

/*
 * Squelette : ../prive/squelettes/navigation/accueil.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:07 GMT
 * Boucles :   _restreintes
 */ 

function BOUCLE_restreinteshtml_931ad5737a909480eb4e9979817d5ddf(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_restreintes']) ? $Pile[0]['debut_restreintes'] : null), 10);
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo'))));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_restreintes';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.titre",
		"rubriques.id_rubrique",
		"rubriques.lang");
		$command['orderby'] = array('rubriques.titre');
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array('JOIN-L1' => 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'L1.id_auteur', sql_quote(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))), '', 'bigint(21) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/navigation/accueil.html','html_931ad5737a909480eb4e9979817d5ddf','_restreintes',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_restreintes']['compteur_boucle'] = 0;
	$Numrows['_restreintes']['command'] = $command;
	$Numrows['_restreintes']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_restreintes']) ? $Pile[0]['debut_restreintes'] : _request('debut_restreintes');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_restreintes'] = quete_debut_pagination('id_rubrique',$Pile[0]['@id_rubrique'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_restreintes']['total']-1)/(10))*(10)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_restreintes']['total'] : $debut_boucle + 9), $Numrows['_restreintes']['total'] - 1);
	$Numrows['_restreintes']['grand_total'] = $Numrows['_restreintes']['total'];
	$Numrows['_restreintes']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_restreintes']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_restreintes']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_restreintes']['compteur_boucle']++;
		if ($Numrows['_restreintes']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_restreintes']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				<li class="item rubrique"><a href=\'' .
retablir_echappements_modeles(generer_objet_url($Pile[$SP]['id_rubrique'],'rubrique')) .
'\'>' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'rubrique-16.png'))) .
' ' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</a></li>
			');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_restreintes @ ../prive/squelettes/navigation/accueil.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/navigation/accueil.html
// Temps de compilation total: 9.631 ms
//

function html_931ad5737a909480eb4e9979817d5ddf($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(boite_ouvrir((($t2 = strval((interdire_scripts(invalideur_session($Cache, typo(table_valeur($GLOBALS["visiteur_session"]??[], (string)'nom', null)))))))!=='' ?
			((	'
	' .
		(afficher_plus_info(generer_url_ecrire('infos_perso'),_T('public|spip|ecrire:icone_informations_personnelles'))) .
		'
	' .
		(filtre_balise_img_dist(chemin_image((string)'information-perso-24.png'),'','cadre-icone')) .
		'
	') . $t2 . '
') :
			''), 'simple personnel')) .
'
	' .
retablir_echappements_modeles(filtre_icone_horizontale_dist(generer_url_ecrire('infos_perso'),_T('public|spip|ecrire:icone_informations_personnelles'),'fiche-perso')) .
'

	' .
(($t1 = BOUCLE_restreinteshtml_931ad5737a909480eb4e9979817d5ddf($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<div class="liste">
			<h4>' .
		retablir_echappements_modeles(objet_afficher_nb(($Numrows['_restreintes']['grand_total'] ?? $Numrows['_restreintes']['total'] ?? 0),'rubrique')) .
		'</h4>
			<ul class="liste-items rubriques">
			') . $t1 . (	'
			</ul>
			' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_restreintes"]["grand_total"],
 		'_restreintes',
		isset($Pile[0]['debut_restreintes'])?$Pile[0]['debut_restreintes']:intval(_request('debut_restreintes')),
		10, true, 'prive', '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
		</div>
	')) :
		'') .
'

' .
retablir_echappements_modeles(boite_fermer()) .
'

' .
retablir_echappements_modeles(boite_ouvrir((($t2 = strval((interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
			((($t3 = strval((invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer')?" ":"")) ?' ' :'')))))!=='' ?
				($t3 . (	'
	' .
			(afficher_plus_info(generer_url_ecrire('configurer_identite'),_T('public|spip|ecrire:titre_identite_site'))) .
			'
	' .
			(filtre_balise_img_dist(chemin_image((string)'racine-24.png'),'','cadre-icone')) .
			'
	')) :
				'') . $t2 . '
') :
			''), 'simple etat_base')) .
'

	' .
(($t1 = strval(retablir_echappements_modeles(filtrer('image_graver',filtrer('image_reduire',quete_html_logo(quete_logo('id_syndic', 'ON', "'0'", ''), '', ''),'320','240')))))!=='' ?
		('<div class="logo_du_site">' . $t1 . '</div>') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'180','*'))))))!=='' ?
		('<div class="descriptif_du_site">' . $t1 . '</div>') :
		'') .
'

	' .
retablir_echappements_modeles(pipeline( 'accueil_informations' , (recuperer_fond( 'prive/squelettes/inclure/accueil-information' , array_merge($Pile[0],array()), array('compil'=>array('../prive/squelettes/navigation/accueil.html','html_931ad5737a909480eb4e9979817d5ddf','',0,$GLOBALS['spip_lang'])), _request('connect') ?? '')) )) .
retablir_echappements_modeles(boite_fermer()));

	return analyse_resultat_skel('html_931ad5737a909480eb4e9979817d5ddf', $Cache, $page, '../prive/squelettes/navigation/accueil.html');
}
