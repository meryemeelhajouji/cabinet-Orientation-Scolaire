<?php

class UsersController{

    public function getAllusers(){
        
        $users = users::getAll();
        return $users; 
    }
}?>