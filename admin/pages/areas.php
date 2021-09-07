<?php
    show_sweet_alert('add_area', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_area', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_area', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Areas</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card">
  <div class="card-body">
    <div class="float-right">
      <a href="#" data-toggle="modal" data-target="#add_area_modal" class="btn btn-primary"  >Add New Area</a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Area Name</th>
                <th>Area Code</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_area as $row) {

            ?>
            
            <tr>
                <td>
                    <?= $row['id'] ?>

                    <a onclick="return confirm('Do you wanna delete this item ?')" class="btn btn-default btn-sm" href="./pages/db_record_delete.php?var_name=areas&id=<?= $row['id'] ?>"><i
                        class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_area&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td><?= $row['area_name'] ?></td>
                <td><?= $row['area_code'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>