<?php
    require_once('../../config.php');

    $variable = $_GET['var_name'];
    $id = $_GET['id'];

    switch ($variable) {
        case 'areas':
            $query = "DELETE FROM areas WHERE id=$id";

            if(mysqli_query($con, $query)){
                $_SESSION['delete_area'] = 'success';
            }else{
                $_SESSION['delete_area'] = 'error';
            }
            header('location: ../?page=areas');

            break;
        
        case 'products':
            $query = "DELETE FROM products WHERE id=$id";

            if(mysqli_query($con, $query)){
                $_SESSION['delete_prod_cat'] = 'success';
            }else{
                $_SESSION['delete_prod_cat'] = 'error';
            }
            header('location: ../?page=product_categories');
            break;

        case 'packages':
            $query = "DELETE FROM packages WHERE id=$id";

            if(mysqli_query($con, $query)){
                $_SESSION['delete_pkg'] = 'success';
            }else{
                $_SESSION['delete_pkg'] = 'error';
            }
            header('location: ../?page=packages');
            break;

        case 'accounts':
            $query = "DELETE FROM accounts WHERE id=$id";

            if(mysqli_query($con, $query)){
                $_SESSION['delete_account_type'] = 'success';
            }else{
                $_SESSION['delete_account_type'] = 'error';
            }
            header('location: ../?page=account_types');
            break;

        case 'status':
            $query = "DELETE FROM status WHERE id=$id";

            if(mysqli_query($con, $query)){
                $_SESSION['delete_parcel_status'] = 'success';
            }else{
                $_SESSION['delete_parcel_status'] = 'error';
            }
            header('location: ../?page=parcel_status');
            break;

        case 'delivery_boy':
            $query = "DELETE FROM delivery_boys WHERE id=$id";

            if(mysqli_query($con, $query)){
                $_SESSION['delete_delivery_boy'] = 'success';
            }else{
                $_SESSION['delete_delivery_boy'] = 'error';
            }
            header('location: ../?page=delivery_boys');
            break;

        case 'expenses':
            $query = "DELETE FROM expenses WHERE id=$id";

            if(mysqli_query($con, $query)){
                $_SESSION['delete_expenses'] = 'success';
            }else{
                $_SESSION['delete_expenses'] = 'error';
            }
            header('location: ../?page=expenses');
            break;

    
        default:
            header('location: ../?page=home');
            break;
    }

    

?>