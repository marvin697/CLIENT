<!-- <div class="row"> -->
<div class="">
    <h2 class="text-center"><i class="fa fa-user"></i> Reset Password</h2>
    <hr>
    <form id="reset-form">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $id = $_GET['reset_user_pass']; ?>">
                    <label for="old-password">Old Password</label>
                    <input type="password" class="form-control" id="old-password" placeholder="Old Password"
                        name="old-password" required autocomplete="off">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="new-password">New Password</label>
                    <input type="text" class="form-control" min="1" placeholder="New Password" id="new-password"
                        name="new-password" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="confirm-password">Re-type Password</label>
                    <input type="text" class="form-control" id="confirm-password" placeholder="Confirm Password"
                        name="confirm-password" required>
                </div>
            </div><br>
        </div><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block mb-1">Change <i class="fa fa-check"></i></button>
                <a href="users.php" class="text-dark"><button type="button" class="btn btn-outline-dark btn-block"
                        name='register_apartment' value="register_apartment">Cancel <i
                            class="fa fa-close"></i></button></a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
</div>
</div>
<script>
    $(document).ready(function() {
    $("#reset-form").submit(function(event) {
        event.preventDefault();
        var userid = $("#user_id").val();
        var oldPassword = $("#old-password").val();
        var newPassword = $("#new-password").val();
        var confirmPassword = $("#confirm-password").val();
        $.ajax({
        type: "POST",
        url: "resetfunction.php",
        data: { userid: userid, oldPassword: oldPassword, newPassword: newPassword, confirmPassword: confirmPassword },
        success: function(data) {
            if (data == "success") {
            Swal.fire({
                title: 'Success',
                text: 'Password reset successful',
                icon: 'success'
            }).then(function() {
                window.location.href = "http://localhost/CLIENT/CLIENT/users.php";
            });
            } else {
            Swal.fire({
                title: 'Error',
                text: data,
                icon: 'error'
            });
            }
        }
        });
    });
    });
</script>
<!-- </div> -->