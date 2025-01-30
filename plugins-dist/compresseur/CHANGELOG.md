# Changelog

## 2.1.7 - 2024-05-29

### Fixed

- !4877 spip/spip!5951 Utiliser la fonction `svg_nettoyer()` introduite dans SPIP.

## 2.1.6 - 2024-05-07

### Changed

- Mise à jour des chaînes de langues
- Compatibilité max sur SPIP 4.*

### Fixed

- !4872 spip/spip!5934 Test plus rigoureux du retour de `ecrire_fichier_calcule_si_modifie()`

## 2.1.5 - 2024-04-05

### Fixed

- #4860 urlencoder les svg au lieu de base64encoder quand on veut les embed dans du CSS ou un src
- #4847 Ne pas générer un warning en cas de src vide ou nul dans le filtre `embarque_fichier`
- #4840 Ne pas supprimer aveuglement les unités sur la valeur 0
- #4867 ne pas introduire des couleurs `#fff` dans la css minifiée, cela casse les svg embed
- #4861 Les balises `<script>` qui n’indiquent pas d’attribut `type` sont considérées comme étant du `javascript`.

## 2.1.4 - 2024-03-08

### Fixed

- spip/spip#5871 Valeur invalide pour l'entête HTTP Link

## 2.1.3 - 2023-10-05

### Fixed

- #4865 Mise à jour de CSTidy pour corriger la compression des `rgb()` et `rgba()`

## 2.1.2 - 2023-06-07

### Security

- spip-team/securite#4841 Limiter l’usage de `#ENV**` dans les formulaires.

## 2.1.1 - 2023-02-23

### Fixed

- #4856 Warning lors de la concaténation des `@import`

## 2.1.0 - 2023-01-27

### Added

- Fichier README.md

### Changed

- Mise à jour CSSTidy v2.0.3
- Refactoring des tests unitaires avec PHPUnit
- Compatible SPIP 4.2-dev

### Removed

- Gestion de flag_ob (supprimé de SPIP 4.2)
