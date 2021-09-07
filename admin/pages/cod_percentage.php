<?php
    show_sweet_alert('edit_cod_percentage', 'Record Added successfully', 'Failed to add record', '', '', '');

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>COD Percentage</h1>
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
                <th>Merchant Name</th> 
                <th>COD Percentage</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($list_cod_percentage as $row) {
              
            ?>
            
            <tr>
                <td>
                    <?= $row['id'] ?>
                    <a class="btn btn-default btn-sm " href="<?= './?page=edit_cod_percentage&id='.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td><?= get_user_name('', $row['user_id']) ?></td>
                <td><?= $row['cod_percentage'] ?>%</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>