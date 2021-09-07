<?php
    show_sweet_alert('add_parcel_status', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_parcel_status', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_parcel_status', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Parcel Status</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card">
  <div class="card-body">
    <div class="float-right">
      <a href="#" data-toggle="modal" data-target="#add_status_modal" class="btn btn-primary"  >Add New Status</a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Status Title</th>
                <th>Badge Class</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_parcel_status as $row) {

            ?>
            
            <tr>
                <td>
                    <?= $row['id'] ?>

                    <a onclick="return confirm('Do you wanna delete this item ?')" class="btn btn-default btn-sm" href="./pages/db_record_delete.php?var_name=status&id=<?= $row['id'] ?>"><i
                        class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_status&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td><?= $row['status'] ?></td>
                <td class="mt-2 badge badge-<?= $row['badge_class'] ?>"><?= $row['badge_class'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>