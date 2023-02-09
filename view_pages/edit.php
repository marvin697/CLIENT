<?php 
     if(isset($_GET['bhouse_id']) && isset($_GET['tbl'])){
        $bhouse_id = $_GET['bhouse_id'];
        $tbl = $_GET['tbl'];

        //bh table
        $sql = mysqli_query($conn,"SELECT *FROM boarding_house WHERE bhouse_id ='$bhouse_id'  ");
        $row = mysqli_fetch_array($sql);

        $bh = $row['bhouse_name'];
        $desc = $row['description'];
        $loc = $row['location'];
        $img = $row['image'];
        $added_user = $row['user_id'];
        
        
    }     
?>
<div class="row">
    <div class="col-md-3">
        <div class="">
            <a href="../owner/manage_house.php?bhouse_id=<?=$bhouse_id;?>"><button class="btn btn-sm btn-outline-dark mb-3"> <i class="fa fa-angle-double-left"></i> Back</button></a>
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
                        <div class="col-md-10">
                            <h5><b>MANAGE BOARDING HOUSE    <span class="ml-1"> <i class="fa fa-angle-double-right"></i> 
                                                UPDATE <?php  

                                                            if(isset($_GET['tbl'])){

                                                                $check = $_GET['tbl'];

                                                                if($check == 'roomType'){
                                                                    echo "ROOM TYPE";
                                                                }elseif($check == 'rules'){
                                                                    echo "RULES";
                                                                }elseif($check == 'rooms'){
                                                                    echo "ROOM";
                                                                }elseif($check == 'images'){
                                                                    echo "IMAGE";
                                                                }elseif($check == 'bed'){
                                                                    echo "BED";
                                                                }else{
                                                                    echo "";
                                                                }
                                                            }
                                                        ?>
                            </span></b></h5>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                            
                                    </div>
                                </div>
                            </div>
                        </div>    
                </div>   
            </div> <hr style="border: 2px solid #0a0a0a;">
            <div class="">
                <div class="row">
                        <div class="col-md-12">
                                <?php include_once '../forms/owner_update.php'; ?>
                        </div>     
                </div>   
            </div><br> 
        </div>    
        
    </div>
    
</div>