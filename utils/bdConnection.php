<?php	
function getConnection(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "newsproject";
    $connect = mysqli_connect($host,$user,$pass);
    mysqli_select_db($connect,$database);
    return $connect;
};
?>