<?php
    if(isset($_POST['id'])){
        $exitContact = new contactController();
        $exitContact->deleteContact();
      }
?>