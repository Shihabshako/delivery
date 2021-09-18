<?php
    include_once(__DIR__.'/dbconfig.php');

    $db_host = constant('DB_HOST');
    $db_user = constant('DB_USERNAME');
    $db_pass = constant('DB_PASSWORD');
    $db_name = constant('DB_NAME');
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Failed to connect with database');


    function get_all_dropdowns($dropdown_name, $user_email=null){
        global $con;
        switch ($dropdown_name) {
            
            case 'pickup_area_per_user':
                $query = "SELECT pa.* FROM pickup_address AS pa JOIN users AS us ON pa.user_id=us.id WHERE us.shop_email='$user_email'";
                break;
            
            case 'shop_list_per_user':
                $query = "SELECT sp.* FROM shops AS sp JOIN users AS us ON sp.user_id=us.id WHERE us.shop_email='$user_email'";
                break;
            
            case 'parcels':
                $query = "SELECT prcl.id, prcl.tracking_id, prcl.memo_number, shp.shop_name, pa.address AS 'pickup_address', CONCAT( prcl.customer_name, '\n', prcl.customer_phone_number, '\n', prcl.customer_address ) AS 'customer_details', dcd.cash_collection, (dcd.delivery_charge+dcd.cod_charge) AS 'charge', DATE_FORMAT(prcl.created_at, '%b %d,%Y') AS 'created_date' FROM parcels AS prcl JOIN users AS us ON prcl.user_id = us.id JOIN shops AS shp ON prcl.shop_id = shp.id JOIN pickup_address AS pa ON prcl.pickup_address_id = pa.id JOIN delivery_charge_details AS dcd ON prcl.id = dcd.parcel_id WHERE us.shop_email='$user_email' ";
                break;

             case 'parcels_all':
                $query = "SELECT prcl.id, prcl.tracking_id, prcl.memo_number, shp.shop_name, pa.address AS 'pickup_address', CONCAT( prcl.customer_name, '\n', prcl.customer_phone_number, '\n', prcl.customer_address ) AS 'customer_details', dcd.cash_collection, (dcd.delivery_charge+dcd.cod_charge) AS 'charge', DATE_FORMAT(prcl.created_at, '%b %d,%Y') AS 'created_date', dcd.seller_will_get FROM parcels AS prcl JOIN users AS us ON prcl.user_id = us.id JOIN shops AS shp ON prcl.shop_id = shp.id JOIN pickup_address AS pa ON prcl.pickup_address_id = pa.id JOIN delivery_charge_details AS dcd ON prcl.id = dcd.parcel_id ";
                break;
            
            case 'parcels_excel':
                $query = "SELECT prcl.id,prcl.tracking_id, prcl.memo_number, prcl.customer_name, prcl.customer_address, ar.area_name AS 'delivery_area', prcl.customer_phone_number, dcd.cash_collection, dcd.delivery_charge, dcd.cod_charge, pkg.package_title, DATE_FORMAT(prcl.created_at, '%b %d,%Y') AS 'created_date', DATE_FORMAT(prcl.delivered_at, '%b %d,%Y') AS 'delivered_at' FROM parcels AS prcl JOIN users AS us ON prcl.user_id = us.id JOIN shops AS shp ON prcl.shop_id = shp.id JOIN pickup_address AS pa ON prcl.pickup_address_id = pa.id JOIN delivery_charge_details AS dcd ON prcl.id = dcd.parcel_id JOIN areas AS ar ON prcl.delivery_area_id = ar.id JOIN packages AS pkg ON prcl.pkg_id = pkg.id WHERE us.shop_email='$user_email' ";
                break;
            
            case 'shop_list_per_user':
                $query = "SELECT shp.id,shp.shop_name FROM shops AS shp JOIN users AS us ON shp.user_id=us.id WHERE us.shop_email='$user_email'";
                break;
            
            case 'pickup_address_per_user':
                $query = "SELECT * FROM pickup_address AS pa JOIN users AS us ON pa.user_id=us.id WHERE us.shop_email='$user_email'";
                break;

                
            case 'cod_percentage':
                $query = "SELECT uc.* FROM users AS us JOIN user_charges AS uc ON us.id=uc.user_id";
                break;


            
            case 'salary':
                $query = "SELECT *, DATE_FORMAT(sal.date, '%b, %Y') AS 'month' ,  sal.pct_per_parcel AS pct FROM salary AS sal JOIN delivery_boys AS db ON sal.delivery_boy_id = db.id WHERE MONTH(sal.date) = MONTH(CURDATE())";
                break;


            
            default:
                $query = "SELECT * FROM $dropdown_name";
                break;
        }

        return mysqli_query($con, $query);
    }

    function show_sweet_alert($session_name, $msg_success, $msg_error, $msg_warning, $msg_info, $msg_qstn){
        if(isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'success'){
            unset($_SESSION[$session_name]);
            echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'success',
                    title:'".$msg_success."'
                    })</script>";

        }else if(isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'error'){
            unset($_SESSION[$session_name]);
            echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'error',
                    title:'".$msg_error."'
                    })</script>";
        }else if(isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'warning'){
            unset($_SESSION[$session_name]);
            echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'warning',
                    title:'".$msg_warning."'
                    })</script>";
        }else if(isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'info'){
            unset($_SESSION[$session_name]);
            echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'info',
                    title:'".$msg_info."'
                    })</script>";
        }else if(isset($_SESSION[$session_name]) && $_SESSION[$session_name] == 'qstn'){
            unset($_SESSION[$session_name]);
            echo "<script>var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                    })

                    Toast.fire({
                    icon: 'question',
                    title:'".$msg_qstn."'
                    })</script>";
        }
    }

    function get_max_id_for_add($table_name){
        global $con ;
        $query = "SELECT MAX(id) FROM $table_name";
        $id = mysqli_fetch_array(mysqli_query($con, $query));
        $id = $id['MAX(id)'];
        $id = intval($id);
        $id++;
        return $id;
    }

    function get_user_id($user_email){
        global $con ;
        $query = "SELECT id FROM users WHERE shop_email='$user_email'";
        $result = mysqli_fetch_array(mysqli_query($con, $query));
        return $result['id'];
    }

    function get_user_name($user_email, $uid=null){
        global $con ;
        $query = "SELECT full_name FROM users WHERE shop_email='$user_email'";
        if($uid){
            $query = "SELECT full_name FROM users WHERE id=$uid";

        }
        $result = mysqli_fetch_array(mysqli_query($con, $query));
        return $result['full_name'];
    }

    function get_admin_name($user_email=null, $uid= null){
        global $con ;
        $query = "SELECT full_name FROM admins WHERE email='$user_email' OR id=$uid";

        $result = mysqli_fetch_array(mysqli_query($con, $query));
        return $result['full_name'];
    }

    function generate_tracking_id($shop_id, $pickup_area_id, $delivery_area_id){
        global $con;
        $query = "SELECT SUBSTR(shop_name,1,3) AS 'shop_name' FROM `shops` WHERE id=$shop_id";
        $shop_name = mysqli_fetch_array(mysqli_query($con, $query));
        $shop_name = strtoupper($shop_name['shop_name']);
        
        if($pickup_area_id < 10){
            $pickup_area_id = "0".$pickup_area_id;
        }

        

        $query = "SELECT area_code  FROM `areas` WHERE id=$delivery_area_id";
        $delivery_area_code = mysqli_fetch_array(mysqli_query($con, $query));
        $delivery_area_code = strtoupper($delivery_area_code['area_code']);

        $max_parcel_id = get_max_id_for_add('parcels');

        $five_digit_id = sprintf("%05d", $max_parcel_id);

        $tracking_id = $shop_name.$pickup_area_id.$five_digit_id.$delivery_area_code;

        return $tracking_id;

    }

    function counting_stats($criteria){
        global $con;
        $user_email = $_SESSION['user_email'];
        $uid = get_user_id($user_email);
        switch ($criteria) {
            case 'order_placed':
                $query = "SELECT COUNT(*) AS 'count' FROM parcels WHERE `user_id`=$uid";
                break;
            
            case 'order_in_transit':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE `user_id`=$uid AND st.status='Pending pickup' AND ps.status=1";
                break;
            
            case 'order_delivered':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE `user_id`=$uid AND st.status='Delivered' AND ps.status=1";
                break;
            
            case 'order_to_be_returned':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE `user_id`=$uid AND st.status='Pending Return' AND ps.status=1";
                break;
            
            case 'order_returned':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE `user_id`=$uid AND st.status='Returned' AND ps.status=1";
                break;
            
            case 'successful_deliveries':
                $total_order = counting_stats('order_placed');
                if($total_order == 0){
                    return 0;
                }
                $total_deliveries = counting_stats('order_delivered');
                $percentage = intval($total_deliveries*100/$total_order);
                return $percentage;
                break;
            
            case 'total_sales':
                $query = "SELECT SUM(dcd.cash_collection) AS 'count' FROM delivery_charge_details AS dcd JOIN parcels AS prcl ON dcd.parcel_id=prcl.id WHERE prcl.`user_id`=$uid";
                break;
            
            case 'total_delivery_fees_paid':
                $query = "SELECT IF(SUM(dcd.delivery_charge+dcd.cod_charge),SUM(dcd.delivery_charge+dcd.cod_charge),0) AS 'count' FROM parcels AS p JOIN parcel_status AS ps ON ps.parcel_id = p.id JOIN STATUS AS st ON ps.status_id = st.id JOIN packages AS pkg ON p.pkg_id = pkg.id JOIN delivery_charge_details dcd ON p.id = dcd.parcel_id WHERE st.status = 'Delivered' AND ps.status = 1 AND p.user_id=$uid";
                break;
            
            case 'total_delivery_fees_unpaid':
                $query = "SELECT IF(SUM(dcd.seller_will_get),SUM(dcd.seller_will_get),0) AS 'count' FROM delivery_charge_details AS dcd JOIN parcels AS prcl ON dcd.parcel_id=prcl.id JOIN parcel_status AS ps ON ps.parcel_id=prcl.id JOIN status AS st ON ps.status_id = st.id WHERE st.status='Delivered' AND prcl.`user_id`=$uid AND ps.status=1 ";
                break;
            
            case 'payment_processing':
                $query = "SELECT IF(SUM(dcd.seller_will_get),SUM(dcd.seller_will_get),0) AS 'count' FROM delivery_charge_details AS dcd JOIN parcels AS prcl ON dcd.parcel_id=prcl.id JOIN parcel_status AS ps ON ps.parcel_id=prcl.id JOIN status AS st ON ps.status_id = st.id WHERE st.status='Pending Pickup' AND prcl.`user_id`=$uid AND ps.status=1";
                break;

            case 'expenses':
                $query = "SELECT SUM(cost_amount) AS 'count' FROM expenses";
                break;
            
            
            default:
                # code...
                break;
        }
        $result = mysqli_fetch_array(mysqli_query($con, $query));
        return $result['count'] ? $result['count'] : 0;
    }

    function get_status_by_parcel($parcel_id){
        global $con;
        $query = "SELECT st.status,st.badge_class FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE ps.parcel_id=$parcel_id AND ps.`status`=1 AND st.status != 'On the Way'";
        return mysqli_query($con, $query);

    }

    function shop_stats($criteria,$shop_id, $uid){
        global $con;
        
        switch ($criteria) {
            case 'total_order_per_shops':
                $query = "SELECT COUNT(*) AS 'count' FROM parcels WHERE shop_id=$shop_id";
                break;
            
            case 'order_delivered_per_shops':
                $query = "SELECT COUNT(*) AS 'count' FROM parcels AS prcl JOIN parcel_status AS ps ON prcl.id = ps.parcel_id JOIN status AS st ON ps.status_id = st.id WHERE st.status='Delivered' AND ps.status=1 AND prcl.shop_id=$shop_id";
                break;
                
            
            case 'successful_deliveries_per_shops':
                $total_order = shop_stats('total_order_per_shops', $shop_id, $uid);
                if($total_order == 0){
                    return 0;
                }
                $total_deliveries = shop_stats('order_delivered_per_shops', $shop_id, $uid);
                $percentage = intval($total_deliveries*100/$total_order);
                return $percentage;
                break;
            
            default:
                # code...
                break;
        }

        $result = mysqli_fetch_array(mysqli_query($con, $query));
        return $result['count'] ? $result['count'] : 0;
    }

    function get_parcel_status($status, $parcel_id){
        global $con;
        
        switch ($status) {
            case 'delivery_status':
                $query = "SELECT * FROM parcel_status AS ps JOIN status AS st ON ps.status_id = st.id WHERE ps.parcel_id = $parcel_id AND (st.status = 'Picked' OR st.status='Delivered' OR st.status='Returned' OR st.status='Pending pickup') AND ps.status=1";
                break;
            
            case 'payment_status':
                $query = "SELECT * FROM parcel_status AS ps JOIN status AS st ON ps.status_id = st.id WHERE ps.parcel_id = $parcel_id AND (st.status = 'Paid' OR st.status='Unpaid') AND ps.status=1";
                break;
                
            
            default:
                # code...
                break;
        }

        $result = mysqli_fetch_array(mysqli_query($con, $query));
        return $result['status'];
    }

    //print_r(get_status_by_parcel(1));
   //echo get_parcel_status('delivery_status',1);



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////    admin panel functions  //////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function count_admin_stats($criteria){
        global $con;

        switch ($criteria) {
            case 'merchant':
                $query = "SELECT COUNT(*) AS 'count' FROM users AS us JOIN accounts AS acc ON us.account_type=acc.id WHERE acc.account_title !='Admin'";
                break;
            
            case 'total_delivery_boy':
                $query = "SELECT COUNT(*) AS 'count' FROM delivery_boys";
                break;
            
            
            case 'total_pending_pickup':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE st.status='Pending pickup' AND ps.status=1";
                break;
            
            case 'total_delivered':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE st.status='Delivered' AND ps.status=1";
                break;
            
            case 'total_pending_return':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE st.status='Pending Return' AND ps.status=1";
                break;
            
            case 'total_returned':
                $query = "SELECT COUNT(*) AS 'count' FROM parcel_status AS ps JOIN status AS st ON ps.status_id=st.id WHERE st.status='Returned' AND ps.status=1";
                break;
            
            
            case 'total_successful_deliveries':
                $total_order = count_admin_stats('parcels');
                $total_deliveries = count_admin_stats('total_delivered');
                $percentage = intval($total_deliveries*100/$total_order);
                return $percentage;
                break;
            
            
            default:
                $query = "SELECT COUNT(*) AS 'count' FROM $criteria";
                break;
        }

        $result = mysqli_fetch_array(mysqli_query($con, $query));
        return $result['count'] ? $result['count'] : 0 ;
    }

    function get_existing_details($table_name,$column_name,$column_value){
        global $con;
        $query = "SELECT * FROM $table_name WHERE $column_name='$column_value'";
        return mysqli_fetch_array(mysqli_query($con, $query));
    }  
    
    function generate_boy_id($max_id){
        $id = "TDG";
        $three_digit_id = sprintf("%03d", $max_id);
        $final_id = $id.$three_digit_id;
        return $final_id;
    }

    function get_parcel_status_for_payment($status, $parcel_id){
        global $con;

        if($status == 'onTheWay'){
            $query = "SELECT ps.status AS 'is_active' FROM parcel_status AS ps JOIN assign_parcels AS ap ON ap.parcel_id = ps.parcel_id JOIN status AS st ON ps.status_id = st.id WHERE ps.parcel_id = $parcel_id AND st.status='On the way'";

            $result =  mysqli_fetch_array(mysqli_query($con, $query));

            return $result['is_active'] == 1 ? 'checked' : '';

        }

        $query = "SELECT st.status AS 'status', ps.status AS 'is_active' FROM parcel_status AS ps JOIN status AS st ON ps.status_id = st.id WHERE ps.parcel_id = $parcel_id AND st.status='$status'";

        $result =  mysqli_fetch_array(mysqli_query($con, $query));

        return $result['is_active'] == 1 ? 'checked' : '';

          
    }

    function send_sms($number, $message) {
        $url = "http://gsms.pw/smsapi";
        $data = [
            "api_key" => "C200049160e17e787c6a06.77742778",
            "type" => "text",
            "contacts" => "$number",
            "senderid" => "8809601001382",
            "msg" => "$message",
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;

    }

    function salary_update($status,$parcel_id){
         global $con;
        switch ($status) {
            case 'delivered':
                $update_delivery_details = "SELECT sal.done, sal.target, pkg.price, sal.pct_amount, db.basic_salary, sal.delivery_boy_id AS 'db_id' FROM salary AS sal JOIN assign_parcels AS ap ON sal.delivery_boy_id = ap.delivery_boy_id JOIN parcels AS prcl ON ap.parcel_id = prcl.id JOIN packages AS pkg ON prcl.pkg_id = pkg.id JOIN delivery_boys AS db ON sal.delivery_boy_id = db.id WHERE ap.parcel_id = $parcel_id AND MONTH(sal.date) = MONTH(CURDATE())";

                $update_delivery_details = mysqli_fetch_array(mysqli_query($con, $update_delivery_details));

                $delivery_boy_id = $update_delivery_details['db_id'];
                $done_delivery = $update_delivery_details['done'];
                $target_delivery = $update_delivery_details['target'];
                $basic_salary = $update_delivery_details['basic_salary'];
                $pkg_price = $update_delivery_details['price'];
                $pct_amount = $update_delivery_details['pct_amount'];
                
                $done_delivery++;
                $pct_parcel =  $done_delivery >  $target_delivery ? 10 : 5;
                $pct_parcel_by_hundred = $pct_parcel / 100;

                $current_pct_amount = $pkg_price * $pct_parcel_by_hundred;
                $pct_amount += $current_pct_amount ;
                $total_salary =  $basic_salary+ $pct_amount;


                $salary_update = "UPDATE salary SET `done`=$done_delivery,`pct_per_parcel`= $pct_parcel, `pct_amount`=$pct_amount, `total_salary`=$total_salary WHERE delivery_boy_id=$delivery_boy_id AND MONTH(date) = MONTH(CURDATE())";

                mysqli_query($con, $salary_update);
                break;
            
            case 'undo_delivered':
                $update_delivery_details = "SELECT sal.done, sal.target, pkg.price, sal.pct_amount, db.basic_salary, sal.delivery_boy_id AS 'db_id' FROM salary AS sal JOIN assign_parcels AS ap ON sal.delivery_boy_id = ap.delivery_boy_id JOIN parcels AS prcl ON ap.parcel_id = prcl.id JOIN packages AS pkg ON prcl.pkg_id = pkg.id JOIN delivery_boys AS db ON sal.delivery_boy_id = db.id WHERE ap.parcel_id = $parcel_id AND MONTH(sal.date) = MONTH(CURDATE())";

                $update_delivery_details = mysqli_fetch_array(mysqli_query($con, $update_delivery_details));

                $delivery_boy_id = $update_delivery_details['db_id'];
                $done_delivery = $update_delivery_details['done'];
                $target_delivery = $update_delivery_details['target'];
                $basic_salary = $update_delivery_details['basic_salary'];
                $pkg_price = $update_delivery_details['price'];
                $pct_amount = $update_delivery_details['pct_amount'];
                
                $done_delivery--;
                $pct_parcel =  $done_delivery >  $target_delivery ? 10 : 5;
                $pct_parcel_by_hundred = $pct_parcel / 100;

                $current_pct_amount = $pkg_price * $pct_parcel_by_hundred;
                $pct_amount -= $current_pct_amount ;
                $total_salary =  $basic_salary + $pct_amount;


                $salary_update = "UPDATE salary SET `done`=$done_delivery,`pct_per_parcel`= $pct_parcel, `pct_amount`=$pct_amount, `total_salary`=$total_salary WHERE delivery_boy_id=$delivery_boy_id AND MONTH(date) = MONTH(CURDATE())";

                mysqli_query($con, $salary_update);
                break;
            
            default:
                # code...
                break;
        }
    }
    //echo  get_parcel_status_for_payment('Pending Parcel', 1);
   // echo count_admin_stats('total_pending_return');

?>