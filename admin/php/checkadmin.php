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
?>