<!DOCTYPE html>
<html>
<head>
	
	<title>Profile Picture</title>
	
</head>
<body>
<fieldset style="width:20%;">
	<legend>Profile Picture</legend>   
<form action="upload.php" method="post" enctype="multipart/form-data">
  <img src="uploads/1.jpg" alt="Profile Picture" width="100" height="100">

   <br>
  <input type="file" name="fileToUpload" id="fileToUpload"> <br> <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>


</body>
</html>