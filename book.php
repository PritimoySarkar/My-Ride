<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

    include ("php/connection.php");
    $decoded = unserialize($_POST['data']);
    $source = $decoded['source'];
    $destination = $decoded['destination'];
    $uid=$_SESSION['user']['uid'];
    $cid=$decoded['cid'];
    $rid=$decoded['rid'];
    $did=$decoded['did'];
    $cost=0;
    $current=date("Y-m-d H-i-s");
    $startD= date("Y-m-d", strtotime($decoded['startDate']));
    $endD= date("Y-m-d", strtotime($decoded['endDate']));
    $start=strtotime($decoded['startDate']);
    $end=strtotime($decoded['endDate']);
    $days=($end-$start)/60/60/24;
    $route_qr=mysqli_query($conn,"SELECT * FROM `route` WHERE rid=$rid");
    $car_qr=mysqli_query($conn,"SELECT * FROM `car` WHERE cid=$cid");
    $mode=$decoded['mode'];
    if($route_qr and $car_qr){
        $car=mysqli_fetch_array($car_qr);
        $route=mysqli_fetch_array($route_qr);
        $cost=$car['farepkm']*$route['distance'];
        if($mode=='day'){
            $days+=1;
        }
        $cost=$cost+($days*$car['farepd']);
        $insert=mysqli_query($conn,"INSERT INTO `booking`(`uid`, `rid`, `source`, `destination`, `startdate`, `enddate`, `hire_type`, `cid`, `did`, `status`, `cost`, `timing`) VALUES ($uid,$rid,'$source','$destination','$startD','$endD','$mode',$cid,$did,'Pending',$cost,'$current')");
        if($insert){
            ?>
            <script>
                alert("Booking successful");
                swal('Gotcha!', 'Booking requested successfully', 'success');
                window.location.href="user/profile.php";
            </script>
            <?php
        }
        else{
            ?> <script>alert("Booking Error");window.location.href="booking.php";</script> <?php
        }
    }
    else{
        ?> <script>alert("Route fetching error")</script> <?php
    }
?>