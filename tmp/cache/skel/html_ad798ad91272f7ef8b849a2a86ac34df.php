<?php

/*
 * Squelette : ../prive/squelettes/body.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/body.html
// Temps de compilation total: 3.803 ms
//

function html_ad798ad91272f7ef8b849a2a86ac34df($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles(pipeline( 'body_prive' , ((	'<body class="' .
		(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'type-page', null), 'page'),true))) .
		(($t3 = strval((interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'composition', null), ''),true)))))!=='' ?
				((	' ' .
			(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'type-page', null), 'page'),true))) .
			'_') . $t3) :
				'') .
		(($t3 = strval((interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'statut', null))))))!=='' ?
				(' statut_' . $t3) :
				'') .
		(($t3 = strval((interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'webmestre', null))))))!=='' ?
				(' webmestre_' . $t3) :
				'') .
		(($t3 = strval((interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null))))))!=='' ?
				(' auteur_' . $t3) :
				'') .
		' ' .
		(init_body_class('')) .
		(($t3 = strval((interdire_scripts(((filtre_match_dist(entites_html(sinon(table_valeur($Pile[0]??[], (string)'type-page', null), 'page'),true),'_edit$')) ?' ' :'')))))!=='' ?
				($t3 . 'edition') :
				'') .
		'">')) )) .
'
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/barre-nav') . ', array(\'recherche\' => ' . argumenter_squelette(($Pile[0]['recherche'] ?? null)) . ',
	\'plugins\' => ' . argumenter_squelette(retablir_echappements_modeles(parametres_css_prive(''))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/body.html\',\'html_ad798ad91272f7ef8b849a2a86ac34df\',\'\',2,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
	<div id="page">
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/auteurs_enligne') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/body.html\',\'html_ad798ad91272f7ef8b849a2a86ac34df\',\'\',4,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
		' .
retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, alertes_auteur(table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null))))) .
'
		<div class="largeur">
			<div id="haut">
				<div id="chemin">
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/hierarchie/' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type-page', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/body.html\',\'html_ad798ad91272f7ef8b849a2a86ac34df\',\'\',9,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('hierarchie') . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
				</div>
				' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '<!--
				Ici, # INCLURE car top/xx peut affecter la globale \'pleine_largeur\'
				-->') :
		'') .
'
				' .
retablir_echappements_modeles(recuperer_fond( (	'prive/squelettes/top/' .
	(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type-page', null),true)))) , array_merge($Pile[0],array()), array('ajax' => ($v=( 'top' ))?$v:true,'compil'=>array('../prive/squelettes/body.html','html_ad798ad91272f7ef8b849a2a86ac34df','',12,$GLOBALS['spip_lang'])), _request('connect') ?? '')) .
'</div>
			<div id="conteneur" class="' .
retablir_echappements_modeles(interdire_scripts((is_string(null)?vide($GLOBALS['largeur_ecran']=null):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:'')))) .
'">
				<div id="navigation" class=\'lat\' role=\'contentinfo\'>
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/navigation/' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type-page', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/body.html\',\'html_ad798ad91272f7ef8b849a2a86ac34df\',\'\',16,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('navigation') . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>' .
'
				</div>
				<div id="extra" class=\'lat\' role=\'complementary\'>
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/extra/' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type-page', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/body.html\',\'html_ad798ad91272f7ef8b849a2a86ac34df\',\'\',19,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('extra') . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>' .
'
				</div>
				<div id="contenu" role=\'main\'>
					' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/squelettes/contenu/' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'type-page', null),true))))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/body.html\',\'html_ad798ad91272f7ef8b849a2a86ac34df\',\'\',22,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('contenu') . '))?$v:true), _request(\'connect\') ?? \'\');
?'.'>
				</div>
			</div>
			<br class="nettoyeur">
		</div>
		<div id="pied">
			<div class="largeur">
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/pied') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/squelettes/body.html\',\'html_ad798ad91272f7ef8b849a2a86ac34df\',\'\',29,$GLOBALS[\'spip_lang\'])), _request(\'connect\') ?? \'\');
?'.'>
			</div>
		</div>
	</div>
</body>
');

	return analyse_resultat_skel('html_ad798ad91272f7ef8b849a2a86ac34df', $Cache, $page, '../prive/squelettes/body.html');
}
