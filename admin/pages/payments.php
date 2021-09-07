<?php
    show_sweet_alert('add_area', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_area', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_area', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>

<style>
    .unselectable{
        background-color: #ddd;
        cursor: not-allowed;
    }

    /* for sm */

    .custom-switch.custom-switch-sm .custom-control-label {
        padding-left: 1rem;
        padding-bottom: 1rem;
    }

    .custom-switch.custom-switch-sm .custom-control-label::before {
        height: 1rem;
        width: calc(1rem + 0.75rem);
        border-radius: 2rem;
    }

    .custom-switch.custom-switch-sm .custom-control-label::after {
        width: calc(1rem - 4px);
        height: calc(1rem - 4px);
        border-radius: calc(1rem - (1rem / 2));
    }

    .custom-switch.custom-switch-sm .custom-control-input:checked ~ .custom-control-label::after {
        transform: translateX(calc(1rem - 0.25rem));
    }

    /* for md */

    .custom-switch.custom-switch-md .custom-control-label {
        padding-left: 2rem;
        padding-bottom: 1.5rem;
    }

    .custom-switch.custom-switch-md .custom-control-label::before {
        height: 1.5rem;
        width: calc(2rem + 0.75rem);
        border-radius: 3rem;
    }

    .custom-switch.custom-switch-md .custom-control-label::after {
        width: calc(1.5rem - 4px);
        height: calc(1.5rem - 4px);
        border-radius: calc(2rem - (1.5rem / 2));
    }

    .custom-switch.custom-switch-md .custom-control-input:checked ~ .custom-control-label::after {
        transform: translateX(calc(1.5rem - 0.25rem));
    }

    /* for lg */

    .custom-switch.custom-switch-lg .custom-control-label {
        padding-left: 3rem;
        padding-bottom: 2rem;
    }

    .custom-switch.custom-switch-lg .custom-control-label::before {
        height: 2rem;
        width: calc(3rem + 0.75rem);
        border-radius: 4rem;
    }

    .custom-switch.custom-switch-lg .custom-control-label::after {
        width: calc(2rem - 4px);
        height: calc(2rem - 4px);
        border-radius: calc(3rem - (2rem / 2));
    }

    .custom-switch.custom-switch-lg .custom-control-input:checked ~ .custom-control-label::after {
        transform: translateX(calc(2rem - 0.25rem));
    }

    /* for xl */

    .custom-switch.custom-switch-xl .custom-control-label {
        padding-left: 4rem;
        padding-bottom: 2.5rem;
    }

    .custom-switch.custom-switch-xl .custom-control-label::before {
        height: 2.5rem;
        width: calc(4rem + 0.75rem);
        border-radius: 5rem;
    }

    .custom-switch.custom-switch-xl .custom-control-label::after {
        width: calc(2.5rem - 4px);
        height: calc(2.5rem - 4px);
        border-radius: calc(4rem - (2.5rem / 2));
    }

    .custom-switch.custom-switch-xl .custom-control-input:checked ~ .custom-control-label::after {
        transform: translateX(calc(2.5rem - 0.25rem));
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Payments Clearance</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<div class="card collapsed-card">
    <div class="card-header">      
        <h3 class="card-title">Payment Summery</h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <div class="card-body" hidden>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-cogs"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">Total Expenses</span>
                        <span class="info-box-number" ><?= counting_stats('expenses') ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                    <!-- /.info-box -->
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Created At</th>
                <th>Pending/Picked</th>  
                <th>Unpaid/Paid</th>  
                <th>On the way</th>  
                <th>Delivered</th>  
                <th>Return?</th>  
                <th>Pending/Returned</th>  
            </tr>
        </thead>
        <tbody id="tbody_to_refresh">
            <?php 
            $list_payments = get_all_dropdowns('parcels_all');
            foreach ($list_payments as $row) {
                $parcel_id = $row['id'];
            ?>
            
            <tr>
                <td>
                    Track ID: <?= $row['tracking_id'] ?><br>
                    Memo ID: <?= $row['memo_number'] ?>
                </td>
                <td><?= $row['created_date'] ?></td>
                <td>
                    <div class="form-group">
                        <div class="custom-control custom-switch custom-switch-md custom-switch-off-danger custom-switch-on-success" >
                            <input type="checkbox" class="custom-control-input" id="customSwitch3<?= $parcel_id ?>" onchange="status_change('pending/picked', this , <?= $parcel_id ?> )"   <?= get_parcel_status_for_payment('Picked', $parcel_id) ?>  >
                            <label class="custom-control-label" for="customSwitch3<?= $parcel_id ?>" style="cursor:pointer !important"></label>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="custom-control custom-switch custom-switch-md custom-switch-off-danger custom-switch-on-success" >
                            <input type="checkbox" class="custom-control-input" id="customSwitch4<?= $parcel_id ?>" onchange="status_change('unpaid/paid', this , <?= $parcel_id ?> )" <?= get_parcel_status_for_payment('Paid', $parcel_id) ?> >
                            <label class="custom-control-label" for="customSwitch4<?= $parcel_id ?>" style="cursor:pointer !important"></label>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="checkbox" class="form-control" onchange="status_change('onTheWay', this , <?= $parcel_id ?>, '<?= $row['tracking_id'] ?>', '<?= $row['memo_number'] ?>' )" <?= get_parcel_status_for_payment('onTheWay', $parcel_id) ?> >
                </td>
                <td>
                    <input type="checkbox" class="form-control" onchange="status_change('delivered', this , <?= $parcel_id ?> )" <?= get_parcel_status_for_payment('Delivered', $parcel_id) ?>>
                </td>
                <td> 
                    <input type="checkbox" class="form-control" onchange="status_change('is_returnable', this , <?= $parcel_id ?> )" <?= get_parcel_status_for_payment('Pending Return', $parcel_id) ?> <?= get_parcel_status_for_payment('Returned', $parcel_id) ?> >
                </td>
                <td disabled>
                    <div class="form-group">
                        <div class="custom-control custom-switch custom-switch-md custom-switch-off-danger custom-switch-on-success" >
                            <input type="checkbox" class="custom-control-input" id="customSwitch6<?= $parcel_id ?>" onchange="status_change('pending/returned', this , <?= $parcel_id ?> )" <?= get_parcel_status_for_payment('Returned', $parcel_id) ?> >
                            <label class="custom-control-label" for="customSwitch6<?= $parcel_id ?>" style="cursor:pointer !important"></label>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
    function status_change(slot, switch_status , parcel_id , trackId = null, memo_id = null){

        // true = right option
        // false = left option
        if(!confirm("Are you sure?")){
            switch_status.checked = !switch_status.checked;
            return;
        }
        switch_status = switch_status.checked ? 'right' : 'left';

    
        

        if(slot == 'onTheWay'){
            
            $('#add_boy_to_parcel_modal').modal('show');
            $('#track_id').val(trackId);
            $('#memo_number').val(memo_id);            
            $('#parcel_id_in_modal').val(parcel_id);            
        }
        
        $.ajax({
                url:'pages/ajax_generator.php',
                method : "POST",
                data: {
                    change_parcel_status: true,
                    slot : slot,
                    switch_status : switch_status,
                    parcel_id : parcel_id
                },
                dataType:"TEXT",
                success:function(response){    
                    console.log(response.trim())       
                    if(response.trim() == 'success'){
                        $("#tbody_to_refresh").load(location.href+" #tbody_to_refresh>*",""); 
                    } 
            }
        })

        

    }
</script>