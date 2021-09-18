
<div class="modal fade" id="add_boy_to_parcel_modal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
    <form action="pages/db_record_add.php" id="add_boy_to_parcel_form" method="POST" onsubmit="assign_boy_submit()">
        <input type="hidden" name="variable_name" value="assign_parcel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Add a new Expense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="parcel_id" id="parcel_id_in_modal">
                        <div class="col-6">
                            <div class="form-group">
                                <label >Track ID</label>
                                <input class="form-control" type="text" name="track_id" id="track_id" readonly>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label >Memo Id</label>
                                <input class="form-control" type="text" name="memo_number" id="memo_number" readonly>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label >Expenses By</label><span class="text-danger">*</span>
                                <select class="select2" style="width: 100%;" name="boy_id" required>
                                    <option value="" disabled selected>Choose</option>
                                    <?php
                                        foreach ($list_delivery_boys as $row) {
                                            ?><option value="<?= $row['id'] ?>" ><?= $row['full_name']  ?></option><?php
                                        }
                                    ?>
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


<script>
    function assign_boy_submit(){
        event.preventDefault();
        $.ajax({
            url: 'pages/db_record_add.php',
            type: 'POST',
            data:$('#add_boy_to_parcel_form').serialize(),
            success:function(response){
                //$("#tbody_to_refresh").load(location.href+" #tbody_to_refresh>*",""); 
                $('#add_boy_to_parcel_modal').modal('hide');
                $("#tbody_to_refresh").load(location.href+" #tbody_to_refresh>*",""); 
                
            }
        });
    }
</script>