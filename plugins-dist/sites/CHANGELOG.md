# Changelog

## 4.2.2 - 2024-12-03

### Fixed

- spip/spip#6022 Message de retour de formulaire en `div` plutôt qu'en `p`

## 4.2.1 - 2024-10-08

### Fixed

- spip/spip#5460 Utiliser des variables CSS et les propriétés logiques dans la CSS de l'espace privé

## 4.2.0 - 2024-08-01

### Changed

- Nécessite SPIP 4.3

### Fixed

- spip/spip#5979 Adapter la chaîne de langue du menu Créer

## 4.1.6 - 2024-05-07

### Changed

- Mise à jour des chaînes de langues
- Compatibilité max sur SPIP 4.*

### Fixed

- HTML5: Retrait des `CDATA` inutiles, retrait `text/javascript`
- #4874 Compatibilité du traitement du RSS avec Gitlab

## 4.1.5 - 2024-02-08

### Fixed

- #4860 Ne plus utiliser `inc_lister_objets_dist` déprécié depuis SPIP 3

## 4.1.4 - 2024-01-11

### Fixed

- spip/spip#3637 Lever l'ambiguité sur les balises simples des `url()`
- #4870 Accepter le format SVG pour la récupération automagique du logo d'un site syndiqué

## 4.1.3 - 2023-09-01

### Fixed

- #4864 Exclure les tests et fichiers de développement des livrables

## 4.1.2 - 2023-06-07

### Security

- spip-team/securite#4841 Limiter l’usage de `#ENV**` dans les formulaires.


## 4.1.1 - 2023-02-27

### Changed

- Mise à jour des chaînes de langues depuis trad.spip.net


## 4.1.0 - 2023-01-27

### Added

- Fichier `README.md`

### Changed

- Compatible SPIP 4.2.0-dev

### Fixed

- spip/spip#5274 Homogénéiser les labels des listes
- spip/spip#5156 Ne pas envoyer tout spip_meta dans la config des formulaires
- #4846 Filtrer les sites par présence d'une syndication ou pas

### Removed

- spip/spip#5343 suppression du filtre `|lignes_longues` maintenant géré en css
