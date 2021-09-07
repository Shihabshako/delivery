<?php
    include_once('../../config.php');

    $email = $_SESSION['user_email'];
    $password = $_POST['confirm_password'];
    $password = password_hash($password, PASSWORD_BCRYPT);

    $query = "UPDATE users SET password = '$password'  WHERE shop_email='$email' ";
    
    if(mysqli_query($con, $query)){
        $_SESSION['password_reset'] = 'success';
        unset($_SESSION['user_email']);
        header('location: ../../login.php');
    }else{
        $_SESSION['password_reset'] = 'error';
        header('location: ../?page=change_password');    
    }

?>