<?php
include_once 'config/dbcon.php';
$userid = $_POST['userid'];
$oldPassword = md5($_POST['oldPassword']);
$newPassword = md5($_POST['newPassword']);
$confirmPassword = md5($_POST['confirmPassword']);


// Check if old password is correct
$query = "SELECT password FROM user WHERE user_id = '$userid'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if ($row['password'] != $oldPassword) {
    echo "Old password is incorrect";
    exit();
}

// Check if new password and confirm password match
if ($newPassword != $confirmPassword) {
    echo "New password and confirm password do not match";
    exit();
}

// Update password in database
$query = "UPDATE user SET password = '$newPassword' WHERE user_id = '$userid'";
mysqli_query($conn, $query);

echo "success";

?>
