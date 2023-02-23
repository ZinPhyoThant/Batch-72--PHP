<?php
$name = $_POST['name'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

if (isset($name)) {
    setcookie("exercise['name']", $name);
    setcookie("exercise['city']", $city);
    setcookie("exercise['state']", $state);
    setcookie("exercise['zip']", $zip);

    // hearder("Location: profile.php"); //redirect
} else {
    echo "Error in redirect";
}
