<?php 
    session_start();
    include('../utils/bdConnection.php');
    $conn = getConnection();    


    if(!$_POST && $_REQUEST['email']){
        echo '<div class="alert-danger">ESPACIOS VACIOS</div>';
    }
    else{
        $user = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        echo''.$user.''.$password.'';
        $role = '';

        $Query = "select u.first_name, u.last_name, r.id, r.role_name from users as u 
                inner join access as ac
                on u.id = ac.id
                inner join roles as r 
                on u.role_id = r.id
                where  ac.username = '$user' && ac.user_password  = '$password'";
        $result = mysqli_query($conn, $Query);
        if($info = $result->fetch_array()){
            echo $info['first_name'];
            $_SESSION['user']=$info['first_name'];
            if($info['role_name']=='admin'){
                header('location: ../gui/admin.php');
            }else{
                
            }
        }else
        {
            echo '<div class=" alert-danger">ACCESO DENEGADO</div>';
        }
    }




?>