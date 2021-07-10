<?php 

require_once 'controller/productInfo.php';
$student = fetchStudent($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
     <fieldset style="width: 30%;">      
        <legend>Edit Product</legend>
  <label for="name">Buying Price</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Selling Price</label><br>
  <input value="<?php echo $student['Surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">Product Name</label><br>
  <input value="<?php echo $student['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<br><br>
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"> 
  </fieldset> 
</form> 

</body>
</html>

