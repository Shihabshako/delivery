
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Paid amount</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>


<div class="card">
  <div class="card-body">
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Shop</th> 
                <th>Creation Date</th>  
                <th>Paid Amount</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_paid_amount as $row) {
              if(get_parcel_status_for_payment('Paid', $row['id']) == ''){
                continue;
              }
            ?>
            
            <tr>
                <td class="align-middle">
                    Track ID: <?= $row['tracking_id'] ?><br>
                    Memo ID: <?= $row['memo_number'] ?>
                </td>
                <td class="align-middle"><?= $row['shop_name'] ?></td>
                <td class="align-middle"><?= $row['created_date'] ?></td>
                <td class="align-middle"><?= $row['seller_will_get'] ?> BDT</td>
                
                
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>