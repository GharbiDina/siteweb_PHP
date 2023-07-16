<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Dealer Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Royal & Super <em>cars</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                

                <li class="nav-item "><a class="nav-link" href="profil.php?id=<?php echo $_SESSION['id']; ?>">Voitures</a></li>
                <li class="nav-item "><a class="nav-link" href="offres.php">Nos offres</a></li>
                <li class="nav-item active"><a class="nav-link" href="services.php">services</a></li>
                
                <li class="nav-item  dropdown ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="editionprofil.php">edition profil</a>
                      <a class="dropdown-item " href="payment.php">type de paiment</a>
                      <a class="dropdown-item" href="Reclamation.php">Reclamation</a>
                      <a class="dropdown-item" href="commande.php">Commandes</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="Deconnexion.php">Deconnecion</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-5-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Votre passion, votre budget, notre facilité de paiement</h4>
              <h2>viens bientôt</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   
    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

  </body>

</html>
