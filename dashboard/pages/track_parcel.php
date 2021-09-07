<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Track your parcels</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="container">
    <div class="row text-center">
        <div class="col-12">
            <div class="welcome_form">
                <form action="#" onsubmit="search_tracking_id()">
                    <input class="form-control" type="text" id="tracking_id" placeholder="Enter your Tracking ID" required>
                    <input class="submit" type="submit" value="Track your product">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
   <div class="row">
        <div class="col-md-12" >
            <div class="text-center" id="error_img" hidden>
                <img src="../img/error.png" width="300" alt="">
                <h3>Wrong Tracking ID</h3>
            </div>
            <!-- The time line -->
            <div class="timeline" id="timeline_body">
                
            </div>
        </div>
         <!-- /.col -->
    </div>
</div>


<script>
    function search_tracking_id(){
        event.preventDefault();
        var tracking_id = $('#tracking_id').val();

        $.ajax({
            url:'pages/ajax_generator.php',
            method : "POST",
            data: {
                search_parcel_by_track : true,
                tracking_id : tracking_id
            },
            dataType:"TEXT",
            success:function(response){   
               console.log(response) 
                if(response.trim() == 'error'){
                    $('#error_img').attr('hidden',false);
                    $('#timeline_body').attr('hidden',true);
                }else{
                    $('#error_img').attr('hidden',true);
                    $('#timeline_body').attr('hidden',false);
                    $("#timeline_body").html(response);
                }           
                
            }
        })
    }

</script>