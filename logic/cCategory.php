<?php
    include("../utils/functions.php");
    if($_POST['categoryName']){
        saveCategorie($_POST['categoryName']);
        header('Location: ../gui/categories.php');
    }
    else{
        header('Location: ../gui/newCategory.php');
    }

?>