<?php  
require_once '../model/model.php';

 session_start();


if (isset($_POST['submit'])) {

   
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['password'];


  if (check($data)) {

     $_SESSION['username'] = $data['username'];
  	
      header('Location: ../welcomee.php');
     
  }
  else {
    //$_SESSION['username'] = $data['username'];
        echo 'You are not allowed to access this page.';
}



}


 

?>