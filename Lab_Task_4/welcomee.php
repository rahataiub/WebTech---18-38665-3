

<?php include 'admin profile dashboard.php'; ?>
<?php 
session_start();

if (isset($_SESSION['name'])) {
	echo "<h3> Welcome ".$_SESSION['name']."</h3>";
}
else{
		header("location:loginpage.php");
		// echo "<script>location.href='loginpage.php'</script>";
	}

 ?>
 
	<?php
	include 'end.php';
	?>