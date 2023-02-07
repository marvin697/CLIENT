<?php 
    require '../config/dbcon.php';

    if(isset($_POST['update_user'])){

        
        $id = $_POST['user_id'];
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $file = $_FILES['file'];
        $role = $_POST['role'];

        if($_FILES['file']['size'] == 0 ){

            $sql = mysqli_query($conn,"UPDATE user 
                                                
                SET username = '$username', fullname ='$fullname', contact ='$contact', email ='$email', role ='$role' 
                WHERE user_id ='".$id."' ");

            if($sql){
                header("Location: ../users.php");
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

                $sql = mysqli_query($conn,"UPDATE user 
                                                
                                SET username = '$username', fullname ='$fullname', contact ='$contact', email ='$email', role ='$role', image ='$file' 
                                WHERE user_id ='".$id."' ");

                if($sql){
                    header("Location: ../users.php");
                }

            }
        }

    }
    if(isset($_POST['update_bh'])){

        
        $id = $_POST['bhouse_id'];
        $role = $_POST['role'];
        $bhouse_name = $_POST['bhouse_name'];
        $description = $_POST['description'];
        $location = $_POST['location'];
        $amenities = $_POST['amenities'];
        $file = $_FILES['file'];

        if($_FILES['file']['size'] == 0 ){

            $sql = mysqli_query($conn,"UPDATE boarding_house 
                                                
                SET bhouse_name = '$bhouse_name', description ='$description', location ='$location', amenities ='$amenities' 
                WHERE bhouse_id ='".$id."' ");

            if($sql){

                if($role == 'user'){
                    header('location: ../owner/dashboard.php');
                }else{
                    header("Location: ../view_bhouse.php?bhouse_id=$id");
                }
                
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

                $sql = mysqli_query($conn,"UPDATE boarding_house 
                                                
                SET bhouse_name = '$bhouse_name', description ='$description', location ='$location', image ='$file', amenities ='$amenities' 
                WHERE bhouse_id ='".$id."' ");

                if($sql){

                    if($role == 'user'){
                        header('location: ../owner/dashboard.php');
                    }else{
                        header("Location: ../view_bhouse.php?bhouse_id=$id");
                    }
                    
                }

            }
        }

    }
    if(isset($_POST['update_roomType'])){

        
        $bid = $_POST['bhouse_id'];
        $rtid = $_POST['room_type_id'];
        $room_type = $_POST['room_type'];

        $sql = mysqli_query($conn,"UPDATE room_type SET
                                                
                    type_name = '$room_type' 

                    WHERE bhouse_id ='".$bid."' AND room_type_id='".$rtid."' ");

        if($sql){
                header("Location: ../owner/manage_house.php?bhouse_id=$bid");
        }else {
            echo "Error";
        }
    }
 
?>