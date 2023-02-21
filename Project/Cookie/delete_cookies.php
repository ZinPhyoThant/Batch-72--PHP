<?php
 setcookie("exercise","",time()-3600);
 setcookie("exercise['name']","",time()-3600);
 setcookie("exercise['city']", "",time()-3600);
 setcookie("exercise['state']", "",time()-3600);
 setcookie("exercise['zip']", "",time()-3600);
 echo "all cookies are deleted";

?>
<br><br><br>
<a href="./check_cookies.php">Check Cookies</a>
<a href="./delete_cookies.php">Delete Cookies</a>
<a href="./cookies_redirect.php">Go to Form</a>