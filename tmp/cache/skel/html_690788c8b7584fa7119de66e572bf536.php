<?php

/*
 * Squelette : ../prive/objets/liste/articles.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:08 GMT
 * Boucles :   _auteurs, _liste_art
 */ 

function BOUCLE_auteurshtml_690788c8b7584fa7119de66e572bf536(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteurs';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.nom");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'], '','bigint(21) NOT NULL DEFAULT 0')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/articles.html','html_690788c8b7584fa7119de66e572bf536','_auteurs',32,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
'<a href="' .
retablir_echappements_modeles(generer_objet_url($Pile[$SP]['id_auteur'],'auteur')) .
'">' .
retablir_echappements_modeles(interdire_scripts(safehtml(supprimer_numero(typo($Pile[$SP]['nom'], "TYPO", $connect, $Pile[0]))))) .
'</a>');
		$t0 .= ((strlen($t1) && strlen($t0)) ? ', ' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteurs @ ../prive/objets/liste/articles.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_liste_arthtml_690788c8b7584fa7119de66e572bf536(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['id_article'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (($Pile[0]['id_rubrique'] ?? null)))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (($Pile[0]['id_secteur'] ?? null)))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (($Pile[0]['id_trad'] ?? null)))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	$in4 = array();
	if (!(is_array($a = (($Pile[0]['id_auteur'] ?? null)))))
		$in4[]= $a;
	else $in4 = array_merge($in4, $a);
	$in5 = array();
	if (!(is_array($a = (($Pile[0]['id_mot'] ?? null)))))
		$in5[]= $a;
	else $in5 = array_merge($in5, $a);
	$in6 = array();
	if (!(is_array($a = (($Pile[0]['id_document'] ?? null)))))
		$in6[]= $a;
	else $in6 = array_merge($in6, $a);
	$in7 = array();
	if (!(is_array($a = (($Pile[0]['statut'] ?? null)))))
		$in7[]= $a;
	else $in7 = array_merge($in7, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "articles", "1","",array (
  'id_' => 
  array (
    0 => 'id_article',
    1 => 'id_rubrique',
    2 => 'id_secteur',
    3 => 'id_trad',
    4 => 'id_auteur',
    5 => 'id_mot',
    6 => 'id_document',
  ),
  'criteres' => 
  array (
    'id_article' => true,
    'id_rubrique' => true,
    'id_secteur' => true,
    'id_trad' => true,
    'statut' => true,
  ),
  'lien' => true,
),"id_article");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):retablir_echappements_modeles(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'session_liste_art']))?$Pile[0]['sens'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('sens'.'session_liste_art'))?session_get('sens'.'session_liste_art'):(is_array($s=retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):retablir_echappements_modeles(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_art']) ? $Pile[0]['debut_liste_art'] : null), (($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_liste_art';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens','L2' => 'spip_mots_liens','L3' => 'spip_documents_liens','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('articles','id_objet','id_article','L2.objet='.sql_quote('article')), 'L3' => array('articles','id_objet','id_article','L3.objet='.sql_quote('article')), 'resultats' => array('articles','id','id_article'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("articles.id_article",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"articles.titre",
		"articles.lang",
		"articles.statut",
		"articles.id_rubrique",
		"articles.surtitre",
		"articles.titre AS titre_rang",
		"articles.soustitre",
		"articles.date");
	$command['orderby'] = array(tri_champ_order($tri,$command['from'],$senstri), 'articles.titre');
	$command['where'] = 
			array((!is_whereable(($Pile[0]['id_article'] ?? null)) ? '' : ((is_array(($Pile[0]['id_article'] ?? null))) ? sql_in('articles.id_article', $in) : 
			array('=', 'articles.id_article', sql_quote(($Pile[0]['id_article'] ?? null), '','bigint(21) NOT NULL AUTO_INCREMENT')))), (!is_whereable(($Pile[0]['id_rubrique'] ?? null)) ? '' : ((is_array(($Pile[0]['id_rubrique'] ?? null))) ? sql_in('articles.id_rubrique', $in1) : 
			array('=', 'articles.id_rubrique', sql_quote(($Pile[0]['id_rubrique'] ?? null), '','bigint(21) NOT NULL DEFAULT 0')))), (!is_whereable(($Pile[0]['id_secteur'] ?? null)) ? '' : ((is_array(($Pile[0]['id_secteur'] ?? null))) ? sql_in('articles.id_secteur', $in2) : 
			array('=', 'articles.id_secteur', sql_quote(($Pile[0]['id_secteur'] ?? null), '','bigint(21) NOT NULL DEFAULT 0')))), (!is_whereable(($Pile[0]['id_trad'] ?? null)) ? '' : ((is_array(($Pile[0]['id_trad'] ?? null))) ? sql_in('articles.id_trad', $in3) : 
			array('=', 'articles.id_trad', sql_quote(($Pile[0]['id_trad'] ?? null), '','bigint(21) NOT NULL DEFAULT 0')))), 'JOIN-L1' => 
			array('=', 'L1.objet', sql_quote('article')), (!is_whereable(($Pile[0]['id_auteur'] ?? null)) ? '' : ((is_array(($Pile[0]['id_auteur'] ?? null))) ? sql_in('L1.id_auteur', $in4) : 
			array('=', 'L1.id_auteur', sql_quote(($Pile[0]['id_auteur'] ?? null), '','bigint(21) NOT NULL DEFAULT 0')))), 'JOIN-L2' => 
			array('=', 'L2.objet', sql_quote('article')), (!is_whereable(($Pile[0]['id_mot'] ?? null)) ? '' : ((is_array(($Pile[0]['id_mot'] ?? null))) ? sql_in('L2.id_mot', $in5) : 
			array('=', 'L2.id_mot', sql_quote(($Pile[0]['id_mot'] ?? null), '','bigint(21) NOT NULL DEFAULT 0')))), 'JOIN-L3' => 
			array('=', 'L3.objet', sql_quote('article')), (!is_whereable(($Pile[0]['id_document'] ?? null)) ? '' : ((is_array(($Pile[0]['id_document'] ?? null))) ? sql_in('L3.id_document', $in6) : 
			array('=', 'L3.id_document', sql_quote(($Pile[0]['id_document'] ?? null), '','bigint(21) NOT NULL DEFAULT 0')))), (($zzw = spip_sanitize_from_request(@$Pile[0]["where"],"where","vide")) ? $zzw : ''), (!is_whereable(($Pile[0]['statut'] ?? null)) ? '' : ((is_array(($Pile[0]['statut'] ?? null))) ? sql_in('articles.statut', $in7) : 
			array('=', 'articles.statut', sql_quote(($Pile[0]['statut'] ?? null), '','varchar(10) NOT NULL DEFAULT \'0\'')))), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/articles.html','html_690788c8b7584fa7119de66e572bf536','_liste_art',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_art']['compteur_boucle'] = 0;
	$Numrows['_liste_art']['command'] = $command;
	$Numrows['_liste_art']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_art']) ? $Pile[0]['debut_liste_art'] : _request('debut_liste_art');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_liste_art'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),(($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_art']['total']-1)/((($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10)))*((($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_liste_art']['total'] : $debut_boucle+(($a = intval(retablir_echappements_modeles(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10) - 1), $Numrows['_liste_art']['total'] - 1);
	$Numrows['_liste_art']['grand_total'] = $Numrows['_liste_art']['total'];
	$Numrows['_liste_art']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_art']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_art']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l2 = _T('public|spip|ecrire:icone_modifier_article');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_art']['compteur_boucle']++;
		if ($Numrows['_liste_art']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_art']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		' .
retablir_echappements_modeles(changer_typo(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']))) .
'
		<tr class="' .
retablir_echappements_modeles(alterner(($Numrows['_liste_art']['compteur_boucle'] ?? 0),'row_odd','row_even')) .
'">
			<td class=\'statut\'>' .
retablir_echappements_modeles(interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'article',($Pile[$SP]['id_article']),($Pile[$SP]['id_rubrique'])))) .
'</td>
			<td class=\'titre principale\'><a href="' .
retablir_echappements_modeles(generer_objet_url($Pile[$SP]['id_article'],'article')) .
'"
				' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(((((entites_html(table_valeur($Pile[0]??[], (string)'lang', null),true) == (spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))) ?'' :' ') ? (spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])):'')))))!=='' ?
		('hreflang="' . $t1 . '"') :
		'') .
'
				title="' .
attribut_html($l1) .
' ' .
retablir_echappements_modeles($Pile[$SP]['id_article']) .
'">' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0]),'150','70'))))))!=='' ?
		('<span
				class="surtitre">' . $t1 . '</span>') :
		'') .
