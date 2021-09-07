<?php
   $id = $_GET['id'];
   $details = get_existing_details('user_charges','id',$id);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Edit COD percentage</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<form action="pages/db_record_update.php" method="POST">
    <input type="hidden" name="variable_name" value="cod_percentage">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label >ID</label>
                        <input class="form-control" type="text" name="id" value="<?= $details['id'] ?>" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label >Merchant Name</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="" value="<?= get_user_name('', $details['user_id'] ) ?>" readonly required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label >COD Percentage</label><span class="text-danger">*</span>
                        <input class="form-control" type="number" name="cod_percentage"  min="0" max="100" value="<?= $details['cod_percentage'] ?>"  required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancel('cod_percentage')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
