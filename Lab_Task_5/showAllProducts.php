<?php  
require_once 'controller/productInfo.php';

$students = fetchAllStudents();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<fieldset style="width: 30%;">      
        <legend>Display</legend> 
<table>
	<thead>
		<tr>
			<th>   Buying (TK)  </th>
			<th>   Selling (TK)  </th>
			<th>Product name</th>
			<th>Serial no.</th>
			
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
			  
		<?php foreach ($students as $i => $student): ?>
			<tr>
			   
       



				<td><a href="showProduct.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td>
				<td><?php echo $student['Surname'] ?></td>
				<td><?php echo $student['Username'] ?></td>
				<td><?php echo $student['Password'] ?></td>
				
				<td><a href="editProduct.php?id=<?php echo $student['ID'] ?>">Edit</a>&nbsp<a href="deletepro.php?id=<?php echo $student['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset> 

</body>
</html>