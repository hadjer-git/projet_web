@extends('layouts.FrontOffice')

@section('content')
@extends('layouts.Menu')

@section('content')
<?php 
     try
{// On se connecte à MySQL

        $bdd = new PDO('mysql:host=localhost;dbname=lrit;charset=utf8', 'root', '');

        }
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }  
    $req="SELECT * FROM users where id='$user' " ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
     $row=$reponse->fetch();
     //while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
//{
?>
<!DOCTYPE html>

<html class="wide wow-animation scrollTo" lang="en">
  <head>
    
    <!-- Site Title-->
    <title><?php echo $row['name']."  ".$row['prenom']  ?></title>
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
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/img/AllFaculty2016-17.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Profile de <?php echo $row['name']."  ".$row['prenom']  ?></h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
               <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><a href="equipeGL.html">Genie logiciel</a></li>
              <li><?php echo $row['name']."  ".$row['prenom']  ?></li>
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
                <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="<?php echo (asset($row['photo'])); ?>" width="340" height="340" alt="">
                  <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" href="" style="max-width: 340px; margin-left:auto; margin-right:auto;">voir profil</a></div>
                  <div class="offset-top-15 offset-sm-top-30">
                    <ul class="list list-unstyled">
                      <li><span class="icon icon-xs mdi mdi-phone text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:#"><?php echo $row['date_naissance'];  ?></a></li>
                      <li><span class="icon icon-xs mdi mdi-phone text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:#"><?php echo $row['num_tel'];  ?></a></li>
                      <li><span class="icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a class="reveal-inline-block inset-left-10" href="mailto:info@demolink.org"><?php echo $row['email'];  ?></a></li>
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
                  <h2 class="text-bold"><?php echo $row['name']."  ".$row['prenom'];  ?></h2>
                </div>
                <p class="offset-top-5"><?php echo $row['grade'];  ?></p>
                <div class="offset-top-5 offset-sm-top-30">
                  <hr class="divider bg-madison hr-left-0">
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h4 class="text-bold"><u>These</u></h4>
                                   
       <div class="text-subline"></div>
                </div>
                <div class="offset-top-20">
                  <?php 
      
    $req="SELECT * FROM theses where user_id='$user'" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
     $row1=$reponse->fetch();
     //while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
