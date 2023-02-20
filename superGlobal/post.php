<?php
    if (isset($_POST['submit'])){
      $username = $_POST['uname'] ;
      echo "Welcome $username";
    }
?>

<form method="POST">
    <input type="text" name="uname"><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
