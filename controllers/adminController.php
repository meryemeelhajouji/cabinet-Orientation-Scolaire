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
        
        public function deleteAdmin(){
          if(isset($_POST['id'])){
            $data = $_POST['id'];
            $result = admin::deleteAdmin($data);
            if($result == 'ok'){
              header('location: admin');
            }
            else{
              echo $result;
            }
          }
        }  

      public function getOneAdmin(){
          if(isset($_POST['id'])){
              $data = array(
                  'id' => $_POST['id']
              );
          }
          $parent = admin::getOne($data);
          return $parent;
      }
      

        public function updateAdmin(){
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

      public function getCountUser(){
        
        $etudiant = admin::getCountUser();
        return $etudiant; 
    }

  }
    

?>