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
 * Gestion des vignettes de types de fichier
 *
 * @package SPIP\Medias\Vignette
 **/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Vignette pour une extension de document
 *
 * Recherche les fichiers d'icones au format SVG pour l'extension demandée.
 * On cherche prive/vignettes/ext.svg dans le path.
 *
 * @param string $ext
 *     Extension du fichier. Exemple : png
 * @param bool $size
 *     true pour retourner un tableau avec les tailles de la vignette
 *     false pour retourner uniquement le chemin du fichier
 * @param bool $loop
 *     Autoriser la fonction à s'appeler sur elle-même
 *     (paramètre interne).
 * @return array|bool|string
 *     False si l'image n'est pas trouvée
 *     Chaîne (chemin vers l'image) si on ne demande pas de taille
 *     Tableau (chemin, largeur, hauteur) si on demande avec la taille.
 */
function inc_vignette_dist($ext, $size = true, $loop = true) {

	if (!$ext) {
		$ext = 'txt';
	}

	// Chercher la vignette correspondant a ce type de document
	// dans les vignettes persos, ou dans les vignettes standard
	if (
		# installation dans un dossier /vignettes personnel, par exemple /squelettes/vignettes
		!$v = find_in_path('prive/vignettes/' . $ext . '.svg')
	) {
		if ($loop) {
			$f = charger_fonction('vignette', 'inc');
			$v = $f('defaut', false, $loop = false);
		} else {
			$v = false;
		}
	} # pas trouve l'icone de base

	if (!$size) {
		return $v;
	}

	$largeur = $hauteur = 0;
	if ($v and $size = @spip_getimagesize($v)) {
		$largeur = $size[0];
		$hauteur = $size[1];
	}

	return [$v, $largeur, $hauteur];
}
