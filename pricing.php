<?php
    $page_title = 'pricing';
    include('./header.php'); 
    
?>

    <section class="about-us">
        <?php include('./navbar.php');  ?>
    </section>

    <!--    start pricing area-->


    <!-- Pricing Area -->
    <section class="pricing-area version-6" id="pricing">
        <div class="container">
            <div class="row page-title">
                <div class="col-md-5 col-sm-6">
                    <div class="pricing-desc section-padding-two">
                        <div class="pricing-desc-title">
                            <div class="title">
                                <h2>Pricing & plans</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <div class="about_us_content_title">
                        <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">pricing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    if($_GET['pkg'] == 'basic'){
                        ?>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center">
                                <div class="single-pricing-table">
                                    <div class="pricing-title">
                                        <h6>Basic</h6>
                                        <h1>59৳</h1>
                                        <h5>+ 1% COD</h5>
                                    </div>
                                    <ul class=price-list>
                                        <li>Upto 1.5kg</li> 
                                        <li>Next Day, 24 Hours</li>
                                        <li>Register before 1:00PM</li>
                                        <li>24/7 Customer service</li>
                                    </ul>
                                    <div class="order-buton">
                                        <a href="#">order now</a>
                                    </div>
                                </div>
                            </div>
                        <?php

                    }else if($_GET['pkg'] == 'express'){
                        ?>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center">
                                <div class="single-pricing-table">
                                    <div class="pricing-title">
                                        <h6>Express</h6>
                                        <h1>99৳</h1>
                                        <h5>+ 1% COD</h5>
                                    </div>
                                    <ul class=price-list>
                                         <li>Upto 1.5kg</li> 
                                        <li>Same Day, 12 Hours</li>
                                        <li>register the day before delivery</li>
                                        <li>24/7 Customer service</li>
                                    </ul>
                                    <div class="order-buton">
                                        <a href="#">order now</a>
                                    </div>
                                </div>
                            </div>
                        <?php

                    }else{
                        ?>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center">
                                <div class="single-pricing-table">
                                    <div class="pricing-title">
                                         <h6>Home Made Food</h6>
                                        <h1>119৳</h1>
                                        <h5>+ 1% COD</h5>
                                    </div>
                                    <ul class=price-list>
                                        <li>Upto 1kg</li> 
                                        <li>Same Day, 12 Hours</li>
                                        <li>register the day before delivery</li>
                                        <li>24/7 Customer service</li>
                                    </ul>
                                    <div class="order-buton">
                                        <a href="#">order now</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>

                <?php
                    if($_GET['pkg'] == 'basic'){
                        ?>
                            <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12 text-center">
                                <h2>Following pricing is applicable only for the merchants within Dhaka city metropolitan area</h2><hr>
                                <div class="row">
                                    <h3 class=""> Basic Delivery Service</h3>
                                    <div class="text-justify table-responsive">
                                        <table class="table table-striped pricing_table">
                                            <thead>
                                                <tr>
                                                    <th>Package Weight</th>
                                                    <th>Inside Dhaka Charge (Taka)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Price for 1.5 KG</td>
                                                    <td>59৳</td>
                                                </tr>
                                                <tr>
                                                    <td>Next additional Per KG</td>
                                                    <td>29৳</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                                <div class="row package_details">
                                    <div class="col-md-12">
                                        <h4>Cash-On-Delivery:</h4> <hr>
                                        <p>1% Cash on Delivery charge will be applicable on the collected amount. </p>
                                        <p>Pick Up Charge 49৳</p>
                                        <p>Delivery and will be done in the next 24 hours. Merchant payment will be given at everyday pickup time.</p><br>
                                        <p class="text-warning">Registration has to done before 1:00PM </p>
                                    </div>
                                </div>   
                            </div>
                        <?php

                    }else if($_GET['pkg'] == 'express'){
                        ?>
                            <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12 text-center">
                                <h2>Following pricing is applicable only for the merchants within Dhaka city metropolitan area</h2><hr>
                                <div class="row">
                                    <h3 class=""> Express Delivery Service</h3>
                                    <div class="text-justify table-responsive">
                                        <table class="table table-striped pricing_table">
                                            <thead>
                                                <tr>
                                                    <th>Package Weight</th>
                                                    <th>Inside Dhaka Charge (Taka)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Price for 1.5 KG</td>
                                                    <td>99৳</td>
                                                </tr>
                                                <tr>
                                                    <td>Next additional Per KG</td>
                                                    <td>29৳</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                                <div class="row package_details">
                                    <div class="col-md-12">
                                        <h4>Cash-On-Delivery:</h4> <hr>
                                        <p>1% Cash on Delivery charge will be applicable on the collected amount. </p>
                                        <p>Pick Up Charge 49৳</p>
                                        <p>Delivery and will be done in the next 12 hours ( Same Day ). Merchant payment will be given at everyday pickup time.</p><br>
                                        <p class="text-warning">Registration has to done the day before delivery. </p>
                                    </div>
                                </div>   
                            </div>
                        <?php

                    }else{
                        ?>
                            <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12 text-center">
                                <h2>Following pricing is applicable only for the merchants within Dhaka city metropolitan area</h2><hr>
                                <div class="row">
                                    <h3 class=""> Frozen and Home made food Delivery Service</h3>
                                    <div class="text-justify table-responsive">
                                        <table class="table table-striped pricing_table">
                                            <thead>
                                                <tr>
                                                    <th>Package Weight</th>
                                                    <th>Inside Dhaka Charge (Taka)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Price for 1 KG</td>
                                                    <td>119৳</td>
                                                </tr>
                                                <tr>
                                                    <td>Next additional Per KG</td>
                                                    <td>29৳</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                                <div class="row package_details">
                                    <div class="col-md-12">
                                        <h4>Cash-On-Delivery:</h4> <hr>
                                        <p>1% Cash on Delivery charge will be applicable on the collected amount. </p>
                                        <p>Pick Up Charge 49৳</p>
                                        <p>Delivery and will be done in the next 12 hours ( Same Day ). Merchant payment will be given at everyday pickup time.</p><br>
                                        <p class="text-warning">Registration has to done the day before delivery.</p>
                                    </div>
                                </div>   
                            </div>
                        <?php
                    }
                ?>
                
                
            </div>
        </div>
    </section>
    <!-- /.End Of Pricing Area -->

    <!--start footer area-->

    <section class="footer-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                    <div class="single-footer">
                        <h2>about us</h2>
                        <p>ABOUT US Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2">
                    <div class="single-footer">
                        <h2>More links</h2>
                        <ul class="list">
                            <li><a href="#">about us.</a></li>
                            <li><a href="#">We Accepts.</a></li>
                            <li><a href="#">news latters</a></li>
                            <li><a href="#">Pricing & plans</a></li>
                            <li><a href="#">Calculate</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                    <div class="single-footer">
                        <h2>We Accepts</h2>
                        <a href="#"><img src="img/cards_credt_1.png" alt="#"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                    <div class="single-footer clearfix">
                        <h2>news latters</h2>
                        <input type="text" class="form-control">
                        <input type="submit" class="submt-button" value="submit">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="copyright-area">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                <div class="footer-text">
                    <p>Copyright 2016, All Rights Reserved</p>
                </div>
            </div>
            <div class="col-xs-12  col-sm-6 col-md-6 text-right">
                <div class="footer-text">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-dribbble"></a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>