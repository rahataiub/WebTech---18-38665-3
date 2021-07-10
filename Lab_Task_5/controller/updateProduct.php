<?php  
require_once '../model/model.php';


if (isset($_POST['updateStudent'])) {
	$data['name'] = $_POST['name'];
	$data['surname'] = $_POST['surname'];
	$data['username'] = $_POST['username'];
	 $data['password'] = $_POST['password'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateStudent($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>