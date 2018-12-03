@extends('layouts.FrontOffice')

@section('content')
<!DOCTYPE html>
<!-- saved from url=(0075)https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html -->
<html class="wide wow-animation scrollTo desktop landscape rd-navbar-static-linked" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Site Title-->
    <title>projet</title>
    
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="https://livedemo00.template-help.com/wt_prod-14585/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="./Team Member Profile_files/css">
    <link rel="stylesheet" href="./Team Member Profile_files/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
    <style>
        div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

    </style>
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
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
                      <li class="active"><a href="/Acceuil/Presentation">Presentation</a>
                      </li>
                      <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a>Equipes</a>
                        <ul class="rd-navbar-dropdown" >
                          <li><a href="/Acceuil/Equipe/GL">GL</a>
                          </li>
                          <li><a href="equipeGl.html">MID</a>
                          </li>
                          <li><a href="equipeGl.html">SIC</a>
                          </li>
                          <li><a href="equipeGl.html">RSD</a>
                          </li>
                        </ul>
                      <span class="rd-navbar-submenu-toggle"></span></li>
                     
                      <li><a href="Contacts.html">Contacts</a>
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
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/img/businessman-3213659__340.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Projet</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
               <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><a href="equipeGL.html">Genie logiciel</a></li>
              <li>Projet</li>
            </ul>
          </div>
        </div>
                        
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
                <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images\triangle-3125882__340.jpg')}}" width="340" height="340" alt="">
                  <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" href="" style="max-width: 340px; margin-left:auto; margin-right:auto;">voir la déscription de projet </a></div>
                  <div class="offset-top-15 offset-sm-top-30">
                    <ul class="list list-unstyled">
                      <li><span class="icon icon-xs mdi mdi-phone text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:#">1-800-1234-567</a></li>
                      <li><span class="icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a class="reveal-inline-block inset-left-10" href="mailto:info@demolink.org">info@demolink.org</a></li>
                    </ul>
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
                  <h2 class="text-bold">systeme de gestion de banque</h2>
                </div>
                <p class="offset-top-10">specialité</p>
                <div class="offset-top-15 offset-sm-top-30">
                  <hr class="divider bg-madison hr-left-0">
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h6 class="text-bold">apropos de projet</h6>
                  <div class="text-subline"></div>
                </div>
                <div class="offset-top-20">
                  <p>William Barnett joined the Modern University in 2003 as an assistant professor in the Department of Geology and Geophysics, where he established the radiogenic isotope geology laboratory. His research interests include the origin and evolution of the continental crust, the classification and petrogenesis of granites and related rocks, and the application of environmental isotopes to problems related to energy and environment. Although his geological research spans the globe from Norway to New Zealand, many of the critical observations that catalyzed new ideas and interpretations have come from the spectacular exposures in San Diego of some of the world's oldest and best-preserved ancient crust.</p>
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h6 class="text-bold">groupe</h6>
                   
                  <div class="text-subline"></div>
                </div>
                   <br>
               <div class="responsive">
  <div class="gallery">
    <a target="_blank"  href="Profile%20Membre.html">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Profile%20Membre.html">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive" >
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Profile%20Membre.html">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>
 

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Profile%20Membre.html">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Profile%20Membre.html">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Profile%20Membre.html">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Profile%20Membre.html">
      <img src="{{asset('labo/front_office/images/images.jpg')}}" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


 

<div class="clearfix"></div>

<div style="padding:6px;">
  
</div>



									
    </div>
 </div>
              
              
            </div>
          </section>
        </main>
          </div>
        </section>
        <!-- Classic Skills Bars-->
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
              <!--Footer brand--><a class="reveal-inline-block" href="https://livedemo00.template-help.com/wt_prod-14585/index.html"><img width="170" height="172" src="{{asset('labo/front_office/Team Member Profile_files/logo-170x172.png')}}" alt="">
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