<?php

class adminController{

    public function getAllusers(){
        
        $users = admin::getAll();
        return $users; 
    }



    public function addAdmin(){
        if(isset($_POST['add'])){
            $data = array(
                'nom'   => $_POST['nom'],
                'email'    => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'role'   => "admin",
                'adresse'    => $_POST['adresse'],
                'tele'    => $_POST['tele'],
            );
            
            $result = admin::add($data);
              if($result == 'User is created successfully'){
                header('location: admin');
              }
              else{
                echo $result;
              }
         
       
        }

}
}?>