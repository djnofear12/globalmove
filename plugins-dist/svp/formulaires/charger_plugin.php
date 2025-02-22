<?php

/**
 * Gestion du formulaire de recherche et téléchargement de plugins
 * distants connus dans un dépot
 *
 * @plugin SVP pour SPIP
 * @license GPL
 * @package SPIP\SVP\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

// pour svp_presenter_actions_realisees()
include_spip('exec/admin_plugin');

/**
 * Chargement du formulaire de recherche et téléchargement de plugins
 *
 * @return array
 *     Environnement du formulaire
 **/
function formulaires_charger_plugin_charger_dist() {

	if (!autoriser('ajouter', '_plugins')) {
		return false;
	}

	return [
		'phrase' => _request('phrase'),
		'etat' => _request('etat'),
		'depot' => _request('depot'),
		'doublon' => _request('doublon'),
		'exclusion' => _request('exclusion'),
		'ids_paquet' => _request('ids_paquet'),
		'_todo' => _request('_todo'),
		'_libelles_actions' => _request('_libelles_actions'),
		// on présente les actions réalisées ici au retour, lorsqu'il n'y avait eu que des Téléchargement demandés (sans activation)
		'_actions_realisees' => (_request('todo') or _AJAX) ? '' : svp_presenter_actions_realisees()
	];
}

/**
 * Vérification du formulaire de recherche et téléchargement de plugins
 *
 * Appelle le décideur qui détermine la liste des actions à faire et si celles-ci
 * peuvent être faites (dépendances connues). Une erreur sera levé dans le
 * cas contraire.
 *
 * Si toutes les actions peuvent être faites, une demande de confirmation
 * est envoyée (dans une erreur spéciale), présentant alors toutes les
 * actions qui seront réalisées (celle demandée + celles à faire par voie
 * de conséquence.
 *
 * Si on reçoit une demande de confirmation, on sort sans lever d'erreur !
 *
 * @uses svp_decider_verifier_actions_demandees()
 * @return array
 *     Tableau des erreurs
 **/
function formulaires_charger_plugin_verifier_dist() {

	$erreurs = [];
	$a_installer = [];

	if (_request('annuler_actions')) {
		// Requete : Annulation des actions d'installation en cours
		// -- On vide la liste d'actions en cours
		set_request('_todo', '');
	} elseif (_request('valider_actions')) {
	} elseif (_request('rechercher')) {
		// annuler les selections si nouvelle recherche
		set_request('ids_paquet', []);
	} else {
		// Requete : Installation d'un ou de plusieurs plugins
		// -- On construit le tableau des ids de paquets conformement a l'interface du decideur
		if (_request('installer') or _request('telecharger')) {
			$action = _request('installer') ? 'geton' : 'get';
			// L'utilisateur a demande une installation multiple de paquets
			// -- on verifie la liste des id_paquets uniquement
			if ($id_paquets = _request('ids_paquet')) {
				foreach ($id_paquets as $_id_paquet) {
					$a_installer[$_id_paquet] = $action;
				}
			}
		} else {
			// L'utilisateur a demande l'installation d'un paquet en cliquant sur le bouton en regard
			// du resume du plugin -> installer_paquet
			if ($install = _request('installer_paquet')) {
				if ($id_paquet = key($install)) {
					$a_installer[$id_paquet] = 'geton';
				}
			}
		}

		if (!$a_installer) {
			$erreurs['message_erreur'] = _T('svp:message_nok_aucun_plugin_selectionne');
		} else {
			// On fait appel au decideur pour determiner la liste exacte des commandes apres
			// verification des dependances
			include_spip('inc/svp_decider');
			svp_decider_verifier_actions_demandees($a_installer, $erreurs);
		}
	}

	return $erreurs;
}

/**
 * Traitement du formulaire de recherche et téléchargement de plugins
 *
 * Si une liste d'action est validée, on redirige de formulaire sur
 * l'action 'actionner' qui les traitera une par une.
 *
 * @return array
 *     Retours du traitement
 **/
function formulaires_charger_plugin_traiter_dist() {

	$retour = [];

	if (_request('rechercher') or _request('annuler_actions')) {
	} elseif (_request('valider_actions')) {
		#refuser_traiter_formulaire_ajax();
		// Ajout de la liste des actions à l'actionneur
		// c'est lui qui va effectuer rellement les actions
		// lors de l'appel de action/actionner
		include_spip('inc/filtres');
		$actions = decoder_contexte_ajax(_request('_todo'), 'svp_todo') ?: [];
		include_spip('inc/svp_actionner');
		// si toutes les actions sont des téléchargements (pas d'activation), on reste sur cette page
		$redirect = null;
		if (!array_diff($actions, ['get'])) {
			$redirect = self();
		}
		svp_actionner_traiter_actions_demandees($actions, $retour, $redirect);
	}

	$retour['editable'] = true;

	return $retour;
}
