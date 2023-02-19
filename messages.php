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
                <h2><i class="fa-brands fa-facebook-messenger"></i> Messages Today</h2>
                <div id="tableStyle" class="card p-4">
                    <div class="">
                    
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-sm ">
                            <thead>
                                <tr>
                                    <th>no.</th>
                                    <th>name</th>
                                    <th>message</th>
                                    <!--<th>status</th>-->
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                
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

<script>
    $(document).ready(function() {
        $.ajax({
          url: "load_messages.php",
          type: "POST",
          success: function(data) {
            $("#myTable").html(data);
          }
        });
     });
     
     $(document).ready(function() {
        setInterval(function() {
          $("#myTable").load("load_messages.php");
        }, 3000); 
     });
     
</script>

<?php include 'include/footer.php';?>