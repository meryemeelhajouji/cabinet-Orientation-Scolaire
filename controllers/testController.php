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

    public function deleteTest(){
      if(isset($_POST['id'])){
        $data = $_POST['id'];
        $result = test::deleteTest($data);
        if($result == 'ok'){
          header('location: testResult');
        }
        else{
          echo $result;
        }
      }
    }  
}



?>