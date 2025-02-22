<?php

/***************************************************************************\
 *  SPIP, Système de publication pour l'internet                           *
 *                                                                         *
 *  Copyright © avec tendresse depuis 2001                                 *
 *  Arnaud Martin, Antoine Pitrou, Philippe Rivière, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribué sous licence GNU/GPL.     *
\***************************************************************************/

/**
 * Déclarations relatives à la base de données
 *
 * @plugin Statistiques pour SPIP
 * @license GNU/GPL
 * @package SPIP\Stats\Pipelines
 **/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Déclarer les tables de statistiques
 *
 * Déclare les tables :
 * - spip_visites
 * - spip_visites_articles
 * - spip_referers
 * - spip_referers_articles
 *
 * @pipeline declarer_tables_auxiliaires
 * @param array $tables_auxiliaires
 *     Description des tables auxiliaires
 * @return array
 *     Description complétée des tables auxiliaires
 */
function stats_declarer_tables_auxiliaires($tables_auxiliaires) {

	$spip_visites = [
		'date' => 'DATE NOT NULL',
		'visites' => "int UNSIGNED DEFAULT '0' NOT NULL",
		'maj' => 'TIMESTAMP'
	];

	$spip_visites_key = [
		'PRIMARY KEY' => 'date'
	];

	$spip_visites_articles = [
		'date' => 'DATE NOT NULL',
		'id_article' => 'int UNSIGNED NOT NULL',
		'visites' => "int UNSIGNED DEFAULT '0' NOT NULL",
		'maj' => 'TIMESTAMP'
	];

	$spip_visites_articles_key = [
		'PRIMARY KEY' => 'date, id_article'
	];


	$spip_referers = [
		'referer_md5' => 'bigint UNSIGNED NOT NULL',
		'date' => 'DATE NOT NULL',
		'referer' => 'VARCHAR (255)',
		'visites' => 'int UNSIGNED NOT NULL',
		'visites_jour' => 'int UNSIGNED NOT NULL',
		'visites_veille' => 'int UNSIGNED NOT NULL',
		'maj' => 'TIMESTAMP'
	];

	$spip_referers_key = [
		'PRIMARY KEY' => 'referer_md5'
	];

	$spip_referers_articles = [
		'id_article' => 'int UNSIGNED NOT NULL',
		'referer_md5' => 'bigint UNSIGNED NOT NULL',
		'referer' => "VARCHAR (255) DEFAULT '' NOT NULL",
		'visites' => 'int UNSIGNED NOT NULL',
		'maj' => 'TIMESTAMP'
	];

	$spip_referers_articles_key = [
		'PRIMARY KEY' => 'id_article, referer_md5',
		'KEY referer_md5' => 'referer_md5'
	];

	$tables_auxiliaires['spip_visites'] = [
		'field' => &$spip_visites,
		'key' => &$spip_visites_key
	];
	$tables_auxiliaires['spip_visites_articles'] = [
		'field' => &$spip_visites_articles,
		'key' => &$spip_visites_articles_key
	];
	$tables_auxiliaires['spip_referers'] = [
		'field' => &$spip_referers,
		'key' => &$spip_referers_key
	];
	$tables_auxiliaires['spip_referers_articles'] = [
		'field' => &$spip_referers_articles,
		'key' => &$spip_referers_articles_key
	];

	return $tables_auxiliaires;
}
