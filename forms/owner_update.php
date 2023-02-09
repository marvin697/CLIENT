<?php 
    include_once '../models/fetch.php';

    switch ($tbl) {

            case "roomType":
        ?>
                    <!-- ROOM TYPE -->
                    <div class="">
                        <div class="alert " role="alert">
                            <h2 class="text-center"><i class="fa fa-"></i></h2>
                            <form id="form" action="../models/update.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname"><b> BH NAME </b></label>
                                            <input type="hidden" name="bhouse_id" value="<?php echo $bhouse_id; ?>">
                                            <input type="hidden" name="room_type_id" value="<?php echo $room_type_id; ?>">
                                            <input type="text" class="form-control" value="<?= $bh; ?>" disabled>
                                                
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname"><b> ROOM TYPE </b></label>
                                            <input type="text" class="form-control" name="room_type" value="<?= $name_type; ?>" required>
                                                
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-block mb-1" id="register_user" name="update_roomType">
                                            Save <i class="fa fa-check"></i></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
        <?php 
                break; 
            case "rules":    
        ?>
                    <!-- RULES -->
                    <div class="">
                        <div class="alert " role="alert">
                            <h2 class="text-center"><i class="fa fa-"></i></h2>
                            <form id="form" action="../models/update.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname"><b> BH NAME </b></label>
                                            <input type="hidden" name="bhouse_id" value="<?php echo $bhouse_id; ?>">
                                            <input type="hidden" name="rule_id" value="<?php echo $rule_id; ?>">
                                            <input type="text" class="form-control" value="<?= $bh; ?>" disabled>
                                                
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname"><b> RULES </b></label>
                                            <input type="text" class="form-control" name="rules" value="<?= $rules; ?>" required>
                                                
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-block mb-1"  name="update_rules">
                                            Save <i class="fa fa-check"></i></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
        <?php 
                break; 
            case "rooms":
        ?>
                    <!-- ROOMS -->
                    <div class="">
                        <div class="alert " role="alert">
                            <h2 class="text-center"><i class="fa fa-"></i></h2>
                            <form id="form" action="../models/update.php" method="post" enctype="multipart/form-data">
                                <div class="row text-uppercase font-weight-bold">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Room no.:</label>
                                            <input type="hidden" name="bhouse_id" value="<?php echo $bhouse_id; ?>">
                                            <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">

                                            <input type="number" class="form-control" name="room_no" value="<?php echo $room_no; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Room Type:</label>
                                            <select name="room_type" class="custom-select-md form-control mb-3" required>
                                                <option value="<?php echo $room_type_id; ?>"><?php echo $type_name; ?></option>
                                                <?php
                                                    $query="SELECT * FROM room_type WHERE bhouse_id='$bhouse_id' ";
                                                    $result= $conn->query($query);
                                                ?>
                                                <?php while($row = $result->fetch_row()) : ?>
                                                    <option value="<?php echo $row[0]; ?>">
                                                        <?php echo $row[2]; ?>
                                                     
                                                    </option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-uppercase font-weight-bold">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Description:</label>
                                            <textarea name="description" class="form-control" cols="10" rows="3"><?php echo $description; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                                <br>
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-block mb-1"  name="update_room">
                                            Save <i class="fa fa-check"></i></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
        <?php 
                break;
            case "images": 
        ?>
                    <!-- IMAGE -->
                    <div class="">
                        <div class="alert " role="alert">
                            <h2 class="text-center"><i class="fa fa-"></i></h2>
                            <form id="form" action="../models/update.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname"><b> ROOM NO. </b></label>
                                            <input type="hidden" name="bhouse_id" value="<?php echo $bhouse_id; ?>">
                                            <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
                                            <input type="text" class="form-control" value="<?= $room_no; ?>" disabled>
                                                
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname"><b>UPLOAD FILE </b></label>
                                            <input type="file" class="form-control" name="file" required>
                                                
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-block mb-1" id="register_user" name="update_image">
                                            Save <i class="fa fa-check"></i></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
        <?php 
                break; 
            case "bed":
        ?>
                    <!-- BED -->
                    <div class="">
                        <div class="alert " role="alert">
                            <h2 class="text-center"><i class="fa fa-"></i></h2>
                            <form id="form" action="../models/update.php" method="post" enctype="multipart/form-data">
                                <div class="row text-uppercase font-weight-bold">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Bed no.:</label>
                                            <input type="hidden" name="bhouseID" value="<?php echo $bhouse_id; ?>">
                                            <input type="hidden" name="roomID" value="<?php echo $roomID; ?>">
                                            <input type="hidden" name="bedID" value="<?php echo $bed_id; ?>">

                                            <input type="number" class="form-control" name="bed_no" value="<?php echo $bed_no; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="" class="col-form-label">Price:</label>
                                            <input type="number" class="form-control" name="price" value="<?php echo $price; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="" class="col-form-label">Bed Status:</label>
                                            <input type="text" class="form-control" name="bed_status" value="<?php echo $bed_status; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> 
                                <br>
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-block mb-1"  name="update_bed">
                                            Save <i class="fa fa-check"></i></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
        <?php 
                break;
            case "amenities" 
        ?>
                    <!-- AMENITIES -->
                    <div class="">
                        <div class="alert " role="alert">
                            <h2 class="text-center"><i class="fa fa-"></i></h2>
                            <form id="form" action="../models/update.php" method="post" enctype="multipart/form-data">
                                <div class="row text-uppercase font-weight-bold">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Place offer:</label>
                                            <input type="hidden" name="bhouseID" value="<?php echo $bhouse_id; ?>">
                                            <input type="hidden" name="ame_id" value="<?php echo $ame_id; ?>">

                                            <select name="place_offer" class="custom-select">
                                                <option value="<?=$place_offer;?>"><?=$place_offer;?></option>
                                                <option value="bathroom">Bathroom</option>
                                                <option value="bedroom_and_laudry">Bedroom and laundry</option>
                                                <option value="heating_and_cooling">Heating and Cooling</option>
                                                <option value="kitchen_and_dining">Kitchen and dining</option>
                                                <option value="location_features">Location features</option>
                                                <option value="indoor">Indoor</option>
                                                <option value="outdoor">Outdoor</option>
                                                <option value="parking_and_facilities">Parking and facilities</option>
                                                <option value="services">Services</option>
                                                <option value="not_included">Not included</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Amenities:</label>
                                            <input type="text" class="form-control" name="amenities" value="<?=$getAmenities;?>" required>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> 
                                <br>
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-block mb-1"  name="update_amenities">
                                            Save <i class="fa fa-check"></i></button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
        <?php 
                break; 
        ?>
        <!-- DEFAULT -->
        <?php default:
                echo "";
                break;
    }
?>