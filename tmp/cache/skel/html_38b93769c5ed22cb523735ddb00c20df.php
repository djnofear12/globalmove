<?php

/*
 * Squelette : ../prive/modeles/pagination_prive.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:04:09 GMT
 * Boucles :   _pages
 */ 

function BOUCLE_pageshtml_38b93769c5ed22cb523735ddb00c20df(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'pages', null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_pages';
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
		array('../prive/modeles/pagination_prive.html','html_38b93769c5ed22cb523735ddb00c20df','_pages',27,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_page_actuelle');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'item'] = (interdire_scripts(mult(moins(safehtml($Pile[$SP]['valeur']),'1'),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'pas', null),true))))))))))!=='' ?
		('
		' . $t1 . '
		') :
		'') .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(inserer_attribut(lien_ou_expose(ancre_url(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debut', null),true))),((table_valeur($Pile["vars"]??[], (string)'item', null) ? (table_valeur($Pile["vars"]??[], (string)'item', null)):''))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ancre', null),true)))),(filtre_pagination_affiche_texte_lien_page_dist(table_valeur($Pile["vars"]??[], (string)'type', null),(interdire_scripts(safehtml($Pile[$SP]['valeur']))),(table_valeur($Pile["vars"]??[], (string)'item', null)))),(interdire_scripts(((safehtml($Pile[$SP]['valeur']) == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true)))) ? 'span.pagination-item-label':''))),'pagination-item-label lien_pagination','','nofollow'),'aria-label',(concat(_T('lien_aller_a_la_page_nb',(array('nb' => (interdire_scripts(safehtml($Pile[$SP]['valeur'])))))),(($t3 = strval((interdire_scripts(((safehtml($Pile[$SP]['valeur']) == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true)))) ? $l1:'')))))!=='' ?
				(' (' . $t3 . ')') :
				''))))))))!=='' ?
		((	'<li class="pagination-item' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts((((safehtml($Pile[$SP]['valeur']) == (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true))))) ?' ' :'')))))!=='' ?
			($t2 . 'on active') :
			'') .
	'">') . $t1 . '</li>') :
		'') .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_pages @ ../prive/modeles/pagination_prive.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/modeles/pagination_prive.html
// Temps de compilation total: 5.595 ms
//

function html_38b93769c5ed22cb523735ddb00c20df($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' Copie de modeles/pagination.html mais permet d\'eviter de casser la pagination du prive si on surcharge la pagination publique') :
		'') .
