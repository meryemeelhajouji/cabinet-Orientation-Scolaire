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

    static public function getAll(){
      $stmt = Db::connect()->prepare('SELECT * FROM test INNER JOIN utilisateur ON test.id_etudiant = utilisateur.id_user; ' );
      $stmt->execute();
      return $stmt->fetchAll();
    
  }
}
?>