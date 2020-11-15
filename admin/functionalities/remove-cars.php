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
    $cid=$decoded['cid'];
    //echo $cid;
    if($dlt=mysqli_query($conn,"DELETE FROM car WHERE cid=$cid")){
        ?>
        <script>
            alert("Car deletion successful");
            window.location.href='../index.php';
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Car deletion failed");
            window.location.href='../index.php';
        </script>
        <?php
    }
}
else{
    ?>
    <script>
        alert("No Car ID found to delete");
        window.location.href='../index.php';
    </script>
    <?php
}
?>