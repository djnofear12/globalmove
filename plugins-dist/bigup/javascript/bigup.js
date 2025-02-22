/**
 * Pour un input de type file sélectionné,
 * gère l'upload du ou des fichiers, via html5 et flow.js
 *
 * Retourne uniquement la liste des input qui viennent
 * d'être activés avec bigup.
 *
 * Ça permet de gérer des callbacks derrière, sans ajouter
 * la callback à chaque rechargement ajax du js.
 *
 *     $('input.bigup')
 *         .bigup()
 *         .on('bigup.fileSuccess', function(...){...});
 *
 * On peut aussi envoyer une fonction de callback directement.
 *
 *     $('input.bigup').bigup({}, {
 *          fileSuccess: function(...){...},
 *     });
 *
 * Où pour quand les uploads sont terminés
 *
 *     $('input.bigup').bigup({}, {
 *          complete: function(){...},
 *     });
 *
 * @param object options
 * @param object callbacks
 * @return jQuery
 */
$.fn.bigup = function (options, callbacks) {
	// les options… on verra si on l'utilisera
	var options = options || {};
	// les callbacks éventuelles directes
	var callbacks = callbacks || {};

	var inputs_a_gerer = $(this)
		.not('.bigup_done')
		.each(function () {
			var $editer = $(this).closest('.editer');
			if ($editer.length) {
				$editer.addClass('biguping');
				var h = $editer.get(0).offsetHeight;
				var s = $editer.attr('style');
				if (typeof s === 'undefined') {
					s = '';
				}
				$editer.attr('data-prev-style', s);
				s += 'height:' + h + 'px;overflow:hidden';
				$editer.attr('style', s);
			}
			// indiquer que l'input est traité. Évite de charger plusieurs fois Flow
			$(this).addClass('bigup_done');

			var $input = $(this);
			var $form = $input.parents('form');

			// Équivalent au filtre sinon
			var sinon = function (valeur, defaut) {
				return valeur ? valeur : defaut;
			};

			// config globale de bigup.
			var conf = $.extend(
				true,
				{
					maxFileSize: 0,
				},
				$.bigup_config || {}
			);

			var bigup = new Bigup(
				{
					form: $form,
					input: $input,
					formulaire_action: $form.find('input[name=formulaire_action]').val(),
					formulaire_action_args: $form.find('input[name=formulaire_action_args]').val(),
					token: $input.data('token'),
				},
				{
					contraintes: {
						accept: $input.prop('accept'),
						maxFiles: $input.prop('multiple') ? sinon($input.data('maxfiles'), 0) : 1,
						maxFileSize: sinon($input.data('maxfilesize'), conf.maxFileSize),
						clientWidth: sinon($input.data('clientwidth'), conf.clientWidth),
						clientHeight: sinon($input.data('clientheight'), conf.clientHeight),
						clientQuality: sinon($input.data('clientquality'), conf.clientQuality),
					},
				},
				callbacks
			);

			if (!bigup.support) {
				return false;
			}

			// Prendre en compte les fichiers déjà présents à l'ouverture du formulaire
			bigup.integrer_fichiers_presents();
			// Gérer le dépot de fichiers
			bigup.gerer_depot_fichiers();
			if ($editer.length) {
				$editer.attr('style', $editer.attr('data-prev-style'));
				$editer.attr('data-prev-style', null);
				$editer.addClass('editer_with_bigup').removeClass('biguping');
			}
		});
	return inputs_a_gerer;
};

/**
 * Bigup gère les fichiers des input concernés (avec Flow.js)
 * et leur communication avec SPIP
 *
 * Nécessite un accès à Trads.
 *
 * @param [params]
 * @param {jquery} [params.form]
 * @param {jquery} [params.input]
 * @param {string} [params.formulaire_action]
 * @param {string} [params.formulaire_action_args]
 * @param {string} [params.token]
 * @param [opts]
 * @param {object} [opts.contraintes]
 * @param {string} [opts.contraintes.accept]
 * @param {int}    [opts.contraintes.maxFiles]
 * @param {int}    [opts.contraintes.maxFileSize]
 * @param {int}    [opts.contraintes.clientWidth]
 * @param {int}    [opts.contraintes.clientHeight]
 * @param {float}  [opts.contraintes.clientQuality]
 * @param {int}    [opts.flow.simultaneousUploads]
 * @param {int[]}  [opts.flow.permanentErrors]
 * @param {int}    [opts.flow.chunkRetryInterval]
 * @param {int}    [opts.flow.maxChunkRetries]
 * @param [callbacks]
 * @param {function} [callbacks.fileSuccess]
 * @constructor
 */
