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

    public function deleteEtudiant(){
      if(isset($_POST['id'])){
        $data = $_POST['id'];
        $result = etudiant::deleteEtudiant($data);
        if($result == 'ok'){
          header('location: etudiant');
        }
        else{
          echo $result;
        }
      }
    } 

    public function getOneEtudiant(){
      if(isset($_POST['id'])){
          $data = array(
              'id' => $_POST['id']
          );
      }
      $parent = admin::getOne($data);
      return $parent;
  }
  

    public function updateEtudiant(){
      if(isset($_POST['update'])){
          $data = array(
            'nom'   => $_POST['nom'],
            'prenom'    => $_POST['prenom'],
            'tele'    => $_POST['tele'],
            'adresse'    => $_POST['adresse'],
            'id' => $_POST['id']
          );
          $result = admin::update($data);
          if($result === 'ok'){
              header('location: admin');
          }else{
              echo $result;
          }
      }
  }

  
      

}?>