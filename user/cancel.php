<?php
include ("../php/connection.php");
?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal("Alert");
    </script>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $decoded = unserialize($_POST['data']);
    $bid=$decoded['bid'];
    //echo $bid;
    if($dlt=mysqli_query($conn,"DELETE FROM `booking` WHERE bid=$bid")){
        ?>
        <script>
            alert("Ride cancellation successful");
            window.location.href='profile.php';
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