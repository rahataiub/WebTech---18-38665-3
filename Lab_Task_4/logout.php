<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:loginpage.php");
	
}

else{
	header("location:loginpage.php");
}

 ?>