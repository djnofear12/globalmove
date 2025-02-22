<?php

if (defined('_ECRIRE_INC_VERSION')) {
// Pipeline styliser 
function execute_pipeline_styliser(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/cvt_multietapes.php');
$inc=true;
}
$val = minipipe('cvtmulti_styliser', $val);
$val = minipipe('squelettes_par_rubrique_styliser_par_rubrique', $val);
$val = minipipe('squelettes_par_rubrique_styliser_par_langue', $val);
return $val;
}
// Pipeline accueil_encours 
function execute_pipeline_accueil_encours(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
$inc=true;
}
$val = minipipe('forum_accueil_encours', $val);
$val = minipipe('sites_accueil_encours', $val);
return $val;
}
// Pipeline accueil_informations 
function execute_pipeline_accueil_informations(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
$inc=true;
}
$val = minipipe('forum_accueil_informations', $val);
return $val;
}
// Pipeline affichage_final 
function execute_pipeline_affichage_final(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/pipelines.php');
$inc=true;
}
$val = minipipe('f_surligne', $val);
$val = minipipe('f_tidy', $val);
$val = minipipe('f_admin', $val);
$val = minipipe('f_queue', $val);
$val = minipipe('compresseur_affichage_final', $val);
return $val;
}
// Pipeline affichage_final_prive 
function execute_pipeline_affichage_final_prive(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/pipelines_ecrire.php');
$inc=true;
}
$val = minipipe('affichage_final_prive_title_auto', $val);
return $val;
}
// Pipeline affichage_entetes_final 
function execute_pipeline_affichage_entetes_final(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_pipelines.php');
$inc=true;
}
$val = minipipe('stats_affichage_entetes_final', $val);
return $val;
}
// Pipeline affichage_entetes_final_prive 
function execute_pipeline_affichage_entetes_final_prive(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_pipelines.php');
$inc=true;
}
$val = minipipe('stats_affichage_entetes_final_prive', $val);
return $val;
}
// Pipeline afficher_fiche_objet 
function execute_pipeline_afficher_fiche_objet(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/urls_pipeline.php');
$inc=true;
}
$val = minipipe('forum_afficher_fiche_objet', $val);
$val = minipipe('urls_afficher_fiche_objet', $val);
return $val;
}
// Pipeline afficher_complement_objet 
function execute_pipeline_afficher_complement_objet(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('medias_afficher_complement_objet', $val);
return $val;
}
// Pipeline afficher_config_objet 
function execute_pipeline_afficher_config_objet(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
$inc=true;
}
$val = minipipe('forum_afficher_config_objet', $val);
return $val;
}
// Pipeline afficher_contenu_objet 
function execute_pipeline_afficher_contenu_objet(&$val){
return $val;
}
// Pipeline afficher_nombre_objets_associes_a 
function execute_pipeline_afficher_nombre_objets_associes_a(&$val){
return $val;
}
// Pipeline afficher_message_statut_objet 
function execute_pipeline_afficher_message_statut_objet(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
$inc=true;
}
$val = minipipe('forum_afficher_message_statut_objet', $val);
return $val;
}
// Pipeline affiche_auteurs_interventions 
function execute_pipeline_affiche_auteurs_interventions(&$val){
return $val;
}
// Pipeline affiche_droite 
function execute_pipeline_affiche_droite(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'compagnon/compagnon_pipelines.php');
$inc=true;
}
$val = minipipe('compagnon_affiche_droite', $val);
return $val;
}
// Pipeline affiche_gauche 
function execute_pipeline_affiche_gauche(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'compagnon/compagnon_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('compagnon_affiche_gauche', $val);
$val = minipipe('medias_affiche_gauche', $val);
return $val;
}
// Pipeline affiche_milieu 
function execute_pipeline_affiche_milieu(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'compagnon/compagnon_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'mots/mots_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'compresseur/compresseur_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('f_queue_affiche_milieu', $val);
$val = minipipe('mise_a_jour_affiche_milieu', $val);
$val = minipipe('compagnon_affiche_milieu', $val);
$val = minipipe('mots_affiche_milieu', $val);
$val = minipipe('porte_plume_affiche_milieu', $val);
$val = minipipe('revisions_affiche_milieu', $val);
$val = minipipe('sites_affiche_milieu', $val);
$val = minipipe('stats_affiche_milieu', $val);
$val = minipipe('bigup_affiche_milieu', $val);
$val = minipipe('compresseur_affiche_milieu', $val);
$val = minipipe('medias_affiche_milieu', $val);
return $val;
}
// Pipeline affiche_pied 
function execute_pipeline_affiche_pied(&$val){
return $val;
}
// Pipeline affiche_enfants 
function execute_pipeline_affiche_enfants(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
$inc=true;
}
$val = minipipe('sites_affiche_enfants', $val);
return $val;
}
// Pipeline affiche_hierarchie 
function execute_pipeline_affiche_hierarchie(&$val){
return $val;
}
// Pipeline affiche_formulaire_login 
function execute_pipeline_affiche_formulaire_login(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/pipelines.php');
$inc=true;
}
$val = minipipe('auth_formulaire_login', $val);
return $val;
}
// Pipeline alertes_auteur 
function execute_pipeline_alertes_auteur(&$val){
return $val;
}
// Pipeline arbo_creer_chaine_url 
function execute_pipeline_arbo_creer_chaine_url(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/urls/arbo.php');
$inc=true;
}
$val = minipipe('urls_arbo_creer_chaine_url', $val);
return $val;
}
// Pipeline auth_administrer 
function execute_pipeline_auth_administrer(&$val){
return $val;
}
// Pipeline autoriser 
function execute_pipeline_autoriser(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_autoriser.php');
include_once_check(_ROOT_PLUGINS_DIST.'mots/mots_autoriser.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_autoriser.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_autoriser.php');
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_autoriser.php');
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/urls_autoriser.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_autoriser.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/svp_pipelines.php');
$inc=true;
}
$val = minipipe('forum_autoriser', $val);
$val = minipipe('mots_autoriser', $val);
$val = minipipe('porte_plume_autoriser', $val);
$val = minipipe('revisions_autoriser', $val);
$val = minipipe('sites_autoriser', $val);
$val = minipipe('stats_autoriser', $val);
$val = minipipe('urls_autoriser', $val);
$val = minipipe('medias_autoriser', $val);
$val = minipipe('svp_autoriser', $val);
return $val;
}
// Pipeline base_admin_repair 
function execute_pipeline_base_admin_repair(&$val){
return $val;
}
// Pipeline boite_infos 
function execute_pipeline_boite_infos(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/pipelines_ecrire.php');
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('f_boite_infos', $val);
$val = minipipe('forum_boite_infos', $val);
$val = minipipe('revisions_boite_infos', $val);
$val = minipipe('sites_boite_infos', $val);
$val = minipipe('stats_boite_infos', $val);
$val = minipipe('medias_boite_infos', $val);
return $val;
}
// Pipeline ajouter_menus 
function execute_pipeline_ajouter_menus(&$val){
return $val;
}
// Pipeline ajouter_onglets 
function execute_pipeline_ajouter_onglets(&$val){
return $val;
}
// Pipeline body_prive 
function execute_pipeline_body_prive(&$val){
return $val;
}
// Pipeline calculer_rubriques 
function execute_pipeline_calculer_rubriques(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('sites_calculer_rubriques', $val);
$val = minipipe('medias_calculer_rubriques', $val);
return $val;
}
// Pipeline configurer_liste_metas 
function execute_pipeline_configurer_liste_metas(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'mots/mots_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'compresseur/compresseur_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('forum_configurer_liste_metas', $val);
$val = minipipe('mots_configurer_liste_metas', $val);
$val = minipipe('porte_plume_configurer_liste_metas', $val);
$val = minipipe('revisions_configurer_liste_metas', $val);
$val = minipipe('sites_configurer_liste_metas', $val);
$val = minipipe('stats_configurer_liste_metas', $val);
$val = minipipe('compresseur_configurer_liste_metas', $val);
$val = minipipe('medias_configurer_liste_metas', $val);
return $val;
}
// Pipeline compter_contributions_auteur 
function execute_pipeline_compter_contributions_auteur(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
$inc=true;
}
$val = minipipe('forum_compter_contributions_auteur', $val);
return $val;
}
// Pipeline declarer_hosts_distants 
function execute_pipeline_declarer_hosts_distants(&$val){
return $val;
}
// Pipeline declarer_filtres_squelettes 
function execute_pipeline_declarer_filtres_squelettes(&$val){
return $val;
}
// Pipeline declarer_tables_interfaces 
function execute_pipeline_declarer_tables_interfaces(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/base/forum.php');
include_once_check(_ROOT_PLUGINS_DIST.'mots/base/mots.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/base/revisions.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/base/sites.php');
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/base/urls.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/base/medias.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/base/svp_declarer.php');
$inc=true;
}
$val = minipipe('forum_declarer_tables_interfaces', $val);
$val = minipipe('mots_declarer_tables_interfaces', $val);
$val = minipipe('revisions_declarer_tables_interfaces', $val);
$val = minipipe('sites_declarer_tables_interfaces', $val);
$val = minipipe('urls_declarer_tables_interfaces', $val);
$val = minipipe('medias_declarer_tables_interfaces', $val);
$val = minipipe('svp_declarer_tables_interfaces', $val);
return $val;
}
// Pipeline declarer_tables_objets_sql 
function execute_pipeline_declarer_tables_objets_sql(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/base/forum.php');
include_once_check(_ROOT_PLUGINS_DIST.'mots/base/mots.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/base/revisions.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/base/sites.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/base/medias.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/base/svp_declarer.php');
$inc=true;
}
$val = minipipe('forum_declarer_tables_objets_sql', $val);
$val = minipipe('mots_declarer_tables_objets_sql', $val);
$val = minipipe('revisions_declarer_tables_objets_sql', $val);
$val = minipipe('sites_declarer_tables_objets_sql', $val);
$val = minipipe('medias_declarer_tables_objets_sql', $val);
$val = minipipe('svp_declarer_tables_objets_sql', $val);
return $val;
}
// Pipeline declarer_tables_principales 
function execute_pipeline_declarer_tables_principales(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/base/medias.php');
$inc=true;
}
$val = minipipe('medias_declarer_tables_principales', $val);
return $val;
}
// Pipeline declarer_tables_auxiliaires 
function execute_pipeline_declarer_tables_auxiliaires(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'mots/base/mots.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/base/revisions.php');
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/base/stats.php');
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/base/urls.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/base/medias.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/base/svp_declarer.php');
$inc=true;
}
$val = minipipe('mots_declarer_tables_auxiliaires', $val);
$val = minipipe('revisions_declarer_tables_auxiliaires', $val);
$val = minipipe('stats_declarer_tables_auxiliaires', $val);
$val = minipipe('urls_declarer_tables_auxiliaires', $val);
$val = minipipe('medias_declarer_tables_auxiliaires', $val);
$val = minipipe('svp_declarer_tables_auxiliaires', $val);
return $val;
}
// Pipeline declarer_tables_objets_surnoms 
function execute_pipeline_declarer_tables_objets_surnoms(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/base/medias.php');
$inc=true;
}
$val = minipipe('medias_declarer_tables_objets_surnoms', $val);
return $val;
}
// Pipeline declarer_type_surnoms 
function execute_pipeline_declarer_type_surnoms(&$val){
return $val;
}
// Pipeline declarer_url_objets 
function execute_pipeline_declarer_url_objets(&$val){
return $val;
}
// Pipeline detecter_fond_par_defaut 
function execute_pipeline_detecter_fond_par_defaut(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('medias_detecter_fond_par_defaut', $val);
return $val;
}
// Pipeline definir_session 
function execute_pipeline_definir_session(&$val){
return $val;
}
// Pipeline delete_tables 
function execute_pipeline_delete_tables(&$val){
return $val;
}
// Pipeline editer_contenu_objet 
function execute_pipeline_editer_contenu_objet(&$val){
return $val;
}
// Pipeline exec_init 
function execute_pipeline_exec_init(&$val){
return $val;
}
// Pipeline filtrer_liste_plugins 
function execute_pipeline_filtrer_liste_plugins(&$val){
return $val;
}
// Pipeline formulaire_charger 
function execute_pipeline_formulaire_charger(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/cvt_configurer.php');
include_once_check(_ROOT_RESTREINT.'/inc/cvt_autosave.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
$inc=true;
}
$val = minipipe('cvtconf_formulaire_charger', $val);
$val = minipipe('cvtautosave_formulaire_charger', $val);
$val = minipipe('revisions_formulaire_charger', $val);
$val = minipipe('bigup_medias_formulaire_charger', $val);
$val = minipipe('bigup_formulaire_charger', $val);
return $val;
}
// Pipeline formulaire_receptionner 
function execute_pipeline_formulaire_receptionner(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
$inc=true;
}
$val = minipipe('bigup_formulaire_receptionner', $val);
return $val;
}
// Pipeline formulaire_verifier 
function execute_pipeline_formulaire_verifier(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
$inc=true;
}
$val = minipipe('bigup_formulaire_verifier', $val);
return $val;
}
// Pipeline formulaire_verifier_etape 
function execute_pipeline_formulaire_verifier_etape(&$val){
return $val;
}
// Pipeline formulaire_traiter 
function execute_pipeline_formulaire_traiter(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/cvt_configurer.php');
include_once_check(_ROOT_RESTREINT.'/inc/cvt_autosave.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
$inc=true;
}
$val = minipipe('cvtconf_formulaire_traiter', $val);
$val = minipipe('cvtautosave_formulaire_traiter', $val);
$val = minipipe('bigup_formulaire_traiter', $val);
return $val;
}
// Pipeline formulaire_fond 
function execute_pipeline_formulaire_fond(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
$inc=true;
}
$val = minipipe('bigup_medias_formulaire_fond', $val);
return $val;
}
// Pipeline formulaire_admin 
function execute_pipeline_formulaire_admin(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_pipelines.php');
$inc=true;
}
$val = minipipe('stats_formulaire_admin', $val);
return $val;
}
// Pipeline get_spip_doc 
function execute_pipeline_get_spip_doc(&$val){
return $val;
}
// Pipeline header_prive 
function execute_pipeline_header_prive(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'mediabox/mediabox_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'compresseur/compresseur_pipeline.php');
$inc=true;
}
include_once_check(_DIR_RESTREINT . 'inc/pipelines_ecrire.php');
$val = minipipe('f_jQuery_prive', $val);
if ($f=timestamp(find_in_path('javascript/medias_edit.js'))) $val .= '<script src="'.$f.'" type="text/javascript"></script>';
$val = minipipe('mediabox_insert_head', $val);
$val = minipipe('porte_plume_insert_head_prive', $val);
$val = minipipe('bigup_header_prive', $val);
$val = minipipe('compresseur_header_prive', $val);
return $val;
}
// Pipeline header_prive_css 
function execute_pipeline_header_prive_css(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'mediabox/mediabox_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/svp_pipelines.php');
$inc=true;
}
$val = minipipe('mediabox_insert_head_css', $val);
$val = minipipe('porte_plume_insert_head_prive_css', $val);
$val = minipipe('bigup_header_prive_css', $val);
$val = minipipe('svp_header_prive_css', $val);
return $val;
}
// Pipeline image_preparer_filtre 
function execute_pipeline_image_preparer_filtre(&$val){
return $val;
}
// Pipeline image_ecrire_tag_preparer 
function execute_pipeline_image_ecrire_tag_preparer(&$val){
return $val;
}
// Pipeline image_ecrire_tag_finir 
function execute_pipeline_image_ecrire_tag_finir(&$val){
return $val;
}
// Pipeline insert_head 
function execute_pipeline_insert_head(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'mediabox/mediabox_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'compresseur/compresseur_pipeline.php');
$inc=true;
}
include_once_check(_DIR_RESTREINT . 'inc/pipelines.php');
$val = minipipe('f_jQuery', $val);
$val = minipipe('mediabox_insert_head', $val);
$val = minipipe('porte_plume_insert_head_public', $val);
$val = minipipe('bigup_insert_head', $val);
$val = minipipe('compresseur_insert_head', $val);
return $val;
}
// Pipeline insert_head_css 
function execute_pipeline_insert_head_css(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'mediabox/mediabox_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
$inc=true;
}
$val = minipipe('mediabox_insert_head_css', $val);
$val = minipipe('porte_plume_insert_head_css', $val);
$val = minipipe('bigup_insert_head_css', $val);
return $val;
}
// Pipeline jquery_plugins 
function execute_pipeline_jquery_plugins(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'mediabox/mediabox_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'bigup/bigup_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/svp_pipelines.php');
$inc=true;
}
$val = minipipe('mediabox_jquery_plugins', $val);
$val = minipipe('bigup_jquery_plugins', $val);
$val = minipipe('svp_jquery_plugins', $val);
return $val;
}
// Pipeline exclure_id_conditionnel 
function execute_pipeline_exclure_id_conditionnel(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'svp/svp_pipelines.php');
$inc=true;
}
$val = minipipe('svp_exclure_id_conditionnel', $val);
return $val;
}
// Pipeline lister_tables_noerase 
function execute_pipeline_lister_tables_noerase(&$val){
return $val;
}
// Pipeline lister_tables_noexport 
function execute_pipeline_lister_tables_noexport(&$val){
return $val;
}
// Pipeline lister_tables_noimport 
function execute_pipeline_lister_tables_noimport(&$val){
return $val;
}
// Pipeline libeller_logo 
function execute_pipeline_libeller_logo(&$val){
return $val;
}
// Pipeline nettoyer_raccourcis_typo 
function execute_pipeline_nettoyer_raccourcis_typo(&$val){
return $val;
}
// Pipeline notifications 
function execute_pipeline_notifications(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/inc/email_notification_forum.php');
$inc=true;
}
$val = minipipe('forum_notifications', $val);
return $val;
}
// Pipeline notifications_destinataires 
function execute_pipeline_notifications_destinataires(&$val){
return $val;
}
// Pipeline notifications_envoyer_mails 
function execute_pipeline_notifications_envoyer_mails(&$val){
return $val;
}
// Pipeline objet_compte_enfants 
function execute_pipeline_objet_compte_enfants(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('sites_objet_compte_enfants', $val);
$val = minipipe('medias_objet_compte_enfants', $val);
return $val;
}
// Pipeline optimiser_base_disparus 
function execute_pipeline_optimiser_base_disparus(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'mots/mots_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/urls_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/base/medias.php');
$inc=true;
}
$val = minipipe('forum_optimiser_base_disparus', $val);
$val = minipipe('mots_optimiser_base_disparus', $val);
$val = minipipe('sites_optimiser_base_disparus', $val);
$val = minipipe('urls_optimiser_base_disparus', $val);
$val = minipipe('medias_optimiser_base_disparus', $val);
return $val;
}
// Pipeline page_indisponible 
function execute_pipeline_page_indisponible(&$val){
return $val;
}
// Pipeline prepare_recherche 
function execute_pipeline_prepare_recherche(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
$inc=true;
}
$val = minipipe('forum_prepare_recherche', $val);
return $val;
}
// Pipeline pre_boucle 
function execute_pipeline_pre_boucle(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'svp/svp_pipelines.php');
$inc=true;
}
$val = minipipe('svp_pre_boucle', $val);
return $val;
}
// Pipeline post_boucle 
function execute_pipeline_post_boucle(&$val){
return $val;
}
// Pipeline post_image_filtrer 
function execute_pipeline_post_image_filtrer(&$val){
return $val;
}
// Pipeline preparer_fichier_session 
function execute_pipeline_preparer_fichier_session(&$val){
return $val;
}
// Pipeline preparer_visiteur_session 
function execute_pipeline_preparer_visiteur_session(&$val){
return $val;
}
// Pipeline pre_propre 
function execute_pipeline_pre_propre(&$val){
return $val;
}
// Pipeline pre_liens 
function execute_pipeline_pre_liens(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'textwheel/inc/autoliens.php');
include_once_check(_ROOT_PLUGINS_DIST.'textwheel/inc/ressource-mini.php');
$inc=true;
}
$val = minipipe('traiter_raccourci_glossaire', $val);
$val = minipipe('traiter_raccourci_ancre', $val);
$val = minipipe('tw_autoliens', $val);
$val = minipipe('tw_pre_liens', $val);
return $val;
}
// Pipeline post_propre 
function execute_pipeline_post_propre(&$val){
return $val;
}
// Pipeline pre_typo 
function execute_pipeline_pre_typo(&$val){
return $val;
}
// Pipeline post_typo 
function execute_pipeline_post_typo(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'textwheel/inc/ressource-mini.php');
$inc=true;
}
$val = minipipe('quote_amp', $val);
$val = minipipe('tw_post_typo', $val);
return $val;
}
// Pipeline pre_edition 
function execute_pipeline_pre_edition(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
$inc=true;
}
$val = minipipe('revisions_pre_edition', $val);
return $val;
}
// Pipeline pre_edition_lien 
function execute_pipeline_pre_edition_lien(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
$inc=true;
}
$val = minipipe('revisions_pre_edition_lien', $val);
return $val;
}
// Pipeline post_edition 
function execute_pipeline_post_edition(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'mots/mots_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('mots_post_edition', $val);
$val = minipipe('revisions_post_edition', $val);
$val = minipipe('medias_post_edition', $val);
return $val;
}
// Pipeline post_edition_lien 
function execute_pipeline_post_edition_lien(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
$inc=true;
}
$val = minipipe('revisions_post_edition_lien', $val);
return $val;
}
// Pipeline pre_insertion 
function execute_pipeline_pre_insertion(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
$inc=true;
}
$val = minipipe('forum_pre_insertion', $val);
$val = minipipe('revisions_pre_insertion', $val);
return $val;
}
// Pipeline post_insertion 
function execute_pipeline_post_insertion(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_pipeline.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('revisions_post_insertion', $val);
$val = minipipe('medias_post_insertion', $val);
return $val;
}
// Pipeline pre_indexation 
function execute_pipeline_pre_indexation(&$val){
return $val;
}
// Pipeline propres_creer_chaine_url 
function execute_pipeline_propres_creer_chaine_url(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/urls/propres.php');
$inc=true;
}
$val = minipipe('urls_propres_creer_chaine_url', $val);
return $val;
}
// Pipeline quete_logo_objet 
function execute_pipeline_quete_logo_objet(&$val){
return $val;
}
// Pipeline requete_dico 
function execute_pipeline_requete_dico(&$val){
return $val;
}
// Pipeline rubrique_encours 
function execute_pipeline_rubrique_encours(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
$inc=true;
}
$val = minipipe('forum_rubrique_encours', $val);
$val = minipipe('sites_rubrique_encours', $val);
return $val;
}
// Pipeline taches_generales_cron 
function execute_pipeline_taches_generales_cron(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_pipelines.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/genie/svp_taches_generales_cron.php');
$inc=true;
}
$val['revisions_optimiser_revisions'] = 86400;
$val['bigup_nettoyer_repertoire_upload'] = 86400;
$val['medias_nettoyer_repertoire_upload'] = 86400;
$val = minipipe('sites_taches_generales_cron', $val);
$val = minipipe('stats_taches_generales_cron', $val);
$val = minipipe('svp_taches_generales_cron', $val);
return $val;
}
// Pipeline rechercher_liste_des_champs 
function execute_pipeline_rechercher_liste_des_champs(&$val){
return $val;
}
// Pipeline rechercher_liste_des_jointures 
function execute_pipeline_rechercher_liste_des_jointures(&$val){
return $val;
}
// Pipeline recuperer_fond 
function execute_pipeline_recuperer_fond(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_RESTREINT.'/inc/pipelines.php');
$inc=true;
}
$val = minipipe('f_recuperer_fond', $val);
return $val;
}
// Pipeline traduire 
function execute_pipeline_traduire(&$val){
return $val;
}
// Pipeline trig_auth_trace 
function execute_pipeline_trig_auth_trace(&$val){
return $val;
}
// Pipeline trig_calculer_prochain_postdate 
function execute_pipeline_trig_calculer_prochain_postdate(&$val){
return $val;
}
// Pipeline trig_calculer_langues_rubriques 
function execute_pipeline_trig_calculer_langues_rubriques(&$val){
return $val;
}
// Pipeline trig_propager_les_secteurs 
function execute_pipeline_trig_propager_les_secteurs(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_pipelines.php');
$inc=true;
}
$val = minipipe('sites_trig_propager_les_secteurs', $val);
return $val;
}
// Pipeline trig_supprimer_objets_lies 
function execute_pipeline_trig_supprimer_objets_lies(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_pipelines.php');
$inc=true;
}
$val = minipipe('forum_trig_supprimer_objets_lies', $val);
return $val;
}
// Pipeline trig_purger 
function execute_pipeline_trig_purger(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'textwheel/inc/textwheel.php');
$inc=true;
}
$val = minipipe('tw_trig_purger', $val);
return $val;
}
// Pipeline trig_trace_query 
function execute_pipeline_trig_trace_query(&$val){
return $val;
}
// Pipeline objet_lister_parents 
function execute_pipeline_objet_lister_parents(&$val){
return $val;
}
// Pipeline objet_lister_enfants 
function execute_pipeline_objet_lister_enfants(&$val){
return $val;
}
// Pipeline aide_index 
function execute_pipeline_aide_index(&$val){
return $val;
}
// Pipeline pre_echappe_html_propre 
function execute_pipeline_pre_echappe_html_propre(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'aide/inc/aide.php');
$inc=true;
}
$val = minipipe('aide_pre_echappe_html_propre', $val);
return $val;
}
// Pipeline compagnon_messages 
function execute_pipeline_compagnon_messages(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'compagnon/compagnon_messages.php');
$inc=true;
}
$val = minipipe('compagnon_compagnon_messages', $val);
return $val;
}
// Pipeline forum_objets_depuis_env 
function execute_pipeline_forum_objets_depuis_env(&$val){
return $val;
}
// Pipeline ieconfig_metas 
function execute_pipeline_ieconfig_metas(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'forum/forum_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'mediabox/mediabox_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'mots/mots_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'porte_plume/porte_plume_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'revisions/revisions_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'sites/sites_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'statistiques/stats_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'urls_etendues/urls_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'compresseur/compresseur_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_ieconfig.php');
include_once_check(_ROOT_PLUGINS_DIST.'svp/svp_ieconfig.php');
$inc=true;
}
$val = minipipe('forum_ieconfig_metas', $val);
$val = minipipe('mediabox_ieconfig_metas', $val);
$val = minipipe('mots_ieconfig_metas', $val);
$val = minipipe('porte_plume_ieconfig_metas', $val);
$val = minipipe('revisions_ieconfig_metas', $val);
$val = minipipe('sites_ieconfig_metas', $val);
$val = minipipe('stats_ieconfig_metas', $val);
$val = minipipe('urls_ieconfig_metas', $val);
$val = minipipe('compresseur_ieconfig_metas', $val);
$val = minipipe('medias_ieconfig_metas', $val);
$val = minipipe('svp_ieconfig_metas', $val);
return $val;
}
// Pipeline mediabox_config 
function execute_pipeline_mediabox_config(&$val){
return $val;
}
// Pipeline mots_indexation 
function execute_pipeline_mots_indexation(&$val){
return $val;
}
// Pipeline porte_plume_barre_pre_charger 
function execute_pipeline_porte_plume_barre_pre_charger(&$val){
return $val;
}
// Pipeline porte_plume_barre_charger 
function execute_pipeline_porte_plume_barre_charger(&$val){
return $val;
}
// Pipeline porte_plume_lien_classe_vers_icone 
function execute_pipeline_porte_plume_lien_classe_vers_icone(&$val){
return $val;
}
// Pipeline revisions_chercher_label 
function execute_pipeline_revisions_chercher_label(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('medias_revisions_chercher_label', $val);
return $val;
}
// Pipeline pre_syndication 
function execute_pipeline_pre_syndication(&$val){
return $val;
}
// Pipeline post_syndication 
function execute_pipeline_post_syndication(&$val){
return $val;
}
// Pipeline delete_statistiques 
function execute_pipeline_delete_statistiques(&$val){
return $val;
}
// Pipeline pre_echappe_html_propre_args 
function execute_pipeline_pre_echappe_html_propre_args(&$val){
return $val;
}
// Pipeline post_echappe_html_propre 
function execute_pipeline_post_echappe_html_propre(&$val){
return $val;
}
// Pipeline post_echappe_html_propre_args 
function execute_pipeline_post_echappe_html_propre_args(&$val){
return $val;
}
// Pipeline bigup_preparer_input_options 
function execute_pipeline_bigup_preparer_input_options(&$val){
return $val;
}
// Pipeline document_desc_actions 
function execute_pipeline_document_desc_actions(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('medias_document_desc_actions', $val);
return $val;
}
// Pipeline editer_document_actions 
function execute_pipeline_editer_document_actions(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('medias_editer_document_actions', $val);
return $val;
}
// Pipeline renseigner_document_distant 
function execute_pipeline_renseigner_document_distant(&$val){
static $inc=null;
if (!$inc){
include_once_check(_ROOT_PLUGINS_DIST.'medias/medias_pipelines.php');
$inc=true;
}
$val = minipipe('medias_renseigner_document_distant', $val);
return $val;
}
// Pipeline afficher_metas_document 
function execute_pipeline_afficher_metas_document(&$val){
return $val;
}
// Pipeline medias_documents_visibles 
function execute_pipeline_medias_documents_visibles(&$val){
return $val;
}
// Pipeline medias_methodes_upload 
function execute_pipeline_medias_methodes_upload(&$val){
return $val;
}
// Pipeline renseigner_document 
function execute_pipeline_renseigner_document(&$val){
return $val;
}
// Pipeline svp_afficher_paquet 
function execute_pipeline_svp_afficher_paquet(&$val){
return $val;
}
}
?>