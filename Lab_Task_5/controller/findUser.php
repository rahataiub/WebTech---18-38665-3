  <ul>
        <li><a href="../addProduct.php"> Add Product</a></li>
        <li><a href="../showAllProducts.php"> Show all Product</a></li>
        <li><a href="../searchUser.php"> Search Products</a></li>
    </ul>
 


 <fieldset style="width: 23%;">      
        <legend>Search</legend>

 <!-- [SEARCH FORM] -->
    <form method="post" action="">
      
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search by name"/>
    </form>
<?php

require_once '../model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['user_name']);
    	require_once '../showSearchedUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
?>

</fieldset> 