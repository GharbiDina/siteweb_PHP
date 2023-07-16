<?php
session_start();
 
$bdd = new PDO('mysql:host=localhost;dbname=atelierphp;port=3307', 'root','');
 
if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM client WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['firstName']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE client SET firstname = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newlast']) AND !empty($_POST['newlast']) AND $_POST['newlast'] != $user['lastName']) {
      $newlast = htmlspecialchars($_POST['newlast']);
      $insertlast = $bdd->prepare("UPDATE client SET lastName = ? WHERE id = ?");
      $insertlast->execute(array($newlast, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['adress']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE client SET adress = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE client SET password = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Mis a jour</title>

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
                      <a class="dropdown-item active" href="editionprofil.php">edition profil</a>
                      <a class="dropdown-item" href="payment.php">type de paiment</a>
                      <a class="dropdown-item " href="Reclamation.php">Reclamation</a>
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
           
           
            <h2>Mis a jour votre porofil</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
      
     <!-- <div align="center">
     
        

      <div class="send-message">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Mise a jour </h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            <form  action="" method="POST">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                  
                      <input type="text" name="newlast" class="form-control" placeholder="Nom de famille" value="<?php echo $user['lastName']; ?>" /><br /><br />

                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                  
                      <input type="text" name="newpseudo" class="form-control" placeholder="Prenom" value="<?php echo $user['firstName']; ?>" /><br /><br />

                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                  <input type="text" name="newmail" class="form-control"  placeholder="Mail" value="<?php echo $user['adress']; ?>" /><br /><br />
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                  <input type="password" name="newmdp1" class="form-control"  placeholder="nouveau Mot de passe" value="" /><br /><br />
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                  <input type="password" name="newmdp2" class="form-control"  placeholder="confirmer Mot de passe" value="" /><br /><br />
                  </fieldset>
                </div>
               
                
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit"  class="filled-button">Submit</button>
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
 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>