<?php
class testController{

    public function addTest($result){
      $result = test::add($result);
   
        if($result != 'test is created successfully'){
          echo 'error';
        }
    }

    public function getAllTest(){
        
      $test = test::getAll();
      return $test; 
  }
}



?>