<?php 
    require '../config/dbcon.php';

    if(isset($_POST['register_user'])) {

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $fullname = $_POST['fullname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $file = $_FILES['file'];
        $role = $_POST['role'];



        if($_FILES['file']['size'] == 0 ){

            $query = "INSERT INTO user ( username, password, fullname, contact, email, image, role ) 
                
                                VALUES ( '$username', '$password','$fullname','$contact','$email','file.png','$role')";
                

            $result = mysqli_query($conn, $query);

            if($result){
                session_start();
                $_SESSION['message'] = "<div class='card bg-success text-white  p-2'> <h5>Registered successfully.</h5> <br></div>";

                header('location: ../users.php');

            }else {
                echo 'Error.';
            }    
        }else{
            //IMAGE TYPE
            $file=$_FILES['file']['name'];
            $tmp_name=$_FILES['file']['tmp_name'];
            $path="../models/upload_profile/" .$file;
            $file1=explode(".",$file);
            $ext=$file1[1];
            $allowed=array("jpg","jpeg","png","gif","pdf","wmv");

            if(in_array($ext,$allowed)){
                move_uploaded_file($tmp_name,$path);

                $query = "INSERT INTO user ( username, password, fullname, contact, email, image, role ) 
                
                                VALUES ( '$username', '$password','$fullname','$contact','$email','$file','$role')";
                

                $result = mysqli_query($conn, $query);

                if($result){
                    session_start();
                    $_SESSION['message'] = "<div class='card bg-success text-white  p-2'> <h5>Registered successfully.</h5> <br></div>";

                    header('location: ../users.php');

                }else {
                    echo 'Error.';
                }    


            }
        }
        
        

        
    }
    if(isset($_POST['register_bh'])) {

        $bhouse_name = $_POST['bhouse_name'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $amenities = $_POST['amenities'];
        $file = $_FILES['file'];
        $user_id = $_POST['user_id'];



        if($_FILES['file']['size'] == 0 ){

            $query = "INSERT INTO boarding_house ( bhouse_name, description, location, amenities, image, user_id ) 
                
                                VALUES ( '$bhouse_name', '$description','$location','$amenities','house.png','$user_id')";
                

            $result = mysqli_query($conn, $query);

            if($result){
                session_start();
                $_SESSION['message'] = "<div class='card bg-success text-white  p-2'> <h5>Registered successfully.</h5> <br></div>";

                header('location: ../list.php');

            }else {
                echo 'Error.';
            }    
        }else{
            //IMAGE TYPE
            $file=$_FILES['file']['name'];
            $tmp_name=$_FILES['file']['tmp_name'];
            $path="../models/upload_bh/" .$file;
            $file1=explode(".",$file);
            $ext=$file1[1];
            $allowed=array("jpg","jpeg","png","gif","pdf","wmv");

            if(in_array($ext,$allowed)){
                move_uploaded_file($tmp_name,$path);

                $query = "INSERT INTO boarding_house ( bhouse_name, description, location, amenities, image, user_id ) 
                
                                VALUES ( '$bhouse_name', '$description','$location','$amenities','$file','$user_id')";
                

                $result = mysqli_query($conn, $query);

                if($result){
                    session_start();
                    $_SESSION['message'] = "<div class='card bg-success text-white  p-2'> <h5>Registered successfully.</h5> <br></div>";

                    header('location: ../list.php');

                }else {
                    echo 'Error.';
                }    


            }
        }
        
        

        
    }

?>