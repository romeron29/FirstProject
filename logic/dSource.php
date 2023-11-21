<?php
    include("../utils/functions.php");
    if($_GET['id']){
        if(deleteSource($_GET['id'])){
            header('Location: ../gui/source.php');
        }
    }
?>