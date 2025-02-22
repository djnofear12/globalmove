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

function trouver_version_inf($objet, $id_objet, $cond = '') {
	return sql_getfetsel(
		'id_version',
		'spip_versions',
		($cond ? "$cond AND " : '') . 'objet=' . sql_quote($objet) . ' AND id_objet=' . intval($id_objet),
		'',
		'id_version DESC',
		'0,1'
	);
}

function check_version_diff($objet, $id_objet, $id_version, $id_diff, $last_version = 0) {
	if (!$last_version) {
		$last_version = trouver_version_inf($objet, $id_objet);
	}

	// si pas de diff possible, on renvoi 0,0
	if (!$last_version) {
		return [0, 0];
	}

	if ($last_version == 1) {
		return [1, 0];
	}

	$id_version = max($id_version, 2);
	$id_version = min($id_version, $last_version);

	// verifier id_version
	$id_version = trouver_version_inf($objet, $id_objet, 'id_version <= ' . intval($id_version));

	// si rien trouve on prend la derniere
	if (!$id_version) {
		$id_version = $last_version;
	}

	// minorer id_diff en fonction de id_version
	$id_diff = min($id_diff, $id_version - 1);
	// verifier id_diff
	$id_diff = trouver_version_inf($objet, $id_objet, 'id_version <= ' . intval($id_diff));

	if (!$id_diff) {
		$id_diff = trouver_version_inf($objet, $id_objet, 'id_version < ' . intval($id_version));
	}

	// echec, on renvoi ce qu'on peut
	if (!$id_diff) {
		$id_diff = $id_version - 1;
	}

	return [$id_version, $id_diff];
}

function formulaires_reviser_charger_dist($objet, $id_objet, $id_version, $id_diff) {
	include_spip('inc/config');
	$objets = lire_config('objets_versions/', []);

	if (!in_array(table_objet_sql($objet), $objets)) {
		return false;
	}

	$last_version = trouver_version_inf($objet, $id_objet);
	[$id_version, $id_diff] = check_version_diff($objet, $id_objet, $id_version, $id_diff, $last_version);
	if (!$id_version) {
		return false;
	}

	$valeurs = [
		'_last_version' => $last_version,
		'_objet' => $objet,
		'_id_objet' => $id_objet,
		'id_version' => $id_version,
		'id_diff' => $id_diff,
	];

	return $valeurs;
}

function formulaires_reviser_verifier_dist($objet, $id_objet, $id_version, $id_diff) {
	$erreurs = [];
	[$id_version, $id_diff] = check_version_diff($objet, $id_objet, _request('id_version'), _request('id_diff'));
	set_request('id_version', $id_version);
	set_request('id_diff', $id_diff);

	return $erreurs;
}

function formulaires_reviser_traiter_dist($objet, $id_objet, $id_version, $id_diff) {
	$res = ['message_ok' => '', 'editable' => true];

	$id_version = _request('id_version');
	$id_diff = _request('id_diff');

	if (_AJAX) {
		$res['message_ok'] .= "<script type='text/javascript'>if (window.jQuery) jQuery('#wysiwyg.revision').ajaxReload({args:{id_version:$id_version,id_diff:$id_diff},history:true});</script>";
	} else {
		$res['redirect'] = parametre_url(parametre_url(self(), 'id_version', $id_version), 'id_diff', $id_diff, '&');
	}

	return $res;
}
