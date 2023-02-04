<!-- <div class="row"> -->
<div class="">
    <div class="alert " role="alert">
        <?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
        <h2 class="text-center"><i class="fa fa-edit"></i> Boarding House</h2>
        <form action="../models/update.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bhouse_name">BH Name</label>
                        <input type="hidden" name="role" value="<?php echo $_SESSION['role']; ?>">
                        <input type="hidden" name="bhouse_id" value="<?php echo $bhouse_id; ?>">
                        <input type="text" class="form-control" id="bhouse_name" placeholder="Boarding House Name"
                            name="bhouse_name" value="<?php echo $bh; ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" placeholder="Complete Details"
                            name="location" value="<?php echo $loc; ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="amenities">Amenities</label>
                        <input type="text" class="form-control" id="amenities" placeholder="" 
                            name="amenities" value="<?php echo $ame; ?>" required>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="3"
                            class="form-control"><?php echo $desc; ?></textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description">Image</label>
                        <input type="file" name="file" id="file">
                    </div>
                </div>
            </div>

    </div><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block mb-1" name="update_bh">Save <i class="fa fa-check"></i></button>
                
            <a href="../owner/dashboard.php" class="text-dark"><button type="button" class="btn btn-outline-dark btn-block"
                    name=''>Cancel <i class="fa fa-close"></i></button></a>
        </div>
        <div class="col-md-4"></div>
    </div>

    </form>
</div>
</div>
<!-- </div> -->