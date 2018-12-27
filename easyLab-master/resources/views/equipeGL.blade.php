@extends('layouts.FrontOffice')

@section('content')
@extends('layouts.Menu')

@section('content')
<!DOCTYPE html>
 <?php
    try
{// On se connecte à MySQL

        $bdd = new PDO('mysql:host=localhost;dbname=lrit;charset=utf8', 'root', '');

        }
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        } 
        
        $req=" SELECT * from equipes where id='$equipe'" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        $row=$reponse->fetch();
?>
<!-- saved from url=(0063)https://livedemo00.template-help.com/wt_prod-14585/history.html -->
<html class="wide wow-animation scrollTo" lang="en">
  <head>
    <!-- Site Title-->
    <title><?php echo $row['intitule']  ?></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/1525711039.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css/font-awesome.min.css">
    <link href="MaterialDesign-Webfont-master\css\materialdesignicons.min.css" rel="stylesheet">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <!-- Page-->
    <div class="page text-center">
  
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/images/syteme_reseau_intro-1.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          
          <h1 class="veil reveal-sm-block"><?php echo $row['intitule']  ?></h1>

          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><?php echo $row['achronymes']  ?></li>
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
        <!-- vertical link Tabs-->
        <section class="section-90 section-md-114 section-md-bottom-190">
          <div class="shell">
            <!-- Responsive-tabs-->
            <div class="responsive-tabs responsive-tabs-classic vertical" data-type="vertical">
              <ul class="resp-tabs-list tabs-1 text-center tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                <li>Presentation</li>
        <li>Membres</li>
                <li>Projets</li>
        <li>Publication</li>
        <li>Partenaires</li>
                
              </ul>
              <div class="resp-tabs-container text-sm-left tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                
        <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block"><?php echo $row['intitule']  ?></h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
          
                    
                    <div class="offset-top-30">
                     <img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images/gl.jpg')}}" width="770" height="480" alt=""></div>
                    <div class="offset-lg-top-30">
              <!-- RD Search Form-->
              <form class="form-search rd-search" action="search-results.html" method="GET">
                <div class="form-group">
                  <input class="form-search-input form-control" type="text" name="s" autocomplete="off">
                </div>
                <button class="form-search-submit" type="submit"><span class="icon fa-search"></span></button>
              </form>
              <div class="offset-top-60">
                <div class="rd-search-results"></div>
              </div>
                     <h3 class="text-bold veil reveal-lg-block">Descriiption</h3>
                      <p><?php echo $row['resume']  ?></p>
                     
                      <br>
                      <br>
                     
                     <div align="center" class="col-sm-3 col-lg-1-1"> 
                      <div class="team-member"> <?php  
                      $req="SELECT users.id as user_id,name,prenom,grade,photo FROM equipes,users where equipes.chef_id=users.id and equipes.id='$equipe'" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        $row=$reponse->fetch();
       $img_src= $row['photo'];
     //  echo "<img class='img-responsive reveal-inline-block' src='{{asset('labo/front_office/img/Membre.jpg')}}' width='500' height='100' alt=''>";

                    ?><!--<img class='img-responsive reveal-inline-block' src=<?php echo"'{{asset('".$img_src."')}}'" ?> width='500' height='100' alt=''>-->
                    <img class='img-responsive reveal-inline-block' src="<?php echo (asset($row['photo'])); ?>" width='500' height='100' alt=''>
                <div class="team-member-body">
                  <div>
                    
                    <h4 class="text-bold team-member-title"><a href="/membre/<?php echo $row['user_id'];  ?>">
                      <?php echo $row['name'];
                      echo ' '.$row['prenom'];
                        ?></a></h4>
                  </div>
                  <p class="offset-top-0"><?php echo $row['grade'];?></p><a class="btn btn-primary" href="/membre/<?php echo $row['user_id'];  ?>">Profile</a>
                </div>
              </div><br><h3 class="text-bold veil reveal-lg-block"><a href="/Acceuil/Equipe/GL/Membre">Chef De L'Equipe</a></h3></div>
                    </div>
        
                 
        </div>
        </div>
        
                  <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block">Membres</h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                  
                    <div class="offset-top-30"> <!-- Images-->
        <section class="section-bottom-70 section-lg-bottom-0">
          <h6 class="text-bold">Listes des Membres de l'equipe</h6>
                      <div class="text-subline"></div>
                      <div class="range offset-top-50">
          
            
            <div class="row row-lg-condensed">
              <!--Membre1--><?php  
                      $req="SELECT users.id,name,prenom,grade,photo FROM equipes,users where equipes.id=users.equipe_id and equipes.id='$equipe'" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>
            <div class="col-sm-3 col-lg-1-4">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="<?php echo (asset($donnees['photo'])); ?>" width="384" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="/membre/<?php echo $donnees['id'];  ?>">
                      <?php 
                      echo $donnees['name']; 
                      echo "  ".$donnees['prenom'];
                      ?></a></h4>
                  </div>
                  <p class="offset-top-0"><?php 
                      echo $donnees['grade']; 
                      ?></p><a class="btn btn-primary" href="/membre/<?php echo $donnees['id'];  ?>">Profile</a>
                </div>
              </div>
            </div>
            <!--Fin-->
            <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
           
         </div>

      </div>
        </section></div>
                  </div>
                </div>
                <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block">Projets</h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                    
                    <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images/academics-02-770x480.jpg')}}" width="770" height="480" alt=""></div>
                    <div class="offset-top-30">
                      <h6 class="text-bold">Listes des Projets Realiser par l'equipe</h6>
                      <div class="text-subline"></div>
                      <div class="offset-top-20">
                        <ul class="list list-unstyled list-marked">
                          <?php  
                      $req="SELECT projet_id,projets.intitule as nom FROM equipes,users,projet_user,projets where equipes.id=users.equipe_id and equipes.id='$equipe' and projet_user.user_id=users.id and projets.id=projet_user.projet_id" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        $row=$reponse->fetch();
        while ($projet = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>
                           <li><a href="/projets/<?php echo $projet['projet_id'];  ?>/details"><?php echo $projet['nom'];  ?></a></li>
<?php } ?>
                           
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block">Article</h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                    <div class="offset-top-10">
                       <!-- Latest news-->

        <section class="section-70 section-md-20 bg-catskilll">







