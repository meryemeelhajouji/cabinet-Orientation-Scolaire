<?php


class test{

    static public function add($data){
        session_start();
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

    static public function deleteTest($data){
      $id= $data; 
      try{
          $query = 'DELETE FROM `test` WHERE id_test = :id ';
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