function Bigup(params, opts, callbacks) {
	this.form = params.form;
	this.input = params.input;
	this.formulaire_action = params.formulaire_action;
	this.formulaire_action_args = params.formulaire_action_args;
	this.token = params.token;

	this.target = $.enlever_ancre(this.form.attr('action'));
	this.name = this.input.attr('name');
	this.class_name = $.nom2classe(this.name);
	this.multiple = this.input.prop('multiple');

	this.zones = {
		depot: null,
		depot_etendu: null,
		fichiers: null,
	};

	this.defaults = {
		contraintes: {
			accept: '',
			maxFiles: 1,
			maxFileSize: 0,
			clientQuality: 0.8,
			clientWidth: 0,
			clientHeight: 0,
		},
		options: {
			// previsualisation des images
			previsualisation: {
				activer: !!this.input.data('previsualiser'),
				fileSizeMax: 10, // 10 Mb
			},
		},
		flow: {
			simultaneousUploads: 2, // 3 par défaut
			permanentErrors: [403, 404, 413, 415, 500, 501], // ajout de 403 à la liste par défaut.
			chunkRetryInterval: 1000, // on rééssaye de télécharger le chunk après 1s si erreur
			maxChunkRetries: 5,
		},
		templates: {
			zones: {
				// Zone de dépot des fichiers
				depot: function (name, multiple) {
					var template =
						'\n<div class="dropfile dropfile_' +
						name +
						'" style="display:none;">' +
						'\n\t<button type="button" class="dropfilebutton bigup-btn btn btn-default">' +
						_T('bigup:choisir') +
						'</button>' +
						'\n\t<span class="dropfileor">' +
						_T('bigup:ou') +
						'</span>' +
						'\n\t<span class="dropfiletext">' +
						'\n\t\t' +
						Trads.singulier_ou_pluriel(
							multiple ? 2 : 1,
							'bigup:deposer_votre_fichier_ici',
							'bigup:deposer_vos_fichiers_ici'
						) +
						'\n\t</:span:>' +
						'\n</div>\n';
					return template;
				},
				// Zone de liste des fichiers déposés (conteneur)
				fichiers: function (name) {
					var template = "<div class='bigup_fichiers fichiers_" + name + "'></div>";
					return template;
				},
			},
			// Présentation d'un fichier déposé
			fichier: function (file) {
				// retouver l'extension
				var extension = $.trouver_extension(file.name);

				var template =
					'\n<div class="fichier">' +
					'\n\t<div class="description">' +
					'\n\t\t<div class="vignette_extension ' +
					$.escapeHtml(extension) +
					'" title="' +
					file.type +
					'"><span></span></div>' +
					'\n\t\t<div class="infos">' +
					'\n\t\t\t<span class="name"><strong>' +
					$.escapeHtml(file.name) +
					'</strong></span>' +
					'\n\t\t\t<span class="size">' +
					$.taille_en_octets(file.size) +
					'</span>' +
					'\n\t\t</div>' +
					'\n\t\t<div class="actions">' +
					'\n\t\t\t<button type="button" class="bigup-btn btn btn-default cancel" onClick="$.bigup_enlever_fichier(this);">' +
					_T('bigup:bouton_annuler') +
					'</button>' +
					'\n\t\t</div>' +
					'\n\t</div>' +
					'\n</div>\n';

				return template;
			},
		},
	};

	/**
	 * Current options
	 * @type {Object}
	 */
	this.opts = $.extend(true, this.defaults, opts || {});
	// Un seul fichier aussi si multiple avec max 1 file.
	this.singleFile = !this.multiple || this.opts.contraintes.maxFiles === 1;

	// Ajoute chaque callback transmise
	var me = this;
	$.each(callbacks || {}, function (nom, callback) {
		me.input.on('bigup.' + nom, callback);
	});

	// La librairie d'upload
	this.flow = new Flow({
		input: this.input,
		target: this.target,
		testChunks: true,
		maxFiles: this.opts.contraintes.maxFiles,
		singleFile: this.singleFile,
		simultaneousUploads: this.opts.flow.simultaneousUploads,
		permanentErrors: this.opts.flow.permanentErrors,
		chunkRetryInterval: this.opts.flow.chunkRetryInterval,
		maxChunkRetries: this.opts.flow.maxChunkRetries,
		onDropStopPropagation: true, // ne pas bubler quand la drop zone est multiple
		query: {
			action: 'bigup',
			bigup_token: this.token,
			formulaire_action: this.formulaire_action,
			formulaire_action_args: this.formulaire_action_args,
		},
	});

	// sait on gérer (upload html5 requis) ?
	this.support = this.flow.support;

	// Bigup accessible depuis l'input
	this.input.data('bigup', this);

	/**
	 * On drop extended event
	 *
	 * On ne bloque pas la cascade des événements si on ne dépose pas de fichiers
	 * @function
	 * @param {MouseEvent} event
	 */
	this.onDropExtended = function (event) {
		if (me.eventHasFiles(event)) {
			me.flow.onDrop(event);
			/* Parfois on arrive à droper sur un bigup alors qu’une zone étendue d’un autre bigup est ouverte */
			$('.bigup-extended-drop-zone.drag-over').trigger('dragleave');
		}
	};
}

