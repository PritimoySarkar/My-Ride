<?php
    include ("connection.php");
//    var_dump($_POST);
    if(isset($_POST['login'])){
//        echo "Method POST";
        $username=mysqli_real_escape_string($conn,trim($_POST['id']));
        $password=mysqli_real_escape_string($conn,trim($_POST['password']));
        if(empty($username) or empty($password)){
            ?>
            <script type="text/javascript">alert("All Fields are mandatory");
                window.location.href="../admin_login.php";
            </script>
            <?php
        }
        else{
            $qr=mysqli_query($conn,"select * from admin where email='$username' and password='$password'");
            if(mysqli_num_rows($qr)>0){
                $admin_data=mysqli_fetch_array($qr);
                $_SESSION['admin']=$admin_data;
                ?><script>window.location.href="../index.php"</script><?php
            }
            else{
                ?>
                <script type='text/javascript'>alert('Invalid Email or Password');
                window.location.href="../admin_login.php"
                </script>";
                <?php
            }
        }

}
?>
