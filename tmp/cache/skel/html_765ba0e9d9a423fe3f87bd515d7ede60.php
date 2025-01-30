<?php

/*
 * Squelette : ../prive/squelettes/inclure/barre-nav.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:02 GMT
 * Boucles :   _creersous, _creer, _collaborersous, _collaborer, _infos_perso, _sous, _boutons
 */ 

function BOUCLE_creersoushtml_765ba0e9d9a423fe3f87bd515d7ede60(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'sousmenu')))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_creersous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array('position');
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','_creersous',64,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))))!=='' ?
		((	'<li class="deroulant__item">
							<a
								href="' .
	retablir_echappements_modeles(interdire_scripts(bandeau_creer_url(((($a = safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(safehtml($Pile[$SP]['cle'])))),(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'urlArg')))),(table_valeur($Pile["vars"]??[], (string)'contexte', null))))) .
	'"
								title="' .
	retablir_echappements_modeles(interdire_scripts(attribut_html(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))) .
	'"
								class="deroulant__lien bando2_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'"><span class="libelle">') . $t1 . '</span></a>
						</li>') :
		'') .
'
						');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_creersous @ ../prive/squelettes/inclure/barre-nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_creerhtml_765ba0e9d9a423fe3f87bd515d7ede60(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'boutons', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_creer';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'cle', "'outils_rapides'"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','_creer',63,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						' .
BOUCLE_creersoushtml_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons, $Numrows, $SP));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_creer @ ../prive/squelettes/inclure/barre-nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_collaborersoushtml_765ba0e9d9a423fe3f87bd515d7ede60(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'sousmenu')))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_collaborersous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','_collaborersous',83,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))))!=='' ?
		((	'<li class="deroulant__item deroulant__item_collaborer">
					<a
						href="' .
	retablir_echappements_modeles(interdire_scripts(bandeau_creer_url(((($a = safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(safehtml($Pile[$SP]['cle'])))),(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'urlArg')))),(table_valeur($Pile["vars"]??[], (string)'contexte', null))))) .
	'"
						title="' .
	retablir_echappements_modeles(interdire_scripts(attribut_html(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))) .
	'"
						class="deroulant__lien bando2_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'"><span class="libelle">') . $t1 . '</span></a>
				</li>') :
		'') .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_collaborersous @ ../prive/squelettes/inclure/barre-nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_collaborerhtml_765ba0e9d9a423fe3f87bd515d7ede60(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'boutons', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_collaborer';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'cle', "'outils_collaboratifs'"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','_collaborer',80,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
			' .
(($t1 = BOUCLE_collaborersoushtml_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul class="deroulant deroulant_collaborer collaborer">
			' . $t1 . '
			</ul>
			') :
		'') .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_collaborer @ ../prive/squelettes/inclure/barre-nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_infos_persohtml_765ba0e9d9a423fe3f87bd515d7ede60(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'boutons_infos_perso', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_infos_perso';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"lang");
		$command['orderby'] = array('position');
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'cle', "'infos_perso'")));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','_infos_perso',116,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))))!=='' ?
		((	'<li class="deroulant__item">
							<a
								href="' .
	retablir_echappements_modeles(interdire_scripts(((($a = safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(generer_url_ecrire(safehtml($Pile[$SP]['cle']))))))) .
	'"
								class="deroulant__lien bando2_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'"
							>
								' .
	retablir_echappements_modeles(interdire_scripts(filtre_balise_img_dist(safehtml(table_valeur($Pile[$SP]['valeur'], 'icone')),'',(	'picto picto_' .
		(interdire_scripts(safehtml($Pile[$SP]['cle']))))))) .
	'
								<span class="libelle">') . $t1 . (	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((safehtml($Pile[$SP]['cle']) == 'configurer_langage')) ?' ' :'')))))!=='' ?
			($t2 . (($t3 = strval(retablir_echappements_modeles(traduire_nom_langue(spip_htmlentities((isset($Pile[$SP]['lang'])?$Pile[$SP]['lang']:(($Pile[0]['lang'] ?? null))) ? (isset($Pile[$SP]['lang'])?$Pile[$SP]['lang']:(($Pile[0]['lang'] ?? null))) : $GLOBALS['spip_lang'])))))!=='' ?
				(' - ' . $t3) :
				'')) :
			'') .
	'</span>
							</a>
						</li>')) :
		'') .
'
						');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_infos_perso @ ../prive/squelettes/inclure/barre-nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_soushtml_765ba0e9d9a423fe3f87bd515d7ede60(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'sousmenu')))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_sous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','_sous',157,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_sous']['command'] = $command;
	$Numrows['_sous']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
							' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((safehtml(table_valeur($Pile[$SP]['valeur'], 'favori'))) ?' ' :'')))))!=='' ?
		($t1 . retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'has_favoris'] = '1'))) :
		'') .
