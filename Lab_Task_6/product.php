<?php include 'admin profile dashboard.php'; ?>

<?php 

session_start();

if (isset($_SESSION['name'])) {
	echo "<h1> Welcome ".$_SESSION['name']."</h1>";
	echo "<h2>Welcome to product page</h2>";
	echo "<br><a href='welcomee.php'>back to welcome</a>";
}

else{
	header("location:loginpage.php");
}

 ?>



	<?php
	include 'end.php';
	?>

	
	