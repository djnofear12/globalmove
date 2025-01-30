<?php

/*
 * Squelette : ../prive/objets/liste/auteurs_enligne.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:06 GMT
 * Boucles :   _enligne
 */ 

function BOUCLE_enlignehtml_6e5e7c2e6267dc7e3f1685eaf7c9c222(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	$in[]= '1comite';
	$in[]= '0minirezo';
	$command['pagination'] = array((isset($Pile[0]['debut_enligne']) ? $Pile[0]['debut_enligne'] : null), 10);
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_enligne';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.en_ligne",
		"auteurs.id_auteur",
		"auteurs.nom");
		$command['orderby'] = array('auteurs.en_ligne DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('NOT', 
			array('=', 'auteurs.id_auteur', sql_quote(retablir_echappements_modeles(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"]??[], (string)'id_auteur', null)))), '', 'bigint(21) NOT NULL AUTO_INCREMENT'))), sql_in('auteurs.statut', $in), 
			array('NOT', 
			array('=', 'auteurs.imessage', "'non'")), 
			array('>', 'auteurs.en_ligne', sql_quote(retablir_echappements_modeles(date('Y-m-d H:i:s',(strtotime('-15 minutes')))), '', 'datetime NOT NULL DEFAULT \'0000-00-00 00:00:00\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = Spip\Compilateur\Iterateur\Factory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/auteurs_enligne.html','html_6e5e7c2e6267dc7e3f1685eaf7c9c222','_enligne',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_enligne']['compteur_boucle'] = 0;
	$Numrows['_enligne']['command'] = $command;
	$Numrows['_enligne']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_enligne']) ? $Pile[0]['debut_enligne'] : _request('debut_enligne');
	if ($debut_boucle && $debut_boucle[0] === '@') {
		$debut_boucle = $Pile[0]['debut_enligne'] = quete_debut_pagination('id_auteur',$Pile[0]['@id_auteur'] = substr($debut_boucle,1),10,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_enligne']['total']-1)/(10))*(10)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_enligne']['total'] : $debut_boucle + 9), $Numrows['_enligne']['total'] - 1);
	$Numrows['_enligne']['grand_total'] = $Numrows['_enligne']['total'];
	$Numrows['_enligne']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_enligne']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_enligne']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_enligne']['compteur_boucle']++;
		if ($Numrows['_enligne']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_enligne']['compteur_boucle']-1 > $fin_boucle) break;
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
		spip_log(intval(1000*$timer)."ms BOUCLE_enligne @ ../prive/objets/liste/auteurs_enligne.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/liste/auteurs_enligne.html
// Temps de compilation total: 8.416 ms
//

function html_6e5e7c2e6267dc7e3f1685eaf7c9c222($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_enlignehtml_6e5e7c2e6267dc7e3f1685eaf7c9c222($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class=\'en_lignes\'>
<b>' .
		_T('public|spip|ecrire:info_en_ligne') .
		'</b>&nbsp;
') . $t1 . (	(($t3 = strval(retablir_echappements_modeles((((($Numrows['_enligne']['grand_total'] ?? $Numrows['_enligne']['total'] ?? 0) > '10')) ?' ' :''))))!=='' ?
				('&nbsp;...
	' . $t3 . (	'
	(' .
			retablir_echappements_modeles(objet_afficher_nb(($Numrows['_enligne']['grand_total'] ?? $Numrows['_enligne']['total'] ?? 0),'auteur')) .
			')
	')) :
				'') .
		'
</div>
')) :
		'');

	return analyse_resultat_skel('html_6e5e7c2e6267dc7e3f1685eaf7c9c222', $Cache, $page, '../prive/objets/liste/auteurs_enligne.html');
}
