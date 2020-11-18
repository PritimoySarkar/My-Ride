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
    <title>Hotel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
    <style>.swal-overlay {background-image: url("../assets/img/error/success.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
</head>

<body style="background-color: #a7907b40">

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
                                    <li><a href="../booking.html">Booking</a></li>
                                    <!--                                      <li><a href="../blog.html">Blog</a>-->
                                    <!--                                          <ul class="submenu">-->
                                    <!--                                              <li><a href="../blog.html">Blog</a></li>-->
                                    <!--                                              <li><a href="user_register.php">Blog Details</a></li>-->
                                    <!--                                          </ul>-->
                                    <!--                                      </li>-->
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
                            <a href="user_login.php" class="btn btn1 d-none d-lg-block ">Log In</a>
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
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="../assets/img/background/registration.jpg" >
        <div class="container">
            <div class="row ">
                <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                    <div class="hero-caption">
                        <span>Registration</span>
                        <h2>Let the journey begin</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <h1>Registration: </h1>
                <form method="post" enctype="multipart/form-data" style="font-size: 15pt;">
                    <table cellpadding="15%">
                        <tr>
                            <td>Name</td>
                            <td>
                                <input type="text" name="nm" placeholder="Your Full Name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="text" name="em" placeholder="your Email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gender
                            </td>
                            <td>

                                <input type="radio" id="male" name="gender" value="Male">
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="Female">
                                <label for="female">Female</label>
                                <input type="radio" id="other" name="gender" value="Other">
                                <label for="other">Other</label>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                <input type="password" name="pwd" placeholder="Create password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Confirm Password
                            </td>
                            <td>
                                <input type="password" name="pwd2" placeholder="Confirm password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Phone Number
                            </td>
                            <td>
                                <input type="number" name="phno" placeholder="Enter your valid contact number" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date of Birth
                            </td>
                            <td>
                                <input type="date" name="dob">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Profile Picture
                            </td>
                            <td>
                                <input type="file" name="pic">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="center">
                                <input type="submit" name="ok" value="Register">
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
                if(isset($_POST['ok']))
                {
//                    echo "POST set";
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
                        ?>
                            <script type="text/javascript">alert("All fields are mandatory")</script>
                        <?php
                    }
                    else
                    {
                        extract($_POST);
                        if($pwd!=$pwd2){
                            echo'<script>alert("Password didn\'t matched")</script>';
                        }
                        else{
//                            echo "matched";
                            $destination_pic = '';
                            // file is not empty
                            if(!empty($_FILES['pic']['name']))
                            {
                                $file_name = $_FILES['pic']['name']; // orginal file name
                                $file_size = $_FILES['pic']['size']; // bytes (by default the limit of file upload is set to 2 MB (modify php.ini to increase))
                                $file_type = $_FILES['pic']['type']; // media type
                                $file_error = $_FILES['pic']['error']; // file error
                                $file_tmp_name = $_FILES['pic']['tmp_name']; // file temp path

                                //  $date = date('d-m-Y');
                                $destination_pic = "uploaded/users/".date('d-m-Y_H-i-sa').$_FILES['pic']['name'];

                                // check if file type is jpg/png
                                if($file_type=="image/jpg" || $file_type=="image/png" || $file_type=="image/JPG" || $file_type=="image/jpeg" || $file_type=="image/JPEG" || $file_type=="image/PNG")
                                {
                                    # upload the file
                                    if(!move_uploaded_file($file_tmp_name, "../".$destination_pic)){
                                        echo "File error ".$file_error;
                                    }
//                                else{
//                                    echo "Files uploaded successfully";
//                                }
                                }
                                else
                                {
                                    echo "Invalid Image file, please upload jpg,png file only";
                                    exit;
                                }

                                $check=mysqli_query($conn,"SELECT * FROM user WHERE email='$em'");
                                if(mysqli_num_rows($check)>0)
                                {
                                    ?>
                                        <script type="text/javascript">alert("One user already exist with same email ID")</script>
                                    <?php
                                }
                                else
                                {
                                    $datetime=date("Y-m-d");
                                    $u_info="INSERT INTO user (name,email,gender,password,dob,phno,pic,doj) VALUES ('$nm','$em','$gender','$pwd','$dob','$phno','$destination_pic','$datetime')";
                                    $execute=mysqli_query($conn,$u_info) or die(mysqli_error($conn));
                                    if($execute)
                                    {
                                        echo "Registration Completed";
                                        ?>
                                        <script type="text/javascript">
                                            // redirect
                                            //window.location.href = "user_login.php";
                                            //alert("Registration Successfull");
                                            swal('Registration Successful','Registration completed successfully','success',{buttons: {
                                                    catch: {
                                                        text: 'Log In',
                                                        value: 'catch',
                                                    },
                                                },closeOnClickOutside: false,
                                            },).then((value) => {
                                                switch (value) {
                                                    case 'catch':
                                                        window.location.href='user_login.php';
                                                        break;
                                                }
                                            });
                                        </script>
                                        <?php
                                    }
                                    else{
                                        echo "Registration failed";
                                    }
                                }
                            }
                            else{
                                        $datetime=date("Y-m-d");
                                        $u_info="INSERT INTO user (name,email,gender,password,dob,phno,doj) VALUES ('$nm','$em','$gender','$pwd','$dob','$phno','$datetime')";
                                        $execute=mysqli_query($conn,$u_info) or die(mysqli_error($conn));
                                        if($execute)
                                        {
                                        echo "Registration Completed";
                                        ?>
                                        <script type="text/javascript">
                                        // redirect
                                        //window.location.href = "user_login.php";
                                        //alert("Registration Successfull");
                                        swal('Registration Successful','Registration completed successfully','success',{buttons: {
                                                catch: {
                                                    text: 'Log In',
                                                    value: 'catch',
                                                },
                                            },closeOnClickOutside: false,
                                        },).then((value) => {
                                            switch (value) {
                                                case 'catch':
                                                    window.location.href='user_login.php';
                                                    break;
                                            }
                                        });
                                    </script>
                                    <?php
                                }
                                else{
                                    echo "Registration failed";
                                }
                            }
                        }
                    }
                }
                ?>
            </div>
            <div class="col-lg-4">
                <h1>Already have an account</h1>
                <br><br>
                <h2>Then you are all set to go</h2>
                <br><br><br>
                <h1 style="font-size: 50pt; "><a href="user_login.php">Log In</a> from here.</h1>

            </div>
        </div>
    </div>
</section>

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
<script src="../assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="../assets/js/jquery.scrollUp.min.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>

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