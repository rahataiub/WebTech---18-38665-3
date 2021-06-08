<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body {
  background-color: LightBlue;
}

</style>
</head>
<body>  

<h3>EXPERIMENT NAME - </h3>
<p>Designing HTML form using PHP with validation of users inputs.</p>
<h3>OBJECTIVE</h3>
<p>This assignment item is designed to give you some practice on validating user input using PHP.</p>
<?php

    $nameErr = $emailErr = $yyyyErr = $dobErr = $degreeErr = $genderErr = $ddErr = $bgErr = $mmErr = "";
    $name = $email = $gender = $degree = $dob = $bg = $dd = $mm = $yyyy =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";} 
	else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name=""; }
	  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";} 
	else {
    $email = test_input($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email="";}
	  }
    

   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  
  $d=$_POST["degree"];

  if (empty($_POST["degree"])) {
    $degreeErr = " Select at least two";} 
	else {
  $degree = test_input($_POST["degree"]);} 


  if (empty($_POST["bg"])) {
    $bgErr = "Blood group is required * "; } 
	else {
    $bg = test_input($_POST["bg"]); }

if (empty($_POST["dd"])) {
    $ddErr = "";} 
	else {
    $dd = test_input($_POST["dd"]);}

if (empty($_POST["mm"])) {
    $mmErr = "";}
	else {
    $mm = test_input($_POST["mm"]);}

  if (empty($_POST["yyyy"])) {
    $yyyyErr = "";} 
	else {
    $yyyy = test_input($_POST["yyyy"]); }}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <b>NAME:</b><br>
  <input type="text" name="name" pattern="[A-Za-z]{5}" title="Two word at least" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  

  
  <br><br>
  <b>EMAIL:</b><br><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <b>DATE OF BIRTH:</b><br>
 <br><div style=" float: left; margin-left:5px">
 <label >DD</label></div>
 <div style=" float: left; margin-left:15px">
 <label >MM</label></div>
 <div style=" float: left; margin-left:15px">
 <label >YYYY</label></div>


 <br><input type="text" name="dd" style="width: 20px; float: left;">
<label style="float: left;">&nbsp/&nbsp</label>
<input type="text" name="mm" style="width: 20px; float: left;">
 <label style="float: left;">&nbsp/&nbsp</label>
 <input type="text" name="yyyy" style="width: 50px; float: left;">
 <span class="error">* <?php echo $dobErr;?></span><br><br>
 <b>GENDER</b><br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br><b>
  DEGREE
  </b> <br>
  
  <input type="checkbox" name="degree" id="ssc" value="SSC" >
  <label for="ssc">SSC</label>
  <input type="checkbox" name="degree" id="hsc" value="HSC" >
  <label for="hsc">HSC</label>
  <input type="checkbox" name="degree" id="bsc" value="BSc" >
  <label for="bsc">BSC</label>
  <input type="checkbox" name="degree" id="msc" value="MSc" >
  <label for="msc">MSC</label>
  <span class="error">* <?php echo $degreeErr;?></span>
  
  <br><br><b>BlOOD GROUP</b><br>
 <select name="bg">
 <option disabled="select" selected="select"></option>
 <option>
 A+
 </option>
 <option>
 A-
 </option>
 <option>
 B+
 </option>
 <option>
 B-
 </option>
 <option>
 O+
 </option>
 <option>
 O-
 </option>
 <option>
 AB+
 </option>
 <option>
 AB-
 </option>
 </select>
  <span class="error">* <?php echo $bgErr;?></span>
<br><br><br><br> 
<input type="submit" name="submit" value="Submit"> 
</form>
<?php
echo "<h3>Your Input:</h3>";



echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $dd ;
echo "<br>" ;
echo $mm;
echo "<br>";
echo $yyyy;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bg;
echo "<br>";
?>
</body>
</html>