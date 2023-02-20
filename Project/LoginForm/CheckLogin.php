<?php
$user = $_POST['user'];
$pwd = $_POST['pwd'];

if ($user == "user1" && $pwd == 123) {
    session_start();
    $_SESSION['user'] = $user;
    echo "Welcom $_SESSIO[user]";
} else {
    header("Location: login.php");
}

?>

<a href="logout.php">LogOut</a>