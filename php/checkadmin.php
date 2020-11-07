<?php
if(!isset($_SESSION['admin']))
{
	?><script type="text/javascript">
		window.location.href = "login.php";
	</script>
	<?php
}
?>