<?php 

if(isset($_GET['roomTypeID']) && isset($_GET['bhouse_id'])){

    $room_type_id = $_GET['roomTypeID'];
    $bhouse_id = $_GET['bhouse_id'];
    
    //room table
    $sql3 = mysqli_query($conn,"SELECT *FROM room_type WHERE bhouse_id ='$bhouse_id' AND room_type_id='$room_type_id'  ");
    $row3 = mysqli_fetch_array($sql3);

    $name_type = $row3['type_name'];
} 

?>