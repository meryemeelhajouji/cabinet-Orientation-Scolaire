<?php 
if(isset($_SESSION['nom'])){
    if(isset($_POST['resultat'])){

        echo 'success';
    }else{
        echo'error';
    }
}else{
    echo 'vous étes pas connecté';
}
