
<?php
  if(isset($_POST['inscrire'])){
    $newParent = new EtudiantController();
    $newParent->addEtudiants();
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MonParcour </title>

  <!-- Google Fonts -->
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
          <li><a class="nav-link scrollto active" href="Acueille">Accueil</a></li>
          <li><a class="nav-link scrollto" href="Acueille">A propos </a></li>
          <li><a class="nav-link scrollto" href="Acueille">Services</a></li>
          <li><a class="nav-link scrollto" href="Acueille">offer</a></li>
          <li><a class="nav-link scrollto" href="Acueille">Equipre</a></li>
          <li><a class="nav-link scrollto" href="login">Réserve</a></li>
          <li><a class="nav-link scrollto " href="test">Test d'orientation</a></li>

          <li><a class="nav-link scrollto" href="Acueille">Contact</a></li>
          <li><a class="getstarted scrollto" href="login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="Acueille">Accueil</a></li>
          <li>Inscription</li>
        </ol>
        <h2>Inscription</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="login d-flex justify-content-center align-items-center">
      <div class=" w-25 ">


        <div class=" text-center mt-5  mb-5">
          <h1 class=" fs-3 fw-bold m-5 pb-3 " style="border-bottom: #DD10C9 3px solid;">S'inscrire </h1>
        </div>



        <form action="#" method="POST">

<div class="mb-4">
  <input type="text" class="form-control  p-3 fw-bold " style="background: #f5f5f5 ;" id="email"
    name="email" value="" placeholder="  Email">

</div>
<div class="mb-4">
  <input type="text" class="form-control p-3  fw-bold " id="password" style="background: #f5f5f5 ;"
    name="nom" value="" placeholder="Nom d'utilisateur " id="exampleInputPassword1">

</div>
<div class="mb-4">
  <input type="password" class="form-control p-3  fw-bold " id="password" style="background: #f5f5f5 ;"
    name="password" value="" placeholder="mot de passe" id="exampleInputPassword1">

</div>
<div class="mb-4">
  <input type="password" class="form-control p-3  fw-bold " id="password" style="background: #f5f5f5 ;"
    name="confirmePassword" value="" placeholder="Confirmé mot de passe" id="exampleInputPassword1">

</div>
<button type="submit" class="btn   w-100 text-white text-uppercase  mt-3 " name="inscrire">
  S'inscrire
</button>
<div class="mt-3 text-center">

  <a class=" text-decoration-underline" style="color: #012970;" href="login"> <span>Login</span></a>
</div>
</form>
      </div>
    </div>

  </main><!-- End #main -->

  

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
  <script src="assets/js/main.js"></script>

</body>

</html>