'
' .
retablir_echappements_modeles(interdire_scripts(table_valeur($Pile[0]??[], (string)'bloc_ancre', null))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'bornes'] = (interdire_scripts(filtre_bornes_pagination_dist(entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nombre_pages', null),true))),(interdire_scripts(max(entites_html(sinon(table_valeur($Pile[0]??[], (string)'nombre_liens_max', null), ((defined('_PAGINATION_NOMBRE_LIENS_MAX')?constant('_PAGINATION_NOMBRE_LIENS_MAX'):''))),true),'3')))))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'premiere'] = (filtre_reset(table_valeur($Pile["vars"]??[], (string)'bornes', null))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'derniere'] = (filtre_end(table_valeur($Pile["vars"]??[], (string)'bornes', null))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'pages'] = (range(table_valeur($Pile["vars"]??[], (string)'premiere', null),(table_valeur($Pile["vars"]??[], (string)'derniere', null)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'type'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'type_pagination', null), 'page'),true))))) .
(($t1 = BOUCLE_pageshtml_38b93769c5ed22cb523735ddb00c20df($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'label', null),true)))))!=='' ?
				('<span class="pagination-label"><span class="label">' . $t3 . '</span></span>') :
				'') .
		'
	<ul class="pagination-items pagination_' .
		retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'type', null)) .
		'">' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'afficher_lien_precedent', null), '0'),true)) OR (((table_valeur($Pile["vars"]??[], (string)'type', null) == 'page_precedent_suivant')))) ?' ' :'')))))!=='' ?
				('
		' . $t3 . (	'
		' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'item'] = (interdire_scripts(mult(moins(entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true),'2'),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'pas', null),true)))))))) .
			'
		' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(inserer_attribut(inserer_attribut(lien_ou_expose(ancre_url(entites_html(sinon(table_valeur($Pile[0]??[], (string)'url_precedent', null), (interdire_scripts(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debut', null),true))),((table_valeur($Pile["vars"]??[], (string)'item', null) ? (table_valeur($Pile["vars"]??[], (string)'item', null)):'')))))),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ancre', null),true)))),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'label_precedent', null), (filtre_pagination_affiche_texte_lien_page_dist(table_valeur($Pile["vars"]??[], (string)'type', null),'prev',(table_valeur($Pile["vars"]??[], (string)'item', null))))),true))),(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true) <= '1') ? 'span.pagination-item-label':''))),'pagination-item-label lien_pagination','','prev nofollow'),'aria-label',_T('public|spip|ecrire:lien_aller_a_la_page_precedente')),'title',_T('public:page_precedente'))))))!=='' ?
					((	'<li class="pagination-item prev' .
				(($t5 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true) <= '1')) ?' ' :'')))))!=='' ?
						($t5 . 'disabled') :
						'') .
				'">') . $t4 . '</li>') :
					'') .
			'
		')) :
				'') .
		'
		' .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'premiere', null) > '1') ? (filtre_pagination_affiche_texte_lien_page_dist(table_valeur($Pile["vars"]??[], (string)'type', null),'1','0')):''))))!=='' ?
				((	'<li class="pagination-item"><a
	      href="' .
			retablir_echappements_modeles(interdire_scripts(attribut_url(ancre_url(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debut', null),true))),''),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ancre', null),true))))))) .
			'"
				class="pagination-item-label lien_pagination" aria-label="' .
			attribut_html(_T('public|spip|ecrire:lien_aller_a_la_premiere_page')) .
			'"
				rel="nofollow">') . $t3 . (	'</a></li>' .
			(($t4 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'premiere', null) > '2')) ?' ' :''))))!=='' ?
					($t4 . '<li
				class="pagination-item tbc disabled"><span class="pagination-item-label">…</span></li>') :
					''))) :
				'') .
		'

		') . $t1 . (	'

		' .
		retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'item'] = (interdire_scripts(mult(moins(entites_html(table_valeur($Pile[0]??[], (string)'nombre_pages', null),true),'1'),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'pas', null),true)))))))) .
		(($t3 = strval(retablir_echappements_modeles(((table_valeur($Pile["vars"]??[], (string)'derniere', null) < (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nombre_pages', null),true)))) ? (filtre_pagination_affiche_texte_lien_page_dist(table_valeur($Pile["vars"]??[], (string)'type', null),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nombre_pages', null),true))),(table_valeur($Pile["vars"]??[], (string)'item', null)))):''))))!=='' ?
				((	(($t4 = strval(retablir_echappements_modeles((((table_valeur($Pile["vars"]??[], (string)'derniere', null) < (interdire_scripts(moins(entites_html(table_valeur($Pile[0]??[], (string)'nombre_pages', null),true),'1'))))) ?' ' :''))))!=='' ?
					($t4 . '<li class="pagination-item tbc disabled"><span class="pagination-item-label">…</span></li>') :
					'') .
			'
		<li class="pagination-item"><a
		  href="' .
			retablir_echappements_modeles(interdire_scripts(attribut_url(ancre_url(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debut', null),true))),(table_valeur($Pile["vars"]??[], (string)'item', null))),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ancre', null),true))))))) .
			'"
		  class="pagination-item-label lien_pagination" aria-label="' .
			attribut_html(_T('public|spip|ecrire:lien_aller_a_la_derniere_page')) .
			'"
		  rel="nofollow">') . $t3 . '</a></li>') :
				'') .
		'

		' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'afficher_lien_tous', null), '0'),true)) OR (((table_valeur($Pile["vars"]??[], (string)'type', null) == 'prive')))) ?' ' :'')) ?' ' :'')))))!=='' ?
				($t3 . (	'
		' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(inserer_attribut(inserer_attribut(lien_ou_expose(ancre_url(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debut', null),true))),'-1'),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ancre', null),true)))),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'label_tous', null), (filtre_pagination_affiche_texte_lien_page_dist(table_valeur($Pile["vars"]??[], (string)'type', null),'tous',(table_valeur($Pile["vars"]??[], (string)'item', null))))),true))),(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true) == '0') ? 'span.pagination-item-label':''))),'pagination-item-label lien_pagination','','nofollow'),'aria-label',_T('public|spip|ecrire:lien_tout_afficher')),'title',_T('public|spip|ecrire:lien_tout_afficher'))))))!=='' ?
					((	'<li class="pagination-item all' .
				(($t5 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true) == '0')) ?' ' :'')))))!=='' ?
						($t5 . 'on active') :
						'') .
				'">') . $t4 . '</li>') :
					''))) :
				'') .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(sinon(table_valeur($Pile[0]??[], (string)'afficher_lien_suivant', null), '0'),true)) OR (((table_valeur($Pile["vars"]??[], (string)'type', null) == 'page_precedent_suivant')))) ?' ' :'')))))!=='' ?
				('
		' . $t3 . (	'
		' .
			retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'item'] = (interdire_scripts(mult(entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'pas', null),true)))))))) .
			'
		' .
			(($t4 = strval(retablir_echappements_modeles(interdire_scripts(inserer_attribut(inserer_attribut(lien_ou_expose(ancre_url(entites_html(sinon(table_valeur($Pile[0]??[], (string)'url_suivant', null), (interdire_scripts(parametre_url(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'debut', null),true))),((table_valeur($Pile["vars"]??[], (string)'item', null) ? (table_valeur($Pile["vars"]??[], (string)'item', null)):'')))))),true),(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'ancre', null),true)))),(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'label_suivant', null), (filtre_pagination_affiche_texte_lien_page_dist(table_valeur($Pile["vars"]??[], (string)'type', null),'next',(table_valeur($Pile["vars"]??[], (string)'item', null))))),true))),(interdire_scripts(((entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true) >= (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nombre_pages', null),true)))) ? 'span.pagination-item-label':''))),'pagination-item-label lien_pagination','','next nofollow'),'aria-label',_T('public|spip|ecrire:lien_aller_a_la_page_suivante')),'title',_T('public:page_suivante'))))))!=='' ?
					((	'<li class="pagination-item next' .
				(($t5 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'page_courante', null),true) >= (interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'nombre_pages', null),true))))) ?' ' :'')))))!=='' ?
						($t5 . 'disabled') :
						'') .
				'">') . $t4 . '</li>') :
					'') .
			'
		')) :
				'') .
		'
	</ul>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_38b93769c5ed22cb523735ddb00c20df', $Cache, $page, '../prive/modeles/pagination_prive.html');
}
