<?php
   $id = $_GET['id'];
   $details = get_existing_details('expenses','id',$id);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Edit an expense</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<form action="pages/db_record_update.php" method="POST">
    <input type="hidden" name="variable_name" value="expenses">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label >ID</label>
                        <input class="form-control" type="text" name="id" value="<?= $id ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label >Expenses By</label><span class="text-danger">*</span>
                        <select name="expenses_by" class="select2" style="width: 100%;" id="" required>
                            <option value="" disabled >Choose</option>
                            <?php
                                foreach ($list_admins as $row) {
                                    ?><option value="<?= $row['id'] ?>" <?= $row['id'] == $details['expenses_by'] ? 'selected' : '' ?> ><?= $row['full_name']  ?></option><?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label >Date</label><span class="text-danger">*</span>
                        <input class="form-control " type="date" name="date" value="<?= $details['date'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label >Expanse Amount</label><span class="text-danger">*</span>
                        <input class="form-control " type="number" name="cost_amount" value="<?= $details['cost_amount'] ?>" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label >Expanse Details</label><span class="text-danger">*</span>
                        <input class="form-control " type="text" name="cost_details" value="<?= $details['cost_details'] ?>" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancel('expenses')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
