<?php 

if(isset($_GET['roomTypeID']) && isset($_GET['bhouse_id'])){

    $room_type_id = $_GET['roomTypeID'];
    $bhouse_id = $_GET['bhouse_id'];
    
    //room table
    $sql3 = mysqli_query($conn,"SELECT *FROM room_type WHERE bhouse_id ='$bhouse_id' AND room_type_id='$room_type_id'  ");
    $row3 = mysqli_fetch_array($sql3);

    $name_type = $row3['type_name'];
} 

if(isset($_GET['bed_id']) && isset($_GET['bhouse_id']) && isset($_GET['roomID'])){

    $bed_id = $_GET['bed_id'];
    $bhouse_id = $_GET['bhouse_id'];
    $roomID = $_GET['roomID'];
    
    //bed table
    $sql = "SELECT b.bed_id, b.bed_no, r.room_no, b.price, b.bed_status, b.room_id
                    FROM bed AS b
                    INNER JOIN room AS r
                    ON r.room_id = b.room_id

                    WHERE b.bhouse_id ='$bhouse_id' AND b.room_id='$roomID' AND b.bed_id ='$bed_id' ";
    $res =$conn->query($sql);
    $row = mysqli_fetch_array($res);

    $bed_id = $row['bed_id'];
    $bed_no = $row['bed_no'];
    $room_no = $row['room_no'];
    $room_bed_id = $row['room_id'];
    $price = $row['price'];
    $bed_status = $row['bed_status'];


    $sql2 = mysqli_query($conn,"SELECT *FROM room WHERE bhouse_id ='$bhouse_id' AND room_id='$roomID'  ");
    $row2 = mysqli_fetch_array($sql2);

    $rm_id = $row2['room_id'];
    $rm_no = $row2['room_no'];
    $description = $row2['description'];
    $room_type = $row2['room_type_id'];
    $amenities = $row2['amenities'];
    $image = $row2['image'];

    $sql = mysqli_query($conn,"SELECT * FROM bed WHERE bhouse_id ='$bhouse_id' AND room_id='$rm_no' ");
    $count_bed = mysqli_num_rows($sql);
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