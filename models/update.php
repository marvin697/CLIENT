<?php 
    require '../config/dbcon.php';

    if(isset($_POST['update_bh'])){

        
        $id = $_POST['bhouse_id'];
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
                header("Location: ../view_bhouse.php?bhouse_id=$id");
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
                    header("Location: ../view_bhouse.php?bhouse_id=$id");
                }

            }
        }

    }
 
?>