<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>All your pickup locations</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="container">
    <div class="row" id="pickup_location_body">
        <div class="col-md-3 col-12">
            <div class="info-box bg-gradient-info" style="cursor:pointer" onclick="add_new_pickup_location()"> 
              <span class="info-box-icon"><i class="fas fa-plus-square"></i></span>

              <div class="info-box-content">
                <h4>Add a new pickup location</h4>
                
              </div>

              <!-- /.info-box-content -->
            </div>
        </div>
        <?php
            $all_data = get_all_dropdowns('pickup_address_per_user', $user_email);
            while($row = mysqli_fetch_array($all_data)){
                ?>
                    <div class="col-md-3 col-12">
                        <div class="info-box bg-gradient-info">
                            <span class="info-box-icon"><i class="fas fa-map-marked-alt"></i></span>
                            <div class="info-box-content">
                                <div class="info-box-text text-wrap">
                                   <?= $row['address'] ?>
                                </div>
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
    function add_new_pickup_location(){
        $('#pickup_address_add_modal').modal('show');
    }

</script>