<?php 

    require '../config/dbcon.php';
    if (isset($_POST['submit'])) {
        $id = $_POST["user_id"];
        $old_password = md5($_POST['old_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['new_password']);

        // Check if the old password is correct
        $sql = "SELECT * FROM user WHERE user_id='$id' AND password='$old_password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // Check if the new password and confirm password match
            if ($new_password == $confirm_password) {
                // Update the password in the database
                $sql = "UPDATE user SET password='$new_password' WHERE user_id='$id'";
                if (mysqli_query($conn, $sql)) {
                    header("Location: ../users.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                
                echo "<div class='alert alert-danger' role='alert'>$err</div>";

                
            }
        }
    }

    // Close the connection

?>


    
