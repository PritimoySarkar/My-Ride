<?php
include ("../php/connection.php");
?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
    <style>.swal-overlay {background-image: url("../assets/img/error/drifting-by.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $decoded = unserialize($_POST['data']);
    $bid=$decoded['bid'];
    //echo $bid;
    if($dlt=mysqli_query($conn,"DELETE FROM `booking` WHERE bid=$bid")){
        echo "<div id='custom'>
            <img id='bg' src='../assets/img/error/success.gif'>
           </div>";
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
            //alert("Ride cancellation successful");
            //window.location.href='profile.php';
            swal('Booking Canceled','Booking cancelled successfully','error',{buttons: {
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
    else{
        ?>
            <script>
                alert("Ride cancellation failed");
                window.location.href='profile.php';
            </script>
        <?php
    }
}
else{
    ?>
    <script>
        alert("No Booking ID found to delete");
        window.location.href='profile.php';
    </script>
    <?php
}
?>