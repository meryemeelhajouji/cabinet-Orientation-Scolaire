<?php

class users{

static public function getAll(){
    $stmt = Db::connect()->prepare('SELECT * FROM `utilisateur` WHERE role="etudiant"' );
    $stmt->execute();
    return $stmt->fetchAll();
   
}
}?>