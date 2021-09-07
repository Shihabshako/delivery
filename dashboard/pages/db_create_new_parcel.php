<?php
    include_once('../../config.php');

    $parcel_id = get_max_id_for_add('parcels');
    $user_id = $_POST['user_id'];
    $package_type = $_POST['package_type'];
    $pickup_address = $_POST['pickup_address'];
    $shop_name = $_POST['shop_name'];
    $customer_name = $_POST['customer_name'];
    $customer_phone_number = $_POST['customer_phone_number'];
    $customers_address = $_POST['customers_address'];
    $approx_wight = $_POST['approx_wight'];
    $product_type = $_POST['product_type'];
    $customer_memo_number = $_POST['customer_memo_number'];
    $delivery_area = $_POST['delivery_area'];
    $cash_collection = $_POST['cash_collection'];
    $customer_to_pay = $_POST['customer_to_pay'];
    $seller_will_get = $_POST['seller_will_get'];
    $delivery_charge_total = $_POST['delivery_charge_total'];
    $cod_charge_total = $_POST['cod_charge_total'];

    $tracking_id = generate_tracking_id($shop_name, $pickup_address, $delivery_area);

    $query_parcel = "INSERT INTO `parcels`(`id`,`user_id`,`tracking_id`, `pkg_id`, `pickup_address_id`, `shop_id`, `customer_name`, `customer_phone_number`, `customer_address`, `approx_weight`, `product_id`, `memo_number`, `delivery_area_id`) VALUES ($parcel_id, $user_id, '$tracking_id', $package_type, $pickup_address, $shop_name, '$customer_name', '$customer_phone_number', '$customers_address', $approx_wight, $product_type, '$customer_memo_number', $delivery_area)";


    $query_parcel_status = "INSERT INTO `parcel_status`(`user_id`, `parcel_id`, `status_id`,`status`) VALUES ($user_id, $parcel_id,1,1),($user_id, $parcel_id, 2,0),($user_id, $parcel_id, 3,0),($user_id, $parcel_id, 4,1),($user_id, $parcel_id, 5,0),($user_id, $parcel_id, 6,0),($user_id, $parcel_id, 7,0),($user_id, $parcel_id, 8,0)";


    $query_delivery_charge_details = "INSERT INTO `delivery_charge_details`(`parcel_id`, `cash_collection`, `delivery_charge`, `cod_charge`, `customer_to_pay`, `seller_will_get`) VALUES ($parcel_id,$cash_collection,$delivery_charge_total,$cod_charge_total,$customer_to_pay,$seller_will_get)";

    if(mysqli_query($con, $query_parcel) && mysqli_query($con,$query_parcel_status) && mysqli_query($con,$query_delivery_charge_details)){
        $_SESSION['add_parcel'] = 'success';



    }else{
        $_SESSION['add_parcel'] = 'error';
    }
    header('location: ../?page=parcels');

    // echo $query_parcel."\n";
    // echo $query_parcel_status."\n";


    

?>