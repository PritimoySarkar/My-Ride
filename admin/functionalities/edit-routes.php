<?php
include ("../php/connection.php");
?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal("Alert");
    </script>
<?php
if(isset($_POST['data'])){
    $decoded = unserialize($_POST['data']);
    $rid=$decoded['rid'];
    if($edt=mysqli_query($conn,"select * from route WHERE rid=$rid")){
        if(mysqli_num_rows($edt)>0){
            $row=mysqli_fetch_array($edt);
            extract($row);
//            var_dump($_POST);
        ?>
        <div>
            <div>
                <div style="overflow-x:auto;">
                    <form method="post" style="font-weight: bold;" enctype="multipart/form-data">
                        <table cellpadding="15%" class="table-responsive" style="align-content: center">
                            <tr>
                                <td>Source</td>
                                <td>
                                    <input hidden type="text" name="rid" placeholder="Enter Source Name" value="<?php echo $rid?>" required>
                                    <input type="text" name="source" placeholder="Enter Source Name" value="<?php echo $source?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Destination:
                                </td>
                                <td>
                                    <input type="text" name="destination" placeholder="Enter Destination Name" value="<?php echo $destination?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Distance:
                                </td>
                                <td>
                                    <input type="number" name="distance" placeholder="Enter distance in Km" min="5" value="<?php echo $distance?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="center">
                                    <input type="submit" name="addRoute" value="Edit Route">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    ?>
                </div>
            </div>
        </div>
        <?php
        }
        else{
            echo "No rout found";
        }
    }
    else{
        echo "after submit";
        var_dump($_POST);
        ?>
<!--        <script>-->
<!--            alert("Route deletion failed");-->
<!--            window.location.href='../index.php';-->
<!--        </script>-->
        <?php
    }
}
elseif(isset($_POST['addRoute'])){
    var_dump($_POST);
    foreach ($_POST as $key => $value){
        if(empty($value)) {
            ?>
            <script type="text/javascript">alert("All fields are mandatory"); window.location.href="../routes.php";</script>
            <?php
        }
    }
    $rid=$_POST['rid'];
    $source=mysqli_real_escape_string($conn,$_POST['source']);
    $destination=mysqli_real_escape_string($conn,$_POST['destination']);
    $distance=mysqli_real_escape_string($conn,$_POST['distance']);
    $qr=mysqli_query($conn,"UPDATE `route` SET `source`='$source',`destination`='$destination',`distance`=$distance WHERE rid=$rid");
    if($qr){
        ?>
        <script type="text/javascript">
            alert("Route edited in the database successfully");
            window.location.href='../routes.php';
        </script>
        <?php
    }
    else{
        ?>
        <!--                        <script type="text/javascript">alert("Car add error in database"); window.location.href="../add_cars.php";</script>-->
        <?php
    }
}
else{
    ?>
    <script>
        alert("No Route ID found to edit");
        window.location.href='../index.php';
    </script>
    <?php
}
?>