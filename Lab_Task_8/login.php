<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Profile.css">

	<script type="text/javascript" src="log.js"></script>

</head>
<style>
.error {color: #FF0000;}
</style>
<body>

	<?php include 'head.php'; ?>
	  



 <br> <br>
<fieldset style="width:32%;">
<legend>LOGIN </legend> 

 <form action="" method="post" >
	        				
	<label for="username">Username:</label>
	<input type="text" name="username" id="username" onblur="uservalid()">
	<label class="error" id="nameErr1">* Username cannot  empty.</label>   <br> <br>
					
				
    <label for="password">Password:</label>
	<input type="password" name="password" id="password" onblur="passvalid()">
	<label class="error" id="passerr">* Password cannot  empty.</label>
					


			
			<br>

		<input type="submit" name="save" value="Save">
		</fieldset>
		</div>
	        	</div>
	</form>
</fieldset>
 <br> <br>
	        <?php include "foter.php"; ?>
	

</body>
</html>


