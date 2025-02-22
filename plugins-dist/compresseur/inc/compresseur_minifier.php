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
 * Fonctions de minification
 *
 * @package SPIP\Compresseur\Minifier
 */
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Minifier un contenu CSS
 *
 * Si $options est vide on utilise la methode regexp simple
 *
 * Si $options est une chaine non vide elle definit un media à appliquer
 * à la css. Si la css ne contient aucun @media ni @import, on encapsule tout
 * dans "@media $option {...}" et on utilise regexp sinon on utilise csstidy
 * pour ne pas faire d'erreur, mais c'est 12 fois plus lent
 *
 * Si $options sous forme de array() on passe par csstidy pour parser le code
 * et produire un contenu plus compact et prefixé eventuellement par un @media
 * options disponibles :
 * - string media : media qui seront utilisés pour encapsuler par @media
 *   les selecteurs sans media
 * - string template : format de sortie parmi 'low','default','high','highest'
 *
 * @param string $contenu
 *     Contenu CSS
 * @param mixed $options
 *     Options de minification
 * @return string
 *     Contenu CSS minifié
 */
function minifier_css($contenu, $options = '') {
	if (is_string($options) and $options) {
		if ($options == 'all') { // facile : media all => ne rien preciser
		$options = '';
		} elseif (
			strpos($contenu, '@media') == false
			and strpos($contenu, '@import') == false
			and strpos($contenu, '@font-face') == false
		) {
			$contenu = "@media $options {\n$contenu\n}\n";
			$options = '';
		} else {
			$options = ['media' => $options];
		}
	}
	if (!is_array($options)) {
		// nettoyer la css de tout ce qui sert pas
		// pas de commentaires
		// https://core.spip.net/issues/3987 sauf les commentaires important commençant par un ! qui sont en general des credits
		$contenu = preg_replace(',/\*(\*|[^!].*\*)/,Ums', '', $contenu);
		$contenu = preg_replace(",\s//[^\n]*\n,Ums", '', $contenu);
		// espaces autour des retour lignes
		$contenu = str_replace("\r\n", "\n", $contenu);
		$contenu = preg_replace(",\s+\n,ms", "\n", $contenu);
		$contenu = preg_replace(",\n\s+,ms", "\n", $contenu);
		// pas d'espaces consecutifs
		$contenu = preg_replace(',\s(?=\s),Ums', '', $contenu);
		// pas d'espaces avant et apres { ; ,
		$contenu = preg_replace('/\s?({|;|,)\s?/ms', '$1', $contenu);
		// supprimer les espaces devant : sauf si suivi d'une lettre (:after, :first...)
		$contenu = preg_replace('/\s:([^a-z])/ims', ':$1', $contenu);
		// supprimer les espaces apres :
		$contenu = preg_replace('/:\s/ms', ':', $contenu);
		// pas d'espaces devant }
		$contenu = preg_replace('/\s}/ms', '}', $contenu);

		// ni de point virgule sur la derniere declaration
		$contenu = preg_replace('/;}/ms', '}', $contenu);
		// pas d'espace avant !important
		$contenu = preg_replace('/\s!\s?important/ms', '!important', $contenu);
		// passser les codes couleurs en 3 car si possible
		// uniquement si non precedees d'un [="'] ce qui indique qu'on est dans un filter(xx=#?...)
		$contenu = preg_replace(
			";([:\s,(])#([0-9a-f])(\\2)([0-9a-f])(\\4)([0-9a-f])(\\6)(?=[^\w\-]);i",
			'$1#$2$4$6',
			$contenu
		);
		// remplacer font-weight:bold par font-weight:700
		$contenu = preg_replace('/font-weight:bold(?!er)/ims', 'font-weight:700', $contenu);
		// remplacer font-weight:normal par font-weight:400
		$contenu = preg_replace('/font-weight:normal/ims', 'font-weight:400', $contenu);

		// si elle est 0, enlever la partie entière des unites decimales
		$contenu = preg_replace("/\b0+\.(\d+(r?em|vh|vw))/ims", '.$1', $contenu);
		// supprimer les declarations vides
		$contenu = preg_replace(',(^|})([^{}]*){},Ums', '$1', $contenu);

		// renommer les couleurs par leurs versions courtes quand c'est possible
		// mais on introduit pas de nouvelles couleurs en #xx car si c'est dans un svg url encodé ça casse
		$colors = [
			'source' => [
				'#800000',
				'#ffa500',
				'#808000',
				'#800080',
				'#008000',
				'#000080',
				'#008080',
				'#c0c0c0',
				'#808080',
				'#f00'
			],
			'replace' => [
				'maroon',
				'orange',
				'olive',
				'purple',
				'green',
				'navy',
				'teal',
				'silver',
				'gray',
				'red'
			]
		];
		foreach ($colors['source'] as $k => $v) {
			$colors['source'][$k] = ';([:\s,(])' . $v . '(?=[^\w\-]);ms';
			$colors['replace'][$k] = '$1' . $colors['replace'][$k];
		}
		$contenu = preg_replace($colors['source'], $colors['replace'], $contenu);

		// raccourcir les padding qui le peuvent (sur 3 ou 2 valeurs)
		$contenu = preg_replace(",padding:([^\s;}]+)\s([^\s;}]+)\s([^\s;}]+)\s(\\2)([;}!]),ims", 'padding:$1 $2 $3$5', $contenu);
		$contenu = preg_replace(",padding:([^\s;}]+)\s([^\s;}]+)\s(\\1)([;}!]),ims", 'padding:$1 $2$4', $contenu);

		// raccourcir les margin qui le peuvent (sur 3 ou 2 valeurs)
		$contenu = preg_replace(",margin:([^\s;}]+)\s([^\s;}]+)\s([^\s;}]+)\s(\\2)([;}!]),ims", 'margin:$1 $2 $3$5', $contenu);
		$contenu = preg_replace(",margin:([^\s;}]+)\s([^\s;}]+)\s(\\1)([;}!]),ims", 'margin:$1 $2$4', $contenu);

		$contenu = trim($contenu);

		return $contenu;
	} else {
		// compression avancee en utilisant csstidy
		// beaucoup plus lent, mais necessaire pour placer des @media la ou il faut
		// si il y a deja des @media ou des @import

		// modele de sortie plus ou moins compact
		$template = 'high';
		if (isset($options['template']) and in_array($options['template'], ['low', 'default', 'high', 'highest'])) {
			$template = $options['template'];
		}
		// @media eventuel pour prefixe toutes les css
		// et regrouper plusieurs css entre elles
		// on ignore media=all par comodite, comme pour le compresseur simple (c'est le par defaut)
		$media = '';
		if (!empty($options['media']) and $options['media'] !== 'all') {
			$media = '@media ' . $options['media'] . ' ';
		}

		include_spip('lib/csstidy/class.csstidy');
		$css = new csstidy();

		// essayer d'optimiser les font, margin, padding avec des ecritures raccourcies
		$css->set_cfg('optimise_shorthands', 1);
		$css->set_cfg('template', $template);
		$css->parse($contenu);

		return $css->print->plain($media);
	}
}


