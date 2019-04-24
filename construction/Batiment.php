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
	<title>Batiment</title>
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
              <strong>Batiment</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-conavbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
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
                          <a class="nav-link" href="Travaux publique.php">Travaux publics</a>
                        </li>
		                <li class="nav-item">
                          <a class="nav-link" href="#"></a>
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
                <div class="view" style="background-image: url('img/image/bat0.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
                  <!-- Mask & flexbox options-->
                  <div class="mask rgba-gradient align-items-center">
                    <!-- Content -->
                    <div class="container">
                      <!--Grid row-->
                      <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                          <h1 class="h1-responsive font-weight-bold mt-sm-5">Votre satisfaction, notre priorité...</h1>
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
			                <img class="card-img-top" src="img/image/bat12.jpg" alt="Card image cap">
			                <a>
			                  <div class="mask rgba-white-slight"></div>
			                </a>
			              </div>

			              <!-- Card content -->
			              <div class="card-body elegant-color white-text rounded-bottom">

			                <!-- Social shares button -->
			                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
			                <!-- Title -->
			                <h4 class="card-title">Duplex</h4>
			                <hr class="hr-light">
			                <!-- Text -->
			                <p class="card-text white-text mb-4">Duplex contenant deux salons, cinq chambres, trois salles de bain, une cuisine, un balcon de 10m de large, deux veranda et une piscine de 15x7m.</p>
			                <!-- Link -->
			                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

			              </div>

			            </div>
			            <div class="card col-lg-4 col-md-6 col-sm-12" >
			          <!-- Card image -->
			              <div class="view overlay">
			                <img class="card-img-top" src="img/image/bat10.jpg" alt="Card image cap">
			                <a>
			                  <div class="mask rgba-white-slight"></div>
			                </a>
			              </div>

			              <!-- Card content -->
			              <div class="card-body elegant-color white-text rounded-bottom">

			                <!-- Social shares button -->
			                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
			                <!-- Title -->
			                <h4 class="card-title">Triplex</h4>
			                <hr class="hr-light">
			                <!-- Text -->
			                <p class="card-text white-text mb-4">Triplex de trois salons, sept chambres, quatres salles de bain, une grande cuisine, une veranda, deux balcons, une dalle de 15m² et une piscine de 18x8m.</p>
			                <!-- Link -->
			                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

			              </div>

			            </div>
			            <div class="card col-lg-4 col-md-6 col-sm-12" >
			          <!-- Card image -->
			              <div class="view overlay">
			                <img class="card-img-top" src="img/image/bat6.jpg" alt="Card image cap">
			                <a>
			                  <div class="mask rgba-white-slight"></div>
			                </a>
			              </div>

			              <!-- Card content -->
			              <div class="card-body elegant-color white-text rounded-bottom">

			                <!-- Social shares button -->
			                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
			                <!-- Title -->
			                <h4 class="card-title">Maison</h4>
			                <hr class="hr-light">
			                <!-- Text -->
			                <p class="card-text white-text mb-4">Domaine de huits chambres et deux salon, une grande cuisine une salle de bain dans chaque chambre et une autre principale piscine de 15x6m au dessus sur la dalle.</p>
			                <!-- Link -->
			                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

			              </div>
            			</div>
            			<br>
            			<br>
            		</div>

           	              <div class="row">
           	              	 <div class="card col-lg-4 col-md-6 col-sm-12" >
					          <!-- Card image -->
					              <div class="view overlay">
					                <img class="card-img-top" src="img/image/bat11.jpg" alt="Card image cap">
					                <a>
					                  <div class="mask rgba-white-slight"></div>
					                </a>
					              </div>

					              <!-- Card content -->
					              <div class="card-body elegant-color white-text rounded-bottom">

					                <!-- Social shares button -->
					                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
					                <!-- Title -->
					                <h4 class="card-title">Building</h4>
					                <hr class="hr-light">
					                <!-- Text -->
					                <p class="card-text white-text mb-4">Building siamois de onze, neuf et treize étages de chaque coté 4 maisons de 3 pieces par niveaux soit 72 au totals avec cinq ascenceurs. Un rez-de-chaussé composé d'un magasins Deux balcons de 4m de large sur chaque facette du bulding. Un parking de 200m².</p>
					                <!-- Link -->
					                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

					              </div>

					            </div>
					            <div class="card col-lg-4 col-md-6 col-sm-12" >
					          <!-- Card image -->
					              <div class="view overlay">
					                <img class="card-img-top" src="img/image/bat9.jpg" alt="Card image cap">
					                <a>
					                  <div class="mask rgba-white-slight"></div>
					                </a>
					              </div>

					              <!-- Card content -->
					              <div class="card-body elegant-color white-text rounded-bottom">

					                <!-- Social shares button -->
					                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
					                <!-- Title -->
					                <h4 class="card-title">Immeuble</h4>
					                <hr class="hr-light">
					                <!-- Text -->
					                <p class="card-text white-text mb-4">Batiment construit sur 500m² constitué de cinq étages avec six appartement de trois pieces par niveaux soit vingts appartement et un rez-de-chuassé composé de 4 magasins.<br> Deux balcons de 5m de large sur chaque coté de l'immeuble. Un préaux de 500m² au dessus de l'immeuble</p>
					                <!-- Link -->
					                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

					              </div>
					              

					            </div>
					            <div class="card col-lg-4 col-md-6 col-sm-12" >
					          <!-- Card image -->
					              <div class="view overlay">
					                <img class="card-img-top" src="img/image/bat14.jpg" alt="Card image cap">
					                <a>
					                  <div class="mask rgba-white-slight"></div>
					                </a>
					              </div>

					              <!-- Card content -->
					              <div class="card-body elegant-color white-text rounded-bottom">

					                <!-- Social shares button -->
					                <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a>
					                <!-- Title -->
					                <h4 class="card-title">Tour</h4>
					                <hr class="hr-light">
					                <!-- Text -->
					                <p class="card-text white-text mb-4">Huit gigantesques tour dont deux de 20 étages, une de 45 étages, une de 115 étages, deux de 140 étages une de 160 étages et enfin une de 200 étages. Elles sont composées de 7 bureaux de 2 pièces et un hall par niveaux.
					                un parking sous-terrain de 500m² sous chaque Tour et une dalle capable d'accueillir 1 hélicoptère.
					                </p>
					                <!-- Link -->
					                <a href="important.php" class="white-text d-flex justify-content-end"><h5>Plus d'Infos <i class="fas fa-angle-double-right"></i></h5></a>

					              </div>

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
				  <!-- Footer -->
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