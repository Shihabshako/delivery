<div class="modal fade" id="add_delivery_boy_modal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
    <form action="pages/db_record_add.php" method="POST">
        <input type="hidden" name="variable_name" value="delivery_boy">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Add a new Delivery Boy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >ID</label>
                                <input class="form-control" type="text" name="id" value="<?= get_max_id_for_add('delivery_boys'); ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label >Full Name</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="full_name" required>
                            </div>

                            <div class="form-group">
                                <label >Address</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="address" required>
                            </div>
                            
                            <div class="form-group">
                                <label >Phone Number</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="phone_number" required>
                            </div>

                            <div class="form-group">
                                <label >NID Number</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="nid_number" required>
                            </div>
                            <div class="form-group">
                                <label >Basic Salary</label><span class="text-danger">*</span>
                                <input class="form-control" type="number" name="basic_salary" value="6000" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label >Unique Id</label>
                                <input class="form-control" type="text" name="boy_id" value="<?= generate_boy_id(get_max_id_for_add('delivery_boys')) ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label >Referrer Full Name</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="referrer_name" required>
                            </div>

                            <div class="form-group">
                                <label >Referrer Address</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="referrer_address" required>
                            </div>
                            
                            <div class="form-group">
                                <label >Referrer Phone Number</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="referrer_phone_number" required>
                            </div>

                            <div class="form-group">
                                <label >Referrer NID Number</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="referrer_nid" required>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label >Monthly Target</label><span class="text-danger">*</span>
                                        <input class="form-control" type="number" name="monthly_target" value="500" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label >PCT(%) per parcel</label><span class="text-danger">*</span>
                                        <input class="form-control" type="number" name="pct_per_parcel" value="5" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>