<div id="shop_add_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Add a new shop</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  onsubmit="submit_shop_modal()">
                    <div class="modal-body">
                        <div class="form-group">
                            <label >Shop Name</label>
                            <input class="form-control" type="text" id="shop_name" required>
                        </div>
                    </div>
                    <input type="hidden" id="user_id_add_new_shop" value="<?= $uid ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Save</button>
                    </div>
                </form> 
            </div>
         
    </div>
</div>


<script>

    function submit_shop_modal(){
        event.preventDefault();
        var shop_name = $('#shop_name').val();
        var user_id = $('#user_id_add_new_shop').val();
        $.ajax({
            url:'pages/ajax_generator.php',
            method : "POST",
            data: {
                add_new_shop: true,
                shop_name : shop_name,
                user_id : user_id
            },
            dataType:"TEXT",
            success:function(response){    
                //console.log(response)           
                if(response.trim() == 'success'){
                    $('#shop_add_modal').modal('hide');
                    $("#shop_body").load(location.href+" #shop_body>*","");
                }
            }
        })
    }

</script>