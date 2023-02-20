<?php
echo "logged out successfully";

if (isset($_SESSION['user'])) {
    $userdata = $_SESSION['user'];
    echo $userdata;
}
session_start();
session_destroy();
?>

<a href="login.php">Login again</a>