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
<?php include '../include2/ownerside-nav.php';?>
<section class="wrapper" style="margin-left: 16%;margin-top: -11%;">
    <!-- <div class="container"> -->
    <!-- <div class="row"> -->
    <div class="col-md-12">
        <h1>Dash board</h1>
        <div class="row">
            
        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</section>
<?php include '../include2/footer.php';?>