<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Login Error","You must log in to perform this task","warning");
</script>
<?php
if(!isset($_SESSION['user']))
{
	?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
		alert("You must log in to perform this task");
        // swal("Login Error","You must log in to perform this task","warning");
        window.location.href = "user/user_login.php";
	</script>
	<?php
}
?>