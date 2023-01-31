<?php include 'include/header.php';?>
<!-- <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="../index.php">WebSiteName</a>
	    </div>
	    <ul class="nav navbar-nav navbar-right">
			<li><a href="login.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
	    </ul>
	  </div>
	</nav> -->
<!-- Services -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">BH BOOKING AND RESERVATION</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="register.php">Register</a> -->
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- <section> --><br>
<div class="container">
    <div class="row">
        <div id="registration-form" class="col-md-8 mx-auto">
            <div class="alert" role="alert">
                <?php
						if(isset($errMsg)){
							echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
						}
					?>
                <h2 class="text-center"><i class="fa fa-users"></i> Register</h2>
                <hr>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Full Name"
                                    name="fullname" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control" id="username" placeholder="User Name"
                                    name="username" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile"
                                    title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile"
                                    required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="c_password">Confirm Password</label>
                        <input type="password" class="form-control" id="c_password" placeholder="Confirm Password"
                            name="c_password" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary" name='register' value="register">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
#registration-form {
    border-style: groove;
    border: 5px solid;
    border-radius: 15px;
}
</style>
<!-- </section> -->
<?php include 'include/footer.php';?>