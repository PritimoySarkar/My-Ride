<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
<style>.swal-overlay {background-image: url("../../assets/img/error/success.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
<?php
include ("connection.php");
    if(!isset($_SESSION['admin'])){
//        var_dump($_SESSION);
        ?>
        <script  type="text/javascript">
            alert("You are not logged in");
            window.location.href="../admin_login.php";

        </script>
        <?php
    }
    else{
        session_start();
        session_destroy();
        ?>
        <script  type="text/javascript">
            // alert("Logged out successfully");
            // window.location.href="../admin_login.php";
            swal("Logged Out",'Logged out successfully','success',{
                    buttons:{
                        cancel: 'Login',
                    },
                    closeOnClickOutside: false,
                },
            ).then((value) =>{
                switch (value){
                    default:
                        // swal("Clicked");
                        window.location.href="../admin_login.php";
                }
            });
        </script>
        <?php
    }
?>