<?php
class contactController{

    public function addContact(){
        if(isset($_POST['contact'])){
          $data = array(
            'nom'   => $_POST['nom'],
            'email'    => $_POST['email'],
            'sujet'    => $_POST['sujet'],
            'message'    => $_POST['message'],
        );
            
            $result = contact::add($data);
              if($result == 'contact is created successfully'){
                header('location: Acueille');
              }
              else{
                echo $result;
              }
        
      
        }

}

    public function getAllContat(){
            
        $contact = contact::getAll();
        return $contact; 
    }
    
    public function deleteContact(){
        if(isset($_POST['id'])){
          $data = $_POST['id'];
          $result = contact::deleteContact($data);
          if($result == 'ok'){
            header('location: contact');
          }
          else{
            echo $result;
          }
        }
      }  

    



}
?>