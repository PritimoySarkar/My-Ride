<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
<style>.swal-overlay {background-image: url("../../assets/img/error/success.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
<?php
include ("../php/connection.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $decoded = unserialize($_POST['data']);
        $bid=$decoded['bid'];
        if($approve=mysqli_query($conn,"UPDATE `booking` SET status = 'Approved' WHERE bid=$bid")){
            echo "<img id='bg' src='../../assets/img/error/success.gif'>";
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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