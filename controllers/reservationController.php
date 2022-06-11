
<?php
class reservationController
{

        public function addReservation(){
            if(isset($_POST['reserve'])){
                $data = array(
                    'nom'   => $_SESSION['nom'],
                    'email'    => $_SESSION['email'],
                    'tele'    => $_POST['tele'],
                    'offre'    => $_POST['offre'],
                    'message'    => $_POST['message'],
                );
                
                $result = reservation::add($data);
                if($result == 'reservation  is created successfully'){
                    header('location: admin');
                }
                else{
                    echo $result;
                }
            
        
            }

        }
       
        

        public function getAllReservation(){
        
            $reservation = reservation::getAllReservation();
            return $reservation; 
        }
    
        public function deleteReservation(){
            if(isset($_POST['id'])){
              $data = $_POST['id'];
              $result = reservation::deleteReservation($data);
              if($result == 'ok'){
                header('location: reservation');
              }
              else{
                echo $result;
              }
            }
          }  
     
        }
?>