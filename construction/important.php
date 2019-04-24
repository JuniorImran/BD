 <?php
							
			$nombre = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$nombre = $_POST["nombre"];
				
			}
			  
		?>


<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
  <title>Building agency</title>
  <link rel="icon" type="image/jpg" href="img/image/a10.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=deviCe-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/important.css" rel="stylesheet">
</head>
<body>
      <!-- Main navigation -->
      <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
          <div class="container">
            <a class="navbar-brand" href="#">Imran Building Agency</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto smooth-scroll">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Accueil
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Batiment.php" data-offset="90">Batiment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Travaux publique.php" data-offset="90">Travaux publics</a>
                </li>
              </ul>
              <!-- Social Icon  -->
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="fab fa-faCebook-f light-green-text-2"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="fab fa-twitter light-green-text-2"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="fas fa-instagram light-green-text-2"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
        <!-- Full Page Intro -->
        <div class="" style="background-image: url('img/image/a6.jpg'); background-repeat: no-repeat; background-size: cover;background-attachment: fixed;background-position: Center Center;">
        	<br>
        	<br>
        	<br>
        	<table class="table">
        		<div>
					<h1 class="white-text">Batiment </h1>
				</div>
				  <thead class="black white-text">
				    <tr>
				      <th scope="col">Construction</th>
				      <th scope="col">Détails</th>
				      <th scope="col">Nombre manoeuvre</th>
				      <th scope="col">Delai d'achèvement</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/bat12.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td >Duplex contenant deux salons, cinq chambres, trois salles de bain,<br> une cuisine, un balcon de 10m<br> de large, deux veranda et une<br> piscine de 15x7m.</td>
				      <td>10 à 20 <br> 21 à 30 <br> 31 à 40 <br> 41 à 50<br> 51 à 60 <br> 61 à 70 <br> 71 à 80<br> 81 à 90 </td>
				      <td>Ce projet finira dans environs 2ans 1mois<br>Ce projet finira dans environs 1an 10mois <br> Ce projet finira dans environs 1an 6mois <br>Ce projet finira dans environs 1ans 2mois<br>Ce projet finira dans environs 1an 1mois <br>Ce projet finira dans environs 9mois <br>Ce projet finira dans environs 5mois<br> Ce projet finira dans environs 2mois </td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/bat10.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Triplex de trois salons, sept chambres, quatres salles de bain,<br> une grande cuisine, une veranda, deux balcons,<br> une dalle de 15m² et une piscine de 18x8m.</td>
				      <td>20 à 31 <br> 31 à 40 <br> 41 à 50 <br> 51 à 60<br> 61 à 70 <br> 71 à 81 <br> 80 à 90<br> 91 à 100 </td>
				      <td>Ce projet finira dans environs 2ans 6mois<br>Ce projet finira dans environs 3ans <br> Ce projet finira dans environs 2ans 4mois <br>Ce projet finira dans environs 2ans <br>Ce projet finira dans environs 1an 5mois <br>Ce projet finira dans environs 1an <br>Ce projet finira dans environs 7mois<br> Ce projet finira dans environs 5mois </td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/bat6.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Domaine de huits chambres et deux salon, une grande cuisine<br> une salle de bain dans chaque chambre et une autre principale<br> piscine de 15x6m au dessus sur la dalle.</td>
				      <td>10 à 20 <br> 21 à 40 <br> 41 à 60 <br> 61 à 80<br> 81 à 100 <br> 101 à 120 <br> 121 à 145<br> 146 à 200 </td>
				      <td>Ce projet finira dans environs 2ans 1mois<br>Ce projet finira dans environs 1an 6mois <br> Ce projet finira dans environs 1an <br>Ce projet finira dans environs 9 mois <br>Ce projet finira dans environs 5mois <br>Ce projet finira dans environs 4mois <br>Ce projet finira dans environs 3mois<br> Ce projet finira dans environs 2mois 10jours </td>
				    </tr>
				    <tr id="f" class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/bat11.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Building siamois de onze, neuf et treize étages de<br> chaque coté 4 maisons de 3 pieCes par niveaux soit 72<br> au totals avec cinq asCenCeurs. <br> Un rez-de-chaussé composé d'un magasins Deux balcons de 4m<br> de large sur chaque faCette du bulding.<br> Un parking de 200m².</td>
				      <td>25 à 50 <br> 51 à 60 <br> 61 à 80 <br> 81 à 100<br> 101 à 120 <br> 121 à 140 <br> 141 à 160<br> 161 à 200 </td>
				      <td>Ce projet finira dans environs 4ans<br>Ce projet finira dans environs 3ans 5mois <br> Ce projet finira dans environs 2ans 10mois <br>Ce projet finira dans environs 2ans <br>Ce projet finira dans environs 1an 5mois <br>Ce projet finira dans environs 1an 1mois <br>Ce projet finira dans environs 8mois<br> Ce projet finira dans environs 5mois </td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/bat9.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Batiment construit sur 500m² constitué de cinq étages avec<br> six appartement de trois pieCes par niveaux soit vingts appartement<br> et un rez-de-chuassé composé de 4 magasins.<br> Deux balcons de 5m de large sur chaque coté de l'immeuble.<br> Un préaux de 500m² au dessus de l'immeuble</td>
				      <td>20 à 30 <br> 21 à 40 <br> 31 à 60 <br> 61 à 90<br> 91 à 130 <br> 131 à 159 <br> 160 à 180<br> 180 à 200 </td>
				      <td>Ce projet finira dans environs 2ans<br>Ce projet finira dans environs 2ans 9mois <br> Ce projet finira dans environs 2ans 4mois <br>Ce projet finira dans environs 1an 10mois <br>Ce projet finira dans environs 1an 4mois <br>Ce projet finira dans environs 13mois <br>Ce projet finira dans environs 7mois<br> Ce projet finira dans environs 3mois </td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/bat14.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Huit gigantesques tour dont deux de 20 étages,<br>  une de 45 étages, une de 115 étages, deux de 140 étages<br>  une de 160 étages et enfin une de 200 étages.<br>  Elles sont composées de 7 bureaux de 2 pièCes<br>  et un hall par niveaux. un parking sous-terrain de 500m²<br>  sous chaque Tour et une dalle capable d'accueillir 1 hélicoptère.</td>
				      <td>50 à 100 <br> 101 à 140 <br> 141 à 169 <br> 170 à 191<br> 192 à 229 <br> 230 à 280 <br> 281 à 345<br> 346 à 400<br> 401 à 460 <br> 461 à 530 </td>
				      <td>Ce projet finira dans environs 8ans 9mois<br>Ce projet finira dans environs 7ans 5mois<br> Ce projet finira dans environs 6ans 6mois <br>Ce projet finira dans environs 5ans <br>Ce projet finira dans environs 4an 5mois <br>Ce projet finira dans environs 3an 3mois <br>Ce projet finira dans environs 2ans 9mois<br> Ce projet finira dans environs 2ans <br>Ce projet finira dans environs 1an 6mois  <br> Ce projet finira dans environs 9mois </td>
				     </tr>
				  </tbody>
				</table>
				<table class="table">
        		<div>
					<h1 class="white-text">Travaux publics </h1>
				</div>
				  <thead class="black white-text">
				    <tr>
				      <th scope="col">Construction</th>
				      <th scope="col">Détails</th>
				      <th scope="col">Nombre manoeuvre</th>
				      <th scope="col">Delai d'achèvement</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/tp12.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td >Le projet entier est constitué de trois parties:<br> la partie Nord longue de 2,7 km en 2x2 voies auxquelles<br> s'ajoute une digue de 400 m. le pont, long de 1,5 km en 2x3 voies,<br> d'une largeur de 28 m dont 3 m de trottoir, et dont les<br> fondations vont de 30 m à 80 m de profondeur,<br> relie une digue à une rive. la partie Sud, longue de 2 km en 2x3 voies.</td>
				      <td>80 à 120 <br> 121 à 160 <br> 161 à 180 <br> 181 à 200<br> 201 à 241 <br> 241 à 280 <br> 281 à 320<br> 321 à 360 </td>
				      <td>Ce projet finira dans environs 5ans 9mois<br>Ce projet finira dans environs 4an 10mois <br> Ce projet finira dans environs 4ans <br>Ce projet finira dans environs 3ans 2mois<br>Ce projet finira dans environs 2ans 4mois <br>Ce projet finira dans environs 1an 9mois <br>Ce projet finira dans environs 1an 2 mois<br> Ce projet finira dans environs 12mois.</td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/tp15.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Elle comporte deux chaussées à sens unique, séparées par<br> une double glissière de sécurité. chaque chaussée comporte<br> une ou plusieurs voies de circulation, ainsi qu'une bande<br> d'arrêt d'urgenCe sur le côté extérieur de Celle-ci, laquelle<br> est en général également bordée par une glissière de sécurité qui<br> permet de s'arrêter en cas d'urgenCe sans gêner la circulation.</td>
				      <td>50 à 80 <br> 81 à 100 <br> 101 à 130 <br> 131 à 160<br> 161 à 190 <br> 191 à 220 <br> 221 à 250<br> 251 à 280 </td>
				      <td>Ce projet finira dans environs 2ans 8mois<br>Ce projet finira dans environs 2ans 4mois <br> Ce projet finira dans environs 2ans <br>Ce projet finira dans environs 1an 8mois <br>Ce projet finira dans environs 1an 4mois <br>Ce projet finira dans environs 1an <br>Ce projet finira dans environs 8mois<br> Ce projet finira dans environs 4mois </td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/tp20.jpg" height="220px" width="240px" border-radius="10px"></a></th>
				      <td>Il s’étend sur 450 ha, dont 256 ha de terre-pleins et offre plus<br> de 8 km linéaires de quai. Il peut accueillir et traiter jusqu’à<br> 40 navires à la fois. Il comprend un port de commerCe,<br> un port de pêche, un port de plaisanCe.Il est doté d’un réseau ferroviaire,<br> d’une longueur de 17410 m, qui longe la clôture du port .</td>
				      <td>40 à 90 <br> 91 à 130 <br> 131 à 180 <br> 181 à 230<br> 231 à 280 <br>281 à 330 <br> 331 à 380<br> 381 à 430<br> 500 à 600<br> 601 à 700<br> 701 à 800 </td>
				      <td>Ce projet finira dans environs 10ans 4mois<br>Ce projet finira dans environs 9ans 9mois <br> Ce projet finira dans environs 9ans 2mois <br>Ce projet finira dans environs 8ans 7mois <br>Ce projet finira dans environs 8ans <br>Ce projet finira dans environs 7ans 5mois <br>Ce projet finira dans environs 6ans 10mois<br> Ce projet finira dans environs 6ans 3mois <br> Ce projet finira dans environs 4ans 8mois <br> Ce projet finira dans environs 3ans <br> Ce projet finira dans environs 1an 11mois</td>
				    </tr>
				    <tr id="f" class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/tp9.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Stade de forme ovoïde 115 000 plaCes, compte trois niveaux<br> de gradins Il est à ciel ouvert sur sa majeure partie.<br> Un toit couvre la tribune des loges présidentielles et des officiels,<br> qui représente 41 % de la surfaCe des gradins. <br>L'aire de jeu mesure 105 mètres de long sur une largeur de 68 mètres.<br> Le stade couvre une surfaCe totale de 55 000 mètres carrés, soit 250<br> mètres de long sur 220 mètres de large</td>
				      <td>40 à 90 <br> 91 à 130 <br> 131 à 180 <br> 181 à 230<br> 231 à 280 <br>281 à 330 <br> 331 à 380<br> 381 à 430<br></td>
				      <td>Ce projet finira dans environs 5ans<br>Ce projet finira dans environs 4ans 6mois <br> Ce projet finira dans environs 4ans <br>Ce projet finira dans environs 3ans 6mois <br>Ce projet finira dans environs 3ans <br>Ce projet finira dans environs 2ans 6mois <br>Ce projet finira dans environs 2ans<br> Ce projet finira dans environs 1an 6mois </td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/tp19.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Aéroport un qui s’étend sur 140 km² et inclut une cité logistique,<br> une cité de l’aviation, une zone commerciale et résidentielle et une<br> cité du golf capable d'accueillir 3000 avions. Avec en son seins 3 terminal.<br> Un Hall mesure environ 800 mètres de long et est relié à l'aérogare<br> N°1 par un long souterrain de 300 mètres contenant des tunnels<br> roulants (navettes). avec 15 000 m2 de surfaCe commerciale<br> ont permis de doubler l'espaCe marchand de l'aéroport.</td>
				      <td>100 à 200 <br> 201 à 300 <br> 301 à 400 <br> 401 à 500<br> 501 à 600 <br>601 à 700 <br> 701 à 800<br> 801 à 900<br>1000 à 1500 <br> 1501 à 2000<br> 2501 à 3000<br></td>
				      <td>Ce projet finira dans environs 10ans<br>Ce projet finira dans environs 9ans 6mois <br> Ce projet finira dans environs 9ans <br>Ce projet finira dans environs 8ans 6mois <br>Ce projet finira dans environs 8ans <br>Ce projet finira dans environs 7ans 6mois <br>Ce projet finira dans environs 7ans<br> Ce projet finira dans environs 5ans 4mois<br> Ce projet finira dans environs 4ans 2mois <br>Ce projet finira dans environs 3ans<br> Ce projet finira dans environs 2an 10mois </td>
				    </tr>
				    <tr class="white-text">
				      <th scope="row"><a href="#!"><img src="img/image/tp10.jpg" height="180px" width="240px" border-radius="10px"></a></th>
				      <td>Un échangeur pluridimensionnel à turbine simplifiée et<br> Chaque chaussée convergente disposé de deux sorties, une pour<br> chaque sens de l'autoroute croisante. Les voies en provenanCe des<br> deux directions de la route croisante convergent avant de<br> constituer une bande de lanCement unique. Composé essentiellement<br> de 2 grandes voies de circulation qui se superposent<br> dont la plus haute culmine à 37 mètres, long l'une de 2,km et l'autre de 3km.<br> Rélié par deux petites voies formant des arcs et un rond point<br> de 500m de diamètre.</td>
				      <td>50 à 70 <br> 71 à 90 <br> 91 à 110 <br> 111 à 130<br> 131 à 150 <br> 151 à 170 <br> 171 à 190<br> 191 à 210 </td>
				      <td>Ce projet finira dans environs 4ans<br>Ce projet finira dans environs 3ans 6mois<br> Ce projet finira dans environs 3ans<br>Ce projet finira dans environs 2ans 6mois <br>Ce projet finira dans environs 2ans <br>Ce projet finira dans environs 1an 6mois <br>Ce projet finira dans environs 1an<br> Ce projet finira dans environs 6mois</td>
				     </tr>
				  </tbody>
				</table>
        </div>
        <!-- Full Page Intro -->
      </header>
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
  <script type="text/javascript" src="js/z(importan).js"></script>
</body>
</html>