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
        <?php
       
        $nameErr = $passwordErr = "";
        $uname  = $password = "";
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["uname"])) {
            $nameErr = " * name is required";
        } else {
            $uname = test_input($_POST["uname"]);
            
            if (!preg_match("/^[a-zA-Z0-9_]{2,}$/",$uname)) {
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

        function test_input($data) {
        return $data;
        }
        ?>

        
        <form  method="post" action="loginpage.php">
        <div style="position: relative; padding-left: 30%">
		<fieldset style="width: 60%;">		
        <legend>LOGIN:</legend>
        <label for="uname">User name:</label>
        <input type="text" id="uname" name="uname" value="<?php echo $uname;?>"><span class="error"> <?php echo $nameErr;?></span><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $password;?>"><span class="error"> <?php echo $passwordErr;?></span><br><br>
        <hr>
        <input type="checkbox" name="remember" value="remember">
        <label for="click"> Remember Me</label><br>
        <input type="submit" value="Submit">
        <a href="changepass.php">Forgot Password</a>
        </fieldset>
        </form>
</body>
</html>