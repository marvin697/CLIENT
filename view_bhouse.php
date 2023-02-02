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
        $ame = $row['amenities'];
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
                <?php
					if(isset($errMsg)){
						echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
					}
				?>
                <h2><?= $bh ?> Boarding House</h2>
                <div id="tableStyle" class="card p-4">
                    <div class="">
                        <a href="list.php"><button class="btn btn-sm btn-outline-dark  mb-4"><i
                                    class="fa fa-angle-double-left"></i> Back </button></a>
                    </div>
                    <hr>
                    <div class="">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="table-responsive">
                                    <table>
                                            <tr>
                                                <th class="text-center"><a target="_blank" href="models/upload_bh/<?php echo $img; ?>"><img
                                                    src="models/upload_bh/<?php echo $img; ?>"
                                                    class="mr-0 mt-0 p-2 rounded" height="400px" width="400px"></a>
                                                </th>
                                            </tr>
                                            <!-- <tr>
                                                <td class="text-center">
                                                    <a href="" class=""><button class="btn btn-sm btn-outline-primary">Edit Information</button></a>
                                                </td>
                                            </tr> -->
                                    </table>
                                    <br><br>
                                </div>    
                            </div>
                            <div class="col-md-7">
                                <div class="table-responsive">
                                    <table>
                                            <tr class="mt-2 text-uppercase" style="font-size: 18px">
                                                <th><span> Boarding House Name: </span><hr></th>
                                                <td><span style="margin-left: 25px;"> <?= $bh; ?> </span><hr></td>
                                                

                                            </tr>
                                            <tr class="mt-2 text-uppercase" style="font-size: 18px">
                                                <th><span> Location : </span><hr></th>
                                                <td><span style="margin-left: 25px;"> <?= $loc; ?> </span><hr></td>
                                            </tr>
                                            <tr class="mt-2 text-uppercase" style="font-size: 18px">
                                                <th><span> Description : </span><hr></th>
                                                <td><span style="margin-left: 25px;"> <?= $desc; ?> </span><hr></td>
                                            </tr>
                                            <tr class="mt-2 text-uppercase" style="font-size: 18px">
                                                <th><span> Amenities : </span><hr></th>
                                                <td><span style="margin-left: 25px;"> <?= $ame; ?> </span><hr></td>
                                            </tr>
                                            
                                    </table>
                                    <br><br>
                                </div>    
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<style>
#tableStyle {
    border-style: groove;
    border: 5px solid;
    border-radius: 15px;
}
</style>
<?php include 'include/footer.php';?>