<?php
include("../utils/functions.php");
    if($_POST['categoryId']){
        updateCategory($_POST['categoryId'],$_POST['categoryName']);
        header('Location: ../gui/categories.php');
    }

?>