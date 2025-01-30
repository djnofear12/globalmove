<?php

/*
 * Squelette : ../prive/themes/spip/picker.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:51 GMT
 * Boucles :   _objets
 */ 

function BOUCLE_objetshtml_c183de20ac7376b368d986c868263f32(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(retablir_echappements_modeles(lister_tables_objets_sql(null)));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
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
		array('../prive/themes/spip/picker.css.html','html_c183de20ac7376b368d986c868263f32','_objets',212,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'petite_icone'] = (((($a = chemin_image((string)(	(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'icone_objet')))) .
		'-12.png'))) OR (is_string($a) AND strlen($a))) ? $a : (extraire_attribut(filtrer('image_graver', filtrer('image_reduire',chemin_image((string)(	(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'icone_objet')))) .
			'-16.png')),'12')),'src')))))) .
'
ul.item_picked li.' .
retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'type')))) .
'{padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':24px;background-image:url("' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'petite_icone', null)) .
'");background-size:12px;}
.item_picker .' .
retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'table_objet')))) .
' .type_objet {padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':24px; background:url("' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'petite_icone', null)) .
'") no-repeat' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null))))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
'center; background-size:12px;}
.item_picker .frame ul li.' .
retablir_echappements_modeles(interdire_scripts(safehtml(table_valeur($Pile[$SP]['valeur'], 'type')))) .
'{background:url("' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'petite_icone', null)) .
'") no-repeat' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null))))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
'2px;background-size:12px;}
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets @ ../prive/themes/spip/picker.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/picker.css.html
// Temps de compilation total: 2.981 ms
//

function html_c183de20ac7376b368d986c868263f32($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).
	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_claire', null), 'edf3fe'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_foncee', null), '3874b0'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
'/* Ancien selecteur de rubriques */
.selecteur_parent{font-size: 90%; width: 99%;} /* appliquee sur le <select> */
option.selec_rub { background-position: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
' center; background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'rubrique-xx.svg')) .
'"); background-size:12px; background-repeat: no-repeat; padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
': 16px; }
option.niveau_1 { font-weight: bold; background: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
'; background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'secteur-xx.svg')) .
'"); background-size: 12px; background-repeat:  no-repeat; color: #444;}
option.niveau_2 { background:#eee; color: #202020; border-bottom: 1px solid ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
'; }
option.niveau_3 { background:#eee; color: #404040; }
option.niveau_4 { background:#eee; color: #606060; }
option.niveau_5 { background:#eee; color: #808080; }
option.niveau_6 { background:#eee; color: #a0a0a0; }

/* Plongeur
 * Voir aussi à la fin des règles du selecteur ajax */
div.petite-racine,
a.petite-racine {
	background: ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','1','99')))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat;
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'racine-xx.svg')) .
'");
	background-size: 14px;
	background-position: 5px center;
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 24px;
	padding-top: 0.2em;
	padding-bottom: 0.2em;
	background-color: #fff;
	border: 1px solid var(--spip-form-border-color);
	border-bottom: 0;
	width: 10em;
	border-top-left-radius: var(--spip-form-border-radius);
	border-top-right-radius: var(--spip-form-border-radius);
}
div.petite-rubrique,
a.petite-rubrique {
	background: ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','1','99')))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat;
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'rubrique-xx.svg')) .
'");
	background-size:14px;
	background-position: 5px center;
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 24px;
	cursor: pointer;
}
div.petit-secteur,
a.petit-secteur {
	background: ' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','1','99')))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat;
	background-image: url("' .
retablir_echappements_modeles(chemin_image((string)'secteur-xx.svg')) .
'");
	background-size: 14px;
	background-position: 5px center;
	padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
': 24px;
}

:is(div, a).rub-ouverte {
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 10px;
	background: url("' .
retablir_echappements_modeles(chemin_image((string)(	'chevron-' .
	((table_valeur($Pile["vars"]??[], (string)'rtl', null) ? 'left':'right')) .
	'-24.svg'))) .
'") var(--spip-right) center no-repeat;
}


/* Selecteur ajax */
.rubrique_actuelle {
	clear: both;
	display: flex;
	align-items: center;
}
#titreparent[disabled=disabled] {
	width: 100% !important;
	border: none;
	background: none;
	color: inherit;
	font-weight: 500;
	padding: 0;
}
.rubrique-search {
	color: var(--spip-color-theme);
	border: 1px solid var(--spip-color-theme);
	border-radius: 99em;
	padding: 0.33em;
}
.rubrique-search:hover,
.rubrique-search:focus {
	color: var(--spip-color-theme-darker);
	border: 1px solid var(--spip-color-theme-darker);
}
.rubrique-search.toggled {
	background-color: var(--spip-color-theme);
	border-color: var(--spip-color-theme);
	color: var(--spip-color-white);
}
.rubrique-search.toggled:hover,
.rubrique-search.toggled:focus {
	background-color: var(--spip-color-theme-darker);
	border-color: var(--spip-color-theme-darker);
}
.rubrique-search svg {
	width: 0.85em;
	height: 0.85em;
}
.recherche_rapide_parent {
	margin-top: -2.2em;
	float: var(--spip-right);
	z-index: 2;
	padding-left: 2em;
}

.recherche_rapide_parent input.search {
	border-radius: 99em;
	padding: 0.33em 1em;
	z-index: 2;
	position: relative;
}
.recherche_rapide_parent .loader {
	order: 2;
}
/**/
#choix_parent{
	margin-top: 0.5em;
}
#choix_parent_principal {
	position: relative;
	clear: both;
	height: 25vh;
	min-height: 15em;
	overflow: auto;
	background: var(--spip-color-theme-white);
	border: 1px solid var(--spip-form-border-color);
	border-top-left-radius: var(--spip-form-border-radius);
	border-top-right-radius: var(--spip-form-border-radius);
}
#choix_parent_selection {
	margin-top: -1px;
}
.informer {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 0.5em !important;
	border-bottom-left-radius: var(--spip-form-border-radius);
	border-bottom-right-radius: var(--spip-form-border-radius);
	background-color: var(--spip-color-theme-light);
}
.informer__titre,
.informer__descriptif,
.informer__media {
	margin-bottom: 0.5em;
}
.informer__media {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0 !important;
	margin-top: 0 !important;
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 1em;
}
.informer__action {
	margin-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['left'] ?? null))) .
