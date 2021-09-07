<div class="modal fade" id="add_pkg_modal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
    <form action="pages/db_record_add.php" method="POST">
        <input type="hidden" name="variable_name" value="packages">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Add a Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >ID</label>
                                <input class="form-control" type="text" name="id" value="<?= get_max_id_for_add('packages'); ?>" readonly>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >Package title</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="package_title" required>
                            </div>
                            <div class="form-group">
                                <label >Additional Parameter</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="additional_parameter" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label >Tooltip</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="tooltip" required>
                            </div>
                            <div class="form-group">
                                <label >Price</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="price" required>
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