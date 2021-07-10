<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
    <fieldset style="width: 30%;">      
        <legend>Add product</legend>

 <label for="username">Product Name</label><br>
  <input type="text" id="username" name="username"><br>

  <label for="name">Buying Price</label><br>
  <input type="text" id="name" name="name"><br>

 

  <label for="surname">Selling Price</label><br>
  <input type="text" id="surname" name="surname"><br>
 
  <label for="password">Product serial no</label><br>
  <input type="password" id="password" name="password"><br>
  
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="save">
  <input type="reset"> 
  </fieldset>   
</form> 

</body>
</html>

