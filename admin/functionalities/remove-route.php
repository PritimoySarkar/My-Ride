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
    $rid=$decoded['rid'];
    //echo $bid;
    if($dlt=mysqli_query($conn,"DELETE FROM route WHERE rid=$rid")){
        ?>
        <script>
            alert("Route deletion successful");
            window.location.href='../index.php';
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Route deletion failed");
            window.location.href='../index.php';
        </script>
        <?php
    }
}
else{
    ?>
    <script>
        alert("No Route ID found to delete");
        window.location.href='../index.php';
    </script>
    <?php
}
?>