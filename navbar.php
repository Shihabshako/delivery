<div class="logo_menu" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-6">
                <div class="logo">
                    <a href="index.php"><img src="img/logo_written.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-12 mobMenuCol">
                <nav class="navbar">
                    <ul class="nav navbar-nav navbar-right menu" id="top-menu">
                        <?php
                            if($page_title == 'home'){
                                ?>
                                    <li onclick="smoothScroll(this, 'js')" class="current-menu-item"><a href="#">Home</a></li>
                                    <li onclick="smoothScroll(this, 'pricing-area')" ><a href="#">pricing</a></li>
                                    <li onclick="smoothScroll(this, 'clients')" ><a href="#">Clients</a></li>
                                    <li onclick="smoothScroll(this, 'about_us_area')" ><a href="#">about</a></li>
                                    <li  ><a href="./contact_us.php">contact</a></li>
                                    <li ><a href="./login.php">login</a></li>
                                    <li  ><button class="signup_button" onclick="location.href='signup.php'">sign up</button></li>
                                    
                                <?php

                            }else{
                                ?>
                                    <li class=""><a href="index.php">Home</a></li>
                                    <li  ><a href="contact.php">contact</a></li>
                                <?php
                            }
                        ?>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>