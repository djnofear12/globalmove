<?php

namespace Spip\Bigup;

/**
 * Gestion des relations avec `$_FILES`
 *
 * @plugin     Bigup
 * @copyright  2016
 * @author     marcimat
 * @licence    GNU/GPL
 * @package    SPIP\Bigup\Fonctions
 */


/**
 * Gestion des relations avec `$_FILES`
 **/
class Files {
	use LogTrait;

	/**
	 * Indique si ce chemin de fichier est présent pour ce champ dans $_FILES
	 * @param string $champ
	 *     Valeur de l'attribut name du champ.
	 * @param string $chemin
	 *     Chemin du fichier dans le cache
	 * @return bool
	 *     true si le fichier est présent, false sinon.
	 */
	public static function contient($champ, $chemin) {
		if (!$champ or !$chemin) {
			return false;
		}
		$arborescence = explode('[', str_replace(']', '', $champ));
		$racine = array_shift($arborescence);

		// si la racine n'existe pas déjà… partir.
		if (empty($_FILES[$racine]['tmp_name'])) {
			return false;
		}

		$debut = $_FILES[$racine]['tmp_name'];
		return self::contient_arborescence($arborescence, $debut, $chemin);
	}

	/**
	 * Recherche dans une arborescence de tableau (si elle existe) la valeur indiquée.
	 *
	 * Notamment peut servir à rechercher un chemin de fichier dans une
	 * sous clé de `$_FILES` lorsque `[]` était présent dans le nom du champ.
	 *
	 * Les chaines vides dans le tableau d'arborescence transmis sont considérées
	 * comme pouvant être n'importe quel entier dans le tableau.
	 * Ie: si on a '', on recherchera dans `$tableau[0]` ou `$tableau[1]`, etc.
	 * s'ils existent.
	 *
	 * @param array $arborescence
	 *     Tableau ['', 'truc'] si recherche du champ '[][truc]'
	 * @param string $tableau
	 *     Le tableau de recherche
	 * @param string $valeur
	 *     La valeur cherchée
	 * @return bool
	 */
	public static function contient_arborescence($arborescence, $tableau, $valeur) {
		$a = array_shift($arborescence);
		if ($a === null) {
			return $tableau == $valeur;
		}

		// champ[truc][0]
		if (strlen($a)) {
			if (empty($tableau[$a])) {
				return false;
			}
			return self::contient_arborescence($arborescence, $tableau[$a], $valeur);
		}

		// sinon champ avec [] vides
		if (!is_array($tableau)) {
			return false;
		}
		// si c'était le dernier []
		if (!(is_countable($arborescence) ? count($arborescence) : 0)) {
			return (false !== array_search($valeur, $tableau));
		} else {
			// champ[][truc]
			foreach ($tableau as $k => $t) {
				if (is_int($k)) {
					$ok = self::contient_arborescence($arborescence, $tableau[$k], $valeur);
					if ($ok) {
						return true;
					}
				}
			}
			return false;
		}
	}

	/**
	 * Intégrer le fichier indiqué dans `$FILES`
	 *
	 * Tout dépend de l'attribut name qui avait été posté.
	 *
	 * Cette info doit se trouver dans le tableau reçu
	 * dans la clé 'champ'.
	 *
	 * Avec `i` le nième fichier posté dans le champ,
	 * voici un exemple de ce qu'on peut obtenir.
	 * Noter la position de l'incrément `i` qui se trouve dans le
	 * premier crochet vide du name.
	 *
	 * - name='a' : FILES[a][name] = 'x'
	 * - name='a[]' : FILES[a][name][i] = 'x'
	 * - name='a[b]' : FILES[a][name][b] = 'x'
	 * - name='a[b][]' : FILES[a][name][b][i] = 'x'
	 * - name='a[][b][]' : FILES[a][i][name][b][0] = 'x'
	 *
	 * @param string $champ
	 *     Valeur de l'attribut name du champ.
	 * @param array $description
	 *     Description d'un fichier
	 * @return array
	 *     Description du fichier
	 **/
	public static function integrer_fichier($champ, $description) {

		$arborescence = explode('[', str_replace(']', '', $champ));
		$racine = array_shift($arborescence);

		if (!count($arborescence)) {
			// le plus simple…
			$_FILES[$racine] = $description;
		} else {
			if (!array_key_exists($racine, $_FILES)) {
				$_FILES[$racine] = [];
			}
			$dernier = array_pop($arborescence);
			foreach ($description as $cle => $valeur) {
				if (!array_key_exists($cle, $_FILES[$racine])) {
					$_FILES[$racine][$cle] = [];
				}
				$me = &$_FILES[$racine][$cle];

				foreach ($arborescence as $a) {
					if (strlen($a)) {
						if (!array_key_exists($a, $me)) {
							$me[$a] = [];
						}
						$me = &$me[$a];
					} else {
						$i = is_countable($me) ? count($me) : 0;
						$me[$i] = [];
						$me = &$me[$i];
					}
				}

				if (strlen($dernier)) {
					$me[$dernier] = $valeur;
				} else {
					$me[] = $valeur;
					$me = array_values($me);
				}
			}
		}

		return $description;
	}

