# Changelog

## 3.2.1 - 2024-10-08

### Deprecated

- spip/spip#5993 `replace_math()`, utiliser le plugin `mathjax` à la place

## 3.2.0 - 2024-08-01

### Changed

- spip/spip#5977 `interdire_scripts()` ne gère plus le déséchappement des modèles
- Nécessite SPIP 4.3


## 3.1.7 - 2024-07-26

### Security

- spip-security/securite#4855 Vérifier les JS sur les balises `code`

## 3.1.6 - 2024-05-07

### Changed

- Mise à jour des chaînes de langues
- Compatibilité max sur SPIP 4.*

### Fixed

- !4872 Permettre d’indiquer des tirets dans le nom d’un code de langues avec triple backtick

## 3.1.5 - 2023-12-18

### Fixed

- #4868 Les blocs de code peuvent utiliser plus de 3 backticks
- #4868 L’info de langage des blocs de code de 3 ou + backticks peut contenir des espaces
- #4850 Attribut `role="list"` sur les `<ul>`

## 3.1.4 - 2023-09-01

### Fixed

- Exclure les tests et fichiers de développement des livrables

## 3.1.3 - 2023-07-07

### Fixed

- #5601 Ne pas perdre les raccourcis `<quote>` `<poesie>` et `<poetry>`
- #4858 Mieux gérer les backtick de code (lorsqu’il y a une balise ouvrante dedans)


## 3.1.2 - 2023-06-07

### Added

- #4857 spip-contrib-extensions/oembed#26 Pipelines `pre_echappe_html_propre_args` et `post_echappe_html_propre_args`

### Fixed

- #4855 0 et '0' sont des textes à traiter aussi

## 3.1.1 - 2023-02-23

### Fixed

- #4853 Deprecated en PHP 8.1+ (+typage de fonctions)

## 3.1.0 - 2023-01-27

### Added

- #4843 Support des backticks pour insérer du code dans le contenu éditorial
- Fichier `README.md`

### Changed

- spip/spip#5271 Refactoring de la mise en sécurité des textes
- Conversion des tests unitaires en PHPUnit
- Compatible SPIP 4.2.0-dev

### Removed

- #4836 `create_replace` n'est plus un type de règle supporté
