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

        $user_id = $_POST['user_id'];
        $role = $_POST['role'];

        $bhouse_name = $_POST['bhouse_name'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $amenities = $_POST['amenities'];
        $file = $_FILES['file'];
       



        if($_FILES['file']['size'] == 0 ){

            $query = "INSERT INTO boarding_house ( bhouse_name, description, location, amenities, image, user_id ) 
                
                                VALUES ( '$bhouse_name', '$description','$location','$amenities','house.png','$user_id')";
                

            $result = mysqli_query($conn, $query);

            if($result){
                
                if($role == 'user'){
                    header('location: ../owner/dashboard.php');
                }else{
                    header('location: ../list.php');
                }

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

                    if($role == 'user'){
                        header('location: ../owner/dashboard.php');
                    }else{
                        header('location: ../list.php');
                    }

                }else {
                    echo 'Error.';
                }    


            }
        }
        
        

        
    }
    if(isset($_POST['add_bed'])) {

        $id = $_POST['id'];
        $bhouse_id = $_POST['bhouse_id'];
        $bed_no = $_POST['bed_no'];
        $room_id = $_POST['room_id'];
        $price = $_POST['price'];
        $bed_status = $_POST['bed_status'];

        for ($i = 0; $i < count($_POST['bhouse_id']); $i++):

            // var_dump($_POST['room_id'][$i]);

            $query = "INSERT INTO bed (bhouse_id, bed_no, room_id, price, bed_status) VALUES ('".$_POST['bhouse_id'][$i]."','".$_POST['bed_no'][$i]."','".$_POST['room_id'][$i]."','".$_POST['price'][$i]."','".$_POST['bed_status'][$i]."')";
            $result = mysqli_query($conn, $query);

            if($result){

                    header("location: ../owner/manage_house.php?bhouse_id=$id");
                    // echo 'Success';

            }else {
                echo 'Error.';
            } 

        endfor;
    }
    if(isset($_POST['add_room_type'])) {

        $id = $_POST['id'];
        $bhouse_id = $_POST['bhouse_id'];
        $type_name = $_POST['type_name'];

        for ($i = 0; $i < count($_POST['bhouse_id']); $i++):

            // var_dump($_POST['room_id'][$i]);

            $query = "INSERT INTO room_type (bhouse_id, type_name) VALUES ('".$_POST['bhouse_id'][$i]."','".$_POST['type_name'][$i]."')";
            $result = mysqli_query($conn, $query);

            if($result){

                    header("location: ../owner/manage_house.php?bhouse_id=$id");
                    // echo 'Success';

            }else {
                echo 'Error.';
            } 

        endfor;
    }
    if(isset($_POST['add_rules'])) {

        $id = $_POST['id'];
        $bhouse_id = $_POST['bhouse_id'];
        $rules = $_POST['rules'];

        for ($i = 0; $i < count($_POST['bhouse_id']); $i++):

            // var_dump($_POST['room_id'][$i]);

            $query = "INSERT INTO rules (bhouse_id, rules) VALUES ('".$_POST['bhouse_id'][$i]."','".$_POST['rules'][$i]."')";
            $result = mysqli_query($conn, $query);

            if($result){

                    header("location: ../owner/manage_house.php?bhouse_id=$id");
                    // echo 'Success';

            }else {
                echo 'Error.';
            } 

        endfor;
    }

?>