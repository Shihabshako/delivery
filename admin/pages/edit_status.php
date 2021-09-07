<?php
   $id = $_GET['id'];
   $details = get_existing_details('status','id',$id);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Edit a Status</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<form action="pages/db_record_update.php" method="POST">
    <input type="hidden" name="variable_name" value="status">
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
                        <label >Status</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="status" value="<?= $details['status'] ?>" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label >Badge_class</label><span class="text-danger">*</span>
                        <select name="badge_class" class="custom-select" style="width: 100%;" id="" >
                            <option value="default" disabled <?= 'default' == $details['badge_class'] ? 'selected' : '' ?> >Choose a Class</option>
                            <option value="info" class="bg-info" <?= 'info' == $details['badge_class'] ? 'selected' : '' ?> >Info</option>
                            <option value="success" class="bg-success" <?= 'success' == $details['badge_class'] ? 'selected' : '' ?> >Success</option>
                            <option value="warning" class="bg-warning"  <?= 'warning' == $details['badge_class'] ? 'selected' : '' ?>>Warning</option>
                            <option value="danger" class="bg-danger" <?= 'danger' == $details['badge_class'] ? 'selected' : '' ?> >Danger</option>                                  
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancel('parcel_status')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
