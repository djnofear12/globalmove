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
 * Gestion de l'action desordonner_document
 *
 * @package SPIP\Medias\Action
 **/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Désordonner des documents
 *
 * @param string $arg
 *     fournit les arguments de la fonction dissocier_document
 *     sous la forme `$id_objet-$objet-$document-suppr-safe`
 *
 *     - 4eme arg : suppr = true, false sinon
 *     - 5eme arg : safe = true, false sinon
 *
 * @return void
 */
function action_desordonner_liens_documents_dist($arg = null) {
	if (is_null($arg)) {
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}

	$arg = explode('-', $arg);
	[$id_objet, $objet, $document] = $arg;

	if (
		$id_objet = intval($id_objet)
		and autoriser('desordonnerdocuments', $objet, $id_objet)
	) {
		desordonner_liens_documents($document, $objet, $id_objet);
	} else {
		spip_log("Interdit de désordonner les documents sur : $objet $id_objet", 'spip');
	}
}

/**
 * Désordonner des documents
 *
 * @param int|string $document
 *   id_document a désordonner
 *   I/image pour dissocier les images en mode Image
 *   I/document pour dissocier les images en mode document
 *   D/document pour dissocier les documents non image en mode document
 * @param string $objet
 *   objet duquel dissocier
 * @param  $id_objet
 *   id_objet duquel dissocier
 * @return void
 */
function desordonner_liens_documents($document, $objet, $id_objet) {
	include_spip('action/editer_liens');
	if ($id_document = intval($document)) {
		desordonner_liens_document($id_document, $objet, $id_objet);
	} else {
		[$image, $mode] = explode('/', $document);
		$image = ($image == 'I');
		include_spip('inc/filtres_images_lib_mini');
		if (function_exists('_image_extensions_logos')) {
			$extensions = _image_extensions_logos();
		} else {
			$extensions = $GLOBALS['formats_logos'];
		}
		$typdoc = sql_in('docs.extension', $extensions, $image ? '' : 'NOT');

		$obj = 'id_objet=' . intval($id_objet) . ' AND objet=' . sql_quote($objet);

		$s = sql_select(
			'docs.id_document',
			'spip_documents AS docs LEFT JOIN spip_documents_liens AS l ON l.id_document=docs.id_document',
			"$obj AND vu='non' AND docs.mode=" . sql_quote($mode) . " AND $typdoc"
		);
		while ($t = sql_fetch($s)) {
			desordonner_liens_document($t['id_document'], $objet, $id_objet);
		}
	}
}

/**
 * Désordonner un document
 *
 * @param int $id_document
 *   id_document a désordonner
 * @param string $objet
 *   objet duquel dissocier
 * @param  $id_objet
 *   id_objet duquel dissocier
 * @return void
 */
function desordonner_liens_document($id_document, $objet, $id_objet) {
	objet_qualifier_liens(
		['document' => $id_document],
		[$objet => $id_objet],
		['rang_lien' => 0]
	);
}