	/**
	 * Retourne un tableau avec pour clé le champ d'origine du fichier
	 * à partir des éléments présents dans $_FILES
	 *
	 * @return array Tableau (champ => [description])
	 */
	public static function lister_fichiers_par_champs() {
		$liste = [];
		if (!count($_FILES)) {
			return $liste;
		}

		$infos = []; // name, pathname, error …
		foreach ($_FILES as $racine => $descriptions) {
			$infos = array_keys($descriptions);
			break;
		}

		foreach ($_FILES as $racine => $descriptions) {
			$error = $descriptions['error'];

			// cas le plus simple : name="champ", on s'embête pas
			if (!is_array($error)) {
				$liste[$racine] = [$descriptions];
				continue;
			}

			// cas plus compliqués :
			// name="champ[tons][][sous][la][pluie][]"
			// $_FILES[champ][error][tons][0][sous][la][pluie][0]
			else {
				include_spip('inc/filtres');
				$chemins = Files::extraire_sous_chemins_fichiers($error);

				foreach ($chemins['table_valeurs'] as $k => $chemin) {
					$description = [];
					foreach ($infos as $info) {
						$description[$info] = table_valeur($_FILES[$racine][$info], $chemin);
					}

					$complet = $racine . $chemins['names'][$k];
					if (empty($liste[$complet])) {
						$liste[$complet] = [];
					}
					$liste[$complet][] = $description;
				}
			}
		}
		return $liste;
	}


	/**
	 * Extrait et enlève de `$_FILES` les fichiers reçus sans erreur
	 * et crée un tableau avec pour clé le champ d'origine du fichier
	 *
	 * @return array Tableau (champ => [description])
	 */
	public static function extraire_fichiers_valides() {
		$liste = [];
		if (!count($_FILES)) {
			return $liste;
		}

		$infos = []; // name, pathname, error …
		foreach ($_FILES as $racine => $descriptions) {
			$infos = array_keys($descriptions);
			break;
		}

		foreach ($_FILES as $racine => $descriptions) {
			$error = $descriptions['error'];

			// cas le plus simple : name="champ", on s'embête pas
			if (!is_array($error)) {
				if ($error == 0) {
					$liste[$racine] = [$descriptions];
					unset($_FILES[$racine]);
				}
				continue;
			}

			// cas plus compliqués :
			// name="champ[tons][][sous][la][pluie][]"
			// $_FILES[champ][error][tons][0][sous][la][pluie][0]
			else {
				include_spip('inc/filtres');
				$chemins = Files::extraire_sous_chemins_fichiers($error);

				foreach ($chemins['table_valeurs'] as $k => $chemin) {
					$error = table_valeur($_FILES[$racine]['error'], $chemin);

					if ($error == 0) {
						$description = [];
						foreach ($infos as $info) {
							$description[$info] = Files::unset_table_valeur($_FILES[$racine][$info], $chemin);
						}

						$complet = $racine . $chemins['names'][$k];
						if (empty($liste[$complet])) {
							$liste[$complet] = [];
						}
						$liste[$complet][] = $description;
					}
				}
			}
		}

		return $liste;
	}


	/**
	 * Retourne l'écriture plate de l'arborescence d'un tableau
	 *
	 * - Phps a toutes les arborescences en conservant les index numériques autoincrémentés
	 *   et en mettant les autres index entre guillements
	 * - Reels a toutes les arborescences en conservant les index numériques autoincrémentés
	 * - Names a les arborescences sans les index numériques
	 *
	 * @param $tableau
	 * @return array Tableau [ phps => [], reels => [], names => []]
	 */
	public static function extraire_sous_chemins_fichiers($tableau) {
		$listes = [
			'phps' => [],   // ['tons'][0]['sous']['la']['pluie'][0]
			'table_valeurs' => [],   // tons/0/sous/la/pluie/0
			'reels' => [],  // [tons][0][sous][la][pluie][0]
			'names' => [],  // [tons][][sous][la][pluie][]
		];

		// si le name était [], PHP ordonnera les entrées dans l'ordre, forcément.
		// si quelqu'un avait mis name="truc[8][]", ça devrait trouver la bonne écriture.
		$i = 0;

		foreach ($tableau as $cle => $valeur) {
			$reel = '[' . $cle . ']';
			$php = is_int($cle) ? $reel : '[\'' . addslashes($cle) . '\']';
			$table_valeur = "$cle";

			if ($cle === $i) {
				$name = '[]';
			} else {
				$name = '[' . $cle . ']';
			}

			if (is_array($valeur)) {
				$ls = Files::extraire_sous_chemins_fichiers($valeur);
				foreach ($ls['phps'] as $l) {
					$listes['phps'][] = $php . $l;
				}
				foreach ($ls['table_valeurs'] as $l) {
					$listes['table_valeurs'][] = $table_valeur . '/' . $l;
				}
				foreach ($ls['reels'] as $l) {
					$listes['reels'][] = $reel . $l;
				}
				foreach ($ls['names'] as $l) {
					$listes['names'][] = $name . $l;
				}
			} else {
				$listes['phps'][] = $php;
				$listes['table_valeurs'][] = $table_valeur;
				$listes['reels'][] = $reel;
				$listes['names'][] = $name;
			}
			$i++;
		}

		return $listes;
	}

	public static function unset_table_valeur(&$table, $chemin) {
		$cles = explode('/', $chemin);
		$last = array_pop($cles);
		$t = &$table;
		foreach ($cles as $k) {
			if (!is_array($t) || !array_key_exists($k, $t)) {
				return null; // rien a unset, le chemin n'existe pas dans la table
			}
			$t = &$t[$k];
		}
		if (!array_key_exists($last, $t)) {
			return null;
		}
		$v = $t[$last];
		unset($t[$last]);
		return $v;
	}
}
