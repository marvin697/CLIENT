<?php include 'include/header.php';?>
<!-- Services -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">BH LOCATOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <!-- <a class="nav-link" href="login.php">Login</a> -->
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="register.php">Register</a> -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="services">
    <div class="container">
        <div class="row">
            <div id="login-form" class="card col-md-5 mx-auto">
                <div class=" alert p-4" role="alert">
                    <h2 class="text-center"><i class="fa fa-"></i> User Login</h2>
                    <?php 
						session_start();
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
                    ?>
                    <hr>
                    <form autocomplete="off" action="models/verify_admin.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username"
                                name="username" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" name="password" autocomplete="off" required>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block" name='admin_login' value="Login">Login</button>
                        <p class="text-center">Not yet register? <a href="register_user.php" style="color:#3359FF">Register now </a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
#login-form {
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