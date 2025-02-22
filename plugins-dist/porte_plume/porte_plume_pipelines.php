<?php

/**
 * Déclarations d'autorisations et utilisations de pipelines
 *
 * @plugin Porte Plume pour SPIP
 * @license GPL
 * @package SPIP\PortePlume\Pipelines
 **/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

#define('PORTE_PLUME_PUBLIC', true);

/**
 * Fonction du pipeline autoriser. N'a rien à faire
 *
 * @pipeline autoriser
 */
function porte_plume_autoriser() {
}

/**
 * Autoriser l'action de previsu
 *
 * La fermer aux non identifiés si pas de porte plume dans le public
 *
 * @param  string $faire Action demandée
 * @param  string $type Type d'objet sur lequel appliquer l'action
 * @param  int $id Identifiant de l'objet
 * @param  array $qui Description de l'auteur demandant l'autorisation
 * @param  array $opt Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
 */
function autoriser_porteplume_previsualiser_dist($faire, $type, $id, $qui, $opt) {
	if (test_espace_prive()) {
		return autoriser('ecrire');
	} else {
		// dans le public on autorise pour les admins uniquement par défaut
		// a personaliser si besoin
		return ($qui['statut'] === '0minirezo' && !$qui['restreint'])
			&& autoriser('afficher_public', 'porteplume');
	}
}

/**
 * Autoriser a previsualuer le contenu des modeles contenant du PHP dans le porte plume
 * par défaut c'est bloqué, autorisation à ouvrir au cas par cas sur les sites qui en ont vraiment besoin
 *
 * @param string $faire Action demandée
 * @param string $type Type d'objet sur lequel appliquer l'action
 * @param int $id Identifiant de l'objet
 * @param array $qui Description de l'auteur demandant l'autorisation
 * @param array $opt Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
 */
function autoriser_modelesphp_previsualiser_dist($faire, $type, $id, $qui, $opt) {
	return false;
}

/**
 * Autoriser le porte plume dans l'espace public ?
 *
 * @param  string $faire Action demandée
 * @param  string $type Type d'objet sur lequel appliquer l'action
 * @param  int $id Identifiant de l'objet
 * @param  array $qui Description de l'auteur demandant l'autorisation
 * @param  array $opt Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
 */
function autoriser_porteplume_afficher_public_dist($faire, $type, $id, $qui, $opt) {
	// compatibilite d'avant le formulaire de configuration
	if (defined('PORTE_PLUME_PUBLIC')) {
		return PORTE_PLUME_PUBLIC;
	}

	return (isset($GLOBALS['meta']['barre_outils_public']) and $GLOBALS['meta']['barre_outils_public'] === 'oui');

	// n'autoriser qu'aux identifies :
	# return $qui['id_auteur'] ? PORTE_PLUME_PUBLIC : false;
}

/**
 * Autoriser le porte plume dans l'espace prive ?
 *
 * @param  string $faire Action demandée
 * @param  string $type Type d'objet sur lequel appliquer l'action
 * @param  int $id Identifiant de l'objet
 * @param  array $qui Description de l'auteur demandant l'autorisation
 * @param  array $opt Options de cette autorisation
 * @return bool          true s'il a le droit, false sinon
 */
function autoriser_porteplume_afficher_prive_dist($faire, $type, $id, $qui, $opt) {
	// on peut desactiver le chargement complet dans le prive
	if (defined('_PORTE_PLUME_PRIVE')) {
		return _PORTE_PLUME_PRIVE;
	}

	return true;
}

/**
 * Ajout des scripts du porte-plume dans le head des pages publiques
 *
 * Uniquement si l'on est autorisé à l'afficher le porte plume dans
 * l'espace public !
 *
 * @pipeline insert_head
 * @param  string $flux Contenu du head
 * @return string Contenu du head
 */
function porte_plume_insert_head_public($flux) {
	include_spip('inc/autoriser');
	if (autoriser('afficher_public', 'porteplume')) {
		$flux = porte_plume_inserer_head($flux, $GLOBALS['spip_lang']);
	}

	return $flux;
}

/**
 * Ajout des scripts du porte-plume dans le head des pages privées
 *
 * @pipeline header_prive
 * @param  string $flux Contenu du head
 * @return string Contenu du head
 */
