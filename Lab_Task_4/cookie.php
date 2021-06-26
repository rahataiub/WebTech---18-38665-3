<?php

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 10);
	setcookie ("password",$_POST["password"],time()+ 10);
	echo "Cookies Set Successfuly <br>";
	echo "Welcome ". $_POST["username"];
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set. I will forget you !!!!";
}

?>

<p><a href="login.php"> Go to Login Page </a> </p>