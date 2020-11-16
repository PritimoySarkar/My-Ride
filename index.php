<?php
include ("php/connection.php");
if(isset($_SESSION['user'])){
    ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        // Change text of input button
        $("#profile").attr("href", "user/profile.php");

        // Change text of button element
        $("#profile").html("My Profile");
    });
    </script>
    <?php
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Ride</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- Bootstrap Link here-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body style="background-color: #a7907b40">
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Ride Arriving</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="index.php"><img src="assets/img/logo/myRIde_logo.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="booking.php">Booking</a></li>
<!--                                        <li><a href="blog.html">Blog</a>-->
<!--                                            <ul class="submenu">-->
<!--                                                <li><a href="blog.html">Blog</a></li>-->
<!--                                                <li><a href="user_register.php">Blog Details</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
                                        <li><a href="cars.php">Services</a>
                                            <ul class="submenu">
                                                <li><a href="cars.php">Cars</a>
                                                <li><a href="drivers.php">Drivers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="user/user_login.php" class="btn btn1 d-none d-lg-block" id="profile">Log In</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider hero-overly slider-height d-flex align-items-center" data-background="assets/img/background/pic1.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">our journey begins with you</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Book & Ride</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/background/pic2.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Commercial to Private</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">We carry your load</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/background/pic3.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Day and night every turn</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">We'll drive through</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Booking Room Start-->
        <div class="booking-area">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <form method="POST" enctype="multipart/form-data" action="carselect.php">
                            <div class="booking-wrap d-flex justify-content-between align-items-center">

                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30 mr-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span> From Where:</span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <select id="source" name="source">
                                            <option value="" selected>Select Source</option>
                                            <?php
                                            $routes=mysqli_query($conn,"SELECT source FROM route UNION SELECT destination FROM route");
                                            while($row=mysqli_fetch_array($routes)){
                                                ?><option value="<?php echo $row[0] ?>"> <?php echo $row[0] ?></option><?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30 mr-30 ml-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span>To Where:</span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <select id="destination" name="destination">
                                            <option value="" selected>Select Destination</option>
                                            <?php
                                            $routes=mysqli_query($conn,"SELECT source FROM route UNION SELECT destination FROM route");
                                            while($row=mysqli_fetch_array($routes)){
                                                ?><option value="<?php echo $row[0] ?>"> <?php echo $row[0] ?></option><?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30 mr-30 ml-30">
                                    <div class="boking-tittle">
                                        <span>Pick-up Date:</span>
                                    </div>
                                    <div class="select-this">
                                        <input id="datepicker1" name="startDate" placeholder="dd/mm/yy" required/>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30 mr-60 ml-30">
                                    <div class="boking-tittle">
                                        <span>Drop-off Date:</span>
                                    </div>
                                    <div class="select-this">
                                        <input id="datepicker2" name="endDate" placeholder="dd/mm/yy" required/>
                                    </div>
                                </div>
                                <!--                    &lt;!&ndash; Single Select Box &ndash;&gt;-->
                                <!--                    <div class="single-select-box mb-30">-->
                                <!--                        <div class="boking-tittle">-->
                                <!--                            <span>Pick-up Time:</span>-->
                                <!--                        </div>-->
                                <!--                        <div class="select-this">-->
                                <!--                            <input id="timepicker" type="time" />-->
                                <!--                        </div>-->
                                <!--                   </div>-->
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30 mr-100">
                                    <div class="boking-tittle">
                                        <span>Head Count:</span>
                                    </div>
                                    <div class="select-this">
                                        <select class="scrollable-menu" id="source" name="headCount">
                                            <option value="" selected>Select Number of people (Passenger)</option>
                                            <?php foreach (range(1,16) as $num){
                                                ?><option value="<?php echo $num ?>"> <?php echo $num ?></option><?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span>Required Car Type:</span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <select id="type" name="type">
                                            <option value="" selected>Select Car Type</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Privet">Privet</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box mb-30">
                                    <!-- select out date -->
                                    <div class="boking-tittle">
                                        <span>Release type:
                                        <i data-toggle="tooltip" data-placement="top" title="Choose whole day if you wish to book the car for the whole day otherwise choose 'Release after journey completion' if you going to release the car just after reaching your destination" class="fas fa-question-circle"></i>
                                        </span>
                                    </div>
                                    <div class="boking-datepicker">
                                        <select id="type" name="mode">
                                            <option value="" selected>Select Drop off service duration</option>
                                            <option value="day">Whole Day</option>
                                            <option value="noday">Release after journey completion</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Select Box -->
                                <div class="single-select-box pt-45 mb-30">
                                    <input type="submit" name="search" value="Search" class="btn select-btn">
                                    <!--                                    <a href="#" type="submit" class="btn select-btn" name="search" >Book Now</a>-->
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Room End-->

        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="assets/img/gallery/better-journey.jpg" class="customar-img1" alt="">
                            <img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
                            <div class="service-experience heartbeat">
                                <h3>25 Years of Service<br>Experience</h3>
                            </div>
                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <span>What we do</span>
                            <h2>We are here to make your journey better</h2>
                            <div class="caption-details">
                                <p class="pera-dtails">Your comfort and safety throughout the journey is our responsibility.</p>
                                <p>Serving our customers with quality service since 25 years with 55000+ happy customers and 520+ drivers we are proud to provide you a proper hassle free smooth journey. We are happy to serve you. Our journey begins with you and it also ends with you only.</p>
                                <a href="about.php" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->

        <!-- Dining Start -->
        <div class="dining-area dining-padding-top">
            <!-- Single Left img -->
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Our cars</span>
                                <h3>Ride our luxury wheels</h3>
                                <p>We provide more than 700 cars including private and commercial types. Starting from a short quick ride to a long trip with friends and family as well as transporting huge amount of commercial material we got you covered.</p>
                                <a href="cars.php" class="btn border-btn">All wheels<i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- single Right img -->
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Our Drivers</span>
                                <h3>They will drive you dusk till dawn</h3>
                                <p>We have more than 500 highly skilled and trained professional drivers. Each of them have at least 5 years of driving experience so that you can enjoy the journey and we can take care of the road. Your safety and comfort are always our first priority.</p>
                                <a href="drivers.php" class="btn border-btn">Our Heroes<i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Dining End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>My Ride is the best platform to take your favourite car to your weekend trip with friends. Wonderful service, punctual timing and comfortable ride.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Md. Abdul Akhtar, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial2.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>My Ride is the best platform to take your favourite car to your weekend trip with friends. Wonderful service, punctual timing and comfortable ride.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Mr. Rajib Ghosh, <span>New Client</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial3.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <div class="testimonial-ratting">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star-half"></i></a>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Ms. Sahina Khatun, <span>Frequent Client</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Gallery img Start-->
<!--        <div class="gallery-area fix">-->
<!--            <div class="container-fluid p-0">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="gallery-active owl-carousel">-->
<!--                            <div class="gallery-img">-->
<!--                                <a href="#"><img src="assets/img/gallery/gallery1.jpg" alt=""></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-img">-->
<!--                                <a href="#"><img src="assets/img/gallery/gallery2.jpg" alt=""></a>-->
<!--                            </div>-->
<!--                            <div class="gallery-img">-->
<!--                                <a href="#"><img src="assets/img/gallery/gallery3.jpg" alt=""></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- Gallery img End-->
    </main>
   <footer>
       <!-- Footer Start-->
       <div class="footer-area black-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-30">
                         <!-- logo -->
                         <div class="footer-logo">
                           <a href="index.php"><img src="assets/img/logo/myride-footer.png" alt=""></a>
                         </div>
<!--                         <div class="footer-social footer-social2">-->
<!--                             <a href="#"><i class="fab fa-facebook-f"></i></a>-->
<!--                             <a href="#"><i class="fab fa-twitter"></i></a>-->
<!--                             <a href="#"><i class="fas fa-globe"></i></a>-->
<!--                             <a href="#"><i class="fab fa-behance"></i></a>-->
<!--                         </div>-->
                         <div class="footer-pera">
                              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="about.php">About Myride</a></li>
                                   <li><a href="cars.php">Our Cars</a></li>
                                   <li><a href="drivers.php">Our Drivers</a></li>
                                   <li><a href="booking.php">Book Car</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Talk to us</h4>
                               <ul>
                                   <li><a href="tel:1234567889">Tel: 123 4567 889</a></li>
                                   <li><a href="skype:live:.cid.734aa98970431b7c?chat">Skype: Myride</a></li>
                                   <li><a href="mailto:p2.ms@yandex.com">booking@myride.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Our Location</h4>
                               <ul>
                                   <li><a href="https://goo.gl/maps/9U8wYcagqy6Awii89">Kutighat Baranagar Bazar</a></li>
                                   <li><a href="https://goo.gl/maps/9U8wYcagqy6Awii89">Baranagar, West Bengal</a></li>
                               </ul>
                               <!-- Form -->
<!--                                <div class="footer-form" >-->
<!--                                    <div id="mc_embed_signup">-->
<!--                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"-->
<!--                                        method="get" class="subscribe_form relative mail_part">-->
<!--                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"-->
<!--                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"-->
<!--                                            onblur="this.placeholder = ' Email Address '">-->
<!--                                            <div class="form-icon">-->
<!--                                              <button type="submit" name="submit" id="newsletter-submit"-->
<!--                                              class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>-->
<!--                                            </div>-->
<!--                                            <div class="mt-10 info"></div>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>