<?php

/*
 * Squelette : ../prive/squelettes/contenu/accueil.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:08 GMT
 * Boucles :   _haspostdate
 */ 

function BOUCLE_haspostdatehtml_1f4166a758947e8c554ec47f720dd5ed(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_haspostdate';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'articles.statut', "'publie'"));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/squelettes/contenu/accueil.html','html_1f4166a758947e8c554ec47f720dd5ed','_haspostdate',3,$GLOBALS['spip_lang'])
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
(($t1 = strval(retablir_echappements_modeles(interdire_scripts((((((include_spip('inc/config')?lire_config('post_dates',null,false):'') == 'non')) AND ((interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null) == '0minirezo')) ?' ' :'')))))) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'recentwhere'] = (($t3 = strval((quete_condition_postdates('date'))))!=='' ?
				('NOT (' . $t3 . ')') :
				''))) .
	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'titre\' => ' . argumenter_squelette(_T('public|spip|ecrire:info_article_a_paraitre')) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'date_sens\' => ' . argumenter_squelette('1') . ',
	\'nb\' => ' . argumenter_squelette('5') . ',
	\'where\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'recentwhere', null))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/accueil.html\',\'html_1f4166a758947e8c554ec47f720dd5ed\',\'\',6,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
	' .
	retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'recentwhere'] = (quete_condition_postdates('date')))) .
	'
')) :
		'') .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_haspostdate @ ../prive/squelettes/contenu/accueil.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/contenu/accueil.html
// Temps de compilation total: 1.957 ms
//

function html_1f4166a758947e8c554ec47f720dd5ed($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="none">' .
_T('public|spip|ecrire:icone_accueil') .
'</h1>
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'recentwhere'] = '')) .
BOUCLE_haspostdatehtml_1f4166a758947e8c554ec47f720dd5ed($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Les articles recents

') :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'titre\' => ' . argumenter_squelette(_T('public|spip|ecrire:articles_recents')) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'where\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'recentwhere', null))) . ',
	\'nb\' => ' . argumenter_squelette('5') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/accueil.html\',\'html_1f4166a758947e8c554ec47f720dd5ed\',\'\',6,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>


' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Vos articles en cours

') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'titre'] = (concat(afficher_plus_info(generer_url_ecrire('articles',(	'id_auteur=' .
		(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null))))))),_T('public|spip|ecrire:info_en_cours_validation'))))) .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/articles') . ', array_merge('.var_export($Pile[0],1).',array(\'titre\' => ' . argumenter_squelette(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'titre', null))) . ',
	\'statut\' => ' . argumenter_squelette('prepa') . ',
	\'id_auteur\' => ' . argumenter_squelette(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null))))) . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/accueil.html\',\'html_1f4166a758947e8c554ec47f720dd5ed\',\'\',11,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(($Pile[0]['ajax'] ?? null)) . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>

' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	En cours de validation

') :
		'') .
(($t1 = strval(retablir_echappements_modeles(pipeline( 'accueil_encours' , (recuperer_fond( 'prive/objets/liste/articles' , array_merge($Pile[0],array('titre' => _T('public|spip|ecrire:info_articles_proposes') ,
	'statut' => 'prop' ,
	'id_rubrique' => ($Pile[0]['id_rubrique'] ?? null) ,
	'par' => 'date' )), array('ajax' => ($v=( ($Pile[0]['ajax'] ?? null) ))?$v:true,'compil'=>array('../prive/squelettes/contenu/accueil.html','html_1f4166a758947e8c554ec47f720dd5ed','',0,$GLOBALS['spip_lang'])), _request('connect') ?? '')) ))))!=='' ?
		((	'
	' .
	retablir_echappements_modeles(boite_ouvrir(_T('public|spip|ecrire:texte_en_cours_validation'), 'basic note')) .
	'
	') . $t1 . (	'

	' .
	retablir_echappements_modeles(bouton_spip_rss('a_suivre')) .
	'

	' .
	retablir_echappements_modeles(boite_fermer()) .
	'
')) :
		'') .
'


' .
(($t1 = strval(retablir_echappements_modeles(filtrer('image_graver',filtrer('image_reduire',filtre_afficher_enfant_rub_dist(''),'245','0')))))!=='' ?
		($t1 . '
<div class=\'nettoyeur\'></div>
') :
		''));

	return analyse_resultat_skel('html_1f4166a758947e8c554ec47f720dd5ed', $Cache, $page, '../prive/squelettes/contenu/accueil.html');
}
