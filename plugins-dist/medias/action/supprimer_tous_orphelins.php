<?php

/***************************************************************************\
 *  SPIP, Système de publication pour l'internet                           *
 *                                                                         *
 *  Copyright © avec tendresse depuis 2001                                 *
 *  Arnaud Martin, Antoine Pitrou, Philippe Rivière, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribué sous licence GNU/GPL.     *
\***************************************************************************/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

include_spip('base/abstract_sql');

function action_supprimer_tous_orphelins() {

	$securiser_action = charger_fonction('securiser_action', 'inc');
	$arg = $securiser_action();

	//on recupere le contexte pour ne supprimer les orphelins que de ce dernier
	[$media, $distant, $statut, $sanstitre] = explode('/', $arg);

	$where = [];
	//critere sur le media
	if ($media) {
		$select = 'media=' . sql_quote($media);
	}

	//critere sur le distant
	if ($distant) {
		$where[] = 'distant=' . sql_quote($distant);
	}

	//critere sur le statut
	if ($statut) {
		$where[] = 'statut REGEXP ' . sql_quote("($statut)");
	}

	//critere sur le sanstitre
	if ($sanstitre) {
		$where[] = "titre=''";
	}

	//on isole les orphelins
	$select = sql_get_select('DISTINCT id_document', 'spip_documents_liens as oooo');
	$cond = "spip_documents.id_document NOT IN ($select) AND spip_documents.mode != 'vignette'";
	$where[] = $cond;

	$ids_doc_orphelins = sql_select('id_document', 'spip_documents', $where);

	$supprimer_document = charger_fonction('supprimer_document', 'action');
	while ($row = sql_fetch($ids_doc_orphelins)) {
		// pour les orphelins du contexte, on traite avec la fonction existante
		$supprimer_document($row['id_document']);
	}
}
