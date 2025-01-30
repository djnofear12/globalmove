# Changelog

## 4.3.4 - 2024-12-03

### Fixed

- spip/spip#6022 Message de retour de formulaire en `div` plutôt qu'en `p`
- #5002 pouvoir envoyer nativement des fichiers GeoJson

## 4.3.3 - 2024-10-08

### Changed

- #4958 Appel à la globale `$formats_logos` remplacée par `_image_extensions_acceptees_en_entree()`

### Fixed

- spip/spip#5460 Utiliser les propriétés logiques dans la CSS de l'espace privé
- !5008 Corriger la duplication (plugin Duplicator par exemple) de logo si le dossier `tmp/upload` n'existe pas
- #4999 Affichage du sélecteur de rôles de documents (avec le plugin en question)
- !5009 Affichage des aperçus dans les modèles emb
- !5010 Correction chemin des plugins mediaelements
- !5010 Pas de fallback Flash

## 4.3.2 - 2024-07-26

### Changed

- Mise à jour des chaînes de langues depuis trad.spip.net

## 4.3.1 - 2024-05-29

### Security

- spip-team/securite#4853 Appliquer un filtre `attribut_url()` aux endroits pertinents

## 4.3.0 - 2024-05-07

### Fixed

- #4926 Mise à jour de la lib mediaelement en version 7.0.3
