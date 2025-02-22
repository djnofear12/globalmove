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


/**
 * Afficher la puce statut d'un document :
 * en fait juste une icone independante du statut
 *
 * @param int $id
 * @param string $statut
 * @param int $id_rubrique
 * @param string $type
 * @param string $ajax
 * @return string
 */
function puce_statut_document_dist($id, $statut, $id_rubrique, $type, $ajax = '') {
	return "<img src='" . chemin_image('attachment-16.png') . "' width='16' height='16' alt=''  />";
}
