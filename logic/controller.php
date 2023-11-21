<?php 
    include('../utils/bdConnection.php');
    include('startSession.php');
    $conn = getConnection();    



    if(!$_POST && $_REQUEST['email']){
        echo '<div class="alert-danger">ESPACIOS VACIOS</div>';
    }
    else{
        $user = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $role = '';
        $id = 0;
        $Query = "select u.first_name, u.last_name, u.id, r.role_name from users as u 
                inner join access as ac
                on u.id = ac.id
                inner join roles as r 
                on u.role_id = r.id
                where  ac.username = '$user' && ac.user_password  = '$password'";
        $result = mysqli_query($conn, $Query);

        if($info = $result->fetch_array()){
            chargeSession ($info['id'],$info['first_name'],$info['role_name']);
            if($info['role_name']=='admin'){
                $id = $info['id'];
                header('location: ../gui/categories.php');
            }else{
                $QueryN = "select ns.id, ns.name, c.category_name ,u.first_name from news_sources as ns
                inner join categories as c
                on ns.category_id = c.id
                inner join users as u
                on ns.user_id = u.id
                where ns.user_id = '$id';";
                $result = mysqli_query($conn, $QueryN);
                /*Validate if user has a source related*/
                
                if($result->num_rows > 0){
                    header('location: ../gui/readXml.php');
                }
                else{
                    header('location: ../gui/newSource.php');
                }
            }
        }else
        {
            echo '<div class=" alert-danger">ACCESO DENEGADO</div>';
        }
    }
?>