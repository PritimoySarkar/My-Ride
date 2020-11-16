<?php
include ("../php/connection.php");
if(!isset($_SESSION['user'])){
    ?>
    <script type="text/javascript"> window.location.href="user_login.php" </script><?php
}
//Profile view variables
$today = date("Y-m-d");
$dob=$_SESSION['user']['dob'];
$diff = (date('Y') - date('Y',strtotime($dob)));
//$age = format('%yYears, %mMonths, %dDays');
$uid=$_SESSION['user']['uid'];
$profile_qr=mysqli_query($conn,"select * from user where uid=$uid");
$profile=mysqli_fetch_array($profile_qr);
$name=$profile['name'];
$email=$profile['email'];
$gender=$profile['gender'];
$number=$profile['phno'];
$pic=$profile['pic'];
$join=$_SESSION['user']['doj'];
$imgpath='../'.$pic;

//Booking Details
$pending_qr=mysqli_query($conn,"select * from booking where uid=$uid and status='pending'");
$approved_qr=mysqli_query($conn,"select * from booking where uid=$uid and status='approved'");
$rejected_qr=mysqli_query($conn,"select * from booking where uid=$uid and status='rejected'");
$pending_count = mysqli_num_rows($pending_qr);
$approved_count = mysqli_num_rows($approved_qr);
$rejected_count = mysqli_num_rows($rejected_qr);
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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
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

    <style>
        .btn-grad {background-image: linear-gradient(to right, #e25f08 0%, #ffcc33  51%, #73ef64 100%)}
        .btn-grad {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            font-size: xx-large;
            font-weight: bolder;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: #ffffff;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
        }

        .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #e54545;
            text-decoration: none;
            cursor: pointer;
        }

    </style>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                    <!--                                        <li><a href="blog.html">Blog</a>-->
                                    <!--                                            <ul class="submenu">-->
                                    <!--                                                <li><a href="blog.html">Blog</a></li>-->
                                    <!--                                                <li><a href="user/user_register.php">Blog Details</a></li>-->
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
                            <a href="user_logout.php" class="btn btn1 d-none d-lg-block ">Log Out</a>
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
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="../assets/img/background/registration.jpg" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>Profile</span>
                            <h2>Your profile - let us know you</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <div style="padding-top: 50px;padding-bottom: 50px;">
            <div class="container">
                <div class="row" style="text-align: center">
                    <div class="col">
                        <?php
                            if($pic==''){
                                ?>
                                <img src="../assets/img/adapt_icon/user.jpg" class="img-fluid rounded-circle img-thumbnail" alt="Responsive image" width="400px">
                                <?php
                            }else{
                        ?>
                            <img src="<?php echo $imgpath?>" class="img-fluid rounded-circle img-thumbnail" alt="Responsive image" width="400px">
                        <?php
                            }
                        ?>
                    </div>
                    <div class="col" style="align-self: center">
                        <table class="table table-borderless table-striped table-dark" style="text-align: center;font-size: x-large;color: #ccac4b;border-bottom-right-radius: 50px;border-top-left-radius: 50px;">
                            <tbody>
                            <tr>
                                <th scope="col">Name</th>
                                <td><?php echo $name?></td>
                            </tr>
                            <tr class="table-dark" style="color: #8a6d0b">
                                <th scope="row">Gender</th>
                                <td><?php echo $gender?></td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth</th>
                                <td><?php echo $dob?></td>
                            </tr>
                            <tr class="table-dark" style="color: #8a6d0b">
                                <th scope="row">Age</th>
                                <td><?php echo $diff?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><?php echo $email?></td>
                            </tr>
                            <tr class="table-dark" style="color: #8a6d0b">
                                <th scope="row">Phone Number</th>
                                <td><?php echo $number?></td>
                            </tr>
                            <tr>
                                <th scope="row">Joining</th>
                                <td><?php echo $join?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <form method="post" action="edit.php">
                <input type="hidden" name="userID" value="<?php echo $uid;?>">
            <button class="btn-grad" type="submit" name="edit-btn" value="Edit">Edit Profile</button>
            </form>
        </center>
        <div class="container-fluid center">
            <?php
            if($pending_count==0 and $approved_count==0 and $rejected_count==0){
                ?><h1 style="text-align: center;font-family: 'Lato', sans-serif;font-size: 50px;font-weight: 700;color: #48423d">No Booking record found</h1><?php
            }
            else{
                if($pending_count>0){
                    ?>
                    <div>
                        <div class="container-fluid" style="padding-top: 50px;">
                            <?php
                            if(mysqli_num_rows($pending_qr)>0){
                                ?> <h2  style="text-align: center;font-family: 'Lato', sans-serif;font-size: 50px;font-weight: 700;color: #c67228;margin-bottom: 20px;">Your Pending Booking Requests</h2> <?php
                            }
                            ?>
                            <table class="table table-striped center table-warning table-bordered" style="font-size: large;font-weight: bold;text-align: center;">
                                <?php
                                if(mysqli_num_rows($pending_qr)){
                                    ?>
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Car</th>
                                        <th scope="col">Driver</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Pick up Date</th>
                                        <th scope="col">Drop off Date</th>
                                        <th scope="col">Hire type</th>
                                        <th scope="col" width="10%">Cost</th>
                                        <th scope="col" width="10%">Cancel Button</th>
                                    </tr>
                                    </thead>
                                    <?php
                                }
                                ?>
                                <tbody>
                                <?php
                                while ($row=mysqli_fetch_array($pending_qr)){
                                    extract($row);
//                            var_dump($row);
                                    $driver_qr=mysqli_query($conn,"select dname,pic from driver where did=$did");
                                    $user_qr=mysqli_query($conn,"select name,pic from user where uid=$uid");
                                    $car_qr=mysqli_query($conn,"select brand,cname,pic from car where cid=$cid");
                                    $driver=mysqli_fetch_array($driver_qr);
                                    $user=mysqli_fetch_array($user_qr);
                                    $car=mysqli_fetch_array($car_qr);
                                    $dpic='../admin/'.$driver['pic'];
                                    $cpic='../admin/'.$car['pic'];
                                    $startD=date("d/m/y",strtotime($startdate));
                                    $endD=date("d/m/y",strtotime($enddate));
                                    $mode='';
                                    if($hire_type=='day'){
                                        $mode='Full Day';
                                    }
                                    else{
                                        $mode='Release car on journey completion';
                                    }
//                            var_dump($driver);
//                            var_dump($user);
//                            echo $source;
                                    ?>
                                    <tr>
                                        <th scope="row"><img title="<?php echo $car['brand'].': '.$car['cname']?>" class="img-fluid" src="<?php echo $cpic?>" style="width: 200px"></th>
                                        <th scope="row"><img title="<?php echo $driver['dname']?>" class="img-fluid rounded-circle" src="<?php echo $dpic?>" style="width: 100px"></th>
                                        <td style="vertical-align: middle"><?php echo $source?></td>
                                        <td style="vertical-align: middle"><?php echo $destination?></td>
                                        <td style="vertical-align: middle"><?php echo $startD?></td>
                                        <td style="vertical-align: middle"><?php echo $endD?></td>
                                        <td style="vertical-align: middle"><?php echo $mode?></td>
                                        <td style="vertical-align: middle"><?php echo '₹ '.$cost?></td>
                                        <td style="vertical-align: middle">
<!--                                            <button class="btn-outline-info" placeholder="Some" value="car" name="book" type="button" data-toggle="modal" data-target="#staticBackdrop">Cancel this Ride</button>-->
                                            <form method="post" action="cancel.php" id="cancel-form<?php echo $bid?>">
                                                <?php $arr = [
                                                    'bid' => $bid
                                                ];
                                                ?>
                                                <input type="hidden" name="data" value="<?php echo htmlentities(serialize($arr)); ?>">
                                                <input onclick="
                                                        swal('Cancel Ride','Are U sure? you want to cancel this ride','info',{buttons: {
                                                        cancel: 'No\, Don\'t Cancel',

                                                        catch: {
                                                        text: 'Yes\, Cancel Now',
                                                        value: 'catch',
                                                        },
                                                        },closeOnClickOutside: false,
                                                        },).then((value) => {
                                                        switch (value) {
                                                        case 'catch':
                                                        swal('Canceled', 'Ride canceled successfully', 'success');
                                                        $('#cancel-form<?php echo $bid?>').submit();
                                                        break;

                                                        default:
                                                        swal('Ride not canceled','','warning');
                                                        }
                                                        });"
                                                       class="btn btn-primary" value="<?php echo 'Cancel this booking';?>"
                                                />
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Button trigger modal -->
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <?php

                }
                if($approved_count>0){
                    ?>
                    <div>
                        <div class="container-fluid" style="padding-top: 50px;">
                            <?php
                            if(mysqli_num_rows($approved_qr)>0){
                                ?> <h2  style="text-align: center;font-family: 'Lato', sans-serif;font-size: 50px;font-weight: 700;color: #25b125;margin-bottom: 20px;">Your Approved Booking Requests</h2> <?php
                            }
                            ?>
                            <table class="table table-striped center table-success table-bordered" style="font-size: x-large;text-align: center;">
                                <?php
                                if(mysqli_num_rows($approved_qr)){
                                    ?>
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Car</th>
                                        <th scope="col">Driver</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Pick up Date</th>
                                        <th scope="col">Drop off Date</th>
                                        <th scope="col">Hire type</th>
                                        <th scope="col">Cost</th>
                                    </tr>
                                    </thead>
                                    <?php
                                }
                                ?>
                                <tbody>
                                <?php
                                while ($row=mysqli_fetch_array($approved_qr)){
                                    extract($row);
//                            var_dump($row);
                                    $driver_qr=mysqli_query($conn,"select dname,pic from driver where did=$did");
                                    $user_qr=mysqli_query($conn,"select name,pic from user where uid=$uid");
                                    $car_qr=mysqli_query($conn,"select brand,cname,pic from car where cid=$cid");
                                    $driver=mysqli_fetch_array($driver_qr);
                                    $user=mysqli_fetch_array($user_qr);
                                    $car=mysqli_fetch_array($car_qr);
                                    $dpic='../admin/'.$driver['pic'];
                                    $cpic='../admin/'.$car['pic'];
                                    $startD=date("d/m/y",strtotime($startdate));
                                    $endD=date("d/m/y",strtotime($enddate));
                                    $mode='';
                                    if($hire_type=='day'){
                                        $mode='Full Day';
                                    }
                                    else{
                                        $mode='Release car on journey completion';
                                    }
//                            var_dump($driver);
//                            var_dump($user);
//                            echo $source;
                                    ?>
                                    <tr>
                                        <th scope="row"><img title="<?php echo $car['brand'].': '.$car['cname']?>" class="img-fluid" src="<?php echo $cpic?>" style="width: 200px"></th>
                                        <th scope="row"><img title="<?php echo $driver['dname']?>" class="img-fluid rounded-circle" src="<?php echo $dpic?>" style="width: 100px"></th>
                                        <td style="vertical-align: middle"><?php echo $source?></td>
                                        <td style="vertical-align: middle"><?php echo $destination?></td>
                                        <td style="vertical-align: middle"><?php echo $startD?></td>
                                        <td style="vertical-align: middle"><?php echo $endD?></td>
                                        <td style="vertical-align: middle"><?php echo $mode?></td>
                                        <td style="vertical-align: middle"><?php echo '₹ '.$cost?></td>
                                    </tr>
                                    <!-- Button trigger modal -->
                                    <?php

                                    ?>
                                    <!-- Modal -->
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <?php
                }
                if($rejected_count>0){
                    ?>
                    <div>
                        <div class="container-fluid" style="padding-top: 50px;">
                            <?php
                            if(mysqli_num_rows($rejected_qr)>0){
                                ?> <h2  style="text-align: center;font-family: 'Lato', sans-serif;font-size: 50px;font-weight: 700;color: #db4177;margin-bottom: 20px;">Your Rejected Booking Requests</h2> <?php
                            }
                            ?>
                            <table class="table table-striped center table-danger table-bordered" style="font-size: x-large;text-align: center;">
                                <?php
                                if(mysqli_num_rows($rejected_qr)){
                                    ?>
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Car</th>
                                        <th scope="col">Driver</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Pick up Date</th>
                                        <th scope="col">Drop off Date</th>
                                        <th scope="col">Hire type</th>
                                        <th scope="col">Cost</th>
                                    </tr>
                                    </thead>
                                    <?php
                                }
                                ?>
                                <tbody>
                                <?php
                                while ($row=mysqli_fetch_array($rejected_qr)){
                                    extract($row);
//                            var_dump($row);
                                    $driver_qr=mysqli_query($conn,"select dname,pic from driver where did=$did");
                                    $user_qr=mysqli_query($conn,"select name,pic from user where uid=$uid");
                                    $car_qr=mysqli_query($conn,"select brand,cname,pic from car where cid=$cid");
                                    $driver=mysqli_fetch_array($driver_qr);
                                    $user=mysqli_fetch_array($user_qr);
                                    $car=mysqli_fetch_array($car_qr);
                                    $dpic='../admin/'.$driver['pic'];
                                    $cpic='../admin/'.$car['pic'];
                                    $startD=date("d/m/y",strtotime($startdate));
                                    $endD=date("d/m/y",strtotime($enddate));
                                    $mode='';
                                    if($hire_type=='day'){
                                        $mode='Full Day';
                                    }
                                    else{
                                        $mode='Release car on journey completion';
                                    }
//                            var_dump($driver);
//                            var_dump($user);
//                            echo $source;
                                    ?>
                                    <tr>
                                        <th scope="row"><img title="<?php echo $car['brand'].': '.$car['cname']?>" class="img-fluid" src="<?php echo $cpic?>" style="width: 200px"></th>
                                        <th scope="row"><img title="<?php echo $driver['dname']?>" class="img-fluid rounded-circle" src="<?php echo $dpic?>" style="width: 100px"></th>
                                        <td style="vertical-align: middle"><?php echo $source?></td>
                                        <td style="vertical-align: middle"><?php echo $destination?></td>
                                        <td style="vertical-align: middle"><?php echo $startD?></td>
                                        <td style="vertical-align: middle"><?php echo $endD?></td>
                                        <td style="vertical-align: middle"><?php echo $mode?></td>
                                        <td style="vertical-align: middle"><?php echo '₹ '.$cost?></td>
                                    </tr>
                                    <!-- Button trigger modal -->
                                    <?php

                                    ?>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header" style="text-align: center">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Confirm Delete Route</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="text-align: center">
                                                    Are you sure, you want to remove this route?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal" name="yes" id="yes">Yes, Delete</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, don't delete</button>
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

                    </div>
                    <?php
                }
            }
            ?>
        </div>
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

</body>
</html>
