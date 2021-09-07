<?php
    include_once('./config.php');

    $user_id = $_POST['user_id'];
    $account_type = $_POST['account_type'];
    $full_name = $_POST['full_name'];
    $shop_email = $_POST['shop_email'];
    $pickup_address = $_POST['pickup_address'];
    $pickup_phone = $_POST['pickup_phone'];
    $password = $_POST['password'];
    $referred_by = $_POST['referred_by'];
    $shop_name = $_POST['shop_name'];
    $shop_address = $_POST['shop_address'];
    $pickup_area = $_POST['pickup_area'];
    $product_type = $_POST['product_type'];
    $confirm_password = $_POST['confirm_password'];
    
    if($password == $confirm_password){
       $password = password_hash($password, PASSWORD_BCRYPT);
       
       $query = "INSERT INTO `users`(`id`,`account_type`, `full_name`,  `shop_email`, `pickup_phone`, `password`, `referred_by`, `shop_address`, `pickup_area`, `product_type`) VALUES ($user_id,$account_type, '$full_name',  '$shop_email', '$pickup_phone', '$password', '$referred_by', '$shop_address', $pickup_area, $product_type)";

       $query2 = "INSERT INTO `pickup_address`(`user_id`, `address`) VALUES ($user_id, '$pickup_address')";

       $max_shop_id = get_max_id_for_add('shops');

       $query3 = "INSERT INTO `shops`(`id`,`user_id`, `shop_name`) VALUES ($max_shop_id,$user_id, '$shop_name')";

       $query4 = "INSERT INTO `user_charges`(`user_id`, `shop_id`, `cod_percentage`) VALUES ($user_id, $max_shop_id, 1)";


       if(mysqli_query($con, $query) && mysqli_query($con, $query2) && mysqli_query($con, $query3) && mysqli_query($con, $query4)){
        $_SESSION['user_add'] = 'success'; 
        header('location: login.php');
       }else{
         $_SESSION['user_add'] = 'error';  
         header('location: signup.php');
       }
    }else{
        //password_mismatched
        $_SESSION['user_add'] = 'error';  
        header('location: signup.php');
    }

    

?>