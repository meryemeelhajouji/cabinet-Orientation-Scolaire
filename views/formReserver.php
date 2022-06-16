<?php

$newuser = new utilisateurController();
if (!isset($_SESSION['nom'])) {
  header("location: login");
}
$data = new reservationController();
$users = $data->addReservation();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MonParcour </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="views/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="views/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="views/assets/css/style.css" rel="stylesheet">
  <link href="views/assets/css/test.css" rel="stylesheet">
<style>
  form li{
    color:red !important;

  }
</style>
</head>

<body>
  <header id="header" class="header fixed-top mb-5">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="Acueille" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>
          <spam style="color: #e44aec;">Mon</spam>Parcour
        </span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="AcueilleEtudiant">Accueil</a></li>
          <li><a class="nav-link scrollto" href="AcueilleEtudiant">A propos </a></li>
          <li><a class="nav-link scrollto" href="AcueilleEtudiant">Services</a></li>
          <li><a class="nav-link scrollto" href="AcueilleEtudiant">offer</a></li>
          <li><a class="nav-link scrollto" href="AcueilleEtudiant">Equipre</a></li>
          <li><a class="nav-link scrollto" href="formReserver">Réserve</a></li>
          <li><a class="nav-link scrollto " href="Questionnaire">Test d'orientation</a></li>
          <li>
            <div class="dropdown show">
              <a class="btn border-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bonjour :<?php echo $_SESSION['nom'];  ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="profile">Profile</a>
                <a class="dropdown-item" href="logout"> Se déconnecter</a>
              </div>
            </div>
          </li>
        </ul>
        <i class="bi bi-listmobile-nav-toggle "></i>
      </nav>
    </div>
  </header>
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="Acueille">Accueil</a></li>
          <li>réserver</li>
        </ol>
        <h2>RÉSERVATION DE SÉANCE</h2>
      </div>
    </section>
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry">
              <h2 class="entry-title text-center mb-4">
                <a href="#">Réserver ta séance</a>
              </h2>
              <div class="entry-content">
                <form action="" method="post" class="php-email-form" 	 data-parsley-validate="">
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <input type="text" name="tele" id="tel" class="form-control" data-parsley-error-message="Entre votre Téléphoner" placeholder="Votre Téléphoner" required>
                      <span id="phoneid"></span> 
                    </div>
                    <div class="col-md-6">
                      <select name="offre" class="form-control" required>
                        <option value="">--choise un offre--</option>
                        <option value="dog">Integrale</option>
                        <option value="cat">Decouverte</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Votre message" required></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn" name="reserve">Réserver ma séance </button>
                    </div>
                  </div>
                </form>
              </div>
            </article>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Contact-Nous</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Adresse : MAKA RUE,laayoune</a></li>
                  <li><a href="#">Appelez-nous : +212 652 243 342<br>+212 578 254 445</a></li>
                  <li><a href="#">Envoyez-nous un email : monparcour@gmail.com<br>contact@gmail.com</a></li>
                  <li><a href="#">Heures d'ouverture Lundi - vendredi<br>9:00AM - 05:00PM</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="views/assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script> 
  <!-- <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" /> -->
</body>

</html>