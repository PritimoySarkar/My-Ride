<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include ("../php/connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $decoded = unserialize($_POST['data']);
    $bid=$decoded['bid'];
    if($approve=mysqli_query($conn,"UPDATE `booking` SET status = 'Rejected' WHERE bid=$bid")){
        echo "Approved";
        ?>
        <script>
            swal("Approved");
        </script>
        <?php
    }
    else{
        echo "Ride approval failed";
    }
}
else{
    ?>
    <script>
        swal("alert");
    </script>
    <?php
}
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("alert");
</script>
<?php

?>