<?php
    include_once('../../config.php');

    if(isset($_POST['shop_name_change'])){
        $user_id = $_POST['user_id']; 
        $shop_id = $_POST['shop_id']; 

        $query = "SELECT * FROM `user_charges` WHERE `user_id`=$user_id AND `shop_id`=$shop_id";
        $result = mysqli_fetch_array(mysqli_query($con, $query));
        echo json_encode($result);
        return;

    }else if(isset($_POST['package_type_change'])){
        $package_type = $_POST['package_type']; 
        $query = "SELECT * FROM `packages` WHERE `id`=$package_type";
        $result = mysqli_fetch_array(mysqli_query($con, $query));
        echo json_encode($result);
        return;

    }else if(isset($_POST['filter_parcels'])){
        $pickup_address = $_POST['pickup_address']; 
        $start_date = $_POST['start_date']; 
        $end_date = $_POST['end_date']; 
        $tracking_id = $_POST['tracking_id']; 
        $customer_memo_id = $_POST['customer_memo_id']; 
        $customer_phone_number = $_POST['customer_phone_number']; 
        $user_email = $_SESSION['user_email']; 

        $query = "SELECT prcl.id, prcl.tracking_id, prcl.memo_number, shp.shop_name, pa.address AS 'pickup_address', CONCAT( prcl.customer_name, '\n', prcl.customer_phone_number, '\n', prcl.customer_address ) AS 'customer_details', dcd.cash_collection, (dcd.delivery_charge+dcd.cod_charge) AS 'charge', DATE_FORMAT(prcl.created_at, '%b %d,%Y') AS 'created_date' FROM parcels AS prcl JOIN users AS us ON prcl.user_id = us.id JOIN shops AS shp ON prcl.shop_id = shp.id JOIN pickup_address AS pa ON prcl.pickup_address_id = pa.id JOIN delivery_charge_details AS dcd ON prcl.id = dcd.parcel_id WHERE us.shop_email='$user_email' AND DATE(prcl.created_at) >= '$start_date' AND DATE(prcl.created_at) <= '$end_date'";

        if($pickup_address){
            $query .= " AND prcl.pickup_address_id=$pickup_address";
        }
        if($tracking_id){
            $query .= " AND prcl.tracking_id='$tracking_id'";
        }
        if($customer_memo_id){
            $query .= " AND prcl.memo_number='$customer_memo_id'";
        }
        if($customer_phone_number){
            $query .= " AND prcl.customer_phone_number='$customer_phone_number'";
        }

        

        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td hidden><?= $row['id'] ?></td>
                    <td class="align-middle">
                        Track ID: <?= $row['tracking_id'] ?><br>
                        Memo ID: <?= $row['memo_number'] ?>
                    </td>
                    <td class="align-middle"><?= $row['shop_name'] ?></td>
                    <td class="align-middle"><?= $row['pickup_address'] ?></td>
                    <td class="align-middle"><?= $row['created_date'] ?></td>
                    <td class="align-middle"><?= nl2br($row['customer_details']) ?></td>
                    <td class="align-middle">
                        <?php
                            $all_active_status = get_status_by_parcel($row['id']);
                            while($row = mysqli_fetch_array($all_active_status)){
                                ?>
                                    <span class="badge badge-<?= $row['badge_class']?>"><?= $row['status'] ?></span><br>         
                                <?php
                            }
                        ?>
                    </td>
                    <td class="align-middle">
                        Cash Collection: <?= $row['cash_collection'] ?> BDT<br>
                        Charge: <?= $row['charge'] ?> BDT
                    </td>
                </tr>
            <?php
        }

        return;

        
    }else if(isset($_POST['search_parcel_by_track'])){
        $tracking_id = $_POST['tracking_id'];
        $query = "SELECT st.status AS 'status_title', ps.status FROM `parcels` AS prcl JOIN parcel_status AS ps ON prcl.id = ps.parcel_id JOIN status AS st ON ps.status_id = st.id WHERE prcl.tracking_id='$tracking_id'";
        // echo $query;
        // return;
        $arr = array();
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) == 0){
            echo "error";
            return;
        }
        while($row = mysqli_fetch_array($result)){
            if($row['status_title'] == 'On the way'){
                $row['status_title'] = 'on_the_way';
            }
            $arr[$row['status_title']] = $row['status'];
        }
        if($arr['Pending Return'] == 0 && $arr['Returned'] == 0){
             ?>
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-<?= $arr['Picked'] ? 'green' : 'warning' ?>"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Pickup Pending</h3>
                        <div class="timeline-body">
                            Wait for our team to pickup
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-<?= $arr['Picked'] ? 'green' : 'gray' ?>"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header no-border font-weight-bold">Picked</h3>
                        <div class="timeline-body">
                            Product has been picked from seller
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-<?= $arr['on_the_way'] ? 'green' : 'gray' ?>"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Out for delivery</h3>
                        <div class="timeline-body">
                            Delivery is on the way. (Details of delivery boy)
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-<?= $arr['Delivered'] ? 'green' : 'gray' ?>"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Delivered</h3>
                        <div class="timeline-body">
                            Your order has been shipped!
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->

                <div>
                    <i class="fas fa-glass-cheers bg-orange"></i>
                </div>
            <?php

        }else{
             ?>
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-green"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Pickup Pending</h3>
                        <div class="timeline-body">
                            Wait for our team to pickup
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-green"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header no-border font-weight-bold">Picked</h3>
                        <div class="timeline-body">
                            Product has been picked from seller
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-green"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Out for delivery</h3>
                        <div class="timeline-body">
                            Delivery is on the way. (Details of delivery boy)
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-times bg-danger"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Delivered</h3>
                        <div class="timeline-body">
                            Your order has been shipped!
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-<?= $arr['Pending Return'] || $arr['Returned']  ? 'green' : 'gray' ?>"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Pending Return</h3>
                        <div class="timeline-body">
                            The customer agreed to return the product
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fas fa-check-double bg-<?= $arr['Returned'] ? 'green' : 'gray' ?>"></i>
                    <div class="timeline-item">
                        <h3 class="timeline-header font-weight-bold">Returned</h3>
                        <div class="timeline-body">
                            Your product has been returned!
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->

                <div>
                    <i class="fas fa-glass-cheers bg-orange"></i>
                </div>
            <?php
        }    
       

    }else if(isset($_POST['add_new_shop'])){
        $shop_name = $_POST['shop_name']; 
        $user_id = $_POST['user_id']; 
        $shop_id = get_max_id_for_add('shops');

        $query = "INSERT INTO shops(`id`,`user_id`,`shop_name`) VALUES($shop_id,$user_id, '$shop_name')";
        $query2 = "INSERT INTO `user_charges`(`user_id`, `shop_id`, `cod_percentage`) VALUES ($user_id, $shop_id, 1)";
        
        if(mysqli_query($con, $query) && mysqli_query($con, $query2)){
            $_SESSION['add_shop'] = 'success';
            echo "success";
            return;
        }else{
            $_SESSION['add_shop'] = 'error';
            echo 'error';
            return;
        }

    }else if(isset($_POST['add_new_pickup_location'])){
        $pickup_address = $_POST['pickup_address']; 
        $user_id = $_POST['user_id']; 

        $query = "INSERT INTO pickup_address(`user_id`,`address`) VALUES($user_id, '$pickup_address')";

        if(mysqli_query($con, $query)){
            $_SESSION['add_pickup_address'] = 'success';
            echo "success";
            return;
        }else{
            $_SESSION['add_pickup_address'] = 'error';
            echo 'error';
            return;
        }

    }else if(isset($_POST['check_current_password'])){
        $password = $_POST['current_password'];     
        $user_email = $_SESSION['user_email']; 

        $query = "SELECT * FROM users WHERE shop_email='$user_email'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_array($result);

            if (password_verify($password, $data['password'])) {
                
                echo "success";
                return;

            } else{
                echo "error";
                return;
            }
        }else{
            echo "error";
            return;
        }
    }

?>