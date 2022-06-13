<<?php


class utilisateur{
    public function getUser($data){
        $stmt = DB::connect()->prepare('SELECT * FROM utilisateur WHERE email = :email');
        $stmt->bindParam(':email', $data['email']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
      }
    
    

}