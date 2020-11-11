<?php include("php/connection.php");
include ('php/checkuser.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $uid = $_SESSION['user']['uid'];
        if(isset($_POST['search'])){
            $flag = 0;
            foreach ($_POST as $key => $value){
//                                    echo $key." ".$value."<br>";
                if(empty($value)){
                    $flag=1;
                    break;
                }
            }
            if($flag==1){
                echo '<script>alert("All field must be filled for searching");window.location.href="booking.php"</script>';
            }
            else{
                extract($_POST);
                if($qr=mysqli_query($conn,"select * from car where cseat>=$headCount")){
//                    while ($row=mysqli_fetch_array($qr)){
//                        var_dump($row);
//                        echo $row['pic'];
//                    }
                }
            }
        }
    }
    else{
        ?><script>alert("No booking booking details given");window.location.href="cars.php";</script><?php
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Ride | Booking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
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
                            <a href="index.html"><img src="assets/img/logo/myRIde_logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="booking.pho">Booking</a></li>
                                    <!--                                        <li><a href="blog.html">Blog</a>-->
                                    <!--                                            <ul class="submenu">-->
                                    <!--                                                <li><a href="blog.html">Blog</a></li>-->
                                    <!--                                                <li><a href="user/user_register.php">Blog Details</a></li>-->
                                    <!--                                            </ul>-->
                                    <!--                                        </li>-->
                                    <li><a href="cars.php">Services</a>
                                        <ul class="submenu">
                                            <li><a href="cars.php">Cars</a>
                                            <li><a href="drivers.php">Drivers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <!-- header-btn -->
                        <div class="header-btn">
                            <a href="#" class="btn btn1 d-none d-lg-block ">Book Online</a>
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
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/background/booking.jpg" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>Booking</span>
                            <h2>Just Book and we'll meet at your place</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" style="padding-top: 50px;">
        <table class="table table-striped center" style="font-size: x-large;text-align: center;">
            <?php
                if(mysqli_num_rows($qr)){
                    ?>
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" width="20%">Car Photo</th>
                        <th scope="col">Car Brand</th>
                        <th scope="col">Car Model Name</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Car Color</th>
                        <th scope="col">Car Driver</th>
                        <th scope="col">Passenger Capacity</th>
                        <th scope="col">Rate per Km</th>
                        <th scope="col">Rate per Day</th>
                        <th scope="col">Request for Booking</th>
                    </tr>
                    </thead>
            <?php
                }
            ?>
            <tbody>
            <?php
                while ($row=mysqli_fetch_array($qr)){
                    $cid=$row['cid'];
//                    $cost=;
                    $path="admin/".$row['pic'];
                    $did=$row['did'];
                    $driver=mysqli_query($conn,"Select dname,pic from driver where did=$did");
                    while ($drow=mysqli_fetch_array($driver)){
                        $dpic = "admin/".$drow['pic'];
                        $dname= $drow['dname'];
                    }
                    $dview='driverview.php?'.$did;
            ?>
            <tr>
                <th scope="row"><img class="img-fluid" src="<?php echo $path?>"></th>
                <td style="vertical-align: middle"><?php echo $row['brand']?></td>
                <td style="vertical-align: middle"><?php echo $row['cname']?></td>
                <td style="vertical-align: middle"><?php echo $row['ctype']?></td>
                <td style="vertical-align: middle"><?php echo $row['ccolor']?></td>
                <td style="vertical-align: middle"><a href="<?php echo $dview?>"><img class="img-fluid" src="<?php echo $dpic?>" style="width: 100px;height: 100px;" title="<?php echo $dname;?>"></a></td>
                <td style="vertical-align: middle"><?php echo $row['cseat']?></td>
                <td style="vertical-align: middle"><?php echo $row['farepkm']?></td>
                <td style="vertical-align: middle"><?php echo $row['farepd']?></td>
                <td style="vertical-align: middle"><button class="btn-outline-info btn btn-primary" placeholder="Some" value="car" name="book" type="button" data-toggle="modal" data-target="#staticBackdrop">Book This Car</button></td>
            </tr>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="text-align: center">
                                    <h5 class="modal-title" id="staticBackdropLabel">Confirm Registration</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="text-align: center">
                                    Are you sure, you want to book this car?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Yes, Book Now</button>
                                    <button type="button" class="btn btn-primary">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>

<footer>
    <!-- Footer Start-->
    <div class="footer-area black-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                        <div class="footer-social footer-social2">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
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
                                <li><a href="#">About Mariana</a></li>
                                <li><a href="#">Our Best Rooms</a></li>
                                <li><a href="#">Our Photo Gellary</a></li>
                                <li><a href="#">Pool Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Reservations</h4>
                            <ul>
                                <li><a href="#">Tel: 345 5667 889</a></li>
                                <li><a href="#">Skype: Marianabooking</a></li>
                                <li><a href="#">reservations@hotelriver.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Our Location</h4>
                            <ul>
                                <li><a href="#">198 West 21th Street,</a></li>
                                <li><a href="#">Suite 721 New York NY 10016</a></li>
                            </ul>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                          method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                               class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
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

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

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
