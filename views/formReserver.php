<?php

$newuser = new utilisateurController();
if(!isset($_SESSION['nom'])){
  header("location: login");
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MonParcour </title>
  
  <link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">


  <link href="views/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="views/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  

  <link href="views/assets/css/style.css" rel="stylesheet">
<link href="views/assets/css/test.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto " href="test">Test d'orientation</a></li>

         
          <li>
          <div class="dropdown show">
                <a class="btn border-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bonjour :<?php  echo $_SESSION['nom'];  ?> 
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="profile">Profile</a>
                    <a class="dropdown-item" href="logout"> Se déconnecter</a>
                </div>
          </div>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
 </header><!-- End Header -->
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
                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                    </div>

                    <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Votre e-mail" required>
                    </div>

                    <div class="col-md-12">
                      <input type="text" class="form-control" name="Téléphoner" placeholder="Téléphoner" required>
                    </div>

                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Votre message"
                        required></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn">Réserver ma séance </button>
                    </div>

                  </div>
                </form>
              </div>

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

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
              </div><!-- End sidebar categories-->



            </div>

          </div>

        </div>
      </div>
    </section>

  </main>
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="views/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>