<!-- Large modal for BED -->
<div id="bed=<?=$bhouse_id;?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Bed</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body font-weight-bold">
                        <form action="../models/register.php" method="POST">
                            <div class="row mainForm">
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Bed no.:</label>
                                        <input type="hidden" name="id" value="<?php echo $bhouse_id; ?>">
                                        <input type="hidden" name="rm_id" value="<?php echo $rm_id; ?>">
                                        <input type="hidden" name="bhouse_id[]" value="<?php echo $bhouse_id; ?>">
                                        <input type="number" class="form-control" name="bed_no[]" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Room:</label>
                                        <input type="hidden" class="form-control" name="room_id[]" value="<?php echo $rm_no; ?>">
                                        <input type="text" class="form-control" value="<?php echo $rm_no; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Price:</label>
                                        <input type="text" class="form-control" name="price[]" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Bed Status:</label>
                                        <input type="text" class="form-control" name="bed_status[]" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="col-form-label">Actions:</label>
                                    <div class="btn-group">
                                        <button type="button" class="addRow btn btn-sm btn-dark form-control"><i class="fa fa-plus"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger form-control"><i class="fa fa-trash"></i> </button>
                                    </div>
                                    </div>
                               
                            </div>
                            <div class="newRow"></div>

                            <!-- footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="add_bed">Submit</button>
                            </div> 
                            <!-- End -->
                        </form>
                    </div>
                </div>
</div>
</div>


<!-- MODAL FOR RULES -->
<div id="rules=<?=$bhouse_id;?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Rules</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body font-weight-bold">
                        <form action="../models/register.php" method="POST">
                            <div class="row roomRules">
                                <div class="col-md-3">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Boarding House:</label>
                                        <input type="hidden" name="id" value="<?php echo $bhouse_id; ?>">
                                        <input type="hidden" name="bhouse_id[]" value="<?php echo $bhouse_id; ?>">
                                        <input type="text" class="form-control" value="<?php echo $bh; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Rules:</label>
                                        <input type="text" class="form-control" name="rules[]" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="col-form-label">Actions:</label>
                                    <div class="btn-group">
                                        <button type="button" class="addRules btn btn-sm btn-dark form-control"><i class="fa fa-plus"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger form-control"><i class="fa fa-trash"></i> </button>
                                    </div>
                                    </div>
                            </div>
                            <div class="newRules"></div>

                            <!-- footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="add_rules">Submit</button>
                            </div> 
                            <!-- End -->
                        </form>
                    </div>
                </div>
</div>
</div>


<!-- MODAL FOR ROOM TYPE -->
<div id="roomType=<?=$bhouse_id;?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Room Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body font-weight-bold">
                        <form action="../models/register.php" method="POST">
                            <div class="row roomType">
                                <div class="col-md-5">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Boarding House:</label>
                                        <input type="hidden" name="id" value="<?php echo $bhouse_id; ?>">
                                        <input type="hidden" name="bhouse_id[]" value="<?php echo $bhouse_id; ?>">
                                        <input type="text" class="form-control" value="<?php echo $bh; ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Room Type:</label>
                                        <input type="text" class="form-control" name="type_name[]" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="col-form-label">Actions:</label>
                                    <div class="btn-group">
                                        <button type="button" class="addType btn btn-sm btn-dark form-control"><i class="fa fa-plus"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger form-control"><i class="fa fa-trash"></i> </button>
                                    </div>
                                    </div>
                            </div>
                            <div class="newRoomType"></div>

                            <!-- footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="add_room_type">Submit</button>
                            </div> 
                            <!-- End -->
                        </form>
                    </div>
                </div>
</div>
</div>


<!-- MODAL FOR ROOM -->
<div id="room=<?=$bhouse_id;?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Room</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body font-weight-bold">
                        <form action="../models/register.php" method="POST" enctype="multipart/form-data">
                            <div class="Room">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Room no.:</label>
                                            <input type="hidden" name="id" value="<?php echo $bhouse_id; ?>">
                                            <input type="hidden" name="bhouse_id" value="<?php echo $bhouse_id; ?>">
                                            <input type="number" class="form-control" name="room_no" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Room Type:</label>
                                            <select name="room_type" class="custom-select-md form-control mb-3" required>
                                                <option>----</option>
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Amenities:</label>
                                            <input type="text" class="form-control" name="amenities" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Image:</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Description:</label>
                                            <textarea name="description" class="form-control" cols="10" rows="5"></textarea>
                                        </div>
                                    </div>
                                    
                                </div><hr>
                            </div>    
                            <div class="newRoom"></div>

                            <!-- footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="add_room">Submit</button>
                            </div> 
                            <!-- End -->
                        </form>
                    </div>
                </div>
</div>
</div>



                                                    






<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click', '.removeButton', function () {
            $(this).closest('.roomType').remove();
            $(this).closest('.roomRules').remove();
        });

        $(document).on('click', '.addRules', function () {
            $('.newRules').append('<div class="row roomRules">\
                            <div class="col-md-3">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Boarding House:</label>\
                                        <input type="hidden" name="id" value="<?php echo $bhouse_id; ?>">\
                                        <input type="hidden" name="bhouse_id[]" value="<?php echo $bhouse_id; ?>">\
                                        <input type="text" class="form-control" value="<?php echo $bh; ?>" disabled>\
                                    </div>\
                                </div>\
                                <div class="col-md-7">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Rules:</label>\
                                        <input type="text" class="form-control" name="rules[]" required>\
                                    </div>\
                                </div>\
                                <div class="col-md-2">\
                                    <label for="" class="col-form-label">Actions:</label>\
                                    <div class="btn-group">\
                                        <button type="button" class="addRules btn btn-sm btn-dark form-control"><i class="fa fa-plus"></i></button>\
                                        <button type="button" class="removeButton btn btn-sm btn-danger form-control"><i class="fa fa-trash"></i> </button>\
                                    </div>\
                                    </div>\
                            </div>');
        });
        $(document).on('click', '.addType', function () {
            $('.newRoomType').append('<div class="row roomType">\
                            <div class="col-md-5">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Boarding House:</label>\
                                        <input type="hidden" name="id" value="<?php echo $bhouse_id; ?>">\
                                        <input type="hidden" name="bhouse_id[]" value="<?php echo $bhouse_id; ?>">\
                                        <input type="text" class="form-control" value="<?php echo $bh; ?>" disabled>\
                                    </div>\
                                </div>\
                                <div class="col-md-5">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Room Type:</label>\
                                        <input type="text" class="form-control" name="type_name[]" required>\
                                    </div>\
                                </div>\
                                <div class="col-md-2">\
                                    <label for="" class="col-form-label">Actions:</label>\
                                    <div class="btn-group">\
                                        <button type="button" class="addType btn btn-sm btn-dark form-control"><i class="fa fa-plus"></i></button>\
                                        <button type="button" class="removeButton btn btn-sm btn-danger form-control"><i class="fa fa-trash"></i> </button>\
                                    </div>\
                                    </div>\
                            </div>');
        });

    });
</script>

            