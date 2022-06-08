<?php

class adminController{

    public function getAllusers(){
        
        $users = admin::getAll();
        return $users; 
    }
}?>