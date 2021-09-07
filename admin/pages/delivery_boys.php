<?php
    show_sweet_alert('add_delivery_boy', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_delivery_boy', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_delivery_boy', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Delivery Boys</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card">
  <div class="card-body">
    <div class="float-right">
      <a href="#" data-toggle="modal" data-target="#add_delivery_boy_modal" class="btn btn-primary"  >Add New Boy</a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Unique ID</th>
                <th>Deliver Boy NID</th>
                <th>Delivery Boy Details</th>  
                <th>Referrer Details</th> 
                <th>Referrer NID</th> 
                <th>information's</th> 
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_delivery_boys as $row) {

            ?>
            

            <tr>
                <td class="align-middle">
                    <?= $row['id'] ?>

                    <a onclick="return confirm('Do you wanna delete this item ?')" class="btn btn-default btn-sm" href="./pages/db_record_delete.php?var_name=delivery_boy&id=<?= $row['id'] ?>"><i  class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_delivery_boy&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td class="align-middle"><?= $row['boy_id'] ?></td>
                <td><?= $row['nid_number'] ?></td>
                <td>
                    <?= $row['full_name'] ?><br>
                    <?= $row['phone_number'] ?><br>
                    <?= $row['address'] ?>
                </td>
                <td>
                    <?= $row['referrer_name'] ?><br>
                    <?= $row['referrer_phone_number'] ?><br>
                    <?= $row['referrer_address'] ?>
                </td>
                <td><?= $row['referrer_nid'] ?></td>
                <td>
                  Basic Salary: <?= $row['basic_salary'] ?> <br>
                  Monthly Target: <?= $row['monthly_target'] ?> <br>
                  PCT Parcel: <?= $row['pct_per_parcel'] ?>
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