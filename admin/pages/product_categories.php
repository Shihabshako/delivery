<?php
    show_sweet_alert('add_prod_cat', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_prod_cat', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_prod_cat', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Product Categories</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card">
  <div class="card-body">
    <div class="float-right">
      <a href="#" data-toggle="modal" data-target="#add_product_category_modal" class="btn btn-primary"  >Add New Category</a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Product Type</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_product_type as $row) {

            ?>
            
            <tr>
                <td>
                    <?= $row['id'] ?>

                    <a onclick="return confirm('Do you wanna delete this item ?')" class="btn btn-default btn-sm" href="./pages/db_record_delete.php?var_name=products&id=<?= $row['id'] ?>"><i
                        class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_product_category&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td><?= $row['product_title'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>