'
							' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))))!=='' ?
		((	'<li class="deroulant__item' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((safehtml(table_valeur($Pile[$SP]['valeur'], 'favori')) ? 'deroulant__item_favori':((table_valeur($Pile["vars"]??[], (string)'has_favoris', null) ? 'deroulant__item_non-favori':'')))))))!=='' ?
			(' ' . $t2) :
			'') .
	'" data-profondeur="1">
								<a class="deroulant__lien bando2_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'" href="' .
	retablir_echappements_modeles(interdire_scripts(bandeau_creer_url(((($a = safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(safehtml($Pile[$SP]['cle'])))),(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'urlArg')))),(table_valeur($Pile["vars"]??[], (string)'contexte', null))))) .
	'" data-profondeur="1">
									<span class="libelle">') . $t1 . '</span>
								</a>
							</li>') :
		'') .
'
							');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sous @ ../prive/squelettes/inclure/barre-nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_boutonshtml_765ba0e9d9a423fe3f87bd515d7ede60(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'boutons', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_boutons';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'cle', "'outils_rapides'")), 
			array('NOT', 
			array('=', 'cle', "'outils_collaboratifs'")));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','_boutons',144,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((safehtml($Pile[$SP]['cle']) == 'menu_accueil')) OR ((interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'sousmenu')))))) ?' ' :'') ? ' ':(vide($Pile['vars'][$_zzz=(string)'li'] = '')))))))!=='' ?
		('<li class="deroulant__item" data-racine>
						' . $t1 . (	' ' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'li'] = '</li>')) .
	'<a class="deroulant__lien" href="' .
	retablir_echappements_modeles(interdire_scripts(bandeau_creer_url(((($a = safehtml(table_valeur($Pile[$SP]['valeur'], 'url'))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(safehtml($Pile[$SP]['cle'])))),(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'urlArg')))),(table_valeur($Pile["vars"]??[], (string)'contexte', null))))) .
	'" id="bando1_' .
	retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['cle']))) .
	'" data-racine>
							' .
	retablir_echappements_modeles(interdire_scripts(filtre_balise_svg_dist(safehtml(table_valeur($Pile[$SP]['valeur'], 'icone')),'',(	'picto picto_main' .
		(($t3 = strval((interdire_scripts(replace(safehtml($Pile[$SP]['cle']),'_','-')))))!=='' ?
				(' picto_' . $t3) :
				''))))) .
	'
							' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(_T(safehtml(table_valeur($Pile[$SP]['valeur'], 'libelle')))))))!=='' ?
			('<span class="libelle">' . $t2 . '</span>') :
			'') .
	'
						</a>
						')) :
		'') .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '
						permettra d\'ajouter une classe sur les entrées non favorites
						si le menu a des entrées favorites, pour faciliter le stylage CSS
						') :
		'') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'has_favoris'] = '0')) .
'
						' .
(($t1 = BOUCLE_soushtml_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
						<ul class="deroulant__sous-menu' .
		(($t3 = strval(retablir_echappements_modeles((((($Numrows['_sous']['total'] ?? 0) > '20')) ?' ' :''))))!=='' ?
				(' ' . $t3 . 'cols-2') :
				'') .
		'" data-profondeur="1">
							') . $t1 . '
						</ul>
						') :
		'') .
'
					' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'li', null)));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_boutons @ ../prive/squelettes/inclure/barre-nav.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/inclure/barre-nav.html
// Temps de compilation total: 33.861 ms
//

function html_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'contexte'] = (interdire_scripts(eval('return '.'definir_barre_contexte()'.';'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'boutons'] = (trier_boutons_enfants_par_favoris_alpha(definir_barre_boutons(table_valeur($Pile["vars"]??[], (string)'contexte', null),'1'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'boutons_infos_perso'] = (definir_barre_onglets('infos_perso')))) .
'<div id="bando_haut" class="bando-haut" role="navigation">

	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Liens d\'évitement ') :
		'') .
'
	<div id="bando_liens_rapides" class="bando-evitement">
		<div class="largeur">
			<p class="menu-simple menu-simple_evitement">
				<a class="menu-simple__item" href="#conteneur" onclick="return focus_zone(\'#conteneur\')">Aller au contenu</a>
				<a class="menu-simple__item" href="#bando_navigation" onclick="return focus_zone(\'#bando_navigation\')">Aller &agrave; la navigation</a>
				<a class="menu-simple__item" href="#recherche" onclick="return focus_zone(\'#rapides .formulaire_recherche\')">Aller &agrave; la recherche</a>
			</p>
		</div>
	</div>

	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Bandeau identité ') :
		'') .
'
	<div id="bando_identite" class="bando-id">
		<div class="largeur">
			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Identité et contenu du site ') :
		'') .
