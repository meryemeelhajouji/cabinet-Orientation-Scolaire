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
            return 'reservation is created successfully';
          }
          else{
            return 'reservation was not created successfully';
          }
         
          $stmt = null;
    }

    static public function getAllReservation(){
      $stmt = Db::connect()->prepare('SELECT * FROM `reservation` ' );
      $stmt->execute();
      return $stmt->fetchAll();
     
  }
 
   
  static public function deleteReservation($data){
    $id= $data; 
    try{
        $query = 'DELETE FROM `reservation` WHERE id_reservation = :id ';
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