<?php

/**
 * Gestion du formulaire d'ajout de dépot
 *
 * @plugin SVP pour SPIP
 * @license GPL
 * @package SPIP\SVP\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Chargement du formulaire d'ajout de dépot
 *
 * @return array
 *     Environnement du formulaire
 **/
function formulaires_ajouter_depot_charger_dist() {

	if (!autoriser('ajouter', '_depots')) {
		return false;
	}

	// On ne renvoie pas les valeurs saisies mais on fait un raz systematique
	$nb = (int)sql_countsel('spip_depots');
	return [
		'xml_paquets' => $nb ? '' : "https://plugins.spip.net/depots/principal.xml",
		'password' => '',
	];
}

/**
 * Vérifications du formulaire d'ajout de dépot
 *
 * Vérifie qu'une adresse valide est soumise et que ce dépot n'a pas
 * déjà été créé.
 *
 * @uses  svp_verifier_adresse_depot()
 * @return array
 *     Tableau des erreurs
 **/
function formulaires_ajouter_depot_verifier_dist() {

	$erreurs = [];

	if (!autoriser('ajouter', '_depots')) {
		$erreurs['message_erreur'] = _T('svp:erreur_teleporter_chargement_source_impossible', ['source' => '']);
	}
	else {
		if (empty($password = _request('password'))) {
			$erreurs['password'] = _T('info_obligatoire');
		}
		else {
			include_spip('inc/auth');
			if (!auth_controler_password_auteur_connecte($password)) {
				$erreurs['message_erreur'] = _T('svp:erreur_password_incorrect');
			}
		}

		$xml = trim(_request('xml_paquets'));
		if (!$xml){
			// L'url est obligatoire
			$erreurs['xml_paquets'] = _T('svp:message_nok_champ_obligatoire');
		}

		if (empty($erreurs)) {
			if (!svp_verifier_adresse_depot($xml)) {
				// L'url n'est pas correcte, le fichier xml n'a pas ete trouve
				$erreurs['xml_paquets'] = _T('svp:message_nok_url_depot_incorrecte', ['url' => $xml]);
			} elseif (sql_countsel('spip_depots', 'xml_paquets=' . sql_quote($xml))) {
				// L'url est deja ajoutee
				$erreurs['xml_paquets'] = _T('svp:message_nok_depot_deja_ajoute', ['url' => $xml]);
			}
		}

	}
	if (count($erreurs)) {
		set_request('password');
	}

	return $erreurs;
}

/**
 * Traitement du formulaire d'ajout de dépot
 *
 * Ajoute le dépot.
 * Retourne une éventuelle erreur si le dépot a un XML mal formé
 * ou s'il n'a aucun plugin.
 *
 * @uses  svp_ajouter_depot()
 * @return array
 *     Retours du traitement
 **/
function formulaires_ajouter_depot_traiter_dist() {
	include_spip('inc/svp_depoter_distant');

	$retour = [];
	$xml = trim(_request('xml_paquets'));

	// On ajoute le depot et ses plugins dans la base
	// On traite le cas d'erreur fichier ($retour['message_erreur']) non conforme
	// - si la syntaxe xml est incorrecte
	// - ou si le depot ne possede pas au moins un plugin
	$ok = svp_ajouter_depot($xml, $erreur);

	// Determination des messages de retour
	if (!$ok) {
		$retour['message_erreur'] = $erreur;
	} else {
		$retour['message_ok'] = _T('svp:message_ok_depot_ajoute', ['url' => $xml]);
		spip_log('ACTION AJOUTER DEPOT (manuel) : url = ' . $xml, 'svp_actions.' . _LOG_INFO);
		set_request('xml_paquets');
	}
	set_request('password');
	$retour['editable'] = true;

	return $retour;
}


/**
 * Teste la validité d'une URL d'un dépot de paquets
 *
 * Pour cela on tente de rapatrier le fichier distant
 * en local. Si on réussi, c'est bon.
 *
 * @param string $url
 *     URL du fichier xml de description du depot
 * @return bool
 *     Le dépot est-il valide ?
 */
function svp_verifier_adresse_depot($url) {
	include_spip('inc/distant');
	// evitons de recuperer 2 fois le XML demandé.
	// si on le recupere ici, il sera deja a jour pour le prochain copie_locale
	// lors du traitement.
	return (copie_locale($url) ? true : false);
}
