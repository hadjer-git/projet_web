@extends('layouts.FrontOffice')

@section('content')
@extends('layouts.Menu')

@section('content')
<!DOCTYPE html>
<!-- saved from url=(0075)https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html -->
<html class="wide wow-animation scrollTo desktop landscape rd-navbar-static-linked" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Site Title-->
    <title>Detail Organisme</title>
    
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://livedemo00.template-help.com/wt_prod-14585/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" media="screen" href="http://genie-industriel.grenoble-inp.fr/jsp/styles/screen.css" />
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="./Team Member Profile_files/css">
    <link rel="stylesheet" href="./Team Member Profile_files/style.css">
	<link rel="stylesheet" type="text/css" media="screen" href="http://genie-industriel.grenoble-inp.fr/jsp/styles/IcoMoon.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://genie-industriel.grenoble-inp.fr/jsp/styles/extension-galerie.css" />


<link rel="stylesheet" type="text/css" media="screen" href="http://genie-industriel.grenoble-inp.fr/wro/styles/eafdc67b1b257e31411309d43b16d24e50d8ad8e.css"/>
<link rel="stylesheet" type="text/css" media="screen" href="http://genie-industriel.grenoble-inp.fr/wro/jQueryCSS/79fcd9d4160d2731c8d7303b842230608d5a3387.css"/>

		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
		<style type="text/css" media="screen">

	#bandeau_page div.image div.corps,
	#bandeau_page div.pagination ul li.cycle-pager-active,
	#bandeau_page div.pagination ul li.cycle-pager-active a {
		background: rgba(0, 134, 176, 0.85) !important;
		color: #ffffff !important;
	}

    #bandeau_page.static div.resume div.titre {
       background: none !important;
    }
    #bandeau_page div.resume div.titre {
        background: rgba(0, 134, 176, 0.85) !important;
    }
	
	@media screen and (min-width: 1056px) {
		[id^="sans_nav"] #bandeau_page.static div.resume div.titre {
			background: none !important;
		}
	}
	
	@media screen and (max-width: 1055px) {
		
		#navigation .choix,
		#navigation .choix + ul {
			background: rgba(0, 134, 176, 0.9) !important;
		}
	}
	
	#bandeau_page div.pagination ul li a {
		color: white !important;
	}
	
	#bandeau_page div.fond a {
		color: white !important;
	}
	
@media screen and (min-width: 640px) {
	#bandeau_page div.fond a {
		color: black !important;
	}
}


	#menu_principal ul > li a {
		color: #414042 !important;
	}
	
@media screen and (min-width: 1056px) {
	#menu_secondaire li a {
		color: #414042 !important;
	}
}
	
	#menu_principal > li > a:hover,
    #menu_principal > li > a:focus,
    #menu_principal > li:hover > a,
    #menu_principal > li:focus-within > a,
    #menu_principal > li.courant > a,
    #menu_principal ul > li.courant > a,
    #menu_principal ul > li > a:hover,
    #menu_principal ul > li > a:focus,
    #menu_principal li > a.unfold {
		color: #0086b0 !important;
	}