(($t1 = strval(retablir_echappements_modeles(calculer_rang_smart($Pile[$SP]['titre_rang'], 'article', $Pile[$SP]['id_article'], $Pile[0]))))!=='' ?
		('<span class="rang">' . $t1 . '. </span>') :
		'') .
'<strong>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</strong>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(typo($Pile[$SP]['soustitre'], "TYPO", $connect, $Pile[0])))))!=='' ?
		('<span class="soustitre">' . $t1 . '</span>') :
		'') .
'</a></td>
			<td class=\'' .
retablir_echappements_modeles((quete_html_logo(quete_logo('id_article', 'on', $Pile[$SP]['id_article'], ''), '', '') ? 'logo':'nologo')) .
'\'>' .
retablir_echappements_modeles(filtrer('image_graver',filtrer('image_recadre_avec_fallback',quete_html_logo(quete_logo('id_article', 'on', $Pile[$SP]['id_article'], ''), '', ''),'70','70','focus'))) .
'</td>
			<td class=\'auteur\'><div class="inner">' .
BOUCLE_auteurshtml_690788c8b7584fa7119de66e572bf536($Cache, $Pile, $doublons, $Numrows, $SP) .
'</div></td>
			<td class=\'date secondaire\'>' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(affdate_base(normaliser_date($Pile[$SP]['date']),'jourcourt','abbr')))))!=='' ?
		((	'<span title="' .
	retablir_echappements_modeles(interdire_scripts(heures_minutes(normaliser_date($Pile[$SP]['date'])))) .
	'">') . $t1 . '</span>') :
		'') .
