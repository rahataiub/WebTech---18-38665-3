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

 <form action="controller/deleteProduct.php" method="POST" enctype="multipart/form-data">
     <fieldset style="width: 30%;">      
        <legend>Delete Product</legend>
  <label for="name">Buying Price</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Selling Price</label><br>
  <input value="<?php echo $student['Surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">Product Name</label><br>
  <input value="<?php echo $student['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<br><br>
  <a href="controller/deleteProduct.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
  
  </fieldset> 
</form> 

</body>
</html>

