<!-- Large modal for  RULES-->
<div id="rules=<?=$bhouse_id;?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Rules</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
</div>
</div>


<!-- Large modal for ROOM -->
<div id="room=<?=$bhouse_id;?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Room</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                    </div>
</div>
</div>


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
                        <form>
                            <div class="row">
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Bed no.:</label>
                                        <input type="number" class="form-control" name="bed_no">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Room:</label>
                                        <input type="number" class="form-control" name="room_id">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Price:</label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Bed Status:</label>
                                        <input type="text" class="form-control" name="bed_status">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                     <div class="form-group">
                                        <label for="" class="col-form-label">Actions:</label>
                                        <button type="button" class="btn btn-sm btn-outline-dark form-control"><i class="fa fa-plus"></i> Add</button>
                                    </div>
                                </div>
                            </div>
                            <!-- footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div> 
                            <!-- End -->
                        </form>
                    </div>
                </div>
</div>
</div>

            