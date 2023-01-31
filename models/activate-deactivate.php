<?php 
    require '../config/dbcon.php';

    if(isset($_GET['activate_user'])){

        $id = $_GET['activate_user'];

        $sql = mysqli_query($conn,"UPDATE user SET status = 0 WHERE user_id ='".$id."' ");
        if($sql){
            header("Location: ../users.php");
        }

    }


    if(isset($_GET['deactivate_user'])){

        $id = $_GET['deactivate_user'];

        $sql = mysqli_query($conn,"UPDATE user SET status = 1 WHERE user_id ='".$id."' ");
        if($sql){
            header("Location: ../users.php");
        }

    }
    
?>