Bigup.prototype = {
	/**
	 * Redéfinir des options
	 * @param object options Options à modifier
	 */
	setOptions: function (options) {
		options = options || {};
		this.opts.options = $.extend(true, this.opts.options, options);
	},

	/**
	 * Intégrer les fichiers déjà listés dans la zone des fichiers, au chargement du formulaire
	 *
	 * Remplacer les boutons "Enlever" d'origine sur les fichiers déjà présents
	 * dans le formulaire (listés au dessus du champ).
	 * On remplace par un équivalent qui fera la chose en pur JS + ajax
	 *
	 * Affecter l'objet bigup sur chaque emplacement de fichier pour facilités.
	 */
	integrer_fichiers_presents: function () {
		// Définir la zone de listing des fichiers
		this.creer_zone_fichiers();
		var me = this;

		// Trouver les fichiers s'il y en a
		this.zones.fichiers.find('.fichier').each(function () {
			var $button = $(this).find('button[name=bigup_enlever_fichier]');
			var identifiant = $button.val();
			$button.remove();
			$(this).data('bigup', me).data('identifiant', identifiant);
			me.ajouter_bouton_enlever(this);
		});

		this.input.trigger('bigup.ready', [me]);
	},

	/**
	 * Ajoute un "Enlever" sur un fichier
	 *
	 * @param string fichien DOM de l'emplacement de présentation du fichier
	 */
	ajouter_bouton_enlever: function (fichier) {
		var js = '$.bigup_enlever_fichier(this);';
		var inserer =
			'<button type="button" class="bigup-btn btn btn-default" onClick="' + js + '">' + _T('bigup:bouton_enlever') + '</button>';
		$(fichier).find('.actions').append(inserer);
		return this;
	},

	/**
	 * Gérer le dépot des fihiers
	 */
	gerer_depot_fichiers: function () {
		this.definir_zone_depot();
		var me = this;

		// Présenter le fichier dans liste des fichiers en cours
		// Valider le fichier déposé en fonction du 'accept' de l'input (si présent).
		this.flow.on('fileAdded', function (file, event) {
			me.ajouter_fichier(file);
			me.input.trigger('bigup.fileAdded', [file]);
			me.adapter_visibilite_zone_depot();
			if (!me.accepter_fichier(file)) {
				me.presenter_erreur(file.emplacement, file.erreur);
				return false;
			}
		});

		// Téléverser aussitôt les fichiers valides déposés
		this.flow.on('filesSubmitted', function (files) {
			const isFileCompress =
				me.defaults.contraintes.clientWidth > 0 || me.defaults.contraintes.clientHeight > 0 ? true : false;
			const Timage = ['image/jpeg', 'image/png', 'image/webp'];

			if (files.length) {
				$.each(files, function (key, file) {
					me.progress.ajouter(file.emplacement);
					me.input.trigger('bigup.fileSubmitted', [file]);
					if (isFileCompress && Timage.includes(file.file.type)) {
						const size = file.file.size;
						compress(
							file,
							me.defaults.contraintes.clientWidth,
							me.defaults.contraintes.clientHeight,
							me.defaults.contraintes.clientQuality
						).then((is_compressed) => {
							if (is_compressed) {
								console.debug('Image d’origine retaillée', {
									name: file.name,
									old_size: size,
									new_size: file.file.size,
								});
							}
							me.flow.upload();
						});
					} else {
						me.flow.upload();
					}
				});
			}
		});

		// Actualiser la barre de progression de l'upload
		this.flow.on('fileProgress', function (file, chunk) {
			var percent = Math.round((file._prevUploadedSize / file.size) * 100);
			var progress = file.emplacement.find('progress');
			progress.text(percent + ' %');
			me.progress.animer(progress, percent);
		});

		// Réussite de l'opload :
		// Adapter le bouton 'Annuler' => 'Enlever'
		// Retirer la barre de progression
		this.flow.on('fileSuccess', function (file, message, chunk) {
			var desc = '';
			try {
				desc = JSON.parse(message);
				// enlever le bouton annuler
				file.emplacement.find('.cancel').fadeOut('normal', function () {
					$(this).remove();
					// et mettre un bouton enlever !
					if (desc.bigup.identifiant) {
						file.emplacement.data('identifiant', desc.bigup.identifiant);
						me.ajouter_bouton_enlever(file.emplacement);
					}
				});
				me.progress.retirer(file.emplacement.find('progress'));
				me.input.trigger('bigup.fileSuccess', [file, desc]);
			} catch (e) {
				desc = _T('bigup:erreur_de_transfert') + ' : ' + e;
				me.progress.retirer(file.emplacement.find('progress'));
				me.presenter_erreur(file.emplacement, desc);
				// file.retry();
			}
		});

		// Un fichier a été enlevé, soit par nous, soit par Flow
		// lorsqu'on a ajouté un fichier supplémentaire alors que la saisie
		// attend un fichier unique.
		this.flow.on('fileRemoved', function (file) {
			// si ce n'est pas nous qui avons supprimé ce fichier
			if (!file.bigup_deleted) {
				me.enlever_fichier(file.emplacement);
			}
		});

		// Rajoute l'Events complete()
		// qui se déclenche quand tous les upload sont terminés
		this.flow.on('complete', function () {
			//console.log("uploads Completed");
			me.input.trigger('bigup.complete');
		});

		// Erreur, pas de bol !
		// Afficher l'erreur
		// Retirer la barre de progression
		this.flow.on('fileError', function (file, message, chunk) {
			var message_erreur = _T('bigup:erreur_de_transfert');
			if (message) {
				try {
					data = JSON.parse(message);
					if (typeof data.error !== 'undefined') {
						message_erreur = data.error;
					}
				} catch (e) {
					let title = message.match(/<title>(.*)<\/title>/) || message.match(/<h1>(.*)<\/h1>/);
					if (title && title[1]) {
						message_erreur += '<br>Got HTML titled "' + title[1] + '" instead of JSON';
					} else {
						message_erreur += '<br>' + e;
					}
				}
			}
			me.progress.retirer(file.emplacement.find('progress'));
			me.presenter_erreur(file.emplacement, message_erreur);
		});
	},

	/**
	 * créer la zone de dépot et l'indiquer à Flow.js
	 */
	definir_zone_depot: function () {
		// Cacher l'input original
		this.input.hide();
		this.creer_zone_depot();

		// Voir la zone, si on n'a pas déjà atteint le quota de fichiers
		this.adapter_visibilite_zone_depot();

		// Assigner la zone et son bouton à flow.
		this.flow.assignBrowse(this.zones.depot.find('.dropfilebutton'), false, !this.multiple, {
			accept: this.opts.contraintes.accept,
		});
		this.assignDropExtended(this.zones.depot_etendu);
	},

	/**
	 * Créer la zone de dépot des fichiers
	 */
	creer_zone_depot: function () {
		$.bigup_verifier_depots_etendus();

		// Trouver une zone où déposer les fichiers dans le HTML existant
		var $zone_depot = this.form.find('.dropfile_' + this.class_name);

		// S'il n'y en a pas, créer le template par défaut et l'ajouter
		if (!$zone_depot.length) {
			var template = this.opts.templates.zones.depot(this.class_name, !this.singleFile);
			this.input.after(template);
			$zone_depot = this.form.find('.dropfile_' + this.class_name);
		}

		// gerer une eventuelle zone etendue
		var $depot_etendu = $zone_depot;
		var depot_etendu = this.input.data('drop-zone-extended');
		if (typeof depot_etendu !== 'undefined') {
			$depot_etendu = jQuery(depot_etendu)
				.not('.bigup-extended-drop-zone')
				.addClass('bigup-extended-drop-zone')
				.data('bigup', this)
				.add($zone_depot);
		}

		var me = this;
		$depot_etendu.on('dragenter dragover', function (event) {
			if (me.eventHasFiles(event.originalEvent)) {
				$(this).addClass('drag-over');
				$zone_depot.addClass('drag-target');
			}
		});
		$depot_etendu.on('dragleave', function () {
			$(this).removeClass('drag-over');
			$zone_depot.removeClass('drag-target');
		});
		$depot_etendu.on('drop', function () {
			// drop ne buble pas, on enleve donc tout d'un coup
			$depot_etendu.removeClass('drag-target').removeClass('drag-over');
		});

		this.zones.depot = $zone_depot;
		this.zones.depot_etendu = $depot_etendu;
	},

	/**
	 * Créer la zone de listing des fichiers téléversés ou en cours de téléversement
	 */
	creer_zone_fichiers: function () {
		// Trouver une zone où afficher les fichiers dans le HTML existant
		var $fichiers = this.form.find('.fichiers_' + this.class_name);

		// S'il n'y en a pas, créer le template par défaut et l'ajouter
		if (!$fichiers.length) {
			var template = this.opts.templates.zones.fichiers(this.class_name);
			this.input.before(template);
			$fichiers = this.form.find('.fichiers_' + this.class_name);
		}

		this.zones.fichiers = $fichiers;
	},

	/**
	 * Affiche ou cache la zone de dépot en fonction du nombre de fichiers déjà actifs
	 */
	adapter_visibilite_zone_depot: function () {
		var nb = this.zones.fichiers.find('.fichier').length;
		if (!this.opts.contraintes.maxFiles || this.opts.contraintes.maxFiles > nb) {
			this.zones.depot.show();
		} else {
			this.zones.depot.hide();
		}
	},

	/**
	 * Tester que le fichier est valide par rapport à l'attribut `accept` de l'input.
	 * @param FlowFile file
	 * @return true si OK.
	 */
	accepter_fichier: function (file) {
		if (this.opts.contraintes.maxFileSize) {
			var taille = this.opts.contraintes.maxFileSize * 1024 * 1024;
			if (file.size > taille) {
				file.erreur = _T('bigup:erreur_taille_max', {taille: $.taille_en_octets(taille)});
				return false;
			}
		}
		if (this.opts.contraintes.accept) {
			var accept = this.opts.contraintes.accept;
			if (accept && !this.valider_fichier(file.file, accept)) {
				file.erreur = _T('bigup:erreur_type_fichier');
				return false;
			}
		}
		return true;
	},

	/**
	 * Vérifier un fichier par rapport à un attribut 'accept'
	 * Code issu de Dropzone.
	 *
	 * @param html5.file file
	 * @param html5.accept acceptedFiles
	 * @return bool
	 */
	valider_fichier: function (file, acceptedFiles) {
		var baseMimeType, mimeType, validType, _i, _len;
		if (!acceptedFiles) {
			return true;
		}
		acceptedFiles = acceptedFiles.split(',');
		mimeType = file.type;
		baseMimeType = mimeType.replace(/\/.*$/, '');
		for (_i = 0, _len = acceptedFiles.length; _i < _len; _i++) {
			validType = acceptedFiles[_i];
			validType = validType.trim();
			if (validType.charAt(0) === '.') {
				if (
					file.name.toLowerCase().indexOf(validType.toLowerCase(), file.name.length - validType.length) !== -1
				) {
					return true;
				}
			} else if (/\/\*$/.test(validType)) {
				if (baseMimeType === validType.replace(/\/.*$/, '')) {
					return true;
				}
			} else {
				if (mimeType === validType) {
					return true;
				}
			}
		}
		return false;
	},

	/**
	 * Ajoute le fichier transmis dans la liste des fichiers
	 *
	 * @param FlowFile file
	 */
	ajouter_fichier: function (file) {
		// pouvoir nous retrouver facilement
		file.bigup = this;

		// zone de listing des fichiers
		this.creer_zone_fichiers();

		// Ajouter le fichier à la zone
		var template = this.opts.templates.fichier(file.file);
		this.zones.fichiers.append(template);

		// Conserver en mémoire l'objet sur la vue du fichier, et inversement.
		var fichier = this.zones.fichiers.find('.fichier:last-child');
		file.emplacement = fichier;

		// Calculer la preview
		this.presenter_previsualisation(file);

		fichier.animateAppend().data('file', file).data('bigup', this);

		return true;
	},

	/**
	 * Enlève le fichier transmis dans la liste des fichiers
	 *
	 * @param jquery emplacement
	 *     Emplacement du fichier dans la liste des fichiers
	 */
	enlever_fichier: function (emplacement) {
		var me = this;
		emplacement.addClass('annuler');

		// Identifiant du fichier
		// Soit celui de flow.js, soit celui du serveur
		// pour les fichiers présents à l'ouverture du formulaire
		var identifiant = emplacement.data('identifiant');
		// si on a un data 'file', le désintégrer…
		if ((file = emplacement.data('file'))) {
			file.abort();
			file.bigup_deleted = true;
			file.cancel();
			if (!identifiant) {
				identifiant = file.uniqueIdentifier;
			}
		}

		this.post({
			bigup_action: 'effacer',
			identifiant: identifiant,
		})
			.done(function () {
				emplacement.animateRemove(function () {
					$(this).remove();
					me.adapter_visibilite_zone_depot();
					me.input.trigger('bigup.fileRemoved', [file]);
				});
			})
			.fail(function () {
				emplacement.removeClass('annuler');
				me.presenter_erreur(emplacement, _T('bigup:erreur_probleme_survenu'));
			});
	},

	/**
	 * Poster une requête ajax, en transmettant des paramètres par défaut
	 * tel que le nom du formulaire, les actions, le token…
	 *
	 * @example
	 *     bigup.post({ action:bigup_document }).done(function(){ ... });
	 * @param object data
	 * @return jqXHR
	 */
	post: function (data) {
		data = $.extend(
			{
				action: 'bigup',
				formulaire_action: this.formulaire_action,
				formulaire_action_args: this.formulaire_action_args,
				bigup_token: this.token,
			},
			data
		);
		return $.post(this.target, data);
	},

	/**
	 * Poste un FormData sur le formulaire bigup.
	 *
	 * @param FormData data
	 * @param {*} options
	 * @return jqXHR
	 */
	send: function (data, options) {
		const ajaxOptions = Object.assign(
			{
				type: 'POST',
				url: this.target,
				data: data,
				processData: false,
				contentType: false,
				cache: false,
			},
			options || {}
		);
		return $.ajax(ajaxOptions);
	},

	/**
	 * Afficher une erreur sur un fichier
	 * @param string emplacement
	 *     Emplacement du fichier dans la liste des fichiers
	 * @param string message
	 *     Message d'erreur
	 */
	presenter_erreur: function (emplacement, message) {
		emplacement
			.addClass('erreur')
			.find('.infos')
			.append("<span class='message_erreur'>" + message + '</span>');
		return this;
	},

	/**
	 * Afficher un message gentil sur un fichier
	 * @param string emplacement
	 *     Emplacement du fichier dans la liste des fichiers
	 * @param string message
	 *     Message
	 */
	presenter_succes: function (emplacement, message) {
		emplacement
			.addClass('succes')
			.find('.infos')
			.append("<span class='message_ok'>" + message + '</span>');
		return this;
	},

	/**
	 * Présenter une vignette de l'image qui vient d'être déposée,
	 * à la place du logo de la vignette.
	 *
	 * @param FileObj file
	 */
	presenter_previsualisation: function (file) {
		if (!this.opts.options.previsualisation.activer) {
			return false;
		}
		if (this.opts.options.previsualisation.fileSizeMax) {
			var taille = this.opts.options.previsualisation.fileSizeMax * 1024 * 1024;
			if (file.file.size > taille) {
				return false;
			}
		}
		this.readURL(file.file, function () {
			// source base64 de l'image dans this.result
			if (this.result) {
				var title =
					file.emplacement.find('.infos .name').text() +
					' (' +
					file.emplacement.find('.infos .size').text() +
					')';

				file.emplacement
					.find('.vignette_extension')
					.removeClass('vignette_extension')
					.addClass('previsualisation')
					.attr('title', title)
					.find('> span')
					.css('background-image', 'url(' + this.result + ')');
			}
		});
	},

	/**
	 * Calculer une URL (base64) à partir d'un fichier
	 * d'image déposé.
	 *
	 * @link http://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded
	 * @link https://developer.mozilla.org/en-US/docs/Web/API/FileReader/readAsDataURL
	 *
	 * @param File file
	 * @param function callback
	 *      Sera appelé dès que le fichier aura été lu
	 *      this.result contiendra l'image en base64
	 * @return bool true si fichier d'image correct, false sinon
	 */
	readURL: function (file, callback) {
		if (file) {
			var reader = new FileReader();
			// trop simple ?
			// var imageType = /^image.*/i;
			// exemple de mozilla raccourci (image/ en tête de regexp plutôt que dans chaque élément)
			var imageType =
				/^image\/(?:bmp|cis\-cod|gif|ief|jpeg|jpeg|jpeg|pipeg|png|svg\+xml|tiff|webp|x\-cmu\-raster|x\-cmx|x\-icon|x\-portable\-anymap|x\-portable\-bitmap|x\-portable\-graymap|x\-portable\-pixmap|x\-rgb|x\-xbitmap|x\-xpixmap|x\-xwindowdump)$/i;

			if (!file.type.match(imageType)) {
				return false;
			}

			if (typeof callback == 'function') {
				reader.addEventListener('load', callback);
			}

			reader.readAsDataURL(file);
			return true;
		}
		return false;
	},

	progress: {
		/**
		 * Ajoute une balise progress dans le contenu, en douceur
		 * 	@param string emplacement
		 *     Emplacement du fichier dans la liste des fichiers
		 */
		ajouter: function (emplacement) {
			var progress = $('<progress value="0" max="100" style="display:none">0 %</progress>');
			emplacement.append(progress);
			progress.fadeIn(1000); /* marche pas terrible */
			return this;
		},

		/**
		 * Augmente une balise progress à la valeur indiquée. Mais doucement
		 * @param jquery progress Le progress concerné.
		 * @param int val Valeur que l'on veut attribuer au progress.
		 */
		animer: function (progress, val) {
			progress.each(function () {
				var me = this;
				$({percent: me.value}).animate(
					{percent: val},
					{
						duration: 200,
						step: function () {
							me.value = this.percent;
						},
					}
				);
			});
			return this;
		},

		/**
		 * Retire une balise progress du html, en douceur
		 * @param jquery progress Le progress concerné.
		 */
		retirer: function (progress) {
			// meme durée que sur animer_progress() pour attendre la fin
			progress.delay(200).fadeOut('normal', function () {
				$(this).slideUp('normal', function () {
					$(this).remove();
				});
			});
			return this;
		},
	},

	/**
	 * Récupère les champs que le formulaire poste habituellement
	 *
	 * Peut être utile pour faire un hit ajax, sans modifier le formulaire.
	 * Code en partie repris de dropzone.js
	 *
	 * On ne récupère pas les type file, ni sumbit.
	 *
	 * @note
	 *      Dans certains cas (en présence de `name` avec des champs mulitples comme `name="items[]"`),
	 *      cette fonction ne retourne pas l’ensemble des valeurs attendues…
	 * @deprecated Use buildFormData() instead
	 * @return object Couples [nom du champ => valeur]
	 */
	getFormData: function () {
		console.info(
			'Method `bigup.getFormData` is deprecated and will be removed in future version of Bigup.',
			'Please use `bigup.buildFormData` instead and adapt your code (see #4861)'
		);
		var inputName, inputType;
		var data = {};

		this.form.find('input, textarea, select, button').each(function () {
			inputName = $(this).attr('name');
			inputType = $(this).attr('type');
			if (inputName) {
				if (this.tagName === 'SELECT' && this.hasAttribute('multiple')) {
					$.each(this.options, function (key, option) {
						if (option.selected) {
							data[inputName] = option.value;
						}
					});
				} else if (
					!inputType ||
					$.inArray(inputType, ['file', 'checkbox', 'radio', 'submit']) == -1 ||
					this.checked
				) {
					data[inputName] = this.value;
				}
			}
		});
		return data;
	},

	/**
	 * Récupère les champs que le formulaire poste habituellement
	 *
	 * Peut être utile pour faire un hit ajax, sans modifier le formulaire.
	 * Code en partie repris de dropzone.js
	 *
	 * On ne récupère pas les type file, ni sumbit.
	 *
	 * @return FormData object
	 */
	buildFormData: function () {
		const formData = new FormData();
		const form = this.form[0];

		for (let input of form.querySelectorAll('input, textarea, select, button')) {
			let inputName = input.getAttribute('name');
			let inputType = input.getAttribute('type');
			if (inputType) inputType = inputType.toLowerCase();

			// If the input doesn't have a name, we can't use it.
			if (typeof inputName === 'undefined' || inputName === null) continue;

			if (input.tagName === 'SELECT' && input.hasAttribute('multiple')) {
				// Possibly multiple values
				for (let option of input.options) {
					if (option.selected) {
						formData.append(inputName, option.value);
					}
				}
			} else if (
				!inputType ||
				(inputType !== 'checkbox' && inputType !== 'radio' && inputType !== 'file' && inputType !== 'submit') ||
				input.checked
			) {
				formData.append(inputName, input.value);
			}
		}

		return formData;
	},

	/**
	 * Assign one or more DOM nodes as a drop extended target.
	 * @function
	 * @param {Element|Array.<Element>} domNodes
	 */
	assignDropExtended: function (domNodes) {
		if (typeof domNodes.length === 'undefined') {
			domNodes = [domNodes];
		}
		Flow.each(
			domNodes,
			function (domNode) {
				domNode.addEventListener('dragover', this.flow.preventEvent, false);
				domNode.addEventListener('dragenter', this.flow.preventEvent, false);
				domNode.addEventListener('drop', this.onDropExtended, false);
			},
			this
		);
	},

	/**
	 * Un-assign drop extended event from DOM nodes
	 * @function
	 * @param domNodes
	 */
	unAssignDrop: function (domNodes) {
		if (typeof domNodes.length === 'undefined') {
			domNodes = [domNodes];
		}
		Flow.each(
			domNodes,
			function (domNode) {
				domNode.removeEventListener('dragover', this.flow.preventEvent);
				domNode.removeEventListener('dragenter', this.flow.preventEvent);
				domNode.removeEventListener('drop', this.onDropExtended);
			},
			this
		);
	},

	removeExtendedDropZone: function () {
		$depot_etendu = this.zones.depot_etendu;
		this.unAssignDrop($depot_etendu);
		$depot_etendu
			.removeClass('bigup-extended-drop-zone')
			.off('dragenter dragover')
			.off('dragleave drop')
			.removeData('bigup');
	},

	/**
	 * A drag event contain files ?
	 * @param MouseEvent event
	 * @return bool
	 */
	eventHasFiles: function (event) {
		if (event.dataTransfer.types) {
			for (var i = 0; i < event.dataTransfer.types.length; i++) {
				if (event.dataTransfer.types[i] === 'Files') {
					return true;
				}
			}
		}
		return false;
	},
};

