<?php
class contact{


    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `Contact`(nom,email,sujet,message) VALUES (:nom,:email,:sujet,:message)');
        $stmt->bindParam(':nom',   $data['nom']);
        $stmt->bindParam(':email',  $data['email']);
        $stmt->bindParam(':sujet',    $data['sujet']);
        $stmt->bindParam(':message',  $data['message']);
        if($stmt->execute()){
            return 'contact is created successfully';
          }
          else{
            return 'contact was not created successfully';
          }
        
          $stmt = null;
    }
}

?>