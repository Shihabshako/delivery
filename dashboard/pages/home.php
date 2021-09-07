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
                <h3><?= counting_stats('order_placed') ?></h3>
                <p>Order Placed</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= counting_stats('order_in_transit') ?><sup style="font-size: 20px"></sup></h3>
                <p>Order in Transit</p>
            </div>
            <div class="icon">
                <i class="fas fa-dolly"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= counting_stats('order_delivered') ?></h3>
                <p>Order Delivered</p>
            </div>
            <div class="icon">
                <i class="fas fa-people-carry"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= counting_stats('order_to_be_returned') ?></h3>
                <p>Order to be returned</p>
            </div>
            <div class="icon">
                <i class="fas fa-exchange-alt"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3><?= counting_stats('order_returned') ?></h3>
                <p>Order returned</p>
            </div>
            <div class="icon">
                <i class="fas fa-undo"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3><?= counting_stats('successful_deliveries') ?>%</h3>
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
                <span class="info-box-number"><?= counting_stats('total_sales') ?> BDT</span>
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
                <span class="info-box-number"><?= counting_stats('total_delivery_fees_paid') ?> BDT</span>
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
                <span class="info-box-number"><?= counting_stats('total_delivery_fees_unpaid') ?> BDT</span>
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
                <span class="info-box-number"><?= counting_stats('payment_processing') ?> BDT</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>