<?php

class admin{

static public function getAll(){
    $stmt = Db::connect()->prepare('SELECT * FROM `utilisateur` WHERE role="admin"' );
    $stmt->execute();
    return $stmt->fetchAll();
   
}

static public function add($data){
    $stmt = DB::connect()->prepare('INSERT INTO `utilisateur`(nom,email,password,tele,adresse,role) VALUES (:nom,:email,:password,:tele,:adresse,:role)');
    $stmt->bindParam(':nom',   $data['nom']);
    $stmt->bindParam(':email',  $data['email']);
    $stmt->bindParam(':password',    $data['password']);
    $stmt->bindParam(':tele',  $data['tele']);
    $stmt->bindParam(':adresse',    $data['adresse']);
    $stmt->bindParam(':role',  $data['role']); 
    if($stmt->execute()){
        return 'User is created successfully';
      }
      else{
        return 'User was not created successfully';
      }
     
      $stmt = null;
}


}?>