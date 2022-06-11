<?php
    if(isset($_POST['id'])){
        $exitEtudiant = new EtudiantController();
        $exitEtudiant->deleteEtudiant();
      }
?>