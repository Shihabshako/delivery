<?php
    include '../../vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

    require_once('../../config.php');
    $user_email = $_GET['user_email'];
    $uid = get_user_id($user_email);
    
    $all_table_data = get_all_dropdowns('parcels_excel', $user_email);


    $table = '<table class="table table-bordered" bordered="1">
            <tr>
                <th>Tracking ID</th>
                <th>Memo ID</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Delivery Area</th>
                <th>Customer Phone Number</th>
                <th>Cash Collection</th>
                <th>Delivery Charge</th>
                <th>Cash on Delivery(COD) charge</th>
                <th>Delivery Status</th>
                <th>Delivery Type</th>
                <th>Parcel Creation Date</th>
                <th>Parcel Delivered Date</th>
                <th>Payment Status</th>
            </tr>
        ';

        while($row = mysqli_fetch_array($all_table_data)){
            $table .= '
                <tr>
                    <td>'.$row['tracking_id'].'</td>
                    <td>'.$row['memo_number'].'</td>
                    <td>'.$row['customer_name'].'</td>
                    <td>'.$row['customer_address'].'</td>
                    <td>'.$row['delivery_area'].'</td>
                    <td>'.$row['customer_phone_number'].'</td>
                    <td>'.$row['cash_collection'].'</td>
                    <td>'.$row['delivery_charge'].'</td>
                    <td>'.$row['cod_charge'].'</td>
                    <td>'.get_parcel_status('delivery_status', $row['id']).'</td>
                    <td>'.$row['package_title'].'</td>
                    <td>'.$row['created_date'].'</td>
                    <td>'.$row['delivered_at'].'</td>
                    <td>'.get_parcel_status('payment_status', $row['id']).'</td>
                </tr>
            ';
        }

    $table .= '</table>';
//echo $table;
 
 if($table){
    $temporary_html_file = time() . '.html';

    file_put_contents($temporary_html_file, $table);

    $reader = IOFactory::createReader('Html');

    $spreadsheet = new Spreadsheet();

    $spreadsheet = $reader->load($temporary_html_file);

   

    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

    $filename = 'All Parcels Details'.'_'.date("dmY").'.xlsx';

    $writer->save($filename);

    header('Content-Type: application/x-www-form-urlencoded');
    header('Content-Transfer-Encoding: Binary');
    header("Content-disposition: attachment; filename=\"".$filename."\"");
    ob_clean();
    flush();
    readfile($filename);
    unlink($temporary_html_file);
    unlink($filename);
    exit;
 }

  

?>
