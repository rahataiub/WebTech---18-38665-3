<?php  
require_once '../model/model.php';


if (isset($_POST['createStudent'])) {
	$data['name'] = $_POST['name'];
	$data['surname'] = $_POST['surname'];
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo " ";
  }

  if (addStudent($data)) {
  	echo 'Data Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>