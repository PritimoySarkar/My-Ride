<?php
if(!isset($_SESSION['user']))
{
	?><script type="text/javascript">
		window.location.href = "../user/login.php";
	</script>
	<?php
}
?>