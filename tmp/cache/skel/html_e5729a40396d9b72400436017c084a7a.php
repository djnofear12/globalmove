<?php

/*
 * Squelette : squelettes/article.html
 * Date :      Wed, 22 Jan 2025 12:02:24 GMT
 * Compile :   Mon, 27 Jan 2025 11:17:35 GMT
 * Boucles :   _article_details, _all_articles
 */ 

function BOUCLE_article_detailshtml_e5729a40396d9b72400436017c084a7a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (($Pile[0]['id_article'] ?? null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_article_details';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.descriptif",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), (!is_whereable(($Pile[0]['id_article'] ?? null)) ? '' : ((is_array(($Pile[0]['id_article'] ?? null))) ? sql_in('articles.id_article', $in) : 
			array('=', 'articles.id_article', sql_quote(($Pile[0]['id_article'] ?? null), '','bigint(21) NOT NULL AUTO_INCREMENT')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/article.html','html_e5729a40396d9b72400436017c084a7a','_article_details',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
        <!-- Display details for the specific article -->
        <section id="section-car-details">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div id="slider-carousel" class="owl-carousel">
                            <div class="item">
                                <img src="' .
retablir_echappements_modeles(extraire_attribut(quete_html_logo(quete_logo('id_article', 'ON', $Pile[$SP]['id_article'], ''), '', ''),'src')) .
'" alt="' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h3>
                        ' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))) .
'
                        <div class="spacer-single"></div>
                        ' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'
                    </div>
                    <div class="col-lg-3">
                        <div class="de-price text-center">
                            Daily rate
                            <h3>$180</h3>
                        </div>
                        <div class="spacer-30"></div>
                        <a class="btn-main" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_article'], 'article', '', '', true)))) .
'">Rent Now</a>
                    </div>
                </div>
            </div>
        </section>
    ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_article_details @ squelettes/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_all_articleshtml_e5729a40396d9b72400436017c084a7a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_all_articles';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.descriptif",
		"articles.id_article",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', "8"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/article.html','html_e5729a40396d9b72400436017c084a7a','_all_articles',55,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
        <section id="section-article-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h3>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h3>
                        <p>' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]))) .
'</p>
                        <a class="btn-main" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_article'], 'article', '', '', true)))) .
'">View Details</a>
                    </div>
                </div>
            </div>
        </section>
    ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_all_articles @ squelettes/article.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/article.html
// Temps de compilation total: 19.080 ms
//

function html_e5729a40396d9b72400436017c084a7a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("header") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_e5729a40396d9b72400436017c084a7a\',\'\',1,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
<!-- content begin -->
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="images/background/2.jpg" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Vehicle Fleet</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- Check if id_article is provided -->
    ' .
BOUCLE_article_detailshtml_e5729a40396d9b72400436017c084a7a($Cache, $Pile, $doublons, $Numrows, $SP) .
'

    <!-- If no id_article, show a list of articles -->
    ' .
BOUCLE_all_articleshtml_e5729a40396d9b72400436017c084a7a($Cache, $Pile, $doublons, $Numrows, $SP) .
'

</div>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("footer") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_e5729a40396d9b72400436017c084a7a\',\'\',29,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
');

	return analyse_resultat_skel('html_e5729a40396d9b72400436017c084a7a', $Cache, $page, 'squelettes/article.html');
}
