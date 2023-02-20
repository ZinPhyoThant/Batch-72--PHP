<?php
    if (isset($_GET['submit'])){
      $username = $_GET['uname'] ;
      echo "Welcome $username";
    }
?>

<form method="GET">
    <input type="text" name="uname"><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
