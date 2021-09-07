<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Coverage Area</h1>
        <hr class="bg-orange" style="height:8px; border-radius:5px">
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
      <ul style="columns: 2;">
        <?php
            foreach ($list_area as $row) {
                ?>
                    <li><?= $row['area_name'] ?></li>
                <?php
            }
        ?>
      </ul>  
    </div>
</div>