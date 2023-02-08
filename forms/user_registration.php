<!-- <div class="row"> -->
<div class="">
    <div class="alert " role="alert">

        <!-- <h2 class="text-center"><i class="fa fa-user"></i> User Information</h2> -->
        <form id="form" action="models/register.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Fullname" name="fullname"
                            required>
                        <input type="hidden" class="form-control" name="role" value ="user" required>
                            
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="contact">Contact Number (+63)</label>
                        <input type="number" class="form-control" min="1" placeholder="9 xxx xxx xxx" name="contact"
                            required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="country" class="form-control" id="username" placeholder="Username" name="username"
                            required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                            required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="file">Photo (optional) </label>
                        <input type="file" name="file" id="file">
                    </div>
                </div>
            </div><br>

            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">Role</label>
                        <select id="role" name="role" class="custom-select-md form-control mb-3" required>
                            <option>-------</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div><br> -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-block mb-1"  name='registration'
                        value="register_apartment">Register</button>
                        <p class="text-center">Already  done registered? <a href="login.php" style="color:#3359FF">Login now </a></p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>
</div>
<!-- </div> -->