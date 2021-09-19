<?php
    include_once('./config.php');
    $list_account_type = get_all_dropdowns('accounts');
    $list_product_type = get_all_dropdowns('products');
    $list_area = get_all_dropdowns('areas');

    show_sweet_alert('user_add', 'Registered successfully. You can now login', 'Registration Failed, Try again', '', '', '');
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Signup</title>
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
                        <li  ><a href="contact_us.php">contact</a></li>
                        <li  ><span><i class="fas fa-headset mr-1 text-danger"></i><span class="text-white">Call us 019201838</span> </span></li>
                    </ul>
                
                    </form>
                </div>
            </nav>
        </div>
        <!-- navbar ebd -->
    </div>
    <section class="container mt-1">
        <div class="row flex-column text-center mb-3">
            <h3>Add your Business information</h3>
            <p>If you have more than one business, you can create multiple shops letter</p>
        </div>

        <form action="register_user.php" method="POST">
            <div class="row justify-content-between">
                <div class="col-md-8 offset-md-2">
                    <div class="form-group">
                        <input type="hidden" name="user_id" value = "<?= get_max_id_for_add('users') ?>">
                        <label for="">Account Type</label>
                        <select name="account_type" class="select2" style="width: 100%;" id="" placeholder="" required>
                         <option value="" disabled selected>Select your role</option>
                            <?php
                                foreach ($list_account_type as $account) {
                                    if($account['account_title'] == 'Admin' || $account['account_title'] == 'Super Admin'){
                                        continue;
                                    }
                                    ?><option value="<?= $account['id'] ?>" ><?= $account['account_title']  ?></option><?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Full Name</label>
                                <input class="form-control" type="text" name="full_name" required>
                            </div>
                            <div class="form-group">
                                <label >Shop Email</label>
                                <input class="form-control" type="email" name="shop_email" required>
                            </div>
                            <div class="form-group">
                                <label >Pickup Address</label>
                                <input class="form-control" type="text" name="pickup_address" required>
                            </div>
                            <div class="row">
                                <!-- <div class="form-group col-8">
                                    <label >Pickup Phone</label>
                                    <input class="form-control" type="number" name="pickup_phone" required>
                                </div> -->
                                <div class="form-group col-8">
                                    <label for="">Pickup Phone</label>
                                    <div class="input-group">
                                        <input 
                                            type="number" 
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                            maxlength = "11"
                                            class="form-control" 
                                            name="pickup_phone" 
                                            id="pickup_phone" 
                                            placeholder="017XXXXXXXX"
                                            >
                                        <div class="input-group-append" onclick="phoneAuth()" id="sign-in-button">
                                            <div class="input-group-text symbol btn btn-info"  ><span  >Send OTP</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <label >OTP</label>
                                    <input  
                                        class="form-control" 
                                        type="number" 
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                        maxlength = "6"
                                        placeholder="123456" 
                                        onkeyup="verifyPhoneNumber(this.value)" 
                                        name="otp" 
                                        required
                                        id="otp"
                                    >
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="recaptcha-container" id="recaptcha-container"></div>
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label >Referred By (Optional)</label>
                                <input class="form-control" type="text" name="referred_by" >
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Shop Name</label>
                                <input class="form-control" type="text" name="shop_name" required>
                            </div>
                            <div class="form-group">
                                <label >Shop Address</label>
                                <input class="form-control" type="text" name="shop_address" required>
                            </div>
                            <div class="form-group">
                                <label >Pickup Area</label>
                                <select name="pickup_area" class="select2" style="width: 100%;" id="" required>
                                    <option value="" disabled selected>Choose Pickup Area</option>
                                    <?php
                                        foreach ($list_area as $area) {
                                            ?><option value="<?= $area['id'] ?>" ><?= $area['area_name']  ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Product Type</label>
                                <select name="product_type" class="select2" style="width: 100%;" id="" required>
                                 <option value="" disabled selected>Select Your  product Type</option>
                                    <?php
                                        foreach ($list_product_type as $product) {
                                            ?><option value="<?= $product['id'] ?>" ><?= $product['product_title']  ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Confirm Password</label>
                                <input class="form-control" type="password" name="confirm_password" required>
                            </div><br>
                            <div class="row mt-2">
                                <div class="col-6"></div>
                                <div class="form-group text-right col-6">
                                    <input class="btn btn-light mr-3" onclick="location.href='index.php'" type="button" value="Cancel">
                                    <input class="btn btn-default custom-button" id="registerButton"  type="submit" value="Register" disabled>
                                </div>        
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>    
        </form>

    </section>










     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>                    

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
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>

<!-- firebase_configuration -->
<script>
  const firebaseConfig = {
    apiKey: "AIzaSyD-YT-F1cpWb2IAHPVVeCxjRc35A2-w_Sg",
    authDomain: "deliveryguy-v1.firebaseapp.com",
    projectId: "deliveryguy-v1",
    storageBucket: "deliveryguy-v1.appspot.com",
    messagingSenderId: "849032394754",
    appId: "1:849032394754:web:c628529fe121e1514c8f1b",
    measurementId: "G-HYHN9F4WCB"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
 firebase.analytics();
</script>
<script src="js/firebase.js" type="text/javascript"></script>


  </body>
</html>