<?php include("php/connection.php");
include ('php/checkuser.php');
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
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_SESSION['user'])){
            $uid = $_SESSION['user']['uid'];
        }
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
//                print_r($_POST);
//                echo $_POST['source'];
//                echo $source;
                if($qr=mysqli_query($conn,"select * from car where cseat>=$headCount and ctype='$type'")){
//                    var_dump($_POST);
                    if($source==$destination){
                        echo "<img id='bg' src='assets/img/error/error.jpg'>";
                        ?>
                        <style>
                            #whole-body {
                                /* The image used */
                                display: none;
                            }
                            #bg{
                                background-repeat: no-repeat;
                                width: 100%;
                                height: 100%;
                                size: auto;
                            }
                        </style>
                        <script>
                            //alert("Source and Destination must be different");
                            //window.location.href="booking.php";
                            swal('Same source & destination','Source and destination must be different','error',{buttons: {
                                    catch: {
                                        text: 'Go to Booking',
                                        value: 'catch',
                                    },
                                },closeOnClickOutside: false,
                            },).then((value) => {
                                switch (value) {
                                    case 'catch':
                                        window.location.href='booking.php';
                                        break;
                                }
                            });
                        </script> <?php
                    }
                    else{
                        if($route=mysqli_query($conn,"SELECT * FROM `route` WHERE (source='$source' or destination='$source') and (source='$destination' or destination='$destination')")){
                            if(mysqli_num_rows($route)>0){
                                $route_val=(mysqli_fetch_array($route));
                                $rid=$route_val['rid'];
                                $current=date("Y-m-d");
                                $today=strtotime($current);
                                $start=strtotime($startDate);
                                $end=strtotime($endDate);
                                $distance=$route_val['distance'];
                                if($end<$start or $today>$start){
                                    echo "<img id='bg' src='assets/img/error/error.jpg'>";
                                    ?>
                                    <style>
                                        #whole-body {
                                            /* The image used */
                                            display: none;
                                        }
                                        #bg{
                                            background-repeat: no-repeat;
                                            width: 100%;
                                            height: 100%;
                                            size: auto;
                                        }
                                    </style>
                                    <script>
                                        //alert("Source and Destination must be different");
                                        //window.location.href="booking.php";
                                        swal('Date Error','Pick up date must not be before today and drop off day must not be before pick up date','error',{buttons: {
                                                catch: {
                                                    text: 'Go to Booking',
                                                    value: 'catch',
                                                },
                                            },closeOnClickOutside: false,
                                        },).then((value) => {
                                            switch (value) {
                                                case 'catch':
                                                    window.location.href='booking.php';
                                                    break;
                                            }
                                        });
                                    </script>
                                    <?php
                                }
                                else{
//                                    echo "ALL SET UP";
                                }
                            }
                            else{
                                ?><script>alert("No route available between source and destination");window.location.href="booking.php";</script><?php
                            }
                        }
                        else{
                            ?><script>alert("Route fetching error")</script><?php
                        }
                    }
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
    <style>.swal-overlay {background-image: url("assets/img/error/success.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
</head>

<body style="background-color: #a7907b40">
<div id="background"></div>
<div id="whole-body">

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
                                    <!--                                                <li><a href="user/user_register.php">Blog Details</a></li>-->
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
                            <a href="#" class="btn btn1 d-none d-lg-block" id="profile">Book Online</a>
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
                    <thead class="thead-dark" style="font-size: small">
                    <tr>
                        <th scope="col" width="10%">Car Photo</th>
                        <th scope="col">Car Brand</th>
                        <th scope="col">Car Model Name</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Car Color</th>
                        <th scope="col" width="7%">Car Driver</th>
                        <th scope="col">Passenger Capacity</th>
                        <th scope="col" width="5%">Rate per Km</th>
                        <th scope="col" width="10%">Rate per Day</th>
                        <th scope="col" width="10%">Total Cost</th>
                        <th scope="col" width="10%">Request for Booking</th>
                    </tr>
                    </thead>
            <?php
                }
            ?>
            <tbody>
            <?php
                while ($row=mysqli_fetch_array($qr)){
                    $cid=$row['cid'];
                    $cost=0;
                    $path="admin/".$row['pic'];
                    $did=$row['did'];
                    $brand=$row['brand'];
                    $name=$row['cname'];
                    $driver=mysqli_query($conn,"Select dname,pic from driver where did=$did");
                    while ($drow=mysqli_fetch_array($driver)){
                        $dpic = "admin/".$drow['pic'];
                        $dname= $drow['dname'];
                    }
                    $dview='driverview.php?'.$did;

                    $start=strtotime($startDate);
                    $end=strtotime($endDate);
                    $days=($end-$start)/60/60/24;
                    if($mode=='day'){
                        $days+=1;
                    }
                    $cost=($days*$row['farepd'])+($row['farepkm']*$distance);
            ?>
            <tr>
                <th scope="row"><img class="img-fluid" src="<?php echo $path?>"></th>
                <td style="vertical-align: middle"><?php echo $row['brand']?></td>
                <td style="vertical-align: middle"><?php echo $row['cname']?></td>
                <td style="vertical-align: middle"><?php echo $row['category']?></td>
                <td style="vertical-align: middle"><?php echo $row['ccolor']?></td>
                <td style="vertical-align: middle"><a href="<?php echo $dview?>"><img title="<?php echo $dname?>" class="img-fluid rounded-circle" src="<?php echo $dpic?>" style="width: 100px;height: 100px;" title="<?php echo $dname;?>"></a></td>
                <td style="vertical-align: middle"><?php echo $row['cseat']?></td>
                <td style="vertical-align: middle"><?php echo '₹ '.$row['farepkm']?></td>
                <td style="vertical-align: middle"><?php echo '₹ '.$row['farepd']?></td>
                <td style="vertical-align: middle"><?php echo '₹ '.$cost?></td>
                <td style="vertical-align: middle">
<!--                    <button data-whatever="abc" class="btn-outline-info btn btn-primary" type="button" data-toggle="modal" data-target="#staticBackdrop">Book This Car</button>-->
<!--                    <button type="button" onclick="swal('Confirm Booking','Are U sure? you want to book this car','info')" class="btn-outline-info btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" data-whatever="@getbootstrap">Book This Car</button>-->
                    <form method="post" action="book.php" id="bokking-form<?php echo $cid?>">
                        <?php $arr = [
                            'cid' => $cid,
                            'did' =>$did,
                            'uid' =>$_SESSION['user']['uid'],
                            'source' => $source,
                            'destination' => $destination,
                            'startDate' => $startDate,
                            'endDate' => $endDate,
                            'mode' => $mode,
                            'rid' => $rid
                        ];
                        ?>
                        <input type="hidden" name="data" value="<?php echo htmlentities(serialize($arr)); ?>">
                        <input style="font-size: medium" onclick="
                        swal('Confirm Booking','Are U sure? you want to book this car','info',{buttons: {
                            cancel: 'No\, Don\'t Book',

                            catch: {
                                text: 'Yes\, Book Now',
                                value: 'catch',
                                },
                            },closeOnClickOutside: false,
                        },).then((value) => {
                            switch (value) {
                                case 'catch':
                                swal('Gotcha!', 'Booking requested successfully', 'success');
                                $('#bokking-form<?php echo $cid?>').submit();
                                break;

                        default:
                        swal('Booking canceled','','warning');
                        }
                        });
"
                               class="btn btn-primary" value="<?php echo 'Book '.$name;?>"
                        />
                    </form>
                </td>
            </tr>
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
    <script type="text/javascript">
        $('#staticBackdrop').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
</body>
</html>
