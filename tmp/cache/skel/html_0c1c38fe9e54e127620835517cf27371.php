<?php

/*
 * Squelette : squelettes/sommaire.html
 * Date :      Wed, 22 Jan 2025 13:02:00 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:14 GMT
 * Boucles :   _car, _feature, _first, _second, _car1, _three, _four
 */ 

function BOUCLE_carhtml_0c1c38fe9e54e127620835517cf27371(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_car';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.titre",
		"articles.soustitre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', "3"));
		$command['join'] = array();
		$command['limit'] = '0,4';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_0c1c38fe9e54e127620835517cf27371','_car',20,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                      <div class="col-lg-3 col-md-6 mb-4">
                          <div class="de-item mb30">
                              <div class="d-img">
                                  <img src="' .
retablir_echappements_modeles(extraire_attribut(quete_html_logo(quete_logo('id_article', 'ON', $Pile[$SP]['id_article'], ''), '', ''),'src')) .
'" class="img-fluid" alt="">
                              </div>
                              <div class="d-info">
                                  <div class="d-text">
                                      <h4>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h4>
                                      <h5>' .
retablir_echappements_modeles(interdire_scripts(typo($Pile[$SP]['soustitre'], "TYPO", $connect, $Pile[0]))) .
'</h5>
                                      <div class="d-atr-group">
                                          <span class="d-atr"><img src="images/icons/1-green.svg" alt="">5</span>
                                          <span class="d-atr"><img src="images/icons/2-green.svg" alt="">2</span>
                                          <span class="d-atr"><img src="images/icons/3-green.svg" alt="">4</span>
                                          <span class="d-atr"><img src="images/icons/4-green.svg" alt="">SUV</span>
                                      </div>
                                      <div class="d-price">
                                          Daily rate from <span>' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'</span><br>
                                          <a class="btn-main" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('8', 'rubrique', '', '', true)))) .
