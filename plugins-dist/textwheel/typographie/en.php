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

// Correction typographique anglaise

function typographie_en($t) {
	static $trans;

	if (!isset($trans)) {
		$trans = [
			'&nbsp;' => '~',
			"'" => '&#8217;'
		];
		$charset = $GLOBALS['meta']['charset'] ?? '';
		switch ($charset) {
			case 'utf-8':
				$trans["\xc2\xa0"] = '~';
				break;
			default:
				$trans["\xa0"] = '~';
				break;
		}
	}

	# cette chaine ne peut pas exister,
	# cf. TYPO_PROTECTEUR dans inc/texte
	$pro = "-\x2-";

	$t = str_replace(array_keys($trans), array_values($trans), $t);

	/* 2 */
	$t = preg_replace('/ --?,|(?: %)(?:\W|$)/S', '~$0', $t);

	/* 4 */
	$t = preg_replace('/Mr\.? /S', '$0~', $t);

	if (strpos($t, '\~') !== false) {
		$t = str_replace('\~', "\x1\x14", $t);
	}

	if (strpos($t, '~') !== false) {
		$t = preg_replace('/ *~+ */S', '~', $t);
	}

	$t = preg_replace('/--([^-]|$)/S', "$pro&mdash;$1", $t, -1, $c);
	if ($c) {
		$t = preg_replace("/([-\n])$pro&mdash;/S", '$1--', $t);
		$t = str_replace($pro, '', $t);
	}

	$t = str_replace('~', '&nbsp;', $t);

	if (strpos($t, "\x1") !== false) {
		$t = str_replace("\x1\x14", '~', $t);
	}

	return $t;
}
