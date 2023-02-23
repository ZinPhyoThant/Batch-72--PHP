<?php
if(isset($_COOKIE['exercise'])){
    print_r($_COOKIE['exercise']);
} else echo "no cookies exit";
?>

<br><br><br>
<a href="./check_cookies.php">Check Cookies</a>
<a href="./delete_cookies.php">Delete Cookies</a>
<a href="./cookies_redirect.php">Go to Form</a>