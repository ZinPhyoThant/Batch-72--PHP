<?php
 echo "logged out successfully";

 if(isset($_SESSION['uid'])){
    $uiddata = $_SESSION['uid'];
    echo $uiddata;
 }
session_start();
 session_destroy();
 ?>
 
 <a href="login.php">Login again</a>