function porte_plume_insert_head_prive($flux) {
	include_spip('inc/autoriser');
	if (autoriser('afficher_prive', 'porteplume')) {
		$js = timestamp(find_in_path('javascript/porte_plume_forcer_hauteur.js'));
		$flux = porte_plume_inserer_head($flux, $GLOBALS['spip_lang'], true)
			. "<script type='text/javascript' src='$js'></script>\n";
	}
	return $flux;
}

/**
 * Ajout des scripts du porte-plume au texte (un head) transmis
 *
 * @param  string $flux Contenu du head
 * @param  string $lang Langue en cours d'utilisation
 * @param  bool $prive Est-ce pour l'espace privé ?
 * @return string Contenu du head complété
 */
function porte_plume_inserer_head($flux, $lang, $prive = false) {
	include_spip('porte_plume_fonctions');

	$markitup = timestamp(find_in_path('javascript/jquery.markitup_pour_spip.js'));
	$js_previsu = timestamp(find_in_path('javascript/jquery.previsu_spip.js'));

	$hash = md5(porte_plume_creer_json_markitup());
	$inserer_auto_name_texte = defined('_PORTE_PLUME_INSERER_AUTO_NAME_TEXTE') ? _PORTE_PLUME_INSERER_AUTO_NAME_TEXTE : true;
	$js_start = produire_fond_statique('javascript/porte_plume_start.js', ['lang' => $lang, 'hash' => $hash, 'inserer_auto_name_texte' => $inserer_auto_name_texte]);

	$flux .=
		"<script type='text/javascript' src='$markitup'></script>\n"
		. "<script type='text/javascript' src='$js_previsu'></script>\n"
		. "<script type='text/javascript' src='$js_start'></script>\n";

	return $flux;
}

/**
 * Ajout des CSS du porte-plume au head privé
 *
 * @pipeline header_prive_css
 * @param string $flux Contenu du head
 * @return string Contenu du head complété
 */
function porte_plume_insert_head_prive_css($flux) {
	return porte_plume_insert_head_css($flux, true);
}

/**
 * Ajout des CSS du porte-plume au head public
 *
 * Appelé aussi depuis le privé avec $prive à true.
 *
 * @pipeline insert_head_css
 * @param string $flux Contenu du head
 * @param  bool $prive Est-ce pour l'espace privé ?
 * @return string Contenu du head complété
 */
function porte_plume_insert_head_css($flux = '', $prive = false) {
	include_spip('inc/autoriser');
	if (autoriser($prive ? 'afficher_prive' : 'afficher_public', 'porteplume')) {
		if ($prive) {
			$cssprive = timestamp(find_in_path('css/barre_outils_prive.css'));
			$flux .= "<link rel='stylesheet' type='text/css' media='all' href='$cssprive' />\n";
		}
		$css = timestamp(direction_css(find_in_path('css/barre_outils.css'), lang_dir()));

		include_spip('porte_plume_fonctions');
		$hash = md5(barre_outils_css_icones());
		$css_icones = produire_fond_statique('css/barre_outils_icones.css', ['hash' => $hash]);

		$flux
			.= "<link rel='stylesheet' type='text/css' media='all' href='$css' />\n"
			. "<link rel='stylesheet' type='text/css' media='all' href='$css_icones' />\n";
	}

	return $flux;
}

/**
 * Valeur par défaut des configurations
 *
 * @pipeline configurer_liste_metas
 * @param array $metas
 *     Tableaux des metas et valeurs par défaut
 * @return array
 *     Tableaux des metas et valeurs par défaut
 */
function porte_plume_configurer_liste_metas($metas) {
	$metas['barre_outils_public'] = 'oui';

	return $metas;
}

/**
 * Ajoute le formulaire de configuration du porte-plume sur la page
 * des configurations avancées.
 *
 * @pipeline affiche_milieu
 * @param array $flux Données du pipeline
 * @return array      Données du pipeline
 */
function porte_plume_affiche_milieu($flux) {
	if ($flux['args']['exec'] == 'configurer_avancees') {
		$flux['data'] .= recuperer_fond(
			'prive/squelettes/inclure/configurer',
			['configurer' => 'configurer_porte_plume']
		);
	}

	return $flux;
}
