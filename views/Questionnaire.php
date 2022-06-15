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
          <li><a class="nav-link scrollto" href="#about">A propos </a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#offres">offer</a></li>
          <li><a class="nav-link scrollto" href="#équipe">Equipre</a></li>
          <li><a class="nav-link scrollto" href="formReserver">Réserve</a></li>
          <li><a class="nav-link scrollto " href="Questionnaire">Test d'orientation</a></li>

         
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

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="Acueille">Accueil</a></li>
        <li>Test d'orientation</li>
      </ol>
      <h2>Questionnaire</h2>

    </div>
  </section>

  <main id="main">
   
    <!-- ======= Questionnaire ======= -->
    <section id="values" class="values ">
      <div class="d-flex justify-content-center align-items-center w-100 p-3  ">

        <div class="   px-5 py-5  mb-1 border-1 style_card ">
          <div class="board-stepper fw-bold text-center d-flex justify-content-around align-items-center">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10">
                <ellipse id="Ellipse_270" data-name="Ellipse 270" cx="5.5" cy="5" rx="5.5" ry="5" fill="#DD10C9" />
              </svg>
              <div class="information">Informations</div>
            </div>
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 25">
                <circle id="Ellipse_271" data-name="Ellipse 271" cx="19.5" cy="19.5" r="19.5" fill="#f8f9fa"
                  stroke="#DD10C9" stroke-width=10 />
                <circle id="Ellipse_275" data-name="Ellipse 275" cx="5" cy="5" r="5" transform="translate(15 14)"
                  fill="#DD10C9" />
              </svg>
              <div class="information">Questionnaire</div>
            </div>
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10">
                <ellipse id="Ellipse_270" data-name="Ellipse 270" cx="5.5" cy="5" rx="5.5" ry="5" fill="#DD10C9" />
              </svg>
              <div class="information">Résultats</div>
            </div>
          </div>
          <div class="w-75 my-3 m-auto">

            <div class="fw-bold"><span id="score"></span>/2</div>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 4.17%" aria-valuenow="50"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <form>
            <div id="question" class="titre mt-4"></div>
            <div id="formulaire" class="d-flexflex-column text-center m-5 fw-bold fs-4">
            </div>
            <div class="d-flex justify-content-between">
              <button type="button" id="precedent" class="test border-0">Précedent</button>
              <button type="submit" class="test border-0">Suivant</button>
            </div>
          </form>
          <p> Il vous suffit de répondre le plus sérieusement possible aux questions proposées et le plus honnêtement
            possible aussi. Choisissez obligatoirement parmi le choix qui vous correspond le plus.</p>

        </div>

      </div>

      </div>

    </section>

  </main>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="views/assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  
</script>

  
</body>

</html>