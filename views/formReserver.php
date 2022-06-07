<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MonParcour </title>
 
</head>

<body>
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

</body>

</html>