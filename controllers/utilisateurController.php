<?php
session_start();
class utilisateurController
{
  public function login()
    {
      if(isset($_POST['login'])){
            if(empty($_POST['email']) || empty($_POST['password'])){
      
              $_SESSION["message_error"] = "entre votre email et mot de passe.";
         
              }else 
              {
        
                    $data = array(
                      'email' => $_POST['email'],
                      'password' => $_POST['password'],
                    );
                    $user = new utilisateur;
                    $data = $user->getUser($data);
                    if($data == "dont exists"){
                      $_SESSION["message_error"] = "email n'est pas exists";
                    }else{
                              if(password_verify($_POST['password'],$data['password']))
                              {
                                        $_SESSION['nom'] = $data['nom'];
                                        $_SESSION['email'] = $data['email'];
                                        $_SESSION['id'] = $data['id_user'];

                                        header("location: dashboard");

                                        if($data['role'] == "admin")
                                        {
                                            header("location: dashboard");
                                        }
                                        else if($data['role'] == "etudiant")
                                        {
                                            header("location: AcueilleEtudiant");  
                                        }
                                    
                              }else{
                                $_SESSION["message_error"] = "email ou mot de passe incorrect";
                                
                              }
                     }          
               }

      } 
 
  }




}

?>