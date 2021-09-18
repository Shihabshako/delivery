<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Salary</h1>
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
                <th width="80">UID</th>
                <th>Name</th> 
                <th>Basic Salary</th>  
                <th>Date</th>  
                <th>Done/Target</th>
                <th>PCT per parcel</th>
                <th>PCT amount</th>
                <th>Total salary</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_salary as $row) {
            ?>
            
            <tr>
                <td class="align-middle"><?= $row['boy_id'] ?></td>
                <td class="align-middle"><?= $row['full_name'] ?></td>
                <td class="align-middle"><?= $row['basic_salary'] ?></td>
                <td class="align-middle"><?= $row['month'] ?> </td>
                <td class="align-middle">
                    <span class="text-<?= $row['done'] >= $row['target']  ? 'success h5' : 'danger h6' ?>"><?= $row['done'] ?></span>
                        /
                    <span class="text-dark <?= $row['done'] < $row['target']  ? 'h5' : 'h6' ?>"><?= $row['target'] ?></span>
                </td>
                <td class="align-middle"><?= $row['pct'] ?> % </td>
                <td class="align-middle"><?= $row['pct_amount'] ?> </td>
                <td class="align-middle"><?= $row['total_salary'] ?> </td>
                
                
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>