# Changelog

## 4.1.6 - 2024-12-03

### Fixed

- spip/spip#6022 Message de retour de formulaire en `div` plutôt qu'en `p`

## 4.1.5 - 2024-10-08

### Fixed

- spip/spip#5973 Invalider le cache (même pour les bots) lorsqu’une URL permanente est ajoutée (avec SPIP >= 4.3.3)

## 4.1.4 - 2024-05-07

### Changed

- Mise à jour des chaînes de langues
- Compatibilité max sur SPIP 4.*

## 4.1.3 - 2024-04-05

### Fixed

- spip/spip#3637 Lever l'ambiguité sur les balises simples des `url()`
- #4829 La surcharge de `urls_arbo_decoder_url_dist()` ne crée pas de boucle infinie

## 4.1.2 - 2023-09-01

### Fixed

- Exclure les tests et fichiers de développement des livrables

## 4.1.1 - 2023-06-07

### Security

- spip-team/securite#4841 Limiter l’usage de `#ENV**` dans les formulaires.

### Fixed

- #4826 Permettre de sélectionner le texte de l'url des objets

## 4.1.0 - 2023-01-27

### Added

- spip/spip#6005: Dépréciation de la constante _DIR_RESTREINT_ABS

### Fixed

- spip/spip#5460 Utiliser les propriétés logiques dans la CSS de l'espace privé
