<div class="modal fade" id="add_status_modal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
    <form action="pages/db_record_add.php" method="POST">
        <input type="hidden" name="variable_name" value="status">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Add a new Area</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label >ID</label>
                                <input class="form-control" type="text" name="id" value="<?= get_max_id_for_add('status'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label >Status</label><span class="text-danger">*</span>
                                <input class="form-control" type="text" name="status" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label >Badge Class</label><span class="text-danger">*</span>
                                <select name="badge_class" class="custom-select" style="width: 100%;" id="" >
                                    <option value="default" disabled selected>Choose a Class</option>
                                    <option value="info" class="bg-info" >Info</option>
                                    <option value="success" class="bg-success" >Success</option>
                                    <option value="warning" class="bg-warning" >Warning</option>
                                    <option value="danger" class="bg-danger" >Danger</option>                                  
                                </select>
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