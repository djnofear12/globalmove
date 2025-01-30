<?php

/*
 * Squelette : squelettes/header.html
 * Date :      Thu, 23 Jan 2025 09:04:33 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/header.html
// Temps de compilation total: 0.302 ms
//

function html_8f30b68e492cbb0658d7d618607e7f83($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html>
<html lang="zxx">



<head>
    <title>Global Move Solutions</title>
    <link rel="icon" href="images/favicon-16x16.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Global Move Solutions" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent header-light scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+250 788 450 961 / +250 788 450 976</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>info@globalmovesolutions.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08:00 am - 5:00 pm</a></div>
                        </div>
                    </div>
                
                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google fa-lg"></i></a>
                        <a href="#"><i class="fa fa-tripadvisor fa-lg"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>  
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'">
                                            <img class="logo-1" src="images/glo1.png" alt="">
                                            <img class="logo-2" src="images/glo1.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'">Home</a></li>
                                   
                                    <li><a class="menu-item" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('2', 'rubrique', '', '', true)))) .
'">About Us</a></li>
                                    <li><a class="menu-item" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('3', 'rubrique', '', '', true)))) .
'">Car Rentals</a></li></li>
                                    <li><a class="menu-item" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('4', 'rubrique', '', '', true)))) .
'">Reviews</a></li>
                                    <li><a class="menu-item" href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('5', 'rubrique', '', '', true)))) .
'">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <!-- <a href="#" class="btn-main">Sign In</a> -->
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
<script>
    document.getElementById(\'menu-btn\').addEventListener(\'click\', () => {
  console.log(\'Menu Button  clicked\');
}
);

// Select the menu button and the menu
const menuBtn = document.getElementById(\'menu-btn\');
const menu = document.querySelector(\'.menu\');

// Add click event to toggle menu visibility
menuBtn.addEventListener(\'click\', () => {
  menu.classList.toggle(\'show\'); // Toggle "show" class
});

</script>');

	return analyse_resultat_skel('html_8f30b68e492cbb0658d7d618607e7f83', $Cache, $page, 'squelettes/header.html');
}
