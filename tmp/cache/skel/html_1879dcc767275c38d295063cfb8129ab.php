<?php

/*
 * Squelette : ../prive/themes/spip/typo.css.html
 * Date :      Tue, 03 Dec 2024 10:08:50 GMT
 * Compile :   Mon, 27 Jan 2025 11:03:47 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/typo.css.html
// Temps de compilation total: 5.463 ms
//

function html_1879dcc767275c38d295063cfb8129ab($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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

/* --------------------------------------------------------------

   typo.css.html
   Base typographique
   Cf.: https://contrib.spip.net/3820

-------------------------------------------------------------- */
') :
		'') .
'
' .
retablir_echappements_modeles('<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Content-Type: text/css; charset=utf-8') . '); ?'.'>') .
retablir_echappements_modeles('<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>') .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_claire', null), 'edf3fe'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	(interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'couleur_foncee', null), '3874b0'),true)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'left'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','left','right'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'right'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','right','left'))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'rtl'] = (interdire_scripts(choixsiegal(entites_html(table_valeur($Pile[0]??[], (string)'ltr', null),true),'left','','_rtl'))))) .
'/* Valeurs par defaut :
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'font-size'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'font-size', null), '1em'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-size', null))))!=='' ?
		(' font-size: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'line-height'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'line-height', null), '1.2em'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'line-height', null))))!=='' ?
		(' line-height: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'margin-bottom'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'margin-bottom', null), '1.2em'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'margin-bottom', null))))!=='' ?
		(' margin-bottom: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'text-indent'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'text-indent', null), '50px'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'text-indent', null))))!=='' ?
		(' text-indent: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'font-family'] = (interdire_scripts(sinon(table_valeur($Pile[0]??[], (string)'font-family', null), 'Verdana, Geneva, sans-serif'))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-family', null))))!=='' ?
		(' font-family: ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'background-color'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'background-color', null), '#F8F7F3'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'background-color', null))))!=='' ?
		(' background-color : ' . $t1 . ';') :
		'') .
'
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'color'] = (interdire_scripts(entites_html(sinon(table_valeur($Pile[0]??[], (string)'color', null), '#000000'),true))))) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'color', null))))!=='' ?
		(' color: ' . $t1 . ';') :
		'') .
'
*/

html { font-size: 100.01%; } /* Cf.: http://www.pompage.net/pompe/definir-des-tailles-de-polices-en-CSS/ */
body {
  background: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'background-color', null)) .
';
  font: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-size', null)) .
'/' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'line-height', null)) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-family', null))))!=='' ?
		(' ' . $t1) :
		'') .
';
  color: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'color', null)) .
';
}
@media (min-width: 960px) {
	body {
		font: ' .
(($t1 = strval(retablir_echappements_modeles(round(strdiv(strmult(table_valeur($Pile["vars"]??[], (string)'font-size', null),'14'),'13'),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
'/' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'line-height', null)) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-family', null))))!=='' ?
		(' ' . $t1) :
		'') .
';
	}
}
@media (min-width: 1200px) {
	body {
		font: ' .
(($t1 = strval(retablir_echappements_modeles(round(strdiv(strmult(table_valeur($Pile["vars"]??[], (string)'font-size', null),'15'),'13'),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
'/' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'line-height', null)) .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'font-family', null))))!=='' ?
		(' ' . $t1) :
		'') .
';
	}
}

/* Titraille / Intertitres */
h1,h2,h3,h4,h5,h6,
.h1,.h2,.h3,.h4,.h5,.h6 { margin: 0; padding: 0; font-size: 100%; font-weight: normal; }
hr { height: 1px; margin:' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'margin-bottom', null))))!=='' ?
		(' ' . $t1) :
		'') .
' 0; border: 0; background: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'color', null)) .
'; color: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'color', null)) .
'; }

