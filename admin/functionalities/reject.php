<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include ("../php/connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $decoded = unserialize($_POST['data']);
    $bid=$decoded['bid'];
    if($approve=mysqli_query($conn,"UPDATE `booking` SET status = 'Rejected' WHERE bid=$bid")){
        echo "<h1 style='text-align: center'>Ride Rejected</h1>";
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Ride Rejected",'Going back to dashboard','error',{
                buttons:{
                            cancel: 'Okay',
                        },
                    closeOnClickOutside: false,
            },
            ).then((value) =>{
                switch (value){
                    default:
                        // swal("Clicked");
                        window.location.href="../index.php";
                }
            });
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
<?php

?>