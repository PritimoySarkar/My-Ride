<?php session_start();
date_default_timezone_set("Asia/Kolkata");
// params -> host,username,password,database_name
$conn = mysqli_connect("localhost","root","","myride") or die(mysqli_error($conn));

if(!$conn)
{
    echo '<script type="text/javascript">alert("Database connection error")</script>';
}
else{
//    echo '<script type="text/javascript">console.log("Database Connected")</script>';
}

?>