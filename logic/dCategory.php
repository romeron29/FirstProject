<?php
    include("../utils/functions.php");
    if($_GET['id']){
        if(deleteCategory($_GET['id'])){
            header('Location: ../gui/categories.php');
        }
    }
?>