<?php
     $user_details = get_existing_details('users','id',$uid);   

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Create a new parcel</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<form action="pages/db_create_new_parcel.php" method="POST" >
    <input type="hidden" name="user_id" id="user_id" value="<?= $uid ?>">
    <input type="hidden" name="customer_to_pay" id="customer_to_pay" value="0">
    <input type="hidden" name="seller_will_get" id="seller_will_get" value="0">
    <input type="hidden" name="delivery_charge_total" id="delivery_charge_total" value="0">
    <input type="hidden" name="cod_charge_total" id="cod_charge_total" value="0">

    <div class="row justify-content-center">
        <div class="col-md-3 col-12">
            <div class="form-group">
                <label >Package</label> <span class="text-danger">*</span>
                <select name="package_type" class="select2" style="width: 100%;" id="package_type" onchange="packageChange()" required>
                <?php
                    foreach ($list_package as $package) {
                        ?><option value="<?= $package['id'] ?>" title="<?= $package['tooltip']  ?>" ><?= $package['package_title']  ?></option><?php
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label >Pickup Address</label> <span class="text-danger">*</span>
                <select name="pickup_address" class="select2" style="width: 100%;" id="" required>
                    <?php
                        foreach ($list_pickup_area_per_user as $address) {
                            ?><option value="<?= $address['id'] ?>" ><?= $address['address']  ?></option><?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label >Shop Name</label> <span class="text-danger">*</span>
                <select name="shop_name" class="select2" id="shop_id" style="width: 100%;" onchange="shop_change()" required>
                <?php
                    foreach ($list_shop as $shop) {
                        ?><option value="<?= $shop['id'] ?>" ><?= $shop['shop_name']  ?></option><?php
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label >Customer's Name</label> <span class="text-danger">*</span>
                <input class="form-control" type="text" name="customer_name" required>
            </div>
            <div class="form-group">
                <label >Customer's Phone Number</label> <span class="text-danger">*</span>
                <input class="form-control" type="number" name="customer_phone_number" required>
            </div>
            <div class="form-group">
                <label >Customer's address</label> <span class="text-danger">*</span>
                <textarea name="customers_address" class="form-control" required  cols="38" rows="2"></textarea>
            </div>
            
        </div>
        <div class="col-md-3 col-12">
            <div class="form-group">
                <label >Approximate weight</label> <span class="text-danger">*</span>
                <input class="form-control" type="number" placeholder="gram" name="approx_wight" required>
            </div>
            <div class="form-group">
                <label >Product Category</label> <span class="text-danger" id="is_product_category_mandatory">*</span>
                <select name="product_type" class="select2" style="width: 100%;" id="product_category" required>
                <option value="" disabled selected>Select Your  product Type</option>
                <?php
                    foreach ($list_product_type as $product) {
                        ?><option value="<?= $product['id'] ?>" <?= $product['id'] == $user_details['product_type'] ? 'selected' : '' ?> ><?= $product['product_title']  ?></option><?php
                    }
                ?>
                </select>
            </div>
            <input type="hidden" name="product_type" id="product_category_input" value="NULL" disabled>
            <div class="form-group">
                <label >Memo Number</label> <span class="text-danger">*</span> 
                <input class="form-control" type="text" name="customer_memo_number" required>
            </div>    
            <div class="form-group">
                <label >Delivery Area</label> <span class="text-danger">*</span>
                <select name="delivery_area" class="select2" style="width: 100%;" id="" required>
                    <option value="" disabled selected>Choose Delivery Area</option>
                    <?php
                        foreach ($list_area as $area) {
                            ?><option value="<?= $area['id'] ?>" ><?= $area['area_name']  ?></option><?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label >Cash Collection (Without delivery charge)</label> <span class="text-danger">*</span>
                <input class="form-control" type="number" step="0.01" onchange="product_price_update()" onkeyup="product_price_update()" name="cash_collection" id="cash_collection" value="0" required>
            </div>
            <div class="form-group mt-md-5 mt-3">
                <input class="btn btn-default form-control custom-button"  type="submit" value="Create" required>
            </div>
        </div>
        <div class="col-md-1 col-12"></div>
        <div class="col-md-3 col-12 bg-secondary h-75 my-auto p-3 rounded ">
            <h4>Delivery Charge Details</h4>
            <hr class="bg-orange" style="height:8px; border-radius:5px">
            <div class="table-borderless mt-5">
            <table class="w-100">
                <tbody>
                        <tr>
                            <td align="left">Cash Collection</td> 
                            <td align="right"><span id="cash_collection_summery">0.00</span> <span class="ml-2">BDT</span></td> 
                        </tr>
                        <tr>
                            <td align="left">Delivery Charge</td> 
                            <td align="right"><span id="delivery_charge">0</span> <span class="ml-2">BDT</span></td> 
                        </tr>
                        <tr>
                            <td align="left">COD (<span id="cod_percentage"></span>%) Charge</td> 
                            <td align="right"><span id="cod_charge">0</span> <span class="ml-2">BDT</span></td> 
                        </tr>
                </tbody>     
            </table>
            <hr class="bg-white">   
            <table class="w-100">
                <tbody>
                        <tr>
                            <td align="left">Customer to pay</td> 
                            <td align="right "><span id="total" name="">0</span> <span class="ml-2">BDT</span></td> 
                        </tr>
                        <tr>
                            <td align="left">Seller will get</td> 
                            <td align="right "><span id="seller_get" name="">0</span> <span class="ml-2">BDT</span></td> 
                        </tr>
                </tbody>     
            </table>   
            </div>
        </div>
    </div>
</form>


<script>
    window.onload = function() {
        shop_change();
        packageChange();
    };
    function shop_change(){
        let shop_id = $('#shop_id').val();
        let user_id = $('#user_id').val();
        $.ajax({
            url:'pages/ajax_generator.php',
            method : "POST",
            data: {
                shop_name_change: true,
                user_id : user_id,
                shop_id : shop_id
            },
            dataType:"JSON",
            success:function(response){
                $('#cod_percentage').text(response.cod_percentage);

                let cash_collection_summery = $('#cash_collection_summery').text();
                let cod_percentage = $('#cod_percentage').text();
                let cod_charge = parseFloat(cash_collection_summery) * parseFloat(cod_percentage/100);
                let seller_get = parseFloat(cash_collection_summery) - cod_charge;
                $('#seller_get').text(parseFloat(parseInt(seller_get)).toFixed(2))
                $('#seller_will_get').val(parseFloat(parseInt(seller_get)).toFixed(2))
                $('#cod_charge').text(cod_charge.toFixed(2))
                total_amount_update();
            }
        })                 
    }

    function total_amount_update(){
        let cash_collection_summery = parseFloat($('#cash_collection_summery').text());
        let delivery_charge = parseFloat($('#delivery_charge').text());
        let cod_percentage = parseInt($('#cod_percentage').text());

        let cod_charge_summery = parseFloat(cash_collection_summery) * parseFloat(cod_percentage/100);
        $('#cod_charge').text(cod_charge_summery.toFixed(2))
        $('#cod_charge_total').val(cod_charge_summery.toFixed(2))

        let cod_charge = parseFloat($('#cod_charge').text());
        let seller_get = parseFloat(cash_collection_summery) - cod_charge;
        $('#seller_get').text(parseFloat(parseInt(seller_get)).toFixed(2))
        $('#seller_will_get').val(parseFloat(parseInt(seller_get)).toFixed(2))

        let total = cash_collection_summery + delivery_charge ;
        $('#total').text(parseFloat(total).toFixed(2));
        $('#customer_to_pay').val(parseFloat(total).toFixed(2));
    }

    function product_price_update(){
        let cash_collection = parseFloat($('#cash_collection').val()) ? parseFloat($('#cash_collection').val()) : 0;
        $('#cash_collection_summery').text(cash_collection.toFixed(2));
        total_amount_update();
        
    }

    function packageChange(){
        let package_type = $('#package_type').val();
        $.ajax({
            url:'pages/ajax_generator.php',
            method : "POST",
            data: {
                package_type_change: true,
                package_type : package_type
            },
            dataType:"JSON",
            success:function(response){
                $('#delivery_charge').text(parseFloat(response.price).toFixed(2));
                $('#delivery_charge_total').val(parseFloat(response.price).toFixed(2));
                total_amount_update();
            }
        })

        if(package_type == '3'){
            $('#product_category').attr('required',false);
            $('#product_category').attr('disabled',true);
            $('#product_category_input').attr('disabled',false);
            $('#is_product_category_mandatory').text("");

        }else{
            $('#product_category').attr('required',true);
            $('#product_category').attr('disabled',false);
            $('#product_category_input').attr('disabled',true);
            $('#is_product_category_mandatory').text("*");
        }
    }

</script>
