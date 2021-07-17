<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

</head>
<body>

   <?php include 'dashboard option.php'; ?>


<?php 
error_reporting(0);
session_start();


       
        $nameErr = $passwordErr= "";
        $name  = $password = "";
        

       foreach ($data as $row) {
           $username=$row["username"];
           $upassword=$row["password"];
        if(isset($_POST['name'])){

            if ($_POST['name']==$username && $_POST['password']==$upassword){
                $_SESSION['name']=$username;


             if(isset($_POST['remember'])){
                setcookie("name",$_POST["name"],time()+10);
                setcookie("password", $_POST["password"],time()+10);
             }   

             header("location:welcomee.php");
            }

            else{
               $nameErr="username or password invalid";
        // echo "<script>alert('uname or pass incorrect!')</script>";
            }
           }
       }


?>

<?php 

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $nameErr = " * name is required";
        } else {
            $name = test_input($_POST["username"]);
            
            if (!preg_match("/^[a-zA-Z0-9_]{2,}$/",$name)) {
            $nameErr = " * alpha numeric characters, period, dash contain at least two (2) characters allowed";
            }
        }
        if (empty($_POST["password"])) {
            $passwordErr = " * password is required";
        } else {
            $password = test_input($_POST["password"]);
            
            if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/",$password)) {
            $passwordErr = " * eight characters at least and special characters allowed eg.A,a,1-9,@, #,$";
            }
        } 
        }
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        ?>




<fieldset style="width:30%;">
<legend>LOGIN </legend>   
<form action="controller/loginload.php" method="post">
    

        <label for="username">Username:</label>
        <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br><br>
        <label for="password">Password:</label>
        <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" ><br><br>


        <input type="checkbox" name="remember" /> Remember me
    <br><br>
    <input type="submit" name="submit">

    <a href="ForgetPassword.php"> Forgot Password ? </a>
    
</form>
</fieldset>


<?php  include 'end.php'; ?>
   

</body>
</html>