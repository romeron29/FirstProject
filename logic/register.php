<?php 
include('../utils/functions.php');

$user_id;

if($_POST && $_REQUEST['firstName']) {
  //get each field and insert to the database
    $user['firstName'] = $_REQUEST['firstName'];
    $user['lastName'] = $_REQUEST['lastName'];
    $user['email'] = $_REQUEST['email'];
    $user['password'] = $_REQUEST['password'];
    $user['country'] = $_REQUEST['country'];
    $user['city'] = $_REQUEST['city'];
    $user['address'] = $_REQUEST['address'];
    $user['secondAddress'] = $_REQUEST['secondAddress'];
    $user['postalCode'] = $_REQUEST['postalCode'];
    $user['phone'] = $_REQUEST['phone'];
    if (saveUser($user)) {
        header("Location: ../gui/signIn.html");

    }
    else {
        echo header("Location: ../test.php");
    }
}
?>