<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
fieldset  {
  position: absolute;
  left: 500px;
  top: 150px;
}
</style>

</head>
<body>
<?php include 'setting.php'; ?>
 
 <?php
$data = file_get_contents("data.json");
$data = json_decode($data, true);
foreach($data as $row)  
{  
  $name = $row["name"];
  $email = $row["e-mail"];
  $gender = $row["gender"];
  $dob = $row["dob"];
}
?> 

<fieldset style="width: 30%;">

<legend>PROFILE</legend>

<div style="float: center">
  <p>Name        :   <?php echo $name ?></p><hr>
  <p>Email        :   <?php echo $email ?></p><hr>
  <p>Gender        :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday      :   <?php echo $dob ?></p>
</div> 

</fieldset>
