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

<table>
	<tr>
		<th>Buying P.</th>
		<th>Selling P.</th>
		<th>Product name</th>
		<th>Serial No</th>
	
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
		<td><?php echo $student['Surname'] ?></td>
		<td><?php echo $student['Username'] ?></td>
		<td><?php echo $student['Password'] ?></td>
		
	</tr>

</table>


</body>
</html>