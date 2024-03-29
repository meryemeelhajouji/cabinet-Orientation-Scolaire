<?php
$newuser = new utilisateurController();
if (!isset($_SESSION['nom'])) {
    header("location: login");
}
$data = new reservationController();
$reservation = $data->getAllReservation();

if (isset($_POST['valide'])) {
    $dataa = new reservationController();
    $dataa->confirmation();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="views/css/dashboard.css" />
    <title>Dashboard</title>
</head>

<body>
    <main>
        <div class="d-flex" id="dashboard">
            <div class="bg  " id="sidebar-dashboard">
                <a href="index.html" class="logo my-3   d-flex align-items-center">
                    <img src="views/img/logo.png" alt="">
                    <span>
                        <spam style="color: #e44aec;">Mon</spam>Parcour
                    </span>
                </a>
                <hr class="mb-3 ">
                <div class="list-group  d-flex ">

                    <a href="dashboard" class="list-group-item mx-2 p-2 border-0 my-2  rounded-3  fw-bold  fs-6  " style="background:#DD10C9 ;">
                        <img src="views/img/home.png"> Accueil</a>
                    <a href="testResult" class="list-group-item mx-2 fw-bold border-0 bg-transparent p-2">
                        <img src="views/img/test.png">Test </a>
                    <a href="etudiant" class="list-group-item mx-2 p-2 fw-bold  fs-6  border-0 bg-transparent my-2   ">
                        <img src="views/img/graduate-cap.png">Etudiants</a>
                    <a href="reservation" class="list-group-item mx-2 fw-bold  fs-6   border-0 my-2  rounded-3 p-2 ">
                        <img src="views/img/booking.png">Réservation</a>
                    <a href="contact" class="list-group-item mx-2 fw-bold  fs-6  border-0 my-2  rounded-3 p-2  ">
                        <img src="views/img/message.png"> Messages</a>
                    <a href="admin" class="list-group-item mx-2 border-0 fw-bold  fs-6   bg-transparent my-2 p-2 ">
                        <img src="views/img/user.png">Utilisateurs </a>
                    <a href="logout" class="list-group-item mx-2 border-0 fw-bold  fs-6  bg-transparent  mt-5 mb-2 ">
                        Se déconnecter <i class="fas fa-sign-out-alt"></i> </a>


                </div>
            </div>
            <div class="container-fluid px-4">
                <nav class="navbar navbar-expand-lg   py-1 px-4 cont ">
                    <div class="d-flex align-items-center">

                        <i class="fa fa-bars me-3 " id="menu-toggle"></i>
                        <h5>Réservation</h5>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <div class="nav-item ">
                            <form class="d-flex  justify-content-end mt-3 ">
                                <div class="fw-bold fs-4 m-3 ">
                                    <h5>Bonjour : <span><?php echo $_SESSION['nom'];  ?> </span></h5>
                                </div>


                            </form>
                        </div>
                    </div>

                </nav>
                <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Réservation </h1>

                    </div>
                    <div class=" table-responsive-sm table-responsive-md">
                        <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>Nom</th>
                                    <th>email</th>
                                    <th>tele</th>
                                    <th>offre</th>
                                    <th>message</th>
                                    <th>state</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($reservation as $reservation) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $reservation['nom'] ?></td>
                                        <td><?php echo $reservation['email'] ?></td>
                                        <td><?php echo $reservation['telephone'] ?></td>
                                        <td><?php echo $reservation['offre'] ?></td>
                                        <td><?php echo $reservation['message'] ?></td>
                                        <td><?php echo $reservation['state'] ?></td>
                                        <!-- <td><button class="bg-danger border-0 px-4 py-2 text-white">invalide</button></td> -->
                                        <td class="d-flex">
                                        <?php if($reservation['state']=="En attend"){?>
                                            <form action="#" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $reservation['id_reservation']; ?>">
                                                <button type="submit" name="valide" class="bg-info border-0 px-4 py-2 text-white mx-3">
                                                    Confirme
                                                </button>
                                            </form>
                                        <?php } ?>
                                            <form action="deleteReservation" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $reservation['id_reservation']; ?>">
                                                <button type="submit" class="bg-danger border-0 px-4 py-2 text-white ">
                                                    Refuse
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
                <script>
                    var el = document.getElementById("dashboard");
                    var toggleButton = document.getElementById("menu-toggle");
                    toggleButton.onclick = function() {
                        el.classList.toggle("toggled");
                    };
                </script>
    </main>

</body>

</html>