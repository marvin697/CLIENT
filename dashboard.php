<?php 
	session_start();
	include_once 'config/dbcon.php';
	include 'include/header_admin.php';
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
<section class="wrapper" style="margin-left: 16%;margin-top: -11%;">
    <!-- <div class="container"> -->
    <!-- <div class="row"> -->
    <div class="col-md-12">
        <h1>Dash board</h1>
        <div class="row">
            <?php 
							// if($_SESSION['role'] == 'admin'){ 
							// 	echo '<div class="col-md-3">';
							// 	echo '<a href="../app/users.php"><div class="alert alert-warning" role="alert">';
							// 	echo '<b>Registered Users: <span class="badge badge-pill badge-success">'.$count['register_user'].'</span></b>';
							// 	echo '</div></a>';
							// 	echo '</div>';
							// } 
						?>
            <?php 
							// if($_SESSION['role'] == 'admin'){ 
							// 	echo '<div class="col-md-3">';
							// 	echo '<a href="../app/list.php"><div class="alert alert-warning" role="alert">';
							// 	echo '<b>Rooms for Rent: <span class="badge badge-pill badge-success">'.(intval($total_rent['total_rent'])+intval($total_rent_apartment['total_rent_apartment'])).'</span></b>';
							// 	echo '</div></a>';
							// 	echo '</div>';
							// } 
						?>
            <?php 
							// if($_SESSION['role'] == 'user'){ 
							// 	echo '<div class="col-md-3">';
							// 	echo '<a href="../app/list.php"><div class="alert alert-warning" role="alert">';
							// 	echo '<b>Registered Rooms: <span class="badge badge-pill badge-success">'.$total_auth_user_rent['total_auth_user_rent'].'</span></b>';
							// 	echo '</div></a>';
							// 	echo '</div>';
							// } 
						?>
        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</section>
<?php include 'include/footer.php';?>