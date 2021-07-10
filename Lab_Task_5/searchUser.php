
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
 <fieldset style="width: 25%;">      
        <legend>Search</legend>

    

    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findUser.php">
    
      <input type="text" name="user_name" />
      <input type="submit" name="findUser" value="Search by name"/>

    </form>

</fieldset>  
 
  </body>
</html>