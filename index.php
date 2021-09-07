<?php
    if(!session_id()){
        session_start();
    }

    if(isset($_SESSION['user_email']) && $_SESSION['is_merchant']){
        header('location: ./dashboard/');   
    }

    $page_title = 'home';
    include('./header.php');
    include('./carousel.php'); 
    
    
    

?>


    <!--   start about top area-->
    <section class="about_top">
        <div class="container">
            <div class="row">
                <div class="about_us_content" >
                    <h2>We ensures</h2>
                </div>       
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="img/fastest_pickup.png" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Pickup</h4>
                            <p class="text-justify">Once the parcel request is done from the website, our team will start working on it. Delivery Boy will pickup the parcel ASAP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="img/fastest_delivery.png" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Delivery</h4>
                            <p class="text-justify">The expert team will ensure the fastest delivery throughout the Dhaka city. Our courier service specializes in rush deliveries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="img/fastest_payment.png" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Payment</h4>
                            <p class="text-justify">Our team will ensure the fastest payment within next 24 hours. Bank transfer, online payment, cash payment will be served.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--    end of about top area-->  

    <!--start Pricing Area -->
    <section class="pricing-area" id="pricing">
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <div class="pricing-desc section-padding-two">
                                <div class="pricing-desc-title">
                                    <div class="title">
                                        <h2>Pricing & plans</h2>
                                        <p>The Delivery Guy ensures the best delivery experience with the best price.</p>
                                    </div>
                                </div>
                                <p class="text-justify">We have three plans such as basic, express, home made food delivery. There is no hidden fees. Select the plan which is best for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-out">
            <div class="pricing-slider">
                <ul class="carousel">
                    <li class="items main-pos slides" id="1">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Basic</h6>
                            </div>
                            <div class="price">
                                <p>59৳</p>
                                <span class="pricing-status">+ 1% COD</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                   <li>Upto 1.5kg</li> 
                                   <li>Next Day, 24 Hours</li>
                                   <li>Register before 1:00PM</li>
                                   <li>24/7 Customer service</li>
                                </ul>
                                <a href="./pricing.php?pkg=basic" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items right-pos slides" id="2">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Express</h6>
                            </div>
                            <div class="price">
                                <p>99৳</p>
                                <span class="pricing-status">+ 1% COD</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Upto 1.5kg</li> 
                                    <li>Same Day, 12 Hours</li>
                                    <li>register the day before delivery</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="./pricing.php?pkg=express" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="3">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Home Made Food</h6>
                            </div>
                            <div class="price">
                                <p>119৳</p>
                                <span class="pricing-status">+ 1% COD</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Upto 1kg</li> 
                                    <li>Same Day, 12 Hours</li>
                                    <li>register the day before delivery</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="./pricing.php?pkg=home" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="4">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Basic</h6>
                            </div>
                            <div class="price">
                                <p>59৳</p>
                                <span class="pricing-status">+ 1% COD</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                   <li>Upto 1.5kg</li> 
                                   <li>Next Day, 24 Hours</li>
                                   <li>Register before 1:00PM</li>
                                   <li>24/7 Customer service</li>
                                </ul>
                                <a href="./pricing.php?pkg=basic" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="5">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Express</h6>
                            </div>
                            <div class="price">
                                <p>99৳</p>
                                <span class="pricing-status">+ 1% COD</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Upto 1.5kg</li> 
                                    <li>Same Day, 12 Hours</li>
                                    <li>register the day before delivery</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="./pricing.php?pkg=express" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="6">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Express</h6>
                            </div>
                            <div class="price">
                                <p>99৳</p>
                                <span class="pricing-status">+ 1% COD</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Upto 1.5kg</li> 
                                    <li>Same Day, 12 Hours</li>
                                    <li>register the day before delivery</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="./pricing.php?pkg=express" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items left-pos slides" id="7">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Home Made Food</h6>
                            </div>
                            <div class="price">
                                <p>119৳</p>
                                <span class="pricing-status">+ 1% COD</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Upto 1kg</li> 
                                    <li>Same Day, 12 Hours</li>
                                    <li>register the day before delivery</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="./pricing.php?pkg=home" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                </ul>
                <div class="slider-navs">
                    <div class="prev-nav" id="prev"><i class="fa fa-angle-left"></i></div>
                    <div class="next-nav" id="next"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Pricing Area -->

     <!--    start counter up area-->
    <section class="couter_up_area" id="service">
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 text-center">
                            <div class="single_count">
                                <h1 class="counter">126</h1>
                                <h5>Satisfied clients</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">7</h1>
                                <h5>Merchant</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">10</h1>
                                <h5>Active workers</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">500</h1>
                                <h5>Product delivered</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of counter up area-->

    <!--   start  service-->
    <section class="about_top clients" id="service">
        <div class="container">
            <div class="row">
                <div class="about_us_content" >
                    <h2>Our Clients</h2>
                </div>       
                <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6  text-center">
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6  text-center">
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6  text-center">
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-6  text-center">
                    <br>
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6  text-center">
                    <br>
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6  text-center">
                    <br>
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6  text-center">
                    <br>
                    <img src="img/client1.png" width="180px" height="160px" style="border-radius: 5px" alt="item" >
                </div>
            </div>
        </div>
    </section>
    <!--    end of service--> 

    
    <!--    start client say area-->
    <section class="client-area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-8">
                    <div class="slients-title">
                        <h2>What our clients say</h2>
                        <p>We are very fortunate to have formed excellent partnerships with many of our clients. Here’s what they’re saying about us.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-clients">
                        <div class="client-img">
                            <img src="img/client1.png" style="border-radius: 5px" height="98px" width="98px" alt="client">
                        </div>
                        <div class="client-details">
                            <p>“I have had experiences with other exhibit companies. When I give Exhibit Systems a ten, I would give those others a two.”</p>
                            <h4>Demo name 1<span>Student</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-clients">
                        <div class="client-img">
                             <img src="img/client1.png" style="border-radius: 5px" height="98px" width="98px" alt="client">
                        </div>
                        <div class="client-details">
                            <p>“Mostly Serious was crucial in helping us understand our digital audience and what they want from us.”</p>
                            <h4>Demo Name 2<span>HouseWife</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of client area-->


    <!--    start about us area-->
    <section class="about_us_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about_us_content" >
                        <h2>about us</h2>
                        <p class="text-justify">The expert team of messengers, couriers and delivery boys at The Delivery Guy can deliver any package of any size throughout the Dhaka city. People placing an order with our team in can rest assured that their deliveries are not only made on time but arrive safely.</p>
                        <a href="./about.php">read more <span  class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-md-offset-1 col-sm-6 col-md-5">
                    <div class="about_car">
                        <img src="img/about_car.png" alt="car">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   end of about us area-->

    <div class="modal fade" id="track_parcel_modal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Result of your tracking ID</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="track_modal_body">
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="text-center" id="error_img_index" hidden>
                                <img src="./img/error.png" width="300" alt="">
                                <h3>Wrong Tracking ID</h3>
                            </div>
                            <!-- The time line -->
                            <div class="timeline" id="timeline_body_index">
                                
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('./footer.php'); ?>

    <script>
        function smoothScroll(selfs, class_name){
            event.preventDefault();
            
            var listItems = $("#top-menu li");
            $("#top-menu li").each(function () {
                $(this).removeClass("current-menu-item");
            });

            $(selfs).addClass('current-menu-item');
            console.log(self)
            $("html,body").animate(
                {
                scrollTop: $("."+class_name).offset().top,
                },
                "slow"
            );
        }

        function track_id_in_index(){
            event.preventDefault();
            var tracking_id = $('#tracking_id_index').val();
            $('#track_parcel_modal').modal('show')
            $.ajax({
                url:'dashboard/pages/ajax_generator.php',
                method : "POST",
                data: {
                    search_parcel_by_track : true,
                    tracking_id : tracking_id
                },
                dataType:"TEXT",
                success:function(response){   
                    if(response.trim() == 'error'){
                        $('#error_img_index').attr('hidden',false);
                        $('#timeline_body_index').attr('hidden',true);
                    }else{
                        $('#error_img_index').attr('hidden',true);
                        location.href="track_parcel.php?tracking_id="+tracking_id;
                    }           
                    
                }
            })
        }

        // (function () {
        //     var options = {
        //         facebook: "101114818912188", // Facebook page ID
        //         call_to_action: "Message us", // Call to action
        //         position: "right", // Position may be 'right' or 'left'
        //     };
        //     var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        //     var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        //     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        //     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        // })();
    
    </script>