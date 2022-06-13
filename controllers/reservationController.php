
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
                    'state'    => "En attend",
                );
                
                $result = reservation::add($data);
                if($result == 'ok'){
                    header('location: AcueilleEtudiant');
                }
                else{
                    echo "error";
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

        public function confirmation(){
          if(isset($_POST['valide'])){
              $data = array(
                'state'   => "valide",
                'id' => $_POST['id']
              );
              $result = reservation::update($data);
              if($result === 'ok'){
                  header('location: reservation');
              }else{
                  echo $result;
              }
          }
      }

      public function getCountReserve(){
        
        $etudiant = reservation::getCountReserve();
        return $etudiant; 
    }
     
 }
?>