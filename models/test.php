<?php
session_start();

class test{
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `test`(result,date, id_etudiant) VALUES (:result,sysdate(), :session)');
        $stmt->bindParam(':result', $data);
        $stmt->bindParam(':session', $_SESSION['id']);
        if($stmt->execute()){
            return 'test is created successfully';
          }
          else{
            return 'test was not created successfully';
          }
        
          $stmt = null;
    }
}
?>