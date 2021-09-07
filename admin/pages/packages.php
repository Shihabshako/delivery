<?php
    show_sweet_alert('add_pkg', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_pkg', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_pkg', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Packages</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card">
  <div class="card-body">
    <div class="float-right">
      <a href="#" data-toggle="modal" data-target="#add_pkg_modal" class="btn btn-primary"  >Add New Package</a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Package Title</th>
                <th>Additional Parameter</th>  
                <th>Tooltip</th>  
                <th>Price</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_package as $row) {

            ?>
            
            <tr>
                <td>
                    <?= $row['id'] ?>

                    <a onclick="return confirm('Do you wanna delete this item ?')" class="btn btn-default btn-sm" href="./pages/db_record_delete.php?var_name=packages&id=<?= $row['id'] ?>"><i  class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_package&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td><?= $row['package_title'] ?></td>
                <td><?= $row['additional_parameter'] ?></td>
                <td><?= $row['tooltip'] ?></td>
                <td><?= $row['price'] ?>  <span class="ml-1">BDT</span></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>