function init_gadgets(url_menu_rubrique){
	jQuery('#boutonbandeautoutsite').one('mouseover',function(){
		jQuery(this).siblings('ul').find('li:first>a').animeajax();
		jQuery.ajax({
			url: url_menu_rubrique,
			success: function(c){
				jQuery('#boutonbandeautoutsite').siblings('ul').remove();
				jQuery('#boutonbandeautoutsite')
				  .after(c)
					.parent().find('li').menuFocus();
			}
		});
	});
}
function focus_zone(selecteur){
	jQuery(selecteur).eq(0).find('a,input:visible').get(0).focus();
	return false;
}
jQuery(function(){
	init_gadgets(url_menu_rubrique);
	var is_open = 0;
	jQuery.fn.menuItemOpen = function(){
		jQuery(this)
			.addClass('actif')
			.parents('li').addClass('actif');
		jQuery(this).siblings('li').removeClass('actif_tempo');
		is_open = true;
		return this;
	}
	jQuery.fn.menuItemClose = function(){
		jQuery(this)
			.removeClass('actif_tempo');
		is_open = (jQuery(this).parents('ul').eq(-1).find('li.actif').length>0);
		return this;
	}
	// deplier le menu au focus clavier,
	// enlever ce depliement si passage a la souris,
	// delai de fermeture.
	jQuery.fn.menuFocus = function(){
		jQuery(this)
		// le replier si un hover de souris sur un autre onglet,
		// timer sur la fermeture des onglets pour ne pas que ca aille trop vite
		// timer sur l'ouverture des onglets pour ne tolerer les derapages
		.on('mouseenter',
			function(){
				if (this.timerout)
					clearTimeout(this.timerout);
				this.timerout = null;
				this.timerin = null;
				if (is_open)
					jQuery(this).menuItemOpen();
				else {
					var me = jQuery(this);
					this.timerin= setTimeout(function(){
						me.menuItemOpen(null);
					}, 200);
				}
			})
		.on('mouseleave',
			function(){
				if (this.timerin)
						clearTimeout(this.timerin);
				this.timerin = null;
				if (is_open){
					var me = jQuery(this).removeClass('actif').addClass('actif_tempo');
					this.timerout = setTimeout(function(){
						me.menuItemClose();
					}, 400);
				}
			}
		)
		// navigation au doigt des items déroulants
		.has('ul').find(' > a')
			.on('touchend', function(event) {
				event.preventDefault();
				var me = jQuery(this).parent();
				if (me.hasClass('actif')) {
					me.trigger('mouseleave').find('> a').trigger('blur');
				} else {
					me.siblings('.actif').trigger('mouseleave').find('> a').trigger('blur');
					me.trigger('mouseenter').find('> a').trigger('focus');
				}
			})
		.end().end()
		.find('> a, li > a')
			// navigation au clavier :
			// deplier le ul enfant
			.on('focus, mouseenter', function(){
				jQuery(this).parents('li').siblings('.actif').removeClass('actif');
				jQuery(this).parents('li').addClass('actif');
			})
			// cacher en partant de l'onglet...
			.on('blur, mouseleave', function(){
				jQuery(this).parents('li').removeClass('actif');
			});
		return this;
	}

	// Controler la position verticale des sous-menus
	// pour l'instant, effectuer a chaque hover, en cas de changement de taille d'affichage par exemple
	jQuery('#bando_navigation').on('hover touchstart', function(){
		hauteur = parseInt(jQuery('#bando_navigation .largeur').height())
			+  parseInt(jQuery('#bando_navigation').css("padding-top"))
			+  parseInt(jQuery('#bando_navigation').css("padding-bottom"));
		jQuery('#bando_navigation ul li>ul').css({'top':hauteur});
	});

	jQuery('#bando_haut .deroulant > li').menuFocus();

	jQuery('#bandeau_haut #formRecherche input').on('hover touchstart', function(){
		jQuery('#bandeau_haut ul.actif').trigger('mouseout');
	});
	jQuery('#bando_liens_rapides a')
		.on('focus', function(){
			jQuery('#bando_liens_rapides').addClass('actif');
		})
		.on('blur', function(){
			jQuery('#bando_liens_rapides').removeClass('actif');
		});
	if (typeof window.test_accepte_ajax != "undefined") {
		test_accepte_ajax();
	}
});
