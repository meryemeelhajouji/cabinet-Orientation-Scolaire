<?php
class charge{
    
static public function getAllCharge(){
    $stmt = Db::connect()->prepare('SELECT * FROM `utilisateur` WHERE role="charge_orientation"' );
    $stmt->execute();
    return $stmt->fetchAll();
   
}
}?>