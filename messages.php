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
                <h2><i class="fa-brands fa-facebook-messenger"></i> Messages</h2>
                <div id="tableStyle" class="card p-4">
                    
                    <div class="">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Inbox</h5><hr>
                                <div class="table-responsive">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Message</h5><hr>
                            </div>
                            <div class="col-md-2">
                                <h5>Actions</h5><hr>
                            </div>
                            <br><br>
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