/**
 * Compacte du javascript grace a Dean Edward's JavaScriptPacker
 *
 * Bench du 15/11/2010 sur jQuery.js :
 * JSMIN (https://github.com/rgrove/jsmin-php/)
 *      61% de la taille initiale / 2 895 ms
 * JavaScriptPacker
 *  62% de la taille initiale / 752 ms
 *
 * @param string $flux
 *     Contenu JS
 * @return string
 *     Contenu JS minifié
 */
function minifier_js($flux) {
	if (!strlen($flux)) {
		return $flux;
	}

	include_spip('lib/JavascriptPacker/class.JavaScriptPacker');
	$packer = new JavaScriptPacker($flux, 0, true, false);

	// en cas d'echec (?) renvoyer l'original
	if (!strlen($t = $packer->pack())) {
		spip_log('erreur de minifier_js', _LOG_INFO_IMPORTANTE);

		return $flux;
	}

	return $t;
}


/**
 * Une callback applicable sur chaque balise link qui minifie un fichier CSS
 *
 * @param string $contenu
 * @param  string $balise
 * @return string
 */
function callback_minifier_css_file($contenu, $balise) {
	return minifier_css($contenu, extraire_attribut($balise, 'media'));
}

/**
 * Une callback applicable sur chaque balise script qui minifie un JS
 *
 * @param string $contenu
 * @param  string $balise
 * @return string
 */
function callback_minifier_js_file($contenu, $balise) {
	return minifier_js($contenu);
}


/**
 * Minifier du HTML
 *
 * @param string $flux HTML à compresser
 * @return string       HTML compressé
 */
function minifier_html($flux) {

	// si pas de contenu ni de balise html, ne rien faire
	if (!strlen($flux) or strpos($flux, '<') === false) {
		return $flux;
	}

	static $options = null;
	if (is_null($options)) {
		$options = [];
		if ($GLOBALS['meta']['auto_compress_css'] == 'oui') {
			$options['cssMinifier'] = 'minifier_css';
		}
		if ($GLOBALS['meta']['auto_compress_js'] == 'oui') {
			$options['jsMinifier'] = 'minifier_js';
		}
		include_spip('lib/minify_html/class.minify_html');
	}

	return Minify_HTML_SPIP::minify($flux, $options);
}