/* Titraille Blueprint
Cf. : http://www.blueprintcss.org/tests/parts/elements.html
h1 { font-size: 3em; line-height: 1; margin-bottom: 0.5em; }
h2 { font-size: 2em; margin-bottom: 0.75em; }
h3 { font-size: 1.5em; line-height: 1; margin-bottom: 1em; }
h4 { font-size: 1.2em; line-height: 1.25; margin-bottom: 1.25em; }
h5 { font-size: 1em; font-weight: bold; margin-bottom: 1.5em; }
h6 { font-size: 1em; font-weight: bold; }*/

' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'coeff'] = (strdiv(strdiv(strplus(table_valeur($Pile["vars"]??[], (string)'line-height', null),'2'),'2'),(table_valeur($Pile["vars"]??[], (string)'line-height', null)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'coeffinv'] = (strdiv('1',(table_valeur($Pile["vars"]??[], (string)'coeff', null)))))) .
'h1,.h1 {' .
(($t1 = strval(retablir_echappements_modeles(strmult(table_valeur($Pile["vars"]??[], (string)'line-height', null),(table_valeur($Pile["vars"]??[], (string)'coeff', null))))))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(retablir_echappements_modeles(strmult(table_valeur($Pile["vars"]??[], (string)'coeffinv', null),'2'))))!=='' ?
		(' line-height: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'coeffinv', null))))!=='' ?
		(' margin-bottom: ' . $t1 . 'em;') :
		'') .
'}
h2,.h2 {' .
(($t1 = strval(retablir_echappements_modeles(strmult(table_valeur($Pile["vars"]??[], (string)'line-height', null),'1'))))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
'; line-height: 1; margin-bottom: 1em; font-weight: bold;}
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'coeff'] = (strdiv(strdiv(strplus(table_valeur($Pile["vars"]??[], (string)'line-height', null),'1'),'2'),(table_valeur($Pile["vars"]??[], (string)'line-height', null)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'coeffinv'] = (strdiv('1',(table_valeur($Pile["vars"]??[], (string)'coeff', null)))))) .
'h3,.h3 {' .
(($t1 = strval(retablir_echappements_modeles(strmult(table_valeur($Pile["vars"]??[], (string)'line-height', null),(table_valeur($Pile["vars"]??[], (string)'coeff', null))))))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'coeffinv', null))))!=='' ?
		(' line-height: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'coeffinv', null))))!=='' ?
		(' margin-bottom: ' . $t1 . 'em;') :
		'') .
'font-weight: bold; }
' .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'coeff'] = (strdiv(strdiv(strplus(table_valeur($Pile["vars"]??[], (string)'line-height', null),'3'),'4'),(table_valeur($Pile["vars"]??[], (string)'line-height', null)))))) .
retablir_echappements_modeles(vide($Pile['vars'][$_zzz=(string)'coeffinv'] = (strdiv('1',(table_valeur($Pile["vars"]??[], (string)'coeff', null)))))) .
'h4,.h4,caption {' .
(($t1 = strval(retablir_echappements_modeles(strmult(table_valeur($Pile["vars"]??[], (string)'line-height', null),(table_valeur($Pile["vars"]??[], (string)'coeff', null))))))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'coeffinv', null))))!=='' ?
		(' line-height: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'coeffinv', null))))!=='' ?
		(' margin-bottom: ' . $t1 . 'em;') :
		'') .
'font-weight: bold; }
h5,.h5 { font-size: 1em; font-weight: bold; margin-bottom: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'margin-bottom', null)) .
'; }
h6,.h6 { font-size: 1em; font-weight: bold; }
h3.titrem {
	position: relative;
}

/* Titre de section.
   Ils reprennent l\'affichage des entêtes de boîtes.
   Utile pour démarrer une section sur une fiche d\'objet par exemple,
   tout en gardant un affichage consistant avec les blocs de formulaires, listes, etc. */
