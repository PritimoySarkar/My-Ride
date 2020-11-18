<?php include('../php/connection.php'); ?>
<?php if(isset($_SESSION['user']))
{
    ?><script type="text/javascript">
    window.location.href = "../index.php";
</script>
    <?php
} ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Ride | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
    <style>.swal-overlay {background-image: url("../assets/img/error/success.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
</head>

<body style="background-color: #a7907b40">

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <strong>Getting In</strong>
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
                            <a href="../index.php"><img src="../assets/img/logo/myRIde_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="../about.php">About</a></li>
                                    <li><a href="../booking.php">Booking</a></li>
                                    <!--                                        <li><a href="login.php">Blog</a>-->
                                    <!--                                            <ul class="submenu">-->
                                    <!--                                                <li><a href="login.php">Blog</a></li>-->
                                    <!--                                                <li><a href="single-blog.html">Blog Details</a></li>-->
                                    <!--                                            </ul>-->
                                    <!--                                        </li>-->
                                    <li><a href="../cars.php">Services</a>
                                        <ul class="submenu">
                                            <li><a href="../cars.php">Cars</a>
                                            <li><a href="../drivers.php">Drivers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <!-- header-btn -->
                        <div class="header-btn">
                            <a href="user_register.php" class="btn btn1 d-none d-lg-block ">Register</a>
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
<!-- slider Area Start-->
<div class="slider-area">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="../assets/img/background/login_bg.jpg" >
        <div class="container">
            <div class="row ">
                <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                    <div class="hero-caption">
                        <span>Log In</span>
                        <h2>Login - Book - Ride <br><br>That's simple</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <!--                    <div class="blog_left_sidebar">-->
                <h1>Hello user</h1>
                <h1>Please Login to continue...</h1>
                <br><br>
                <form method="post">
                    <table cellpadding="20px" style="margin-left: 10%; font-size: large">
                        <tr>
                            <td>User ID: </td>
                            <td>
                                <input type="email" name="email" placeholder="Enter Your Email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td>
                                <input type="password" name="password" placeholder="Enter Your Password" required>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="ok" value="Login" style="margin-left: 60%;"></td>
                        </tr>
                    </table>
                </form>

                <?php
                if(isset($_POST['ok']))
                {
                    $err = 0;

                    foreach ($_POST as $key => $value)
                    {
                        if(empty($value))
                        {
                            $err=1;
                        }
                    }
                    if($err)
                    {
                        echo "Empty fields found";
                    }
                    else {
                        extract($_POST);
                        $check = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' AND password = '$password'");
                        if(mysqli_num_rows($check)>0){
                            # user is valid
                            # fetch user data
                            $user_data = mysqli_fetch_array($check);
                            $_SESSION['user'] = $user_data;
                            ?>
                            <script>
                                //window.location.href="../index.php";
                                swal('Logged In','Logged in successfully','success',{buttons: {
                                        catch: {
                                            text: 'Go to Home',
                                            value: 'home',
                                        },
                                        cancel: 'Profile',
                                    },closeOnClickOutside: false,
                                },).then((value) => {
                                    switch (value) {
                                        case 'home':
                                            window.location.href="../index.php";
                                            break;
                                        default:
                                            window.location.href="profile.php";
                                            break;
                                    }
                                });
                            </script>
                        <?php
                        }
                        else
                        {
                            ?>
                            <script>
                                //alert("Invalid ID-pass");
                                swal('Login failed','Invalid ID or password','error',{buttons: {
                                        catch: {
                                            text: 'Retry',
                                            value: 'retry',
                                        },
                                    },closeOnClickOutside: false,
                                },).then((value) => {
                                    switch (value) {
                                        case 'retry':
                                            window.location.href="user_login.php";
                                            break;
                                    }
                                });
                        </script><?php
                        }
                    }
                }

                ?>
<!--                                    </div>-->
            </div>
            <div class="col-lg-4">
                <h1>Don't have an account?</h1>
                <br><br>
                <h2>Don't worry</h2>
                <br><br><br><br>
                <h1 style="font-size: 50pt; "><a href="user_register.php">Register</a> now.</h1>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<footer>
    <!-- Footer Start-->
    <div class="footer-area black-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo">
                            <a href="index.php"><img src="../assets/img/logo/myride-footer.png" alt=""></a>
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
<script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="../assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/animated.headline.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="../assets/js/jquery.scrollUp.min.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    var timepicker = $('#timepicker').timepicker({
        format: 'HH.MM'
    });
</script>
</body>
</html>