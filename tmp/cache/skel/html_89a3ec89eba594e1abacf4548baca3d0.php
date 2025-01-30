<?php

/*
 * Squelette : squelettes/footer.html
 * Date :      Wed, 22 Jan 2025 11:52:57 GMT
 * Compile :   Fri, 24 Jan 2025 11:22:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/footer.html
// Temps de compilation total: 0.254 ms
//

function html_89a3ec89eba594e1abacf4548baca3d0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- content close -->

<a href="#" id="back-to-top"></a>
<!-- footer begin -->
<footer class="text-light">
    <div class="container">
        <div class="row g-custom-x">
            <div class="col-lg-3">
                <div class="widget">
                    <h5>About Global Move Solutions</h5>
                    <p>At Global Move Solutions, we deliver quality, reliable, and affordable travel solutions. Our well-maintained vehicles and exceptional service ensure a smooth and enjoyable journey.</p>
                </div>
            </div>
            
            <div class="col-lg-3">
                <h5>Links</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <ul>
                                <li><a href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'">Home</a></li>
                                <li><a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('2', 'rubrique', '', '', true)))) .
'">About Us</a></li>
                                <li><a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('3', 'rubrique', '', '', true)))) .
'">Car Rentals</a></li>
                                <li><a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('4', 'rubrique', '', '', true)))) .
'">Reviews</a></li>
                                <li><a href="' .
retablir_echappements_modeles(vider_url(urlencode_1738(generer_objet_url('5', 'rubrique', '', '', true)))) .
'">Contact Us</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget">
                    <h5>Contact</h5>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg"></i>  KG 229 St , Kigali City.</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>+250 788 450 976 <br> 
                            <i class="id-color fa fa-phone fa-lg"></i>+250 788 450 961</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i> <a href="mailto:info@globalmovesolutions.com" style="font-size: 15px;">info@globalmovesolutions.com</a></span>
                    </address>
                    
                </div>
            </div>



            <div class="col-lg-3">
                <div class="widget">
                    <h5>Social Media</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google fa-lg"></i></a>
                        <a href="#"><i class="fa fa-tripadvisor fa-lg"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            
                                <p>© <span id="year"></span> <a href="' .
retablir_echappements_modeles(spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))) .
'">Global Move Solutions </a>. All rights reserved.</p>
                           
                        </div>
                        <ul class="menu-simple">
                            Crafted By<li><a href="#">The Click Creation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer close -->
</div>

<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>

<script>
    document.addEventListener(\'DOMContentLoaded\', function() {
      const currentYear = new Date().getFullYear();
      document.getElementById(\'year\').textContent = currentYear;
    });
  </script>

</body>


</html>');

	return analyse_resultat_skel('html_89a3ec89eba594e1abacf4548baca3d0', $Cache, $page, 'squelettes/footer.html');
}
