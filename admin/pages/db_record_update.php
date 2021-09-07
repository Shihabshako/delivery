<?php
    require_once('../../config.php');

    $variable = $_POST['variable_name'];

    switch ($variable) {
        case 'areas':
            $id = $_POST['id'];
            $area_name = $_POST['area_name'];
            $area_code = strtoupper($_POST['area_code']);

            $query = "UPDATE areas SET `area_name`='$area_name', `area_code`='$area_code' WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['edit_area'] = 'success';
            }else{
                $_SESSION['edit_area'] = 'error';
            }

            header('location: ../?page=areas');
            break;

        case 'products':
            $id = $_POST['id'];
            $product_title = $_POST['product_title'];


            $query = "UPDATE products SET `product_title`='$product_title' WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['delete_prod_cat'] = 'success';
            }else{
                $_SESSION['delete_prod_cat'] = 'error';
            }

            header('location: ../?page=product_categories');
            break;
        
        case 'packages':
            $id = $_POST['id'];
            $package_title = $_POST['package_title'];
            $additional_parameter = $_POST['additional_parameter'];
            $tooltip = $_POST['tooltip'];
            $price = $_POST['price'];


            $query = "UPDATE packages SET `package_title`='$package_title', `additional_parameter`='$additional_parameter' , `tooltip`='$tooltip', `price`=$price  WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['edit_pkg'] = 'success';
            }else{
                $_SESSION['edit_pkg'] = 'error';
            }

            header('location: ../?page=packages');
            break;


        case 'accounts':
            $id = $_POST['id'];
            $account_title = $_POST['account_title'];


            $query = "UPDATE accounts SET `account_title`='$account_title' WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['edit_account_type'] = 'success';
            }else{
                $_SESSION['edit_account_type'] = 'error';
            }

            header('location: ../?page=account_types');
            break;

        
        case 'status':
            $id = $_POST['id'];
            $status = $_POST['status'];
            $badge_class = $_POST['badge_class'];


            $query = "UPDATE status SET `status`='$status', `badge_class`='$badge_class' WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['edit_parcel_status'] = 'success';
            }else{
                $_SESSION['edit_parcel_status'] = 'error';
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



            $query = "UPDATE `delivery_boys` SET `full_name`='$full_name',`boy_id`='$boy_id',`address`='$address',`phone_number`='$phone_number',`nid_number`='$nid_number',`referrer_name`='$referrer_name',`referrer_phone_number`='$referrer_phone_number',`referrer_address`='$referrer_address',`referrer_nid`='$referrer_nid', `basic_salary`=$basic_salary,`monthly_target`=$monthly_target,`pct_per_parcel`=$pct_per_parcel WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['edit_delivery_boy'] = 'success';
            }else{
                $_SESSION['edit_delivery_boy'] = 'error';
            }

            header('location: ../?page=delivery_boys');
            break;

        case 'expenses':
            $id = $_POST['id'];
            $expenses_by = $_POST['expenses_by'];
            $date = $_POST['date'];
            $cost_amount = $_POST['cost_amount'];
            $cost_details = $_POST['cost_details'];



            $query = "UPDATE `expenses` SET `expenses_by`=$expenses_by,`date`='$date',`cost_details`='$cost_details',`cost_amount`=$cost_amount WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['edit_expenses'] = 'success';
            }else{
                $_SESSION['edit_expenses'] = 'error';
            }

            header('location: ../?page=expenses');
            break;

    
        case 'cod_percentage':
            $id = $_POST['id'];
            $cod_percentage = $_POST['cod_percentage'];



            $query = "UPDATE `user_charges` SET `cod_percentage`=$cod_percentage WHERE id=$id";

            if(mysqli_query($con,$query)){
                $_SESSION['edit_cod_percentage'] = 'success';
            }else{
                $_SESSION['edit_cod_percentage'] = 'error';
            }

            header('location: ../?page=cod_percentage');
            break;

    
        default:
            header('location: ../?page=home');
            break;
    }

   
?>  