/**
 * Enlever un fichier déjà téléversé ou annuler un transfert en cours
 *
 * La différence tient dans la présence de l'identifiant du fichier.
 * C'est l'identifiant sur le serveur si le fichier est complet là bas.
 *
 * @param object me
 *   L'élément qui a cliqué
 */
$.bigup_enlever_fichier = function (me) {
	var emplacement = $(me).parents('.fichier');
	var bigup = emplacement.data('bigup');
	$(me).addClass('btn-disabled');
	bigup.enlever_fichier(emplacement);
};

$.bigup_verifier_depots_etendus = function () {
	// desactiver toutes les data-drop-zone-extended qui ne sont plus liees a un input present dans le html
	jQuery('.bigup-extended-drop-zone').each(function () {
		var bigup = jQuery(this).data('bigup');
		if (!bigup) {
			$(this).removeClass('bigup-extended-drop-zone');
		} else if (!document.body.contains(bigup.zones.depot.get(0))) {
			bigup.removeExtendedDropZone();
		}
	});
};

/**
 * Fonction asynchrone maison en attendant flow v3 qui apporte l'async
 *
 * Compresse l’image, si c’est intéressant :
 *
 * - La taille est plus grande que ce qu’on souhaite
 * - Le poids après retaillage est plus petit que l’image d’origine
 *
 * @return bool
 *     True si l’image a été modifiée, false sinon
 */
