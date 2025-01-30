# Changelog

## 4.2.2 - 2024-12-03

### Fixed

- spip/spip#6022 Message de retour de formulaire en `div` plutôt qu'en `p`

## 4.2.1 - 2024-10-08

### Fixed

- !4816 Ajouter le pipeline `afficher_config_objet` qui manquait sur les pages mots et groupes_mots.

### Removed

- !4819 Un fichier de langue obsolète et non traduit.

## 4.2.0 - 2024-08-01

### Changed

- Nécessite SPIP 4.3

### Fixed

- spip/spip#5979 Adapter la chaîne de langue du menu Créer

## 4.1.6 - 2024-05-07

### Changed

- Mise à jour des chaînes de langues
- Compatibilité max sur SPIP 4.*

### Fixed

- HTML5: Retrait des `CDATA` inutiles, retrait `text/javascript`

## 4.1.5 - 2024-03-08

### Fixed

- #4811 Warning en moins sur l'ajout de mots clefs avec la configuration d’un seul mot coché pour le groupe

## 4.1.4 - 2024-02-08

### Fixed

- #4810 Utiliser le filtre `icone_verticale` et non `icone` qui est déprécié

## 4.1.3 - 2023-09-01

### Fixed

- Exclure les tests et fichiers de développement des livrables

## 4.1.2 - 2023-07-07

### Fixed

- Correction de `mots_qualifier()` qui appelait une fonction inconnue

## 4.1.1 - 2023-06-07

### Security

- spip-team/securite#4841 Limiter l’usage de `#ENV**` dans les formulaires.


## 4.1.0 - 2023-01-27

### Added

- Fichier `README.md`

### Changed

- Compatible SPIP 4.2.0-dev minimum

### Fixed

- spip/spip#5274 Homogénéiser les labels des listes
- spip/spip#5156 Ne pas envoyer tout spip_meta dans la config des formulaires
