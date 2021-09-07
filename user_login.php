<?php
    include_once('./config.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query1 = "SELECT * FROM users  WHERE shop_email='$email'";
    $query2 = "SELECT * FROM admins  WHERE email='$email'";
    $result1 = mysqli_query($con, $query1);
    $result2 = mysqli_query($con, $query2);


    if(mysqli_num_rows($result1) > 0){
        $data = mysqli_fetch_array($result1);

        if (password_verify($password, $data['password'])) {
            
            $_SESSION['login_timestamp'] = date("d-m-Y h:i:s");

            $_SESSION['user_email'] = $email;
            $_SESSION['is_merchant'] = TRUE;
            header("location: ./dashboard/");
            

        } else{
            // echo "gagal";
           
            $_SESSION['login_log'] = 'error';
            header("location: login.php");
        }
    }else if(mysqli_num_rows($result2) > 0){
        $data = mysqli_fetch_array($result2);

        if (password_verify($password, $data['password'])) {
            
            $_SESSION['login_timestamp'] = date("d-m-Y h:i:s");

            $_SESSION['user_email'] = $email;
            $_SESSION['is_admin'] = TRUE;
            header("location: ./admin/");
            

        } else{
            // echo "gagal";
           
            $_SESSION['login_log'] = 'error';
            header("location: login.php");
        }
    }else{
        $_SESSION['login_log'] = 'error';
        header("location: login.php");
    }
?>