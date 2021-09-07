<div class="modal fade" id="add_expense_modal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
    <form action="pages/db_record_add.php" method="POST">
        <input type="hidden" name="variable_name" value="expense">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Add a new Expense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >ID</label>
                                <input class="form-control" type="text" name="id" value="<?= get_max_id_for_add('expenses'); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label >Expenses By</label><span class="text-danger">*</span>
                                <select name="expenses_by" class="select2" style="width: 100%;" id="" required>
                                    <option value="" disabled selected>Choose</option>
                                    <?php
                                        foreach ($list_admins as $row) {
                                            ?><option value="<?= $row['id'] ?>" ><?= $row['full_name']  ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label >Date</label><span class="text-danger">*</span>
                                <input class="form-control " type="date" name="date" required>
                            </div>
                            <div class="form-group">
                                <label >Expanse Amount</label><span class="text-danger">*</span>
                                <input class="form-control " type="number" name="cost_amount" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label >Expanse Details</label><span class="text-danger">*</span>
                                <input class="form-control " type="text" name="cost_details" required>
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