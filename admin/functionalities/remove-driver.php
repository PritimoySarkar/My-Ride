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
    $did=$decoded['did'];
    //echo $cid;
    if($dlt=mysqli_query($conn,"DELETE FROM driver WHERE did=$did")){
        ?>
        <script>
            alert("Driver deletion successful");
            window.location.href='../index.php';
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Driver deletion failed");
            window.location.href='../index.php';
        </script>
        <?php
    }
}
else{
    ?>
    <script>
        alert("No Driver ID found to delete");
        window.location.href='../index.php';
    </script>
    <?php
}
?>