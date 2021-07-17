<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #FF0000;}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
fieldset  {
  position: absolute;
  left: 500px;
  top: 150px;
}
</style>
</head>
<body>

 <?php include 'setting.php'; ?>
<?php 
error_reporting(0);
session_start();

$old="rahat123";
$new="rahat123@";

if (isset($_POST['oldd'])) {
    if ($_POST['oldd']==$old && $_POST['new']==$new) {
        $_SESSION['oldd'] = $old;
       header("location:success password msg.php");
    }
    else{
        $msg="username or password invalid";
        // echo "<script>alert('uname or pass incorrect!')</script>";
    }

}


       
        $nameErr = $passwordErr = "";
        $oldd  = $new = "";
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["oldd"])) {
            $nameErr = " * name is required";
        } else {
            $oldd = test_input($_POST["oldd"]);
        
            }
        
        if (empty($_POST["new"])) {
            $passwordErr = " * password is required";
        } else {
            $new = test_input($_POST["new"]);
           
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
        <label for="oldd">Current password:</label>
        <input type="text" id="oldd" name="oldd" value="<?php if(isset($_COOKIE["old"])) { echo $_COOKIE["old"]; } ?>"><span class="error"> <?php echo $nameErr;?></span><br><br>
        <label for="new">New password:</label>
        <input type="new" id="new" name="new"  value="<?php if(isset($_COOKIE["new"])) { echo $_COOKIE["new"]; } ?>"><span class="error"> <?php echo $passwordErr;?></span><br><br>
         <label for="new">Renew password:</label>
        <input type="new" id="new" name="new"  value="<?php if(isset($_COOKIE["new"])) { echo $_COOKIE["new"]; } ?>"><span class="error"> <?php echo $passwordErr;?></span><br><br>
        <hr>
        <input type="submit" value="Submit">
       
        </fieldset>
        </form>
</body>
</html>