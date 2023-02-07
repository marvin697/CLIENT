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
                    <!-- RULES -->
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Amenities:</label>
                                            <input type="text" class="form-control" name="amenities" value="<?php echo $amenities; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Description:</label>
                                            <textarea name="description" class="form-control" cols="10" rows="1"><?php echo $description; ?></textarea>
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
        ?>
        <!-- DEFAULT -->
        <?php default:
                echo "NO FORM";
                break;
    }
?>