<?php 
      
    $req="SELECT * FROM articles,article_user,equipes,users 
    where  equipes.id='$equipe' 
      and articles.id=article_user.article_id 
      and users.id=article_user.user_id
      and equipes.id=users.equipe_id
    group by articles.id" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
    while ($articles = $reponse->fetch()) // On affiche chaque entrée une à une
{ 
?>
                  <div class="post-news-modern" style=" border: 2px gray solid ">
                    <div class="unit unit-sm unit-sm-horizontal unit-timeline unit-sm-inverse">
                      <div class="unit-body">
                        <article class="post-news post-news-wide">
                          <div class="post-news-body">
                            <h4 class="text-bold text-primary"><a href="https://livedemo00.template-help.com/wt_prod-14585/news-post-page.html"><?php echo $articles['titre'];  ?></a></h4>
                            <p><h6>Type : <?php echo $articles['titre'];  ?></h6>
                              <br>
                            <?php echo $articles['resume'];  ?></p>
                            <br>
                          <p>  <h6>Membre Interne :</h6>
                                    <?php 
     $artc_id=$articles['article_id'];
    $req1="
    SELECT name,prenom 
    FROM users,article_user 
    where users.id=user_id 
      and article_id='$artc_id'
       " ;
    $reponse1 = $bdd->prepare($req1); // On récupère tout le contenu de la table 
    $reponse1->execute();
    while ($particpant = $reponse1->fetch()) // On affiche chaque entrée une à une

{ 
?>  <?php if($particpant['name']!=null)echo "<p>".$particpant['name']." ".$particpant['prenom']."</p>";  ?>
<?php } ?>
                            </p>
                           
                             <?php 
                             if($articles['membres_ext']!=null)
                              echo " <p>  <h6>Membre Externe :</h6>".$articles['membres_ext']; 
                               ?>

                            </p>
                            <div class="post-news-meta offset-top-30">
                              <div class="tags-list group group-sm reveal-inline-block text-middle">
                                 <?php if($articles['lieu_ville']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['lieu_ville']. "</a>";  ?>
                                   <?php if($articles['lieu_pays']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['lieu_pays'] ."</a>";  ?>
                                   <?php if($articles['journal']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['journal']." </a>";  ?>
                                   <?php if($articles['conference']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['conference']." </a>";  ?>

                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                
                         
                 
                      
                    </div>
                  </div>
                  <?php } ?>
                  
               
        </section>
                    </div>
                    
                </div>
                
          </div>
      
      
      <div class="interieur" id="contenus_page">
    <div id="titre"><h3>Les laboratoires partenaires</h3>
    </br>
    </br>
    </div>


 




         <div class="ligne_1"><div class="colonne_1">
     <div class="colonne_deco"><div class="style_1">
     
    
                <h2 class="paragraphe__titre--1">G-SCOP</h2><div class="paragraphe__contenu--1 toolbox">
                <a href="paterne.html" ><strong>LA&nbsp;CONCEPTION, L'OPTIMISATION ET&nbsp;LA&nbsp;PRODUCTION</strong></a><div style="text-align: center;"><a  href="/Acceuil/Equipe/GL/Partenaire" ><img title="" alt="" style="width:320px;height:140px;margin : 10px 0px;" src="http://genie-industriel.grenoble-inp.fr/medias/photo/logo-g-scop_1393325206311-jpg" /></a></div><div style="text-align: justify;">G-SCOP  tente de r&eacute;pondre aux d&eacute;fis scientifiques pos&eacute;s par les mutations du  monde industriel en cours et &agrave; venir. Le p&eacute;rim&egrave;tre du laboratoire va de  la conception des produits &agrave; la gestion des syst&egrave;mes de production en  s'appuyant sur de fortes comp&eacute;tences en optimisation.</div>
              </div><!-- .paragraphe__contenu--1 .toolbox -->
            </div><!-- paragraphe--1 --></div><!-- colonne_deco -->
      </div><!-- .colonne_1 -->
      
      
      
      <div class="colonne_2">
        <div class="colonne_deco"><div class="style_1">
                <h2 class="paragraphe__titre--1">GAEL</h2><div class="paragraphe__contenu--1 toolbox">
                <a _linktype="interne" href="/Acceuil/Equipe/GL/Partenaire" class="lien_interne"> <strong>LABORATOIRE&nbsp;D'&Eacute;CONOMIE APPLIQU&Eacute;E DE GRENOBLE </strong></a> &nbsp;<div style="text-align: center;"><a _linktype="interne" href="par_1.html" class="lien_interne"><img src="http://genie-industriel.grenoble-inp.fr/medias/photo/logo-gael-couleur-fr-sans-texte_1498221820842-jpg" alt="" title="" style="width:205px;height:140px;" /></a></div><div style="text-align: justify;"><br />GAEL est un laboratoire de l'INRA, de l'UGA et de Grenoble INP. Ce laboratoire conduit des recherches finalis&eacute;es en lien avec l'agriculture, la consommation et le d&eacute;veloppement durable.</div>
              </div><!-- .paragraphe__contenu--1 .toolbox -->
            </div><!-- paragraphe--1 --></div><!-- colonne_deco -->
      </div><!-- .colonne_2 --></div><!-- .ligne_1 -->
      
      <div class="ligne_2"><div class="colonne_1">
        <div class="colonne_deco"><div class="style_1">
                <h2 class="paragraphe__titre--1">PACTE</h2><div class="paragraphe__contenu--1 toolbox">
                <a _linktype="interne" href="/Acceuil/Equipe/GL/Partenaire" class="lien_interne"><strong>POLITIQUE&nbsp;PUBLIQUES, ACTION POLITIQUE, TERRITOIRES</strong></a><div style="text-align: center;"><a _linktype="interne" href="http://genie-industriel.grenoble-inp.fr/recherche/pacte-583586.kjsp?RH=GI_FR-LABP" class="lien_interne"><img title="" alt="" style="width:320px;height:140px;margin : 10px 0px;" src="http://genie-industriel.grenoble-inp.fr/medias/photo/gi-pacte-logo_1393175279390-jpg" /></a></div><br /><div style="text-align: justify;">PACTE  est une unit&eacute; mixte de recherche du CNRS et de l’UGA qui rassemble les politistes, les g&eacute;ographes et les  urbanistes, ainsi que des sociologues du site grenoblois. Elle accueille  aussi des &eacute;conomistes, des juristes et des historiens.</div>
              </div><!-- .paragraphe__contenu--1 .toolbox -->
            </div><!-- paragraphe--1 --></div><!-- colonne_deco -->
      </div><!-- .colonne_1 -->
      
    
      <div class="colonne_2">
        <div class="colonne_deco"><div class="style_1">
                <h2 class="paragraphe__titre--1">CERAG</h2><div class="paragraphe__contenu--1 toolbox">
                <a href="/Acceuil/Equipe/GL/Partenaire" _linktype="interne" class="lien_interne"><strong>CENTRE D'ETUDES ET DE RECHERCHE APPLIQUEES A LA GESTION</strong></a><div style="text-align: center;"><a href="http://genie-industriel.grenoble-inp.fr/les-laboratoires-partenaires/cerag-597248.kjsp?RH=GI_FR-LABP" _linktype="interne" class="lien_interne"><img title="" alt="" style="width:320px;height:140px;margin : 10px 0px;" src="http://genie-industriel.grenoble-inp.fr/medias/photo/logo-cerag_1399887344169-jpg" /></a></div><br />Le CERAG est une Unit&eacute; Mixte de Recherche (UMR 5820) rattach&eacute;e &agrave; l’UGA et au CNRS. Le laboratoire est d&eacute;di&eacute; &agrave; la recherche en sciences de gestion.<br />
              </div><!-- .paragraphe__contenu--1 .toolbox -->
            </div><!-- paragraphe--1 --></div><!-- colonne_deco -->
      </div><!-- .colonne_2 --></div><!-- .ligne_2 -->
      
      
      <div class="ligne_3"><div class="colonne_1">
        <div class="colonne_deco"><div class="style_1">
                <h2 class="paragraphe__titre--1">CREG</h2><div class="paragraphe__contenu--1 toolbox">
                <strong>CENTRE&nbsp;DE&nbsp;RECHERCHE&nbsp;EN&nbsp;&Eacute;CONOMIE DE&nbsp;GRENOBLE</strong><div style="text-align: center;"><img src="http://genie-industriel.grenoble-inp.fr/medias/photo/gi-creg-logo_1393175233842-jpg" style="width:320px;height:140px;margin : 10px 0px;" alt="" title="" /></div>Ce  laboratoire rattach&eacute; &agrave; l'UGA et partenaire de Grenoble INP &eacute;tudie les probl&egrave;mes pos&eacute;s par les &eacute;volutions de la  mondialisation et ses interactions avec les modes de d&eacute;veloppement  &eacute;conomique, au niveau des entreprises et des territoires. <br /><div style="text-align: justify;"><br />&nbsp;</div><div style="text-align: center;">&nbsp;</div>
              </div><!-- .paragraphe__contenu--1 .toolbox -->
            </div><!-- paragraphe--1 --></div><!-- colonne_deco -->
      </div><!-- .colonne_1 --></div><!-- .ligne_3 -->

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
              <!--Footer brand--><a class="reveal-inline-block" href="index.html"><img width='170' height='172' src="{{asset('labo/front_office/img/1525711039.png')}}" alt=''/>
                <div>
                  <h6 class="barnd-name text-bold offset-top-25">LRI</h6>
                </div>
                <div>
                  <p class="brand-slogan text-gray text-italic font-accent">Tlemcen</p>
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
                      <div class="unit-body text-left"><a class="text-dark" href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
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
                  <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                  <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                  <li><a class="icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                  <li><a class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
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
                      <form class="rd-mailform form-subscribe" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-group">
                          <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-btn">
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
            <p>&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a href="privacy.html">Privacy Policy</a></p>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
 @endsection
  @endsection