<div class="row">
    <div class="col-md-3">
        <div class="">
            <a href="../owner/manage_house.php?bhouse_id=<?=$bhouse_id;?>"><button class="btn btn-sm btn-outline-dark mb-3"> <i class="fa fa-angle-double-left"></i> Back</button></a>
        </div>
        <div class="card-header">
                <img class="card-img-top" src="../models/upload_room/<?=$image;?>" alt="Card image cap" height="250px" width="250px">
                <hr style="border: 2px solid #0a0a0a;">
                <span class="text-center text-uppercase">
                    <b>ROOM NO.:</b> <span style="margin-left: 15px"><?=$rm_no;?></span><br>
                    <b>ROOM TYPE:</b> <span style="margin-left: 15px"><?=$room_type;?></span><br>
                    <b>Description:</b> <span style="margin-left: 15px"><?=$description;?></span><br>
                    <b>NO. OF BEDS:</b> <span style="margin-left: 15px"><?=$count_bed;?></span><br>
                    <b>Amenities:</b> <span style="margin-left: 15px"><?=$amenities;?></span><br>
                </span><br>
        </div>
    </div>
    <div class="col-md-9">
        <br><br>
        <div class="card-header">
            <div class="">
                <div class="row">
                        <div class="col-md-6">
                            <h5><b>MANAGE BOARDING HOUSE    <span class="ml-1"> <i class="fa fa-angle-double-right"></i> ROOM <?=$rm_no;?></span></b></h5>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                            <span class="float-right">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus"></i> Add</button>
                                                            <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#" data-target="#bed=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Bed</a>
                                                            <!-- <a class="dropdown-item" href="#" data-target="#roomType=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Room type</a>
                                                            <a class="dropdown-item" href="#" data-target="#room=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Room</a>
                                                            <a class="dropdown-item" href="#" data-target="#rules=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Rule</a> -->
                                                        </div>
                                                    </div>
                                            </span>
                                    </div>
                                </div>
                                <?php include_once '../view_pages/modal_bed.php'; ?>
                            </div>
                        </div>    
                </div>   
            </div> <hr style="border: 2px solid #0a0a0a;">
            <div class="">
                <div class="row">
                        <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h7><b><i class="fa fa-list"></i> BED</b></h7>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="table-responsive card" style="height:200px">
                                    <?php 
                                        $sql = mysqli_query($conn,"SELECT * FROM bed WHERE bhouse_id ='$bhouse_id' AND room_id='$rm_no' ");
                    
                                        if($sql->num_rows > 0):
                                    ?>
                                        <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th>bed no.</th>
                                                    <th>room no.</th>
                                                    <th>price</th>
                                                    <th>bed_status</th>
                                                    <th>actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = $sql->fetch_row()):?>
                                                    <tr>
                                                        <td><?php echo $row['2']; ?></td>
                                                        <td><?php echo $row['3']; ?></td>
                                                        <td><?php echo $row['4']; ?></td>
                                                        <td><?php echo $row['5']; ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button class="btn btn-sm "><i class="fa fa-edit"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    <?php endif; ?>
                                </div>
                                <?php include_once '../view_pages/modal.php'; ?>
                        </div>       
                </div>   
            </div><br> 
        </div>    
        
    </div>
    
</div>