'</td>
			<td class=\'id\'>' .
retablir_echappements_modeles(invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', (invalideur_session($Cache, $Pile[$SP]['id_article'])))?" ":"") ? (	'<a href="' .
	(invalideur_session($Cache, generer_url_ecrire('article_edit',(	'id_article=' .
		(invalideur_session($Cache, $Pile[$SP]['id_article'])))))) .
	'" title="' .
	attribut_html($l2) .
	'">' .
	(invalideur_session($Cache, $Pile[$SP]['id_article'])) .
	'</a>'):(	(invalideur_session($Cache, $Pile[$SP]['id_article'])) .
	'
			')))) .
'</td>
		</tr>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_art @ ../prive/objets/liste/articles.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/liste/articles.html
// Temps de compilation total: 136.533 ms
//

function html_690788c8b7584fa7119de66e572bf536($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = (defaut_tri_defined(array('date' => (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'date_sens', null), '-1'),true))), 'num titre' => '1', 'id_article' => '1', 'points' => '-1
')))))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_liste_arthtml_690788c8b7584fa7119de66e572bf536($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		retablir_echappements_modeles(filtre_pagination_dist($Numrows["_liste_art"]["grand_total"],
 		'_liste_art',
		isset($Pile[0]['debut_liste_art'])?$Pile[0]['debut_liste_art']:intval(_request('debut_liste_art')),
		(($a = intval((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10), false, '', '', array())) .
		'
<div class="liste-objets articles">
<table class=\'spip liste\'>
' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'titre', null), (singulier_ou_pluriel(($Numrows['_liste_art']['grand_total'] ?? $Numrows['_liste_art']['total'] ?? 0),'info_1_article','info_nb_articles')))))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		retablir_echappements_modeles(calculer_balise_tri('statut', (	'<span title="' .
			attribut_html(_T('public|spip|ecrire:lien_trier_statut')) .
			'">#</span>'), 'ajax', 'session_liste_art', (($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'session_liste_art']))?$Pile[0]['sens'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('sens'.'session_liste_art'))?session_get('sens'.'session_liste_art'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), '_liste_art')) .
		'</th>
			<th class=\'titre principale\' scope=\'col\'>' .
		retablir_echappements_modeles(calculer_balise_tri('num titre', label_nettoyer(_T('public|spip|ecrire:info_titre')), 'ajax', 'session_liste_art', (($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'session_liste_art']))?$Pile[0]['sens'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('sens'.'session_liste_art'))?session_get('sens'.'session_liste_art'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), '_liste_art')) .
		'</th>
			<th class=\'nologo\'></th>
			<th class=\'auteur\' scope=\'col\'>' .
		_T('public|spip|ecrire:auteur') .
		'</th>
			<th class=\'date secondaire\' scope=\'col\'>' .
		retablir_echappements_modeles(calculer_balise_tri('date', _T('public|spip|ecrire:date'), 'ajax', 'session_liste_art', (($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'session_liste_art']))?$Pile[0]['sens'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('sens'.'session_liste_art'))?session_get('sens'.'session_liste_art'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), '_liste_art')) .
		'</th>
			<th class=\'id\' scope=\'col\'>' .
		retablir_echappements_modeles(calculer_balise_tri('id_article', _T('public|spip|ecrire:info_numero_abbreviation'), 'ajax', 'session_liste_art', (($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):''), ((intval($t=(isset($Pile[0]['sens'.'session_liste_art']))?$Pile[0]['sens'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('sens'.'session_liste_art'))?session_get('sens'.'session_liste_art'):(is_array($s=(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'session_liste_art']))?$Pile[0]['tri'.'session_liste_art']:((strncmp('session_liste_art','session',7)==0 AND session_get('tri'.'session_liste_art'))?session_get('tri'.'session_liste_art'):(interdire_scripts(defaut_tri_par(entites_html(sinon(table_valeur($Pile[0]??[], (string)'par', null), 'date'),true),(table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)))))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1), (table_valeur($Pile["vars"]??[], (string)'defaut_tri', null)), '_liste_art')) .
		'</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	' .
		retablir_echappements_modeles(changer_typo('')) .
		'
	</tbody>
</table>
' .
		(($t3 = strval(retablir_echappements_modeles(filtre_pagination_dist($Numrows["_liste_art"]["grand_total"],
 		'_liste_art',
		isset($Pile[0]['debut_liste_art'])?$Pile[0]['debut_liste_art']:intval(_request('debut_liste_art')),
		(($a = intval((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nb', null), '10'),true))))) ? $a : 10), true, (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'pagination', null), 'prive'),true))), '', array()))))!=='' ?
				('<nav class=\'pagination\'>' . $t3 . '</nav>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(retablir_echappements_modeles(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'sinon', null), '')))))!=='' ?
			('
<div class="liste-objets articles caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_690788c8b7584fa7119de66e572bf536', $Cache, $page, '../prive/objets/liste/articles.html');
}
