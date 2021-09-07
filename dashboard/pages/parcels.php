<?php
    show_sweet_alert('add_parcel', 'Parcel created successfully', 'Failed to create a parcel,Please try again', '', '', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Parcels</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card collapsed-card">
  <div class="card-header" data-card-widget="collapse" style="cursor:pointer">       
      <h3 class="card-title">Filter your parcels</h3>
      <div class="card-tools">
        <!-- Collapse Button -->
        <button type="button" class="btn btn-tool" ><i class="fa fa-caret-down text-dark" aria-hidden="true"></i></button>
      </div>
      <!-- /.card-tools -->
  </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <select name="pickup_address" class="select2" style="width: 100%;" id="pickup_address" >
                        <option value="" disabled selected>Pickup Address</option>
                        <?php
                            foreach ($list_pickup_area_per_user as $address) {
                                ?><option value="<?= $address['id'] ?>" ><?= $address['address']  ?></option><?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <input class="form-control" type="text" id="tracking_id" placeholder="Tracking Id">
                </div>           
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <input class="form-control" type="text" id="customer_memo_id" placeholder="Customer Memo ID">
                </div>            
            </div>
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <input class="form-control" type="number" id="customer_phone_number" placeholder="Customer Phone Number">
                </div>          
            </div>
            <div class="col-md-3 col-6">
                <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <input class="btn btn-default form-control custom-button" onclick="filter_parcels()" type="button" value="Search" >            
            </div>
        </div>
    </div>  
</div> 




<div>
    <div class="float-right mr-2 mt-2">
        <i class="fas fa-file-excel text-success fa-2x mr-2" style="cursor: pointer" onclick="export_excel('<?= $user_email ?>')"></i>
        <i class="fas fa-print text-danger fa-2x" style="cursor: pointer" onclick="print_table()"></i>
    </div>                    
    <div class="table-responsive mt-lg-5 mt-3">
        <table id="example2" class="table table-light table-borderless table-striped" >
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th hidden>serial</th>        
                    <th>Shop</th>
                    <th>Pickup Address</th>
                    <th>Creation Date</th>
                    <th>Customer Details</th>
                    <th>Status</th>
                    <th>Payment Info</th>
                </tr>
            </thead>
            <tbody id="parcel_table_body">
                <?php
                    foreach($list_parcels AS $row){
                        ?>
                        <tr>
                            <td class="align-middle">
                                Track ID: <?= $row['tracking_id'] ?><br>
                                Memo ID: <?= $row['memo_number'] ?>
                            </td>
                            <td hidden><?= $row['id'] ?></td>
                            <td class="align-middle"><?= $row['shop_name'] ?></td>
                            <td class="align-middle"><?= $row['pickup_address'] ?></td>
                            <td class="align-middle"><?= $row['created_date'] ?></td>
                            <td class="align-middle"><?= nl2br($row['customer_details']) ?></td>
                            <td class="align-middle">
                                <?php
                                    $all_active_status = get_status_by_parcel($row['id']);
                                    while($row_badge = mysqli_fetch_array($all_active_status)){
                                        ?>
                                            <span class="badge badge-<?= $row_badge['badge_class']?>"><?= $row_badge['status'] ?></span><br>         
                                        <?php
                                    }
                                ?>
                            </td>
                            <td class="align-middle">
                                Collection: <?= $row['cash_collection'] ?> BDT<br>
                                Charge: <?= $row['charge'] ?> BDT
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>


<!-- hidden table for custom print -->
<div hidden id="print_table">
    <table class="table-bordered">
        <tr>
            <th>Tracking ID</th>
            <th>Memo ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Delivery Area</th>
            <th>Customer Phone Number</th>
            <th>Cash Collection</th>
            <th>Delivery Charge</th>
            <th>Cash on Delivery(COD) charge</th>
            <th>Delivery Status</th>
            <th>Delivery Type</th>
            <th>Parcel Creation Date</th>
            <th>Parcel Delivered Date</th>
            <th>Payment Status</th>
        </tr>
        <?php
            $all_table_data = get_all_dropdowns('parcels_excel', $user_email);
            while($row = mysqli_fetch_array($all_table_data)){
                ?>
                    <tr>
                        <td><?= $row['tracking_id'] ?></td>
                        <td><?= $row['memo_number'] ?></td>
                        <td><?= $row['customer_name'] ?></td>
                        <td><?= $row['customer_address'] ?></td>
                        <td><?= $row['delivery_area'] ?></td>
                        <td><?= $row['customer_phone_number'] ?></td>
                        <td><?= $row['cash_collection'] ?></td>
                        <td><?= $row['delivery_charge'] ?></td>
                        <td><?= $row['cod_charge'] ?></td>
                        <td><?= get_parcel_status('delivery_status', $row['id']) ?></td>
                        <td><?= $row['package_title'] ?></td>
                        <td><?= $row['created_date'] ?></td>
                        <td><?= $row['delivered_at'] ?></td>
                        <td><?= get_parcel_status('payment_status', $row['id']) ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
</div>

<script type="text/javascript">
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });

    function format_date(date){
        var time = new Date(date);
        var theyear = time.getFullYear();
        var themonth = time.getMonth() + 1;

        if(themonth<10){
            themonth = "0"+themonth;
        }

        var thetoday = time.getDate();

        if(thetoday<10){
            thetoday = "0"+thetoday;
        }
        var d= theyear + "-" + themonth + "-" + thetoday;
        return d;
    }

    function filter_parcels(){
        $('#parcel_table_body').html('');
        var pickup_address = $('#pickup_address').val();
        var reportrange = $('#reportrange').text().trim().split("-");
        var start_date = format_date(reportrange[0]);
        var end_date = format_date(reportrange[1]);
        var tracking_id = $('#tracking_id').val();
        var customer_memo_id = $('#customer_memo_id').val();
        var customer_phone_number = $('#customer_phone_number').val();
        var customer_phone_number = $('#customer_phone_number').val();

       $.ajax({
            url:'pages/ajax_generator.php',
            method : "POST",
            data: {
                filter_parcels: true,
                pickup_address : pickup_address,
                start_date : start_date,
                end_date : end_date,
                tracking_id : tracking_id,
                customer_memo_id : customer_memo_id,
                customer_phone_number : customer_phone_number,
            },
            dataType:"TEXT",
            success:function(response){              
                $('#parcel_table_body').html(response);
            }
        })
    }


    function export_excel(user_email){
        window.location.href = './pages/export_excel_parcels.php?user_email='+user_email    
    }

    function print_table(){
        var divName= "print_table";

        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }


</script>