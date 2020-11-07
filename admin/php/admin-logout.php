<?php
    if(!isset($_SESSION['admin'])){
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
            window.location.href="../admin_login.php";
        </script>
        <?php
    }
?>