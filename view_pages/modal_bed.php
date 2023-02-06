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


                                    
<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click', '.removeButton', function () {
            $(this).closest('.mainForm').remove();
        });

        $(document).on('click', '.addRow', function () {
            $('.newRow').append('<div class="row mainForm">\
                                <div class="col-md-2">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Bed no.:</label>\
                                        <input type="hidden" name="r_id" value="<?php echo $rm_id; ?>">\
                                        <input type="hidden" name="bhouse_id[]" value="<?php echo $bhouse_id; ?>">\
                                        <input type="number" class="form-control" name="bed_no[]" required>\
                                    </div>\
                                </div>\
                                <div class="col-md-2">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Room:</label>\
                                        <input type="hidden" class="form-control" name="room_id[]" value="<?php echo $rm_no; ?>">\
                                        <input type="text" class="form-control" value="<?php echo $rm_no; ?>" disabled>\
                                    </div>\
                                </div>\
                                <div class="col-md-2">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Price:</label>\
                                        <input type="text" class="form-control" name="price[]" required>\
                                    </div>\
                                </div>\
                                <div class="col-md-4">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Bed Status:</label>\
                                        <input type="text" class="form-control" name="bed_status[]" required>\
                                    </div>\
                                </div>\
                                <div class="col-md-2">\
                                     <div class="form-group">\
                                        <label for="" class="col-form-label">Actions:</label>\
                                        <div class="btn-group">\
                                            <button type="button" class="addRow btn btn-sm btn-dark form-control"><i class="fa fa-plus"></i></button>\
                                            <button type="button" class="removeButton btn btn-sm btn-danger form-control"><i class="fa fa-trash"></i> </button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
        });
    });
</script>

            