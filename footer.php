<!--    start footer area-->
    <section class="footer-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4 ">
                    <div class="single-footer">
                        <h2>about us</h2>
                        <p class="text-justify">The expert team of messengers, couriers and delivery boys at The Delivery Guy can deliver any package of any size throughout the Dhaka city. People placing an order with our team in can rest assured that their deliveries are not only made on time but arrive safely.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4 text-center">
                    <div class="single-footer">
                        <h2>We Accepts</h2>
                        <a href="#"><img src="img/payment_method.png" style="border-radius: 5px;" alt="#"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                    <div class="single-footer clearfix">
                        <h2>news latters</h2>
                        <input type="text" class="form-control">
                        <input type="submit" class="submt-button" value="submit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of footer area-->
    <!--star copyright text area-->
    <div class="copyright-area">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                <div class="footer-text">
                    <p>Copyright 2021, All Rights Reserved</p>
                </div>
            </div>
            <div class="col-xs-12  col-sm-6 col-md-6 text-right">
                <div class="footer-text">
                    <a href="https://www.facebook.com/thedeliveryguybd" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/thedeliveryguybd/" target="_blank" class="fa fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <!--end of copyright text area-->
    <!--  jquery.min.js  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!--    bootstrap.min.js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--    jquery.sticky.js-->
    <script src="js/jquery.sticky.js"></script>
    <!--  owl.carousel.min.js  -->
    <script src="js/owl.carousel.min.js"></script>
    <!--  jquery.mb.YTPlayer.min.js   -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!--    slick.min.js-->
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/slick.min.js"></script>
    <!--    jquery.nav.js-->
    <script src="js/jquery.nav.js"></script>
    <!--jquery waypoints js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!--    jquery counterup js-->
    <script src="js/jquery.counterup.min.js"></script>
    <!--    main.js-->
    <script src="js/main.js"></script>


    <!-- b4 -->
    
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