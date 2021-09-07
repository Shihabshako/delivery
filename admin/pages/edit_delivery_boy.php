<?php
   $id = $_GET['id'];
   $details = get_existing_details('delivery_boys','id',$id);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Edit a Package</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<form action="pages/db_record_update.php" method="POST">
    <input type="hidden" name="variable_name" value="delivery_boy">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label >ID</label>
                        <input class="form-control" type="text" name="id" value="<?= $details['id'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label >Full Name</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="full_name" value="<?= $details['full_name'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label >Address</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="address" value="<?= $details['address'] ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label >Phone Number</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="phone_number" value="<?= $details['phone_number'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label >NID Number</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="nid_number" value="<?= $details['nid_number'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label >Basic Salary</label><span class="text-danger">*</span>
                        <input class="form-control" type="number" name="basic_salary" value="<?= $details['basic_salary'] ?>" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label >Unique Id</label>
                        <input class="form-control" type="text" name="boy_id"  value="<?= $details['boy_id'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label >Referrer Full Name</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="referrer_name" value="<?= $details['referrer_name'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label >Referrer Address</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="referrer_address" value="<?= $details['referrer_address'] ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label >Referrer Phone Number</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="referrer_phone_number" value="<?= $details['referrer_phone_number'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label >Referrer NID Number</label><span class="text-danger">*</span>
                        <input class="form-control" type="text" name="referrer_nid" value="<?= $details['referrer_nid'] ?>" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >Monthly Target</label><span class="text-danger">*</span>
                                <input class="form-control" type="number" name="monthly_target" value="<?= $details['monthly_target'] ?>" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label >PCT(%) per parcel</label><span class="text-danger">*</span>
                                <input class="form-control" type="number" name="pct_per_parcel" value="<?= $details['pct_per_parcel'] ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancel('delivery_boys')">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
