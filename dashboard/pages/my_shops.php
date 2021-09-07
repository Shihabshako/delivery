<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>All your shops</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="container">
    <div class="row" id="shop_body">
        <div class="col-md-3 col-12">
            <div class="info-box bg-gradient-orange" style="cursor:pointer" onclick="add_new_shop()"> 
              <span class="info-box-icon"><i class="fas fa-plus-square"></i></span>

              <div class="info-box-content">
                <h3>Add a new shop</h3>
                
              </div>

              <!-- /.info-box-content -->
            </div>
        </div>
        <?php
            $all_data = get_all_dropdowns('shop_list_per_user', $user_email);
            while($row = mysqli_fetch_array($all_data)){
                ?>
                    <div class="col-md-3 col-12">
                        <div class="info-box bg-gradient-orange">
                            <span class="info-box-icon"><i class="fas fa-store"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text font-weight-bold"><?= $row['shop_name'] ?></span> 
                                <span class="info-box-number font-weight-normal">Total <?= shop_stats('total_order_per_shops',$row['id'], $uid) ?> Deliveries</span>

                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= shop_stats('successful_deliveries_per_shops',$row['id'], $uid) ?>%"></div>
                                </div>
                                <span class="progress-description">
                                    <?= shop_stats('successful_deliveries_per_shops',$row['id'], $uid) ?>% Successful Deliveries
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                <?php
            }
        ?>
        
        
    </div>
</div>

<script>
    function add_new_shop(){
        $('#shop_add_modal').modal('show');
    }

</script>