<!DOCTYPE html>
<html>
<head>
    <title></title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php include 'dashboard option.php'; ?>



<?php

$errorname = $erroremail = $errorun= $errorpass = $errorcp = $errorgender= $errordob= "";
$name = $email = $username = $password = $cp = $gender = $dob = "";
 $message = ''; 
 $error = '';
$flag=true;   
 
 if ($_SERVER["REQUEST_METHOD"] == "POST")  
   
       {
        if (empty($_POST["un"])) {
            $errorun = " * uname is required";
      $flag=false; 
        } else {
            $un = test_input($_POST["un"]);
            
            if (!preg_match("/^[a-zA-Z_]{2,}$/",$un)) {
            $errorun = " * Username must be valid";
            }
        }
        if (empty($_POST["pass"])) {
            $errorpass = " * password is required";
      $flag=false;
        } else {
            $pass = test_input($_POST["pass"]);
    
    } 
    
    
        if (empty($_POST["name"])) {
            $errorname = " * name is required";
      $flag=false;
        } else {
            $name = test_input($_POST["name"]);
            
            if (!preg_match("/^[a-zA-Z_]{2,}$/",$name)) {
            $errorname = " * give a valid name";
            }
        }
        if (empty($_POST["email"])) {
            $erroremail = " * mail is required";
      $flag=false;
        } else {
            $email = test_input($_POST["email"]);
            
            if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) {
            $erroremail = " * email must be @gmail.com at the end";
            }
        } 
    
    
        if (empty($_POST["cp"])) {
            $errorcp = " * confirm pass is required";
      $flag=false;
        } else {
            $cp = test_input($_POST["cp"]);
            
        }
    
        if (empty($_POST["gender"])) {
            $errorgender = " * Gender is required";
      $flag=false;
        } else {
            $gender = test_input($_POST["gender"]);
            
        }
    
    
    
    }
    
        

    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

     
   <fieldset style="width:50%; align-content: center;">
<legend>Registration</legend>     


<form action="controller/formload.php" method="POST" enctype="multipart/form-data"> 

  <label for="name">Name:</label>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $errorname;?></span>
  <br><br>
  <label for="email">E-mail:</label>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $erroremail;?></span>
  <br><br>
  <label for="un">Username:</label>
  <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error"> <?php echo $errorun;?></span>
  <br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" value="<?php echo $password;?>" >
  <span class=""> <?php echo $errorpass;?></span>
  <br><br>
  <label for="cp">Confirm Password:</label>
  <input type="password" name="cp" value="<?php echo $cp;?>" >
  <span class=""> <?php echo $errorcp;?></span>
 

  <br><br>
  

<fieldset>
    <legend>Gender</legend><br> 
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error"> <?php echo $errorgender;?></span></fieldset>
  <br><br>
  <fieldset>
  <legend>Date of Birth:</legend>
  <input type="date" name="dob" > <br><br>
  </fieldset>


<input type="submit" name="Submit" value="Submit"> 

<?php //echo $message; ?>


</fieldset>
</form>



<?php  include 'end.php'; ?>

</body>
</html>