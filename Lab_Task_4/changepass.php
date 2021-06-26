<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changepass</title>
</head>

<?php
	include 'admin profile dashboard.php';
	?>
<body>
<?php
    $cpassword = "old";
    $npassword = $rpassword ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit'])){
 
        $npassword = $_POST['npassword'];
        $rpassword = $_POST['rpassword'];
        if($cpassword != $_POST['cpassword']){
            $errmsg=" * old pass not machted";
        }else{
            if($npassword == $rpassword){
                $errmsg = " * Valid password";
            }
            else{
                $errmsg = " * Confirm password not machted";
            }

 

        }
        
    }
    
    function test_input($data){
        return $data;
        }
}
?>

<form method="post" action="changepass.php">  
        
		<fieldset style="width: 60%;">
        <legend>CHANGE PASSWORD</legend>
        <label for="password">Current Password:</label><br>
        <input type="password" id="cpassword" name="cpassword" ><br><br>
        
        <label for="npassword"> <p style="color:red;"> New Password:</p> </label>
        <input type="password" id="npassword" name="npassword" ><br><br>
        <label for="rpassword"><p style="color:red;">Retype New Password:</p></label>
        <input type="password" id="rpassword" name="rpassword" ><br><br> 
        <hr> 
        <input type="submit" value="Submit" name="submit">
        </fieldset>
        </form>
		
	<?php
	include 'end.php';
	?>
</body>
</html>