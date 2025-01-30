<?php

/*
 * Squelette : squelettes/slider.html
 * Date :      Tue, 21 Jan 2025 13:08:29 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:14 GMT
 * Boucles :   _slide_indicators, _slide
 */ 

function BOUCLE_slide_indicatorshtml_840ebb0d0a43cd75accff45f88a62e80(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_slide_indicators';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', "6"));
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
		array('squelettes/slider.html','html_840ebb0d0a43cd75accff45f88a62e80','_slide_indicators',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_slide_indicators']['compteur_boucle'] = 0;
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_slide_indicators']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
          <li data-mdb-target="#de-carousel" data-mdb-slide-to="' .
retablir_echappements_modeles(moins(($Numrows['_slide_indicators']['compteur_boucle'] ?? 0),'1')) .
'" class="' .
(($t1 = strval(retablir_echappements_modeles((((($Numrows['_slide_indicators']['compteur_boucle'] ?? 0) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'active') :
		'') .
'"></li>
          ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_slide_indicators @ squelettes/slider.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_slidehtml_840ebb0d0a43cd75accff45f88a62e80(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_slide';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', "6"));
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
		array('squelettes/slider.html','html_840ebb0d0a43cd75accff45f88a62e80','_slide',16,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_slide']['compteur_boucle'] = 0;
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_slide']['compteur_boucle']++;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
          <div class="carousel-item ' .
(($t1 = strval(retablir_echappements_modeles((((($Numrows['_slide']['compteur_boucle'] ?? 0) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'active') :
		'') .
' jarallax">
              <img src="' .
retablir_echappements_modeles(extraire_attribut(quete_html_logo(quete_logo('id_article', 'ON', $Pile[$SP]['id_article'], ''), '', ''),'src')) .
'" class="jarallax-img" alt="Slide Image">
              <div class="mask">
                  <div class="no-top no-bottom">
                      <div class="h-100 v-center">
                          <div class="container">
                              <div class="row gx-5 align-items-center" style="color: white;">
                                  <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                      <h1 class="s3 mb-3 wow fadeInUp" style="color: rgb(236, 234, 234);">' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h1>
                                      <p class="lead wow fadeInUp" data-wow-delay=".3s">' .
retablir_echappements_modeles(interdire_scripts(textebrut(propre($Pile[$SP]['texte'], $connect, $Pile[0])))) .
'</p>
                                      <div class="spacer-10"></div>
                                      <a class="btn-line mb10 wow fadeInUp" data-wow-delay=".6s" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url($Pile[$SP]['id_article'], 'article', '', '', true)))) .
'" style="color: white;">Discover</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_slide @ squelettes/slider.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/slider.html
// Temps de compilation total: 1.019 ms
//

function html_840ebb0d0a43cd75accff45f88a62e80($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- content begin -->
<div class="no-bottom no-top" id="content">
  <div id="top"></div>

  <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-interval="5000" data-mdb-wrap="true">

      <!-- Indicators -->
      <ol class="carousel-indicators z1000">
          ' .
BOUCLE_slide_indicatorshtml_840ebb0d0a43cd75accff45f88a62e80($Cache, $Pile, $doublons, $Numrows, $SP) .
'
      </ol>

      <!-- Inner -->
      <div class="carousel-inner position-relative">
          ' .
BOUCLE_slidehtml_840ebb0d0a43cd75accff45f88a62e80($Cache, $Pile, $doublons, $Numrows, $SP) .
'
      </div>
      <!-- Inner End -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>

      <div class="de-gradient-edge-bottom"></div>
  </section>
</div>
<!-- content close -->
');

	return analyse_resultat_skel('html_840ebb0d0a43cd75accff45f88a62e80', $Cache, $page, 'squelettes/slider.html');
}