': 1em;
}
.informer .btn {
	margin: 0;
}
.informer-auteur {
	/* background: #fff; */
	/* padding: 5px; */
	/* border-top: 0; */
}
/**/
#choix_parent .item {
	color: var(--spip-color-gray-dark);
	background-color: var(--spip-color-white);
	display: block;
}
#choix_parent .item.on {
	color: var(--spip-color-black);
	background-color: var(--spip-color-theme-lighter);
}
#choix_parent .item.on {
	color: var(--spip-color-black);
}
#choix_parent .item:hover {
	color: var(--spip-color-black);
	cursor: pointer;
}
/* voir aussi règles du plongeur */
#choix_parent .petit-item > div {
	display: flex; /* rendre tout le bloc cliquable */
}
#choix_parent .petit-item a {
	padding-top: 0.2em;
	padding-bottom: 0.2em;
	padding-' .
retablir_echappements_modeles(interdire_scripts(($Pile[0]['right'] ?? null))) .
': 0.2em;
	flex: 1 1 auto;
	color: inherit;
}
#choix_parent .petit-item:hover,
#choix_parent .petit-item:focus {
	background-color: var(--spip-color-theme-lightest);
}


/* ----- */

/* Les éléments propres à chaque objet */
' .
BOUCLE_objetshtml_c183de20ac7376b368d986c868263f32($Cache, $Pile, $doublons, $Numrows, $SP) .
'

/* Styles des éléments déjà sélectionnés */
ul.item_picked,fieldset ul.item_picked {list-style:none;margin:0;padding:0;float:left;}
ul.item_picked li {margin:0 2px 2px;padding:2px;background:#eee;border:1px solid ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
';float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';clear:none;background-repeat:no-repeat;background-position: ' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null))))!=='' ?
		($t1 . ' ') :
		'') .
'center;}
ul.item_picked li span.sep {display:none;}
ul.item_picked li label {margin:0;display:inline;float:none;}
.js ul.item_picked li .checkbox {display: none;}

