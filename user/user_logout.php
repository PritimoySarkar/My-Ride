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
        session_start();
        session_destroy();
        //unset($_SESSION['user']);
        ?>
        <script  type="text/javascript">
            alert("Logged out successfully");
            window.location.href="user_login.php";
        </script>
        <?php
    }
?>