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
}
?>