ul.item_picked.select li {padding:2px 0;border:0;font-weight:bold;background:none;float:none;}
ul.item_picked.select ul > li {float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';}
ul.item_picked.changing {}

/* Le bouton pour ouvrir le sélecteur */
.picker_bouton {float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
';clear:both;}

/* Styles de la partie contenant le sélecteur */
.item_picker {clear:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';font-size:0.95em;}
.item_picker .navigateur{border:1px solid ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
';padding:0.2em;width:20em;} /* pas trop large pour une meilleure lecture */
.item_picker .chemin {background:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
'; margin:0 0 0.25em 0;padding:0.3em;clear:both;}
.item_picker .chemin .on {margin:0;}
.item_picker a.choisir_ici {display:block;text-align:center;margin:0.2em 0;}
.item_picker a.choisir_ici span{padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':18px;background:transparent url(\'' .
retablir_echappements_modeles(chemin_image((string)'ajouter-16.png')) .
'\') no-repeat ' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null))))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
' center;background-size:16px;}
.item_picker .liste {margin:0;max-height:300px;overflow:auto;}
.item_picker .liste .type_objet {margin:0;}
.selecteur_type_unique .item_picker .liste .type_objet{display:none;}
.item_picker .liste ul {list-style:none;margin:0;padding:0;}
.item_picker .liste li {display:block;clear:both;line-height:1.1em;list-style:none;margin:0;padding:0;position:relative;}
.item_picker .liste li:hover {background-color:' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'claire', null)))))!=='' ?
		('#' . $t1) :
		'') .
';}
.item_picker .liste a.ouvrir {color:black;text-decoration:none;display:block;line-height:16px;margin-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':20px;padding:0.3em 0;padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':2px;padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':20px;background:transparent url(\'' .
retablir_echappements_modeles(chemin_image((string)'deplier-right.svg')) .
'\') no-repeat ' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null))))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
' 0.3em;}
.item_picker .liste a.choisir {display:block;width:16px;height:16px;position:absolute;' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':0;top:0;padding:0.3em 2px;text-indent:-10000px;background:url(\'' .
retablir_echappements_modeles(chemin_image((string)'ajouter-16.png')) .
'\') no-repeat center center;}
.item_picker .liste a:hover,.item_picker .liste a:focus {background-color:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
';}

.item_picker .frame {background:#fff;border:1px solid ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'foncee', null)) .
';width:159px;height:400px;float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';overflow:auto;position:relative;}
.cadre .cadre_padding .item_picker .frame {width:153px;}
.fiche_objet .cadre .cadre_padding .item_picker .frame {width:148px;}
.item_picker .frame.total_3 {margin-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':-58px;border-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':3px solid ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'foncee', null)) .
';}
.item_picker .frame.frame_0 {margin-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':0;z-index:1000;}
.item_picker .frame.frame_1 {z-index:1010;}
.item_picker .frame.frame_2 {z-index:1020;}
.item_picker .frame.frame_3 {z-index:1030;}
.item_picker .frame.frame_4 {z-index:1040;}

.item_picker .frame .frame_close {float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
';}
.item_picker .frame h2 {margin:0;padding:5px;background:' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'claire', null)))))!=='' ?
		('#' . $t1) :
		'') .
';font-size:1.3em;}
.item_picker .frame .pagination {font-size:0.9em;}

.item_picker .frame ul {list-style:none;margin:0;padding:0;}
.item_picker .frame ul li {display:block;clear:both;list-style:none;margin:0;padding:0 2px;padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':15px;padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':16px;position:relative;}

.item_picker .frame ul li:hover,.item_picker .frame ul li.on {background-color:' .
(($t1 = strval(retablir_echappements_modeles(filtrer('couleur_eclaircir',table_valeur($Pile["vars"]??[], (string)'claire', null)))))!=='' ?
		('#' . $t1) :
		'') .
';}
.item_picker .frame a:hover,.item_picker .frame a:hover .ouvrir,.item_picker .frame a:hover .add {background-color:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'claire', null)) .
';}

.item_picker .frame ul li .ouvrir {position:absolute;display:block;top:0px;' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'right', null)) .
':0px;}
.item_picker .frame ul >li .add {float:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';clear:' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
';}
.item_picker .frame ul li a {display:block;}
.item_picker .frame a {text-decoration:none;}

.browser .choix_rapide {font-size:0.9em;}
.browser #picker_id {padding:0;margin:0 5px;border:1px solid;}


/*
   Selecteurs de rubrique / article
   ayant une classe li.selecteur_item
   n\'ont pas de marge a gauche pour occuper toute la largeur
*/
.formulaire_spip li.selecteur_item {
	padding-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':10px;background:#fff;
}
.formulaire_spip li.selecteur_item label {
	margin-' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'left', null)) .
':0;display:block;float:left;padding:2px 0;
}
');

	return analyse_resultat_skel('html_c183de20ac7376b368d986c868263f32', $Cache, $page, '../prive/themes/spip/picker.css.html');
}
