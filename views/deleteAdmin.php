<?php
    if(isset($_POST['id'])){
        $exitEtudiant = new adminController();
        $exitEtudiant->deleteAdmin();
      }
?>

