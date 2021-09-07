<?php
    $tracking_id =  $_GET['tracking_id'] ;
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
    <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    
    <!--  select 2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="dashboard/plugins/daterangepicker/daterangepicker.css">
    <!--  tampusidmus-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- summernote -->
    <link rel="stylesheet" href="dashboard/plugins/summernote/summernote-bs4.css">

    <!-- custom css -->
    <link rel="stylesheet" href="custom_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Nestable -->
    <script src="dashboard/plugins/jquery-nestable/jquery.nestable.js"></script>
    <!-- Bootstrap 4 -->
    <script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <!-- DataTables -->
    <script src="dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    <!-- pdf_make -->
    <script src="dashboard/plugins/pdfmake/vfs_fonts.js"></script>
    <!-- date-range-picker -->
    <script src="dashboard/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="dashboard/dist/js/demo.js"></script>
    <!-- AdminLTE App -->
    <script src="dashboard/dist/js/adminlte.min.js"></script>
    <!-- Summernote -->
    <script src="dashboard/plugins/summernote/summernote-bs4.min.js"></script>
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

<body style="background-color: #F4F6F9; !important">

    <div style="background-color: #2d3945; !important">
        <!-- navbar start -->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark " >
                <a class="navbar-brand" href="./index.php">
                    <img src="img/logo_written.png" width="170" height="40" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto menu">
                        <li class=""><a href="index.php">Home</a></li>
                        <li  ><a href="contact.php">contact</a></li>
                        <li  ><span><i class="fas fa-headset mr-1 text-danger"></i><span class="text-white">Call us 019201838</span> </span></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- navbar ebd -->
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header mt-3 ml-3">
        <div class="row mb-2">
            <div class="col-md-6">
            <h1>Track your parcels</h1>
            <hr class="bg-orange" style="height:8px; border-radius:5px">
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <div class="welcome_form">
                    <form action="#" id="track_id_form" onsubmit="search_tracking_id()">
                        <input class="form-control" type="text" id="tracking_id" placeholder="Enter your Tracking ID" value="<?= $tracking_id ?>" required>
                        <input class="submit" type="submit"  value="Track your product">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
    <div class="row">
            <div class="col-md-12" >
                <div class="text-center" id="error_img" hidden>
                    <img src="./img/error.png" width="300" alt="">
                    <h3>Wrong Tracking ID</h3>
                </div>
                <!-- The time line -->
                <div class="timeline" id="timeline_body">
                    
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>


<!-- page script -->
<script>
    window.onload = function() {
        search_tracking_id()
    };
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

    function search_tracking_id(){
        event.preventDefault();
        var tracking_id = $('#tracking_id').val();

        $.ajax({
            url:'dashboard/pages/ajax_generator.php',
            method : "POST",
            data: {
                search_parcel_by_track : true,
                tracking_id : tracking_id
            },
            dataType:"TEXT",
            success:function(response){   
               console.log(response) 
                if(response.trim() == 'error'){
                    $('#error_img').attr('hidden',false);
                    $('#timeline_body').attr('hidden',true);
                }else{
                    $('#error_img').attr('hidden',true);
                    $('#timeline_body').attr('hidden',false);
                    $("#timeline_body").html(response);
                }           
                
            }
        })
    }

    
</script>
</body>
</html>

