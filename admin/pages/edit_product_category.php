<?php
   $id = $_GET['id'];
   $details = get_existing_details('products','id',$id);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Edit a Product Category</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<form action="pages/db_record_update.php" method="POST">
    <input type="hidden" name="variable_name" value="products">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label >ID</label>
                        <input class="form-control" type="text" name="id" value="<?= $details['id'] ?>" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label >Area Name</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="product_title" value="<?= $details['product_title'] ?>" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancel('product_categories')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
