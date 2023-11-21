<?php 
    session_start();

    function chargeSession($id, $name, $role){
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name; 
        $_SESSION["role"] = $role; 
    }

    function getSession(){
        if(!empty($_SESSION["id"])){
            return $_SESSION;
        }  
    }

?>
