

 <?php 

session_start();

if (isset($_SESSION['name'])) {
	session_destroy();
	header("location:loginpage.php");
	
}

else{
	header("location:loginpage.php");
}

 ?>