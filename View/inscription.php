
<?php

include '../Controller/ClientC.php';
include '../Model/Client.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) &&
    isset($_POST["dob"])
) {
    if (
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["dob"])
    ) {
      $Role='client';
        $client = new Client(
            null,
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['address'],
            $_POST['dob'],
            sha1($_POST['password']),
            $_POST[$Role]
        );
        $clientC->addClient($client,$Role);
        header('Location:login.php');
    } else
        $error = "Missing information";
}


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

    <title>inscription</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

  

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>super&royal <em>Cars</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">acceuil
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

           


                <li class="nav-item "><a class="nav-link" href="about-us.php">A propos de nous</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">contacter nous</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">connection</a></li>
                <li class="nav-item active"><a class="nav-link" href="inscription.php">inscription</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>inscription</h4>
              <h2>Super&Royal Cars</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!------------------inscription---------->
    <div class="login">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="section-heading-center">
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-form">
                <form action="" method="POST" >
                  <div class="row">
                   
                   <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                    
                        <input name="firstName" type="text" class="form-control"  id="firstName"  placeholder="Nom de famille" required="">
                      </fieldset>
                    </div>
                      


                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="lastName" id="lastName" type="text" class="form-control"  placeholder="Prenom" required="">
                        </fieldset>
                      </div>

                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="address" id="address" type="text" class="form-control"  placeholder="adresse" required="">
                        </fieldset>
                      </div>


                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input type="number" name="dob" id="dob" class="form-control"   placeholder="Age" required="">
                      </fieldset>
                    </div>
                    

                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="password" type="password" class="form-control" id="password" placeholder="mot depasse" required="">
                      </fieldset>
                    </div>
                
                
               
                    
                    <div class="col-md-2">
                        <div class="section-center">
                      <fieldset>
                        <button  type="submit" value="Save" name="inscription" class="filled-button">inscription</button>
                      </fieldset>

                     
                    </div>
                   
                    </div>
                  </div>
                </form>
                <a href="login.php">deja j'ai un compte </a>
              
              </div>
             
            </div>
        
    
    <!--------------finconnexion---------->


 <!---------------connexionp---------->
    

    
   
    <!---------------finconnexionp---------->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
