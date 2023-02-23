<?php
include 'connection.php';
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if ($uid == "root" && $pwd == 123) {
    session_start();
    $_SESSION['uid'] = $uid;
    header('Location: view1.php');
} else {
    header("Location: login.php");
}

?>

<a href="logout.php">LogOut</a>