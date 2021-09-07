<?php
   include_once('./config.php');

   $list_delivery_boys = get_all_dropdowns('delivery_boys');

   $current_date = date("Y-m-d");

   foreach ($list_delivery_boys as $row) {
       $delivery_boy_id = $row['id'];
       $target = $row['target'];
       $pct = $row['pct_per_parcel'];
       $query = "INSERT INTO `salary`( `delivery_boy_id`, `date`, `target`, `pct_amount`, `total_salary`) VALUES ($delivery_boy_id, $current_date, $target, $pct, 0)";
       mysqli_query($con, $query); 
   }

     

?>