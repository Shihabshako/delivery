<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row mb-2">
        <div class="col-md-6">
        <h1>Dashboard</h1>
        </div>
    </div>
</section>



<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= count_admin_stats('merchant') ?></h3>
                <p>Merchants</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= 0 ?><sup style="font-size: 20px"></sup></h3>
                <p>Delivery Boys</p>
            </div>
            <div class="icon">
                <i class="fas fa-biking"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= count_admin_stats('parcels') ?></h3>
                <p>Parcels</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= count_admin_stats('total_pending_pickup') ?></h3>
                <p>Pending Pickup</p>
            </div>
            <div class="icon">
                <i class="fas fa-clock"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3><?= count_admin_stats('total_delivered') ?></h3>
                <p>Delivered</p>
            </div>
            <div class="icon">
                <i class="fas fa-people-carry"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3><?= count_admin_stats('total_pending_return') ?></h3>
                <p>Pending Return</p>
            </div>
            <div class="icon">
                <i class="fas fa-exchange-alt"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= count_admin_stats('total_returned') ?></h3>
                <p>Returned</p>
            </div>
            <div class="icon">
                <i class="fas fa-undo-alt"></i>
            </div>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= count_admin_stats('areas') ?><sup style="font-size: 20px"></sup></h3>
                <p>Coverage Areas</p>
            </div>
            <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= count_admin_stats('total_successful_deliveries') ?>%<sup style="font-size: 20px"></sup></h3>
                <p>Successful Deliveries</p>
            </div>
            <div class="icon">
                <i class="fas fa-check-circle"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>


<div class="row mt-md-3">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-lg">
            <span class="info-box-icon bg-info"><i class="fas fa-wallet"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Sales</span>
                <span class="info-box-number"><?= 2561 ?> BDT</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-lg">
            <span class="info-box-icon bg-success"><i class="fas fa-hands-helping"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Delivery Fees Paid</span>
                <span class="info-box-number"><?= 8456 ?> BDT</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-lg">
            <span class="info-box-icon bg-warning"><i class="fab fa-creative-commons-nc"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total unpaid amount</span>
                <span class="info-box-number"><?= 8456 ?> BDT</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box shadow-lg">
            <span class="info-box-icon bg-danger"><i class="fas fa-hourglass-half"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Payment Processing <i class="fa fa-question-circle" title="After extracting COD charge you will get" aria-hidden="true"></i></span> 
                <span class="info-box-number"><?= 5416 ?> BDT</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>