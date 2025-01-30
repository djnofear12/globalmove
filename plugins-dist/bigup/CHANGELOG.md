# Changelog

## 3.2.14 - 2024-12-03

### Fixed

- spip/spip#6022 Message de retour de formulaire en `div` plutôt qu'en `p`
- #4897 fatal lors de l'envoi de certains fichiers

## 3.2.13 - 2024-10-08

### Changed

- spip/medias#4958 Avec SPIP 4.4, utiliser `_image_extensions_logos()`, sinon utiliser la globale `$formats_logos`

### Fixed

- spip/spip#5460 Utiliser des variables CSS et les propriétés logiques dans la CSS de l'espace privé
- #4900 Inclusion manquante dans certains contextes ajax

## 3.2.12 - 2024-08-20

### Security

- spip-security/securite#4859 Nécessiter un jeton valide (un formulaire demandant bigup) pour activer la recherche de fichiers dans `$_FILES`
- spip-security/securite#4859 Refactor de l’analyse de `$_FILES`

## 3.2.11 - 2024-05-29

### Fixed

- spip/spip#5667 Activer Bigup aussi sur les `input` non autofermants (html5)
- #4895 Erreur JS sur l’upload d’un fichier sans extension

## 3.2.10 - 2024-05-07

### Changed

- Mise à jour des chaînes de langues
- Compatibilité max sur SPIP 4.*

## 3.2.9 - 2024-03-08

### Fixed

- #4484 Améliorer un peu l’affichage de certaines erreurs JS lors du téléversement d’un fichier

## 3.2.8 - 2024-01-12

### Fixed

- #4897 Une coquille pouvait casser la compression du JS

## 3.2.7 - 2024-01-11

### Security

- #4897 Éviter une XSS basé sur le nom des fichiers uploadés

### Added

- #4889 Ajout d'une vue de la saisie, pour utilisation en saisie PHP avec le plugin saisies

### Fixed

- #4893 Utiliser des `button` au lieu de `span`

## 3.2.6 - 2023-10-05

### Fixed

- #4888 La configuration de taille maximum des fichiers téléversés est bien en `Mio`
- spip/spip#3637 Lever l'ambiguité sur les balises simples des `url()`

## 3.2.5 - 2023-09-01

### Fixed

- Exclure les tests et fichiers de développement des livrables

## 3.2.4 - 2023-06-07

### Changed

- Mise à jour des chaînes de langues depuis trad.spip.net

### Fixed

- #4878 Corrige récupération des exifs à la compression/retaillage d'une image

## 3.2.3 - 2023-05-15

### Security

- spip-team/securite#4841 Limiter l’usage de `#ENV**` dans les formulaires.

### Fixed

- #4878 On réintègre les EXIF dans l'image après la compression en javascript
- #4859 Corriger un bug d'upload lors de l'utilisation d'un NFS

## 3.2.2 - 2023-02-27

### Changed

- Mise à jour des chaînes de langues depuis trad.spip.net


## 3.2.1 - 2023-02-23

### Added

- Autoriser la prévisualisation des images Webp et SVG

### Fixed

- #4872 Éviter une fatale quand `bigup_token` est `null`


## 3.2.0 - 2023-01-27

### Added

- #4538 Permettre un retaillage des images côté navigateur, avant upload
- #4538 Configuration de la largeur / hauteur de retaillage côté navigateur
- #4856 Ajout d'un pipeline `bigup_preparer_input_options` pour personnaliser finement les options

### Changed

- Compatible SPIP 4.2-dev

### Fixed

- #4869 Ne pas retailler une image côté navigateur si son poids devient supérieur à l’image d’origine
- #4868 Accessibilité au clavier du bouton Choisir