.titrem_section {
	display: block;
	padding: var(--spip-box-spacing-y-mini) var(--spip-box-spacing-x-mini);
	margin: var(--spip-spacing-y) 0;
	font-size: var(--spip-box-heading-fontsize-mini);
	font-weight: var(--spip-box-heading-fontweight);
	border-radius: var(--spip-box-border-radius);
	background-color: var(--spip-color-gray-lightest);
}


#haut h1,h1.grostitre {margin-top:' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(strdiv(strdiv(strmult(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true),'1.5'),'2'),(table_valeur($Pile["vars"]??[], (string)'line-height', null)))))))!=='' ?
		($t1 . 'em') :
		'') .
'}

/* Enrichissements typographiques */
strong, b { font-weight: bold; }
em, i { font-style: italic; }
small, .small { font-size: 80%; }
big, .big { font-size: 150%; }
abbr[title], acronym[title] { border-bottom: .1em dotted;  text-decoration: none; cursor: help; }
dfn { font-weight: bold; font-style: italic; }
del { text-decoration: line-through; }
ins { text-decoration: none; background-color: ' .
retablir_echappements_modeles('#FFC') .
'; }
sup, sub { font-size: .8em; font-variant: normal; line-height: 0; }
sup { vertical-align: super; }
sub { vertical-align: sub; }
.caps { font-variant: small-caps; }

/* Listes */
ul, ol, li, dl, dt, dd {}
ul ul, ol ol, ul ol, ol ul { margin-top: 0; margin-bottom: 0; }

dl dt { font-weight: bold; }
dl dd {}

/* Citations, code et poesie */
q { font-style: italic; }
blockquote { padding: 0 ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'text-indent', null)) .
'; font-style: italic; }
cite { font-style: italic; }

address { font-style: italic; }

pre,code,kbd,samp,var,tt { font-family: \'lucida console\',monospace; font-size: 1em; }
pre {
	margin:' .
(($t1 = strval(retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'margin-bottom', null))))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
'0;
	white-space: pre-wrap;
	word-break: break-all;
	overflow-wrap: break-word;
}
kbd { background-color: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'color', null)) .
'; color: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'background-color', null)) .
'; }
samp { font-weight: bold; }
var { font-style: italic; }

