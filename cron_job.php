<?php
   include_once('./config.php');

   $list_delivery_boys = get_all_dropdowns('delivery_boys');

   $current_date = date("Y-m-d");

   foreach ($list_delivery_boys as $row) {
       $delivery_boy_id = $row['id'];
       $target = $row['monthly_target'];
       $pct = $row['pct_per_parcel'];
       $basic_salary = $row['basic_salary'];
       $query = "INSERT INTO `salary`( `delivery_boy_id`, `date`,`done`, `target`,`pct_per_parcel`, `pct_amount`, `total_salary`) VALUES ($delivery_boy_id, '$current_date', 0,$target, $pct,0, $basic_salary)";
       mysqli_query($con, $query); 
   }



     

?>