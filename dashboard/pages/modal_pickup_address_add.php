<div id="pickup_address_add_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Add a new pickup Address</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form onsubmit="submit_pickup_address_modal()">
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Pickup Address</label>
                            <input class="form-control" type="text" id="pickup_address" required>
                        </div>
                    </div>
                    <input type="hidden" id="user_id_add_new_address" value="<?= $uid ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Save</button>
                    </div>
                </form> 
            </div>
         
    </div>
</div>


<script>

    function submit_pickup_address_modal(){
        event.preventDefault();
        var pickup_address = $('#pickup_address').val();
        var user_id = $('#user_id_add_new_address').val();
        $.ajax({
            url:'pages/ajax_generator.php',
            method : "POST",
            data: {
                add_new_pickup_location: true,
                pickup_address : pickup_address,
                user_id : user_id
            },
            dataType:"TEXT",
            success:function(response){    
        
                if(response.trim() == 'success'){
                    $('#pickup_address_add_modal').modal('hide');
                    $("#pickup_location_body").load(location.href+" #pickup_location_body>*","");
                }
            }
        })
    }

</script>