'">Rent Now</a>
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
		spip_log(intval(1000*$timer)."ms BOUCLE_car @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_featurehtml_0c1c38fe9e54e127620835517cf27371(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_feature';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.texte",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', "9"));
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
		array('squelettes/sommaire.html','html_0c1c38fe9e54e127620835517cf27371','_feature',57,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                        <div class="col-lg-6 offset-lg-3 text-center" style="background-size: 100%; background-repeat: no-repeat;">
                            <h2>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h2>
                            <p>' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'</p>
                            <div class="spacer-20" style="background-size: 100%; background-repeat: no-repeat;"></div>
                        </div>
                      ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_feature @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_firsthtml_0c1c38fe9e54e127620835517cf27371(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_first';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "26"));
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
		array('squelettes/sommaire.html','html_0c1c38fe9e54e127620835517cf27371','_first',68,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                                <div class="d-inner" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h4>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h4>
                                    ' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'
                                </div>
                              ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_first @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_secondhtml_0c1c38fe9e54e127620835517cf27371(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_second';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "27"));
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
		array('squelettes/sommaire.html','html_0c1c38fe9e54e127620835517cf27371','_second',75,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                             <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s" style="background-size: 100%; background-repeat: no-repeat; visibility: hidden; animation-delay: 0.75s; animation-name: none;">
                                <i class="fa bg-color fa-road"></i>
                                <div class="d-inner" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h4>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h4>
                                    ' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'
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
		spip_log(intval(1000*$timer)."ms BOUCLE_second @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_car1html_0c1c38fe9e54e127620835517cf27371(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_car1';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', "9"));
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
		array('squelettes/sommaire.html','html_0c1c38fe9e54e127620835517cf27371','_car1',87,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' 
                          <img src="' .
retablir_echappements_modeles(extraire_attribut(quete_html_logo(quete_logo('id_rubrique', 'ON', $Pile[$SP]['id_rubrique'], quete_parent($Pile[$SP]['id_rubrique'])), '', ''),'src')) .
'" alt="" class="img-fluid wow fadeInUp" style="visibility: hidden; animation-name: none;">
                          ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_car1 @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_threehtml_0c1c38fe9e54e127620835517cf27371(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_three';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "28"));
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
		array('squelettes/sommaire.html','html_0c1c38fe9e54e127620835517cf27371','_three',92,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s" style="background-size: 100%; background-repeat: no-repeat; visibility: hidden; animation-delay: 1s; animation-name: none;">
                                <i class="fa bg-color fa-tag"></i>
                                <div class="d-inner" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h4>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h4>
                                    ' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'
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
		spip_log(intval(1000*$timer)."ms BOUCLE_three @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_fourhtml_0c1c38fe9e54e127620835517cf27371(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_four';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "29"));
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
		array('squelettes/sommaire.html','html_0c1c38fe9e54e127620835517cf27371','_four',102,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s" style="background-size: 100%; background-repeat: no-repeat; visibility: hidden; animation-delay: 1.25s; animation-name: none;">
                                <i class="fa bg-color fa-map-pin"></i>
                                <div class="d-inner" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h4>' .
retablir_echappements_modeles(interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre'], "TYPO", $connect, $Pile[0])))) .
'</h4>
                                    ' .
retablir_echappements_modeles(interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0]))) .
'
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
		spip_log(intval(1000*$timer)."ms BOUCLE_four @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/sommaire.html
// Temps de compilation total: 29.059 ms
//

function html_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("header") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire.html\',\'html_0c1c38fe9e54e127620835517cf27371\',\'\',1,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>

       <!-- ***** SLIDER Start ***** -->
    ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("slider") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire.html\',\'html_0c1c38fe9e54e127620835517cf27371\',\'\',4,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
        <!-- ***** SLIDER End ***** -->

        <section id="section-cars" style="background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <span class="subtitle">Enjoy Your Ride</span>
                        <h2>Our Vehicle Fleet</h2>
                        <p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for unforgettable journeys.</p>
                        <div class="spacer-20"></div>
                    </div>
                </div>
        
                <div id="items-grid" class="container wow fadeIn">
                  <div class="row">
                      ' .
BOUCLE_carhtml_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                  </div>
              </div>
              
            </div>
        </section>
        
       
        
                     
            <section aria-label="section" style="background-size: 100%; background-repeat: no-repeat;">
                <div class="container" style="background-size: 100%; background-repeat: no-repeat;">
                    <div class="row align-items-center" style="background-size: 100%; background-repeat: no-repeat;">
                      ' .
BOUCLE_featurehtml_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                        <div class="clearfix" style="background-size: 100%; background-repeat: no-repeat;"></div>
                        <div class="col-lg-3" style="background-size: 100%; background-repeat: no-repeat;">
                          <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s" style="background-size: 100%; background-repeat: no-repeat; visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                            <i class="fa bg-color fa-trophy"></i>
                            ' .
BOUCLE_firsthtml_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                              </div>
                              ' .
BOUCLE_secondhtml_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                        </div>

                        <div class="col-lg-6" style="background-size: 100%; background-repeat: no-repeat;">
                          ' .
BOUCLE_car1html_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                        </div>
                        <div class="col-lg-3" style="background-size: 100%; background-repeat: no-repeat;">
                           ' .
BOUCLE_threehtml_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                          ' .
BOUCLE_fourhtml_0c1c38fe9e54e127620835517cf27371($Cache, $Pile, $doublons, $Numrows, $SP) .
'
                    </div>
                </div>
            </section>

          

            <section id="section-fun-facts" class="bg-color text-light">
                <div class="container">
                    <div class="row g-custom-x force-text-center">
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count wow fadeInUp">
                                <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                                Successful Relocations
                                <p class="d-small">Helping clients move smoothly with precision and care across various locations.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count wow fadeInUp">
                                <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                                Satisfied Clients
                                <p class="d-small">Delivering exceptional service and exceeding customer expectations every time.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count wow fadeInUp">
                                <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                                Vehicles in Fleet
                                <p class="d-small">A wide range of reliable and well-maintained vehicles to suit every need.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count wow fadeInUp">
                                <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                                Years of Expertise
                                <p class="d-small">Building trust and delivering excellence for over a decade in the relocation industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#181818">
                <div class="wow fadeInRight d-flex">
                  <div class="de-marquee-list">
                    <div class="d-item">
                      <span class="d-item-txt">SUV</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Hatchback</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Crossover</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Convertible</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sedan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sports Car</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Coupe</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Station Wagon</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Truck</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivans</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Exotic Cars</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                     </div>
                  </div>

                  <div class="de-marquee-list">
                    <div class="d-item">
                      <span class="d-item-txt">SUV</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Hatchback</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Crossover</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Convertible</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sedan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sports Car</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Coupe</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Station Wagon</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Truck</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivans</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Exotic Cars</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                     </div>
                  </div>
                </div>
            </section>
            
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>


         <!-- Owl Carousel Initialization -->
         <script>
            $(document).ready(function () {
                $("#items-carousel").owlCarousel({
                    loop: true,          // Enable infinite looping
                    margin: 25,          // Margin between items
                    nav: true,           // Show navigation buttons
                    dots: false,         // Hide dots
                    autoplay: true,      // Auto-slide items
                    autoplayTimeout: 3000, // Set auto-slide duration
                    responsive: {
                        0: {
                            items: 1     // 1 item on small screens
                        },
                        768: {
                            items: 2     // 2 items on medium screens
                        },
                        1200: {
                            items: 3     // 3 items on large screens
                        }
                    }
                });
            });
        </script>
        
        ' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette("footer") . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire.html\',\'html_0c1c38fe9e54e127620835517cf27371\',\'\',231,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>');

	return analyse_resultat_skel('html_0c1c38fe9e54e127620835517cf27371', $Cache, $page, 'squelettes/sommaire.html');
}
