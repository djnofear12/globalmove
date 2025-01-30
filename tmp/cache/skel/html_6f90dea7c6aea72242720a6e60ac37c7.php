<?php

/*
 * Squelette : ../prive/themes/spip/exceptions.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/exceptions.css.html
// Temps de compilation total: 0.947 ms
//

function html_6f90dea7c6aea72242720a6e60ac37c7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . '

	Ce squelette definit les styles de l\'espace prive

	Note: l\'entete "Vary:" sert a repousser l\'entete par
	defaut "Vary: Cookie,Accept-Encoding", qui est (un peu)
	genant en cas de "rotation du cookie de session" apres
	un changement d\'IP (effet de clignotement).
	<style>
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
'/* * ***************************************************/
/* directives specifiques a une page */
#navigation .sous_navigation {margin-top:' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(strmult(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true),'1.5')))))!=='' ?
		($t1 . 'em') :
		'') .
'}
/* exec=admin_plugin */
.liste-plugins.formulaire_spip {border:0;background:none;padding:0;}
.liste-plugins .liens {padding:6px;background:#ddd; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': -6px; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': -7px;}
#liste_plugins .boutons { margin: -6px; }
.liste-plugins .liste-items {margin-left: -6px; margin-right: -6px;}
.liste-plugins .liste-items .item {background:#f4f4f4;position:relative;padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':76px; padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': 10px;}
.liste-plugins .liste-items .item.actif {background:#fff;}
.liste-plugins .liste-items .item.actif:hover {background:#e8e8e8;}
.liste-plugins .liste-items .item.on {background:' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur($Pile[0]??[], (string)'claire', null),true))))))!=='' ?
		('#' . $t1) :
		'') .
';}
.liste-plugins .liste-items .item.disabled .resume h3,
.liste-plugins .liste-items .item.disabled .resume .version,
.liste-plugins .liste-items .item.disabled .resume .etat,
.liste-plugins .liste-items .item.disabled .resume .short,
.liste-plugins .liste-items .item.disabled .resume .icon {filter: grayscale(100%);opacity: 0.8;}
.liste-plugins .liste-items .item.error {margin:0;background-image:none;border:2px solid #8A1F11;}

.liste-plugins .liste-items .item .resume {min-height:32px;}

.liste-plugins .liste-items .item .short {color:#666;font-size:0.95em;}
.liste-plugins .liste-items .item .check {float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':-70px;position:relative;display:inline;}
.liste-plugins .liste-items .item .check input {margin:0;}
.liste-plugins .liste-items .item .check label {display:none;}

.liste-plugins .liste-items .item .download {float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':-70px;position:relative;display:inline;}

.liste-plugins .liste-items .item h3 {display:inline;}
.liste-plugins .liste-items .item h3 a {color:#444;}
.liste-plugins .liste-items .item.actif h3 a {color:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true))) .
';}

.liste-plugins .liste-items .item .icon {position:absolute;top:3px;' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':34px;width:32px;height:32px;overflow:hidden;}
.liste-plugins .liste-items .item .icon img {max-width: 32px;height: auto;}
.liste-plugins .liste-items .item .icon.no-logo img {filter: grayscale(100%) blur(0.5px);}

.liste-plugins .liste-items .item .actions {float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';visibility:hidden;}
.liste-plugins .liste-items .item:hover .actions {visibility:visible;}

.liste-plugins .liste-items .item .picto_err,
.liste-plugins .liste-items .item .cfg_link { position:absolute; ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
':4px; top:4px; }
.liste-plugins .liste-items .item .picto_err.picto_compat_forcee { opacity:0.5;filter: sepia(100%);' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
':36px;}

.liste-plugins .liste-items .item .details dl {float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';width:62%;margin-bottom:0;}
.liste-plugins .liste-items .item .details dl.tech {float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
'; width:32%;font-size:0.9em;overflow-wrap:break-word;text-align:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
';}
.liste-plugins .liste-items .item .details dl.description dt {float:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
';padding-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
':0.5em;}
.liste-plugins .liste-items .item .details dd {margin-bottom:0;}

.install-plugins {position: relative;}
.install-plugins .result {font-weight: bold;}

.erreur_message-plugins {border:1px solid red;background:#f0d0d0;font-weight:normal;padding:10px;font-size:0.9em;}
.erreur_message-plugins >ul {list-style:none;}
.erreur_message-plugins .info_todo {margin:10px 0;}

#liste_plug { border: solid 1px ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'foncee', null),true))) .
'; padding:3px; background-color:white; height: 200px; overflow:auto;overflow-y: auto; }


/* editer_auteurs */
.option_separateur_statut_auteur { background: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'claire', null),true))) .
'; }
.option_auteur { background: #e4e4e4; }

/* exec/articles */

/* exec/rubriques */
#contenu div.gauche { width: 49%; float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
'; }
#contenu div.droite { width: 49%; float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
'; }

/* exec/auteur_infos */
.auteur .infos .statut {margin:5px 0;border-bottom :1px solid #eee;}
.auteur .infos .statut ul {margin-bottom:0;}

.configurer_preferences #extra {display: none;}
.configurer_preferences.large #extra {display: block;}

/* exec/accueil/accueil-information (ticket #2598) */
#navigation .accueil_informations .item:hover {background:none;}
#navigation .accueil_informations .item.on:hover {background-color:' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur($Pile[0]??[], (string)'claire', null),true)))))))!=='' ?
		('#' . $t1) :
		'') .
';}
#navigation .accueil_informations h4 .plus_info {display:none;}


/* prive/accueil */
.accueil_informations ul.liste-items {
	margin-left: calc(-1 * var(--spip-box-spacing-x));
	margin-right: calc(-1 * var(--spip-box-spacing-x));
}

.accueil_informations ul.liste-items li {
	padding-left: var(--spip-box-spacing-x);
	padding-right: var(--spip-box-spacing-x);
}
');

	return analyse_resultat_skel('html_6f90dea7c6aea72242720a6e60ac37c7', $Cache, $page, '../prive/themes/spip/exceptions.css.html');
}
