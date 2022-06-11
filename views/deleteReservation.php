<?php
    if(isset($_POST['id'])){
        $exitEtudiant = new reservationController();
        $exitEtudiant->deleteReservation();
      }
?>