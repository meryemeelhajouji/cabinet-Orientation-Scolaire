<?php

class admin{

static public function getAll(){
    $stmt = Db::connect()->prepare('SELECT * FROM `utilisateur` WHERE role="admin"' );
    $stmt->execute();
    return $stmt->fetchAll();
   
}
}?>