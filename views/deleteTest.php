<?php
    if(isset($_POST['id'])){
        $exitEtudiant = new testController();
        $exitEtudiant->deleteTest();
      }
?>