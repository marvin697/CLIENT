<?php
    session_start();
    include_once '../config/dbcon.php';

    if(isset($_POST['admin_login'])){

        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));
        $query = "SELECT * FROM user WHERE username = '".$username."' AND PASSWORD = '".$password."'";
        $result = $conn->query($query);

        $count = mysqli_num_rows($result);
        if($count > 0){
            $user = mysqli_fetch_array($result);
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['status'] = $user['status'];


            if($_SESSION['status'] == 1 ){
                $_SESSION['msg'] = "<center style='color:red;font-size:20px'>Account Deactivated! Please contact your administrator, thank you.</center>";
                header('location: ../login.php');
            }else {
                if ($_SESSION['role'] == 'admin') {
                    header('location: ../dashboard.php');
                }else {
                    header('location: ../owner/dashboard.php');
                }
                
            }
        }else{
            $_SESSION['msg'] = "<center style='color:red;font-size:20px'>Incorrect Username or Password.</center>";
            header('location: ../login.php');
        }
    }