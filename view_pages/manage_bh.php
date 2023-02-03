<div class="row">
    <div class="col-md-3">
        <div class="">
            <a href="../owner/dashboard.php"><button class="btn btn-sm btn-outline-dark mb-3"> <i class="fa fa-angle-double-left"></i> Back</button></a>
        </div>
        <div class="card-header">
                <img class="card-img-top" src="../models/upload_bh/<?=$img;?>" alt="Card image cap" height="250px" width="250px">
                <hr style="border: 2px solid #0a0a0a;">
                <span class="text-center text-uppercase">
                    <b>BH NAME:</b> <span style="margin-left: 15px"><?=$bh;?></span><br>
                    <b>Location:</b> <span style="margin-left: 15px"><?=$loc;?></span><br>
                    <b>Description:</b> <span style="margin-left: 15px"><?=$desc;?></span><br>
                    <b>Amenities:</b> <span style="margin-left: 15px"><?=$ame;?></span><br>
                </span><br>
        </div>
    </div>
    <div class="col-md-9">
        <div class="">
            <br><br>
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                        <span class="float-right">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus"></i> Add</button>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item" href="dashboard.php?male" data-toggle="modal" data-target=".bd-example-modal-lg">1</a>
                                        <a class="dropdown-item" href="dashboard.php?female" data-toggle="modal" data-target=".bd-example-modal-lg">2</a>
                                        <a class="dropdown-item" href="dashboard.php?senior" data-toggle="modal" data-target=".bd-example-modal-lg">3</a>
                                    </div>
                                </div>
                        </span>
                </div>
            </div>
            <?php include_once '../view_pages/modal.php'; ?>
        </div>
    </div>
    
</div>