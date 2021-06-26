

<?php
	include 'dashboard option.php';
	?>
<body>

<?php 
    if (isset($_POST) && isset($_POST['txt'])) {

    $search = $_POST['txt'];
    $file = file('data.json');
    $found = false;

   $jsonData = json_decode(json_encode($file),true);

    foreach ($jsonData as $line) {
        if (strpos($line, $search) !== false) {
            $found = true;
            echo $line;
        }
    }
    if (!$found) {
        echo 'No match found';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check email</title>
</head>

<form method="post" action="forget email.php">  
        
		<fieldset style="width: 60%;">
        <legend>Forget password</legend>
        <label for="uname">Enter email:</label><br>
        <input type="uname" id="uname" name="uname" ><br><br>
        <hr> 
        <input type="submit" value="Submit" name="submit">
        </fieldset>
        </form>
		
	<?php
	include 'end.php';
	?>
</body>
</html>