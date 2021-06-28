
<?php

$errorname = $erroremail = $errorun= $errorpass = $errorcp = $errorgender= $errordob= "";
$name = $email = $un = $pass = $cp = $gender = $dob = "";
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
	  
        

       
   
     if ($flag==true) 
{
    if(isset($_POST["submit"]))  
    {
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"],  
                      'password'     =>     $_POST["pass"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
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
 <!DOCTYPE html>  
 <html>  
   
           <title></title>  
           <meta name="viewport" content="width=device-width, initial-scale=1">
		      <head>  

      </head>  
      <body>  
	  <?php include 'dashboard option.php'; ?>
	  
           <br />  
           <div class="container" style="width:500px;">  
		   <fieldset>
		   <legend>REGISTRATION</legend>              
                <form method="post">  
                  
                     <br />  
                     <label>Name :</label> 
                     <input type="text" name="name" class="form-control" /><?php echo $errorname;?><br />  <hr>
                     <label>E-mail :</label>
                     <input type="text" name = "email" class="form-control" /><?php echo $erroremail;?><br /><hr>
                     <label>User Name :</label>
                     <input type="text" name = "un" class="form-control" /><?php echo $errorun;?><br /><hr>
                     <label>Password :</label>
                     <input type="password" name = "pass" class="form-control" /><?php echo $errorpass;?><br /><hr>
                     <label>Confirm Password :</label>
                     <input type="password" name = "cp" class="form-control" /><?php echo $errorcp;?><br /><hr>

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
					 </fieldset><?php echo $errorgender;?>
					 <hr>
					  <fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset>
                     
                     <br><input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
		   
		   <?php  include 'end.php'; ?>
      </body>  
 </html>  