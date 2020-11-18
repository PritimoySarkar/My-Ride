<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
<style>.swal-overlay {background-image: url("../assets/img/error/drifting-by.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
<?php
include ("../php/connection.php");
    if(!isset($_SESSION['user'])){
//        var_dump($_SESSION);
        ?>
        <script  type="text/javascript">
            alert("You are not logged in");
            window.location.href="user_login.php";
        </script>
        <?php
    }
    else{
        //session_start();
        session_destroy();
        //unset($_SESSION['user']);
        echo "<img id='bg' src='../assets/img/error/success.gif'>";
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
        <script  type="text/javascript">
            //alert("You are not logged in");
            swal('Logged Out','Logged out successfully','success',{buttons: {
                    catch: {
                        text: 'Go to Home',
                        value: 'home',
                    },
                    cancel: 'Log In',
                },closeOnClickOutside: false,
            },).then((value) => {
                switch (value) {
                    case 'home':
                        window.location.href="../index.php";
                        break;
                    default:
                        window.location.href="user_login.php";
                        break;
                }
            });
            //window.location.href="user_login.php";
        </script>
        <?php
    }
?>