
     <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar Transparent-->
         <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-center" data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="230" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <h4 class="panel-title veil-md">Pages</h4>
                <!-- RD Navbar Right Side Toggle-->
                <button class="rd-navbar-top-panel-toggle veil-md" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                <div class="rd-navbar-top-panel">
                  <div class="shell">
                    <div class="range range-md-center range-md-middle range-lg-around">
                      <div class="cell-md-3">
                        <div class="unit unit-horizontal unit-top unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone text-middle"></span></div>
                          <div class="unit-body"><a class="reveal-block" href="tel:#">1-800-1234-567,</a><a href="tel:#">1-800-6547-321</a></div>
                        </div>
                      </div>
                      <div class="cell-md-3 offset-top-0">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="reveal-block" href="index.html">
                            <div class="unit unit-xs-middle unit-spacing-xxs">
                              <div class="unit-left"><img width='170' height='172' src="{{asset('labo/front_office/img/1525711039.png')}}" alt=''/>
                              </div>
                              <div class="unit-body text-center">
                                <div class="rd-navbar-brand-title">LRIT</div>
                                <div class="rd-navbar-brand-slogan text-light">Tlemcen</div>
                              </div>
                            </div></a></div>
                      </div>
                      <div class="cell-md-3 offset-top-10 offset-md-top-0">
                        <div class="inset-md-left-50">
                          <div class="unit unit-horizontal unit-top unit-spacing-xs text-left">
                            <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                            <div class="unit-body"><a href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="Home.html"><img width="136" height="138" src="{{asset('labo/front_office/img/dspace-logo-only.png')}}" alt=""></a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                     <li ><a href="/">Accueil</a>
                      </li>
                      <li ><a href="/actualité">Actualité</a>
                      </li>
                      <li><a href="/Acceuil/Presentation">Presentation</a>
                      </li>
                      <li class="rd-navbar--has-dropdown rd-navbar-submenu" class="active"><a>Equipes</a>
                        <ul class="rd-navbar-dropdown" >
                        	<?php

try
{// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=lrit;charset=utf8', 'root', '');
}
catch(Exception $e)
{// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
} // Si tout va bien, on peut continuer
$reponse = $bdd->query('SELECT * FROM equipes'); // On récupère tout le contenu de la table 
while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>

                          <li><a href="/Acceuil/Equipe/<?php echo $donnees['id']; ?>"><?php echo $donnees['achronymes']; ?></a>
                          </li>
                          <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
                          
                        </ul>
                      <span class="rd-navbar-submenu-toggle"></span></li>
                     <li><a href="/Acceuil/login">login</a>
                      </li>
                      <li><a href="/Acceuil/contact">Contacts</a>
                      </li>
                      
                    </ul>
                   <!--RD Navbar Mobile Search-->
                    <div class="rd-navbar-search-wrap" id="rd-navbar-search-wrap">
                      <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                        <div class="form-group">
                          <label class="form-label" for="rd-navbar-mobile-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="icon fa-search rd-navbar-search-button" type="submit"></button>
                      </form>
                    </div>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span class="icon fa-shopping-cart"></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                      <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    </div>
                  </form>
                </div>
                <!--RD Navbar shop-->
               
              </div>
            </div>
          </nav>
        </div>
      </header>