@media screen and (min-width: 1056px) {
	#menu_secondaire > li > a:hover,
    #menu_secondaire > li > a:focus,
	#menu_secondaire > li.courant a {
    border-bottom-color: #0086b0 !important;
    color: #0086b0 !important;
    }
    #menu_secondaire ul {
    border-color: #0086b0 !important;
    }

}
	
	#navigation >  li.courant {
		border-color: #0086b0 !important;
	}
	
	#navigation li.courant li::before {
		border-left-color: #0086b0 !important;
	}
	
	#navigation li.courant::before {
		border-top-color: #0086b0
	}

	#titre,
	#sous_titre {
		color: #000000 !important;
	}

	.style_1 h2,
    .style_6 h2 {
    background: #0086b0 !important;
    color: #ffffff !important;
	}


	/* .style_3,
	.style_4, */
	body>#page>#page_deco>#encadres>[class^="encadre"].bis,
	body>#page>#page_deco>#encadres>[class^="encadre"].bis h2,
	body>#page>#page_deco>#encadres>[class^="encadre"].bis div {
		background: #0086b0 !important;
		border-color: #ffffff !important;
		color: #ffffff !important;
	}
	
	body>#page>#page_deco>#encadres>[class^="encadre"].bis a {
		color: #ffffff !important;
		text-decoration: underline;
	}

	.contenu a,
	[class^="encadre"] a,
	.style_4 .toolbox a,
	#commentaires header .date,
	#commentaires header .auteur,
	#commentaires_reponse h2,
	#commentaires_reponse h2 span,
	#commentaires_reponse button,
	.en_valeur,
	.style_1 + .style_5 .toolbox a,
	.style_1 .style_5 .toolbox a {
		color: #0086b0 !important;
	}
	
	.pertinence .niveau .avant .cercle {
		background-color: #0086b0 !important;
	}
    #menu_principal ul {
        border-bottom-color: #0086b0 !important;
    }

@media screen and (min-width: 1056px) {
	#bandeau_page .fond {
		background: url(/images/bandeaux/fond-bandeau_gi.png) !important;
	}
}

	body{
		background-color: #e6e6e7;
	}
		
