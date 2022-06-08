<?php
session_start();
class utilisateurController{
    public function login(){
        if(isset($_POST['login'])){
          $data = array(
            'email' => $_POST['email'],
            'password' => $_POST['password'],
          );
          $user = new utilisateur;
          $data = $user->getUser($data);
          if(password_verify($_POST['password'],$data['password'])==true){
            $_SESSION['nom'] = $data['nom'];
            if($data['role'] == "admin"){
                header("location: dashboard");
            } else if($data['role'] == "etudiant")
            {
                // header("location: homeetudiant");  
            }else{
                header("location: login");
            }
        }
        }
      }


      public function logout(){
        
      session_unset();
      session_destroy();

	    header("location: login");
      }

}
?>