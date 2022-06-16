<?php
if (isset($_POST['login'])) {
  $newuser = new utilisateurController();
  $users = $newuser->login();
}
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
      </nav>

    </div>
  </header>

  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="Acueille">Accueil</a></li>
          <li>Login</li>
        </ol>
        <h2>Login</h2>

      </div>
    </section>

    <div class="login d-flex justify-content-center align-items-center">
      <div class=" w-25 ">


        <div class=" text-center mt-5  mb-5">
          <h1 class=" fs-3 fw-bold m-5 pb-3 " style="border-bottom: #DD10C9 3px solid;">login </h1>
        </div>

        <?php 
            if(isset($_SESSION['message_error'])){

                echo "<div class='alert alert-danger' role='alert'>";
                echo  $_SESSION["message_error"];
            
                echo "</div>";
                $_SESSION["message_error"] = null;
            }      
     
     ?>

        <form action="#" method="POST">

          <div class="mb-4">
            <input type="text" class="form-control  p-3 fw-bold " style="background: #f5f5f5 ;" id="email" name="email" value="" placeholder="  Email" >

          </div>
          <div class="mb-4">
            <input type="password" class="form-control p-3  fw-bold " id="password" style="background: #f5f5f5 ;" name="password" value="" placeholder="mot de passe" id="exampleInputPassword1" >
          </div>

          <input type="checkbox" class="mb-4  " name="remember" /> se souvenir de moi
        

          <button type="submit" class="btn w-100 text-white text-uppercase  mt-5 " name="login">
            Connexion
          </button>
          <div class="mt-3 text-center">

            <a class=" text-decoration-underline" style="color: #012970;" href="inscrire">
              <span>S'inscrire</span></a>
          </div>
        </form>
      </div>
    </div>

  </main>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <script src="views/assets/js/main.js"></script>

</body>

</html>