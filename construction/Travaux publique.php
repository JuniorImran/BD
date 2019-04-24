<?php  
require'traitement/database.php';
session_start();
if (empty($_SESSION['use'])) {
	header("location:inscription.php");
}else{

	}



?>
<!DOCTYPE html>
<html>
<head lang="fr">
	<title>Travaux publics</title>
	<link rel="icon" type="image/jpg" href="img/image/a10.jpg">
	  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/tpbat.css" rel="stylesheet">

</head>
<body>

              <!-- Main navigation -->
              <header>
                <!--Navbar-->
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                  <div class="container">
                    <a class="navbar-brand" href="#">
                      <strong>Travaux publics</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Accueil
                            <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="Batiment.php">Batiment</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="traitement/deconnexion.php">Se deconnecter</a>
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
                <!-- Full Page Intro -->
                <div class="view" style="background-image: url('img/image/tp1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                  <!-- Mask & flexbox options-->
                  <div class="mask rgba-gradient align-items-center">
                    <!-- Content -->
                    <div class="container">
                      <!--Grid row-->
                      <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                          <h1 class="h1-responsive font-weight-bold mt-sm-5">Imran Building agency au coeur de vos constructions</h1>
                          <hr class="hr-light">
                          <h6 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt
                          dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae
                          iste.</h6>
                          <?php 
		                      $db= Database::connect();
		                      $recup = $db -> prepare("SELECT * FROM  user WHERE id= ?");
		                      $recup -> execute(array($_SESSION['use']));
		                      $affiche = $recup-> fetch();
		                   ?>
                          <a class="btn btn-outline-white"><?php echo $affiche['nom']  ?></a>
                          <a class="btn btn-outline-white"><?php echo $affiche['contact']  ?></a>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                          <img src="" alt="" class="img-fluid">
                        </div>
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
              <!-- Main navigation -->
              <!--Main Layout-->
              <main>
                <div class="container">
                  <!--Grid row-->
                  <div class="row py-5">
                    <!--Grid column-->
                    <div class="col-md-12 text-center">
                      <div class="row">
				          <div class="card col-lg-4 col-md-6 col-sm-12" >
				          <!-- Card image -->
				              <div class="view overlay">
				                <img class="card-img-top" src="img/image/tp12.jpg" alt="Card image cap">
				                <a>
				                  <div class="mask rgba-white-slight"></div>
				                </a>
				              </div>

				              <!-- Card content -->
				              <div class="card-body elegant-color white-text rounded-bottom">

				                <!-- Social shares button -->
				                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
				                <!-- Title -->
				                <h4 class="card-title">Pont</h4>
				                <hr class="hr-light">
				                <!-- Text -->
				                <p class="card-text white-text mb-4">Le projet entier est constitué de trois parties: la partie Nord longue de 2,7 km en 2x2 voies auxquelles s'ajoute une digue de 400 m. le pont, long de 1,5 km en 2x3 voies, d'une largeur de 28 m dont 3 m de trottoir, et dont les fondations vont de 30 m à 80 m de profondeur, relie une digue à une rive. la partie Sud, longue de 2 km en 2x3 voies.
				                </p>
				                <!-- Link -->
				                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

				              </div>

				            </div>
				            <div class="card col-lg-4 col-md-6 col-sm-12" >
				          <!-- Card image -->
				              <div class="view overlay">
				                <img class="card-img-top" src="img/image/tp15.jpg" alt="Card image cap">
				                <a>
				                  <div class="mask rgba-white-slight"></div>
				                </a>
				              </div>

				              <!-- Card content -->
				              <div class="card-body elegant-color white-text rounded-bottom">

				                <!-- Social shares button -->
				                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
				                <!-- Title -->
				                <h4 class="card-title">Autoroute</h4>
				                <hr class="hr-light">
				                <!-- Text -->
				                <p class="card-text white-text mb-4">Elle comporte deux chaussées à sens unique, séparées par une double glissière de sécurité. chaque chaussée comporte une ou plusieurs voies de circulation, ainsi qu'une bande d'arrêt d'urgence sur le côté extérieur de celle-ci, laquelle est en général également bordée par une glissière de sécurité qui permet de s'arrêter en cas d'urgence sans gêner la circulation.</p>
				                <!-- Link -->
				                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

				              </div>

				            </div>
				            <div class="card col-lg-4 col-md-6 col-sm-12" >
				          <!-- Card image -->
				              <div class="view overlay">
				                <img class="card-img-top" src="img/image/tp20.jpg" alt="Card image cap">
				                <a>
				                  <div class="mask rgba-white-slight"></div>
				                </a>
				              </div>

				              <!-- Card content -->
				              <div class="card-body elegant-color white-text rounded-bottom">

				                <!-- Social shares button -->
				                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
				                <!-- Title -->
				                <h4 class="card-title">Port</h4>
				                <hr class="hr-light">
				                <!-- Text -->
				                <p class="card-text white-text mb-4">Il s’étend sur 450 ha, dont 256 ha de terre-pleins et offre plus de 8 km linéaires de quai. Il peut accueillir et traiter jusqu’à 40 navires à la fois.<br> Il comprend un port de commerce, un port de pêche, un port de plaisance.Il est doté d’un réseau ferroviaire, d’une longueur de 17410 m, qui longe la clôture du port .</p>
				                <!-- Link -->
				                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

				              </div>
				            </div>
				            <div class="card col-lg-4 col-md-6 col-sm-12" >
				          <!-- Card image -->
				              <div class="view overlay">
				                <img class="card-img-top" src="img/image/tp9.jpg" alt="Card image cap">
				                <a>
				                  <div class="mask rgba-white-slight"></div>
				                </a>
				              </div>

				              <!-- Card content -->
				              <div class="card-body elegant-color white-text rounded-bottom">

				                <!-- Social shares button -->
				                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
				                <!-- Title -->
				                <h4 class="card-title">Stade</h4>
				                <hr class="hr-light">
				                <!-- Text -->
				                <p class="card-text white-text mb-4">Stade, de forme ovoïde 115 000 places, compte trois niveaux de gradins Il est à ciel ouvert sur sa majeure partie.<br> Un toit couvre la tribune des loges présidentielles et des officiels, qui représente 41 % de la surface des gradins.L'aire de jeu mesure 105 mètres de long sur une largeur de 68 mètres.<br> Le stade couvre une surface totale de 55 000 mètres carrés, soit 250 mètres de long sur 220 mètres de large.</p>
				                <!-- Link -->
				                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

				              </div>

				            </div>
				            <div class="card col-lg-4 col-md-6 col-sm-12" >
				          <!-- Card image -->
				              <div class="view overlay">
				                <img class="card-img-top" src="img/image/tp19.jpg" alt="Card image cap">
				                <a>
				                  <div class="mask rgba-white-slight"></div>
				                </a>
				              </div>

				              <!-- Card content -->
				              <div class="card-body elegant-color white-text rounded-bottom">

				                <!-- Social shares button -->
				                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
				                <!-- Title -->
				                <h4 class="card-title">Aéroport</h4>
				                <hr class="hr-light">
				                <!-- Text -->
				                <p class="card-text white-text mb-4">Aéroport un qui s’étend sur 140 km² et inclut une cité logistique, une cité de l’aviation, une zone commerciale et résidentielle et une cité du golf capable d'accueillir 3000 avions. Avec en son seins 3 terminal.<br> Un Hall  mesure environ 800 mètres de long et est relié à l'aérogare N°1 par un long souterrain de 300 mètres contenant des tunnels roulants (navettes). avec 15 000 m2 de surface commerciale ont permis de doubler l'espace marchand de l'aéroport.</p>
				                <!-- Link -->
				                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

				              </div>

				            </div>
				            <div class="card col-lg-4 col-md-6 col-sm-12" >
				          <!-- Card image -->
				              <div class="view overlay">
				                <img class="card-img-top" src="img/image/tp10.jpg" alt="Card image cap">
				                <a>
				                  <div class="mask rgba-white-slight"></div>
				                </a>
				              </div>

				              <!-- Card content -->
				              <div class="card-body elegant-color white-text rounded-bottom">

				                <!-- Social shares button -->
				                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
				                <!-- Title -->
				                <h4 class="card-title">Echangeur</h4>
				                <hr class="hr-light">
				                <!-- Text -->
				                <p class="card-text white-text mb-4">Un échangeur pluridimensionnel à turbine simplifiée et Chaque chaussée convergente disposé de deux sorties, une pour chaque sens de l'autoroute croisante.<br> Les voies en provenance des deux directions de la route croisante convergent avant de constituer une bande de lancement unique.<br> Composé essentiellement de 2 grandes voies de circulation qui se superposent dont la plus haute culmine à 37 mètres, long l'une de 2,km et l'autre de 3km. Rélié par deux petites voies formant des arcs et un rond point de 500m de diamètre.</p>
				                <!-- Link -->
				                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

				              </div>

				            </div>
				        </div>
                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->
                </div>
              </main>
              
              <!-- Footer -->
				<footer class="page-footer font-small special-color-dark pt-4">

				    <!-- Footer Elements -->
				    <div class="container">

				      <!--Grid row-->
				      <div class="row">

				        <!--Grid column-->
				        <div class="col-md-6 mb-4">

				          <!-- Form -->
				          <form class="form-inline">
				            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
				            <i class="fas fa-search" aria-hidden="true"></i>
				          </form>
				          <!-- Form -->

				        </div>
				        <!--Grid column-->

				        <!--Grid column-->
				        <div class="col-md-6 mb-4">

				          <form class="input-group">
				            <input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
				            <div class="input-group-append">
				              <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
				            </div>
				          </form>

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
        <!--Main Layout-->
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