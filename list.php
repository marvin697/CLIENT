<?php
	session_start();
	include_once 'config/dbcon.php';
	include 'include/header_admin.php';
?>
	<!-- Header nav -->	
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">BH LOCATOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
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
				<h2>List Of Boarding House</h2>
				<div id="tableStyle" class="card p-4">
					<div class="">
						<a href="add_bh.php"><button class="btn btn-sm btn-outline-primary  mb-4">Add <i class="fa fa-plus"></i></button></a>
					</div>
					<div class="table-responsive">
					<?php
						include_once 'config/dbcon.php';

						$sql = "SELECT * FROM boarding_house ";

						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						?>
						<table id="example" class="table table-sm ">
							<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Address</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody id="myTable">
								<?php while ($row = $result->fetch_row()) : ?>
								<tr>
									<td><?php echo $row['0'];?></td>
									<td><?php echo $row['1'];?></td>
									<td><?php echo $row['2'];?></td>
									<td>
										<button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal"
											data-target="#exampleModal<?php echo $row['0']; ?>">
											<i class="fa fa-eye" aria-hidden="true"></i> Details
										</button>
										<button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
											data-target="#exampleModal<?php echo $row['0']; ?>">
											<i class="fa fa-trash" aria-hidden="true"></i> Delete
										</button>
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
	#tableStyle{
		border-style: groove;
		border: 5px solid ;
		border-radius: 15px;
	}
</style>
<?php include 'include/footer.php';?>