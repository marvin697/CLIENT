<?php 
    switch ($tbl) {
            case 'roomType':
                include_once '../models/fetch.php';
        ?>  
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

            default:
                echo "NO FORM";
                break;
    }
?>