<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include ("../php/connection.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $decoded = unserialize($_POST['data']);
        $bid=$decoded['bid'];
        if($approve=mysqli_query($conn,"UPDATE `booking` SET status = 'Approved' WHERE bid=$bid")){
                echo "<h1 style='text-align: center'>Ride Approved</h1>";
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal("Ride Approved",'Going back to dashboard','success',{
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal("No booking id found to approve");
            </script>
        <?php
    }
?>
<?php

?>