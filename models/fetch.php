<?php 

if(isset($_GET['roomTypeID']) && isset($_GET['bhouse_id'])){

    $room_type_id = $_GET['roomTypeID'];
    $bhouse_id = $_GET['bhouse_id'];
    
    //room table
    $sql3 = mysqli_query($conn,"SELECT *FROM room_type WHERE bhouse_id ='$bhouse_id' AND room_type_id='$room_type_id'  ");
    $row3 = mysqli_fetch_array($sql3);

    $name_type = $row3['type_name'];
} 

if(isset($_GET['rule_id']) && isset($_GET['bhouse_id'])){

    $rule_id = $_GET['rule_id'];
    $bhouse_id = $_GET['bhouse_id'];
    
    //rules table
    $sql = mysqli_query($conn,"SELECT *FROM rules WHERE bhouse_id ='$bhouse_id' AND rule_id='$rule_id'  ");
    $row = mysqli_fetch_array($sql);

    $rules = $row['rules'];
} 

if(isset($_GET['room_id']) && isset($_GET['bhouse_id'])){

    $room_id = $_GET['room_id'];
    $bhouse_id = $_GET['bhouse_id'];
    
    //room table
    $sql = "SELECT r.room_id, r.bhouse_id, r.room_no, rt.type_name, r.room_type_id, r.description, r.amenities, r.image
                                                        FROM room AS r
                                                        INNER JOIN room_type AS rt
                                                        ON rt.room_type_id = r.room_type_id

                                                        WHERE r.bhouse_id ='$bhouse_id' AND r.room_id='$room_id' ";

    $res = $conn->query($sql); 
    $row = mysqli_fetch_array($res);

    $room_no = $row['room_no'];
    $type_name = $row['type_name'];
    $description = $row['description'];
    $room_type_id = $row['room_type_id'];
    $amenities = $row['amenities'];
    $image = $row['image'];
} 

?>