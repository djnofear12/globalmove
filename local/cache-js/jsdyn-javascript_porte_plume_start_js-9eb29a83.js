/* #PRODUIRE{fond=javascript/porte_plume_start.js,hash=848cb01dc48c982ea2b3f404293c3b89,inserer_auto_name_texte=1,lang=en}
   md5:aac094984388256c68f91d9e9b558fdf */



barre_outils_edition = {
    "nameSpace": "edition",
    "previewAutoRefresh": false,
    "onEnter": {
        "keepDefault": false,
        "selectionType": "return",
        "replaceWith": "\n"
    },
    "onShiftEnter": {
        "keepDefault": false,
        "replaceWith": "\n_ "
    },
    "onCtrlEnter": {
        "keepDefault": false,
        "replaceWith": "\n\n"
    },
    "markupSet": [
        {
            "name": "Turn into a {{{subheading}}}",
            "key": "H",
            "className": "outil_header1",
            "openWith": "\n{{{",
            "closeWith": "}}}\n",
            "selectionType": "line"
        },
        {
            "name": "{{Bold}}",
            "key": "B",
            "className": "outil_bold",
            "replaceWith": function(h){ return espace_si_accolade(h, '{{', '}}');},
            "selectionType": "word"
        },
        {
            "name": "{Italic}",
            "key": "I",
            "className": "outil_italic",
            "replaceWith": function(h){ return espace_si_accolade(h, '{', '}');},
            "selectionType": "word"
        },
        {
            "name": "Set list",
            "className": "outil_liste_ul separateur_avant",
            "replaceWith": function(h){ return outil_liste(h, '*');},
            "selectionType": "line",
            "forceMultiline": true,
            "dropMenu": [
                {
                    "id": "liste_ol",
                    "name": "Set numbered list",
                    "className": "outil_liste_ol",
                    "replaceWith": function(h){ return outil_liste(h, '#');},
                    "display": true,
                    "selectionType": "line",
                    "forceMultiline": true
                },
                {
                    "id": "desindenter",
                    "name": "Unindent a line",
                    "className": "outil_desindenter",
                    "replaceWith": function(h){return outil_desindenter(h);},
                    "display": true,
                    "selectionType": "line",
                    "forceMultiline": true
                },
                {
                    "id": "indenter",
                    "name": "Indent a line",
                    "className": "outil_indenter",
                    "replaceWith": function(h){return outil_indenter(h);},
                    "display": true,
                    "selectionType": "line",
                    "forceMultiline": true
                }
            ]
        },
        {
            "name": "Turn into a [hyperlink->http:\/\/...]",
            "key": "L",
            "className": "outil_link separateur separateur_apres sepLink",
            "openWith": "[",
            "closeWith": "->[![Please enter the target of your hyperlink (you may give an internet URL in the form http:\/\/www.mysite.com or else simply the number of an article on this site).]!]]"
        },
        {
            "name": "Turn into a [[Footnote]]",
            "className": "outil_notes separateur_avant",
            "openWith": "[[",
            "closeWith": "]]",
            "selectionType": "word"
        },
        {
            "name": "<quote>Quote a message<\/quote>",
            "key": "Q",
            "className": "outil_quote separateur separateur_apres sepGuillemets",
            "openWith": "\n<quote>",
            "closeWith": "<\/quote>\n",
            "selectionType": "word",
            "dropMenu": [
                {
                    "id": "barre_poesie",
                    "name": "Edit as a <poesie>poetry<\/poesie>",
                    "className": "outil_poesie",
                    "openWith": "\n<poesie>",
                    "closeWith": "<\/poesie>\n",
                    "display": true,
                    "selectionType": "line"
                }
            ]
        },
        {
            "name": "Place between \u00abdouble quotes\u00ab",
            "className": "outil_guillemets",
            "openWith": "«",
            "closeWith": "»",
            "lang": [
                "fr",
                "eo",
                "cpf",
                "ar",
                "es"
            ],
            "selectionType": "word",
            "dropMenu": [
                {
                    "id": "guillemets_simples",
                    "name": "Place between \u201csingle quotes\u201c",
                    "className": "outil_guillemets_simples",
                    "openWith": "“",
                    "closeWith": "”",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf",
                        "ar",
                        "es"
                    ],
                    "selectionType": "word"
                }
            ]
        },
        {
            "name": "Place between \u00abdouble quotes\u00ab",
            "className": "outil_guillemets_de",
            "openWith": "„",
            "closeWith": "“",
            "lang": [
                "bg",
                "de",
                "pl",
                "hr",
                "src"
            ],
            "selectionType": "word",
            "dropMenu": [
                {
                    "id": "guillemets_de_simples",
                    "name": "Place between \u201csingle quotes\u201c",
                    "className": "outil_guillemets_de_simples",
                    "openWith": "&sbquo;",
                    "closeWith": "‘",
                    "display": true,
                    "lang": [
                        "bg",
                        "de",
                        "pl",
                        "hr",
                        "src"
                    ],
                    "selectionType": "word"
                }
            ]
        },
        {
            "name": "Place between \u00abdouble quotes\u00ab",
            "className": "outil_guillemets_simples separateur_avant",
            "openWith": "“",
            "closeWith": "”",
            "lang_not": [
                "fr",
                "eo",
                "cpf",
                "ar",
                "es",
                "bg",
                "de",
                "pl",
                "hr",
                "src"
            ],
            "selectionType": "word",
            "dropMenu": [
                {
                    "id": "guillemets_autres_simples",
                    "name": "Place between \u201csingle quotes\u201c",
                    "className": "outil_guillemets_uniques",
                    "openWith": "‘",
                    "closeWith": "’",
                    "display": true,
                    "lang_not": [
                        "fr",
                        "eo",
                        "cpf",
                        "ar",
                        "es",
                        "bg",
                        "de",
                        "pl",
                        "hr",
                        "src"
                    ],
                    "selectionType": "word"
                }
            ]
        },
        {
            "name": "Insert special characters",
            "className": "outil_caracteres separateur separateur_apres sepCaracteres separateur_avant",
            "dropMenu": [
                {
                    "id": "A_grave",
                    "name": "Insert \u00c0",
                    "className": "outil_a_maj_grave",
                    "replaceWith": "À",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf"
                    ]
                },
                {
                    "id": "E_aigu",
                    "name": "Insert \u00c9",
                    "className": "outil_e_maj_aigu",
                    "replaceWith": "É",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf"
                    ]
                },
                {
                    "id": "E_grave",
                    "name": "Insert \u00c8",
                    "className": "outil_e_maj_grave",
                    "replaceWith": "È",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf"
                    ]
                },
                {
                    "id": "aelig",
                    "name": "Insert \u00e6",
                    "className": "outil_aelig",
                    "replaceWith": "æ",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf"
                    ]
                },
                {
                    "id": "AElig",
                    "name": "Insert \u00c6",
                    "className": "outil_aelig_maj",
                    "replaceWith": "Æ",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf"
                    ]
                },
                {
                    "id": "oe",
                    "name": "Insert \u0153",
                    "className": "outil_oe",
                    "replaceWith": "œ",
                    "display": true,
                    "lang": [
                        "fr"
                    ]
                },
                {
                    "id": "OE",
                    "name": "Insert \u0152",
                    "className": "outil_oe_maj",
                    "replaceWith": "Œ",
                    "display": true,
                    "lang": [
                        "fr"
                    ]
                },
                {
                    "id": "Ccedil",
                    "name": "Insert \u00c7",
                    "className": "outil_ccedil_maj",
                    "replaceWith": "Ç",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf"
                    ]
                },
                {
                    "id": "uppercase",
                    "name": "Convert to upper case",
                    "className": "outil_uppercase",
                    "replaceWith": function(markitup) { return markitup.selection.toUpperCase() },
                    "display": true,
                    "lang": [
                        "fr",
                        "en"
                    ]
                },
                {
                    "id": "lowercase",
                    "name": "Convert to lower case",
                    "className": "outil_lowercase",
                    "replaceWith": function(markitup) { return markitup.selection.toLowerCase() },
                    "display": true,
                    "lang": [
                        "fr",
                        "en"
                    ]
                }
            ]
        },
        {
            "name": "Insert a computer code (`)",
            "className": "outil_code separateur separateur_apres sepCode",
            "openWith": "`",
            "closeWith": "`",
            "dropMenu": [
                {
                    "id": "cadre",
                    "name": "Insert a preformatted code (```)",
                    "className": "outil_cadre",
                    "openWith": "```\n",
                    "closeWith": "\n```",
                    "display": true
                }
            ]
        }
    ]
}

 
				// remplace ou cree -* ou -** ou -# ou -##
				function outil_liste(h, c) {
					if ((s = h.selection) && (r = s.match(/^-([*#]+) (.*)$/)))	 {
						r[1] = r[1].replace(/[#*]/g, c);
						s = '-'+r[1]+' '+r[2];
					} else {
						s = '-' + c + ' '+s;
					}
					return s;
				}

				// indente des -* ou -#
				function outil_indenter(h) {
					if (s = h.selection) {
						if (s.substr(0,2)=='-*') {
							s = '-**' + s.substr(2);
						} else if (s.substr(0,2)=='-#') {
							s = '-##' + s.substr(2);
						} else {
							s = '-* ' + s;
						}
					}
					return s;
				}

				// desindente des -* ou -** ou -# ou -##
				function outil_desindenter(h){
					if (s = h.selection) {
						if (s.substr(0,3)=='-**') {
							s = '-*' + s.substr(3);
						} else if (s.substr(0,3)=='-* ') {
							s = s.substr(3);
						} else if (s.substr(0,3)=='-##') {
							s = '-#' + s.substr(3);
						} else if (s.substr(0,3)=='-# ') {
							s = s.substr(3);
						}
					}
					return s;
				}

				// ajouter un espace avant, apres un {qqc} pour ne pas que
				// gras {{}} suivi de italique {} donnent {{{}}}, mais { {{}} }
				function espace_si_accolade(h, openWith, closeWith){
					if (s = h.selection) {
						// accolade dans la selection
						if (s.charAt(0)=='{') {
							return openWith + ' ' + s + ' ' + closeWith;
						}
						// accolade avant la selection
						else if (c = h.textarea.selectionStart) {
							if (h.textarea.value.charAt(c-1) == '{') {
								return ' ' + openWith + s + closeWith + ' ';
							}
						}
					}
					return openWith + s + closeWith;
				}
				

barre_outils_forum = {
    "nameSpace": "forum",
    "previewAutoRefresh": false,
    "onEnter": {
        "keepDefault": false,
        "selectionType": "return",
        "replaceWith": "\n"
    },
    "onShiftEnter": {
        "keepDefault": false,
        "replaceWith": "\n_ "
    },
    "onCtrlEnter": {
        "keepDefault": false,
        "replaceWith": "\n\n"
    },
    "markupSet": [
        {
            "name": "{{Bold}}",
            "key": "B",
            "className": "outil_bold",
            "replaceWith": function(h){ return espace_si_accolade(h, '{{', '}}');},
            "selectionType": "word"
        },
        {
            "name": "{Italic}",
            "key": "I",
            "className": "outil_italic separateur_avant",
            "replaceWith": function(h){ return espace_si_accolade(h, '{', '}');},
            "selectionType": "word"
        },
        {
            "name": "Turn into a [hyperlink->http:\/\/...]",
            "key": "L",
            "className": "outil_link separateur separateur_apres sepLink separateur_avant",
            "openWith": "[",
            "closeWith": "->[![Please enter the target of your hyperlink (you may give an internet URL in the form http:\/\/www.mysite.com or else simply the number of an article on this site).]!]]"
        },
        {
            "name": "<quote>Quote a message<\/quote>",
            "key": "Q",
            "className": "outil_quote separateur separateur_apres sepGuillemets",
            "openWith": "\n<quote>",
            "closeWith": "<\/quote>\n",
            "selectionType": "word"
        },
        {
            "name": "Place between \u00abdouble quotes\u00ab",
            "className": "outil_guillemets",
            "openWith": "«",
            "closeWith": "»",
            "lang": [
                "fr",
                "eo",
                "cpf",
                "ar",
                "es"
            ],
            "selectionType": "word",
            "dropMenu": [
                {
                    "id": "guillemets_simples",
                    "name": "Place between \u201csingle quotes\u201c",
                    "className": "outil_guillemets_simples",
                    "openWith": "“",
                    "closeWith": "”",
                    "display": true,
                    "lang": [
                        "fr",
                        "eo",
                        "cpf",
                        "ar",
                        "es"
                    ],
                    "selectionType": "word"
                }
            ]
        },
        {
            "name": "Place between \u00abdouble quotes\u00ab",
            "className": "outil_guillemets_de",
            "openWith": "„",
            "closeWith": "“",
            "lang": [
                "bg",
                "de",
                "pl",
                "hr",
                "src"
            ],
            "selectionType": "word",
            "dropMenu": [
                {
                    "id": "guillemets_de_simples",
                    "name": "Place between \u201csingle quotes\u201c",
                    "className": "outil_guillemets_de_simples",
                    "openWith": "&sbquo;",
                    "closeWith": "‘",
                    "display": true,
                    "lang": [
                        "bg",
                        "de",
                        "pl",
                        "hr",
                        "src"
                    ],
                    "selectionType": "word"
                }
            ]
        },
        {
            "name": "Place between \u00abdouble quotes\u00ab",
            "className": "outil_guillemets_simples separateur_avant",
            "openWith": "“",
            "closeWith": "”",
            "lang_not": [
                "fr",
                "eo",
                "cpf",
                "ar",
                "es",
                "bg",
                "de",
                "pl",
                "hr",
                "src"
            ],
            "selectionType": "word",
            "dropMenu": [
                {
                    "id": "guillemets_autres_simples",
                    "name": "Place between \u201csingle quotes\u201c",
                    "className": "outil_guillemets_uniques",
                    "openWith": "‘",
                    "closeWith": "’",
                    "display": true,
                    "lang_not": [
                        "fr",
                        "eo",
                        "cpf",
                        "ar",
                        "es",
                        "bg",
                        "de",
                        "pl",
                        "hr",
                        "src"
                    ],
                    "selectionType": "word"
                }
            ]
        }
    ]
}

 
				// remplace ou cree -* ou -** ou -# ou -##
				function outil_liste(h, c) {
					if ((s = h.selection) && (r = s.match(/^-([*#]+) (.*)$/)))	 {
						r[1] = r[1].replace(/[#*]/g, c);
						s = '-'+r[1]+' '+r[2];
					} else {
						s = '-' + c + ' '+s;
					}
					return s;
				}

				// indente des -* ou -#
				function outil_indenter(h) {
					if (s = h.selection) {
						if (s.substr(0,2)=='-*') {
							s = '-**' + s.substr(2);
						} else if (s.substr(0,2)=='-#') {
							s = '-##' + s.substr(2);
						} else {
							s = '-* ' + s;
						}
					}
					return s;
				}

				// desindente des -* ou -** ou -# ou -##
				function outil_desindenter(h){
					if (s = h.selection) {
						if (s.substr(0,3)=='-**') {
							s = '-*' + s.substr(3);
						} else if (s.substr(0,3)=='-* ') {
							s = s.substr(3);
						} else if (s.substr(0,3)=='-##') {
							s = '-#' + s.substr(3);
						} else if (s.substr(0,3)=='-# ') {
							s = s.substr(3);
						}
					}
					return s;
				}

				// ajouter un espace avant, apres un {qqc} pour ne pas que
				// gras {{}} suivi de italique {} donnent {{{}}}, mais { {{}} }
				function espace_si_accolade(h, openWith, closeWith){
					if (s = h.selection) {
						// accolade dans la selection
						if (s.charAt(0)=='{') {
							return openWith + ' ' + s + ' ' + closeWith;
						}
						// accolade avant la selection
						else if (c = h.textarea.selectionStart) {
							if (h.textarea.value.charAt(c-1) == '{') {
								return ' ' + openWith + s + closeWith + ' ';
							}
						}
					}
					return openWith + s + closeWith;
				}
				

barre_outils_vide = {
    "nameSpace": "vide",
    "previewAutoRefresh": false,
    "markupSet": []
}

 


;(function($){

// 2 fonctions pour appeler le porte plume reutilisables pour d'autres plugins
// on envoie dedans la selection jquery qui doit etre effectuee
// ce qui evite des appels direct a markitup, aucazou on change de lib un jour
$.fn.barre_outils = function(nom, settings) {
	options = {
		lang:'en'
	};
	$.extend(options, settings);

	return $(this)
		.not('.markItUpEditor, .no_barre')
		.markItUp(eval('barre_outils_' + nom), {lang:options.lang})
		.trigger('markItUpEditor.loaded')
		.parent().find('.markItUpButton a').attr('tabindex', -1) // ne pas tabuler les boutons
		.end(); 
};

$.fn.barre_previsualisation = function(settings) {
	options = {
		previewParserPath:"index.php?action=porte_plume_previsu", // ici une url relative pour prive/public
		textEditer:"Modify",
		textVoir:"Preview"
	};
	$.extend(options, settings);

	return $(this)
		.not('.pp_previsualisation, .no_previsualisation')
		.previsu_spip(options)
		.trigger('markItUpPreview.loaded')
		.parent().find('.markItUpTabs a').attr('tabindex', -1) // ne pas tabuler les onglets
		.end();
};

$(window).on('load', function(){
	// ajoute les barres d'outils markitup
	function barrebouilles(){
		// fonction generique appliquee aux classes CSS :
		// inserer_barre_forum, inserer_barre_edition, inserer_previsualisation
		$('.formulaire_spip textarea.inserer_barre_forum').barre_outils('forum');
		$('.formulaire_spip textarea.inserer_barre_edition').barre_outils('edition');
		$('.formulaire_spip textarea.inserer_previsualisation').barre_previsualisation();

		 
		// fonction specifique aux formulaires de SPIP :
		// barre de forum
		$('textarea.textarea_forum').barre_outils('forum');
		 
		$('.formulaire_forum textarea[name=texte]').barre_outils('forum');
		// barre d'edition et onglets de previsualisation
		$('.formulaire_spip textarea[name=texte]')
			.barre_outils('edition').end()
			.barre_previsualisation();
		
	}
	barrebouilles();
	onAjaxLoad(barrebouilles);

});
})(jQuery);
