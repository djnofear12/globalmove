# Changelog

## 3.1.11 - 2024-12-03

### Fixed

- spip/spip#6022 Message de retour de formulaire en `div` plutôt qu'en `p`
- #4910 pouvoir cocher les plugins depuis le haut et le bas de la liste

## 3.1.10 - 2024-06-07

### Fixed

- #4913 Tenir compte de l'autorisation de configuration d'un plugin pour afficher le bouton Configurer

## 3.1.9 - 2024-05-29

### Fixed

- Support de la branche 4.3 de SPIP

## 3.1.8 - 2024-05-07

### Changed

- Mise à jour des chaînes de langues
- Compatibilité max sur SPIP 4.*

### Fixed

- #4909 Afficher les infos de nouvelle version aussi sur les plugins-dist
- HTML5: Retrait des `CDATA` inutiles, retrait `text/javascript`

## 3.1.7 - 2024-04-05

### Fixed

- #4871 Indiquer explicitement si le mot de passe est incorrect lors de l'ajout d'un dépôt
- #4150 Ne pas changer le dossier d’un plugin lors des mis à jour lorsque l’option `SVP_PREFERER_TELECHARGEMENT_PAR_VCS` est activée
- #4908 Correction dans l'affichage du message d'erreur en cas d'adresse incorrect du dépôt

## 3.1.6 - 2023-12-18

### Fixed

- #4878 Conserver le filtrage JS de la liste des plugins si on demande le détail d’un plugin

## 3.1.5 - 2023-10-05

### Fixed

- #4878 #4695 Améliorer le filtrage JS de la liste des plugins
- #4902 Erreur d’une requête SQL, en SQLite, sur la recherche de mises à jour de plugins

## 3.1.4 - 2023-09-01

### Fixed

- Comprendre le nouveau format des fichiers de langue lors de l’analyse des plugins locaux
- Exclure les tests et fichiers de développement des livrables

## 3.1.3 - 2023-05-16

### Security

- spip-team/securite#4841 Limiter l’usage de `#ENV**` dans les formulaires.

### Fixed

- #4888 Couleur de la barre de progression sous webkit
- #4884 Aligner l'affichage de la liste des plugins de `exec=admin_plugin` sur celle de `exec=charger_plugin`
- #4879 La migration de base depuis 0.4.0 générait des erreurs par absence du champ 'procure'

## 3.1.2 - 2023-02-28

### Fixed

- #4877 Corriger les actions en cascade lors de l’installation ou désinstallation des plugins


## 3.1.1 - 2023-02-23

### Changed

- #4876 Utiliser `Minipage\Admin` sur l’écran de progression d’installation des plugins


## 3.1.0 - 2023-01-27

### Added

- Fichier `README.md`

### Changed

- #4870 Accepter des bornes du type, `x`, `x.y`, et `x.y.z` dans un intervalle de compatibilité
- spip/spip#5156 Ne pas envoyer tout spip_meta dans la config des formulaires
- Compatible SPIP 4.2.0-dev

### Fixed

- spip/spip#5274 Homogénéiser les labels des listes
