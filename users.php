<?php
	session_start();
	include_once 'config/dbcon.php';
	include 'include/header_admin.php';
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
                <h2>List Of Users</h2>
                <div id="tableStyle" class="card p-4">
                    <div class="">
                        <a href="add_user.php"><button class="btn btn-sm btn-outline-primary  mb-4">Add <i
                                    class="fa fa-plus"></i></button></a>
                    </div>
                    <div class="table-responsive">
                        <?php
						include_once 'config/dbcon.php';

						$sql = "SELECT * FROM user ";

						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						?>
                        <table id="example" class="table table-sm ">
                            <thead>
                                <tr>
                                    <th>no.</th>
                                    <th>profile</th>
                                    <th>fullname</th>
                                    <th>contact number</th>
                                    <th>email address</th>
                                    <th>username</th>
                                    <th>role</th>
                                    <th>status</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php $i = 1; while ($row = $result->fetch_row()) : ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><a target="_blank" href="models/upload_profile/<?php echo $row['6']; ?>"><img
                                                src="models/upload_profile/<?php echo $row[6]; ?>"
                                                class="mr-0 mt-0 rounded" height="50px" width="50px"></a></td>
                                    <td><?php echo $row['3'];?></td>
                                    <td><?php echo $row['4'];?></td>
                                    <td><?php echo $row['5'];?></td>
                                    <td><?php echo $row['1'];?></td>
                                    <td><?php echo $row['7'];?></td>
                                    <td>
                                        <?php 
											if($row['8'] == 0){
												echo "<i style='color:blue' class='fa fa-check'></i>";
											}else{
												echo "<i style='color:red' class='fa fa-close'></i>";
											}
											
										?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-success btn-sm dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="models/activate-deactivate.php?activate_user=<?= $row['0'] ?>"
                                                    class="dropdown-item bg-primary text-white"><i
                                                        class="fa fa-check "></i> Activate</a>
                                                <a href="models/activate-deactivate.php?deactivate_user=<?= $row['0'] ?>"
                                                    class="dropdown-item bg-danger text-white"><i
                                                        class="fa fa-close "></i> Deactivate</a>
                                                <a href="edit_user.php?user_id=<?= $row['0'] ?>"
                                                    class="dropdown-item bg-success text-white"><i
                                                        class="fa fa-edit "></i> Edit Information</a>
                                                <a href="reset_password.php?reset_user_pass=<?= $row['0'] ?>"
                                                    class="dropdown-item bg-dark text-white"><i
                                                        class="fa fa-key "></i> Reset Password</a>
												<a href="#" type="button" data-toggle="modal"
                                                    data-target="#exampleModal<?php echo $row['0']; ?>"
                                                    class="dropdown-item bg-secondary text-white">
                                                    <i class="fa fa-trash "></i> Delete
                                                </a>
                                            </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal<?php echo $row['0']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete User <?php echo $row['0']; ?> </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="fw-20">Are you sure you want to delete <?= $row['3']; ?>? </span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                                        <a href="models/delete.php?user_id=<?= $row['0'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <!--End Modal -->
                                        </div>
                                    </td>


                                </tr>
                                <?php endwhile; ?>
                                <?php
								} else {
									// echo '<div class="p-3 card mt-3 bg-white">No records found!</div>';
								}
								?>
                            </tbody>
                        </table>
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
</style>
<?php include 'include/footer.php';?>