async function compress(file, maxWidth = 0, maxHeight = 0, quality = 85) {
	const opts = {};
	if (maxWidth === 0 && maxHeight === 0) {
		return false;
	}
	opts.canvas = true;
	if (maxWidth > 0) {
		opts.maxWidth = maxWidth;
	}
	if (maxHeight > 0) {
		opts.maxHeight = maxHeight;
	}
	opts.meta = true;
	const data = await loadImage(file.file, opts);
	// si les dimentions de l’image sont déjà inférieures à ce qu’on désire, on ne touche pas.
	if (
		(maxHeight === 0 || data.originalHeight <= maxHeight)
		&& (maxWidth === 0 || data.originalWidth <= maxWidth)
	) {
		return false;
	}

	if (quality > 1) {
		quality = quality / 100;
	}

	const blob = await new Promise(resolve => data.image.toBlob(
		blob => {
			if (data.imageHead) {
				loadImage.replaceHead(blob, data.imageHead, function (newBlob) {
					return resolve(newBlob);
				})
			} else {
				return resolve(blob);
			}
		},
		file.file.type,
		quality
	));

	// si la taille après compression est suprérieure à l’image d’origine, on ne prend pas non plus
	if (blob.size >= file.file.size) {
		return false;
	}

	file.file = blob;
	file.size = file.file.size;
	file.bootstrap();

	return true;
}

