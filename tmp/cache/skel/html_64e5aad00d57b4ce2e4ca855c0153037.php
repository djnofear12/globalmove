<?php

/*
 * Squelette : ../prive/squelettes/inclure/accueil-information.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:07 GMT
 * Boucles :   _artsr, _restreints, _arts, _cpt, _auts, _cpta
 */ 

function BOUCLE_artsrhtml_64e5aad00d57b4ce2e4ca855c0153037(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_artsr';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.statut', sql_quote(retablir_echappements_modeles(interdire_scripts($Pile[$SP-2]['valeur'])), '', 'varchar(10) NOT NULL DEFAULT \'0\'')), sql_in('articles.id_rubrique', calcul_branche_in(sql_quote($Pile[$SP]['id_rubrique'], '', 'int NOT NULL'))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/inclure/accueil-information.html','html_64e5aad00d57b4ce2e4ca855c0153037','_artsr',11,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_artsr']['command'] = $command;
	$Numrows['_artsr']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_artsr @ ../prive/squelettes/inclure/accueil-information.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_restreintshtml_64e5aad00d57b4ce2e4ca855c0153037(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, (table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo'))));

	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_restreints';
		$command['from'] = array('rubriques' => 'spip_rubriques','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("rubriques.id_rubrique");
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('rubriques','id_objet','id_rubrique','L1.objet='.sql_quote('rubrique')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 'JOIN-L1' => 
			array('=', 'L1.objet', sql_quote('rubrique')), 
			array('=', 'L1.id_auteur', sql_quote(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))), '', 'bigint(21) NOT NULL DEFAULT 0')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/inclure/accueil-information.html','html_64e5aad00d57b4ce2e4ca855c0153037','_restreints',10,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
				' .
BOUCLE_artsrhtml_64e5aad00d57b4ce2e4ca855c0153037($Cache, $Pile, $doublons, $Numrows, $SP)
. retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'restreints'] = (plus(table_valeur($Pile["vars"]??[], (string)'restreints', null),(($Numrows['_artsr']['total'] ?? 0)))))) .
'
				');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_restreints @ ../prive/squelettes/inclure/accueil-information.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_artshtml_64e5aad00d57b4ce2e4ca855c0153037(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['pagination'] = array((isset($Pile[0]['debut_arts']) ? $Pile[0]['debut_arts'] : null), 1);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_arts';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.statut",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.statut', sql_quote(retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))), '', 'varchar(10) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/inclure/accueil-information.html','html_64e5aad00d57b4ce2e4ca855c0153037','_arts',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_arts']['compteur_boucle'] = 0;
	$Numrows['_arts']['command'] = $command;
	$Numrows['_arts']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_arts']) ? $Pile[0]['debut_arts'] : _request('debut_arts');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_arts'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),1,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_arts']['total']-1)/(1))*(1)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_arts']['total'] : $debut_boucle), $Numrows['_arts']['total'] - 1);
	$Numrows['_arts']['grand_total'] = $Numrows['_arts']['total'];
	$Numrows['_arts']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_arts']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_arts']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_arts']['compteur_boucle']++;
		if ($Numrows['_arts']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_arts']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
			<li class="item' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :'')))))!=='' ?
		($t1 . 'on') :
		'') .
'">
				' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)(	'titre/' .
	(interdire_scripts($Pile[$SP-1]['valeur']))), null)) .
'&nbsp;:
				' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'restreints'] = '0')) .
(($t1 = BOUCLE_restreintshtml_64e5aad00d57b4ce2e4ca855c0153037($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
				' .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'restreints', null)) ?' ' :''))))!=='' ?
				($t3 . (	retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'restreints', null)) .
			'/')) :
				''))) :
		'') .
retablir_echappements_modeles(($Numrows['_arts']['grand_total'] ?? $Numrows['_arts']['total'] ?? 0)) .
'
			</li>
		');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_arts @ ../prive/squelettes/inclure/accueil-information.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_cpthtml_64e5aad00d57b4ce2e4ca855c0153037(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['liste'] = array();
	$command['liste'][] = 'prepa';
	$command['liste'][] = 'prop';
	$command['liste'][] = 'publie';

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_cpt';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
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
		array('../prive/squelettes/inclure/accueil-information.html','html_64e5aad00d57b4ce2e4ca855c0153037','_cpt',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= BOUCLE_artshtml_64e5aad00d57b4ce2e4ca855c0153037($Cache, $Pile, $doublons, $Numrows, $SP);
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_cpt @ ../prive/squelettes/inclure/accueil-information.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_autshtml_64e5aad00d57b4ce2e4ca855c0153037(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auts';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'auteurs.statut', sql_quote(retablir_echappements_modeles(interdire_scripts(safehtml($Pile[$SP]['valeur']))), '', 'varchar(255) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/inclure/accueil-information.html','html_64e5aad00d57b4ce2e4ca855c0153037','_auts',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_auts']['command'] = $command;
	$Numrows['_auts']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auts @ ../prive/squelettes/inclure/accueil-information.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_cptahtml_64e5aad00d57b4ce2e4ca855c0153037(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(interdire_scripts(eval('return '.'$GLOBALS[\'liste_des_statuts\']'.';'))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_cpta';
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
		array('../prive/squelettes/inclure/accueil-information.html','html_64e5aad00d57b4ce2e4ca855c0153037','_cpta',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
BOUCLE_autshtml_64e5aad00d57b4ce2e4ca855c0153037($Cache, $Pile, $doublons, $Numrows, $SP)
. (	'
			' .
	(($t2 = strval(retablir_echappements_modeles(((($Numrows['_auts']['total'] ?? 0)) ?' ' :''))))!=='' ?
			($t2 . (	'
			<li class="item">' .
		retablir_echappements_modeles(interdire_scripts(_T(safehtml($Pile[$SP]['cle'])))) .
		'&nbsp;: ' .
		retablir_echappements_modeles(($Numrows['_auts']['total'] ?? 0)) .
		'
			</li>
			')) :
			'') .
	'
			') .
'
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_cpta @ ../prive/squelettes/inclure/accueil-information.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/inclure/accueil-information.html
// Temps de compilation total: 8.137 ms
//

function html_64e5aad00d57b4ce2e4ca855c0153037($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'accueil_informations articles liste\'>
	' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'titre'] = (array('prepa' => _T('public|spip|ecrire:texte_statut_en_cours_redaction'), 'prop' => _T('public|spip|ecrire:texte_statut_attente_validation'), 'publie' => _T('public|spip|ecrire:texte_statut_publies'))))) .
'
' .
(($t1 = BOUCLE_cpthtml_64e5aad00d57b4ce2e4ca855c0153037($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<h4>' .
		retablir_echappements_modeles(afficher_plus_info(generer_url_ecrire('articles'),_T('public|spip|ecrire:info_articles_2'),_T('public|spip|ecrire:info_articles'))) .
		'</h4>
	<ul class="liste-items">
		') . $t1 . '
	</ul>
') :
		'') .
'
</div>


<div class=\'accueil_informations auteurs liste\'>
	' .
(($t1 = BOUCLE_cptahtml_64e5aad00d57b4ce2e4ca855c0153037($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
		<h4>' .
		retablir_echappements_modeles(afficher_plus_info(generer_url_ecrire('auteurs'),_T('public|spip|ecrire:icone_auteurs'),_T('public|spip|ecrire:icone_auteurs'))) .
		'</h4>
		<ul class="liste-items">
			') . $t1 . '
		</ul>
	') :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_64e5aad00d57b4ce2e4ca855c0153037', $Cache, $page, '../prive/squelettes/inclure/accueil-information.html');
}