'
			<ul class="deroulant deroulant_infos_site" data-racine>
				<li class="deroulant__item">
					<a
						class="deroulant__lien"
						href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'"
					>
						' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'favicon-spip.png'),'','picto picto_identite','24')) .
'
						<span class="libelle">' .
retablir_echappements_modeles(interdire_scripts(couper(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]),'35'))) .
'</span>
					</a>

					<ul class="deroulant__sous-menu" data-profondeur="1">
						<li class="deroulant__item">
							<a
								class="deroulant__lien voir"
								href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'"
							>
								' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'voir-ligne-24.png'),'','picto picto_preview','24')) .
'
								<span class="libelle">' .
_T('public|spip|ecrire:icone_visiter_site') .
'</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="deroulant__item deroulant__item_plan plan_site" data-racine>
					<a
						class="deroulant__lien"
						href="' .
retablir_echappements_modeles(generer_url_ecrire('plan')) .
'"
						id="boutonbandeautoutsite"
						title="' .
_T('public:plan_site') .
'"
						data-racine
					>
						' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'plan_site-24.png'),_T('public:plan_site'),'picto picto_plan')) .
'
					</a>
					' .
retablir_echappements_modeles(menu_rubriques('')) .
'
				</li>
				' .
(($t1 = BOUCLE_creerhtml_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
				<li class="deroulant__item">
					<a class="deroulant__lien bando2_creer" href="' .
		retablir_echappements_modeles(generer_url_ecrire('navigation','menu=outils_rapides')) .
		'">
						' .
		retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'creer-24.png'),'','picto picto_creer')) .
		'
						<span class="libelle">' .
		_T('public|spip|ecrire:icone_outils_rapides') .
		'</span>
					</a>

					<ul class="deroulant__sous-menu" data-profondeur="1">
						') . $t1 . '
					</ul>
				</li>
				') :
		'') .
'
			</ul>

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' La recherche au milieu ') :
		'') .
'
			' .
retablir_echappements_modeles(executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(),
	array('../prive/squelettes/inclure/barre-nav.html','html_765ba0e9d9a423fe3f87bd515d7ede60','',59,$GLOBALS['spip_lang']))) .
'

			' .
BOUCLE_collaborerhtml_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons, $Numrows, $SP) .
'

			' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Identité de la personne connectée ') :
		'') .
'
			<ul class="deroulant deroulant_infos_perso" data-racine>
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((filtre_info_plugin_dist("aide", "est_actif")) ?' ' :'')))))!=='' ?
		($t1 . (	'<li class="deroulant__item deroulant__item_aide">
					<a
						class="deroulant__lien popin" target="_blank"
						href="' .
	retablir_echappements_modeles(generer_url_ecrire('aide',(	'var_lang=' .
		(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang']))))) .
	'"
					>
						<span class="libelle">' .
	_T('public|spip|ecrire:icone_aide_ligne') .
	'</span>
					</a>
				</li>')) :
		'') .
'
				<li class="deroulant__item">
					<a
						class="deroulant__lien"
						title="' .
attribut_html(_T('public|spip|ecrire:icone_informations_personnelles')) .
' (' .
attribut_html(_T('public|spip|ecrire:auteur')) .
' #' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))) .
')"
						href="' .
retablir_echappements_modeles(generer_url_ecrire('infos_perso')) .
'"
					>
						' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'auteur-24.png'),'','picto picto_auteur')) .
'
						<span class="libelle">' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, couper(typo(((($a = trim(table_valeur($GLOBALS["visiteur_session"]??[], (string)'nom', null))) OR (is_string($a) AND strlen($a))) ? $a : (interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'login', null)))))),'30')))) .
'</span>
					</a>

					<ul class="deroulant__sous-menu" data-profondeur="1">
						' .
BOUCLE_infos_persohtml_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons, $Numrows, $SP) .
'
						<li class="deroulant__item">
							<a class="deroulant__lien" href="' .
retablir_echappements_modeles(generer_url_action('logout','logout=prive')) .
'">
								' .
retablir_echappements_modeles(filtre_balise_img_dist(chemin_image((string)'auteur-5poubelle-24.png'),'','picto picto_logout')) .
'
								<span class="libelle">' .
_T('public|spip|ecrire:icone_deconnecter') .
'</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Menu de navigation principale ') :
		'') .
'
	<div id="bando_navigation" class="bando-nav">
		<div class="largeur">
			' .
(($t1 = BOUCLE_boutonshtml_765ba0e9d9a423fe3f87bd515d7ede60($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul class="deroulant deroulant_navigation" data-racine>
					' . $t1 . '
				</ul>
			') :
		'') .
'
		</div>
	</div>
</div>
');

	return analyse_resultat_skel('html_765ba0e9d9a423fe3f87bd515d7ede60', $Cache, $page, '../prive/squelettes/inclure/barre-nav.html');
}