/* Paragraphes */
p, .p, dl, dd, blockquote, address, pre, table, fieldset { margin-bottom: ' .
retablir_echappements_modeles(table_valeur($Pile["vars"]??[], (string)'margin-bottom', null)) .
'; }

/* Liens */
a {}
a:hover {}
a[hreflang]:after { content: "\\0000a0[" attr(hreflang) "]"; display: inline-block;}
.on { font-weight: bold; }

/* end */

/*
 * Specificites de code SPIP (ex spip-styles.css)
 */

.spip-puce b {display:none;}
.spip-puce {
  position: relative;
  top: 1px;
  display: inline-block;
  font-style: normal;
	font-weight: bold;
	font-size: 1.4em;
  line-height: 0.7;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.spip-puce:before {
	content: "\\203A";
}


/* Listes SPIP */
ul.spip,.formulaire_spip ul.spip, #conteneur ul.spip { list-style: square; margin-bottom:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true))) .
';}
ul.spip ul, #conteneur ul.spip ul { list-style: circle; }
ol.spip, #conteneur ol.spip { list-style: decimal; margin-bottom:' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true))) .
';}

ul.spip li, ol.spip li, #conteneur ul.spip li  {margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'text-indent', null),true))) .
';}
ul.spip li li, ol.spip li li, #conteneur ul.spip li li {margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
':' .
(($t1 = strval(retablir_echappements_modeles(interdire_scripts(strdiv(entites_html(table_valeur($Pile[0]??[], (string)'text-indent', null),true),'2')))))!=='' ?
		($t1 . 'px') :
		'') .
';}

/* Citations, poesie */
/*blockquote.spip { margin: 2em 0; padding-left: 1em; border-left: 0.30em solid; }
blockquote.spip_poesie { margin: 2em 0; padding-left: 1em; border-left: 1px solid; font-family: Garamond, Georgia, Times, serif; }
blockquote.spip_poesie div { text-indent: -3em; margin-left: 3em; }
*/

.spip_surligne { background: #FF6; }

/* Logos, documents et images */
img, .spip_logo { margin: 0; padding: 0; border: 0; max-width: 100%;height: auto;}
.spip_documents { text-align: center; margin-bottom: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true))) .
'; margin-left:auto; margin-right:auto; max-width:100%; }
.spip_documents,
.spip_documents_center,
.spip_doc_titre,
.spip_doc_descriptif,
.spip_doc_credits { margin-right: auto; margin-left: auto; text-align: center; min-width: 120px; }
.spip_documents_center { display: block; clear: both; width: 100%; margin: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true))) .
' auto; }
.spip_documents_left { float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
'; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
': 15px; margin-bottom: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true))) .
'; max-width: 33%; }
.spip_documents_right { float: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'right', null),true))) .
'; margin-' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'left', null),true))) .
': 15px; margin-bottom: ' .
retablir_echappements_modeles(interdire_scripts(entites_html(table_valeur($Pile[0]??[], (string)'margin-bottom', null),true))) .
'; max-width: 33%; }
.spip_documents p { margin: 0.10em; padding: 0;}
.spip_doc_titre { margin-right: auto; margin-left: auto; font-weight: bold; font-size: 0.90em; line-height: 1.25; }
.spip_doc_descriptif { clear: both; margin-right: auto; margin-left: auto; font-size: 0.90em; line-height: 1.25; }
.spip_doc_credits { clear: both; margin-right: auto; margin-left: auto; font-size: 0.90em; font-style:italic; line-height: 1.25; }
.spip_doc_legende { display: block;clear: both; margin-left: auto; margin-right: auto; width: 100%; max-width: 25em; }
.spip_documents>a { display: inline-block; }
.spip_documents img,.spip_documents svg { max-width: 100%; height: auto; }
.spip_documents table { text-align: left; }
table.spip .spip_document_image {width: auto !important;}

/* Adaptation aux nouveaux modeles document SPIP 4.0 */
.spip_document { display: flex; justify-content: center;align-items: center}
.spip_doc_inner{ margin:0 auto;text-align: center;max-width: 100%;}
.spip_doc_inner>* {margin-left: auto;margin-right: auto;}
.spip_document .spip_doc_lien { display: inline-block; }
.spip_doc_legende { display: block; max-width: 25em; }
/* Fin adaptation */

@media (max-width: 480px) {
	.spip_documents_left, .spip_documents_right { float: none; margin-left: auto; margin-right: auto; max-width:100%; }
}


/* modeles par defaut */
.spip_modele { float: right; display: block; padding: 1em; border: 1px solid; width: 180px; }

/* Couleurs des liens de SPIP */
a.spip_note {} /* liens vers notes de bas de page */
a.spip_ancre {} /* liens internes a la page */
a.spip_in {} /* liens internes */
a.spip_mail { color: #900; }
a.spip_mail:before { content: "\\002709"; } /* liens vers un email */
/* liens sortants */
a.spip_out,
a[rel=external] {
	color: #009;
}
a.spip_out:after,
a[rel=external]:after {
	content: "\\0000a0\\279A";
}
a.spip_url { color: #009; } /* liens url sortants */
a.spip_url.auto {word-break: break-word;}
a.spip_glossaire { color: #060; } /* liens vers encyclopedie */
a.spip_glossaire:hover { text-decoration: underline overline; }
a[hreflang]:after { content: "\\0000a0[" attr(hreflang) "]";color:#888; display: inline-block;}
.on { font-weight: bold; } /* liens exposes */
');

	return analyse_resultat_skel('html_1879dcc767275c38d295063cfb8129ab', $Cache, $page, '../prive/themes/spip/typo.css.html');
}
