
<?php
include '../Controller/ReservationC.php';
$reservationC = new reservationC();
$list = $reservationC->listreservation();
?>

   <head>
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
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
      <!-- header section end -->
      <!-- contact section start -->  
      <!-- services section start -->
      <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">table des Reservations</h4>
                                <h6 class="card-subtitle">ajouter la liste des reservations des materiaux dont vous avez besoin</h6>
                                    <h6 class="card-subtitle"></h6>
                                    <h6 class="card-title m-t-40"><i
                                            class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> </h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    
                                                   
                                                    <th scope="col">quantité</th>
                                                    <th scope="col">idmateriel</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php   foreach ($listreservation as $reservationC) { ?>
                                                <tr>
                                                    <th><?php echo $reservationC['quantité'];?></th>
                                                    <td><?php echo $reservationC['idmateriel'];?></td>
                                             
                              
                                                    <td>
                <form method="POST" action="Listreservationu.php">
                    <input type="submit" class="btn btn-success text-white" name="Modifier" value="Modifier">
                    <input type="hidden" value=<?PHP echo $reservationC['id']; ?> name="id">
                </form>
            </td>
            <td>
                <a href="Listreservationd.php?id=<?php echo $reservationC['id']; ?>">Supprimer</a>
            </td>
                                                </tr>
                                                
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    
                                   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
            <div class="see_bt"><a href="#">lire la suite</a></div>
         </div>
      </div>
      <!-- services section end -->
      <!-- footer section start --> 
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
      <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
      </script>
      <script>
         $(document).ready(function(){
             // Add minus icon for collapse element which is open by default
             $(".collapse.show").each(function(){
              $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
             });
             
             // Toggle plus minus icon on show hide of collapse element
             $(".collapse").on('show.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
             }).on('hide.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
             });
         });
      </script>
   </body>
</html>