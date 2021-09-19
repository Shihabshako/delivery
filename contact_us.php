

<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
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
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
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
    <!--  style css  -->
    <link href="style.css" rel="stylesheet">
    <link href="custom_style.css" rel="stylesheet">
    <!--  Responsive Css  -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>

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
                        <li class=""><a href="login.php">Login</a></li>
                        <li class=""><a href="signup.php">Sign up</a></li>
                        <li  ><span><i class="fas fa-headset mr-1 text-danger"></i><span class="text-white">Call us 019201838</span> </span></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- navbar ebd -->
    </div>
    <form action="contact_us_by_email.php" method="POST">
        <section class="container mt-1 p-4">
            <div class="row justify-content-center align-self-center">    
                <div class="login-box ">
                    <div class="login-logo">
                        <a href="./index.php">
                            <img src="./img/logo.png" width="300px" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3 col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >First Name</label>
                                <input class="form-control" type="text" name="fname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label >Last Name</label>
                                <input class="form-control" type="text" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label >Email</label>
                            <input  class="form-control" type="email" name="email">
                        </div>
                        <div class="form-group col-6">
                            <label >Phone Number</label>
                            <input  class="form-control" type="number" name="phone_number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label >Subject</label>
                            <input  class="form-control" type="text" name="subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Message</label>
                            <textarea name="message" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-4 offset-4">
                            <input class="btn btn-default custom-button"  type="submit" value="Send Message">
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
    </form>











      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('.select2').select2();
        });
    </script>

  </body>
</html>