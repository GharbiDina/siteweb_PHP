
<?php
session_start();
 
$bdd = new PDO('mysql:host=localhost;dbname=atelierphp;port=3307', 'root','');
 
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM client WHERE adress = ? AND password = ? ");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['password'] = $userinfo['password'];
         $_SESSION['adress'] = $userinfo['adress'];
         $_SESSION['Role'] = $userinfo['Role'];
            if ($userinfo['Role']== 'Admin')
            {
              echo "redirection admin";
              header("Location:../View/back/template/index.php");
            }
            else
         header("Location: profil.php?id=".$_SESSION['id']);
        
        
        }
        
        
        else {
           $erreur = "Mauvais mail ou mot de passe !";
        }

     } else {
        $erreur = "Tous les champs doivent être complétés !";
     }
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

    <title>connexion</title>

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
          <a class="navbar-brand" href="index.php"><h2>Super & Royal<em>Cars</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

              

             

                <li class="nav-item "><a class="nav-link" href="about-us.php">A propos de nous</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contacter nous</a></li>
                <li class="nav-item active"><a class="nav-link" href="login.php">connexion</a></li>
                <li class="nav-item"><a class="nav-link" href="inscription.php">inscription</a></li>
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
              <h4>univers où la passion prend vie</h4>
              <h2>connexion</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!------------------connexion---------->
    <div class="login">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="section-heading-center">
                
              </div>
            </div>
              <div class="col-md-4">
                 <div class="contact-form">
                <form id="contact" action="" method="post">
                  <div class="row">
                 <!---- <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                      </fieldset>
                    </div>---->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="mailconnect" type="text" class="form-control" id="mailconnect" placeholder="E-Mail Address" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="mdpconnect" type="password" class="form-control" id="mdpconnect" placeholder="mot depasse" required="">
                      </fieldset>
                    </div>
                  
                    
                    <div class="col-md-2">
                        
                       <fieldset>
                         <input type="submit" name="formconnexion" class="filled-button" value="Se connecter " />
                           <!-- <button type="submit" id="formconnexion" class="filled-button">connexion</button>-->
                        </fieldset>

                     
                    </div>
                    <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
                   
                    </div>
                  </div>
                </form>
               
                <a href="inscription.php">cree un compte </a>
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
