<?php
   require_once('../config.php');
   if(!isset($_SESSION['user_email'])){
    $_SESSION['login_log'] = 'error';
    header('location: ../login.php');
    return;
   } 

   if(isset($_GET['logout'])){
    session_destroy();
    header('location: ../index.php');
   }

   $user_email = $_SESSION['user_email'];
   $uid = get_user_id($user_email);
   $user_name = get_user_name($user_email);

   //all list is here
   $list_account_type = get_all_dropdowns('accounts');
   $list_product_type = get_all_dropdowns('products');
   $list_area = get_all_dropdowns('areas');
   $list_package = get_all_dropdowns('packages');
   $list_pickup_area_per_user = get_all_dropdowns('pickup_area_per_user', $user_email);
   $list_shop = get_all_dropdowns('shop_list_per_user', $user_email);
   $list_parcels = get_all_dropdowns('parcels', $user_email);








?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Dashboard</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    
    <!--  select 2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!--  tampusidmus-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

    <!-- custom css -->
    <link rel="stylesheet" href="../custom_style.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Nestable -->
    <script src="plugins/jquery-nestable/jquery.nestable.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    <!-- pdf_make -->
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    
</head>

<style>
  label{
    font-weight:normal !important;
  }
</style>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <?= $user_name ?> <i class="fas fa-caret-down "></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="./?page=my_shops" class="dropdown-item">
            My Shop
          </a>
          <a href="./?page=pickup_locations" class="dropdown-item">
            Pickup Location
          </a>
          <a href="./?page=payment_details" class="dropdown-item">
           My Payment Details
          </a>
          <a href="./?page=coverage_area" class="dropdown-item">
            Coverage Area
          </a>
          <a href="./?page=change_password" class="dropdown-item">
            Change password
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- style="background-color:#f4822a !important" -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../img/logo_written.png" alt="AdminLTE Logo" width="220px" class="elevation-3" >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./?page=home" class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./?page=parcels" class="nav-link">
              <i class="fas fa-truck nav-icon"></i>
              <p>Parcels</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./?page=create_parcel" class="nav-link">
              <i class="fas fa-box-open nav-icon"></i>
              <p>Create Parcel</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./?page=track_parcel" class="nav-link">
              <i class="fas fa-map-marker-alt nav-icon"></i>
              <p>Track Your Parcel</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./?page=coupons" class="nav-link">
              <i class="fas fa-tags nav-icon"></i>
              <p>Coupons</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./?logout" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  

   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!--    content will be here    -->
                <?php

                if (empty($_GET['page'])) {
                    include "pages/home.php";
                } else {
                    if (file_exists("pages/" . $_GET['page'] . ".php")) {
                        include "pages/" . $_GET['page'] . ".php";
                    } else {
                        include "pages/home.php";
                    }
                }
                ?>

                <!--    ./content will be here    -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper --> 

     
    <?php include_once('pages/modals.php') ?>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">The Delivery Guy</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


<!-- page script -->
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      $('input[name="dates"]').daterangepicker();
    })
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            "order": [[ 0, "asc" ]]
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "order": [[ 1, "desc" ]]
        });
         $("#example3").DataTable({
            "responsive": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]]
        });
         $("#example4").DataTable({
            "responsive": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]]
        });
         $("#example5").DataTable({
            "responsive": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]]
        });
         $("#example6").DataTable({
            "responsive": true,
            "autoWidth": false,
            "order": [[ 0, "desc" ]]
        });
        $('.js-example-basic-single').select2();
        $('.select2').select2();
    });
    $(document).ready(function () {

    });

    function cancel(table_name){
        location.href="./?page="+table_name;
    }

    
</script>
</body>
</html>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101114818912188");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

