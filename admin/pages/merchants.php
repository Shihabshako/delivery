<?php
    show_sweet_alert('add_delivery_boy', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_delivery_boy', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_delivery_boy', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Merchants</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card">
  <div class="card-body">
    <div class="float-right">
      <a href="#" data-toggle="modal" data-target="#add_delivery_boy_modal" class="btn btn-primary"  >Add New Merchant</a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Full Name</th>
                <th>Shop Email</th>
                <th>Shops</th>  
                <th>Shop Address</th>  
                <th>Phone Number</th> 
                <th>Referrer By</th> 
                <th>Product Type</th> 
                <th>Pickup Address</th> 
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_merchants as $row) {
                $area = get_existing_details('areas','id',$row['pickup_area']);
                $product_type = get_existing_details('products','id',$row['product_type']);
                $shop_list_per_user = get_all_dropdowns('shop_list_per_user', $row['shop_email']);
                $user_details = get_existing_details('accounts','id',$row['account_type']);

                if($user_details['account_title'] == 'Admin'){
                    continue;
                }
            ?>
            
            <tr>
                <td >
                    <?= $row['id'] ?>

                    <a onclick="return confirm('Do you wanna delete this item ?')" class="btn btn-default btn-sm" href="./pages/db_record_delete.php?var_name=merchant&id=<?= $row['id'] ?>"><i  class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_merchant&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td ><?= $row['full_name'] ?></td>
                <td><?= $row['shop_email'] ?></td>
                <td>
                    <?php
                        foreach ($shop_list_per_user as $shop) {
                            echo $shop['shop_name']."<br>";
                        }
                    ?>
                </td>
                <td><?= $row['shop_address'] ?></td>
                <td><?= $row['pickup_phone'] ?></td>
                <td><?= $row['referred_by'] ?></td>
                <td><?= $product_type['product_title'] ?></td>
                <td><?= $area['area_name'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>