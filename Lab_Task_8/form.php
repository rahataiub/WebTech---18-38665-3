  <!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="Profile.css">

  <script type="text/javascript" src="form.js"></script>

<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php include 'head.php'; ?>
<br><br>
   <fieldset style="width:50%; align-content: center;">
<legend>Registration</legend>     


<form action="" method="POST" enctype="multipart/form-data"> 

  <label for="name">Name:</label>
  <input type="text" name="name" id="name"  onblur="namevalid()">
  <label class="error" id="nameerr">* Name cannot  empty.</label> <br><br>
      

      <label for="username">Username:</label>
  <input type="text" name="username" id="username" onblur="uservalid()">
  <label class="error" id="usererr">* Username cannot  empty.</label>   <br> <br>


<label for="email">E-mail:</label>
  <input type="text" name="email" id="email" onblur="emailvalid()">
  <label class="error" id="emailerr">* E-mail cannot  empty.</label> <br> <br>


    <label for="password">Password:</label>
  <input type="password" name="password" id="password" onblur="passvalid()">
  <label class="error" id="passerr">* Password cannot  empty.</label><br> <br>
 

      
  <label for="conpass">Confirm Password:</label>
  <input type="password" name="cp" id="cp" onblur="cpvalid()">
  <label class="error" id="cperr">* Confirm Password cannot  empty.</label><br> <br>

  <br>
  

<fieldset>
    <legend>Gender</legend>

 <input type="radio" name="gender" > Female 

 <input type="radio" name="gender"> Male
  
<input type="radio" name="gender"> Other

  </fieldset>
  <br><br>
  <fieldset>
  <legend>Date of Birth:</legend>
  <input type="date" name="dob" id="dob" onblur="dobvalid()">
  <label class="error" id="doberr">* DOB required .</label>
   <br><br>
  </fieldset>
<br>

<input type="submit" name="Submit" value="Submit"> 

<?php //echo $message; ?>


</fieldset>
</form>

<br><br>

  <?php include "foter.php"; ?>

</body>
</html>