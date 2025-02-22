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


function puce_statut_site_dist($id, $statut, $id_rubrique, $type, $ajax = '', $menu_rapide = _ACTIVER_PUCE_RAPIDE) {

	$t = sql_getfetsel('syndication', 'spip_syndic', 'id_syndic=' . intval($id));

	// cas particulier des sites en panne de syndic :
	// on envoi une puce speciale, et pas de menu de changement rapide
	if ($t == 'off' or $t == 'sus') {
		switch ($statut) {
			case 'publie':
				$puce = 'puce-verte-anim-xx.svg';
				$title = _T('sites:info_site_reference');
				break;
			case 'prop':
				$puce = 'puce-orange-anim-xx.svg';
				$title = _T('sites:info_site_attente');
				break;
			case 'refuse':
			default:
				$puce = 'puce-poubelle-anim-xx.svg';
				$title = _T('sites:info_site_refuse');
				break;
		}

		return http_img_pack($puce, $title);
	} else {
		return puce_statut_changement_rapide($id, $statut, $id_rubrique, $type, $ajax, $menu_rapide);
	}
}
