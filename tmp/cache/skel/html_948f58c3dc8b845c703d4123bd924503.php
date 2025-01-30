<?php

/*
 * Squelette : prive/formulaires/login.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/login.html
// Temps de compilation total: 1.487 ms
//

function html_948f58c3dc8b845c703d4123bd924503($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
retablir_echappements_modeles('<'.'?php header(' . _q('Cache-Control: no-store, no-cache, must-revalidate') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Pragma: no-cache') . '); ?'.'>') .
'<div class=\'formulaire_spip formulaire_login\'>
	' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'_deja_loge', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok" role="status">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_ok', null))))!=='' ?
		('<div class="reponse_formulaire reponse_formulaire_ok" role="status">' . $t1 . '</div>') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile[0]??[], (string)'message_erreur', null))))!=='' ?
		('<div class=\'reponse_formulaire reponse_formulaire_erreur\' role="alert">' . $t1 . '</div>') :
		'') .
'

	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'echec_cookie', null),true)))))!=='' ?
		($t1 . (	'
	<fieldset class=\'reponse_formulaire reponse_formulaire_erreur\'>
		<h2>' .
	_T('public|spip|ecrire:avis_erreur_cookie') .
	'</h2>
		<p class="erreur_message">' .
	_T('public|spip|ecrire:login_cookie_oblige') .
	'<br />' .
	_T('public|spip|ecrire:login_cookie_accepte') .
	'</p>
	</fieldset>')) :
		'') .
'

	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'editable', null),true)))))!=='' ?
		($t1 . (	'
	<form id=\'formulaire_login\' method=\'post\' action=\'' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'action', null),true))) .
	'\'>
	' .
	(($t2 = strval(retablir_echappements_modeles('')))!=='' ?
			($t2 . ' declarer les hidden qui declencheront le service du formulaire parametre : url d\'action ') :
			'') .
	'
	' .
	retablir_echappements_modeles(	'<span class="form-hidden">' .
	form_hidden(($Pile[0]['action'] ?? '')) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . ($Pile[0]['form'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_args'] ?? '') . '\'>' .
	'<input name=\'formulaire_action_sign\' type=\'hidden\'
		value=\'' . ($Pile[0]['formulaire_sign'] ?? '') . '\'>' .
	($Pile[0]['_hidden'] ?? '') .
	'</span>') .
	'
	<fieldset>
		<legend>' .
	_T('public|spip|ecrire:form_forum_identifiants') .
	'</legend>
		<div class="editer-groupe">
			<div class="editer editer_login obligatoire' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/var_login', null)) ?' ' :'')))))!=='' ?
			($t2 . 'erreur') :
			'') .
	'">
				<label for="var_login">' .
	_T('public|spip|ecrire:login_login2') .
	' <span class="etoile" title="' .
	attribut_html(_T('public|spip|ecrire:info_obligatoire_02')) .
	'" aria-label="' .
	attribut_html(_T('public|spip|ecrire:info_obligatoire_02')) .
	'">*</span></label>' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(trim(sinon(table_valeur($Pile[0]??[], (string)'erreurs/var_login', null), ''))))))!=='' ?
			('
				<span class="erreur_message">' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'var_login\' id=\'var_login\' value="' .
	retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'var_login', null),true))) .
	'" size=\'40\'' .
	(($t2 = strval(retablir_echappements_modeles(' ')))!=='' ?
			($t2 . (	' required=\'required\' ' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'_autofocus', null),true)) AND ((interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/password', null)) ?'' :' '))))) ?' ' :'')))))!=='' ?
				($t3 . 'autofocus=\'autofocus\'') :
				''))) :
			'') .
	' autocapitalize="off" autocorrect="off">
				<span id="spip_logo_auteur">' .
	retablir_echappements_modeles(interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'_logo', null), ''))) .
	'</span>
			</div>
			<div class="editer editer_password obligatoire' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/password', null)) ?' ' :'')))))!=='' ?
			($t2 . 'erreur') :
			'') .
	'">
				<label for="password">' .
	_T('public|spip|ecrire:login_pass2') .
	'  <span class="etoile" title="' .
	attribut_html(_T('public|spip|ecrire:info_obligatoire_02')) .
	'" aria-label="' .
	attribut_html(_T('public|spip|ecrire:info_obligatoire_02')) .
	'">*</span></label>' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(trim(sinon(table_valeur($Pile[0]??[], (string)'erreurs/password', null), ''))))))!=='' ?
			('
				<span class="erreur_message">' . $t2 . '</span>
				') :
			'') .
	'<input type=\'password\' class=\'text password\' name=\'password\' id=\'password\' value="" size=\'40\' autocapitalize="off" autocorrect="off" ' .
	(($t2 = strval(retablir_echappements_modeles(' ')))!=='' ?
			($t2 . (	' ' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((((entites_html(table_valeur($Pile[0]??[], (string)'_autofocus', null),true)) AND ((interdire_scripts(((table_valeur($Pile[0]??[], (string)'erreurs/password', null)) ?' ' :''))))) ?' ' :'')))))!=='' ?
				($t3 . 'autofocus=\'autofocus\'') :
				''))) :
			'') .
	'/>
				<p class=\'details\'><a href="' .
	retablir_echappements_modeles(interdire_scripts(parametre_url(generer_url_public('spip_pass', ''),'lang',(spip_htmlentities(($Pile[0]['lang'] ?? null) ? ($Pile[0]['lang'] ?? null) : $GLOBALS['spip_lang']))))) .
	'" id=\'spip_pass\'>' .
	_T('public|spip|ecrire:login_motpasseoublie') .
	'</a></p>
			</div>
			' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'rester_connecte', null),true)))))!=='' ?
			($t2 . (	'
			<div class="editer editer_session"><div class=\'choix\'>
				<input type="checkbox" class="checkbox" name="session_remember" id="session_remember" value="oui" ' .
		(($t3 = strval(retablir_echappements_modeles(interdire_scripts((entites_html(table_valeur($Pile[0]??[], (string)'cnx', null),true) ? ' ':'')))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		' onchange="jQuery(this).addClass(\'modifie\');">
				<label class=\'nofx\' for="session_remember">' .
		_T('public|spip|ecrire:login_rester_identifie') .
		'</label>
			</div></div>')) :
			'') .
	'
		</div>
	</fieldset>
	<p class="boutons"><input type="submit" class="btn submit" value="' .
	attribut_html(_T('public|spip|ecrire:lien_connecter')) .
	'"></p>
	</form>
	')) :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles('')))!=='' ?
		($t1 . ' en cas d\'absence de cookie, on represente le formulaire alternatif ') :
		'') .
'
	' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'auth_http', null),true)))))!=='' ?
		('<form action="' . $t1 . (	'" method="get">' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(form_hidden(entites_html(table_valeur($Pile[0]??[], (string)'auth_http', null),true))))))!=='' ?
			('
	' . $t2 . '
	') :
			'') .
	'
	<fieldset>
		<legend>' .
	_T('public|spip|ecrire:login_sans_cookie') .
	'</legend>
		' .
	_T('public|spip|ecrire:login_preferez_refuser') .
	'
		<input type="hidden" name="essai_auth_http" value="oui"/>
		' .
	(($t2 = strval(retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'url', null),true)))))!=='' ?
			('<input type="hidden" name="url" value="' . $t2 . '"/>') :
			'') .
	'
		<p class="boutons"><input type="submit" class="btn submit" value="' .
	attribut_html(_T('public|spip|ecrire:login_sans_cookie')) .
	'"/></p>
	</fieldset>
	</form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_948f58c3dc8b845c703d4123bd924503', $Cache, $page, 'prive/formulaires/login.html');
}
