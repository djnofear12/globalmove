<?php

/**
 * Gestion de l'action porte_plume_previsu
 *
 * @plugin Porte Plume pour SPIP
 * @license GPL
 * @package SPIP\PortePlume\Actions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Action affichant la prévisualisation de porte plume
 *
 * Pas besoin de sécuriser outre mesure ici, on ne réalise donc qu'un
 * recuperer_fond
 *
 * On passe par cette action pour éviter les redirection et la perte du $_POST de
 * $forcer_lang=true;
 * cf : ecrire/public.php ligne 80
 */
function action_porte_plume_previsu_dist() {

	$contexte = [];

	// il faut avoir le droit de previsualiser
	// (par defaut le droit d'aller dans ecrire/ ou être admin si on est dans le public)
	if (autoriser('previsualiser', 'porteplume')) {
		// $_POST a ete sanitise par SPIP
		// et le fond injecte des interdire_scripts pour empecher les injections PHP
		// le js est bloque ou non selon les reglages de SPIP et si on est ou non dans l'espace prive
		$contexte = $_POST;
	}

	// pas d'indirection PHP dans les modeles formulaire
	$GLOBALS['_FORCER_EXECUTER_DIRECTEMENT_BALISE_DYNAMIQUE'] = true;
	echo recuperer_fond('prive/porte_plume_preview', $contexte);
	// retablir le fonctionnement par défaut pour les éventuels crons qui vont tourner après
	unset($GLOBALS['_FORCER_EXECUTER_DIRECTEMENT_BALISE_DYNAMIQUE']);
}
