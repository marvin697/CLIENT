<!-- <div class="row"> -->
<div class="">
    <div class="alert " role="alert">

        <h2 class="text-center"><i class="fa fa-user"></i> User Information</h2>
        <form id="form" action="models/update.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <input type="text" class="form-control" id="fullname" placeholder="Fullname" name="fullname"
                            value="<?= $fname; ?>" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="contact">Contact Number (+63)</label>
                        <input type="number" class="form-control" min="1" placeholder="9 xxx xxx xxx" name="contact"
                            value="<?= $contact; ?>" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" 
                            value="<?= $email; ?>" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="country" class="form-control" id="username" placeholder="Username" name="username"
                            value="<?= $username; ?>"required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="file">Photo (optional) </label>
                        <input type="file" name="file" id="file">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">Role</label>
                        <select id="role" name="role" class="custom-select-md form-control mb-3" required>
                            <option value="<?= $role; ?>"><?= $role; ?></option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>

                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-block mb-1" id="register_user" name="update_user">Submit 
                        <i class="fa fa-check"></i></button>
                    <a href="users.php" class="text-dark"><button type="button" class="btn btn-outline-dark btn-block"
                            name='register_apartment' value="register_apartment">Cancel <i
                                class="fa fa-close"></i></button></a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </div>
</div>
<!-- </div> -->