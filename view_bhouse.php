<?php
	session_start();
	include_once 'config/dbcon.php';
	include 'include/header_admin.php';

    if(isset($_GET['bhouse_id'])){
        $bhouse_id = $_GET['bhouse_id'];

        $sql = mysqli_query($conn,"SELECT *FROM boarding_house WHERE bhouse_id ='$bhouse_id'  ");
        $row = mysqli_fetch_array($sql);

        $bh = $row['bhouse_name'];
        $desc = $row['description'];
        $loc = $row['location'];
        $img = $row['image'];
        $added_user = $row['user_id'];

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
                        <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end header nav -->
<?php include 'include/side-nav.php';?>
<section class="wrapper" style="margin-left:16%;margin-top: -11%;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= $bh ?> Boarding House</h2>
                <div id="tableStyle" class="card p-4">
                    <div class="">
                        <a href="list.php"><button class="btn btn-sm btn-outline-dark  mb-"><i
                                    class="fa fa-angle-double-left"></i> Back </button></a>
                    </div><br>
                    <!-- <hr style="border:0.5px solid black"> -->
                    <div class="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="table-responsive">
                                    <div class="">
                                        <a target="_blank" href="models/upload_bh/<?php echo $img; ?>">
                                                        <img style="object-fit: cover;" src="models/upload_bh/<?php echo $img; ?>"
                                                        class="card-img-top" height="250px" width="250px"></a>
                                    </div>
                                    <div class="mt-4 text-uppercase">
                                        <span class=""><b>BH Name:</b><span style="margin-left: 25px;"> <?= $bh; ?> </span></span><br>
                                        <span class=""><b>Location:</b> <span style="margin-left: 25px;"> <?= $loc; ?> </span></span><br>
                                        <span class=""><b>Description:</b> <span style="margin-left: 25px;"> <?= $desc; ?> </span></span><br>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-8">
                                <div class="">
                                    <div class="">
                                        <h5>Boarding House Details</h5><hr style="margin-top: -5px;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card p-2">
                                                    <?php 
                                                        $sql = mysqli_query($conn,"SELECT * FROM room WHERE bhouse_id='".$bhouse_id."'");
                                                        $total_room = mysqli_num_rows($sql);
                                                    ?>
                                                    <span><b>Total Rooms</b>  <span class="float-right"><?=$total_room;?></span></span> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card p-2">
                                                    <?php 
                                                        $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id='".$bhouse_id."'");
                                                        $total_amenities = mysqli_num_rows($sql);
                                                    ?>
                                                    <span><b>Total Amenities</b>  <span class="float-right"><?=$total_amenities;?></span></span> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card p-2">
                                                    <span><b>Available Rooms</b>  <span class="float-right">45</span></span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <!-- ROOM SECTION -->
                                    <div class="">
                                        <h6>Room    <span class="float-right"><a type="button" id="click"><i id="icon" class="fa fa-chevron-down"></i></a></span></h6><hr style="margin-top: -5px;">
                                        <div class="">
                                            <div id="roomDetails">
                                                    <div class="table-responsive" style="height:300px"><br>
                                                        <?php 
                                                            $sql = mysqli_query($conn,"SELECT * FROM room WHERE bhouse_id ='$bhouse_id' ");
                                                            if($sql->num_rows > 0):
                                                        ?>
                                                            <ul class="list-group-horizontal">
                                                                <table>
                                                                    <tbody>

                                                                        <?php while($img = $sql->fetch_row()): ?>
                                                                        
                                                                            <li  class="list-group-item  mr-4 mb-4 ">
                                                                                    <div class="" style="width: 10rem;">
                                                                                        <span class="text-center text-uppercase"><b>ROOM <?=$img['2'];?>
                                                                                        <span class="float-right">
                                                                                            <a href="room_details.php?bhouse_id=<?=$bhouse_id;?>&&room_id=<?=$img['0'];?>" type="button">
                                                                                                <i class="fa fa-ellipsis-h text-dark "></i>
                                                                                            </a>
                                                                                        </span>
                                                                                        </b></span><br>
                                                                                        <hr style="border: 2px solid #0a0a0a;">
                                                                                        <img style="object-fit: cover;" class="card-img-center" src="models/upload_room/<?=$img['5'];?>" alt="Card image cap" height="160px" width="160px">
                                                                                    </div>
                                                                            </li>
                                                                        <?php endwhile;?>    
                                                                    </tbody>
                                                                </table>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                    
                                            </div>
                                        </div>
                                    </div><br>
                                    <!-- BED SECTION -->
                                    <div class="">
                                        <h6>Amenities    <span class="float-right"><a type="button" id="click_bed"><i id="icon2" class="fa fa-chevron-down"></i></a></span></h6><hr style="margin-top: -5px;">
                                        <div class="">
                                            <div id="bedDetails">
                                                    <?php include_once 'view_amenities.php';?>
                                            </div>
                                        </div>
                                    </div><br>
                                    
                                </div>    
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-md"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    #tableStyle {
        /* border-style: groove;
        border: 5px solid;
        border-radius: 15px; */
        box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
            -webkit-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.75);
            border: 3px solid #0a0a0a;
            border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
    }
    #icon,#icon2 {
        font-size: 17px;
    }

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
<script>
    $(document).ready(function(){
       $("#click").on("click", function(){

            var mydiv = document.getElementById("roomDetails");
            var iconBtn = document.getElementById("icon");

            if(mydiv.style.display === "none"){
                mydiv.style.display ="block";
                iconBtn.className = "fa fa-chevron-down";
                iconBtn.style.color = "black";
            }else{
                mydiv.style.display ="none";
                iconBtn.className = "fa fa-chevron-right";
                iconBtn.style.color = "black";
            }
       }); 

       // bed section
       $("#click_bed").on("click", function(){

            var myBed = document.getElementById("bedDetails");
            var iconBtn = document.getElementById("icon2");

            if(myBed.style.display === "none"){
                myBed.style.display ="block";
                iconBtn.className = "fa fa-chevron-down";
                iconBtn.style.color = "black";
            }else{
                myBed.style.display ="none";
                iconBtn.className = "fa fa-chevron-right";
                iconBtn.style.color = "black";
            }

       }); 

    });
</script>
<?php include 'include/footer.php';?>