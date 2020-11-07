<?php
    session_start();
    date_default_timezone_set("Asia/Kolkata");
    $conn = mysqli_connect("localhost","root","","myride") or die(mysqli_error($conn));

    if($conn){
        ?>
<!--        <script type="text/javascript">console.log("Database Connected")</script>;-->
        <?php
    }
//    else{echo '<script type="text/javascript">console.log("Database not Connected")</script>';}

?>
