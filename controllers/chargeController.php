<?php

class chargeController{

    public function getAllCharge(){
        
        $charge = charge::getAllCharge();
        return $charge; 
    }
}?>