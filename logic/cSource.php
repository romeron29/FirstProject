<?php
    include("../utils/functions.php");
    include("startSession.php");
    $_SESSION = getSession();
    $name = $_REQUEST["sourceName"];
    $url = $_REQUEST["url"]; 
    $categoryId = $_REQUEST["category"];   
    $userId = $_SESSION['id'];


    if($_POST['sourceName']){
        if(saveSource($url, $name, $categoryId, $userId)){
            header('Location: ../gui/source.php');
        }
    }
    else{
        header('Location: ../gui/newCategory.php');
    }

?>