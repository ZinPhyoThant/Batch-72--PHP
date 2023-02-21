<?php
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if ($uid == "root" && $pwd == 123) {
    session_start();
    $_SESSION['uid'] = $uid;
    echo "Welcome $_SESSION[uid]";
} else {
    header("Location: login.php");
}

?>

<a href="logout.php">LogOut</a>