<?php

class EtudiantController{

    public function getAlletudiant(){
        
        $etudiant = etudiant::getAlletudiant();
        return $etudiant; 
    }



    public function addEtudiants(){
        if(isset($_POST['inscrire'])){
          if($_POST['password'] == $_POST['confirmePassword']){
            $data = array(
                'nom'   => $_POST['nom'],
                'email'    => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'confirmePassword' => $_POST['confirmePassword'],
                'role'   => "etudiant",
            );
            
            $result = etudiant::add($data);
              if($result == 'User is created successfully'){
                header('location: login');
              }
              else{
                echo $result;
              }
          }
          else{
            echo 'password not matched';
          }
       
        }

}

  
      

}?>