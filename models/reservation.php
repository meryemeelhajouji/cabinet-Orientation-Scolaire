<?php
class reservation{
    
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `reservation`(nom,email,tele,offre,message) VALUES (:nom,:email,:tele,:offre,:message)');
        $stmt->bindParam(':nom',   $data['nom']);
        $stmt->bindParam(':email',  $data['email']);
        $stmt->bindParam(':tele',  $data['tele']);
        $stmt->bindParam(':offre',  $data['offre']); 
        $stmt->bindParam(':message',   $data['message']);
        if($stmt->execute()){
            return 'User is created successfully';
          }
          else{
            return 'User was not created successfully';
          }
         
          $stmt = null;
    }


}

?>