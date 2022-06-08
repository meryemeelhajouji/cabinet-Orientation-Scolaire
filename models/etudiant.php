<?php
class etudiant{
    
static public function getAlletudiant(){
    $stmt = Db::connect()->prepare('SELECT * FROM `utilisateur` WHERE role="etudiant"' );
    $stmt->execute();
    return $stmt->fetchAll();
   
}

static public function add($data){
    $stmt = DB::connect()->prepare('INSERT INTO `utilisateur`(nom,email,password,role) VALUES (:nom,:email,:password,:role)');
    $stmt->bindParam(':nom',   $data['nom']);
    $stmt->bindParam(':email',  $data['email']);
    $stmt->bindParam(':password',    $data['password']);
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