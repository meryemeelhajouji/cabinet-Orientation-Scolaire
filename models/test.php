<?php

class test{
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `test`(result) VALUES (:result)');
        $stmt->bindParam(':result',   $data);
        
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