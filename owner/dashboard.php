<?php 
	session_start();
	include_once '../config/dbcon.php';
	include '../include2/header_owner.php';
	$query = "SELECT * FROM user WHERE username !='".$username."'";
	$res =$conn->query($query);
	
	
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
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="jumbotron">
                <h1 class="text-center"><b>WELCOME TO DASHBOARD </b></h1>
                <center>
                    <a href="../owner/add_bh.php" ><button style="margin-bottom: -65px" class="btn btn-md btn-outline-primary"><i class="fa fa-plus"></i> Add New Boarding House</button></a>
                </center>
            </div>
            <div class="">
                <?php 
                        $sql = mysqli_query($conn,"SELECT * FROM boarding_house WHERE user_id = '".$_SESSION['user_id']."' ");
                        if($sql->num_rows > 0){
                ?>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>

                                <?php while($row = $sql->fetch_row()): ?>
                                
                                    <li id="list" class="list-group-item  mr-4 mb-4">
                                            <div class="" style="width: 18rem;">
                                                <img style="object-fit: cover;" class="card-img-top" src="../models/upload_bh/<?=$row['4'];?>" alt="Card image cap" height="250px" width="250px">
                                                <hr style="border: 2px solid #0a0a0a;">
                                                <span class="text-center text-uppercase"><b> <?=$row['1'];?> BOARDING HOUSE </b></span><br>
                                                <a href="../owner/edit_bh.php?bhouse_id=<?=$row['0'];?>" ><button class="btn btn-sm btn-dark mt-4">Edit <i class="fa fa-edit"></i></button></a>
                                                <a href="../owner/manage_house.php?bhouse_id=<?=$row['0'];?>" ><button class="btn btn-sm btn-primary mt-4">Manage <i class="fa fa-angle-double-right"></i></button></a>
                                            </div>
                                    </li>
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                <?php
                        }
                ?>
            </div>
        </div>
        <div class="col-md-1"></div>
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
    
</style>
<?php include '../include2/footer.php';?>