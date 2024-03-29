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

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Reclamation</title>

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
        <a class="navbar-brand" href="index.php">
          <h2>Super & Royal  <em>Car</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           

          <li class="nav-item "><a class="nav-link" href="profil.php?id=<?php echo $_SESSION['id']; ?>">Voitures</a></li>
                <li class="nav-item "><a class="nav-link" href="offres.php">Nos offres</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">services</a></li>
                
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="editionprofil.php">edition profil</a>
                      <a class="dropdown-item" href="payment.php">type de paiment</a>
                      <a class="dropdown-item active" href="Reclamation.php">Reclamation</a>
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
  <div class="page-heading about-heading header-text"
    style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
           
           
            <h2>Reclamer Vous</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="send-message">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Reclamation</h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address"
                      required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Submit</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!--<div class="col-md-4">
          <div class="left-content">

            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu
              consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia
              corporis ipsa voluptate corrupti.</p>

            <br>

            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>-->
      </div>
    </div>
  </div>

  <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
            <p>2023 Royal & super cars - invonter: <a href="https://github.com/dashboard/">Dina</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="contact-form">
            <form action="#" id="contact">
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Pick-up location" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Return location" required="">
                  </fieldset>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Return date/time" required="">
                  </fieldset>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Enter full name" required="">

              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Enter email address" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Enter phone" required="">
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Book Now</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>