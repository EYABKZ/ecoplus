<?php

include '../Controller/ReservationC.php';

$error = "";

// create RESERVATION
$reservation = null;

// create an instance of the controller
$reservationC = new reservationC();
if
(isset($_POST["quantité"]) &&
isset($_POST["idmateriel"]) 
) {
    if (
        !empty($_POST["quantité"])&&
        !empty($_POST['idmateriel']) 
    ) {
        $reservation = new reservation(
            
            $_POST['quantité'],
            $_POST['idmateriel']
        
        );
        $reservationC->updatereservation($reservation, $_POST["id_reservation"]);
        header('Location:../view/ListeReservation.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">


<head><link rel="stylesheet" href="../backc.css">
    <!-- basic -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"></head>

<body>
<a href="../ecoplusfront/ressourcesnmaterielles.php">Back to ressources materielles</a>
  <!-- header section start -->
  <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="images/ecoplus.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-item nav-link" href="acceuil.html">ACCEUIL</a>
                  <a class="nav-item nav-link" href="qui sommes nous.html">QUI SOMMES NOUS?</a>
                  <a class="nav-item nav-link" href="forum.html">FORUM</a>
                  <a class="nav-item nav-link" href="pricing.html">FORMATION</a>
                  <a class="nav-item nav-link" href="evenement.html">EVENEMENTS</a>
                  <a class="nav-item nav-link" href="ressources materielles.html">RESSOURCES MATERIELLES</a>
                  <a class="nav-item nav-link" href="reclamation.html">RECLAMATION</a>
               </div>
            </div>
            <div class="login_menu">
               <a href="#"><img src="images/search-icon.png"></a>
            </div>
         </nav>
      </div>
      <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
               
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                        <h1 class="text-center text-uppercase font-bold mb-5">modifier les Matériaux reservés</h1>

                     <h2 class="text-muted text-center mb-4">Gérer Vos Réservations</h2>
                     < <nav>
    <!-- menu de navigation -->
  
          </nav>
   
                        <img src="../ecoplusfront/images/reservation.jpg" alt=".jpg" class="reservation" />
                        <style>
      .reservation {
  width: 100%;
  max-width: 500px;
  border: 2px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  margin: auto; /* ajouter cette ligne */
  margin-bottom: 20px; 

      }
    </style>
                        </div>
                    </div>
                  
               
                                    </div>
                                   
                                </div>
   
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
        
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
 
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <gauche>
        <h1>                 </h1>
        
        <h2>
            <a href="updateReservation.php">UPDATE Reservation</a>
        </h2>
    </center>
    <table
     border="1" align="left" width="70%">
     <thead>
    <tr>
    
    
    </tr>
  </thead>
     <style>
		table {
		  border-collapse: collapse;
		  width: 80%;
		}

		th, td {
		  text-align: center;
		  padding: 8px;
		}

		th {
		  background-color: #333;
		  color: #fff;
		}

		tr:nth-child(even) {
		  background-color: #f2f2f2;
		}

		tr:hover {
		  background-color: #ddd;
		}

		a {
		  color: #333;
		  text-decoration: none;
		}

		a:hover {
		  color: #fff;
		  background-color: #333;
		}
	</style>
        <tr>
            <th>nom du matériel que vous voulez modifier</th>
            <th>entrer le nombre</th>
            
            
        </tr>
        <?php
        foreach ($listreservation as $reservation) {
        ?>
            <tr>
                <td><?= $reservation['quantité']; ?></td>
           
                <td><?= $reservation['idmateriel']; ?></td>
            
                <td align="center">
                    <form method="POST" action="updateReservation.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $reservation['id_reservation']; ?> name="id_reservation">
                    </form>
                </td>
                <td>
                    <a href="updateReservation.php?id_reservation=<?php echo $reservation['id_reservation']; ?>">update</a>
                </td>
            </tr>
        <?php
        }
        ?>
        <style>
       
        .h1 {
  text-align: center;
  font-size: 2em;
  color: #333;
  margin: 1em 0;
}

      
   

.h2 {
  text-align: center;
  font-size: 1.5em;
  color: #666;
  margin: 0.5em 0;
}

 
.table {
  border-collapse: collapse;
  margin: 2em auto;
  width: 70%;
  font-size: 1.2em;
  color: #333;
  background-color: #f9f9f9;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
</style>
    
    </table>
    <div class="footer_section layout_padding">
         <div class="container">
            <div class="newsletter_section">
               <div class="newsletter_left">
                  <div class="footer_logo"><img src="images/ecoplus.png"></div>
               </div>
               <div class="newsletter_right">
                  <h5 class="newsletter_taital">Abonnement</h5>
                  <div class="subscribe_main">
                     <input type="text" class="mail_text" placeholder="Entrer votre adresse mail" name="text">
                     <div class="subscribe_bt"><a href="#">abonnez vous</a></div>
                  </div>
               </div>
            </div>
            <div class="footer_taital_main">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">ecolplus</h2>
                     <p class="ipsum_text"> votre meilleur choix pour un engagement environnemental concret</p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Menus</h2>
                     <div class="footer_links">
                        <ul>
                           <li><a href="index.html">ACCEUIL</a></li>
                           <li><a href="about.html">QUI SOMMES NOUS ?</a></li>
                           <li><a href="services.html">FORUM</a></li>
                           <li><a href="pricing.html">FORMATIONS</a></li>
                           <li><a href="testimonies.html">EVENEMENT</a></li>
                           <li><a href="contact.html">RESSOURCES MATERIELLES</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">liens utiles</h2>
                     <div class="footer_links">
                        <ul>
                           <li><a href="#">@facebook
                           </a></li>
                           <li><a href="#">@instagram</a></li>
                           <li><a href="#">@twitter</a></li>
                     
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Contactez nous</h2>
                     <div class="addres_link">
                        <ul>
                           <li><a href="#"><img src="images/map-icon.png"><span class="padding_left_10">Petite Ariana</span></a></li>
                           <li><a href="#"><img src="images/call-icon.png"><span class="padding_left_10">+00 1234567890</span></a></li>
                           <li><a href="#"><img src="images/mail-icon.png"><span class="padding_left_10">eco.plus@esprit.tn</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <h1 class="follow_text">suivez nous</h1>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->  
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
         </div>
      </div>
</body>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>User Display</title>
</head>

<body>
    <button><a href="../view/ListReservation.php">Revenir a la liste</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_reservation'])) {
        $reservation = $reservationC->showreservation($_POST['id_reservation']);

    ?>

      
    <?php
    }
    ?>
</body>

</html>