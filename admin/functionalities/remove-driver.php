<?php
include ("../php/connection.php");
?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>.swal-modal {background-color: rgba(255, 255, 255, 0.70);}</style>
    <style>.swal-overlay {background-image: url("../../assets/img/error/drifting-by.gif");background-repeat: no-repeat;width: 100%;height: 100%;background-size: cover;background-position: center;}</style>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $decoded = unserialize($_POST['data']);
    $did=$decoded['did'];
    //echo $cid;
    if($dlt=mysqli_query($conn,"DELETE FROM driver WHERE did=$did")){
        echo "<img id='bg' src='assets/img/error/success.gif'>";
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
        <script>
            swal("Driver Rejected",'Going back to dashboard','error',{
                    buttons:{
                        cancel: 'Okay',
                    },
                    closeOnClickOutside: false,
                },
            ).then((value) =>{
                switch (value){
                    default:
                        // swal("Clicked");
                        window.location.href="../index.php";
                }
            });
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Driver deletion failed");
            window.location.href='../index.php';
        </script>
        <?php
    }
}
else{
    ?>
    <script>
        alert("No Driver ID found to delete");
        window.location.href='../index.php';
    </script>
    <?php
}
?>