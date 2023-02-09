<div class="row">
    <div class="col-md-3">
        <div class="">
            <a href="../owner/dashboard.php"><button class="btn btn-sm btn-outline-dark mb-3"> <i class="fa fa-angle-double-left"></i> Back</button></a>
        </div>
        <div class="">
                <img class="card-img-top" src="../models/upload_bh/<?=$img;?>" alt="Card image cap" height="250px" width="250px">
                <hr style="border: 2px solid #0a0a0a;">
                <span class="text-center text-uppercase">
                    <b>BH NAME:</b> <span style="margin-left: 15px"><?=$bh;?></span><br>
                    <b>Location:</b> <span style="margin-left: 15px"><?=$loc;?></span><br>
                    <b>Description:</b> <span style="margin-left: 15px"><?=$desc;?></span><br>
                </span><br>
        </div>
    </div>
    <div class="col-md-9">
        <br><br>
        <div class="">
            <div class="">
                <div class="row">
                        <div class="col-md-6">
                            <h5><b>MANAGE BOARDING HOUSE</b></h5>
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
                                                            <a class="dropdown-item" href="#" data-target="#amenities=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Amenities</a>
                                                            <a class="dropdown-item" href="#" data-target="#roomType=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Room type</a>
                                                            <a class="dropdown-item" href="#" data-target="#room=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Rooms</a>
                                                            <a class="dropdown-item" href="#" data-target="#rules=<?=$bhouse_id;?>" data-toggle="modal" data-target=".bd-example-modal-lg">Rules</a>
                                                        </div>
                                                    </div>
                                            </span>
                                    </div>
                                </div>
                                <?php include_once '../view_pages/modal.php'; ?>
                            </div>
                        </div>    
                </div>   
            </div> <hr style="border: 2px solid #0a0a0a;">
            <div class="">
                <div class="row">
                        <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h7><b><i class="fa fa-list"></i> AMENITIES</b></h7>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="table-responsive card" style="height:200px">
                                    <?php 
                                        $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' ORDER BY place_offer ASC ");
                                        if($sql->num_rows > 0):
                                    ?>
                                        <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th>place offer</th>
                                                    <th>amenities</th>
                                                    <th>actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($type = $sql->fetch_row()):?>
                                                    <tr>
                                                        <td><?php echo $type['2']; ?></td>
                                                        <td><?php echo $type['3']; ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <?php $tbl = "roomType"; ?>
                                                                <a href="../owner/edit_page.php?bhouse_id=<?=$bhouse_id;?>&&roomTypeID=<?=$type['0'];?>&&tbl=<?=$tbl;?>"><button type="button" class="btn btn-sm"><i class="fa fa-edit"></i></button></a>
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
                        
                        <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h7><b><i class="fa fa-list"></i> RULES</b></h7>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="table-responsive card" style="height:200px">
                                    <?php 
                                        $sql = mysqli_query($conn,"SELECT * FROM rules WHERE bhouse_id ='$bhouse_id' ");
                                        if($sql->num_rows > 0):
                                    ?>
                                        <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th>no.</th>
                                                    <th>rules</th>
                                                    <th>actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; while ($rule = $sql->fetch_row()):?>
                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo $rule['2']; ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="../owner/edit_page.php?bhouse_id=<?=$bhouse_id;?>&&rule_id=<?=$rule['0'];?>&&tbl=rules"><button class="btn btn-sm "><i class="fa fa-edit"></i></button></a>
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
            <div class="">
                <div class="row">
                        <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h7><b><i class="fa fa-list"></i> ROOM TYPE</b></h7>
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="table-responsive card" style="height:200px">
                                    <?php 
                                        $sql = mysqli_query($conn,"SELECT * FROM room_type WHERE bhouse_id ='$bhouse_id' ");
                                        if($sql->num_rows > 0):
                                    ?>
                                        <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th>room_type</th>
                                                    <th>actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($type = $sql->fetch_row()):?>
                                                    <tr>
                                                        <td><?php echo $type['2']; ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <?php $tbl = "roomType"; ?>
                                                                <a href="../owner/edit_page.php?bhouse_id=<?=$bhouse_id;?>&&roomTypeID=<?=$type['0'];?>&&tbl=<?=$tbl;?>"><button type="button" class="btn btn-sm"><i class="fa fa-edit"></i></button></a>
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

                        <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h7><b><i class="fa fa-list"></i> ROOM</b></h7>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="table-responsive card" style="height:200px">
                                    <?php 
                                        $sql = "SELECT r.room_id, r.bhouse_id, r.room_no, rt.type_name, r.description, r.amenities
                                                        FROM room AS r
                                                        INNER JOIN room_type AS rt
                                                        ON rt.room_type_id = r.room_type_id

                                                        WHERE r.bhouse_id ='$bhouse_id' ";

                                        $res = $conn->query($sql);            

                                        if($res->num_rows > 0):
                                    ?>
                                        <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th>room_no.</th>
                                                    <th>room_type</th>
                                                    <th>description</th>
                                                    <th>actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($room = $res->fetch_row()):?>
                                                    <tr>
                                                        <td><?php echo $room['2']; ?></td>
                                                        <td><?php echo $room['3']; ?></td>
                                                        <td><?php echo $room['4']; ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="../owner/edit_page.php?bhouse_id=<?=$bhouse_id;?>&&room_id=<?=$room['0'];?>&&tbl=rooms"><button class="btn btn-sm border-dark"><i class="fa fa-edit"></i></button></a>
                                                                <a href="../owner/rooms.php?bhouse_id=<?=$bhouse_id;?>&&room_id=<?=$room['0'];?>"><button class="btn btn-sm border-dark"><i class="fa fa-angle-double-right"></i></button></a>
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
            <div class="">
                <div class="row">
                        <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h7><b><i class="fa fa-list"></i> IMAGE</b></h7>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="table-responsive card" style="height:500px"><br>
                                    <?php 
                                        $sql = mysqli_query($conn,"SELECT * FROM room WHERE bhouse_id ='$bhouse_id' ");
                                        if($sql->num_rows > 0):
                                    ?>
                                        <ul class="list-group-horizontal">
                                            <table>
                                                <tbody>

                                                    <?php while($img = $sql->fetch_row()): ?>
                                                    
                                                        <li id="list" class="list-group-item  mr-4 mb-4">
                                                                <div class="" style="width: 16rem;">
                                                                    <span class="text-center text-uppercase"><b>ROOM <?=$img['2'];?>
                                                                    <span class="float-right"><a href="../owner/edit_page.php?bhouse_id=<?=$bhouse_id;?>&&room_id=<?=$img['0'];?>&&tbl=images" type="button" > <i class="fa fa-edit text-dark "></i></a></span>
                                                                    </b></span><br>
                                                                    <hr style="border: 2px solid #0a0a0a;">
                                                                    <img class="card-img-top" src="../models/upload_room/<?=$img['5'];?>" alt="Card image cap" height="250px" width="250px">
                                                                </div>
                                                        </li>
                                                    <?php endwhile;?>    
                                                </tbody>
                                            </table>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <?php include_once '../view_pages/modal.php'; ?>
                        </div>
                </div>   
            </div>
            
        </div>    
        
    </div>
    
</div>