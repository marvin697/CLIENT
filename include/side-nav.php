<?php
	if(empty($_SESSION['role']))
		header('Location: login.php');

?>
<!-- <section> --> <br>
<nav class="navbar navbar-expand-sm navbar-default sidebar" style="background-color:#212529;" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive1">
            <span></span>
            <ul class="navbar-nav text-center" style="flex-direction: column;">
                <span class="text-white">ADMINISTRATOR </span>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="messages.php" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <a href="list.php" class="nav-link">Boarding House</a>
                </li>
                <li class="nav-item">
                    <a href="users.php" class="nav-link">Users</a>
                </li>

                <!-- <li class="nav-item">
              <?php if($_SESSION['role'] == 'admin'){ 
                echo '<a href="../app/sms.php" class="nav-link">Send SMS</a>';
              } ?>
            </li>

            <li class="nav-item">
              <?php if($_SESSION['role'] == 'admin'){ 
                echo '<a href="../app/cmplist.php" class="nav-link">Complaint List</a>';
              } ?>
            </li> -->
            </ul>
        </div>
    </div>
</nav><br>
<!-- </section> -->