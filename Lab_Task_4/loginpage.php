<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #FF0000;}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<?php include 'dashboard option.php'; ?>
<?php 
error_reporting(0);
session_start();


       
        $nameErr = $passwordErr= "";
        $name  = $password = "";
        

       $data=file_get_contents("data.json");
       $data=json_decode($data,true);

       foreach ($data as $row) {
           $username=$row["username"];
           $upassword=$row["password"];

           if(isset($_POST['name'])){

            if ($_POST['name']==$username && $_POST['password']==$upassword){
                $_SESSION['name']=$username;


             if(isset($_POST['remember'])){
                setcookie("name",$_POST["name"],time()+30);
                setcookie("password", $_POST["password"],time()+30);
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

        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <form action="cookie.php" method="post">
        <fieldset style="width: 30%;">      
        <legend>LOGIN:</legend>
        <label for="name">User name:</label>
        <input type="text" id="name" name="name" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>"><span class="error"> <?php echo $nameErr;?></span><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><span class="error"> <?php echo $passwordErr;?></span><br><br>
        <hr>
        <input type="checkbox" name="remember" value="remember">
        <label for="click"> Remember Me</label><br>
        <input type="submit" value="Submit">
    
         <a href="forget email.php">Forgot email</a>
        </fieldset>
        </form>
<?php
    include 'end.php';
    ?>
</body>
</html>