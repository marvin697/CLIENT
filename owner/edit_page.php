<?php 
	session_start();
	include_once '../config/dbcon.php';
	include '../include2/header_owner.php';
	
    if(isset($_GET['bhouse_id']) && isset($_GET['room_id'])){
        $bhouse_id = $_GET['bhouse_id'];
        $room_id = $_GET['room_id'];
        

        //bh table
        $sql = mysqli_query($conn,"SELECT *FROM boarding_house WHERE bhouse_id ='$bhouse_id'  ");
        $row = mysqli_fetch_array($sql);

        $bh = $row['bhouse_name'];
        $desc = $row['description'];
        $loc = $row['location'];
        $img = $row['image'];
        $added_user = $row['user_id'];
        
        //room table
        $sql2 = mysqli_query($conn,"SELECT *FROM room WHERE bhouse_id ='$bhouse_id' AND room_id='$room_id'  ");
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
    
?>
<!-- Header nav -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">BH LOCATOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $_SESSION['fullname']; ?>
                        <?php if($_SESSION['role'] == 'user'){ echo "(User)"; } ?></a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end header nav --> 
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div id="border" class="p-4">
                <?php include_once '../view_pages/edit.php' ?>
            </div>
        </div>
    </div>
</div>
<style>
    .list-group-horizontal .list-group-item {
        display: inline-block;
    }
    #list{
        box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
        border: 3px solid #0a0a0a;
        border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
    }
    #border{
        box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
        border: 3px solid #0a0a0a;
        border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
        -moz-border-radius: 10px 10px 10px 10px;
    }
    
</style>
<?php include '../include2/footer.php';?>