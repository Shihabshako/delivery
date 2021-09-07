<?php
    show_sweet_alert('add_expenses', 'Record Added successfully', 'Failed to add record', '', '', '');
    show_sweet_alert('edit_expenses', 'Record Updated successfully', 'Failed to update record', '', '', '');
    show_sweet_alert('delete_expenses', 'Record Deleted successfully', 'Failed to delete record', '', '', '');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Expenses</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<div class="card collapsed-card">
    <div class="card-header">      
        <h3 class="card-title">Expenses Summery</h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-cogs"></i></span>                
                    <div class="info-box-content">
                        <span class="info-box-text">Total Expenses</span>
                        <span class="info-box-number" ><?= counting_stats('expenses') ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                    <!-- /.info-box -->
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">
    <div class="float-right">
      <a href="#" data-toggle="modal" data-target="#add_expense_modal" class="btn btn-primary"  >Add New Expense</a>
    </div>
    <br><br>
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th width="80">ID</th>
                <th>Expenses By</th>
                <th>Date</th>  
                <th>Cost Details</th>  
                <th>Cost Amount</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_expenses as $row) {
                $date = date_create($row['date']);
            ?>
            
            <tr>
                <td>
                    <?= $row['id'] ?>

                    <a onclick="return confirm('Do you wanna delete this item ?')" class="btn btn-default btn-sm" href="./pages/db_record_delete.php?var_name=expenses&id=<?= $row['id'] ?>"><i
                        class="fas fa-trash-alt"></i></a>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_expenses&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td><?= get_admin_name('',$row['expenses_by']) ?></td>
                <td><?= date_format($date, "j M, Y") ?></td>
                <td><?= $row['cost_details'] ?></td>
                <td><?= $row['cost_amount'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>