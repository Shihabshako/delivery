<?php
    require_once('../../config.php');

    $variable = $_POST['variable_name'];

    switch ($variable) {
        case 'areas':
            $id = $_POST['id'];
            $area_name = $_POST['area_name'];
            $area_code = strtoupper($_POST['area_code']);

            $query = "INSERT INTO areas VALUES($id, '$area_name','$area_code')";

            if(mysqli_query($con,$query)){
                $_SESSION['add_area'] = 'success';
            }else{
                $_SESSION['add_area'] = 'error';
            }

            header('location: ../?page=areas');
            break;

        case 'products':
            $id = $_POST['id'];
            $product_title = $_POST['product_title'];

            $query = "INSERT INTO products VALUES($id, '$product_title')";

            if(mysqli_query($con,$query)){
                $_SESSION['add_prod_cat'] = 'success';
            }else{
                $_SESSION['add_prod_cat'] = 'error';
            }

            header('location: ../?page=product_categories');
            break;
        
        case 'packages':
            $id = $_POST['id'];
            $package_title = $_POST['package_title'];
            $additional_parameter = $_POST['additional_parameter'];
            $tooltip = $_POST['tooltip'];
            $price = $_POST['price'];

            $query = "INSERT INTO packages VALUES($id, '$package_title', $price, '$additional_parameter', '$tooltip')";

            if(mysqli_query($con,$query)){
                $_SESSION['add_pkg'] = 'success';
            }else{
                $_SESSION['add_pkg'] = 'error';
            }

            header('location: ../?page=packages');
            break;

        case 'accounts':
            $id = $_POST['id'];
            $account_title = $_POST['account_title'];

            $query = "INSERT INTO accounts VALUES($id, '$account_title')";

            if(mysqli_query($con,$query)){
                $_SESSION['add_account_type'] = 'success';
            }else{
                $_SESSION['add_account_type'] = 'error';
            }

            header('location: ../?page=account_types');
            break;    
        
        case 'status':
            $id = $_POST['id'];
            $status = $_POST['status'];
            $badge_class = $_POST['badge_class'];

            $query = "INSERT INTO status VALUES($id, '$status', '$badge_class')";

            if(mysqli_query($con,$query)){
                $_SESSION['add_parcel_status'] = 'success';
            }else{
                $_SESSION['add_parcel_status'] = 'error';
            }

            header('location: ../?page=parcel_status');
            break;    
        
        case 'delivery_boy':
            $id = $_POST['id'];
            $full_name = $_POST['full_name'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $nid_number = $_POST['nid_number'];
            $boy_id = $_POST['boy_id'];
            $referrer_name = $_POST['referrer_name'];
            $referrer_address = $_POST['referrer_address'];
            $referrer_phone_number = $_POST['referrer_phone_number'];
            $referrer_nid = $_POST['referrer_nid'];
            $basic_salary = $_POST['basic_salary'];
            $monthly_target = $_POST['monthly_target'];
            $pct_per_parcel = $_POST['pct_per_parcel'];
            $current_date = date("Y-m-d");

            $query = "INSERT INTO `delivery_boys` VALUES ($id,'$full_name','$boy_id', '$address','$phone_number','$nid_number', '$referrer_name','$referrer_phone_number','$referrer_address','$referrer_nid', $basic_salary, $monthly_target,$pct_per_parcel)";

            
            mysqli_query($con, "INSERT INTO `salary`( `delivery_boy_id`, `date`,`done`, `target`,`pct_per_parcel`, `pct_amount`, `total_salary`) VALUES ($id, '$current_date', 0,$monthly_target, $pct_per_parcel,0, $basic_salary)");

            if(mysqli_query($con,$query)){
                $_SESSION['add_delivery_boy'] = 'success';
            }else{
                $_SESSION['add_delivery_boy'] = 'error';
            }

            header('location: ../?page=delivery_boys');
            break;

        case 'expense':
            $id = $_POST['id'];
            $expenses_by = $_POST['expenses_by'];
            $date = $_POST['date'];
            $cost_amount = $_POST['cost_amount'];
            $cost_details = $_POST['cost_details'];
            

            $query = "INSERT INTO `expenses` VALUES ($id,$expenses_by,'$date', '$cost_details',$cost_amount)";

            if(mysqli_query($con,$query)){
                $_SESSION['add_expenses'] = 'success';
            }else{
                $_SESSION['add_expenses'] = 'error';
            }

            header('location: ../?page=expenses');
            break;  


        case 'assign_parcel':
            $id = get_max_id_for_add('assign_parcels');
            $parcel_id = $_POST['parcel_id'];
            $track_id = $_POST['track_id'];
            $memo_number = $_POST['memo_number'];
            $boy_id = $_POST['boy_id'];

            if(mysqli_num_rows(mysqli_query($con,"SELECT * FROM assign_parcels WHERE parcel_id=$parcel_id")) > 0){
               $query = "UPDATE `assign_parcels` SET boy_id=$boy_id WHERE parcel_id=$parcel_id";

            }else{
                $query = "INSERT INTO `assign_parcels` VALUES ($id,$parcel_id,$boy_id)";
            }
            mysqli_query($con,$query);

            //sending message to buyer
            $delivery_boy_details_query = "SELECT db.full_name, db.phone_number, prcl.customer_phone_number, shp.shop_name FROM delivery_boys AS db JOIN assign_parcels AS ap ON db.id = ap.delivery_boy_id JOIN parcels AS prcl ON prcl.id = ap.parcel_id JOIN shops AS shp On prcl.shop_id = shp.id WHERE ap.parcel_id =$parcel_id";
            $delivery_boy_details = mysqli_fetch_array(mysqli_query($con,  $delivery_boy_details_query));

            $customer_phone_number = "88".$delivery_boy_details['customer_phone_number'];
            $shop_name = $delivery_boy_details['shop_name'];
            $delivery_phone_number = $delivery_boy_details['phone_number'];
            $delivery_full_name = $delivery_boy_details['full_name'];

            $message = "Your parcel from {$shop_name} will be delivered by {$delivery_full_name}, contact:{$delivery_phone_number}. Track: https://thedeliveryguy.com.bd/track_parcel.php";

            send_sms($customer_phone_number, $message);

            break;
 

        default:
            header('location: ../?page=home');
            break;
    }

   
?>  