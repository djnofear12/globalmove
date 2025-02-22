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
 * Sauvegarde automatique des formulaires CVT
 *
 * @package SPIP\Core\CVT\Autosave
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Nettoyer les échappements
 *
 * @param $val
 * @return string
 */
function autosave_clean_value($val) {
	return stripslashes(urldecode($val));
}

/**
 * Repérer une demande de formulaire autosave
 * et la conditionner
 *
 * @param array $flux
 * @return array
 */
function cvtautosave_formulaire_charger($flux) {
	if (
		is_array($flux['data'])
		and isset($flux['data']['_autosave_id'])
		and $cle_autosave = $flux['data']['_autosave_id']
	) {
		$form = $flux['args']['form'];
		$je_suis_poste = $flux['args']['je_suis_poste'];

		$cle_autosave = serialize($cle_autosave);
		$cle_autosave = $form . '_' . md5($cle_autosave);

		// si on a un backup en session et qu'on est au premier chargement, non poste
		// on restitue les donnees
		if (
			isset($GLOBALS['visiteur_session']['session_autosave_' . $cle_autosave])
			and !$je_suis_poste
		) {
			parse_str($GLOBALS['visiteur_session']['session_autosave_' . $cle_autosave], $vars);
			foreach ($vars as $key => $val) {
				if (isset($flux['data'][$key])) {
					$flux['data'][$key] = (is_string($val) ? autosave_clean_value($val) : array_map(
						'autosave_clean_value',
						$val
					));
				}
			}
		}

		// si on est dans le charger() qui suit le traiter(), l'autosave a normalement ete vide
		// mais si il y a plusieurs sessions il peut y avoir concurrence et un retour de l'autosave
		if ($je_suis_poste and _request('autosave') === $cle_autosave and function_exists('terminer_actualiser_sessions')) {
			terminer_actualiser_sessions();
			// et verifions si jamais l'autosave a fait un come back, dans ce cas on le revide
			if (isset($GLOBALS['visiteur_session']['session_autosave_' . $cle_autosave])) {
				session_set('session_autosave_' . $cle_autosave, null);
				// en court sleep pour etre certain que la concurrence est finie
				sleep(1);
				terminer_actualiser_sessions();
			}
		}


		/**
		 * Envoyer le input hidden et le bout de js qui l'utilisera
		 */
		$flux['data']['_hidden'] .= "<input type='hidden' name='autosave' class='autosaveactive' value='$cle_autosave'>"
			. '<script>if (window.jQuery) jQuery(function(){
		  $("input.autosaveactive").closest("form:not(.autosaveon)").autosave({url:"' . $GLOBALS['meta']['adresse_site'] . '/"}).addClass("autosaveon");
			});</script>';
	}

	return $flux;
}

/**
 * Traitement d'un formulaire ayant activé `autosave`
 *
 * Quand on poste définitivement un formulaire `autosave`,
 * on peut vider la session `autosave`
 * et on vide aussi toutes les `autosave` de plus de 72H (délai par défaut) ou sans `__timestamp` (vieilles sessions)
 *
 * @param array $flux
 * @return array
 */
function cvtautosave_formulaire_traiter($flux) {
	// si on poste 'autosave' c'est qu'on n'a plus besoin de sauvegarder :
	// on elimine les donnees de la session
	if ($cle_autosave = _request('autosave')) {
		include_spip('inc/session');
		session_set('session_autosave_' . $cle_autosave, null);
	}

	if (isset($GLOBALS['visiteur_session']) and $GLOBALS['visiteur_session']) {
		// delai par defaut avant purge d'un backup de form : 72H
		if (!defined('_AUTOSAVE_GB_DELAY')) {
			define('_AUTOSAVE_GB_DELAY', 72 * 3600);
		}
		$time_too_old = time() - _AUTOSAVE_GB_DELAY;
		// purger aussi toutes les vieilles autosave
		$session = $GLOBALS['visiteur_session'];
		foreach ($session as $k => $v) {
			if (strncmp($k, 'session_autosave_', 17) == 0) {
				$timestamp = 0;
				if (preg_match(',&__timestamp=(\d+)$,', $v, $m)) {
					$timestamp = intval($m[1]);
				}
				if ($timestamp < $time_too_old) {
					session_set($k, null);
				}
			}
		}
	}

	return $flux;
}
