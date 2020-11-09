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
            alert("Logged out successfully");
            window.location.href="../admin_login.php";
        </script>
        <?php
    }
?>