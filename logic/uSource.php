<?php
include("../utils/functions.php");
include("startSession.php");
$_SESSION = getSession();

$id = $_REQUEST['id'];
$name = $_REQUEST["name"];
$url = $_REQUEST["url"]; 
$categoryId = $_REQUEST["category"];   

    if($_POST['id']){
        updateSource($id,$url, $name, $categoryId);
        header('Location: ../gui/source.php');
    }
    
?>