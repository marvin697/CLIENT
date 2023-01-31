<!-- <div class="row"> -->
<div class="">
    <div class="alert " role="alert">
        <?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
        <h2 class="text-center"><i class="fa fa-home"></i> Boarding House</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bhouse_name">BH Name</label>
                        <input type="text" class="form-control" id="bhouse_name" placeholder="Boarding House Name"
                            name="bhouse_name" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" placeholder="Complete Details"
                            name="location" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="amenities">Amenities</label>
                        <input type="text" class="form-control" id="amenities" placeholder="" name="amenities" required>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="3"
                            class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description">Image</label>
                        <input type="file" name="image" id="image">
                    </div>
                </div>
            </div>

    </div><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block mb-1" name='register_apartment'
                value="register_apartment">Register <i class="fa fa-check"></i></button>
            <a href="list.php" class="text-dark"><button type="button" class="btn btn-outline-dark btn-block"
                    name='register_apartment' value="register_apartment">Cancel <i class="fa fa-close"></i></button></a>
        </div>
        <div class="col-md-4"></div>
    </div>

    </form>
</div>
</div>
<!-- </div> -->