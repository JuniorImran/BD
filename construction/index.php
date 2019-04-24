<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Building agency</title>
  <link rel="icon" type="image/jpg" href="img/image/a10.jpg">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
          <a class="navbar-brand" href="#"><strong>Imran Building Agency</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContentaria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item">
                <a class="nav-link" href="inscription.php">S'inscrire</a>
             </li>
            </ul>
            <form class="form-inline">
              <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              </div>
            </form>
          </div>
         </div>
      </nav>
          <!-- Navbar -->
          <!-- Full Page Intro -->
      <div class="view" style="background-image: url('img/image/tp4.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
         <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
           <div class="container">
                <!--Grid row-->
             <div class="row">
              <!--Grid column-->
              <div class="col-md-12 mb-4 white-text text-center">
                    <br>
                    <br>
                    <br>
                    <br>

                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Imran Building Agency au coeur de vos travaux de constrcutions</strong></h1>
                <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Rapide & fiable</strong></h5>
              </div>
              <form id="contact-form" method="post" action="traitement/verify.php" role="form">
                <div class="modal fade center" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Se connecter</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <input type="email" id="orangeForm-email" class="form-control validate" name="email">
                      <label data-error="wrong" data-success="right" for="orangeForm-email" >Email</label>
                    </div>

                    <div class="md-form mb-4">
                      <i class="fas fa-lock prefix grey-text"></i>
                      <input type="password" id="orangeForm-pass" class="form-control validate" name="password1">
                      <label data-error="wrong" data-success="right" for="orangeForm-pass" >Mot de passe</label>
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange">Connexion</button>
                  </div>
                  <div class="col-md-12 text-center">
                  <p>Vous 'avez pas de compte ? <a href="inscription.php">inscrivez vous</a></p>
                </div>
                </div>
              </div>
            </div>

            <div class="text-center">
              <a href="" class="btn btn-outline-white wow fadeInDown" data-toggle="modal" data-target="#modalRegisterForm">Batiment</a>
            </div>
              </form>
              <form id="contact-form" method="post" action="traitement/verify.php" role="form">
                <div class="modal fade center" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Se connecter</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" class="form-control validate" name="email">
                    <label data-error="wrong" data-success="right" for="orangeForm-email" >Email</label>
                  </div>

                  <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control validate" name="password1">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass" >Mot de passe</label>
                  </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-deep-orange">Connexion</button>
                </div>
                <div class="col-md-12 mb-4 text-center">
                  <p>Vous 'avez pas de compte ? <a href="inscription.php">inscrivez vous</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="" class="btn btn-outline-white wow fadeInDown" data-toggle="modal" data-target="#modalRegisterForm">Travaux publics</a>
          </div>
              </form>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
           <!-- Content -->
         </div>
            <!-- Mask & flexbox options-->
      </div>
          <!-- Full Page Intro -->
     </header>
          
     <!--1ere Sec-->
     <section class="text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5">Avec Imran Building Agency</h2>
            <!-- Section description -->
        <p class="lead grey-text w-responsive mx-auto mb-5">UNE PRÉSENCE SUR L'ENSEMBLE DE LA CHAÎNE DE 
        VALEURS DE LA CONSTRUCTION.</p>

         <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
           <div class="col-md-4">

            <i class="fas fa-chart-area fa-3x red-text"></i>
            <h5 class="font-weight-bold my-4">ÊTRE INNOVANT</h5>
            <p class="grey-text mb-md-0 mb-5">
            C’est ouvrir de nouveaux horizons avec nos collaborateurs et nos partenaires, pour nos clients, les 
            collectivités et l’environnement, afin d’imaginer le monde de demain..
            </p>

           </div>
              <!-- Grid column -->

              <!-- Grid column -->
            <div class="col-md-4">

              <i class="fas fa-book fa-3x cyan-text"></i>
              <h5 class="font-weight-bold my-4">ÊTRE RESPONSABLE</h5>
              <p class="grey-text mb-md-0 mb-5">C’est œuvrer chaque jour dans le respect de toutes nos parties prenantes 
                et de l’environnement, en France et partout où nous agissons dans le monde.
              </p>

            </div>
              <!-- Grid column -->

              <!-- Grid column -->
          <div class="col-md-4">

             <i class="far fa-comments fa-3x orange-text"></i>
            <h5 class="font-weight-bold my-4">ÊTRE ENGAGÉ</h5>
            <p class="grey-text mb-0">C’est parier sur la solidarité pour répondre aux grands enjeux sociétaux, en
             donnant la priorité aux emplois locaux et à l’insertion, en privilégiant l’ouverture à la société et aux partenariats locaux.

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </section>
          <!--2e sessi-->
            <section class="my-5">

              <!-- Section heading -->
              <h2 class="h1-responsive font-weight-bold text-center my-5">SECTEURS D’ACTIVITÉ</h2>
              <!-- Section description -->
              <p class="lead grey-text text-center w-responsive mx-auto mb-5">.</p>

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 text-center text-lg-left">
                  <img class="img-fluid" src="img/image/a10.jpg" alt="Sample image"   style="width:500px; height:500px; border-radius:250px" ;>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7">

                  <!-- Grid row -->
                  <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-1">
                      <i class="fas fa-share fa-lg indigo-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-10 col-md-11 col-10">
                      <h5 class="font-weight-bold mb-3">INNOVANT</h5>
                      <p class="grey-text">C’est contribuer à imaginer le monde de demain, en ouvrant de nouveaux horizons avec nos collaborateurs et nos partenaires, au service de nos clients, des collectivités et de l’environnement. Acteur global, Imran Building Agency intègre les avancées technologiques pour moderniser continuellement ses métiers.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                  <!-- Grid row -->
                  <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-1">
                      <i class="fas fa-share fa-lg indigo-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-10 col-md-11 col-10">
                      <h5 class="font-weight-bold mb-3">Technology</h5>
                      <p class="grey-text">“Demain, la construction modulaire permettra de répondre aux tendances de fond que sont l’industrialisation, la préfabrication, la digitalisation et l’économie”.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                  <!--Grid row-->
                  <div class="row">

                    <!-- Grid column -->
                    <div class="col-1">
                      <i class="fas fa-share fa-lg indigo-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-10 col-md-11 col-10">
                      <h5 class="font-weight-bold mb-3">Finance</h5>
                      <p class="grey-text mb-0">Engagement sur 65 % d’économies d’énergie.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!--Grid row-->

                </div>
                <!--Grid column-->

              </div>
              <!-- Grid row -->

            </section>
            <!--3e Section-->
            <section class="my-5">

              <!-- Section heading -->
              <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
              <!-- Section description -->
              <p class="lead grey-text text-center w-responsive mx-auto mb-5">“40 collaborateurs avec plus de 200 partenaires ont 
              contribué à apporter des réponses concrètes aux enjeux urbains et des solutions qui font la 
              différence pour imaginer la métropole de demain.”</p>

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-4">

                  <!-- Grid row -->
                  <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-flag-checkered deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">International</h5>
                      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                        nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                  <!-- Grid row -->
                  <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-flask deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Experimental</h5>
                      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                        nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                  <!-- Grid row -->
                  <div class="row mb-md-0 mb-3">

                    <!-- Grid column -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-glass-martini deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Relaxing</h5>
                      <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 text-center">
                  <img class="img-fluid" src="img/image/a11 1.jpg"
                    alt="Sample image">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                  <!-- Grid row -->
                  <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-2">
                      <i class="far fa-2x fa-heart deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Beloved</h5>
                      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                        nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                  <!-- Grid row -->
                  <div class="row mb-3">

                    <!-- Grid column -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-bolt deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Rapid</h5>
                      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                        nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                  <!-- Grid row -->
                  <div class="row">

                    <!-- Grid column -->
                    <div class="col-2">
                      <i class="fas fa-2x fa-magic deep-purple-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                      <h5 class="font-weight-bold mb-3">Magical</h5>
                      <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                  </div>
                  <!-- Grid row -->

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </section>



        <footer class="page-footer font-small mdb-color lighten-3 pt-4">

          <!-- Footer Elements -->
          <div class="container">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                  <img src="img/image/a3.jpg" class="img-fluid" alt="">
                  <a href="">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                  <img src="img/image/tp3.jpg" class="img-fluid" alt="">
                  <a href="">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                  <img src="img/image/bat0.jpg" class="img-fluid" alt="">
                  <a href="">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                  <img src="img/image/tp7.jpg" class="img-fluid" alt="">
                  <a href="">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                  <img src="img/image/tp5.jpg" class="img-fluid" alt="">
                  <a href="">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                  <img src="img/image/a5.jpg" class="img-fluid" alt="">
                  <a href="">
                    <div class="mask rgba-white-light"></div>
                  </a>
                </div>

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
          <!-- Footer Elements -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="www.nan.ci" target="_blank"> Nanien 2.19</a>
          </div>
          <!-- Copyright -->

        </footer>
<!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
