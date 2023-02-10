<div class="table-responsive" style="height:300px"><br>
    
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='bathroom' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-bath mr-4' style='font-size:20px'></i><b>bathroom</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='location_features' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-map-marker mr-4' style='font-size:20px'></i><b>location features</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='kitchen_and_dining' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-cutlery mr-4' style='font-size:20px'></i><b>kitchen and dining</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='parking_and_facilities' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-car mr-4' style='font-size:20px'></i><b>parking and facilities</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='bedroom_and_laundry' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-bed mr-4' style='font-size:20px'></i><b>bedroom and laundry</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='heating_and_cooling' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-fan mr-4' style='font-size:20px'></i><b>heating and cooling</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='indoor' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-home mr-4' style='font-size:20px'></i><b>indoor</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='outdoor' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-walking mr-4' style='font-size:20px'></i><b>outdoor</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='services' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-gears mr-4' style='font-size:20px'></i><b>services</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-check mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div> 
        <div class="">
            <?php 
                $sql = mysqli_query($conn,"SELECT * FROM amenities WHERE bhouse_id ='$bhouse_id' AND place_offer='not_included' ");
                $check = mysqli_num_rows($sql);

                if($check == 0) {
                    // echo "hide";
                }else{
                    if($sql->num_rows > 0):?>
                    <span><i class='fa fa-eye-slash mr-4' style='font-size:20px'></i><b>not_included</b><hr></span>
                    <ul class="list-group-horizontal">
                        <table>
                            <tbody>
                                <?php while($ame = $sql->fetch_row()): ?>
                                    <li class="list-group-item  mr-2 mb-2">
                                        <span><i class="fa fa-close mr-2"></i> <?=$ame['3'];?></span>
                                    </li>    
                                <?php endwhile;?>    
                            </tbody>
                        </table>
                    </ul>
                    <?php endif;
                }
            ?>
        </div>
</div> 