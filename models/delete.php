<?php 
    require '../config/dbcon.php';

    if(isset($_GET['user_id'])){

        $id = $_GET['user_id'];

        $sql = mysqli_query($conn,"DELETE FROM user WHERE user_id ='".$id."' ");
        if($sql){
            header("Location: ../users.php");
        }else{
            echo 'Error';
        }
        $conn->close();
    }


?>