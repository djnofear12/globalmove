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


function exec_base_delete_referers_dist() {
	include_spip('inc/autoriser');
	if (!autoriser('detruire', '_statistiques')) {
		include_spip('inc/minipres');
		echo minipres();
	} else {
		include_spip('inc/headers');
		$admin = charger_fonction('admin', 'inc');
		$res = $admin('delete_referers', _T('statistiques:bouton_effacer_referers'), '');
		if ($res) {
			echo $res;
		} else {
			redirige_url_ecrire('stats_referers', '');
		}
	}
}
