<?php
include('connection.php');
if(!isset($_SESSION['admin'])){
    ?>
    <script  type="text/javascript">
        alert("You are not logged in");
        window.location.href="../admin_login.php";
    </script>
    <?php
}
else{
//    var_dump($_SERVER);
    var_dump($_POST);
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $qr=array("","","","");
        if(!empty($_POST['cars'])){ $qr[0]="and brand ='".$_POST['cars']."'"; }
        if(!empty($_POST['color'])){ $qr[1]="and ccolor ='".$_POST['color']."'"; }
        if(!empty($_POST['capacity'])){ $qr[2]="and cseat ='".$_POST['capacity']."'"; }
        if(!empty($_POST['fare'])){ $qr[3]="and farepkm ='".$_POST['fare']."'"; }
        $add_qr = implode(" ", $qr);
//        echo $add_qr;
        if(empty($add_qr)){ $final_qr = "select * from car where 1"; }
        else{ $final_qr = "select * from car where 1 ".$add_qr; }
//        echo $final_qr;
        $res=mysqli_query($conn,$final_qr);
        if($res){
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                    echo $row;
                }
            }
            else{
                ?>
                    <h1>No Car found for this details</h1>
                <?php
            }
        }
        else{
            echo "DB Error";
        }
    }
}
?>