</style>		
		
		
		
		
		
		
		
		
		
		
		
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
     
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="3vh" data-loop="false" data-dragable="false" data-min-height="380px" data-slide-effect="true" style="height: 767px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/images/part.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block"> Details Organisme</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
               <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><a href="equipeGL.html">Genie logiciel</a></li>
              <li>Details Organisme</li>
            </ul>
          </div>
        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!--4 Columns Layout-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-4 text-sm-left">
                <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images/gsc.jpg')}}" width="340" height="340" alt="">

                  <div class="offset-top-15 offset-sm-top-30">
                    <div id="encadres"><!--  --><div class="encadre_fiche"><h2>Contacts</h2><div class="encadre_contenu">
						Directeur du laboratoire G-SCOP :<br /><br /><br /> <a href="mailto:francois.villeneuve@g-scop.inpg.fr" class="lien_externe">Fran&ccedil;ois Villeneuve</a><br /><br />Directeur adjoint G-SCOP<br /><br /><br /><a href="mailto:gulgun.alpan-gaujal@grenoble-inp.fr" class="lien_externe">G&uuml;lg&uuml;n Alpan</a><br /><br /><br />Responsable administrative G-SCOP<br /><br /><br /><a href="mailto:myriam.torlini@grenoble-inp.fr" class="lien_externe">Myriam Torlini</a><br /><br />
					</div><!-- .encadre_contenu -->
				</div><!-- .encadre_fiche --><!--  --><div class="encadre_fiche"><div class="encadre_contenu">
						<br /><br />Secr&eacute;tariat&nbsp; G-SCOP<br /><br /><a href="mailto:marie-josephe.perruet@g-scop.grenoble-inp.fr" class="lien_externe">Marie-Josephe Perruet</a><br /><br />
					</div><!-- .encadre_contenu -->
				</div><!-- .encadre_fiche --><!--  --></div>
                  </div>
				  
				   <div class="offset-top-15 offset-sm-top-30">
                    <div id="encadres"><!--  --><div class="encadre_fiche"><h2>Localisation</h2><div class="encadre_contenu">
						VILLE :<br /><br /><a href="mailto:francois.villeneuve@g-scop.inpg.fr" class="lien_externe">Tlemcen</a><br /><br /><br />Pays<br /><br /><a href="mailto:gulgun.alpan-gaujal@grenoble-inp.fr" class="lien_externe">Algerie</a><br /><br /><br />Adress<br /><a href="mailto:myriam.torlini@grenoble-inp.fr" class="lien_externe">@bdjsjhjds</a>
					</div><!-- .encadre_contenu -->
				</div><!-- .encadre_fiche --><!--  -->
                  </div>
				  </div>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
                  <div class="offset-top-15 offset-sm-top-30">
                    <ul class="list-inline list-inline-xs list-inline-madison">
                      <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                      <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                      <li><a class="icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                      <li><a class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 text-left">
                <div>
                  <h2 class="text-bold">Organisme</h2>
                </div>
                <p class="offset-top-10">Type</p>
                <div class="offset-top-15 offset-sm-top-30">
                  <hr class="divider bg-madison hr-left-0">
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h5 class="text-bold">A propos de  l'organisme</h5>
                  <div class="text-subline"></div>
                </div>
                <div class="offset-top-20">
                  <p>G-SCOP, Laboratoire des sciences pour la conception, l'optimisation et la production, comprend 2 grands pôles (Optimisation et Systèmes de Production et Conception intégrée) et de nombreux domaines de compétences Le monde industriel est en pleine mutation. Depuis quelques années des évolutions considérables ont concerné le monde industriel. L'émergence de nouveaux marchés ainsi que des lieux de production industrielle à bas coûts ont conduit à une accélération des mouvements de délocalisation-relocalisation.

           Ces mouvements concernent les activités de production et, ce qui est plus nouveau, les activités de conception. On assiste simultanément depuis quelques années à nombre de rachats et regroupements d'entreprises mais aussi à des recentrages spectaculaires de ces entreprises. Dans l'industrie de l'informatique, la vente par IBM de sa division PC, mais aussi le fait que HP sous-traite toute sa production sont des témoins emblématiques de ces évolutions.. Ces mouvements concernent les activités de production et, ce qui est plus nouveau, les activités de conception. On assiste simultanément depuis quelques années à nombre de rachats et regroupements d'entreprises mais aussi à des recentrages spectaculaires de ces entreprises. Dans l'industrie de l'informatique, la vente par IBM de sa division PC, mais aussi le fait que HP sous-traite toute sa production sont des témoins emblématiques de ces évolutions.

          Nous pourrions aussi décrire l'extraordinaire développement des services, ce qui incite à avoir une vision extensive du concept de systèmes de production dans la mesure où les frontières entre industrie et service s'estompent. Enfin la notion de produit évolue également : on parle de « produits étendus », du couple « produits-services », ce qui n'est pas sans conséquence sur la façon de les concevoir. Ces constats sont à la base de nombreuses réflexions prospectives françaises et internationales (notamment au niveau européen). Signalons à titre d'exemple les conférences Manufuture de Milan (2003) et Enschede (2004) conduisant à l'établissement d'une vision des systèmes de production en Europe à long terme.

           Cette situation, et notamment les délocalisations, conduit à de récurrents discours alarmistes dans la presse. Au-delà de ces discours alarmistes, il nous semble indispensable de se pencher sur les conditions d'une croissance durable et de poser la question des lieux et leviers de la performance économique des entreprises. Cette performance se joue sur la capacité des entreprises à innover en matière de produits et de services mais aussi sur leur capacité à inventer de nouvelles organisations industrielles (réactives et flexibles malgré leur complexité).</p>
                </div>
               
               
              </div>
            </div>
          </div>
        </section>
        <!-- Classic Skills Bars-->
        <section class="section-70 section-md-114 bg-madison context-dark">
          <div class="shell">
            <h2 class="text-bold">bars de progresion</h2>
            <hr class="divider bg-madison">
            <div class="range range-xs-center offset-top-65">
              <div class="cell-xs-10 cell-sm-6">
                <!-- Linear progress bar-->
                <div class="progress-linear animated-first" data-to="70">
                  <div class="progress-header clearfix">
                    <div class="text-left">
                      <h6 class="text-bold pull-left text-black">domaine 0</h6>
                    </div><span class="text-bold pull-right progress-value">70</span>
                  </div>
                  <div class="progress-bar-linear-wrap offset-top-5">
                    <div class="progress-bar-linear bg-primary" style="width: 70%;"></div>
                  </div>
                </div>
                <div class="offset-top-56">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="42">
                    <div class="progress-header clearfix">
                      <div class="text-left">
                        <h6 class="text-bold pull-left text-black">domaine1</h6>
                      </div><span class="text-bold pull-right progress-value">42</span>
                    </div>
                    <div class="progress-bar-linear-wrap offset-top-5">
                      <div class="progress-bar-linear bg-primary"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-56">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="38">
                    <div class="progress-header clearfix">
                      <div class="text-left">
                        <h6 class="text-bold pull-left text-black">domaine 2</h6>
                      </div><span class="text-bold pull-right progress-value">38</span>
                    </div>
                    <div class="progress-bar-linear-wrap offset-top-5">
                      <div class="progress-bar-linear bg-primary"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-56">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="94">
                    <div class="progress-header clearfix">
                      <div class="text-left">
                        <h6 class="text-bold pull-left text-black">domaine 3</h6>
                      </div><span class="text-bold pull-right progress-value">94</span>
                    </div>
                    <div class="progress-bar-linear-wrap offset-top-5">
                      <div class="progress-bar-linear bg-primary"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-20"></div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Corporate footer-->
      <footer class="page-footer">
        <div class="shell-wide">
          <div class="hr bg-gray-light"></div>
        </div>
        <div class="shell section-60">
          <div class="range range-lg-justify range-xs-center">
            <div class="cell-md-3 cell-lg-2">
              <!--Footer brand--><a class="reveal-inline-block" href="https://livedemo00.template-help.com/wt_prod-14585/index.html"><img width="170" height="172" src="{{asset('labo/front_office/img/1525711039.png')}}" alt="">
                <div>
                  <h6 class="barnd-name text-bold offset-top-25">Modern</h6>
                </div>
                <div>
                  <p class="brand-slogan text-gray text-italic font-accent">University</p>
                </div></a>
            </div>
            <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left offset-top-50 offset-md-top-0">
              <h6 class="text-bold">Contact us</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30">
                <ul class="list-unstyled contact-info list">
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a class="text-dark" href="tel:#">1-800-1234-567,</a> <a class="reveal-block reveal-md-inline-block text-dark" href="tel:#">1-800-6547-321</a>
                      </div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body text-left"><a class="text-dark" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="offset-top-15 text-left">
                <ul class="list-inline list-inline-xs list-inline-madison">
                  <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                  <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                  <li><a class="icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                  <li><a class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                </ul>
              </div>
            </div>
            <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left offset-top-50 offset-lg-top-0">
              <h6 class="text-bold">Newsletter</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30 text-left">
                <p>Enter your email address to get the latest University news, special events and student activities delivered right to your inbox.</p>
              </div>
              <div class="offset-top-10">
                      <form class="rd-mailform form-subscribe" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="https://livedemo00.template-help.com/wt_prod-14585/bat/rd-mailform.php" novalidate="novalidate">
                        <div class="form-group">
                          <div class="input-group input-group-sm">
                            <input class="form-control form-control-has-validation" placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email" id="regula-generated-343205"><span class="form-validation"></span><span class="input-group-btn">
                              <button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span>
                          </div>
                        </div>
                        <div class="form-output" id="form-subscribe-footer"></div>
                      </form>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-madison context-dark">
          <div class="shell text-md-left section-5">
            <p>© <span id="copyright-year">2018</span> All Rights Reserved Terms of Use and <a href="https://livedemo00.template-help.com/wt_prod-14585/privacy.html">Privacy Policy</a></p>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script type="text/javascript" async="" src="./Team Member Profile_files/ec.js.téléchargé"></script><script type="text/javascript" async="" src="./Team Member Profile_files/analytics.js.téléchargé"></script><script async="" src="./Team Member Profile_files/gtm.js.téléchargé"></script><script src="./Team Member Profile_files/core.min.js.téléchargé"></script>
    <script src="./Team Member Profile_files/script.js.téléchargé"></script>
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
<a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#" id="ui-to-top" class="ui-to-top icon icon-xs icon-circle icon-darker-filled mdi mdi-chevron-up"></a></body><!-- Google Tag Manager --></html>
@endsection
@endsection