//{ /uploads/these/1525785786.pdf
?>
                  <h5><u>Details</u></h5>
                  <p><h6>Titre :</h6> <?php echo $row1['titre'];  ?></p>
                  <p><h6>Sujet :</h6> <?php echo $row1['sujet'];  ?></p>
                  <p><h6>Encadreur Interne :</h6> <?php 
                    if($row1['encadreur_int']<>null) 
                      {echo $row1['encadreur_int'];} 
                    else{echo "il n'a pas de Encadreur Interne ";}  
                    ?></p>
                  <p><h6>Encadreur Externe :</h6> <?php 
                    if($row1['encadreur_ext']<>null) 
                      {echo $row1['encadreur_ext'];} 
                    else{echo "il n'a pas de Encadreur Externe ";}  
                    ?></p>
                  <p><h6>Coencadreur Interne :</h6> 
                    <?php 
                    if($row1['coencadreur_int']<>null) 
                      {echo $row1['coencadreur_int'];} 
                    else{echo "il n'a pas de Coencadreur Interne ";}  
                    ?></p>
                  <p><h6>Coencadreur Externe :</h6><?php 
                    if($row1['coencadreur_ext']<>null) 
                      {echo $row1['coencadreur_ext'];} 
                    else{echo "il n'a pas de Coencadreur Externe ";}  
                    ?></p>
                  <p><h6>fichier :</h6> <?php 
                  if($row1['detail']<>null)
                    echo "<iframe src=" .(asset($row1['detail']))." width='600' height='800' align='middel'></iframe>";
                  else echo "y pas de fichier";
                  ?>
             <!--        <section class="section-bottom-70 section-lg-bottom-0">
         <h4 class="text-bold"><u>Les Encadreures</u></h4>
                      <div class="text-subline"></div>
                      <div class="range offset-top-50">
  
          <table align="center">
              <tr>
              <td> <!-- coencadreur int
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
              </div>
              <h4>Encadreur Interne</h4>
            </div>
          </td>
              <td>
                 <!-- coencadreur int
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
              </div>
              <h4>Encadreur Externe</h4>
            </div>
              </td>
            </tr>
            <tr>
              <td><br></td><td><br></td></tr>
             <tr>
              <td>
                 <!-- coencadreur int
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
   
              </div>
                           <h4>Coencadreur Interne</h4>
            </div>
              </td>
              <td>
                 <!-- coencadreur 
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
              </div>
              <h4>Coencadreur Externe</h4>
            </div>
              </td>
            </tr>
          </table>
            
            
            
           
          
      </div>
        </section>-->
 
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h4 class="text-bold"><u>Les Projets</u></h4>
                  <div class="text-subline"></div>
                </div>
                <div class="offset-top-15 offset-sm-top-30">
                   <section class="section-bottom-70 section-lg-bottom-0">
          
                      <div class="range offset-top-50">
            <?php 
      
    $req="SELECT * FROM projets,projet_user where  user_id='$user' and projets.id=projet_user.projet_id" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
    while ($projets = $reponse->fetch()) // On affiche chaque entrée une à une
{ 
?>
              <div class="row row-lg-condensed">
            <div class="col-sm-6 col-lg-1-3">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images\projet.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html"><?php echo $projets['intitule'];  ?></a></h4>
                  </div>
                  <p class="offset-top-0"><?php echo $projets['type'];  ?></p><a class="btn btn-primary" href="Profile Membre.html">Detail</a>
                </div>
              </div>
            </div>
            <?php 
          } ?>
            
           
          
      </div>
        </section>
        <!--les nouvelle publication-->
        <div class="offset-top-30 offset-sm-top-60">
                  <h4 class="text-bold"><u>Les Articles</u></h4>
                  <div class="text-subline"></div>
                </div>
        <section class="section-70 section-md-20 bg-catskilll">
  <?php 
      
    $req="SELECT * FROM articles,article_user where  user_id='$user' and articles.id=article_user.article_id" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
    while ($articles = $reponse->fetch()) // On affiche chaque entrée une à une
{ 
?>

                  <div class="post-news-modern">
                    <div class="unit unit-sm unit-sm-horizontal unit-timeline unit-sm-inverse">
                      <div class="unit-body">
                        <article class="post-news post-news-wide"><a href="https://livedemo00.template-help.com/wt_prod-14585/news-post-page.html"></a>
                          <div class="post-news-body">
                            <h4 class="text-bold text-primary"><a href="https://livedemo00.template-help.com/wt_prod-14585/news-post-page.html"><?php echo $articles['titre'];  ?></a></h4>
                            <p><h6><u>Type :</u> <?php echo $articles['type'];  ?></h6>
                              <br>
                           <?php echo $articles['resume'];  ?></p>
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
                      <div class="unit-right text-center">
                        <div class="unit unit-horizontal unit-middle unit-spacing-xxs unit-sm unit-sm-vertical unit-sm-inverse">
                          <div class="unit-left"><img class="img-responsive img-circle reveal-inline-block" src="<?php echo (asset($row['photo'])); ?>" width="90" height="90" alt="">
                            <p class="text-primary"><?php echo $row['name']."  ".$row['prenom'];  ?></p>
                            <p ><?php echo $articles['membres_ext'];  ?></p>
                            <?php 
     $artc_id=$articles['article_id'];
    $req1="
    SELECT name,prenom 
    FROM users,article_user 
    where users.id=user_id 
      and article_id='$artc_id'
       and users.id<>'$user'" ;
    $reponse1 = $bdd->prepare($req1); // On récupère tout le contenu de la table 
    $reponse1->execute();
    while ($particpant = $reponse1->fetch()) // On affiche chaque entrée une à une

{ 
?> <p ><?php echo $particpant['name']; ?></p>
<?php } ?>
                          </div>
                          <div class="unit-body text-left text-sm-center">
                            <time datetime="2018-01-01"><?php echo $articles['mois'].", ".$articles['annee'];  ?> <br> at 8:00 pm</time>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 <?php } ?>
               
        </section>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Classic Skills Bars-->
        <section class="section-70 section-md-114 bg-madison context-dark">
          <div class="shell">
            <h2 class="text-bold"> bars de progresion</h2>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
@endsection
@endsection