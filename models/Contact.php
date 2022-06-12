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

    static public function getAll(){
        $stmt = Db::connect()->prepare('SELECT * FROM `contact`' );
        $stmt->execute();
        return $stmt->fetchAll();
      
    }

    static public function deleteContact($data){
        $id= $data; 
        try{
            $query = 'DELETE FROM `contact` WHERE id_contact = :id ';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            if($stmt->execute()){
                return 'ok';
            }else{
              echo"error";
            }
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
}

?>